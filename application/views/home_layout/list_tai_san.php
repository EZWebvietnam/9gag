<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://www.diaoconline.vn/favicon.ico" type="image/x-icon">
    <title>Cổng thông tin & Giao dịch - DCBLand.COM</title>
    <meta name="description" content=" với hơn 308 tài sản chỉ có tại DCBLand.COM" />
    <meta name="keywords" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/general.css?1021" rel="stylesheet" type="text/css" />
    <!--[if IE 7]>
    <link href="css/ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link href="<?php echo base_url();?>template/home_ezwebvietnam/Content/css/Asset.css" rel="stylesheet" type="text/css" />
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

<!--<div id="position_51" class ='banner_960x75 margin_bottom'><div></div><div><embed height="90" width="960" scale="exactfit" menu="false" AllowScriptAccess="always" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" quality="high" src="http://image.diaoconline.vn/banner-dool/2013/10/18/43B-napdiem_960x90.swf?clicktag=http://www.diaoconline.vn/quangcao/343/51"/></div></div><script type='text/javascript'>var Banner51=1;function Random_Banner51(){    var _Arr=document.getElementById("position_51").getElementsByTagName("div");    for (i=0; i<=_Arr.length-1; i++)    {        _Arr[i].className='bannerHide';    }    _Arr[Banner51 - 1].className='bannerShow';    var tempBanner = $(_Arr[Banner51 - 1]).html(); $(_Arr[Banner51 - 1]).html(''); $(_Arr[Banner51 - 1]).html(tempBanner);    window.setTimeout("Random_Banner51()" ,25000);    Banner51 = Banner51 + 1;    if(Banner51 > _Arr.length)        Banner51 = 1;}Random_Banner51();</script>-->
        <div id="realty_hottest" class="wrap margin_bottom">
            <div class="rounded_style_2 rounded_box">
                <div class="headline_img">
                    <h2>SÀN BĐS NỔI BẬT</h2>
                </div>
                <div class="content">
    <script type="text/javascript">
        $(function () {
            $('.newslogost li').each(function () {
                $(this).tooltipsy({
                    content: $(this).find('.textQTip').html()
                });
            });
        });
    </script>
    <ul class=newslogost>
         <?php 
    foreach($dn_nb_core as $dn_nb)
    {
    ?>
            <li >
                    <a href="<?php echo base_url();?>doanh-nghiep/<?php echo mb_strtolower(url_title(removesign($dn_nb['ten_dn'])))?>-i<?php echo $dn_nb['id']?>/gioi-thieu">
                    <?php 
                    if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/business/'.$dn_nb['logo']))
                    {
                    ?>
                        <img src="<?php echo base_url();?>file/uploads/business/<?php echo $dn_nb['logo']?>" width="75" height="75" alt="<?php echo $dn_nb['ten_dn']?>"/>
                         
                          <?php } else { ?>
                    <img src="<?php echo base_url();?>file/uploads/no_image.gif" width="75" height="75" alt="<?php echo $dn_nb['ten_dn']?>"/>
                    <?php } ?>
                        </a>
            
                <div class="textQTip">
                    <p><strong><?php echo $dn_nb['ten_dn']?></strong></p>
                    <p><?php echo $dn_nb['dia_chi_dn']?>
                        <br />
                            ĐT: <?php echo $dn_nb['sdt']?></p>
                </div>
            </li>
     <?php } ?>            
    </ul>
                </div>
            </div>
        </div>
        <div class="wrap">
            <div class="col_170">
<script type="text/javascript">
    $(function () {
        $("#QuickProjectList,#QuickPriceList,#QuickDioTypeList,#QuickCityList,#QuickDistrictList,#QuickWardList,#CityList,#DistrictList,#WardList,#StreetList,#NumberOfBedRoomList,#DioDirectionList,#DioStateLegalList").uniform({
            selectAutoWidth: true
        });

        var frmSubmit = '#LocationForm';
        $('#filter_normal select, #filter_normal input[type="radio"], #filter_normal input[type="checkbox"]').change(function () {
            $(frmSubmit).submit();
        });
        $('#price_box a').click(function () {
            $('#HDKhoangGiaPost').val($(this).attr('param'));
            $(frmSubmit).submit();
        });
        $('#ResetLoaiDiaOc').bind('click', function () {
            $('#HDLoaiDiaOc').remove();
            $(frmSubmit).submit();
        });
        $('#ResetTinDang').bind('click', function () {
            $('#HDTinDang').remove();
            $(frmSubmit).submit();
        });
        $('#ResetKhuVuc').bind('click', function () {
            $('#HDKhuVuc').remove();
            $(frmSubmit).submit();
        });
        $('#ResetPhongNgu').bind('click', function () {
            $('#HDPhongNgu').remove();
            $(frmSubmit).submit();
        });
        $('#ResetViTri').bind('click', function () {
            $('#HDViTri').remove();
            $(frmSubmit).submit();
        });
        $('#ResetPhongNgu').bind('click', function () {
            $('#HDPhongNgu').remove();
            $(frmSubmit).submit();
        });
        $('#ResetHuong').bind('click', function () {
            $('#HDHuong').remove();
            $(frmSubmit).submit();
        });
        $('#ResetPhapLy').bind('click', function () {
            $('#HDPhapLy').remove();
            $(frmSubmit).submit();
        });
        $('#ResetKhoangGia').bind('click', function () {
            $('#HDKhoangGia').remove();
            $(frmSubmit).submit();
        });

        $('#ShowSearchMenu').click(function () {
            if ($('#filter_quick').attr('style') == 'display:none') {
                $('#filter_quick').attr('style', 'display:block');
                $('#filter_quick div .selector').each(function () {
                    $(this).css('display', 'block')
                })
                $('#filter_normal').attr('style', 'display:none');
                $('#ShowSearchMenu span').text(' + XEM THÊM TÌM NÂNG CAO');
            } else {
                $('#filter_normal').attr('style', 'display:block');
                $('#filter_normal div .selector').each(function () {
                    $(this).css('display', 'block')
                })
                $('#filter_quick').attr('style', 'display:none');
                $('#ShowSearchMenu span').text(' - TRỞ VỀ TÌM NHANH');
            }
        });
        $('#QuickSubmitSearch').click(function () {
            if ($('#QuickDioTypeList').val() == '') {
                $('#QuickDioTypeList').focus();
                return false;
            }
            $('#QuickSubmitSearchHD').val('TimTaiSan');
            $(frmSubmit).submit();
        });
    });
</script>
<form action="<?php echo base_url();?>tim-kiem/tai-san" name="LocationForm" id="LocationForm" method="get" class="form_style_1" enctype="multipart/form-data">
    

    <div id="filter_quick" class="margin_bottom"  style=display:block >
        <div class="content">
            <ul>
                <li id="post_type" class="filter_block">
                    <div class="rounded_style_7 rounded_box">
                    <div class="body">
                    <fieldset>
                        <div class="content margin_bottom">
                            <ul>
                                <li><label><input type="radio" name="LoaiTinDangList" value="1" />Cần bán</label></li>
                                <li><label><input type="radio" name="LoaiTinDangList" value="2" />Cho thuê</label></li>
                                <li><label><input type="radio" name="LoaiTinDangList" value="3" />Cần mua</label></li>
                                <li><label><input type="radio" name="LoaiTinDangList" value="4" />Cần thuê</label></li>
                            </ul>
                        </div>
                        <div>
                            <div class="divUni-2 margin_bottom">
                                <div class="wid-left"></div>
								<div class="wid">
            	            <select id="LoaiDiaOcLis" name="LoaiDiaOcLis"><option value="">Chọn loại địa ốc</option>
                            <?php 
                            foreach($list_loai_dia_oc_ as $l_d_o)
                            {
                            ?>
                            <option value="<?php echo $l_d_o['id']?>"><?php echo $l_d_o['name']?></option>
                            <?php } ?>
                            
</select>
                                </div>
                            </div>
          	            </div>
                        <div class="city divUni-2 margin_bottom">
                            <div class="divUni-2">
                                <div class="divUni-2">
                                    <div class="wid-left"></div>
								    <div class="wid">
                                <select name="ThanhPhoList" id="QuickCityList">
                                    <option value="" >Tỉnh/Thành phố</option>
                                    <?php 
                            foreach($list_city as $k=>$v)
                            {
                            ?>
                            <option value="<?php echo $k;?>"><?php echo $v;?></option>
                            <?php } ?>
                                </select>
                                    </div>
                                </div>
                            </div>
          	            </div>
            	        
                        
                        <div>
                            <label><button id="QuickSubmitSearch"  type="submit" class="btn_2"><span>TÌM TÀI SẢN</span>
                            </button></label>
                            
                        </div>
                      
                </fieldset>
          	    </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    
    
    

</form>
<?php 
foreach($vi_tri_6 as $vt_9)
{
?>
<div class ='banner_170x100'>
<div>
<a href="<?php echo $vt_9['link']?>" target="_blank">
<img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_9['file']?>" width="170px" height="100px"/>
</a>
</div></div>
<?php } ?>
            </div>
            <?php echo $this->load->view($main_content);?>
            <div class="col_170 margin_left">

<?php 
foreach($vi_tri_7 as $vt_10)
{
?>
<div class ='banner_170x200'><div><a href="<?php echo $vt_10['link']?>" target="_blank"><img src="<?php echo base_url();?>file/uploads/adv/<?php echo $vt_10['file']?>" width="170px" height="200px"/></a></div></div>
<?php } ?>

            </div>
        </div>
    </div>


	</div>
    <!--FOOTER-->
<?php include('footer.php')?>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/uniform/uniform.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/script.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/tooltip/tooltipsy.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/slides/slides.min.jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/doolv3.js?1021" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/home_ezwebvietnam/Content/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
</div>
</body>
</html>