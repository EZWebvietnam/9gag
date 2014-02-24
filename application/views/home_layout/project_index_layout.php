
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <title>Các dự án địa ốc, bất động sản, khu công nghiệp, khu du lịch nghỉ dưỡng - DCBLand.COM</title>
    <meta name="description" content="Các dự án địa ốc, bất động sản, khu công nghiệp, khu du lịch nghỉ dưỡng" />
    <meta name="keywords" content="Các dự án địa ốc, bất động sản, khu công nghiệp, khu du lịch nghỉ dưỡng" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/general.css?1855" rel="stylesheet" type="text/css" />
    <!--[if IE 7]>
    <link href="css/ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/Project.css" rel="stylesheet" type="text/css" />
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
<div>
<a href="#" target="_blank">
<img src="<?php echo base_url();?>template/home_ezwebvietnam/Content/images/Dool_qc_100x300.jpg" width="100px" height="300px"/>
</a>
</div>
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
<div>
<a href="<?php echo $vt_1['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_1['file']?>" width="100px" height="300px"/>
</a>
</div>
<?php }
if($i==2)
{?>
<div>
<a href="<?php echo $vt_1['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_1['file']?>" width="100px" height="300px"/>
</a>
</div>
<?php } $i++;} } ?>
</div>
<script type='text/javascript'>var Banner64=1;function Random_Banner64(){    var _Arr=document.getElementById("position_64").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner64 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner64 - 1]).html(); $(_Arr[Banner64 - 1]).html(''); $(_Arr[Banner64 - 1]).html(tempBanner);    window.setTimeout("Random_Banner64()" ,25000);    Banner64 = Banner64 + 1;    if(Banner64 > _Arr.length)        Banner64 = 1;}Random_Banner64();</script>

<div id="position_65" class =''>
<?php 
if(empty($vi_tri_2))
{
?>
<div>
<a href="#" target="_blank">
<img src="<?php echo base_url();?>template/home_ezwebvietnam/Content/images/Dool_qc_100x300.jpg" width="100px" height="300px"/>
</a>
</div>
<?php 
}
else
{
    $i=1;
    foreach($vi_tri_2 as $vt_2)
    {
        if($i==1)
        {
?>
<div>
<a href="<?php echo $vt_2['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_2['file']?>" width="100px" height="300px"/>
</a>
</div>
<?php }
if($i==2)
{?>
<div>
<a href="<?php echo $vt_2['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_2['file']?>" width="100px" height="300px"/>
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
<div>
<a href="#" target="_blank">
<img src="<?php echo base_url();?>template/home_ezwebvietnam/Content/images/Dool_qc_100x300.jpg" width="100px" height="300px"/>
</a>
</div>
<?php 
}
else
{
    $i=1;
    foreach($vi_tri_3 as $vt_3)
    {
        if($i==1)
        {
?>
<div>
<a href="<?php echo $vt_3['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_3['file']?>" width="100px" height="300px"/>
</a>
</div>
<?php }
if($i==2)
{?>
<div>
<a href="<?php echo $vt_3['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_3['file']?>" width="100px" height="300px"/>
</a>
</div>
<?php } $i++;} } ?>
</div><script type='text/javascript'>var Banner66=1;function Random_Banner66(){    var _Arr=document.getElementById("position_66").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner66 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner66 - 1]).html(); $(_Arr[Banner66 - 1]).html(''); $(_Arr[Banner66 - 1]).html(tempBanner);    window.setTimeout("Random_Banner66()" ,25000);    Banner66 = Banner66 + 1;    if(Banner66 > _Arr.length)        Banner66 = 1;}Random_Banner66();</script>

<div id="position_67" class =''>
<?php 
if(empty($vi_tri_4))
{
?>
<div>
<a href="#" target="_blank">
<img src="<?php echo base_url();?>template/home_ezwebvietnam/Content/images/Dool_qc_100x300.jpg" width="100px" height="300px"/>
</a>
</div>
<?php 
}
else
{
    $i=1;
    foreach($vi_tri_4 as $vt_4)
    {
        if($i==1)
        {
?>
<div>
<a href="<?php echo $vt_4['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_4['file']?>" width="100px" height="300px"/>
</a>
</div>
<?php }
if($i==2)
{?>
<div>
<a href="<?php echo $vt_4['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_4['file']?>" width="100px" height="300px"/>
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
        
<script type="text/javascript">
    $(function () {
        $("#CityList,#DistrictList,#ProjectTypeList").uniform({
            selectAutoWidth: true
        });
    });
</script>
    <div class="wrap">


        <div id="project_slider" class="wrap margin_bottom">
<ul class="slide_horizone">
<?php 
if(!empty($slide))
{
foreach($slide as $pr_sl)
{
?>
    <li><a href="<?php echo base_url();?>du-an/<?php echo  mb_strtolower(url_title(removesign($pr_sl['name'])))?>-c<?php echo $pr_sl['id_cate']?>/<?php echo  mb_strtolower(url_title(removesign($pr_sl['title'])))?>-i<?php echo $pr_sl['id_pro']?>">
    <?php 
    if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/project/'.$pr_sl['img']))
    {
    ?>
    <img src="<?php echo base_url(); ?>file/uploads/project/<?php echo $pr_sl['img']?>" width="630" height="300" alt="<?php echo $pr_sl['title']?>"/>
    <?php } ?>
    </a>
        <div class="description">
            <h2><a href="<?php echo base_url();?>du-an/<?php echo  mb_strtolower(url_title(removesign($pr_sl['name'])))?>-c<?php echo $pr_sl['id_cate']?>/<?php echo  mb_strtolower(url_title(removesign($pr_sl['title'])))?>-i<?php echo $pr_sl['id_pro']?>"><?php echo $pr_sl['title']?></a></h2>
            <span>Vị trí: <?php echo $list_district[$pr_sl['id_district']]?>, <?php echo $list_city[$pr_sl['id_city']]?></span>
        </div>
    </li>
 <?php }} else { ?> 
 <li><a>
    
    </a>
        <div class="description">
           
        </div>
    </li>
 <?php } ?>   
</ul>
<script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/jquery.kwicks.min.js" type="text/javascript"></script>
<script type="text/javascript">

    $(function () {
        var $slideshow = $('.slide_horizone').kwicks({
            max: 630,
            spacing: 1,
            sticky: true,
            duration: 500,
            showDuration: 2000,
            showNext: 1,
            easing: 'swing',
            init: function (kwick) {
                var demo = $('.slide_horizone');
                demo.kwicks('play');
            }

        });
        $slideshow.kwicks('play');




    })
</script>        </div>
        <div id="search" class="clearfix">
            
            <div class="col_300 margin_left">

<script type='text/javascript'>var Banner29=1;function Random_Banner29(){    var _Arr=document.getElementById("position_29").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner29 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner29 - 1]).html(); $(_Arr[Banner29 - 1]).html(''); $(_Arr[Banner29 - 1]).html(tempBanner);    window.setTimeout("Random_Banner29()" ,25000);    Banner29 = Banner29 + 1;    if(Banner29 > _Arr.length)        Banner29 = 1;}Random_Banner29();</script>
            </div>
        </div>
        <div id="alphabet_search" class="rounded_style_1 rounded_box margin_bottom">
            <div class="body">
                <ul>
                    <li id="all"><a href="<?php echo base_url();?>du-an"><span>
                        TẤT CẢ</span></a></li>
                        <li id="c_a"><a href="<?php echo base_url();?>du-an/tu-khoa-A"><span>A</span></a></li>
                        <li id="c_b"><a href="<?php echo base_url();?>du-an/tu-khoa-B"><span>B</span></a></li>
                        <li id="c_c"><a href="<?php echo base_url();?>du-an/tu-khoa-C"><span>C</span></a></li>
                        <li id="c_d"><a href="<?php echo base_url();?>du-an/tu-khoa-D"><span>D</span></a></li>
                        <li id="c_e"><a href="<?php echo base_url();?>du-an/tu-khoa-E"><span>E</span></a></li>
                        <li id="c_f"><a href="<?php echo base_url();?>du-an/tu-khoa-F"><span>F</span></a></li>
                        <li id="c_g"><a href="<?php echo base_url();?>du-an/tu-khoa-G"><span>G</span></a></li>
                        <li id="c_h"><a href="<?php echo base_url();?>du-an/tu-khoa-H"><span>H</span></a></li>
                        <li id="c_i"><a href="<?php echo base_url();?>du-an/tu-khoa-I"><span>I</span></a></li>
                        <li id="c_j"><a href="<?php echo base_url();?>du-an/tu-khoa-J"><span>J</span></a></li>
                        <li id="c_k"><a href="<?php echo base_url();?>du-an/tu-khoa-K"><span>K</span></a></li>
                        <li id="c_l"><a href="<?php echo base_url();?>du-an/tu-khoa-L"><span>L</span></a></li>
                        <li id="c_m"><a href="<?php echo base_url();?>du-an/tu-khoa-M"><span>M</span></a></li>
                        <li id="c_n"><a href="<?php echo base_url();?>du-an/tu-khoa-N"><span>N</span></a></li>
                        <li id="c_o"><a href="<?php echo base_url();?>du-an/tu-khoa-O"><span>O</span></a></li>
                        <li id="c_p"><a href="<?php echo base_url();?>du-an/tu-khoa-P"><span>P</span></a></li>
                        <li id="c_q"><a href="<?php echo base_url();?>du-an/tu-khoa-Q"><span>Q</span></a></li>
                        <li id="c_r"><a href="<?php echo base_url();?>du-an/tu-khoa-R"><span>R</span></a></li>
                        <li id="c_s"><a href="<?php echo base_url();?>du-an/tu-khoa-S"><span>S</span></a></li>
                        <li id="c_t"><a href="<?php echo base_url();?>du-an/tu-khoa-T"><span>T</span></a></li>
                        <li id="c_u"><a href="<?php echo base_url();?>du-an/tu-khoa-U"><span>U</span></a></li>
                        <li id="c_v"><a href="<?php echo base_url();?>du-an/tu-khoa-V"><span>V</span></a></li>
                        <li id="c_w"><a href="<?php echo base_url();?>du-an/tu-khoa-W"><span>W</span></a></li>
                        <li id="c_x"><a href="<?php echo base_url();?>du-an/tu-khoa-X"><span>X</span></a></li>
                        <li id="c_y"><a href="<?php echo base_url();?>du-an/tu-khoa-Y"><span>Y</span></a></li>
                        <li id="c_z"><a href="<?php echo base_url();?>du-an/tu-khoa-Z"><span>Z</span></a></li>
                    <li class="last"></li>
                </ul>
            </div>
        </div>
        <div id="project_cate">
            <div class="headline_title_1 rounded_style_5 rounded_box margin_bottom">
                <ul class="headline_tab dropdown">
                    <li><a href="javascript:void(0)"><span>DANH SÁCH DỰ ÁN</span></a>
                            <div class="dropdown_list">
                                <div class="wrap">
                                    <ul>    <?php 
                                                foreach($cate_pro_nav as $cate_pro)
                                                {
                                            ?>
                                            <li><a href="<?php echo base_url();?>du-an-c/<?php echo  mb_strtolower(url_title(removesign($cate_pro['name'])))?>-c<?php echo $cate_pro['id']?>"><?php echo $cate_pro['name']?></a></li>
                                            <?php } ?>
                                            
                                    </ul>
                                </div>
                            </div>
                    </li>
                </ul>
                <div class="paging_2">
                    <ul class="pager">
</ul>
<script type="text/javascript">
    $(function () {
        $('.pager').html(LoadPagging(<?php echo $page;?>, <?php echo $total?>, '<?php echo base_url();?>du-an',<?php echo $total_page?>));
    });
</script>

                </div>
            </div>
            <div class="content">
            <?php 
            $i = 1;
            foreach($list as $proj_l)
            {
                if($i%4==0)
                {
            ?>
                    <div class="invest_block last">
                    <?php } else {?> 
                    <div class="invest_block">
                    <?php } ?>
                        <div class="img">
                            <a href="<?php echo base_url();?>du-an/<?php echo  mb_strtolower(url_title(removesign($proj_l['name'])))?>-c<?php echo $proj_l['id_cate']?>/<?php echo  mb_strtolower(url_title(removesign($proj_l['title'])))?>-i<?php echo $proj_l['id_pro']?>">
                                <?php 
                                if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/project/'.$proj_l['img']))
                                {
                                ?>
                                <img src="<?php echo base_url();?>file/uploads/project/<?php echo $proj_l['img']?>" width="230" height="150" alt="<?php echo $proj_l['name']?>"/>
                                <?php } ?>
                                </a></div>
                        <div class="invest_content">
                            <h2>
                                <a href="<?php echo base_url();?>du-an/<?php echo  mb_strtolower(url_title(removesign($proj_l['name'])))?>-c<?php echo $proj_l['id_cate']?>/<?php echo  mb_strtolower(url_title(removesign($proj_l['title'])))?>-i<?php echo $proj_l['id_pro']?>"><?php echo $proj_l['title']?></a></h2>
                            <span class="location">Vị trí: 
                                                        <a class="link-ext" href="/du-an/khu-can-ho-c27/tphcm-t3/huyen-nha-be-d149"><?php echo $list_district[$proj_l['id_district']]?></a>
                                                    - <a class="link-ext" href="/du-an/khu-can-ho-c27/tphcm-t3"><?php echo $list_city[$proj_l['id_city']]?></a></span><br />
                        </div>
                        <div class="active_tool_1">
                            <ul>
                                
                                <li class="last"><span class="ico_16 ico_trade_16"></span>
                                    <a href="<?php echo base_url();?>sieu-thi/du-an.<?php echo $proj_l['id_pro']?>.duan">Tài sản đang giao dịch</a></li>
                            </ul>
                        </div>
                    </div> 
              <?php $i++;} ?>      
                    
                     
                    
                    
            </div>
            <div class="paging_2 margin_bottom">
                <ul class="pager">
</ul>
<script type="text/javascript">
    $(function () {
        $('.pager').html(LoadPagging(<?php echo $page;?>, <?php echo $total?>, '<?php echo base_url();?>du-an',<?php echo $total_page?>));
    });
</script>

            </div>
        </div>
    </div>

	</div>
    <!--FOOTER-->
<?php include('footer.php')?>
<script>
$(function() {
   <?php $b = $this->uri->segment(2);
    $c = explode('-',$b);
    $d = count($c);
    $e = $d-1;
    $id=strtolower($c[$e]);
    if($id!=null)
    {
    ?>
    
    
            $("#c_<?php echo $id?>").attr("class","actived");
     <?php } else { ?> 
     $("#all").attr("class","actived");
     <?php }?>  
    });
</script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/uniform/uniform.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/script.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/tooltip/tooltipsy.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slides/slides.min.jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/doolv3.js?1855" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
</div>
</body>
</html>