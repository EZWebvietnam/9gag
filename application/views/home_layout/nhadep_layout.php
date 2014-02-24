
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
            include('header_.php');
            ?>
            
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
          <?php 
          foreach($list_slide as $nhadep)
          {
          ?>
            <li>
                <div class="slider-desc-bg"></div>
                <div class="slider-desc">
                    <a href="<?php echo base_url();?>nha-dep/<?php echo mb_strtolower(url_title(removesign($nhadep['name'])))?>-c<?php echo $nhadep['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($nhadep['title'])))?>-i<?php echo $nhadep['id']?>"><?php echo $nhadep['title']?></a>
                </div>
  	    	    <a href="<?php echo base_url();?>nha-dep/<?php echo mb_strtolower(url_title(removesign($nhadep['name'])))?>-c<?php echo $nhadep['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($nhadep['title'])))?>-i<?php echo $nhadep['id']?>">
                <?php 
                if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/nhadep/'.$nhadep['code'].'/'.$nhadep['img']))
                {
                ?>
                  <img src="<?php echo base_url();?>file/uploads/nhadep/<?php echo $nhadep['code']?>/<?php echo $nhadep['img']?>" height="350" width="620" alt="<?php echo $nhadep['title']?>" />
                <?php } else {?>
                <img src="<?php echo base_url();?>file/uploads/no_image.gif" height="350" width="620" alt="<?php echo $nhadep['title']?>" />
                <?php } ?>
                  </a>
  	    	</li>
          <?php }?>  
          </ul>
        </div>
</div>
    <div id="home_collection" class="wrap margin_bottom">
<div class="collection_type margin_bottom">
    <ul>
    <?php 
    foreach($cate_nha_dep as $cate_nd)
    {
    ?>
        <li><a href="<?php echo base_url();?>nha-dep-c/<?php echo mb_strtolower(url_title(removesign($cate_nd['name'])))?>-c<?php echo $cate_nd['id'] ?>"><strong><span class="ico_16 ico_homeset_<?php echo $cate_nd['id']?>_16"></span><?php echo $cate_nd['name']?></strong></a></li>
     <?php } ?>  
    </ul>
</div>        <div class="paging_2 margin_bottom">
            <ul class="pager">
</ul>
<script type="text/javascript">
    $(function () {
        $('.pager').html(LoadPagging(<?php echo $page ?>, <?php echo $total?>, '<?php echo base_url();?>nha-dep',<?php echo $total_page?>));
    });
</script>

        </div>
        <div class="wrap">
        <?php 
        $i = 1;
        foreach($list as $list_nha)
        {
            $count_hinh = $this->nhadephomemodel->count_hinh($list_nha['id']);
            if($i%3 ==0)
            {
        ?>
            <div class="block_3 last">
            <?php  } else {?>
             <div class="block_3">
            <?php } ?> 
                <div class="img"><a href="<?php echo base_url();?>nha-dep/<?php echo mb_strtolower(url_title(removesign($list_nha['name'])))?>-c<?php echo $list_nha['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($list_nha['title'])))?>-i<?php echo $list_nha['id']?>">
                <?php 
                if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/nhadep/'.$list_nha['code'].'/'.$list_nha['img']))
                {
                ?>
                <img src="<?php echo base_url();?>file/uploads/nhadep/<?php echo $list_nha['code']?>/<?php echo $list_nha['img']?>" alt="<?php echo $list_nha['title']?>" width="310" height="175"/>
                <?php } else {?>
                <img src="<?php echo base_url()?>file/uploads/no_image.gif" alt="<?php echo $list_nha['title']?>" width="310" height="175"/>
                <?php } ?>
                
                </a></div>
                <div class="body">
                    <h2><a href="<?php echo base_url();?>nha-dep/<?php echo mb_strtolower(url_title(removesign($list_nha['name'])))?>-c<?php echo $list_nha['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($list_nha['title'])))?>-i<?php echo $list_nha['id']?>"><?php echo $list_nha['title']?></a></h2>
                    <a href="<?php echo base_url();?>nha-dep/<?php echo mb_strtolower(url_title(removesign($list_nha['name'])))?>-c<?php echo $list_nha['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($list_nha['title'])))?>-i<?php echo $list_nha['id']?>" class="grey_link">» Xem thêm <strong><?php echo $count_hinh;?> hình</strong></a>
                </div>
            </div>
         <?php $i++;} ?>
        <div class="paging_2">
             <ul class="pager">
</ul>
<script type="text/javascript">
    $(function () {
       $('.pager').html(LoadPagging(<?php echo $page ?>, <?php echo $total?>, '<?php echo base_url();?>nha-dep',<?php echo $total_page?>));
    });
</script>

        </div>
    </div>
<div id="shopping" class="wrap margin_bottom">
    <div class="rounded_style_4 rounded_box">
        <div class="content">
            <div class="top">
                <h2 class="headline"><a href="<?php echo base_url();?>kham-pha-c/shopping-cung-dcb-house-c7"><span>Shopping Cùng DCB House</span></a></h2>
                
            </div>
            <div class="show">
                <ul>
                <?php 
               
                foreach($list_shopping as $list_shop)
                {
                ?>
                    <li class="shop_block ">
                        <div class="BL"></div>
                        <div class="BR"></div>
                        <div class="content">
                            <a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($list_shop['name'])))?>-c<?php echo $list_shop['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($list_shop['title'])))?>-i<?php echo $list_shop['id_disco']?>">
                            <?php 
                            if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/discovery/'.$list_shop['img']))
                            {
                            ?>
                            <img src="<?php echo base_url();?>file/uploads/discovery/<?php echo $list_shop['img']?>" width="160" height="124" alt="<?php echo $list_shop['title']?>"/>
                            <?php } ?>
                            </a>
                            <a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($list_shop['name'])))?>-c<?php echo $list_shop['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($list_shop['title'])))?>-i<?php echo $list_shop['id_disco']?>"><?php echo $list_shop['title']?></a> 
	                    </div>
                    </li>
                 <?php } ?>   
                </ul>
            </div>
        </div>    
    </div>
    <p class="note"></p>
</div>
</div>

	</div>
    <!--FOOTER-->
<?php include('footer.php');?>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/uniform/uniform.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/script.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/tooltip/tooltipsy.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slides/slides.min.jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/doolv3.js?0055" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
</div>
</body>
</html>