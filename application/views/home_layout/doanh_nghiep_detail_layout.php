
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <title><?php echo $title;?></title>
    <meta name="description" content="<?php echo $des;?>" />
    <meta name="keywords" content="<?php echo $title;?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/general.css?0008" rel="stylesheet" type="text/css" />
    <!--[if IE 7]>
    <link href="css/ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/Company.css" rel="stylesheet" type="text/css" />
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
</div>
<script type='text/javascript'>var Banner64=1;function Random_Banner64(){    var _Arr=document.getElementById("position_64").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner64 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner64 - 1]).html(); $(_Arr[Banner64 - 1]).html(''); $(_Arr[Banner64 - 1]).html(tempBanner);    window.setTimeout("Random_Banner64()" ,25000);    Banner64 = Banner64 + 1;    if(Banner64 > _Arr.length)        Banner64 = 1;}Random_Banner64();</script>

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
</div>
<script type='text/javascript'>var Banner65=1;function Random_Banner65(){    var _Arr=document.getElementById("position_65").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner65 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner65 - 1]).html(); $(_Arr[Banner65 - 1]).html(''); $(_Arr[Banner65 - 1]).html(tempBanner);    window.setTimeout("Random_Banner65()" ,25000);    Banner65 = Banner65 + 1;    if(Banner65 > _Arr.length)        Banner65 = 1;}Random_Banner65();</script>
    </div>
    <div id="b_right" style="right:90px">

<div id="position_66" class =''>
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
<script type='text/javascript'>var Banner66=1;function Random_Banner66(){    var _Arr=document.getElementById("position_66").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner66 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner66 - 1]).html(); $(_Arr[Banner66 - 1]).html(''); $(_Arr[Banner66 - 1]).html(tempBanner);    window.setTimeout("Random_Banner66()" ,25000);    Banner66 = Banner66 + 1;    if(Banner66 > _Arr.length)        Banner66 = 1;}Random_Banner66();</script>

<div id="position_67" class =''>
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
</div>
<script type='text/javascript'>var Banner67=1;function Random_Banner67(){    var _Arr=document.getElementById("position_67").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner67 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner67 - 1]).html(); $(_Arr[Banner67 - 1]).html(''); $(_Arr[Banner67 - 1]).html(tempBanner);    window.setTimeout("Random_Banner67()" ,25000);    Banner67 = Banner67 + 1;    if(Banner67 > _Arr.length)        Banner67 = 1;}Random_Banner67();</script>
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
            <?php include('header_.php');?>
            
        </div>
    </div>
    <div id="content_container">
        
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/normalize.css" rel="stylesheet" type="text/css" />
    <input type="hidden" id="hdLeftTabActive" name="hdLeftTabActive" value="#Intro" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/normalize.css" rel="stylesheet" type="text/css" />
    <div class="wrap">
        <!--Top banner -->


        <!--Search Box -->
<form action="/Company/Search" id="formV3" method="post" pi=""><script type="text/javascript">
    $(function () {
        $("#CityList,#DistrictList,#CompanyTypeList").uniform({
            selectAutoWidth: true
        });
    });
</script>
    <div id="business_search" class="margin_bottom">
        <div class="form_style_1 margin_right_form">
           
            <div id="alphabet_search" class="rounded_style_1 rounded_box">
                <div class="body">
                    <ul>
                        <li class="actived"><a href="/Company"><span>
                            TẤT CẢ</span></a></li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_A">
                                        <span>A</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_B">
                                        <span>B</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_C">
                                        <span>C</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_D">
                                        <span>D</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_E">
                                        <span>E</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_F">
                                        <span>F</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_G">
                                        <span>G</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_H">
                                        <span>H</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_I">
                                        <span>I</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_J">
                                        <span>J</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_K">
                                        <span>K</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_L">
                                        <span>L</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_M">
                                        <span>M</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_N">
                                        <span>N</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/doanh-nghiep/tim-kiem/tukhoa_O">
                                        <span>O</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_P">
                                        <span>P</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_Q">
                                        <span>Q</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_R">
                                        <span>R</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_S">
                                        <span>S</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_T">
                                        <span>T</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_U">
                                        <span>U</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_V">
                                        <span>V</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_W">
                                        <span>W</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_X">
                                        <span>X</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_Y">
                                        <span>Y</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>doanh-nghiep/tim-kiem/tukhoa_Z">
                                        <span>Z</span>
                                    </a>
                                </li>
                        <li class="last"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</form>        <!--End Search Box -->
        <div class="wrap margin_bottom">
    <div class="col_180">
        <div id="profile_menu" class="rounded_style_1 rounded_box">
            <div class="content">
                <div class="logo_wrap">
                    <div class="logo">
                    <?php 
                    if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/business/'.$about[0]['logo']))
                    {
                    ?>
                        <img width="90" height="90" src="<?php echo base_url();?>file/uploads/business/<?php echo $about[0]['logo']?>" alt="<?php echo $about[0]['ten_dn']?>" />
                        <?php }  else {?>
                        <img width="90" height="90" src="<?php echo base_url();?>file/uploads/no_image.gif" alt="<?php echo $about[0]['ten_dn']?>" />
                        <?php } ?>
                        </div>
                </div>
                <div id="menu_item">
                    <ul>
                        <li id="gioi_thieu" ><a href="<?php echo base_url();?>doanh-nghiep/<?php echo mb_strtolower(url_title(removesign($about[0]['ten_dn'])))?>-i<?php echo $about[0]['id']?>/gioi-thieu">
                            GIỚI THIỆU</a> </li>
                        
            
            <li id="dau_tu_du_an" ><a href="<?php echo base_url();?>doanh-nghiep/<?php echo mb_strtolower(url_title(removesign($about[0]['ten_dn'])))?>-i<?php echo $about[0]['id']?>/dau-tu-du-an">ĐẦU TƯ - DỰ &#193;N</a>
            </li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
            <div class="col_770 margin_left">
                <div id="profile_detail" class="rounded_style_2 rounded_box">
                    <div class="TL">
                    </div>
                    <div class="TR">
                    </div>
                    <div class="BL">
                    </div>
                    <div class="BR">
                    </div>
                    <div class="info_head">
<div class="info_content">
    <h2>
        <?php echo $about[0]['ten_dn']?>
    </h2>
    <p>
        Địa chỉ:
        <?php echo $about[0]['dia_chi_dn']?>
    </p>
    <p>
                <span>Điện thoại: <?php echo $about[0]['sdt']?></span>
                <span>Fax: <?php echo $about[0]['fax']?></span>
    </p>
    <p>
            <span>E-mail: <a style="color:#187FC4;" href="mailto:<?php echo $about[0]['mail']?>"><?php echo $about[0]['mail']?><?php echo $about[0]['mail']?>                                                                                                                                                                                                                                  </a>
                &nbsp; &nbsp; &nbsp; &nbsp; </span>
            <span>Website: <a href="<?php echo $about[0]['web']?>" target="_blank" style="color:#187FC4;" ><?php echo $about[0]['web']?></a>
            </span>
    </p>
</div>
                    </div>
                   <?php echo $this->load->view($main_content);?>
                </div>
            </div>
        </div>
    </div>

	</div>
    <!--FOOTER-->
<?php include('footer.php');?>
<script>
$(function() {
    var parent_id = ''+<?php 
    $a =  str_replace('-','_',$this->uri->segment(3));
    echo $a;
    ?>;
    if(parent_id!='')
    {
            $('#<?php echo $a;?>').attr("class","actived");
     }   
    });
</script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/uniform/uniform.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/script.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/tooltip/tooltipsy.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slides/slides.min.jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/doolv3.js?0008" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
</div>
</body>
</html>