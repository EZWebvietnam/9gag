
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <title>Thông tin địa ốc - Nhà đất, Bất động sản, Địa ốc  - DCBLand.COM</title>
    <meta name="description" content="Chuyên trang tổng hợp thông tin nóng về thị trường bất động sản, địa ốc, nhà đất... trong cả nước. Bảng giá nhà đất, báo cáo thị trường nhà đất" />
    <meta name="keywords" content="thông tin địa ốc, thông tin bất động sản, bất động sản thế giới, hoạt động doanh nghiệp" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/general.css?2317" rel="stylesheet" type="text/css" />
    <!--[if IE 7]>
    <link href="css/ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/News.css" rel="stylesheet" type="text/css" />
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
            <span id="logo"><a href="/" title="Về trang chủ DCBLand.COM">DCBLand.COM</a></span>
            <?php include('header_.php');?>
            
        </div>
    </div>
    <div id="content_container">
        
    <div class="wrap">

<div id="position_7" class ='banner_960x75 margin_bottom'><div><a href="http://www.diaoconline.vn/quangcao/387/7" target="_blank"><img src="http://image.diaoconline.vn/banner-dool/2013/12/25/2FA-nhaSao_960x90.gif" width="960px" height="90px"/></a></div><div><a href="http://www.diaoconline.vn/quangcao/387/7" target="_blank"><img src="http://image.diaoconline.vn/banner-dool/2013/12/25/2FA-nhaSao_960x90.gif" width="960px" height="90px"/></a></div></div><script type='text/javascript'>var Banner7=1;function Random_Banner7(){    var _Arr=document.getElementById("position_7").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner7 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner7 - 1]).html(); $(_Arr[Banner7 - 1]).html(''); $(_Arr[Banner7 - 1]).html(tempBanner);    window.setTimeout("Random_Banner7()" ,25000);    Banner7 = Banner7 + 1;    if(Banner7 > _Arr.length)        Banner7 = 1;}Random_Banner7();</script>
        <div class="col_240">
<div id="top_news" class="margin_bottom">
    <div class="headline_title_1 rounded_style_5 rounded_box">
        <h2 class="headline"><span>THÔNG TIN XEM NHIỀU NHẤT</span></h2>
    </div>
    <div class="rounded_style_7 rounded_box">
        <ul class="listing_5">
        <?php 
        foreach($list_most_view as $most_view)
        {
        ?>
                <li >
                    <div class="img">
                        <a href="/tin-tuc/thi-truong-dia-oc-c18/bat-dong-san-2014-se-nho-toi-ts-alan-phan-i45001">
                        <?php 
                        if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/news/'.$most_view['img']))
                        {
                        ?>
                            <img src="<?php echo base_url();?>file/uploads/news/<?php echo $most_view['img']?>" width="90" height="70" alt="<?php echo $most_view['title']?>"/>
                            <?php } ?>
                            </a></div>
                    <div class="right">
                        <h2>
                            <a href="<?php echo base_url();?>tin-tuc/<?php echo mb_strtolower(url_title(removesign($most_view['name'])));?>-c<?php echo $most_view['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($most_view['title'])));?>-i<?php echo $most_view['id_new']?>"><?php echo $most_view['title']?></a></h2>
                        <span class="updated_date"><?php echo date('d/m/Y h:i:s',$most_view['create_date'])?></span>
                    </div>
                </li>
          <?php } ?>      
        </ul>
    </div>
</div>            <div id="left_search" class="rounded_style_1 rounded_box margin_bottom">
                    <script type="text/javascript">
        $(function () {
            $("#FormSearch").submit(function () {
                if ($('#KeySearch').val().trim().length <= 2) {
                    $('#KeySearch').focus();
                    return false;
                } else {
                    return true;
                }
            });
        });
    </script>
<div class="body">
    <form action="/tin-tuc/tim-kiem" id="FormSearch" method="post" class="form_style_1">
    <fieldset>
        <div class="business_search_type margin_bottom_form">
            <input type="text" class="input_text" value="" id="KeySearch" name="KeySearch" placeholder="Nhập từ khóa cần tìm"/>
            <button type="submit" name="Submit" id="Submit" class="btn_2"><span>TÌM KIẾM</span></button>
        </div>
    </fieldset>
    </form>
</div>
            </div>

<?php 
foreach($left_menu as $left_mn)
{
?>
<div id="realty_library" class="margin_bottom">
    <div class="headline_title_1 rounded_style_5 rounded_box">
        <h2 class="headline">
        <a href="<?php echo base_url();?>tin-tuc-c/<?php echo mb_strtolower(url_title(removesign($left_mn['cate_parent']['name'])))?>-c<?php echo $left_mn['cate_parent']['id']?>"><span><?php echo $left_mn['cate_parent']['name']?></span></a></h2>
            <a href="<?php echo base_url();?>tin-tuc-c/<?php echo mb_strtolower(url_title(removesign($left_mn['cate_parent']['name'])))?>-c<?php echo $left_mn['cate_parent']['id']?>" class="grey_link">Xem thêm</a>
    </div>
    <div class="rounded_style_2 rounded_box">
        <div class="content">
            <ul class="listing_1">
            <?php 
            foreach($left_mn['cate_sub'] as $k=>$cate_sub)
            {
            ?>
                    <li >
                        <span class="arrow"></span> 
                        <a href="<?php echo base_url();?>tin-tuc-c/<?php echo mb_strtolower(url_title(removesign($cate_sub)))?>-c<?php echo $k?>">
                        <?php echo $cate_sub?></a></li>
             <?php } ?>       
            </ul>
        </div>
    </div>
</div>    
<?php }?>
        </div>
        <div class="col_400 margin_left margin_bottom">
            <div id="sider" class="margin_bottom">
                    <div id="jslidernews" class="lof-slidecontent" style="width: 400px; height: 440px;">
                        <div class="preload">
                            <div>
                            </div>
                        </div>
                        <div class="main-slider-content" style="width: 400px; height: 440px;">
                            <ul class="sliders-wrap-inner">
                                    <?php 
                                    foreach($news_slide as $slide)
                                    {
                                    ?>
                                    <li><a href="<?php echo base_url();?>tin-tuc/<?php echo mb_strtolower(url_title(removesign($slide['name'])))?>-c<?php echo $slide['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($slide['title'])))?>-i<?php echo $slide['id_new']?>">
                                        <?php 
                                        if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/news/'.$slide['img']))
                                        {
                                        ?>
                                        <img src="<?php echo base_url();?>file/uploads/news/<?php echo $slide['img']?>" width="400" height="308" alt="<?php echo $slide['title']?>"/>
                                        <?php }?>
                                        </a>
                                        <div class="slide-item">
                                            <h1>
                                                <a href="<?php echo base_url();?>tin-tuc/<?php echo mb_strtolower(url_title(removesign($slide['name'])))?>-c<?php echo $slide['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($slide['title'])))?>-i<?php echo $slide['id_new']?>"><?php echo $slide['title']?></a></h1>
                                            
                                        </div>
                                    </li> 
                                    <?php } ?>
                            </ul>
                        </div>
                        <div class="navigator-content">
                            <div class="navigator-wrapper">
                                <ul class="navigator-wrap-inner">
                                <?php 
                                    foreach($news_slide as $slide)
                                    {
                                    ?>
                                        <li>
                                            <?php 
                                        if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/news/'.$slide['img']))
                                        {
                                        ?>
                                        <img src="<?php echo base_url();?>file/uploads/news/<?php echo $slide['img']?>" width="400" height="308" alt="<?php echo $slide['title']?>"/>
                                        <?php }?></li>
                                      <?php } ?>   
                                </ul>
                            </div>
                        </div>
                    </div> 
            </div>
            <?php 
            
            foreach($main[0]['cate_sub'] as $k=>$new_main)
            {
            ?>
                <div class="news_form margin_bottom">
                    <div class="headline_title_1 rounded_style_5 rounded_box">
                        <h2 class="headline">
                            <a href="<?php echo base_url();?>tin-tuc-c/<?php echo mb_strtolower(url_title(removesign($new_main)))?>-c<?php echo $k?>">
                                <span><?php echo $new_main; ?></span></a></h2>
                        <a href="<?php echo base_url();?>tin-tuc-c/<?php echo mb_strtolower(url_title(removesign($new_main)))?>-c<?php echo $k?>" class="grey_link">
                            Xem thêm</a>
                    </div>
                    <div class="rounded_style_2 rounded_box">
                     <?php 
                            if(!empty($main[0]['list_new'][$k]))
                            {
                            ?>
                        <div class="body">
                            <div class="wrapper">
                           
                                <div class="img">
                                    <a href="<?php echo base_url();?>tin-tuc/<?php echo mb_strtolower(url_title(removesign($new_main)))?>-c<?php echo $k;?>/<?php echo mb_strtolower(url_title(removesign($main[0]['list_new'][$k][0]['title'])))?>-i<?php echo $main[0]['list_new'][$k][0]['id_new']?>">
                                    <?php 
                                    if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/news/'.$main[0]['list_new'][$k][0]['img']))
                                    {
                                    ?>
                                        <img src="<?php echo base_url();?>file/uploads/news/<?php echo $main[0]['list_new'][$k][0]['img']?>" width="130" height="100" alt="<?php echo $main[0]['list_new'][$k][0]['title']?>"/></a></div>
                                    <?php } ?>
                                <div class="news_info">
                                    <h2>
                                        <a href="<?php echo base_url();?>tin-tuc/<?php echo mb_strtolower(url_title(removesign($new_main)))?>-c<?php echo $k;?>/<?php echo mb_strtolower(url_title(removesign($main[0]['list_new'][$k][0]['title'])))?>-i<?php echo $main[0]['list_new'][$k][0]['id_new']?>"><?php echo $main[0]['list_new'][$k][0]['title']?></a></h2>
                                    <span class="updated_date">Cập nhật <?php echo date('d/m/Y',$main[0]['list_new'][$k][0]['create_date']);?></span><br />
                                    <p><?php echo sub_string(loaibohtmltrongvanban($main[0]['list_new'][$k][0]['content']),130);?>  ...</p>
                                </div>
                            </div>
                            <div class="latest">
                                <ul class="listing_7">
                                        <?php 
                                        if(!empty($main[0]['list_new'][$k][1]))
                                        {
                                        ?>
                                        <li><span class="arrow"></span><a href="<?php echo base_url();?>tin-tuc/<?php echo mb_strtolower(url_title(removesign($cate_sub))) ?>-c<?php echo $k?>/<?php echo mb_strtolower(url_title(removesign($main[0]['list_new'][$k][1]['title'])))?>-i<?php echo $main[0]['list_new'][$k][1]['id_new']?>"><?php echo $main[0]['list_new'][$k][1]['title']?></a></li>
                                        <?php }
                                        if(!empty($main[0]['list_new'][$k][2]))
                                        {
                                        ?>
                                        <li><span class="arrow"></span><a href="<?php echo base_url();?>tin-tuc/<?php echo mb_strtolower(url_title(removesign($cate_sub))) ?>-c<?php echo $k?>/<?php echo mb_strtolower(url_title(removesign($main[0]['list_new'][$k][2]['title'])))?>-i<?php echo $main[0]['list_new'][$k][2]['id_new']?>"><?php echo $main[0]['list_new'][$k][2]['title']?></a></li>
                                        <?php }?>
                                </ul>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
               <?php } ?>
        </div>
        <div class="col_300 margin_left">

<div id="position_9" class ='banner_300x250'>
<?php 
if(empty($vi_tri_4))
{
?>
<?php
}
else
{
    $i = 1;
    foreach($vi_tri_5 as $vt_5)
    {
        if($i==1)
        {
    ?>
<div class="bannerHide">
<a href="<?php echo $vt_5['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_5['file']?>" width="300px" height="250px">
</a>
</div>
<?php } if($i==2)
{?>
<div class="bannerShow">
<a href="<?php echo $vt_5['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_5['file']?>" width="300px" height="250px">
</a>
</div>
<?php } $i++;} } ?>
</div><script type='text/javascript'>var Banner9=1;function Random_Banner9(){    var _Arr=document.getElementById("position_9").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner9 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner9 - 1]).html(); $(_Arr[Banner9 - 1]).html(''); $(_Arr[Banner9 - 1]).html(tempBanner);    window.setTimeout("Random_Banner9()" ,25000);    Banner9 = Banner9 + 1;    if(Banner9 > _Arr.length)        Banner9 = 1;}Random_Banner9();</script>

<div id="position_60" class ='banner_300x250'><?php 
if(empty($vi_tri_4))
{
?>
<?php
}
else
{
    $i = 1;
    foreach($vi_tri_5 as $vt_5)
    {
        if($i==1)
        {
    ?>
<div class="bannerHide">
<a href="<?php echo $vt_5['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_5['file']?>" width="300px" height="250px">
</a>
</div>
<?php } if($i==2)
{?>
<div class="bannerShow">
<a href="<?php echo $vt_5['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_5['file']?>" width="300px" height="250px">
</a>
</div>
<?php } $i++;} } ?></div><script type='text/javascript'>var Banner60=1;function Random_Banner60(){    var _Arr=document.getElementById("position_60").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner60 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner60 - 1]).html(); $(_Arr[Banner60 - 1]).html(''); $(_Arr[Banner60 - 1]).html(tempBanner);    window.setTimeout("Random_Banner60()" ,25000);    Banner60 = Banner60 + 1;    if(Banner60 > _Arr.length)        Banner60 = 1;}Random_Banner60();</script>
            

    
<div id="law_advisory" class="margin_bottom">
    <div class="headline_title_1 rounded_style_5 rounded_box">
        <h2 class="headline"><a href="<?php echo base_url();?>tin-tuc-c/cafe-style-c15"><span>Café Style</span></a></h2>
        <a href="<?php echo base_url();?>tin-tuc-c/cafe-style-c15" class="grey_link">Xem thêm</a>
    </div>
    <div class="rounded_style_2 rounded_box">
        <div class="body">
			<ul class="listing_1">
            <?php 
            $i = 1;
            foreach($list_cafe_law as $cafe_law)
            {
                if($i == 1)
                {
            ?>
                    <li >
                        <a href="<?php echo base_url();?>tin-tuc/<?php echo mb_strtolower(url_title(removesign($cafe_law['name'])))?>-c<?php echo $cafe_law['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($cafe_law['title'])));?>-i<?php echo $cafe_law['id_new']?>">
                        <?php 
                        if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/news/'.$cafe_law['img']))
                        {
                        ?>
                        <img src="<?php echo base_url();?>file/uploads/news/<?php echo $cafe_law['img']?>" alt="<?php echo $cafe_law['title']?>" width="80" height="61" class="img-left"/>
                        <?php } ?>
                         <?php echo $cafe_law['title']?></a></li>
            <?php } else { ?> 
             <li >
                        <a href="<?php echo base_url();?>tin-tuc/<?php echo mb_strtolower(url_title(removesign($cafe_law['name'])))?>-c<?php echo $cafe_law['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($cafe_law['title'])));?>-i<?php echo $cafe_law['id_new']?>">
                         <?php echo $cafe_law['title']?></a></li>
            <?php }$i++;} ?>
                    
            </ul>
        </div>
    </div>
</div><div id="fengsui_advisory" class="margin_bottom">
    <div class="headline_title_1 rounded_style_5 rounded_box">
        <h2 class="headline">
        <a href="<?php echo base_url();?>kham-pha-c/phong-thuy-c4"><span>Phong Thủy</span></a></h2>
        <a href="<?php echo base_url();?>kham-pha-c/phong-thuy-c4" class="grey_link">Xem thêm</a>
    </div>
    <div class="rounded_style_2 rounded_box">
        <div class="body">
			<ul class="listing_1">
                    <?php 
                    foreach($list_phong_thuy as $phong_thuy)
                    {
                    ?>
                    <li >
                        <a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($phong_thuy['name'])))?>-c<?php echo $phong_thuy['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($phong_thuy['title'])))?>-i<?php echo $phong_thuy['id_disco']?>">
                        <?php 
                        if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/discovery/'.$phong_thuy['img']))
                        {
                        ?>
                        <img src="<?php echo base_url();?>file/uploads/discovery/<?php echo $phong_thuy['img']?>" alt=<?php echo $phong_thuy['title']?>" width="80" height="61" class="img-left"/>
                        <?php } ?>
                         <?php echo $phong_thuy['title']?></a></li>
                    <?php } ?>
            </ul>
        </div>
    </div>
</div>            
            <div>
    <div class="headline_8 margin_bottom">
        <h2>TÀI SẢN MỚI NHẤT</h2>
    </div>
    <div class="content">
        <ul class="listing_4 asset-spec-box">
        <?php 
        foreach($tai_san_noi_bat_khac as $tai_san)
        {
        ?>
                <li><a href="<?php echo base_url();?>nha/<?php echo  mb_strtolower(url_title(removesign($tai_san['loai_dia_oc'])))?>-c<?php echo $tai_san['id_ldo']?>/<?php echo  mb_strtolower(url_title(removesign($tai_san['title'])))?>-h<?php echo $tai_san['id']?>" >
                    <?php 
                    if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$tai_san['code'].'/'.$tai_san['img']))
                    {
                    ?>
                    <img src="<?php echo base_url();?>file/uploads/property/<?php echo $tai_san['code']?>/<?php echo $tai_san['img']?>" width="75" height="75" alt="<?php echo $tai_san['title']?>" title="<?php echo $tai_san['title']?>" />
                    <?php } ?></a>
                    <div class="right">
                        <h2>
                            <a href="<?php echo base_url();?>nha/<?php echo  mb_strtolower(url_title(removesign($tai_san['loai_dia_oc'])))?>-c<?php echo $tai_san['id_ldo']?>/<?php echo  mb_strtolower(url_title(removesign($tai_san['title'])))?>-h<?php echo $tai_san['id']?>" title="<?php echo $tai_san['title']?>"><?php echo $tai_san['title']?></a></h2>
                        <span class="price">
                        <?php 
                        if(is_numeric($tai_san['price']))
                        {
                            echo bd_nice_number($tai_san['price']);
                        }
                        else
                        {
                            echo $tai_san['price'];
                        }
                        ?>
                        </span>
                    </div>
                </li>
         <?php } ?>       
        </ul>
    </div>
            </div>
            
        </div>
    </div>
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/lofslidernews/styleNews.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/lofslidernews/jquery.easing.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/lofslidernews/script.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // buttons for next and previous item						 

            $('#jslidernews').lofJSidernews({ interval: 3000,
                direction: 'opacitys',
                easing: 'easeInOutExpo',
                duration: 1200,
                auto: true,
                maxItemDisplay: 5,
                navPosition: 'horizontal', // horizontal
                navigatorHeight: 60,
                navigatorWidth: 80,
                mainWidth: 400,
                height: 500
            });
        });
    </script>

	</div>
    <!--FOOTER-->
<?php include('footer.php')?>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/uniform/uniform.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/script.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/tooltip/tooltipsy.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slides/slides.min.jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/doolv3.js?2317" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
</div>
</body>
</html>