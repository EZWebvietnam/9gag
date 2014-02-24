
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tham Dinh Gia - DCBLAND.COM</title>
    
<link href="<?php echo base_url();?>template/home_ezwebvietnam/tham_dinh_gia/css/style.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $('#imgsubmit').click(function () {
            if ($('#msts').val().length <= 3) {
                alert('Vui lòng nhập Mã Số Tài Sản trên DCBLAND.COM');
                $('#msts').focus();
                return false;
            }
            if ($('#diachi').val().length <= 10) {
                alert('Vui lòng nhập địa chỉ tài sản');
                $('#diachi').focus();
                return false;
            }
            if ($('#hoten').val().length <= 5) {
                alert('Vui lòng nhập đầy đủ Họ Tên của bạn');
                $('#hoten').focus();
                return false;
            }
            if ($('#sdt').val().length <= 8) {
                alert('Vui lòng nhập Số điện thoại của bạn');
                $('#sdt').focus();
                return false;
            }
            if ($('#email').val().length <= 10) {
                alert('Vui lòng nhập Email của bạn');
                $('#email').focus();
                return false;
            }

            $('#formV3').submit();
        });
    });
</script>
</head>
<body>
<div class="content">
	<div><img src="<?php echo base_url();?>template/home_ezwebvietnam/tham_dinh_gia/images/top.jpg" alt="" width="700" height="353" border="0" usemap="#Map" />
      <map name="Map" id="Map">
        <area shape="rect" coords="401,14,548,69" href="http://DCBLAND.COM" target="_blank" />
      </map>
	</div>
    <div class="contForm">
    <?php echo $this->load->view($main_content);?>
    </div>
    <div><img src="<?php echo base_url();?>template/home_ezwebvietnam/tham_dinh_gia/images/bottom.jpg" alt="" width="700" height="253" border="0" usemap="#Map2" />
      <map name="Map2" id="Map2">
        <area shape="rect" coords="328,166,532,190" href="mailto:info@dcbland.com" />
      </map>
    </div>
</div>
</body>
</html>
