<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <title>Cổng thông tin và giao dịch nhà đất - DCBLand.COM</title>
    <meta name="description" content="Cổng thông tin và giao dịch nhà đất. Đăng tin mua bán nhà đất nhanh chóng, hiệu quả. Siêu thị địa ốc sôi nổi nhất cả nước như: TPHCM, Bình Dương, Đồng Nai, Vũng Tàu..." />
    <meta name="keywords" content="đăng tin địa ốc, đăng tin bán nhà, đăng tin bán đất, nhà ở xã hội, dự án chung cư, bán nhà quận, bảng giá nhà đất 2013, công ty địa ốc, địa ốc online, mua nhà trả góp, mua nhà chung cư, siêu thị địa ốc, nhà trọ sinh viên, cho thuê nhà nguyên căn, nhà cho người thu nhập thấp" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/general.css?0914" rel="stylesheet" type="text/css" />
    <!--[if IE 7]>
    <link href="css/ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slides/slides.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/tooltip/tools.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/doolv3.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/jquery-1.7.2.min.js" type="text/javascript"></script>
    
     <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/><!--Bật Responsive-->
		
        <!---Insert CSS-->
        
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
<?php } $i++;} ?> 
<script type="text/javascript">var Banner64=1;function Random_Banner64(){    var _Arr=document.getElementById("position_64").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner64 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner64 - 1]).html(); $(_Arr[Banner64 - 1]).html(''); $(_Arr[Banner64 - 1]).html(tempBanner);    window.setTimeout("Random_Banner64()" ,25000);    Banner64 = Banner64 + 1;    if(Banner64 > _Arr.length)        Banner64 = 1;}Random_Banner64();</script>
<?php } ?>
</div>


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
<?php } $i++;} ?> 
<script type="text/javascript">var Banner65=1;function Random_Banner65(){    var _Arr=document.getElementById("position_65").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner65 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner65 - 1]).html(); $(_Arr[Banner65 - 1]).html(''); $(_Arr[Banner65 - 1]).html(tempBanner);    window.setTimeout("Random_Banner65()" ,25000);    Banner65 = Banner65 + 1;    if(Banner65 > _Arr.length)        Banner65 = 1;}Random_Banner65();</script>
<?php } ?>
</div>

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
<?php } $i++;} ?> 
<script type="text/javascript">var Banner66=1;function Random_Banner66(){    var _Arr=document.getElementById("position_66").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner66 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner66 - 1]).html(); $(_Arr[Banner66 - 1]).html(''); $(_Arr[Banner66 - 1]).html(tempBanner);    window.setTimeout("Random_Banner66()" ,25000);    Banner66 = Banner66 + 1;    if(Banner66 > _Arr.length)        Banner66 = 1;}Random_Banner66();</script>
<?php } ?>
</div>


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
<?php } $i++;} ?> 
<script type="text/javascript">var Banner67=1;function Random_Banner67(){    var _Arr=document.getElementById("position_67").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner67 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner67 - 1]).html(); $(_Arr[Banner67 - 1]).html(''); $(_Arr[Banner67 - 1]).html(tempBanner);    window.setTimeout("Random_Banner67()" ,25000);    Banner67 = Banner67 + 1;    if(Banner67 > _Arr.length)        Banner67 = 1;}Random_Banner67();</script>
<?php } ?>
</div>
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
            <?php 
            include('header.php');
            ?>
    </div>
    <div id="content_container">
        
    <script type="text/javascript">
        $(function () {
            $('#email').val('');
            $('#TuKhoaTimKiem').val('');

            $("#LoaiTinDang,#LoaiDiaOc,#KhuVuc,#KhoangGia").uniform({
                selectAutoWidth: true
            });
        });
    </script>
    <div class="wrap">
<?php 
if(!empty($vi_tri_9))
{
?>
<div id="position_1" class ='banner_960x320 margin_bottom'>

<?php 
foreach($vi_tri_9 as $vt_9)
{
?>
<div><a href="<?php echo $vt_9['link']?>" target="_blank"><img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_9['file']?>" width="960px" height="360px"/></a></div>
<?php } ?>
<script type='text/javascript'>var Banner1=1;function Random_Banner1(){    var _Arr=document.getElementById("position_1").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner1 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner1 - 1]).html(); $(_Arr[Banner1 - 1]).html(''); $(_Arr[Banner1 - 1]).html(tempBanner);    window.setTimeout("Random_Banner1()" ,25000);    Banner1 = Banner1 + 1;    if(Banner1 > _Arr.length)        Banner1 = 1;}Random_Banner1();</script></div>
<?php } ?>
        <div id="status_search" class="wrap margin_bottom clearfix">
            <div id="status" class="rounded_style_1 rounded_box">
                <div class="content">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td colspan="2" style="padding-top:7px">Tài sản đang có</td>
                        </tr>
                        <tr>
                            <td style="padding-top:7px;text-align:right"><span class="count1">15.753</span></td>
                            <td style="text-align:left;padding-left:5px;"><span class="count2">(đang giao dịch)</span></td>
                        </tr>
                        <tr>
                            <td style="padding-top:7px;text-align:right"><span class="count1">711.308</span></td>
                            <td style="text-align:left;padding-left:5px;"><span class="count2">(tham khảo)</span></td>
                        </tr>
                    </table>
                    <a href="/sieu-thi" class="btn_discover">
                        Khám phá ngay</a>
                </div>
            </div>
            <div id="home_search" class="rounded_style_1 rounded_box">
                <div class="content">
                    <div class="select_search_type rounded_style_5 rounded_box">
                        <div class="content">
                            <ul class="search_tab">
                                <li class="actived" id="tabtimkiemts"><span class="L"></span><a href="javascript:void(0)">
                                    Tìm kiếm tài sản</a> <span class="R"></span></li>
                                <li id="tabtimnhanhts"><a href="javascript:void(0)"><span>Xem nhanh theo loại tài sản</span></a></li>
                                <li><a href="<?php echo base_url();?>sieu-thi"><span>Xem tài sản đấu giá</span></a></li>
                                <li><a href="<?php echo base_url();?>sieu-thi/nha-tro"><span>Nhà trọ sinh viên</span></a></li>
                            </ul>
                            
                        </div>
                    </div>
                    <div id="timkiemts" class="search_form">
                        <form class="form_style_1" action="<?php echo base_url();?>tim-kiem" method="get">
                        <fieldset>
                            <div class="left_form">
                                <div class="rowElem">
                                    <input type="text" class="home_search_input" placeholder="Ví dụ: nhà mặt tiền quận 5"
                                        value="" name="TuKhoaTimKiem" id="TuKhoaTimKiem" title="Ví dụ: nhà mặt tiền; quận 5" /></div>
                                <div class="propertise_type margin_right_form">
                                    <div class="divUni-1">
                                        <div class="wid-left">
                                        </div>
                                        <div class="wid">
                                            <select id="LoaiTinDang" name="LoaiTinDangList" style="width:150px"><option value="1">Cần b&#225;n</option>
<option value="2">Cho thu&#234;</option>
<option value="3">Cần mua</option>
<option value="4">Cần thu&#234;</option>
</select>
                                        </div>
                                    </div>
                                    <div class="divUni-2">
                                        <div class="wid-left">
                                        </div>
                                        <div class="wid">
                                            <select id="LoaiDiaOc" name="LoaiDiaOcList"><option value="">Chọn loại địa ốc</option>
<?php 
foreach($list_loai_dia_oc_ as $l_d_o)
{
?>
<option value="<?php echo $l_d_o['id'] ?>"><?php echo $l_d_o['name']?></option>
<?php } ?>
</select>
                                        </div>
                                    </div>
                                    <div class="divUni-2">
                                        <div class="wid-left">
                                        </div>
                                        <div class="wid">
                                            <select id="KhuVuc" name="ThanhPhoList"><option value="">Tỉnh/Th&#224;nh phố</option>
<?php 
foreach($list_city as $k=>$v)
{
?>
<option value="<?php echo $k ?>"><?php echo $v;?></option>
<?php } ?>
</select>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <button type="submit" class="btn_home_search">
                                <span>Tìm kiếm</span></button>
                        </fieldset>
                        </form>
                    </div>
                    <div id="timnhanhts" class="infiniteCarousel select_search_item" style="display: none">
                        <div class="wrapper">
                            <ul>    <?php 
                            $i = 1;
                                        foreach($cate_proper_list as $cate_l)
                                        {
                                    ?>
                                    <li><a href="<?php echo base_url();?>sieu-thi/<?php echo mb_strtolower(url_title(removesign($cate_l['name'])))?>-c<?php echo $cate_l['id']?>">
                                    <?php 
                                    if($i<=10)
                                    {
                                    ?>
                                        <span class="ico_30 ico_home_<?php echo $i?>_30"></span><strong><?php echo $cate_l['name']?></strong></a></li>
                                    <?php } else {?>
                                    <span class="ico_30 ico_home_10_30"></span><strong><?php echo $cate_l['name']?></strong></a></li>
                                    <?php } ?>
                                    <?php $i++;} ?>
                            </ul>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function () {
                            $('#timnhanhts').attr('style', 'display:none');
                            $('#tabtimkiemts').click(function () {
                                $('#tabtimnhanhts').removeClass('actived');
                                $('#tabtimnhanhts').html('<a href="javascript:void(0)"><span>Xem nhanh theo loại tài sản</span></a>');
                                $('#timnhanhts').attr('style', 'display:none');
                                $('#timkiemts').attr('style', 'display:block');
                                $('#tabtimkiemts').html('<span class="L"></span><a href="javascript:void(0)">Tìm kiếm tài sản</a><span class="R"></span>');
                                $(this).addClass('actived');

                            });
                            $('#tabtimnhanhts').click(function () {
                                $('#tabtimkiemts').removeClass('actived');
                                $('#tabtimkiemts').html('<a href="javascript:void(0)"><span>Tìm kiếm tài sản</span></a>');
                                $('#timkiemts').attr('style', 'display:none');
                                $('#timnhanhts').attr('style', 'display:block');
                                $('#tabtimnhanhts').html('<span class="L"></span><a href="javascript:void(0)">Xem nhanh theo loại tài sản</a><span class="R"></span>');
                                $(this).addClass('actived');
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
        <div id="content_main" class="wrap">
            <?php echo $this->load->view($main_content);?>
            <div class="col_300 margin_left">

<div id="position_2" class ='banner_300x250'>
<?php 
if(empty($vi_tri_5))
{
?>
<div>
<a href="#" target="_blank"><img src="<?php echo base_url();?>file/uploads/adv/92A-thamdinh_300x250.gif" width="300px" height="250px"/></a>
</div>
<?php
} else
{
    $i=1;
    foreach($vi_tri_5 as $vt_5)
    {
        if($i==1)
        {
?>
<div>
<a href="<?php echo $vt_5['link']?>" target="_blank"><img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_5['file']?>" width="300px" height="250px"/></a>
</div>
<?php } if ($i==2)
{?>
<div>
<a href="<?php echo $vt_5['link']?>" target="_blank"><img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_5['file']?>" width="300px" height="250px"/></a>
</div>
<?php } $i++; } }?>
</div><script type='text/javascript'>var Banner2=1;function Random_Banner2(){    var _Arr=document.getElementById("position_2").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner2 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner2 - 1]).html(); $(_Arr[Banner2 - 1]).html(''); $(_Arr[Banner2 - 1]).html(tempBanner);    window.setTimeout("Random_Banner2()" ,25000);    Banner2 = Banner2 + 1;    if(Banner2 > _Arr.length)        Banner2 = 1;}Random_Banner2();</script>

<div id="position_3" class ='banner_300x250'>
<?php 
if(empty($vi_tri_5))
{
?>
<div>
<a href="#" target="_blank"><img src="<?php echo base_url();?>file/uploads/adv/92A-thamdinh_300x250.gif" width="300px" height="250px"/></a>
</div>
<?php } else 
{
    $i=1;
    foreach($vi_tri_5 as $vt_6)
    {
        if($i==1)
        {
?>
<div>
<a href="<?php echo $vt_6['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_6['file']?>" width="300px" height="250px"/>
</a>
</div>
<?php } if($i==2)
{?>
<div>
<a href="<?php echo $vt_6['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_6['file']?>" width="300px" height="250px"/>
</a>
</div>
<?php } $i++;} } ?>
</div><script type='text/javascript'>var Banner3=1;function Random_Banner3(){    var _Arr=document.getElementById("position_3").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner3 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner3 - 1]).html(); $(_Arr[Banner3 - 1]).html(''); $(_Arr[Banner3 - 1]).html(tempBanner);    window.setTimeout("Random_Banner3()" ,25000);    Banner3 = Banner3 + 1;    if(Banner3 > _Arr.length)        Banner3 = 1;}Random_Banner3();</script>
                <div id="userhot" class="margin_bottom">
	<div class="headline_title_1 rounded_style_5 rounded_box">
		<h2 class="headline"><span>NHÀ MÔI GIỚI NỔI BẬT</span></h2>
	</div>
	<div class="rounded_style_2 rounded_box scroll" >
		<div class="content">
            <?php 
            foreach($list_mem as $mem)
            {
            ?>
			<div class="agency_info_descript">
				<div class="head_info">
					<div class="logo">
						<a href="<?php echo base_url();?>sieu-thi/tv/<?php echo $mem['id']?>">
                        <?php 
                        if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/avatar/'.$mem['img']) && $mem['img']!='')
                        {
                        ?>
						<img src="<?php echo base_url();?>file/uploads/avatar/<?php echo $mem['img']?>" width="75" height="75" alt="<?php echo $mem['full_name']?>" title="<?php echo $mem['full_name']?>"/>
                        <?php } else {?>
                        <img src="<?php echo base_url();?>file/uploads/no_image.gif" width="75" height="75" alt="<?php echo $mem['full_name']?>" title="<?php echo $mem['full_name']?>"/>
                        <?php } ?> 
						</a>
					</div>
					<div class="agency_name">
					<h2><a href="<?php echo base_url();?>sieu-thi/tv/<?php echo $mem['id']?>"><?php echo $mem['full_name']?></a></h2>
					<p>Nhà môi giới</p>
					</div>
				</div>
			</div>
            <?php } ?>	   
			
		</div>
	</div>
</div>
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
</div>
                

<div id="agency_intro" class="margin_bottom">
    <div class="headline_title_1 rounded_style_5 rounded_box">
            <h2 class="headline"><span>GIỚI THIỆU DOANH NGHIỆP</span></h2>
    </div>
    <div class="rounded_style_2 rounded_box">
            <div class="content">
            <?php 
            foreach($list_dn as $dn)
            {
            ?>
			    <div class="agency_info_descript">
                    <div class="head_info">
                        <div class="logo">
                        <a href="/doanh-nghiep/cong-ty-co-phan-dia-oc-phu-long-i255/gioi-thieu">
                        <?php 
                        if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/business/'.$dn['logo']))
                        {
                        ?>
                        <img src="<?php echo base_url();?>file/uploads/business/<?php echo $dn['logo']?>" width="75" height="75" alt="<?php echo $dn['ten_dn']?>"/>
                        <?php } else {?>
                        <img src="<?php echo base_url();?>file/uploads/no_image.gif" width="75" height="75" alt="<?php echo $dn['ten_dn']?>"/>
                        <?php } ?>
                        </a>
                    </div>
                        <div class="agency_name">
                        <h2><a href="<?php echo base_url(); ?>doanh-nghiep/<?php echo mb_strtolower(url_title(removesign($dn['ten_dn'])))?>-i<?php echo $dn['id']?>/gioi-thieu"><?php echo $dn['ten_dn']?></a></h2>
                    </div>
                    </div>
                    <p>Địa chỉ: <?php echo $dn['dia_chi_dn']?></p>
                    <a href="<?php echo base_url();?>doanh-nghiep" class="more">Xem thêm »</a> 
                </div>
            <?php } ?>
        </div>
    </div>
</div>                <div id="subscribe" class="margin_bottom">
                    <h3 class="small_headline">
                        ĐĂNG KÝ NHẬN BẢN TIN ĐỊA ỐC HÀNG TUẦN</h3>
                    <div class="body" id="bodyNewsLetter">
                        <form action="/Home/NewsLetter" id="frmNewsLetter" method="post" class="form_style_1">
                        <span id="errormsg"></span>
                        <input type="text" value="" name="email" id="email" placeholder="Nhập địa chỉ email của bạn"
                            class="input_text" />
                        <button id="register" type="button">
                            Đăng ký</button>
                        <script type="text/javascript">
                            $(function () {
                                $('#email').val('');
                                $('#TuKhoaTimKiem').val('');
                                var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
                                $('#register').click(function () {
                                    
                                        $.ajax({
                                            type: "POST"
                                            , url: '<?php echo base_url()?>home/home/news_letter'
                                            , data: { email: $('#email').val() }
                                            , dataType: "json"
                                            , success: function (data) {
                                                if (data != null & data != "") {
                                                    if (data.msg == true) {
                                                        $("#bodyNewsLetter").fadeOut(800).fadeIn(800);
                                                        setTimeout(function () {
                                                            $("#bodyNewsLetter").html('<p class="title-green"> Email của bạn đã đăng ký thành công.</p>')
                                                        }, 500);
                                                    } else {
                                                        $("#errormsg").fadeOut(800).fadeIn(800);
                                                        setTimeout(function () {
                                                            $("#errormsg").html('<p class="title-red">Email không hợp lệ hoặc đã đăng ký rồi.</p>')
                                                        }, 500);
                                                    }
                                                }
                                            }
                                        });

                                       
                                    
                                    
                                });
                            });
                        </script>
                        </form>
                    </div>
                </div>
                

<div id="position_4" class ='banner_300x250'>
<?php 
if(empty($vi_tri_5))
{
?> 
<div>
<a href="#" target="_blank"><img src="<?php echo base_url();?>file/uploads/adv/92A-thamdinh_300x250.gif" width="300px" height="250px"/></a>
</div>
<?php
} else {
    $i=1;
    foreach($vi_tri_5 as $vt_5)
    {
        if($i==1)
        {
?>
<a href="<?php echo $vt_5['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_5['file']?>" width="320px" height="250px">
</a>
<?php } if ($i==2)
{?>
<a href="<?php echo $vt_5['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_5['file']?>" width="320px" height="250px">
</a>
<?php } ?>
<?php $i++;} ?> 
<script type="text/javascript">var Banner4=1;function Random_Banner4(){    var _Arr=document.getElementById("position_4").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner4 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner4 - 1]).html(); $(_Arr[Banner4 - 1]).html(''); $(_Arr[Banner4 - 1]).html(tempBanner);    window.setTimeout("Random_Banner4()" ,25000);    Banner4 = Banner4 + 1;    if(Banner4 > _Arr.length)        Banner4 = 1;}Random_Banner4();</script>
<?php } ?>
</div>


<!-- <div id="position_5" class ='banner_300x250'><div><a href="http://www.diaoconline.vn/quangcao/363/5" target="_blank"><img src="http://image.diaoconline.vn/banner-dool/2013/11/11/67E-Vietpress_300x250.jpg" width="300px" height="250px"/></a></div><div><embed height="250" width="300" scale="exactfit" menu="false" AllowScriptAccess="always" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" quality="high" src="http://image.diaoconline.vn/banner-dool/2013/01/18/602-nhachoSV_300x250.swf?clicktag=http://www.diaoconline.vn/quangcao/145/5"/></div></div><script type='text/javascript'>var Banner5=1;function Random_Banner5(){    var _Arr=document.getElementById("position_5").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner5 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner5 - 1]).html(); $(_Arr[Banner5 - 1]).html(''); $(_Arr[Banner5 - 1]).html(tempBanner);    window.setTimeout("Random_Banner5()" ,25000);    Banner5 = Banner5 + 1;    if(Banner5 > _Arr.length)        Banner5 = 1;}Random_Banner5();</script> -->


    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slidejs/house_outstanding.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slidejs/jquery.flexslider.js" type="text/javascript"></script>
     <script type="text/javascript">

         $(window).load(function () {
           
             $('#houseslider').flexslider({
                 animation: "slide",
                 controlNav: false,
                 animationLoop: true,
                 slideshow: true,
                 start: function (slider) {
                     $('body').removeClass('loading');
                 }
             });
         });
  </script>
<div id="house_collection">
    <div class="rounded_style_2 rounded_box">
        <div class="content">
            <h3>Bộ sưu tập nhà đẹp</h3>
            <div id="houseslider" class="flexslider">
                <ul class="slides">
                    <?php 
                    foreach($list_nha_dep as $nha_dep)
                    {
                    ?>
                    <li>
                        <div class="houseimg">
  	    	            <a href="<?php echo base_url();?>nha-dep/<?php echo mb_strtolower(url_title(removesign($nha_dep['name'])))?>-c<?php echo $nha_dep['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($nha_dep['title'])))?>-i<?php echo $nha_dep['id']?>">
                        <?php 
                        if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/nhadep/'.$nha_dep['code'].'/'.$nha_dep['img']))
                        {
                        ?>
                          <img style="width: 289px; height: 400px;" src="<?php echo base_url();?>file/uploads/nhadep/<?php echo $nha_dep['code']?>/<?php echo $nha_dep['img']?>" alt="0" />
                        <?php } else { ?>
                         <img style="width: 289px; height: 400px;" src="<?php echo base_url();?>file/uploads/no_image.gif" alt="0" />
                        <?php } ?>
                          </a>
                        </div>
                        <div class="housetitle"><a href="<?php echo base_url();?>nha-dep/<?php echo mb_strtolower(url_title(removesign($nha_dep['name'])))?>-c<?php echo $nha_dep['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($nha_dep['title'])))?>-i<?php echo $nha_dep['id']?>"><?php echo $nha_dep['title']?></a></div>
  	    		    </li>
                    <?php } ?>
                </ul>
                 <div class="housebor"><ul><li></li></ul></div>
            </div>
        </div>
    </div>
</div><div id="faq_list" class="margin_bottom">
    <div class="headline_title_1 rounded_style_5 rounded_box">
        <div class="content">
            <ul class="headline_tab">
                <li class="actived"><span class="L"></span><a style="cursor:default">Từ Khóa Gợi Ý</a><span class="R"></span></li>
            </ul>
        </div>
    </div>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/jquery.tagcloud.js" type="text/javascript"></script>
    <script type="text/javascript">
        $.fn.tagcloud.defaults = {
            size: { start: 10, end: 20, unit: 'px' },
            color: { start: '#7E7E7E', end: '#00C7EC' }
        };

        $(function () {
            $('#whatever a').tagcloud();
        });
    </script>
    <div class="rounded_style_2 rounded_box">
        <div class="body">
            <div id="whatever">
                    <a href="/nha-20-30m2-i4828" rel="6">nhà 20-30m2</a>
                    <a href="/dau-tu-nha-o-i8275" rel="7">đầu tư nhà ở</a>
                    <a href="/chia-nha-i5743" rel="8">chia nhà</a>
                    <a href="/nha-co-nhue-i60965" rel="8"> nhà cổ nhuế</a>
                    <a href="/nha-ma-i12312" rel="10">nhà ma</a>
                    <a href="/nha-hep-i11813" rel="9">nhà hẹp</a>
                    <a href="/nha-dat-canada-i46591" rel="8">Nhà đất canada</a>
                    <a href="/nha-tien-ty-i13998" rel="2">nhà tiền tỷ</a>
                    <a href="/nha-mat-pho-i402" rel="10">nhà mặt phố</a>
                    <a href="/sot-gia-nha-o-i4650" rel="5">sốt giá nhà ở</a>
                    <a href="/nha-pho-tay-ho-i20797" rel="8">Nhà phố tây hồ</a>
                    <a href="/son-tran-nha-i59355" rel="10">Sơn trần nhà</a>
                    <a href="/mieng-banh-i8906" rel="10">miếng bánh</a>
                    <a href="/nha-tieng-le-i7012" rel="9">nhà tiêng lẻ</a>
                    <a href="/-nha-o-ben-cat-i40218" rel="9">... nhà ở bến cát</a>
                    <a href="/nha-59-63-i968" rel="5">Nhà 59-63</a>
                    <a href="/ban-nha-an-lao-i60784" rel="2">Bán nhà an lão</a>
                    <a href="/nha-quoc-hoi-i210" rel="2">Nhà Quốc hội</a>
                    <a href="/xay-nha-hat-i12451" rel="6">xây nhà hát</a>
                    <a href="/mua-ban-i1005" rel="2">Mua bán</a>
                    <a href="/ho-so-mua-nha-i8292" rel="7">hồ sơ mua nhà</a>
                    <a href="/nha-tap-the-i4339" rel="8">nhà tập thể</a>
                    <a href="/ban-dao-a-rap-i10956" rel="2">bán đảo ả rập</a>
                    <a href="/ban-nha-quan-3-i36704" rel="2">bán nhà quận 3</a>
                    <a href="/nha-pho-tphcm-i46411" rel="1"> nhà phố tp.hcm</a>
             
            </div>
        </div>
    </div>    
</div>            </div>



            
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
    <!--FOOTER-->
<?php include('footer.php')?>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/uniform/uniform.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/script.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/tooltip/tooltipsy.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slides/slides.min.jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/doolv3.js?0914" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
</div>
</body>
</html>