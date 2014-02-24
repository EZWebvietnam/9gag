<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Myfunction
 {
    function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->library('session');
		
    }
    public function getlastfile($dir)
    {
            $lastMod = 0;
            $lastModFile = '';
            
            foreach (scandir($dir) as $entry) {
              
                if (is_file($dir.$entry) && filectime($dir.$entry) > $lastMod) {
                    $lastMod = filectime($dir.$entry);
                    $lastModFile = $entry;
                }
            }
            return $lastModFile;
    }
     
 }
?>
