
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <title>Các kiểu nhà, biệt thự đẹp của sao, người nổi tiếng - DiaOcOnline</title>
    <meta name="description" content="Nhà Đẹp, Nhà của sao, Kiến trúc đẹp - Nhà đất, Bất động sản, Địa ốc" />
    <meta name="keywords" content="nhà đẹp của sao, nhà đẹp, các mẫu nhà đẹp, các mẫu thiết kế nhà đẹp, kiến trúc nhà đẹp, biệt thự đẹp nhất việt nam, phòng trẻ em đẹp, nhà sân vườn đẹp, phòng ngủ đẹp, phòng khách đẹp" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/general.css?0055" rel="stylesheet" type="text/css" />
    <!--[if IE 7]>
    <link href="css/ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/House.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slides/slides.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/tooltip/tools.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/doolv3.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/jquery-1.7.2.min.js" type="text/javascript"></script>
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

<div id="position_64" class =''>

<?php 
if(empty($vi_tri_1))
{
    ?> 
    
    <?php 
}
else
{
    $i=1;
    foreach($vi_tri_1 as $vt_1)
    {
        if($i==1)
        {
?>
<div class="bannerShow">
<a href="<?php echo $vt_1['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_1['file']?>" width="100px" height="300px">
</a>
</div>
<?php } if($i==2)
{?>
<div class="bannerHide">
<a href="<?php echo $vt_1['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_1['file']?>" width="100px" height="300px"></a>
</div>
<?php } $i++;}} ?>
</div><script type='text/javascript'>var Banner64=1;function Random_Banner64(){    var _Arr=document.getElementById("position_64").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner64 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner64 - 1]).html(); $(_Arr[Banner64 - 1]).html(''); $(_Arr[Banner64 - 1]).html(tempBanner);    window.setTimeout("Random_Banner64()" ,25000);    Banner64 = Banner64 + 1;    if(Banner64 > _Arr.length)        Banner64 = 1;}Random_Banner64();</script>

<div id="position_65" class =''>
<?php 
if(empty($vi_tri_2))
{
?>
<?php
} else {
    $i=1;
    foreach($vi_tri_2 as $vt_2)
    {
        if($i==1)
        {
?>
<div style="margin-top:5px" class="bannerShow"><a href="<?php echo $vt_2['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_2['file']?>" width="100px" height="300px">
</a>
</div>
<?php } if($i==2)
{?>
<div style="margin-top:5px" class="bannerHide"><a href="<?php echo $vt_2['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_2['file']?>" width="100px" height="300px">
</a>
</div>
<?php } $i++;} } ?>
</div><script type='text/javascript'>var Banner65=1;function Random_Banner65(){    var _Arr=document.getElementById("position_65").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner65 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner65 - 1]).html(); $(_Arr[Banner65 - 1]).html(''); $(_Arr[Banner65 - 1]).html(tempBanner);    window.setTimeout("Random_Banner65()" ,25000);    Banner65 = Banner65 + 1;    if(Banner65 > _Arr.length)        Banner65 = 1;}Random_Banner65();</script>
    </div>
    <div id="b_right" style="right:90px">

<div id="position_66" class =''><div><embed height="300" width="100" scale="exactfit" menu="false" AllowScriptAccess="always" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" quality="high" src="http://image.diaoconline.vn/banner-dool/2014/01/09/FE7-lienhe_qc_100x300.swf?clicktag=http://www.diaoconline.vn/quangcao/403/66"/></div><div><embed height="300" width="100" scale="exactfit" menu="false" AllowScriptAccess="always" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" quality="high" src="http://image.diaoconline.vn/banner-dool/2014/01/09/FE7-lienhe_qc_100x300.swf?clicktag=http://www.diaoconline.vn/quangcao/403/66"/></div></div><script type='text/javascript'>var Banner66=1;function Random_Banner66(){    var _Arr=document.getElementById("position_66").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner66 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner66 - 1]).html(); $(_Arr[Banner66 - 1]).html(''); $(_Arr[Banner66 - 1]).html(tempBanner);    window.setTimeout("Random_Banner66()" ,25000);    Banner66 = Banner66 + 1;    if(Banner66 > _Arr.length)        Banner66 = 1;}Random_Banner66();</script>

<div id="position_67" class =''><div style="margin-top:5px" ><embed height="300" width="100" scale="exactfit" menu="false" AllowScriptAccess="always" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" quality="high" src="http://image.diaoconline.vn/banner-dool/2014/01/09/FE7-lienhe_qc_100x300.swf?clicktag=http://www.diaoconline.vn/quangcao/403/67"/></div><div style="margin-top:5px" ><embed height="300" width="100" scale="exactfit" menu="false" AllowScriptAccess="always" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" quality="high" src="http://image.diaoconline.vn/banner-dool/2014/01/09/FE7-lienhe_qc_100x300.swf?clicktag=http://www.diaoconline.vn/quangcao/403/67"/></div></div><script type='text/javascript'>var Banner67=1;function Random_Banner67(){    var _Arr=document.getElementById("position_67").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner67 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner67 - 1]).html(); $(_Arr[Banner67 - 1]).html(''); $(_Arr[Banner67 - 1]).html(tempBanner);    window.setTimeout("Random_Banner67()" ,25000);    Banner67 = Banner67 + 1;    if(Banner67 > _Arr.length)        Banner67 = 1;}Random_Banner67();</script>
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
            <div id="head_nav">
                <ul>
                    <li id="news_item" ><a href="/tin-tuc">
                        THÔNG TIN ĐỊA ỐC</a>
                        <div class="sub_menu">
                            <div class="wrap">
                                <div class="col_178">
                                    <div class="left_menu">
                                        <ul>
                                                <li><a href="/tin-tuc/thi-truong-dia-oc-c18">Thị trường địa ốc</a>
                                                </li>
                                                <li><a href="/tin-tuc/hoat-dong-doanh-nghiep-c23">Hoạt động Doanh nghiệp</a>
                                                </li>
                                                <li><a href="/tin-tuc/chinh-sach-quy-hoach-c16">Chính sách - Quy hoạch</a>
                                                </li>
                                                <li><a href="/tin-tuc/tai-chinh-chung-khoan-c57">Tài chính - Chứng khoán</a>
                                                </li>
                                                <li><a href="/tin-tuc/xay-dung-c25">Xây dựng</a>
                                                </li>
                                                <li><a href="/tin-tuc/bat-dong-san-the-gioi-c24">Bất động sản thế giới</a>
                                                </li>
                                                <li><a href="/tin-tuc/ngoai-kieu-viet-kieu-c17">Ngoại kiều - Việt kiều</a>
                                                </li>
                                                <li><a href="/tin-tuc/cong-nghe-c75">Công nghệ</a>
                                                </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col_463">
                                    <div class="info">
                                        <div class="headline rounded_style_6 rounded_box">
                                            <div class="content">
                                                <h2>
                                                    THÔNG TIN MỚI NHẤT</h2>
                                            </div>
                                        </div>
                                        <div class="content_inner rounded_style_7 rounded_box">
                                                <div class="content">
                                                    <div class="img">
                                                        <a href="/tin-tuc/cau-chuyen-doanh-nhan-c81/bi-quyet-nghin-ti-cua-do-ha-nam-i45182">
                                                            <img src="http://image.diaoconline.vn/tin-tuc/2014/01/10/thumb-773-bi-quyet-nghin-ti-cua-do-ha-nam.jpg" width="200" height="154" alt="Bí quyết nghìn tỉ của Đỗ Hà Nam" title="Bí quyết nghìn tỉ của Đỗ Hà Nam"/>
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <h2>
                                                            <a href="/tin-tuc/cau-chuyen-doanh-nhan-c81/bi-quyet-nghin-ti-cua-do-ha-nam-i45182">Bí quyết nghìn tỉ của Đỗ Hà Nam</a></h2>
                                                        <span class="updated_date">10/01/2014 16:04</span>
                                                        <br />
                                                        <p>Mức tăng trưởng đều đặn hơn 10%/năm trong suốt giai đoạn khủng hoảng của Intimex khiến nhiều người tò mò, nhất là khi các doanh nghiệp cùng ngành lần lượt ngã ngựa. Thế nhưng, bí quyết của ông chủ Đỗ Hà Nam lại đơn giản đến mức khó tin.</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col_290 margin_left">
                                    <div class="latest">
                                        <div class="headline rounded_style_6 rounded_box">
                                            <div class="content">
                                                <h2>
                                                    THÔNG TIN MỚI CẬP NHẬT</h2>
                                            </div>
                                        </div>
                                        <div class="content_inner">
                                            <ul>
                                                    <li><span class="bullet"></span><a href="/tin-tuc/thi-truong-dia-oc-c18/62-du-an-xin-chia-nho-can-ho-i45180" title="62 dự án xin “chia nhỏ” căn hộ">
                                                        62 dự án xin “chia nhỏ” căn hộ
                                                    </a></li> 
                                                    <li><span class="bullet"></span><a href="/tin-tuc/thi-truong-dia-oc-c18/bat-dong-san-tu-cuu-minh-i45178" title="Bất động sản tự cứu mình">
                                                        Bất động sản tự cứu mình
                                                    </a></li> 
                                                    <li><span class="bullet"></span><a href="/tin-tuc/ngoai-kieu-viet-kieu-c17/go-kho-cho-bat-dong-san-i45177" title="Gỡ khó cho bất động sản">
                                                        Gỡ khó cho bất động sản
                                                    </a></li> 
                                                    <li><span class="bullet"></span><a href="/tin-tuc/thi-truong-dia-oc-c18/du-bao-tao-bao-ve-thi-truong-bds-nam-2014-i45174" title="Dự báo táo bạo về thị trường BĐS năm 2014">
                                                        Dự báo táo bạo về thị trường BĐS năm  ...
                                                    </a></li> 
                                                    <li><span class="bullet"></span><a href="/tin-tuc/thi-truong-dia-oc-c18/goi-tin-dung-30000-ty-dong-cung-thieu-kem-hap-dan-can-tien-do-giai-ngan-i45172" title="Gói tín dụng 30.000 tỷ đồng: Cung thiếu, kém hấp dẫn cản tiến độ giải ngân">
                                                        Gói tín dụng 30.000 tỷ đồng: Cung  ...
                                                    </a></li> 
                                                    <li><span class="bullet"></span><a href="/tin-tuc/thi-truong-dia-oc-c18/can-ho-vua-tui-tien-hut-khach-i45171" title="Căn hộ vừa túi tiền hút khách">
                                                        Căn hộ vừa túi tiền hút khách
                                                    </a></li> 
                                                    <li><span class="bullet"></span><a href="/tin-tuc/bat-dong-san-the-gioi-c24/nha-moi-ban-ra-tai-australia-cao-nhat-25-nam-i45170" title="Nhà mới bán ra tại Australia cao nhất 2,5 năm">
                                                        Nhà mới bán ra tại Australia cao nhất  ...
                                                    </a></li> 
                                                    <li><span class="bullet"></span><a href="/tin-tuc/thi-truong-dia-oc-c18/bat-dong-san-khoi-sac-nho-kieu-hoi-i45169" title="Bất động sản khởi sắc nhờ kiều hối?">
                                                        Bất động sản khởi sắc nhờ kiều hối?
                                                    </a></li> 
                                                    <li><span class="bullet"></span><a href="/tin-tuc/thi-truong-dia-oc-c18/giai-cuu-bds-bang-chinh-sach-i45168" title="Giải cứu BĐS bằng chính sách">
                                                        Giải cứu BĐS bằng chính sách
                                                    </a></li> 
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="real_market_item" ><a href="/sieu-thi">
                        SIÊU THỊ ĐỊA ỐC</a>
                        <div class="sub_menu">
                            <div class="wrap">
                                <div class="col_178">
                                    <div class="left_menu">
                                        <ul>
                                                <li><a href="/sieu-thi/nha-pho-c20">Nhà phố</a>
                                                </li>
                                                <li><a href="/sieu-thi/villa-biet-thu-c1">Villa - Biệt thự</a>
                                                </li>
                                                <li><a href="/sieu-thi/can-ho-chung-cu-c8">Căn hộ chung cư</a>
                                                </li>
                                                <li><a href="/sieu-thi/dat-o-dat-tho-cu-c11">Đất ở - Đất thổ cư</a>
                                                </li>
                                                <li><a href="/sieu-thi/dat-du-an-quy-hoach-c12">Đất dự án - Quy hoạch</a>
                                                </li>
                                                <li><a href="/sieu-thi/van-phong-c9">Văn phòng</a>
                                                </li>
                                                <li><a href="/sieu-thi/mat-bang-cua-hang-c15">Mặt bằng - Cửa hàng</a>
                                                </li>
                                                <li><a href="/sieu-thi/nha-hang-khach-san-c17">Nhà hàng - Khách sạn</a>
                                                </li>
                                                <li><a href="/sieu-thi/nha-kho-xuong-c19">Nhà Kho - Xưởng</a>
                                                </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col_463">
                                    <div class="info">
                                        <div class="headline rounded_style_6 rounded_box">
                                            <div class="content">
                                                <h2>
                                                    TÀI SẢN NỔI BẬT</h2>
                                            </div>
                                        </div>
                                        <div class="content_inner rounded_style_7 rounded_box">
                                            <div class="content">
                                                    <div class="real_block">
                                                        <a href="/ban-can-ho-chung-cu-c8/can-ho-8x-dam-sen-co-hoi-so-huu-can-ho-cua-cac-ban-tre-i744763">
                                                            <img src="http://image.diaoconline.vn/sieu-thi/2013/12/25/thumb-A61-86CEEB.jpg" width="140" height="140"  alt="Căn hộ 8x Đầm Sen cơ hội sở hữu căn hộ của các bạn trẻ" title="Căn hộ 8x Đầm Sen cơ hội sở hữu căn hộ của các bạn trẻ"/></a>
                                                        <h3>
                                                            <a href="/ban-can-ho-chung-cu-c8/can-ho-8x-dam-sen-co-hoi-so-huu-can-ho-cua-cac-ban-tre-i744763">
                                                                Căn hộ 8x Đầm Sen cơ hội sở hữu căn hộ  ...
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div class="real_block">
                                                        <a href="/ban-can-ho-chung-cu-c8/can-ho-8x-dam-sen-chi-600-trieucan-thanh-toan-chi-5-trieuthang-i744762">
                                                            <img src="http://image.diaoconline.vn/sieu-thi/2013/12/25/thumb-DDB-35492D.jpg" width="140" height="140"  alt="Căn hộ 8x Đầm Sen chỉ 600 triệu/căn, thanh toán chỉ 5 triệu/tháng" title="Căn hộ 8x Đầm Sen chỉ 600 triệu/căn, thanh toán chỉ 5 triệu/tháng"/></a>
                                                        <h3>
                                                            <a href="/ban-can-ho-chung-cu-c8/can-ho-8x-dam-sen-chi-600-trieucan-thanh-toan-chi-5-trieuthang-i744762">
                                                                Căn hộ 8x Đầm Sen chỉ 600 triệu/căn,  ...
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div class="real_block last">
                                                        <a href="/ban-can-ho-chung-cu-c8/so-huu-can-ho-ngay-canh-dam-sen-bang-chinh-luong-thu-nhap-cua-ban-i740950">
                                                            <img src="http://image.diaoconline.vn/sieu-thi/2013/12/19/thumb-B90-A00B21.jpg" width="140" height="140"  alt="Sở hữu căn hộ ngay cạnh Đầm Sen bằng chính lương thu nhập của bạn" title="Sở hữu căn hộ ngay cạnh Đầm Sen bằng chính lương thu nhập của bạn"/></a>
                                                        <h3>
                                                            <a href="/ban-can-ho-chung-cu-c8/so-huu-can-ho-ngay-canh-dam-sen-bang-chinh-luong-thu-nhap-cua-ban-i740950">
                                                                Sở hữu căn hộ ngay cạnh Đầm Sen bằng  ...
                                                            </a>
                                                        </h3>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col_290 margin_left">
                                    <div class="latest">
                                        <div class="headline rounded_style_6 rounded_box">
                                            <div class="content">
                                                <h2>
                                                    CÁC TÀI SẢN MỚI ĐĂNG</h2>
                                            </div>
                                        </div>
                                        <div class="content_inner">
                                            <ul>
                                                    <li><span class="bullet"></span><a href="/ban-can-ho-chung-cu-c8/can-ho-ngay-dam-sen-chi-600-trieucan-vat-chi-5-i740946" title="Căn hộ ngay Đầm Sen chỉ 600 triệu/căn, VAT chỉ 5%">
                                                        <span>TP.HCM: </span>
                                                        Căn hộ ngay Đầm Sen chỉ 600  ...</a> </li>
                                                    <li><span class="bullet"></span><a href="/ban-can-ho-chung-cu-c8/can-ho-8x-dam-sen-chi-600-trieu-can-ho-tro-goi-30000-ty-i749406" title="Căn hộ 8x Đầm Sen chỉ 600 triệu/ căn hỗ trợ gói 30.000 tỷ">
                                                        <span>TP.HCM: </span>
                                                        Căn hộ 8x Đầm Sen chỉ 600  ...</a> </li>
                                                    <li><span class="bullet"></span><a href="/ban-can-ho-chung-cu-c8/can-ho-8x-dam-sen-chi-600-trieu-can-thanh-toan-2-nam-khong-lai-suat-i749408" title="Căn hộ 8x Đầm Sen chỉ 600 triệu/ căn thanh toán 2 năm không lãi suất">
                                                        <span>TP.HCM: </span>
                                                        Căn hộ 8x Đầm Sen chỉ 600  ...</a> </li>
                                                    <li><span class="bullet"></span><a href="/ban-can-ho-chung-cu-c8/can-ho-8x-dam-sen-chi-600-trieu-can-uu-dai-bat-ngo-tu-hung-thinh-i749409" title="Căn hộ 8x Đầm Sen chỉ 600 triệu/ căn ưu đãi bất ngờ từ Hưng Thịnh">
                                                        <span>TP.HCM: </span>
                                                        Căn hộ 8x Đầm Sen chỉ 600  ...</a> </li>
                                                    <li><span class="bullet"></span><a href="/ban-can-ho-chung-cu-c8/can-ho-8x-dam-sen-chi-600-trieucan-uu-dai-bat-ngo-tu-hung-thinh-cho-cac-ban-tre-i752067" title="Căn hộ 8x Đầm Sen chỉ 600 triệu/căn, ưu đãi bất ngờ từ Hưng Thịnh cho các bạn trẻ">
                                                        <span>TP.HCM: </span>
                                                        Căn hộ 8x Đầm Sen chỉ 600  ...</a> </li>
                                                    <li><span class="bullet"></span><a href="/ban-can-ho-chung-cu-c8/can-ho-trung-tam-quan-tan-phu-gia-re-tien-ich-tot-can-ho-dep-i752074" title="Căn hộ trung tâm quận Tân Phú, giá rẻ, tiện ích tốt, căn hộ đẹp">
                                                        <span>TP.HCM: </span>
                                                        Căn hộ trung tâm quận Tân  ...</a> </li>
                                                    <li><span class="bullet"></span><a href="/ban-can-ho-chung-cu-c8/can-ho-8x-dam-sen-chi-600-trieucan-la-du-an-dinh-dam-nhat-hien-nay-i752071" title="Căn hộ 8x Đầm Sen chỉ 600 triệu/căn, là dự án đình đám nhất hiện nay">
                                                        <span>TP.HCM: </span>
                                                        Căn hộ 8x Đầm Sen chỉ 600  ...</a> </li>
                                                    <li><span class="bullet"></span><a href="/ban-can-ho-chung-cu-c8/can-ho-cao-cap-co-ho-boi-phong-gym-da-hoat-dong-khuon-vien-cuc-rong-i696827" title="Căn hộ cao cấp có hồ bơi phòng gym đã hoạt động - khuôn viên cực rộng">
                                                        <span>TP.HCM: </span>
                                                        Căn hộ cao cấp có hồ bơi  ...</a> </li>
                                                    <li><span class="bullet"></span><a href="/ban-can-ho-chung-cu-c8/can-ho-duong-truong-chinh-chuan-bi-giao-nha-i696803" title="Căn hộ đường Trường Chinh, chuẩn bị giao nhà">
                                                        <span>TP.HCM: </span>
                                                        Căn hộ đường Trường Chinh,  ...</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="project_item" ><a href="/du-an">
                        DỰ ÁN</a>
                        <div class="sub_menu">
                            <div class="wrap">
                                <div class="col_178">
                                    <div class="left_menu">
                                        <ul>
                                                <li><a href="/du-an/khu-cong-nghiep-c11">Khu công nghiệp</a></li>
                                                <li><a href="/du-an/khu-dan-cu-do-thi-moi-c24">Khu dân cư – Đô thị mới </a></li>
                                                <li><a href="/du-an/khu-phuc-hop-thuong-mai-c25">Khu phức hợp - Thương mại</a></li>
                                                <li><a href="/du-an/cao-oc-van-phong-c26">Cao ốc văn phòng</a></li>
                                                <li><a href="/du-an/khu-can-ho-c27">Khu căn hộ</a></li>
                                                <li><a href="/du-an/khu-du-lich-nghi-duong-c28">Khu du lịch - Nghỉ dưỡng</a></li>
                                                <li><a href="/du-an/cong-trinh-cong-cong-c29">Công trình công cộng</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col_463">
                                    <div class="info">
                                        <div class="headline rounded_style_6 rounded_box">
                                            <div class="content">
                                                <h2>
                                                    DỰ ÁN MỚI</h2>
                                            </div>
                                        </div>
                                        <div class="content_inner rounded_style_7 rounded_box">
                                                <div class="content">
                                                    <div class="img">
                                                        <a href="/du-an/thiet-ke-c40/thiet-ke-quan-cafe-dep-i1426">
                                                            <img src="http://image.diaoconline.vn/du-an/2014/01/10/thumb-89C-thiet-ke-quan-cafe-dep.jpg" width="200" height="154" alt="Thiết kế quán cafe đẹp" title="Thiết kế quán cafe đẹp"/>
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <h2>
                                                            <a href="/du-an/thiet-ke-c40/thiet-ke-quan-cafe-dep-i1426">Thiết kế quán cafe đẹp</a></h2>
                                                        <span class="updated_date">10/01/2014 08:37</span>
                                                        <br />
                                                        <p>Ngày nay với nền kinh tế phát triển vượt bậc, xã hội ngày càng văn minh và hiện đại, vì thế mà một trong những nghành kinh doanh phát triển nhất đó là dịch vụ phục vụ cho con người về vui chơi giải trí.</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col_290 margin_left">
                                    <div class="latest">
                                        <div class="headline rounded_style_6 rounded_box">
                                            <div class="content">
                                                <h2>
                                                    CÁC DỰ ÁN KHÁC</h2>
                                            </div>
                                        </div>
                                        <div class="content_inner">
                                            <ul>
                                                    <li><span class="bullet"></span><a href="/du-an/thiet-ke-c40/thiet-ke-truong-mam-non-i1425" title="Thiết kế trường Mầm Non">
                                                        <span>TP.HCM: </span>
                                                        Thiết kế trường Mầm Non
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/du-an/khu-can-ho-c27/can-ho-van-gia-phuc-i1424" title="Căn hộ Vạn Gia Phúc">
                                                        <span>TP.HCM: </span>
                                                        Căn hộ Vạn Gia Phúc
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/du-an/khu-dan-cu-do-thi-moi-c24/the-sun-city-ba-to-quan-8-i1423" title="The Sun City Ba Tơ quận 8">
                                                        <span>TP.HCM: </span>
                                                        The Sun City Ba Tơ quận 8
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/du-an/khu-dan-cu-do-thi-moi-c24/kdc-sai-gon-moi-i1422" title="KDC Sài Gòn Mới">
                                                        <span>TP.HCM: </span>
                                                        KDC Sài Gòn Mới
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/du-an/thi-cong-c41/cai-tao-sua-chua-nha-i1421" title="Cải tạo sửa chữa nhà">
                                                        <span>TP.HCM: </span>
                                                        Cải tạo sửa chữa nhà
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/du-an/khu-can-ho-c27/can-ho-8x-dam-sen-i1420" title="Căn hộ 8X Đầm Sen">
                                                        <span>TP.HCM: </span>
                                                        Căn hộ 8X Đầm Sen
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/du-an/thi-cong-c41/cai-tao-sua-chua-nang-cap-khach-san-i1419" title="Cải tạo, sửa chữa nâng cấp khách sạn">
                                                        <span>TP.HCM: </span>
                                                        Cải tạo, sửa chữa nâng cấp khách sạn
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/du-an/khu-dan-cu-do-thi-moi-c24/xay-dung-nha-pho-dep-tai-thanh-pho-moi-binh-duong-i1418" title="Xây dựng nhà phố đẹp tại thành phố mới Bình Dương">
                                                        <span>Bình Dương: </span>
                                                        Xây dựng nhà phố đẹp tại thành phố mới  ...
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/du-an/khu-phuc-hop-thuong-mai-c25/nha-pho-thuong-mai-phu-xuan-i1414" title="Nhà phố thương mại Phú Xuân">
                                                        <span>TP.HCM: </span>
                                                        Nhà phố thương mại Phú Xuân
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li ><a href="/doanh-nghiep">
                        DOANH NGHIỆP</a></li>
                    <li ><a href="/kham-pha" >
                        KHÁM PHÁ</a>
                        <div class="sub_menu">
                            <div class="wrap">
                                <div class="col_178">
                                    <div class="left_menu">
                                        <ul>
                                                <li><a href="/kham-pha/the-gioi-kien-truc-c4">Thế giới kiến trúc</a></li>
                                                <li><a href="/kham-pha/mach-ban-c6">Mách bạn</a></li>
                                                <li><a href="/kham-pha/phong-thuy-c9">Phong thủy</a></li>
                                                <li><a href="/kham-pha/khong-gian-song-c7">Không gian sống</a></li>
                                                <li><a href="/kham-pha/shopping-cung-dool-c10">Shopping cùng DOOL</a></li>
                                                <li><a href="/kham-pha/thuong-hieu-c11">Thương hiệu</a></li>
                                                <li><a href="/kham-pha/nha-cua-sao-c76">Nhà của sao</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col_463">
                                    <div class="info">
                                        <div class="headline rounded_style_6 rounded_box">
                                            <div class="content">
                                                <h2>
                                                    KHÁM PHÁ NỔI BẬT</h2>
                                            </div>
                                        </div>
                                        <div class="content_inner rounded_style_7 rounded_box">
                                                <div class="content">
                                                    <div class="img">
                                                        <a href="/kham-pha/thuong-hieu-c11/20-thuong-hieu-noi-tieng-nhat-the-gioi-bi-nhai-boi-china-i45183">
                                                            <img src="http://image.diaoconline.vn/kham-pha/2014/01/10/thumb-588-20-thuong-hieu-noi-tieng-nhat-the-gioi-bi-nhai-boi-china.jpg" width="200" height="125" alt="20 thương hiệu nổi tiếng nhất thế giới bị nhái bởi “China”" title="20 thương hiệu nổi tiếng nhất thế giới bị nhái bởi “China”"/></a>
                                                    </div>
                                                    <div class="right">
                                                        <h2>
                                                            <a href="/kham-pha/thuong-hieu-c11/20-thuong-hieu-noi-tieng-nhat-the-gioi-bi-nhai-boi-china-i45183">20 thương hiệu nổi tiếng nhất thế giới bị nhái bởi “China”</a></h2>
                                                        <span class="updated_date">10/01/2014 16:05</span>
                                                        <br />
                                                        <p>20 thương hiệu lớn, nổi tiếng nhất thế giới đều bị các công ty Trung Quốc bắt chước thương hiệu tạo nên sự nhầm lẫn đối với người dùng.</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col_290 margin_left">
                                    <div class="latest">
                                        <div class="headline rounded_style_6 rounded_box">
                                            <div class="content">
                                                <h2>
                                                    CÁC TIN KHÁC</h2>
                                            </div>
                                        </div>
                                        <div class="content_inner">
                                            <ul>
                                                    <li><span class="bullet"></span><a href="/kham-pha/the-gioi-kien-truc-c4/nha-nguyen-trong-may-noi-thoi-gian-ngung-dong-i45176" title="Nhà nguyện trong mây - Nơi thời gian ngưng đọng" >
                                                        Nhà nguyện trong mây - Nơi thời gian  ...
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/kham-pha/khong-gian-song-c7/hang-dia-nguc-voi-nhung-bo-xuong-phat-sang-i45175" title="Hang địa ngục với những bộ xương phát sáng" >
                                                        Hang địa ngục với những bộ xương phát  ...
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/kham-pha/mach-ban-c6/bi-kip-chon-noi-that-cho-phong-khach-chat-hep-i45173" title="Bí kíp chọn nội thất cho phòng khách chật hẹp" >
                                                        Bí kíp chọn nội thất cho phòng khách  ...
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/kham-pha/nha-cua-sao-c76/chi-tiet-doc-trong-biet-thu-cua-bill-gates-i45166" title="Chi tiết độc trong biệt thự của Bill Gates" >
                                                        Chi tiết độc trong biệt thự của Bill  ...
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/kham-pha/khong-gian-song-c7/thac-niagara-dong-bang-trong-dot-lanh-ky-luc-i45165" title="Thác Niagara đóng băng trong đợt lạnh kỷ lục" >
                                                        Thác Niagara đóng băng trong đợt lạnh  ...
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/kham-pha/phong-thuy-c9/chon-hoa-tet-mang-lai-may-man-i45126" title="Chọn hoa Tết mang lại may mắn" >
                                                        Chọn hoa Tết mang lại may mắn
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/kham-pha/thuong-hieu-c11/thi-truong-mi-goi-bai-hoc-tu-mi-tien-vua-i45157" title="Thị trường mì gói: Bài học từ mì Tiến Vua" >
                                                        Thị trường mì gói: Bài học từ mì Tiến  ...
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/kham-pha/khong-gian-song-c7/top-10-diem-du-lich-hoang-da-nhat-hanh-tinh-i45155" title="Top 10 điểm du lịch hoang dã nhất hành tinh" >
                                                        Top 10 điểm du lịch hoang dã nhất hành  ...
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/kham-pha/the-gioi-kien-truc-c4/dinh-thu-chameleon-villa-2400-m2-voi-san-do-truc-thang-i45151" title="Dinh thự Chameleon Villa 2.400 m2 với sân đỗ trực thăng" >
                                                        Dinh thự Chameleon Villa 2.400 m2 với  ...
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li  class=actived ><a href="/nha-dep" >
                        NHÀ ĐẸP</a></li>
                </ul>
            </div>
            <div id="acc_section">
                <div class="left_cn">
                </div>
                <div class="right_cn">
                </div>
                    <div class="login">
                        <a href="/thanh-vien/trang-chu" class="signin"><span class="ico_16 ico_login_16">
                        </span>Về trang cá nhân</a><div class="dropdown">
                            <a href="/thanh-vien/thoat" title="Thoát">setting</a></div>
                    </div>
            </div>
            <div class="post_propertise">
                <a href="/thanh-vien/tai-san-dang-moi">ĐĂNG TÀI SẢN CỦA BẠN</a>
            </div>
        </div>
    </div>
    <div id="content_container">
        
<div class="wrap">


    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slidejs/flexslider.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slidejs/jquery.flexslider.js" type="text/javascript"></script>
     <script type="text/javascript">
         
         $(window).load(function () {
             $('#carousel').flexslider({
                 startAt: 1,
                 animation: "slide",
                 controlNav: false,
                 animationLoop: true,
                 slideshow: true,
                 itemWidth: 620,
                 itemMargin: 0,
                 itemMarginAdd:170
             });
         });
  </script>
<div id="slider" class="margin_bottom">
        <div id="carousel" class="flexslider">
          <ul class="slides">
            <li>
                <div class="slider-desc-bg"></div>
                <div class="slider-desc">
                    <a href="/nha-dep/noi-that-c7/ai-noi-mau-xam-khong-thu-hut-i413">Ai nói màu xám không thu hút?</a>
                </div>
  	    	    <a href="/nha-dep/noi-that-c7/ai-noi-mau-xam-khong-thu-hut-i413"><img src="http://image.diaoconline.vn/nha-dep/2014/01/10/large-125-mauxam_1.jpg" height="350" width="620" alt="Ai nói màu xám không thu hút?" /></a>
  	    	</li>
            <li>
                <div class="slider-desc-bg"></div>
                <div class="slider-desc">
                    <a href="/nha-dep/noi-that-c7/phong-cach-vintage-cho-can-nha-hien-dai-i412">Phong cách Vintage cho căn nhà hiện đại</a>
                </div>
  	    	    <a href="/nha-dep/noi-that-c7/phong-cach-vintage-cho-can-nha-hien-dai-i412"><img src="http://image.diaoconline.vn/nha-dep/2014/01/10/large-004-phongcanh_1.jpg" height="350" width="620" alt="Phong cách Vintage cho căn nhà hiện đại" /></a>
  	    	</li>
            <li>
                <div class="slider-desc-bg"></div>
                <div class="slider-desc">
                    <a href="/nha-dep/nha-bep-c2/nhung-mau-phong-an-dep-cho-khach-san-i411">Những mẫu phòng ăn đẹp cho khách sạn</a>
                </div>
  	    	    <a href="/nha-dep/nha-bep-c2/nhung-mau-phong-an-dep-cho-khach-san-i411"><img src="http://image.diaoconline.vn/nha-dep/2014/01/09/large-C3F-phonganchokhachsan_14.jpg" height="350" width="620" alt="Những mẫu phòng ăn đẹp cho khách sạn" /></a>
  	    	</li>
            <li>
                <div class="slider-desc-bg"></div>
                <div class="slider-desc">
                    <a href="/nha-dep/noi-that-c7/gay-an-tuong-bang-noi-that-mau-den-trong-phong-khach-i410">Gây ấn tượng bằng nội thất màu đen trong phòng khách</a>
                </div>
  	    	    <a href="/nha-dep/noi-that-c7/gay-an-tuong-bang-noi-that-mau-den-trong-phong-khach-i410"><img src="http://image.diaoconline.vn/nha-dep/2014/01/08/large-8C9-mauden_1.jpg" height="350" width="620" alt="Gây ấn tượng bằng nội thất màu đen trong phòng khách" /></a>
  	    	</li>
            <li>
                <div class="slider-desc-bg"></div>
                <div class="slider-desc">
                    <a href="/nha-dep/phong-ngu-c3/mau-neon-cho-phong-ngu-ban-da-thu-chua-i409">Màu Neon cho phòng ngủ - Bạn đã thử chưa?</a>
                </div>
  	    	    <a href="/nha-dep/phong-ngu-c3/mau-neon-cho-phong-ngu-ban-da-thu-chua-i409"><img src="http://image.diaoconline.vn/nha-dep/2014/01/08/large-C74-mauneon_6.jpg" height="350" width="620" alt="Màu Neon cho phòng ngủ - Bạn đã thử chưa?" /></a>
  	    	</li>
            <li>
                <div class="slider-desc-bg"></div>
                <div class="slider-desc">
                    <a href="/nha-dep/khac-c12/my-man-vi-goc-lam-viec-qua-phong-cach-i408">Mỹ mãn vì góc làm việc quá phong cách</a>
                </div>
  	    	    <a href="/nha-dep/khac-c12/my-man-vi-goc-lam-viec-qua-phong-cach-i408"><img src="http://image.diaoconline.vn/nha-dep/2014/01/06/large-FEF-goclamviec_7.jpg" height="350" width="620" alt="Mỹ mãn vì góc làm việc quá phong cách" /></a>
  	    	</li>
            <li>
                <div class="slider-desc-bg"></div>
                <div class="slider-desc">
                    <a href="/nha-dep/noi-that-c7/ngam-can-ho-cuc-an-tuong-nho-phu-kien-sac-so-i407">Ngắm căn hộ cực ấn tượng nhờ phụ kiện sặc sỡ</a>
                </div>
  	    	    <a href="/nha-dep/noi-that-c7/ngam-can-ho-cuc-an-tuong-nho-phu-kien-sac-so-i407"><img src="http://image.diaoconline.vn/nha-dep/2014/01/06/large-57B-phukien_12.jpg" height="350" width="620" alt="Ngắm căn hộ cực ấn tượng nhờ phụ kiện sặc sỡ" /></a>
  	    	</li>
            <li>
                <div class="slider-desc-bg"></div>
                <div class="slider-desc">
                    <a href="/nha-dep/noi-that-c7/nhung-mau-ghe-tuyet-dep-cho-ngoi-nha-them-xinh-i406">Những mẫu ghế tuyệt đẹp cho ngôi nhà thêm xinh</a>
                </div>
  	    	    <a href="/nha-dep/noi-that-c7/nhung-mau-ghe-tuyet-dep-cho-ngoi-nha-them-xinh-i406"><img src="http://image.diaoconline.vn/nha-dep/2014/01/06/large-893-maughe_6.jpg" height="350" width="620" alt="Những mẫu ghế tuyệt đẹp cho ngôi nhà thêm xinh" /></a>
  	    	</li>
            <li>
                <div class="slider-desc-bg"></div>
                <div class="slider-desc">
                    <a href="/nha-dep/phong-khach-c8/30-kieu-phong-khach-dep-nhat-2013-i405">30 kiểu phòng khách đẹp nhất 2013</a>
                </div>
  	    	    <a href="/nha-dep/phong-khach-c8/30-kieu-phong-khach-dep-nhat-2013-i405"><img src="http://image.diaoconline.vn/nha-dep/2014/01/06/large-C9E-phongkhach2013_27.jpg" height="350" width="620" alt="30 kiểu phòng khách đẹp nhất 2013" /></a>
  	    	</li>
            <li>
                <div class="slider-desc-bg"></div>
                <div class="slider-desc">
                    <a href="/nha-dep/phong-khach-c8/xu-huong-thiet-ke-phong-khach-nam-2014-i404">Xu hướng thiết kế phòng khách năm 2014</a>
                </div>
  	    	    <a href="/nha-dep/phong-khach-c8/xu-huong-thiet-ke-phong-khach-nam-2014-i404"><img src="http://image.diaoconline.vn/nha-dep/2014/01/03/large-07F-xuhongphongkhach_9.jpg" height="350" width="620" alt="Xu hướng thiết kế phòng khách năm 2014" /></a>
  	    	</li>
          </ul>
        </div>
</div>
    <?php echo $this->load->base_url();?>
<div id="shopping" class="wrap margin_bottom">
    <div class="rounded_style_4 rounded_box">
        <div class="content">
            <div class="top">
                <h2 class="headline"><a href="/kham-pha/shopping-cung-dool-c10"><span>Shopping Cùng DOOL</span></a></h2>
                
            </div>
            <div class="show">
                <ul>
                    <li class="shop_block ">
                        <div class="BL"></div>
                        <div class="BR"></div>
                        <div class="content">
                            <a href="/kham-pha/shopping-cung-dool-c10/tet-sum-vay-voi-bo-ban-an-dep-lung-linh-gia-duoi-2-trieu-dong-i45094"><img src="http://image.diaoconline.vn/kham-pha/2014/01/07/thumb-E94-tet-sum-vay-voi-bo-ban-an-dep-lung-linh-gia-duoi-2-trieu-dong.jpg" width="160" height="124" alt="Tết sum vầy với bộ bàn ăn đẹp lung linh giá dưới 2 triệu đồng"/></a>
                            <a href="/kham-pha/shopping-cung-dool-c10/tet-sum-vay-voi-bo-ban-an-dep-lung-linh-gia-duoi-2-trieu-dong-i45094">Tết sum vầy với bộ bàn ăn đẹp lung linh giá dưới 2 triệu đồng</a> 
	                    </div>
                    </li>
                    <li class="shop_block ">
                        <div class="BL"></div>
                        <div class="BR"></div>
                        <div class="content">
                            <a href="/kham-pha/shopping-cung-dool-c10/ke-dung-gia-vi-dep-cho-bep-them-phong-cach-i44992"><img src="http://image.diaoconline.vn/kham-pha/2014/01/02/thumb-D21-ke-dung-gia-vi-dep-cho-bep-them-phong-cach.jpg" width="160" height="124" alt="Kệ đựng gia vị đẹp cho bếp thêm phong cách"/></a>
                            <a href="/kham-pha/shopping-cung-dool-c10/ke-dung-gia-vi-dep-cho-bep-them-phong-cach-i44992">Kệ đựng gia vị đẹp cho bếp thêm phong cách</a> 
	                    </div>
                    </li>
                    <li class="shop_block ">
                        <div class="BL"></div>
                        <div class="BR"></div>
                        <div class="content">
                            <a href="/kham-pha/shopping-cung-dool-c10/mua-sam-tet-voi-uu-dai-den-70-cung-edena-i44854"><img src="http://image.diaoconline.vn/kham-pha/2013/12/26/thumb-BA6-mua-sam-tet-voi-uu-dai-den-70-cung-edena.jpg" width="160" height="124" alt="Mua sắm tết với ưu đãi đến 70% cùng Edena"/></a>
                            <a href="/kham-pha/shopping-cung-dool-c10/mua-sam-tet-voi-uu-dai-den-70-cung-edena-i44854">Mua sắm tết với ưu đãi đến 70% cùng Edena</a> 
	                    </div>
                    </li>
                    <li class="shop_block ">
                        <div class="BL"></div>
                        <div class="BR"></div>
                        <div class="content">
                            <a href="/kham-pha/shopping-cung-dool-c10/giang-sinh-ron-rang-cung-sac-do-i44790"><img src="http://image.diaoconline.vn/kham-pha/2013/12/23/thumb-D39-giang-sinh-ron-rang-cung-sac-do.jpg" width="160" height="124" alt="Giáng sinh rộn ràng cùng sắc đỏ"/></a>
                            <a href="/kham-pha/shopping-cung-dool-c10/giang-sinh-ron-rang-cung-sac-do-i44790">Giáng sinh rộn ràng cùng sắc đỏ</a> 
	                    </div>
                    </li>
                    <li class="shop_block last">
                        <div class="BL"></div>
                        <div class="BR"></div>
                        <div class="content">
                            <a href="/kham-pha/shopping-cung-dool-c10/mua-gi-de-trang-tri-dip-giang-sinh-nay-i44500"><img src="http://image.diaoconline.vn/kham-pha/2013/12/10/thumb-36F-trang-tri-giang-sinh-phong-cach-tay-gia-viet.jpg" width="160" height="124" alt="Mua gì để trang trí dịp giáng sinh này?"/></a>
                            <a href="/kham-pha/shopping-cung-dool-c10/mua-gi-de-trang-tri-dip-giang-sinh-nay-i44500">Mua gì để trang trí dịp giáng sinh này?</a> 
	                    </div>
                    </li>
                </ul>
            </div>
        </div>    
    </div>
    <p class="note"></p>
</div>
</div>

	</div>
    <!--FOOTER-->
<div id="footer">
    
    <div id="footer_top">
<div id="bottom_menu" class="wrap">
                <div id="news_menu">
                    <h4>»THÔNG TIN ĐỊA ỐC</h4>
                    <ul>
                        <li><a href="/tin-tuc/thi-truong-dia-oc-c18">Thị trường địa ốc</a></li>
                        <li><a href="/tin-tuc/hoat-dong-doanh-nghiep-c23">Hoạt động Doanh nghiệp</a></li>
                        <li><a href="/tin-tuc/chinh-sach-quy-hoach-c16">Chính sách - Quy hoạch</a></li>
                        <li><a href="/tin-tuc/tai-chinh-chung-khoan-c57">Tài chính - Chứng khoán</a></li>
                        <li><a href="/tin-tuc/xay-dung-c25">Xây dựng</a></li>
                        <li><a href="/tin-tuc/bat-dong-san-the-gioi-c24">Bất động sản thế giới</a></li>
                    </ul>
                </div>
                <div id="market_menu">
                    <h4>»SIÊU THỊ ĐỊA ỐC</h4>
                    <ul>
                        <li>
                            <a href="/sieu-thi/nha-pho-c20">Nhà phố</a>
                        </li>
                        <li>
                            <a href="/sieu-thi/villa-biet-thu-c1">Villa - Biệt thự</a>
                        </li>
                        <li>
                            <a href="/sieu-thi/can-ho-chung-cu-c8">Căn hộ chung cư</a>
                        </li>
                        <li>
                            <a href="/sieu-thi/dat-o-dat-tho-cu-c11">Đất ở - Đất thổ cư</a>
                        </li>
                        <li>
                            <a href="/sieu-thi/dat-du-an-quy-hoach-c12">Đất dự án - Quy hoạch</a>
                        </li>
                        <li>
                            <a href="/sieu-thi/van-phong-c9">Văn phòng</a>
                        </li>
                    </ul>
                </div>
                <div id="project_menu">
                    <h4>»DỰ ÁN</h4>
                    <ul>
                            <li><a href="/du-an/khu-cong-nghiep-c11">Khu công nghiệp</a></li>
                            <li><a href="/du-an/khu-dan-cu-do-thi-moi-c24">Khu dân cư – Đô thị mới </a></li>
                            <li><a href="/du-an/khu-phuc-hop-thuong-mai-c25">Khu phức hợp - Thương mại</a></li>
                            <li><a href="/du-an/cao-oc-van-phong-c26">Cao ốc văn phòng</a></li>
                            <li><a href="/du-an/khu-can-ho-c27">Khu căn hộ</a></li>
                            <li><a href="/du-an/khu-du-lich-nghi-duong-c28">Khu du lịch - Nghỉ dưỡng</a></li>
                    </ul>
                </div>
                <div id="company_menu">
                    <h4>»DOANH NGHIỆP ĐỊA ỐC</h4>
                    <ul>
                            <li>
                                <a href="/doanh-nghiep/moi-gioi-dia-oc-c1">Môi giới địa ốc</a>
                            </li>
                            <li>
                                <a href="/doanh-nghiep/vlxd-thi-cong-c3">VLXD & Thi công</a>
                            </li>
                            <li>
                                <a href="/doanh-nghiep/tai-chinh-phap-ly-c6">Tài chính pháp lý</a>
                            </li>
                            <li>
                                <a href="/doanh-nghiep/dau-tu-du-an-c12">Đầu tư - Dự án</a>
                            </li>
                            <li>
                                <a href="/doanh-nghiep/thiet-ke-trang-tri-c14">Thiết kế - Trang trí</a>
                            </li>
                            <li>
                                <a href="/doanh-nghiep/truyen-thong-quang-cao-c16">Truyền thông - Quảng cáo</a>
                            </li>
                    </ul>
                </div>
                <div id="discover_menu" class="last">
                    <h4>
                        »KHÁM PHÁ - TRẢI NGHIỆM</h4>
                    <ul>
                            <li><a href="/kham-pha/the-gioi-kien-truc-c4">Thế giới kiến trúc</a></li>
                            <li><a href="/kham-pha/mach-ban-c6">Mách bạn</a></li>
                            <li><a href="/kham-pha/phong-thuy-c9">Phong thủy</a></li>
                            <li><a href="/kham-pha/khong-gian-song-c7">Không gian sống</a></li>
                            <li><a href="/kham-pha/shopping-cung-dool-c10">Shopping cùng DOOL</a></li>
                            <li><a href="/kham-pha/thuong-hieu-c11">Thương hiệu</a></li>
                    </ul>
                </div>
</div>
     
        <div class="wrap">
            <div id="social_network" class="white_border_box rounded_box">
                <div class="content">
                    <div class="like">
                    <div style="margin-bottom:5px;">
                        <h2>Hỗ trợ kỹ thuật</h2>
                        <span class="phone">0909<span></span>480<span></span>599</span><span>(Mr. Đạt)</span>
                        </div>
                        <br />
                        
                        <h2><a href="http://adv.diaoconline.vn/AboutUs/hotrotructuyen.html" target="_blank">Hỗ trợ trực tuyến</a></h2>
                    </div>
                    <div class="join_network">
                        <h4>KẾT NỐI VỚI CHÚNG TÔI TẠI: </h4>
                        <ul>
                        <li class="facebook"><a href="http://facebook.com/diaoconlinefc" target="_blank">facebook</a></li>
                        <li class="twitter"><a href="https://twitter.com/DiaOcOnlinevn" target="_blank">twitter</a></li>
                        <li class="youtube"><a href="http://www.youtube.com/diaoconline" target="_blank">youtube</a></li>
                        <li class="google"><a href="https://plus.google.com/u/1/b/101503616522434888485/" target="_blank">google</a></li>
                        <li class="linkedin"><a href="http://www.linkedin.com/in/diaoconline" target="_blank">linkedin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="dool_network" class="white_border_box rounded_box">
                <div class="content">
					<h4>DIAOCONLINE.VN NETWORK</h4>
                    <ul>  
                    <li class="dool"><a href="http://www.diaoconline.vn">Diaoconline</a></li>
                    <li class="roi"><a href="http://www.rol.vn">Vietnam Real estate Online</a></li>
                    <li class="tv"><a href="http://tv.diaoconline.vn">địa ốc TV</a></li>
                    <li class="map"><a href="http://map.diaoconline.vn">địa ốc map</a></li>
                    </ul>
                </div>
            </div>
            <div id="misc" class="rounded_style_3 rounded_box">
                <div class="content">
                   	<ul>
                    <li class="btn_help_center first"><a href="http://adv.diaoconline.vn/AboutUs/trogiup.html" target="_blank"><span></span>TRUNG TÂM TRỢ GIÚP</a></li>
                    <li class="btn_ad_price_list"><a href="http://adv.diaoconline.vn/AboutUs/banggia.html" target="_blank"><span></span>BẢNG GIÁ QUẢNG CÁO</a></li>
                    <li class="btn_point_load"><a href="http://adv.diaoconline.vn/AboutUs/trogiup_tphi_napthe.html" target="_blank"><span></span>NẠP ĐIỂM DOOL</a></li>
                    <li class="btn_our_services"><a href="http://adv.diaoconline.vn/AboutUs/dichvu.html" target="_blank"><span></span>DỊCH VỤ CỦA CHÚNG TÔI</a></li>
                    <li class="btn_post_guide"><a href="http://adv.diaoconline.vn/AboutUs/trogiup_tdang.html" target="_blank"><span></span>HƯỚNG DẪN ĐĂNG TIN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="footer_bottom">
        <div id="foot_content" class="wrap">
        <div id="foot_nav">
            <ul>
            <li class="first"><a href="http://adv.diaoconline.vn/AboutUs" target="_blank">Về chúng tôi</a></li>
            <li><a href="http://adv.diaoconline.vn/AboutUs/trogiup.html" target="_blank">Hướng dẫn sử dụng</a></li>
            <li><a href="/quy-dinh-su-dung">Quy định sử dụng</a></li>
            <li><a href="/dieu-khoan-thoa-thuan">Điều khoản thỏa thuận</a></li>
      
            <li><a href="/chinh-sach-bao-mat">Chính sách bảo mật</a></li>
            <li><a href="/lien-he">Liên hệ</a></li>
            <li><a href="/rss"><img width="36" height="14" alt="rss diaoconline" src="<?php echo base_url();?>template/home_ezwebvietnam/Content/images/icon_rss.gif"/></a></li>
            </ul>
        </div>
        <div class="copyright">
        <p>Copyright © 2007 - 2013 DiaOcOnline Corp. ® Ghi rõ nguồn "DiaOcOnline.vn" khi phát hành lại thông tin từ website này.<br />
Giấy xác nhận cung cấp dịch vụ mạng xã hội trực tuyến số 131/GXN-TTĐT do Cục QL Phát thanh, Truyền hình và Thông tin điện tử cấp.<br />
Giấy phép ICP số 07/GP-ICP-STTTT do Sở Thông tin và Truyền thông TP. HCM cấp.</br>
Công ty Cổ phần Địa ốc Trực Tuyến. Tầng trệt toà nhà TS, Số 17 Đường số 2, Cư xá Đô Thành, Quận 3, TPHCM, Viet Nam. Tel: (08) 38181 589  Fax: (08) 38181 590
</p>

        </div>
    </div>
    </div>
</div>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/uniform/uniform.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/script.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/tooltip/tooltipsy.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slides/slides.min.jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/doolv3.js?0055" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
</div>
</body>
</html>