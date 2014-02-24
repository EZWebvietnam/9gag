<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <title>Cổng thông tin & Giao dịch - DCBLAND.COM</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/css/general.css?2322" rel="stylesheet" type="text/css" />
    <!--[if IE 7]>
    <link href="css/ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link href="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/css/Member.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/js/slides/slides.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/js/tooltip/tools.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/css/doolv3.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script type='text/javascript'>
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-1771835-4']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
  </script>
</head>
<body>
<div id="container">
<style type="text/css">

	#b_left {
    	position: absolute;
        top: 78px;
        
		width:100px;
	}
	#b_right {
    	position: absolute;
        top: 78px;
		width:100px;
	}
</style>
    <div id="b_left" style="left:90px">

</div>
    <div id="b_right" style="right:90px">


    </div>
    <script type="text/javascript">
        $(function () {
            WindowResize();
            $(window).resize(function () {
                WindowResize();
            });
        });
        function WindowResize() {
            var bannerLeft = $("#b_left");
            var bannerRight = $("#b_right");
            var widthWindow = $(window).width();
            if (widthWindow < 1200) {
                bannerLeft.css("display", "none");
                bannerRight.css("display", "none");
            } else {
                bannerLeft.css("display", "");
                bannerLeft.css("right", (widthWindow / 2 + 485) + "px");
                bannerRight.css("display", "");
                bannerRight.css("right", (widthWindow - (widthWindow / 2 + 585)) + "px");
            }
        }
    </script>
    <script type="text/javascript">
        $(function () {
            $('#b_left').scrollToFixed();
            $('#b_right').scrollToFixed();
        });
        
</script>    <div id="header" class="margin_bottom">
        <div id="head_content" class="wrap">
            <span id="logo"><a href="/" title="Về trang chủ DiaOcOnline.vn">Địa Ốc Online</a></span>
            <?php 
            $q = $_SERVER['DOCUMENT_ROOT'].ROT_DIR.'application/views/home_layout/header_.php';
            include($q);
            ?>
            
        </div>
    </div>
    <div id="content_container">
        
<div class="wrap">


    <div id="personal_board" class="margin_bottom">
        <div class="body">
            <div class="basic_info">
                <div class="info">
                    <h2>Xin chào: <?php echo $this->session->userdata('full_name')?></h2>
                    <p>Ngày tham gia: <?php echo date('d/m/Y h:i:s',strtotime($this->session->userdata('created')));?>
                    <br />
                    </p>

                    <a href="<?php echo base_url();?>thanh-vien/edit-tai-khoan" class="btn_1"><span>CẬP NHẬT TÀI KHOẢN</span></a>
                </div>
            </div>
            <div class="alert margin_left">
                <ul>
                    <li class="block new_mail"><a href="#" class="icon">THƯ </a> 
                        <a href="#">THƯ TỪ HỆ THỐNG</a> </li>
                    <li class="block dealing"><a href="<?php echo base_url();?>thanh-vien/tai-san-dang-hien-thi" class="icon">TÀI SẢN ĐANG GIAO DỊCH</a> 
                        <a href="<?php echo base_url();?>thanh-vien/tai-san-dang-hien-thi">TS ĐANG GIAO DỊCH</a></li>
                    <li class="block point last"><a href="javascript:void(0)" class="icon"></a>
                        <a href="javascript:void(0)"><span id="UserPoint"><?php if(isset($so_du_nav[0]['so_du'])){ echo number_format($so_du_nav[0]['so_du']);} else { echo 0;}?></span> VNĐ</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="wrap margin_bottom">
    <div class="col_160">
    <div id="panel">
    <div class="panel_block active">
        <h2><span class="ico_16 ico_panel_0"></span><a>TỔNG
                QUAN</a></h2>
        <ul>
            <li><a href="<?php echo base_url()?>thanh-vien/loc-tai-san-mac-dinh">Lọc tài sản mặc định</a></li>
        </ul>
    </div>
    <div class="panel_block">
        <h2>
            <span class="ico_16 ico_panel_1"></span><a>QUẢN LÝ TÀI SẢN</a></h2>
        <ul>
            <li><a href="<?php echo base_url()?>thanh-vien/tai-san-dang-moi">Đăng tài sản mới</a></li>
            <li>
                <a href="<?php echo base_url()?>thanh-vien/tai-san-dang-hien-thi">Đang hiển thị 
                
                </a></li>
            <li>
                <a href="<?php echo base_url()?>thanh-vien/tai-san-het-han">Hết hạn 
                
                </a></li>
            <li>
                <a href="<?php echo base_url(); ?>thanh-vien/tai-san-cho-duyet">Đang chờ duyệt 
                
                </a></li>
            <li>
                <a href="<?php echo base_url();?>thanh-vien/dich-vu-chua-thanh-toan">Chưa trả phí 
               
                </a></li>
            <li>
                <a href="<?php echo base_url();?>thanh-vien/tai-san-dang-soan">Đang soạn 
                
                </a></li>
            
            
           
        </ul>
    </div>
   

    <div class="panel_block">
        <h2>
            <span class="ico_16 ico_panel_3"></span><a>ĐIỂM</a></h2>
        <ul>
            
            <li>
                <a href="<?php echo base_url()?>thanh-vien/nap-tien">Nạp điểm</a></li>
            <li>
                <a href="<?php echo base_url()?>thanh-vien/nap-the">Nạp thẻ</a></li>
            <li>
                <a href="<?php echo base_url();?>thanh-vien/log-giao-dich">Lịch sử giao dịch</a></li>
        </ul>
    </div>
    <div class="panel_block">
        <h2>
            <span class="ico_16 ico_panel_5"></span><a href="#">QUẢN LÝ TIN LƯU</a></h2>
        <ul>
            <li>
                <a href="<?php echo base_url();?>thanh-vien/tai-san-luu">Tài sản đã lưu</a></li>
            <li>
                <a href="<?php echo base_url();?>thanh-vien/tin-tuc-da-luu">Tin tức đã lưu</a></li>
            <li>
                <a href="<?php echo base_url();?>thanh-vien/du-an-da-luu">Dự án đã lưu</a></li>
            
        </ul>
    </div>
</div>	
    </div>
        <?php echo $this->load->view($main_content);?>
    </div>
</div>

	</div>
    <!--FOOTER-->
<?php 
$q = $_SERVER['DOCUMENT_ROOT'].ROT_DIR.'application/views/home_layout/footer.php';
include($q)?>
    <script src="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/js/uniform/uniform.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/js/script.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/js/tooltip/tooltipsy.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/js/slides/slides.min.jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/js/doolv3.js?2322" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>template/home_ezwebvietnam/Content/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
</div>
</body>
</html>