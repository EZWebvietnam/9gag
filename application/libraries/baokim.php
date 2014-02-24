<?php
class baokim
{
	private $baokim_url = 'https://www.baokim.vn/payment/customize_payment/order';
	private $merchant_id = '12142';
	private $secure_pass = 'a44158b0e8de2abe';
	public function createRequestUrl($order_id, $business, $total_amount, $shipping_fee, $tax_fee, $order_description, $url_success, $url_cancel, $url_detail)
	{
		$params = array(
			'merchant_id'		=>	strval($this->merchant_id),
			'order_id'			=>	strval($order_id),
			'business'			=>	strval($business),
			'total_amount'		=>	strval($total_amount),
			'shipping_fee'		=>  strval($shipping_fee),
			'tax_fee'			=>  strval($tax_fee),
			'order_description'	=>	strval($order_description),
			'url_success'		=>	strtolower($url_success),
			'url_cancel'		=>	strtolower($url_cancel),
			'url_detail'		=>	strtolower($url_detail)
		);
		ksort($params);
		$str_combined = $this->secure_pass.implode('', $params);
		$params['checksum'] = strtoupper(md5($str_combined));
		$redirect_url = $this->baokim_url;
		if(strpos($redirect_url, '?') === false)
		{
			$redirect_url .= '?';
		} 
		if(substr($redirect_url, strlen($redirect_url)-1, 1) != '?' && strpos($redirect_url, '&') === false)
		{
			$redirect_url .= '&';			
		}
		$url_params = '';
		foreach($params as $key=>$value)
		{
			if ($url_params == '')
			{
				$url_params .= $key . '=' . urlencode($value);
			}
			else
			{
				$url_params .= '&' . $key . '=' . urlencode($value);
			}
		}
		return $redirect_url.$url_params;
	}
	public function verifyResponseUrl($b = array())
	{
		$checksum = $b['checksum'];
		unset($b['checksum']);
		ksort($b);
		$str_combined = $this->secure_pass.implode('', $b);
		$verify_checksum = strtoupper(md5($str_combined));
		if ($verify_checksum === $checksum) 
		{
			return true;
		}
		return false;
	}
}
?>