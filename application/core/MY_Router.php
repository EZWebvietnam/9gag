<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* load the MX_Router class */
require APPPATH."third_party/MX/Router.php";

class MY_Router extends MX_Router {

	var $route_path;
	var $route_params = array();
	
	var $module;
	
	function __construct () {
		parent::__construct();
	}
	
	function set_module($module){
		$this->module = $module;
	}
	
	function _validate_request($segments) {
		if (count($segments) == 0) return $segments;
		
		/* locate module controller */
		if ($located = $this->locate($segments)) return $located;
		
		/* use a default 404_override controller */
		if (isset($this->routes['404_override']) AND $this->routes['404_override']) {
			$segments = explode('/', $this->routes['404_override']);
			if ($located = $this->locate($segments)) return $located;
		}
		
		/* no controller found */
		show_404();
	}
	/**
	 *  Parse Routes
	 *
	 * This function matches any routes that may exist in
	 * the config/routes.php file against the URI to
	 * determine if the class/method need to be remapped.
	 *
	 * @access	private
	 * @return	void
	 */
	function _parse_routes()
	{
		// Turn the segment array into a URI string
		//var_dump($this->uri->segments);
		$uri = implode('/', $this->uri->segments);
		
		// Is there a literal match?  If so we're done
		if (isset($this->routes[$uri]))
		{
			return $this->_set_request(explode('/', $this->routes[$uri]));
		}
		//var_dump($this->uri->segments);
		// Loop through the route array looking for wild-cards
		foreach ($this->routes as $key => $val)
		{
			// Convert wild-cards to RegEx
			$key = str_replace(':any', '.+', str_replace(':num', '[0-9]+', $key));

			// Does the RegEx match?
			if (preg_match('#^'.$key.'$#', $uri))
			{
				// Do we have a back-reference?
				if (strpos($val, '$') !== FALSE AND strpos($key, '(') !== FALSE)
				{
					$val = preg_replace('#^'.$key.'$#', $val, $uri);
				}
				return $this->_set_request(explode('/', $val));
			}
		}

		// If we got this far it means we didn't encounter a
		// matching route so we'll set the site default route
		$this->_set_request($this->uri->segments);
	}
	
	// --------------------------------------------------------------------

	/**
	 * Set the Route
	 *
	 * This function takes an array of URI segments as
	 * input, and sets the current class/method
	 *
	 * @access	private
	 * @param	array
	 * @param	bool
	 * @return	void
	 */
	function _set_request($segments = array())
	{
		if (isset($segments[0])){
			if ($this->_is_admin($segments[0])){
				array_shift($segments);
				$segments = array_merge(array('admin'),$segments);
			}
		}
		$segments = $this->_validate_request($segments);
		
		if (count($segments) == 0)
		{
			return $this->_set_default_controller();
		}
		
		$this->set_class($segments[0]);

		if (isset($segments[1]))
		{
			// A standard method request
			$this->set_method($segments[1]);
		}
		else
		{
			// This lets the "routed" segment array identify that the default
			// index method is being used.
			$segments[1] = 'index';
		}
		
		// Update our "routed" segment array to contain the segments.
		// Note: If there is no custom routing, this array will be
		// identical to $this->uri->segments
		$this->uri->rsegments = $segments;
		$controler_action = array($this->fetch_class(),$this->fetch_method());
		$params = array_diff($segments,$controler_action);
		if (!empty($params) && count($params) > 0){
			$i=0;
			$lastval = '';
			$retval  = array();
			foreach ($params as $key=>$value){
				if (($i%2) && $lastval != ''){
					$this->_set_param($lastval,$value);
				}else{
					$lastval = $value;
				}
				$i++;
			}
		}
	}
	
	private function _set_param($key,$value){
		if (!isset($_GET[$key])){
			$_REQUEST[$key] = $_GET[$key] = $value;
		}
	}
	
	/**
     * Set Route Parameters
     *
     * @param array $data
     * @return MY_Config
     */
	function _set_route_path($data){
		if ($this->route_path == $data){
			return ;
		}
		$a = explode('/',$data);
		
		$module = array_shift($a);
		
		if ('*' === $module) {
			$module = $this->fetch_module();
		}
		
		$routePath = $module.'/';
		
		if (!empty($a)){
			$class = array_shift($a);
			if ('*' === $class){
				$class = $this->fetch_class();
			}
			$routePath .= $class.'/';
		}
		if (!empty($a)) {
			$method = array_shift($a);
			if ('*' === $method){
				$method = $this->fetch_method();
			} 
			$routePath .= $method.'/';
		}
		if (!empty($a)){
			 while (!empty($a)) {
                $key = array_shift($a);
                if (!empty($a)) {
                    $value = array_shift($a);
                    $this->_set_route_param($key, $value);
                    $routePath .= $key . '/' . $value . '/';
                }
            }
		}
		$this->route_path = $routePath;
		return $this;
	}
	
	function _get_route_path(){
		return $this->route_path;
	}
	
	function _set_route_param($key,$data){
		$params = $this->route_params;
		if (isset($params[$key]) && $data[$key] == $data) {
			return $this;
		}
		$this->route_params[$key] = $data;
		return $this;
	}
	
	function _set_route_params(array $data,$unsetOldParams = true){
		
		if ($unsetOldParams){
			unset($this->route_param);	
		}
		foreach ($data as $k=>$v){
			$this->_set_route_param($k,$v);
		}
		return $this;
	}
	
	function _get_route_param(){
		return $this->route_params;
	}
	
	/**
     * Retrieve route URL
     *
     * @param string $routePath
     * @param array $routeParams
     *
     * @return string
     */
	function _get_route_url($routePath = null,$routeParams = null){
		$this->route_params = array();
		
		if (!is_null($routePath)){
			$this->_set_route_path($routePath);
		}
		
		if (is_array($routeParams)){
			$this->_set_route_params($routeParams);
		}
		
		$routePath = $this->_get_route_path();
		if (count($this->_get_route_param()) > 0){
			foreach ($this->_get_route_param() as $key=>$value){
				  if (is_null($value) || false === $value || '' === $value || !is_scalar($value)) {
                        continue;
                  }
                  $routePath .= $key . '/' . $value . '/';
			}
		}
		
		return trim($this->config->get_base_url(),'/').'/'.$routePath;
	}
	
	 /**
     * Build url by requested path and parameters
     *
     * @param   string|null $routePath
     * @param   array|null $routerParams
     * @return  string
     */
	function get_url($routePath = '',$routerParams = array()){
		
		$query_params = null;
		
		if (isset($routerParams['query'])){
			 $query_params = $routerParams['query'];
			 unset($routerParams['query']);
		}
		
		$fragment = null;
		if (isset($routerParams['fragment'])){
			$fragment = $routerParams['fragment'];
			unset($routerParams['fragment']);
		}
		if ($routePath == ''){
			$url = $this->config->get_base_url().'/'.$this->uri->uri_string().$this->config->item('url_suffix');
		}elseif (isset($this->routes[$routePath]) || isset($routerParams['rewrite'])){
			$url = $this->config->get_base_url().'/'.$routePath.$this->config->item('url_suffix');
		}else{
			$url = $this->_get_route_url($routePath,$routerParams);
		}
		$query = null;
		if ($query_params !== null){
			if (is_string($query_params)){
				$query = $query_params;
			}elseif (is_array($query_params)){
				ksort($query_params);
				$query = http_build_query($query_params,'','&');
			}
		}
		
		if ($query !== null){
			 $mark = (strpos($url, '?') === false) ? '?' : '&';
             $url .= $mark . $query;
		}
		
		if ($fragment !== null){
			$url .='#'.$fragment;
		}
		return $url;
	}
	
	
	function _is_admin($roter){
		if ($roter == $this->config->item('admin_url')){
			return true;
		}
		return false;
	}
	
	/** Locate the controller **/
	public function locate($segments) {		
		
		$this->module = '';
		$this->directory = '';
		$ext = $this->config->item('controller_suffix').EXT;
		/* use module route if available */
		if (isset($segments[0]) AND $routes = Modules::parse_routes($segments[0], implode('/', $segments))) {
			$segments = $routes;
		}

		/* get the segments array elements */
		list($module, $directory, $controller) = array_pad($segments, 3, NULL);
		/* check modules */
		foreach (Modules::$locations as $location => $offset) {
		
			/* module exists? */
			if (is_dir($source = $location.$module.'/controllers/')) {
				$this->set_module($module);
				$this->directory = $offset.$module.'/controllers/';
				
				/* module sub-controller exists? */
				if($directory AND is_file($source.$directory.$ext)) {
					return  array_slice($segments, 1);
				}
					
				/* module sub-directory exists? */
				if($directory AND is_dir($source.$directory.'/')) {

					$source = $source.$directory.'/'; 
					$this->directory .= $directory.'/';

					/* module sub-directory controller exists? */
					
					if(is_file($source.$directory.$ext)) {
						return array_slice($segments, 1);
					}
				
					/* module sub-directory sub-controller exists? */
					if($controller AND is_file($source.$controller.$ext))	{
						return array_slice($segments, 2);
					}
				}
				
				/* module controller exists? */			
				if(is_file($source.$module.$ext)) {
					return $segments;
				}
			}
		}
		
		/* application controller exists? */			
		if (is_file(APPPATH.'controllers/'.$module.$ext)) {
			return $segments;
		}
		
		/* application sub-directory controller exists? */
		if($directory AND is_file(APPPATH.'controllers/'.$module.'/'.$directory.$ext)) {
			$this->directory = $module.'/';
			return array_slice($segments, 1);
		}
		
		/* application sub-directory default controller exists? */
		if (is_file(APPPATH.'controllers/'.$module.'/'.$this->default_controller.$ext)) {
			$this->directory = $module.'/';
			return array($this->default_controller);
		}
	}
}