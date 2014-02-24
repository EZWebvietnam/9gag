
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <title>Cổng thông tin & Giao dịch - DCBLand.COM</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/general.css?0952" rel="stylesheet" type="text/css" />
    <!--[if IE 7]>
    <link href="css/ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/Member.css" rel="stylesheet" type="text/css" />
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
    <div id="b_left" style="right: 1160.5px; z-index: 1000; position: absolute; top: 78px;" class="">

<div id="position_64" class="">
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
</div>
<script type="text/javascript">var Banner64=1;function Random_Banner64(){    var _Arr=document.getElementById("position_64").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner64 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner64 - 1]).html(); $(_Arr[Banner64 - 1]).html(''); $(_Arr[Banner64 - 1]).html(tempBanner);    window.setTimeout("Random_Banner64()" ,25000);    Banner64 = Banner64 + 1;    if(Banner64 > _Arr.length)        Banner64 = 1;}Random_Banner64();</script>

<div id="position_65" class="">
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
</div>
<script type="text/javascript">var Banner65=1;function Random_Banner65(){    var _Arr=document.getElementById("position_65").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner65 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner65 - 1]).html(); $(_Arr[Banner65 - 1]).html(''); $(_Arr[Banner65 - 1]).html(tempBanner);    window.setTimeout("Random_Banner65()" ,25000);    Banner65 = Banner65 + 1;    if(Banner65 > _Arr.length)        Banner65 = 1;}Random_Banner65();</script>
    </div>
    <div id="b_right" style="right: 90.5px; z-index: 1000; position: absolute; top: 78px;" class="">

<div id="position_66" class="">
<?php 
if(empty($vi_tri_3))
{
?>
<?php
}
else
{
    $i = 1;
    foreach($vi_tri_3 as $vt_3)
    {
        if($i==1)
        {
    ?>
<div class="bannerHide">
<a href="<?php echo $vt_3['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_3['file']?>" width="100px" height="300px">
</a>
</div>
<?php } if($i==2)
{?>
<div class="bannerShow">
<a href="<?php echo $vt_3['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_3['file']?>" width="100px" height="300px">
</a>
</div>
<?php } $i++;} } ?>
</div>
<script type="text/javascript">var Banner66=1;function Random_Banner66(){    var _Arr=document.getElementById("position_66").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner66 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner66 - 1]).html(); $(_Arr[Banner66 - 1]).html(''); $(_Arr[Banner66 - 1]).html(tempBanner);    window.setTimeout("Random_Banner66()" ,25000);    Banner66 = Banner66 + 1;    if(Banner66 > _Arr.length)        Banner66 = 1;}Random_Banner66();</script>

<div id="position_67" class="">
<?php 
if(empty($vi_tri_4))
{
?>
<?php
}
else
{
    $i = 1;
    foreach($vi_tri_4 as $vt_4)
    {
        if($i==1)
        {
    ?>
<div class="bannerHide">
<a href="<?php echo $vt_4['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_4['file']?>" width="100px" height="300px">
</a>
</div>
<?php } if($i==2)
{?>
<div class="bannerShow">
<a href="<?php echo $vt_4['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_4['file']?>" width="100px" height="300px">
</a>
</div>
<?php } $i++;} } ?>
</div><script type="text/javascript">var Banner67=1;function Random_Banner67(){    var _Arr=document.getElementById("position_67").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner67 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner67 - 1]).html(); $(_Arr[Banner67 - 1]).html(''); $(_Arr[Banner67 - 1]).html(tempBanner);    window.setTimeout("Random_Banner67()" ,25000);    Banner67 = Banner67 + 1;    if(Banner67 > _Arr.length)        Banner67 = 1;}Random_Banner67();</script>
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
            <span id="logo"><a href="/" title="Về trang chủ DCBLand.COM">DCBLand.COM</a></span>
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
                                                        <a href="/tin-tuc/thi-truong-dia-oc-c18/niem-tin-vao-thi-truong-dia-oc-dang-dan-duoc-hoi-phuc-i45346">
                                                            <img src="http://image.diaoconline.vn/tin-tuc/2014/01/20/thumb-2EE-niem-tin-vao-thi-truong-dia-oc-dang-dan-duoc-hoi-phuc.jpg" width="200" height="154" alt="Niềm tin vào thị trường địa ốc đang dần được hồi phục" title="Niềm tin vào thị trường địa ốc đang dần được hồi phục"/>
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <h2>
                                                            <a href="/tin-tuc/thi-truong-dia-oc-c18/niem-tin-vao-thi-truong-dia-oc-dang-dan-duoc-hoi-phuc-i45346">Niềm tin vào thị trường địa ốc đang dần được hồi phục</a></h2>
                                                        <span class="updated_date">46 ph&#250;t trước</span>
                                                        <br />
                                                        <p>Đánh giá về thị trường bất động sản 2014, Bộ trưởng Bộ Xây dựng Trịnh Đình Dũng cho biết, niềm tin vào thị trường đang dần được hồi phục và triển vọng phục hồi của thị trường khá tích cực.</p>
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
                                                    <li><span class="bullet"></span><a href="/tin-tuc/thi-truong-dia-oc-c18/nam-2014-thanh-lap-59-doan-thanh-tra-trong-linh-vuc-bat-dong-san-i45345" title="Năm 2014 thành lập 59 đoàn thanh tra trong lĩnh vực bất động sản">
                                                        Năm 2014 thành lập 59 đoàn thanh tra  ...
                                                    </a></li> 
                                                    <li><span class="bullet"></span><a href="/tin-tuc/thi-truong-dia-oc-c18/loi-nhuan-7-tu-mua-can-ho-cho-thue-lai-i45344" title="Lợi nhuận 7% từ mua căn hộ cho thuê lại">
                                                        Lợi nhuận 7% từ mua căn hộ cho thuê lại
                                                    </a></li> 
                                                    <li><span class="bullet"></span><a href="/tin-tuc/thi-truong-dia-oc-c18/chung-cu-binh-dan-diem-sang-thi-truong-2014-i45343" title="Chung cư bình dân: Điểm sáng thị trường 2014">
                                                        Chung cư bình dân: Điểm sáng thị trường  ...
                                                    </a></li> 
                                                    <li><span class="bullet"></span><a href="/tin-tuc/tai-chinh-chung-khoan-c57/giai-ngan-goi-30-nghin-ty-tang-61-i45342" title="Giải ngân gói 30 nghìn tỷ tăng 61%">
                                                        Giải ngân gói 30 nghìn tỷ tăng 61%
                                                    </a></li> 
                                                    <li><span class="bullet"></span><a href="/tin-tuc/thi-truong-dia-oc-c18/dat-nen-gia-re-canh-tranh-gianh-khach-chung-cu-i45341" title="Đất nền giá rẻ cạnh tranh giành khách chung cư">
                                                        Đất nền giá rẻ cạnh tranh giành khách  ...
                                                    </a></li> 
                                                    <li><span class="bullet"></span><a href="/tin-tuc/thi-truong-dia-oc-c18/ha-noi-chi-1000-ty-cap-so-dotrong-tam-la-do-dac-i45340" title="Hà Nội chi 1000 tỷ cấp sổ đỏ:Trọng tâm là đo đạc">
                                                        Hà Nội chi 1000 tỷ cấp sổ đỏ:Trọng tâm  ...
                                                    </a></li> 
                                                    <li><span class="bullet"></span><a href="/tin-tuc/chinh-sach-quy-hoach-c16/tang-quyen-loi-cho-nguoi-bi-thu-hoi-dat-i45339" title="Tăng quyền lợi cho người bị thu hồi đất">
                                                        Tăng quyền lợi cho người bị thu hồi đất
                                                    </a></li> 
                                                    <li><span class="bullet"></span><a href="/tin-tuc/chinh-sach-quy-hoach-c16/lap-quy-hoach-1500-cong-trinh-ngam-tai-cong-vien-lon-nhat-tphcm-i45338" title="Lập quy hoạch 1/500 công trình ngầm tại công viên lớn nhất TP.HCM">
                                                        Lập quy hoạch 1/500 công trình ngầm tại  ...
                                                    </a></li> 
                                                    <li><span class="bullet"></span><a href="/tin-tuc/thi-truong-dia-oc-c18/se-quy-dinh-rat-moi-ve-so-huu-chung-cu-i45337" title="Sẽ quy định rất mới về sở hữu chung cư?">
                                                        Sẽ quy định rất mới về sở hữu chung cư?
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
                                                        <a href="/ban-can-ho-chung-cu-c8/ban-can-ho-the-park-residence-nha-be-q7-gia-135-trieum2-i745912">
                                                            <img src="http://image.diaoconline.vn/sieu-thi/can-ho-chung-cu.jpg" width="140" height="140"  alt="Bán căn hộ The Park Residence, Nhà Bè, Q.7, giá: 13,5 triệu/m2" title="Bán căn hộ The Park Residence, Nhà Bè, Q.7, giá: 13,5 triệu/m2"/></a>
                                                        <h3>
                                                            <a href="/ban-can-ho-chung-cu-c8/ban-can-ho-the-park-residence-nha-be-q7-gia-135-trieum2-i745912">
                                                                Bán căn hộ The Park Residence, Nhà Bè,  ...
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div class="real_block">
                                                        <a href="/ban-can-ho-cao-cap-c10/lh-mua-nhanh-cac-can-estella-quan-2-tu-cdt-de-uu-dai-50-nhan-nha-i684887">
                                                            <img src="http://image.diaoconline.vn/sieu-thi/2013/10/08/thumb-363-FB73A9.jpg" width="140" height="140"  alt="LH mua nhanh các căn Estella quận 2 từ CĐT để ưu đãi 50% nhận nhà" title="LH mua nhanh các căn Estella quận 2 từ CĐT để ưu đãi 50% nhận nhà"/></a>
                                                        <h3>
                                                            <a href="/ban-can-ho-cao-cap-c10/lh-mua-nhanh-cac-can-estella-quan-2-tu-cdt-de-uu-dai-50-nhan-nha-i684887">
                                                                LH mua nhanh các căn Estella quận 2 từ  ...
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div class="real_block last">
                                                        <a href="/ban-can-ho-chung-cu-c8/ban-can-ho-parc-spring-q2-gia-11-tycan-68-m2-2pn-view-dep-i748575">
                                                            <img src="http://image.diaoconline.vn/sieu-thi/2014/01/02/thumb-CE5-0F5E4F.jpg" width="140" height="140"  alt="Bán căn hộ PARC Spring, Q.2, giá: 1,1 tỷ/căn, 68 m2, 2PN, view đẹp" title="Bán căn hộ PARC Spring, Q.2, giá: 1,1 tỷ/căn, 68 m2, 2PN, view đẹp"/></a>
                                                        <h3>
                                                            <a href="/ban-can-ho-chung-cu-c8/ban-can-ho-parc-spring-q2-gia-11-tycan-68-m2-2pn-view-dep-i748575">
                                                                Bán căn hộ PARC Spring, Q.2, giá: 1,1  ...
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
                                                    <li><span class="bullet"></span><a href="/ban-can-ho-cao-cap-c10/ban-can-ho-the-vista-50-nhan-nha-i714465" title="Bán căn hộ the Vista, 50% nhận nhà">
                                                        <span>TP.HCM: </span>
                                                        Bán căn hộ the Vista, 50%  ...</a> </li>
                                                    <li><span class="bullet"></span><a href="/ban-can-ho-cao-cap-c10/ban-can-ho-the-estella-q2-thanh-toan-50-nhan-nha-ho-tro-trong-2-nam-i738848" title="Bán căn hộ The Estella, Q.2, thanh toán 50% nhận nhà, hỗ trợ trong 2 năm">
                                                        <span>TP.HCM: </span>
                                                        Bán căn hộ The Estella, Q.2,  ...</a> </li>
                                                    <li><span class="bullet"></span><a href="/ban-can-ho-cao-cap-c10/ban-can-ho-cao-cap-q2-gia-re-nhat-nhanh-tay-chi-16-trieum2-2-phong-ngu-i721779" title="Bán căn hộ cao cấp Q.2, giá rẻ nhất, nhanh tay chỉ 16 triệu/m2, 2 phòng ngủ">
                                                        <span>TP.HCM: </span>
                                                        Bán căn hộ cao cấp Q.2, giá  ...</a> </li>
                                                    <li><span class="bullet"></span><a href="/ban-can-ho-cao-cap-c10/ban-can-ho-lexington-q2-21-trieum2-i697781" title="Bán căn hộ Lexington, Q2, 21 triệu/m2">
                                                        <span>TP.HCM: </span>
                                                        Bán căn hộ Lexington, Q2, 21  ...</a> </li>
                                                    <li><span class="bullet"></span><a href="/ban-can-ho-cao-cap-c10/ban-can-ho-surise-city-quan-7-gia-235-trieum2-trung-can-ho-18-ty-i708622" title="Bán căn hộ Surise City, quận 7, giá 23,5 triệu/m2 trúng căn hộ 1,8 tỷ.">
                                                        <span>TP.HCM: </span>
                                                        Bán căn hộ Surise City, quận  ...</a> </li>
                                                    <li><span class="bullet"></span><a href="/ban-can-ho-cao-cap-c10/ban-lo-can-ho-sunrise-city-60m2-thap-hon-chu-dau-tu-600tr-i679454" title="Bán lỗ căn hộ Sunrise City 60m2 thấp hơn chủ đầu tư 600tr">
                                                        <span>TP.HCM: </span>
                                                        Bán lỗ căn hộ Sunrise City  ...</a> </li>
                                                    <li><span class="bullet"></span><a href="/ban-can-ho-chung-cu-c8/ban-can-ho-sunrise-city-chiet-khau-cao-nhat-gia-re-nhat-i701112" title="Bán căn hộ Sunrise City chiết khấu cao nhất, giá rẻ nhất">
                                                        <span>TP.HCM: </span>
                                                        Bán căn hộ Sunrise City chiết  ...</a> </li>
                                                    <li><span class="bullet"></span><a href="/ban-can-ho-cao-cap-c10/ban-can-ho-tropic-garden-can-ho-san-vuon-112m2-view-song-i752608" title="Bán căn hộ Tropic Garden, căn hộ sân vườn: 112m2, view sông">
                                                        <span>TP.HCM: </span>
                                                        Bán căn hộ Tropic Garden, căn  ...</a> </li>
                                                    <li><span class="bullet"></span><a href="/ban-can-ho-cao-cap-c10/ban-can-ho-trung-tam-q2-gia-11-tycan-2-pn-68m2-noi-that-cao-cap-i748594" title="Bán căn hộ trung tâm Q.2, giá: 1,1 tỷ/căn, 2 PN, 68m2, nội thất cao cấp">
                                                        <span>TP.HCM: </span>
                                                        Bán căn hộ trung tâm Q.2,  ...</a> </li>
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
                                                        <a href="/kham-pha/the-gioi-kien-truc-c4/10-khach-san-sieu-doc-dao-o-cape-town-i45347">
                                                            <img src="http://image.diaoconline.vn/kham-pha/2014/01/20/thumb-6CA-10-khach-san-sieu-doc-dao-o-cape-town.jpg" width="200" height="125" alt="10 khách sạn siêu độc đáo ở Cape Town" title="10 khách sạn siêu độc đáo ở Cape Town"/></a>
                                                    </div>
                                                    <div class="right">
                                                        <h2>
                                                            <a href="/kham-pha/the-gioi-kien-truc-c4/10-khach-san-sieu-doc-dao-o-cape-town-i45347">10 khách sạn siêu độc đáo ở Cape Town</a></h2>
                                                        <span class="updated_date">44 ph&#250;t trước</span>
                                                        <br />
                                                        <p>Khách sạn trong hang núi, nhà tù hay lơ lửng giữa biển tại thủ đô Nam Phi đem lại cho du khách trải nghiệm khó quên.</p>
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
                                                    <li><span class="bullet"></span><a href="/kham-pha/the-gioi-kien-truc-c4/10-kien-truc-hien-dai-gay-kinh-ngac-i45319" title="10 kiến trúc hiện đại gây kinh ngạc" >
                                                        10 kiến trúc hiện đại gây kinh ngạc
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/kham-pha/thuong-hieu-c11/bai-hoc-khoi-nghiep-tu-de-che-thoi-trang-coco-chanel-i45318" title="Bài học khởi nghiệp từ đế chế thời trang Coco Chanel" >
                                                        Bài học khởi nghiệp từ đế chế thời  ...
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/kham-pha/khong-gian-song-c7/riga-thu-do-van-hoa-chau-au-2014-i45309" title="Riga – thủ đô văn hoá châu Âu 2014" >
                                                        Riga – thủ đô văn hoá châu Âu 2014
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/kham-pha/phong-thuy-c9/phong-tuc-cung-le-tao-quan-i37441" title="Phong tục cúng lễ Táo Quân" >
                                                        Phong tục cúng lễ Táo Quân
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/kham-pha/khong-gian-song-c7/10-dia-danh-thien-nhien-thuc-nhu-ao-i45300" title="10 địa danh thiên nhiên thực như ảo" >
                                                        10 địa danh thiên nhiên thực như ảo
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/kham-pha/phong-thuy-c9/yeu-to-phong-thuy-can-chu-y-khi-don-nha-cuoi-nam-i45266" title="Yếu tố phong thủy cần chú ý khi dọn nhà cuối năm" >
                                                        Yếu tố phong thủy cần chú ý khi dọn nhà  ...
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/kham-pha/mach-ban-c6/3-khong-gian-trong-yeu-trong-trang-tri-nha-don-tet-i45296" title="3 không gian trọng yếu trong trang trí nhà đón Tết" >
                                                        3 không gian trọng yếu trong trang trí  ...
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/kham-pha/thuong-hieu-c11/tai-nan-khi-dich-thuat-cua-cac-thuong-hieu-i45302" title="Tai nạn khi dịch thuật của các thương hiệu" >
                                                        Tai nạn khi dịch thuật của các  ...
                                                    </a></li>
                                                    <li><span class="bullet"></span><a href="/kham-pha/khong-gian-song-c7/ky-la-buc-tuong-noi-nhac-khi-troi-mua-tai-duc-i45299" title="Kỳ lạ bức tường nổi nhạc khi trời mưa tại Đức" >
                                                        Kỳ lạ bức tường nổi nhạc khi trời mưa  ...
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li ><a href="/nha-dep" >
                        NHÀ ĐẸP</a></li>
                </ul>
            </div>
            <div id="acc_section">
                <div class="left_cn">
                </div>
                <div class="right_cn">
                </div>
                    <div class="content default">
                        <ul>
                            <li class="login"><span class="login_ico ico_24 ico_login_24"></span><a href="/dang-nhap">
                                Đăng nhập</a></li>
                            <li class="register"><span class="register_ico ico_24 ico_register_24"></span><a href="/dang-ky" class="register">
                                Đăng ký</a></li>
                        </ul>
                    </div>
            </div>
            <div class="post_propertise">
                <a href="/thanh-vien/tai-san-dang-moi">ĐĂNG TÀI SẢN CỦA BẠN</a>
            </div>
        </div>
    </div>
    <div id="content_container">
        
    <script type="text/javascript">
        $(function () {
            var u = $('#UserName');
            var ucheck = $('#usercheck');
         
            u.focusout(function (e) {
                if (u.val().length == 0) {
                    ucheck.attr('style', 'display:none');
                    return false;
                }

                if (u.val().length < 3) {
                    ucheck.attr('style', 'display:block');
                    ucheck.addClass('ico_16 ico_error_16');
                    ucheck.attr('title', 'Vui lòng chọn tên đăng nhập khác.');
                    return false;
                }
            });
            ucheck.attr('style', 'display:none');
            u.keyup(function (e) {
                // 96 => 105, 48 57, 65 90
                if ((e.keyCode >= 48 && e.keyCode <= 57)
                || (e.keyCode >= 65 && e.keyCode <= 90)
                || (e.keyCode >= 96 && e.keyCode <= 105)
                || e.keyCode == 8 || e.keyCode == 46) {
                    if (u.val().length == 0) {
                        ucheck.attr('style', 'display:none');
                        return false;
                    }
                    ucheck.attr('style', 'display:block');
                    if (u.val().length > 0 && u.val().length < 3) {
                        ucheck.removeClass();
                        ucheck.addClass('ico_16 ico_error_16');
                        ucheck.attr('title', 'Vui lòng chọn tên đăng nhập khác.');
                        u.focus();
                        return false;
                    }
                    $.ajax({
                        type: 'POST',
                        url: '/thanh-vien/kiem-tra',
                        data: { user: u.val() },
                        dataType: "json",
                        success: function (data) {
                            if (data != null) {
                                ucheck.removeClass();
                                if (data.msg == true) {
                                    ucheck.addClass('ico_16 ico_check_16');
                                    ucheck.attr('title','Tên đăng nhập hợp lệ.');
                                } else {
                                    ucheck.addClass('ico_16 ico_error_16');
                                    ucheck.attr('title', 'Vui lòng chọn tên đăng nhập khác.');
                                }
                                ucheck.fadeIn(900);
                            }
                        }
                    });
                } else {
                    return false;
                }
            });
        });
    </script>
<div class="wrap">
	<?php echo  $this->load->view($main_content);?>
</div>

	</div>
    <!--FOOTER-->
<?php include('footer.php')?>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/uniform/uniform.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/script.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/tooltip/tooltipsy.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slides/slides.min.jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/doolv3.js?0952" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
</div>
</body>
</html>