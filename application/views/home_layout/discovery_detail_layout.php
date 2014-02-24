
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <title><?php echo $title;?></title>
    <meta name="description" content="Một nhà nguyện nhỏ nằm trong khung cảnh miền núi xa xôi, là một nơi cuộc sống trở nên đơn giản, ít vội vã và mang nhiều ý nghĩa." />
    <meta name="keywords" content="Nhà nguyện trong mây, Costa Rica, thị trấn đào vàng Barkerville, tỉnh British Columbia, học viện Victory Horse Sense Victory" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/general.css?0052" rel="stylesheet" type="text/css" />
    <!--[if IE 7]>
    <link href="css/ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/Discovery.css" rel="stylesheet" type="text/css" />
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
            <span id="logo"><a href="<?php echo base_url();?>" title="Về trang chủ DCBLand.COM">DCBLand.COM</a></span>
            <?php include('header_.php');?>
            
        </div>
    </div>
    <div id="content_container">
        
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/normalize.css" rel="stylesheet" type="text/css" />
    <div class="wrap">


<?php 
if(empty($vi_tri_8))
{
?>
<?php
}
else
{
    $i = 1;
    foreach($vi_tri_8 as $vt_8)
    {
        if($i==1)
        {
    ?>
    <div id="position_43" class ='banner_960x75 margin_bottom'>
<div class="bannerHide">
<a href="<?php echo $vt_8['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_8['file']?>" width="960px" height="90px">
</a>
</div>
<?php } if($i==2)
{?>
<div class="bannerShow">
<a href="<?php echo $vt_8['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_8['file']?>" width="960px" height="90px">
</a>
</div>
</div><script type='text/javascript'>var Banner43=1;function Random_Banner43(){    var _Arr=document.getElementById("position_43").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner43 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner43 - 1]).html(); $(_Arr[Banner43 - 1]).html(''); $(_Arr[Banner43 - 1]).html(tempBanner);    window.setTimeout("Random_Banner43()" ,25000);    Banner43 = Banner43 + 1;    if(Banner43 > _Arr.length)        Banner43 = 1;}Random_Banner43();</script>
<?php } $i++;} } ?>

        <div class="col_180">
        <?php 
        foreach($list_cate_left as $cate)
        {
        ?>
            <div class="menu_col_left margin_bottom">
<div style="clear:both;display:table;">
    <div class="headline_title_1 rounded_style_5 rounded_box">
        <div class="TL"></div>
        <div class="TR"></div>
        <div class="BL"></div>
        <div class="BR"></div>
        <h2 class="headline"><a id="c_<?php echo $cate['cate_parent']['id']?>" href="<?php echo base_url();?>kham-pha-c/<?php echo mb_strtolower(url_title(removesign($cate['cate_parent']['name'])))?>-c<?php echo $cate['cate_parent']['id']?>"><span><?php echo $cate['cate_parent']['name']?></span></a></h2>
    </div>
    <div class="headline_title_2 rounded_box">
    <ul>
            <?php
            foreach($cate['cate_sub'] as $k=>$cate_v)
            {
             ?>
            <li id="c_<?php echo $k?>"><a  href="<?php echo base_url();?>kham-pha-c/<?php echo mb_strtolower(url_title(removesign($cate_v)))?>-c<?php echo $k?>"><?php echo $cate_v;?></a></li>
            <?php } ?>
    </ul>
    </div>
</div>
            </div>
            <?php } ?>
            <div id="left_search" class="rounded_style_1 rounded_box margin_bottom">
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
        
    </div>

            </div>
            <div id="latest_news" class="margin_bottom">
    <div class="asset-spec-left margin_bottom">
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <h2 class="headline">
                <span>TÀI SẢN MỚI NHẤT</span></h2>
        </div>
        <div class="rounded_style_2 rounded_box">
            <div class="content">
                <ul class="listing_1">
                <?php 
                foreach($tai_san_noi_bat_khac as $ts_nb)
                {
                ?>
                        <li><a href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($ts_nb['loai_dia_oc'])))?>-c<?php echo $ts_nb['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($ts_nb['title'])))?>-h<?php echo $ts_nb['id']?>" >
                             <h2>
                             <?php 
                             if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$ts_nb['code'].'/'.$ts_nb['img']))
                             {
                             ?>
                             <img src="<?php echo base_url();?>file/uploads/property/<?php echo $ts_nb['code']?>/<?php echo $ts_nb['img']?>" style="float:left; margin-right:5px;" width="45" height="45" alt="<?php echo $ts_nb['title']?>" title="<?php echo $ts_nb['title']?>" />
                             <?php } ?>
                                   <?php echo $ts_nb['title']?></h2></a>
                        </li>
                 <?php } ?>       
                </ul>
            </div>
        </div>
    </div>
            </div>
    <div id="hot_prj">
    <div class="headline_title_1 rounded_style_5 rounded_box">
		<h2 class="headline"><span>DỰ ÁN NỔI BẬT</span></h2>
	</div>
    <div class="properties_block">
        <ul>
        <?php 
        foreach($prj_noi_bat as $project_nb)
        {
        ?>
            <li >
            <a href="<?php echo base_url();?>du-an/<?php echo mb_strtolower(url_title(removesign($project_nb['name'])))?>-c<?php echo $project_nb['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($project_nb['title'])))?>-i<?php echo $project_nb['id_pro']?>">
            <?php 
            if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/project/'.$project_nb['img']))
            {
            ?>
            <img src="<?php echo base_url();?>file/uploads/project/<?php echo $project_nb['img']?>" width="180" height="118" alt="<?php echo $project_nb['title']?>"/>
            <?php } ?>
            </a>
            <h2><a href="<?php echo base_url();?>du-an/<?php echo mb_strtolower(url_title(removesign($project_nb['name'])))?>-c<?php echo $project_nb['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($project_nb['title'])))?>-i<?php echo $project_nb['id_pro']?>"><?php echo $project_nb['title']?></a></h2>
        </li>
        <?php } ?>   
        </ul>
    </div>    
</div>
            <div class="banner_180">
                <h2>
                    Quảng cáo</h2>


            </div>
        </div>
        <?php echo $this->load->view($main_content);?>
    </div>
	</div>
    <!--FOOTER-->
<?php include('footer.php')?>
<script>
$(function() {
    var parent_id = ''+<?php 
    $a =  str_replace('-','_',$this->uri->segment(2));
    $b = explode('_',$a);
    $count = count($b);
    $c = $b[$count-1];
    echo $c = str_replace('c','',$c);
    ?>;
    if(parent_id!='')
    {
            $('#c_'+parent_id).attr("class","actived");
     }   
    });
</script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/uniform/uniform.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/script.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/tooltip/tooltipsy.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slides/slides.min.jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/doolv3.js?0052" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
</div>
</body>
</html>