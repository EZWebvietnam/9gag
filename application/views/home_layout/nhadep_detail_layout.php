
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <title><?php echo $title?></title>
    <meta name="description" content="<?php echo $title?>" />
    <meta name="keywords" content="<?php echo $title?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/general.css?0057" rel="stylesheet" type="text/css" />
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
    .block_4 .info {

height: 64px !important;

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
</div><script type='text/javascript'>var Banner66=1;function Random_Banner66(){    var _Arr=document.getElementById("position_66").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner66 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner66 - 1]).html(); $(_Arr[Banner66 - 1]).html(''); $(_Arr[Banner66 - 1]).html(tempBanner);    window.setTimeout("Random_Banner66()" ,25000);    Banner66 = Banner66 + 1;    if(Banner66 > _Arr.length)        Banner66 = 1;}Random_Banner66();</script>

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
</div><script type='text/javascript'>var Banner67=1;function Random_Banner67(){    var _Arr=document.getElementById("position_67").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner67 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner67 - 1]).html(); $(_Arr[Banner67 - 1]).html(''); $(_Arr[Banner67 - 1]).html(tempBanner);    window.setTimeout("Random_Banner67()" ,25000);    Banner67 = Banner67 + 1;    if(Banner67 > _Arr.length)        Banner67 = 1;}Random_Banner67();</script>
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
            include('header_.php')
            ?>
            
        </div>
    </div>
    <div id="content_container">
        
    <div class="wrap">


<div class="collection_type margin_bottom">
    <ul>
        <?php 
    foreach($cate_nha_dep as $cate_nd)
    {
    ?>
        <li><a href="<?php echo base_url();?>nha-dep-c/<?php echo mb_strtolower(url_title(removesign($cate_nd['name'])))?>-c<?php echo $cate_nd['id'] ?>"><strong><span class="ico_16 ico_homeset_<?php echo $cate_nd['id']?>_16"></span><?php echo $cate_nd['name']?></strong></a></li>
     <?php } ?>  
    </ul>
</div>        <div class="col_650">
            <div id="home_collection_detail" class="margin_bottom">
                <div class="rounded_style_2 rounded_box reRounded">
                    <div class="body">
                    <h2 class="sub_title"></h2>
                        <h1 class="larger_title"><?php echo $detail[0]['title']?></h1>
                        
                    </div>
                </div>
                    <div id="image_gallery" class="rounded_box rounded_style_2">
                        <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slidejs/detail.css" rel="stylesheet" type="text/css" />
                        <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slidejs/jquery.flexslider.js" type="text/javascript"></script>
                        <script type="text/javascript">
                            $(window).load(function () {
                                $('#carousel').flexslider({
                                    startAt: 0,
                                    animation: "slide",
                                    controlNav: false,
                                    animationLoop: true,
                                    slideshow: true,
                                    itemWidth: 100,
                                    itemMargin: 0,
                                    itemMarginAdd: 0,
                                    asNavFor: '#slider'
                                });
                                $('#slider').flexslider({
                                    animation: "slide",
                                    controlNav: false,
                                    animationLoop: false,
                                    slideshow: true,
                                    itemWidth: 630,
                                    smoothHeight: false,
                                    sync: "#carousel",
                                    start: function (slider) {
                                        $('body').removeClass('loading');
                                    },
                                    after: function (slider) {
                                        $('#imge_count span').text(slider.currentSlide + 1);
                                    }
                                });
                                $('')
                            });
                        </script>
                        <div id="slider" class="flexslider">
                            <div id="imge_count">
                                Hình <span>1</span>/<?php echo count($hinh);?></div>
                            <ul class="slides">
                                 <?php 
                                $i = 0;
                                foreach($hinh as $hinh_d)
                                {
                                ?>
                                    <li>
                                        <div class="slideLarge">
                                            <img src="<?php echo base_url(); ?>file/uploads/nhadep/<?php echo $detail[0]['code']?>/<?php echo $hinh_d['img']; ?>" alt="<?php echo $i;?>" />
                                        </div>
                                    </li>
                                <?php $i++;} ?>       
                            </ul>
                        </div>
                        <div id="carousel" class="flex-control-thumbs">
                            <ul class="slides">
                            <?php 
                            $i = 0;
                            foreach($hinh as $hinh_d)
                            {
                            ?>
                                    <li>
                                        <div class="bor">
                                            <img width="100" height="65" src="<?php echo base_url(); ?>file/uploads/nhadep/<?php echo $detail[0]['code']?>/<?php echo $hinh_d['img']; ?>" alt="<?php echo $i;?>" />
                                        </div>
                                    </li>
                             <?php $i++;} ?>       
                            </ul>
                        </div>
                    </div>
                <div class="rounded_style_2 rounded_box">
                    <div class="body">
                        <p><p>
                            <div  class="social_network">
        <span class="tl">Chia sẻ</span>
        <ul>
        <li><a href="http://www.facebook.com/share.php?u=http://www.diaoconline.vn/nha-dep/noi-that-c7/gay-an-tuong-bang-noi-that-mau-den-trong-phong-khach-i410" target="_blank"><span class="ico_16 ico_facebook_16">facebook</span></a></li>
        <li><a href="https://twitter.com/intent/tweet?text=G%c3%a2y+%e1%ba%a5n+t%c6%b0%e1%bb%a3ng+b%e1%ba%b1ng+n%e1%bb%99i+th%e1%ba%a5t+m%c3%a0u+%c4%91en+trong+ph%c3%b2ng+kh%c3%a1ch&url=http://www.diaoconline.vn/nha-dep/noi-that-c7/gay-an-tuong-bang-noi-that-mau-den-trong-phong-khach-i410&via=DiaOcOnlinevn" target="_blank"><span class="ico_16 ico_twitter_16">twitter</span></a></li>
        
        </ul>
    </div>

                    </div>
                </div>
            </div>
                <div id="same_album_type">
                    <div class="headline_8 margin_bottom">
                        <h2>CÁC ALBUM HÌNH CÙNG THỂ LOẠI</h2>
                    </div>
                    <div class="content">
                        <ul>
                                <?php 
                                $i=1;
                                foreach($cung_the_loai as $nha_dep_ctl)
                                {
                                    if($i%2==0)
                                    {
                                ?>
                                <li class="last">
                                <?php } else { ?>
                                <li>
                                <?php } ?>
                                    <div class="block_4">
                                        <div class="img">
                                            <a href="<?php echo base_url();?>nha-dep/<?php echo mb_strtolower(url_title(removesign($nha_dep_ctl['name'])))?>-c<?php echo $nha_dep_ctl['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($nha_dep_ctl['title'])))?>-i<?php echo $nha_dep_ctl['id']?>">
                                            <?php 
                                            if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/nhadep/'.$nha_dep_ctl['code'].'/'.$nha_dep_ctl['img']))
                                            {
                                            ?>
                                                <img src="<?php echo base_url();?>/file/uploads/nhadep/<?php echo $nha_dep_ctl['code']?>/<?php echo $nha_dep_ctl['img']?>" alt="<?php echo $nha_dep_ctl['title']?>" width="146" height="82"/>
                                                <?php } else {?>
                                                <img src="<?php echo base_url();?>file/uploads/no_image.gif" alt="<?php echo $nha_dep_ctl['title']?>" width="146" height="82"/>
                                                <?php } ?>
                                                </a></div>
                                        <div class="info">
                                            <h2>
                                                <a href="<?php echo base_url();?>nha-dep/<?php echo mb_strtolower(url_title(removesign($nha_dep_ctl['name'])))?>-c<?php echo $nha_dep_ctl['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($nha_dep_ctl['title'])))?>-i<?php echo $nha_dep_ctl['id']?>"><?php echo $nha_dep_ctl['title']?></a></h2>
                                            <a href="<?php echo base_url();?>nha-dep/<?php echo mb_strtolower(url_title(removesign($nha_dep_ctl['name'])))?>-c<?php echo $nha_dep_ctl['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($nha_dep_ctl['title'])))?>-i<?php echo $nha_dep_ctl['id']?>" class="btn_5">
                                                <span>XEM ALBUM</span></a>
                                        </div>
                                    </div>
                                </li>
                                <?php $i++;} ?>
                                
                                
                        </ul>
                    </div>
                </div>     
        </div>
        <div class="col_300 margin_left">
            <div class="banner_300x250">


            </div>
                <div id="other_album">
                    <div class="headline_8 margin_bottom">
                        <h2>
                            CÁC ALBUM HÌNH KHÁC</h2>
                    </div>
                    <div class="content">
                        <ul>
                        <?php 
                        $i=1;
                        foreach($nhadep_khac as $nd_khac)
                        {
                            if($i%2==0)
                            {
                            ?>
                                <li class="last">
                            <?php } else {?>
                                <li>
                            <?php } ?>
                                    <div class="block_4">
                                        <div class="img">
                                            <a href="<?php echo base_url();?>nha-dep/<?php echo mb_strtolower(url_title(removesign($nd_khac['name'])))?>-c<?php echo $nd_khac['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($nd_khac['title'])))?>-i<?php echo $nd_khac['id']?>">
                                               <?php 
                                            if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/nhadep/'.$nd_khac['code'].'/'.$nd_khac['img']))
                                            {
                                            ?>
                                                <img src="<?php echo base_url();?>/file/uploads/nhadep/<?php echo $nd_khac['code']?>/<?php echo $nd_khac['img']?>" alt="<?php echo $nd_khac['title']?>" width="146" height="82"/>
                                                <?php } else {?>
                                                <img src="<?php echo base_url();?>file/uploads/no_image.gif" alt="<?php echo $nd_khac['title']?>" width="146" height="82"/>
                                                <?php } ?>
                                            </a></div>
                                        <div class="info">
                                            <h2>
                                                <a href="<?php echo base_url();?>nha-dep/<?php echo mb_strtolower(url_title(removesign($nd_khac['name'])))?>-c<?php echo $nd_khac['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($nd_khac['title'])))?>-i<?php echo $nd_khac['id']?>"><?php echo $nd_khac['title'];?></a></h2>
                                            
                                        </div>
                                    </div>
                                </li>
                        <?php $i++;} ?>
                                
                        </ul>
                    </div>
                </div>     
            <div>
    <div class="headline_8 margin_bottom">
        <h2>TÀI SẢN MỚI NHẤT</h2>
    </div>
    <div class="content">
        <ul class="listing_4 asset-spec-box">
                <?php 
                foreach($tai_san_noi_bat_khac as $ts_nb)
                {
                ?>
                <li><a href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($ts_nb['loai_dia_oc'])))?>-c<?php echo $ts_nb['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($ts_nb['title'])))?>-h<?php echo $ts_nb['id']?>" >
                <?php 
                             if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$ts_nb['code'].'/'.$ts_nb['img']))
                             {
                             ?>
                    <img src="<?php echo base_url();?>file/uploads/property/<?php echo $ts_nb['code']?>/<?php echo $ts_nb['img']?>" width="75" height="75" alt="<?php echo $ts_nb['title']?>" title="<?php echo $ts_nb['title']?>" />
                    <?php } else { ?>
                    <img src="<?php echo base_url();?>file/uploads/no_image.gif" width="75" height="75" alt="<?php echo $ts_nb['title']?>" title="<?php echo $ts_nb['title']?>" />
                    <?php } ?>
                    </a>
                    <div class="right">
                        <h2>
                            <a href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($ts_nb['loai_dia_oc'])))?>-c<?php echo $ts_nb['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($ts_nb['title'])))?>-h<?php echo $ts_nb['id']?>"><?php echo $ts_nb['title']?></a></h2>
                        <span class="price">
                        <?php 
                        if(is_numeric($ts_nb['price']))
                        {
                            echo bd_nice_number($ts_nb['price']);
                        } else {
                            echo $ts_nb['price'];
                        } ?>
                        </span>
                    </div>
                </li>
             <?php } ?>     
        </ul>
    </div>
            </div>
        </div>
    </div>

	</div>
    <!--FOOTER-->
<?php include('footer.php');?>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/uniform/uniform.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/script.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/tooltip/tooltipsy.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slides/slides.min.jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/doolv3.js?0057" type="text/javascript"></script>
    <script src=<?php echo base_url();?>template/home_ezwebvietnam/"Content/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
</div>
</body>
</html>