<?php
include('lib/nusoap.php');
class gamebank
{
	function nap_tien($telco,$code,$seri)
	{
		$gamebank_account = "giangbeo";
		$client = new nusoap_client("http://pay.gamebank.vn/service/cardServiceV2.php/?wsdl",true);
		$result = $client->call("creditCard",array("seri"=>$seri,"code"=> $code,"cardtype"=> $telco, "gamebank_account"=>$gamebank_account));
		$return_result = '';
		if($result[0] >= 10000)
		{
			$return_result =  "Nap thanh cong ".$result[0];
			$money = $result[0] - (($result[0]*22)/100);
            $error = 0;
			//Nap tien thanh cong, $result['resultCode'] là mệnh giá thẻ khách nạp	
		}
		else
		{	
			$money = 0;
            $error = 1;
			switch($result[0])
			{
				case -3: 
				{
					$return_result =  "Thẻ không sử dụng được" ;break;
				}
				case -10: 
				{
					$return_result =  "Nhập sai định dạng thẻ";break;
				}
				case -1001: 
				{
					$return_result =  "Nhập sai quá 3 lần ";break;
				}
				case -1002; 
				{
					$return_result =  "Lỗi hệ thống ";break;
				}
				case -1003: 
				{	
					$return_result =  "IP không được phép truy cập, vui lòng quay lại sau 5 phút";break;
				}
				case -1004: 
				{
					$return_result =  "Tên đăng nhập GameBank không đúng"; break;
				}
				case -1005: 
				{
					$return_result =  "Loại thẻ không đúng";break;
				}
				case -1006: 
				{
					$return_result =  "Hệ thống bảo trì";break;
				}
				default: 
				{
					$return_result =  "Ket noi voi Gamebank that bai";
				}
			}
		}
		$result_success  = array('return_result'=>$return_result,'money'=>$money,'error'=>$error);
		return $result_success;
	}
}
?>