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
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/general.css?2004" rel="stylesheet" type="text/css" />
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
        
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/normalize.css" rel="stylesheet" type="text/css" />
    <div class="wrap">


        <div class="col_180">
            
<script type="text/javascript">
    $(function () {
        $("#CityList,#DistrictList,#ProjectTypeList").uniform({
            selectAutoWidth: true
        });
    });
</script>
<?php 
foreach($list_cate_project_left as $cate_pro)
{
?>
<div class="menu_col_left margin_bottom">
    <div class="headline_title_1 rounded_style_5 rounded_box">
        <div class="TL"></div>
        <div class="TR"></div>
        <div class="BL"></div>
        <div class="BR"></div>
        <h2 class="headline"><a href="<?php echo base_url();?>du-an"><span><?php echo $cate_pro['cate_parent']['name']?></span></a></h2>
    </div>
    <div class="headline_title_2 rounded_box">
        <ul>
                <?php 
                foreach($cate_pro['cate_sub'] as $k=>$cate_sub)
                {
                ?>
                <li id="c_<?php echo $k?>"><a href="<?php echo base_url();?>du-an-c/<?php echo mb_strtolower(url_title(removesign($cate_sub)))?>-c<?php echo $k?>"><?php echo $cate_sub?></a></li>
                <?php } ?>
               
        </ul>
    </div>
</div>
<?php } ?>
<div id="left_search" class="rounded_style_1 rounded_box margin_bottom">
    <div class="content">
        <div class="body">
            <form action="/du-an/tim-kiem" id="frmSearch" method="post" class="form_style_1">
            <fieldset>
                <div class="business_search_type margin_bottom_form">
                    <input class="input_text" id="td" name="td" param="td" placeholder="Nhập từ khóa cần tìm" title="Nhập từ khóa cần tìm" type="text" value="" />

                    <div class="city wid-btm">
                        <div class="divUni-2">
                            <div class="wid-left"></div>
	                        <div class="wid">
                        <select id="CityList" name="CityList" param="tp"><option value="">Tỉnh/Th&#224;nh phố</option>
<option value="2">H&#224; Nội</option>
<option value="3">TP.HCM</option>
<option value="71">Đ&#224; Nẵng</option>
<option value="53">Đồng Nai</option>
<option value="61">B&#236;nh Dương</option>
<option value="35">Long An</option>
<option value="69">An Giang</option>
<option value="68">B&#224; Rịa - Vũng T&#224;u</option>
<option value="67">Bắc Giang</option>
<option value="66">Bắc Kạn</option>
<option value="65">Bạc Li&#234;u</option>
<option value="64">Bắc Ninh</option>
<option value="63">Bến Tre</option>
<option value="62">B&#236;nh Định</option>
<option value="60">B&#236;nh Phước</option>
<option value="59">B&#236;nh Thuận</option>
<option value="58">C&#224; Mau</option>
<option value="72">Cần Thơ</option>
<option value="57">Cao Bằng</option>
<option value="56">Đắk Lắk</option>
<option value="55">Đắk N&#244;ng</option>
<option value="54">Điện Bi&#234;n</option>
<option value="52">Đồng Th&#225;p</option>
<option value="51">Gia Lai</option>
<option value="50">H&#224; Giang</option>
<option value="49">H&#224; Nam </option>
<option value="47">H&#224; Tĩnh</option>
<option value="46">Hải Dương</option>
<option value="70">Hải Ph&#242;ng</option>
<option value="45">Hậu Giang</option>
<option value="44">H&#242;a B&#236;nh</option>
<option value="43">Hưng Y&#234;n</option>
<option value="42">Kh&#225;nh H&#242;a</option>
<option value="41">Ki&#234;n Giang</option>
<option value="40">Kon Tum</option>
<option value="39">Lai Ch&#226;u</option>
<option value="38">L&#226;m Đồng</option>
<option value="37">Lạng Sơn</option>
<option value="36">L&#224;o Cai</option>
<option value="34">Nam Định</option>
<option value="33">Nghệ An</option>
<option value="32">Ninh B&#236;nh</option>
<option value="31">Ninh Thuận</option>
<option value="30">Ph&#250; Thọ</option>
<option value="29">Ph&#250; Y&#234;n</option>
<option value="28">Quảng B&#236;nh</option>
<option value="27">Quảng Nam</option>
<option value="26">Quảng Ng&#227;i</option>
<option value="25">Quảng Ninh</option>
<option value="24">Quảng Trị</option>
<option value="23">S&#243;c Trăng</option>
<option value="22">Sơn La</option>
<option value="21">T&#226;y Ninh</option>
<option value="19">Th&#225;i B&#236;nh</option>
<option value="18">Th&#225;i Nguy&#234;n</option>
<option value="17">Thanh H&#243;a</option>
<option value="16">Thừa Thi&#234;n Huế</option>
<option value="15">Tiền Giang</option>
<option value="14">Tr&#224; Vinh</option>
<option value="13">Tuy&#234;n Quang</option>
<option value="12">Vĩnh Long</option>
<option value="11">Vĩnh Ph&#250;c</option>
<option value="10">Y&#234;n B&#225;i</option>
</select>
                            </div>
                        </div>
                    </div>
                    <div class="district wid-btm" id="district">
                        <div class="divUni-2">
                            <div class="wid-left"></div>
	                        <div class="wid">
                        <select id="DistrictList" name="DistrictList" param="qh"><option value="">Quận/Huyện</option>
</select>
                            </div>
                        </div>
                    </div>
                    <div class="bussiness_type wid-btm">
                        <div class="divUni-2 wid-btm">
                            <div class="wid-left"></div>
	                        <div class="wid">
                        <select id="ProjectTypeList" name="ProjectTypeList" param="loai"><option value="">Loại dự &#225;n</option>
<option value="11">Khu c&#244;ng nghiệp</option>
<option value="24">Khu d&#226;n cư – Đ&#244; thị mới </option>
<option value="25">Khu phức hợp - Thương mại</option>
<option value="26">Cao ốc văn ph&#242;ng</option>
<option value="27">Khu căn hộ</option>
<option value="28">Khu du lịch - Nghỉ dưỡng</option>
<option value="29">C&#244;ng tr&#236;nh c&#244;ng cộng</option>
</select>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn_2" id="SearchSubmit"><span>TÌM KIẾM</span></button>
                </div>
            </fieldset>
            </form>
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

        </div>
        <div class="col_770 margin_left">
            
            <div id="cate_detail" class="margin_bottom">
                <div class="headline_title_1 rounded_style_5 rounded_box ">
                    <ul class="headline_tab">
                        <li class="actived"><span class="L"></span><a href="<?php echo base_url();?>du-an/<?php echo  mb_strtolower(url_title(removesign($detail[0]['name'])))?>-c<?php echo $detail[0]['id_cate']?>">
                            DANH SÁCH DỰ ÁN</a><span class="R"></span></li>
                        
                        <li><a href="<?php echo base_url();?>sieu-thi/du-an.<?php echo $detail[0]['id_pro']?>.duan">
                            <span><span class="ico_16 ico_trade_16 ico_span"></span>TÀI SẢN ĐANG GIAO DỊCH</span></a></li>
                        
                        <li><a href="/doanh-nghiep/cong-ty-tnhh-xay-dung-thuong-mai-tan-tao-i1127/lien-he">
                            <span><span class="ico_16 ico_email_16 ico_span"></span>LIÊN HỆ</span></a></li>
                    </ul>
                </div>
                <div class="rounded_style_2 rounded_box margin_bottom">
                    <div class="unity_bar border_bottom">
                        <div class="left">
                            <div class="email_print">
                                <ul>
                                    <li><a  onclick="window.print()"><span class="ico_16 ico_print_16"></span>Bản in</a></li>
                                    <li><a href="javascript:void(0)" onclick="GetDataSavedProject('<?php echo $detail[0]['id_pro']?>','/du-an/khu-cong-nghiep-c11/khu-cong-nghiep-cat-lai-ii-i58','.itemsaved')" class="itemsaved">
                                        <span class="ico_16 ico_save_2_16"></span>Lưu tin</a></li>
                                    <li><a  href="javascript:history.go(-1)"><span class="ico_16 ico_back_16"></span>Quay lại</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="right">
                                <div  class="social_network">
        <span class="tl">Chia sẻ</span>
        <ul>
        <li><a href="http://www.facebook.com/share.php?u=<?php echo str_replace('//','/',base_url().$_SERVER['REQUEST_URI'])?>" target="_blank"><span class="ico_16 ico_facebook_16">facebook</span></a></li>
        
        
        </ul>
    </div>

                        </div>
                    </div>
    <div class="breadcrumb">
            <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="<?php echo base_url();?>du-an" itemprop="url" title=""><span itemprop="title">Dự án</span></a>
&raquo;            </div>
            <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="<?php echo base_url();?>du-an/<?php echo  mb_strtolower(url_title(removesign($detail[0]['name'])))?>-c<?php echo $detail[0]['id_cate']?>" itemprop="url" title="<?php echo  mb_strtolower(url_title(removesign($detail[0]['name'])))?>"><span itemprop="title"><?php echo $detail[0]['name']?></span></a>
            </div>
    </div>
                    <div class="body">
                        <h1 class="larger_title"><?php echo $detail[0]['title']?></h1>
                        <p>
                            Vị trí: E4 Nguyễn Thị Định, Thạnh Mỹ Lợi,
<?php echo $list_district[$detail[0]['id_district']]?>,
                            <?php echo $list_city[$detail[0]['id_city']]?></p>
                           
                        <div class="news-content">
                            <p>
                                <?php echo $detail[0]['content']?>
</p>
                            
                        </div>
                    </div>
                    <div class="unity_bar">
                        <div class="left">
                            <div class="email_print">
                                <ul>
                                    <li><a href="javascript:window.print()"><span class="ico_16 ico_print_16"></span>Bản in</a></li>
                                    <li><a href="javascript:void(0)" onclick="GetDataSavedProject('<?php echo $detail[0]['id_pro']?>','/du-an/khu-cong-nghiep-c11/khu-cong-nghiep-cat-lai-ii-i58','.itemsaved')" class="itemsaved">
                                        <span class="ico_16 ico_save_2_16"></span>Lưu tin</a></li>
                                    <li><a href="javascript:history.go(-1)"><span class="ico_16 ico_back_16"></span>Quay lại</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="right">
                                <div  class="social_network">
        <span class="tl">Chia sẻ</span>
        <ul>
        <li><a href="http://www.facebook.com/share.php?u=<?php echo str_replace('//','/',base_url().$_SERVER['REQUEST_URI'])?>" target="_blank"><span class="ico_16 ico_facebook_16">facebook</span></a></li>
        
        </ul>
    </div>

                        </div>
                    </div>
                </div>
                
            </div>
        </div>
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
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/doolv3.js?2004" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
</div>
</body>
</html>