<div id="head_nav">
                <ul>
                    <li id="news_item" ><a href="<?php echo base_url();?>tin-tuc">
                        THÔNG TIN ĐỊA ỐC</a>
                        <div class="sub_menu">
                            <div class="wrap">
                                <div class="col_178">
                                    <div class="left_menu">
                                        <ul>
                                                <?php 
                                                foreach($new_nav as $menu_new)
                                                {
                                                ?>
                                                <li><a href="<?php echo base_url();?>tin-tuc-c/<?php echo mb_strtolower(url_title(removesign($menu_new['name'])))?>-c<?php echo $menu_new['id']?>"><?php echo $menu_new['name']?></a>
                                                </li>
                                                <?php } ?>
                                                
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
                                                        <a href="/tin-tuc/thi-truong-dia-oc-c18/ha-noi-dung-dau-tu-xay-dung-14-nha-ve-sinh-tien-ty-i45146">
                                                        <?php
                                                        
                                                        if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/news/'.$new_on_nav[0]['img'])){
                                                        ?>
                                                            <img src="<?php echo base_url();?>file/uploads/news/<?php echo $new_on_nav[0]['img']?>" width="200" height="154" alt="<?php echo $new_on_nav[0]['title']?>" title="<?php echo $new_on_nav[0]['title']?>"/>
                                                        <?php }
                                                        else { ?>
                                                        <img src="<?php echo base_url();?>file/uploads/news/<?php echo $new_on_nav[0]['img']?>" width="200" height="154" alt="<?php echo $new_on_nav[0]['title']?>" title="<?php echo $new_on_nav[0]['title']?>"/>
                                                        <?php } ?>
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <h2>
                                                            <a href="<?php echo base_url();?>tin-tuc/<?php echo mb_strtolower(url_title(removesign($new_on_nav[0]['name'])))?>-c<?php echo $new_on_nav[0]['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($new_on_nav[0]['title'])))?>-i<?php echo $new_on_nav[0]['id_new']?>"><?php echo $new_on_nav[0]['title']?></a></h2>
                                                        <span class="updated_date"><?php echo date('d/m/Y',$new_on_nav[0]['create_date'])?></span>
                                                        <br />
                                                        <p><?php echo sub_string(loaibohtmltrongvanban($new_on_nav[0]['content']),367);?></p>
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
                                            <?php 
                                            foreach($list_last_new as $l_l_new)
                                            {
                                            ?>
                                                    <li><span class="bullet"></span><a href="<?php echo base_url();?>tin-tuc/<?php echo mb_strtolower(url_title(removesign($l_l_new['name'])))?>-c<?php echo $l_l_new['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($l_l_new['title'])))?>-i<?php echo $l_l_new['id_new']?>" title="<?php echo $l_l_new['title']?>">
                                                       <?php echo sub_string($l_l_new['title'],50);?> ...
                                                    </a></li> 
                                             <?php } ?>       
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="real_market_item" ><a href="<?php echo base_url();?>sieu-thi">
                        SIÊU THỊ ĐỊA ỐC</a>
                        <div class="sub_menu">
                            <div class="wrap">
                                <div class="col_178">
                                    <div class="left_menu">
                                        <ul>
                                             <li><a href="<?php echo base_url();?>sieu-thi/nha-pho-c3">Nhà phố</a>
                                             </li>
                                              <li><a href="<?php echo base_url();?>sieu-thi/vila-biet-thu-c2">Vila - Biệt thự</a>
                                             </li>  
                                              <li><a href="<?php echo base_url();?>sieu-thi/can-ho-chung-cu-c7">Căn hộ chung cư</a>
                                             </li>  
                                              <li><a href="<?php echo base_url();?>sieu-thi/dat-o-dat-tho-cu-c11">Đất ở - Đất thổ cư</a>
                                             </li>  
                                             <li><a href="<?php echo base_url();?>sieu-thi/dat-du-an-quy-hoach-c10">Đất dự án - Quy hoạch</a>
                                             </li>
                                             <li><a href="<?php echo base_url();?>sieu-thi/van-phong-c6">Văn phòng</a>
                                             </li>   
                                             <li><a href="<?php echo base_url();?>sieu-thi/mat-bang-cua-hang-c18">Mặt bằng - Cửa hàng</a>
                                             </li> 
                                              <li><a href="<?php echo base_url();?>sieu-thi/nha-hang-khach-san-c17">Nhà hàng - Khách sạn</a>
                                             </li>   
                                             <li><a href="<?php echo base_url();?>sieu-thi/nha-kho-nha-xuong-c16">Nhà kho - Nhà xưởng</a>
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
                                            <?php 
                                            $i = 1;
                                            foreach($tai_san_noi_bat as $tsnb)
                                            {
                                                if($i==3)
                                                {
                                            ?>
                                                    <div class="real_block">
                                                    <?php } else {?>
                                                    <div class="real_block last">
                                                    <?php } ?>
                                                        <a href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($tsnb['loai_dia_oc'])))?>-c<?php echo $tsnb['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($tsnb['title'])))?>-h<?php echo $tsnb['id']?>">
                                                        <?php 
                                                        if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$tsnb['code'].'/'.$tsnb['img'])){
                                                        ?>
                                                            <img src="<?php echo base_url();?>file/uploads/property/<?php echo $tsnb['code']?>/<?php echo $tsnb['img']?>" width="140" height="140"  alt="<?php echo $tsnb['title']?>" title="<?php echo $tsnb['title']?>"/>
                                                            <?php } else {?> 
                                                            <img src="<?php echo base_url();?>file/uploads/no_image.gif" width="140" height="140"  alt="<?php echo $tsnb['title']?>" title="<?php echo $tsnb['title']?>"/>
                                                            <?php } ?>
                                                            </a>
                                                        <h3>
                                                            <a href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($tsnb['loai_dia_oc'])))?>-c<?php echo $tsnb['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($tsnb['title'])))?>-h<?php echo $tsnb['id']?>">
                                                                <?php echo sub_string(loaibohtmltrongvanban($tsnb['content']),30);?>
                                                            </a>
                                                        </h3>
                                                    </div>
                                              <?php $i++;} ?>      
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
                                            <?php foreach($tai_san_noi_bat_khac as $ts_khac) 
                                            {?>
                                                    <li><span class="bullet"></span><a href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($ts_khac['loai_dia_oc'])))?>-c<?php echo $ts_khac['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($ts_khac['title'])))?>-h<?php echo $ts_khac['id']?>" title="Chỉ 600 triệu/căn - Quý khách sẽ sở hữu tổ ấm của riêng mình ngay cạnh KDL Đầm Sen">
                                                        <span><?php echo $list_city[$ts_khac['id_city']]?>: </span>
                                                        <?php echo sub_string(loaibohtmltrongvanban($ts_khac['content']),20);?></a> </li>
                                             <?php } ?>       
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </li>
                    <li id="project_item" ><a href="<?php echo base_url();?>du-an">
                        DỰ ÁN</a>
                        <div class="sub_menu">
                            <div class="wrap">
                                <div class="col_178">
                                    <div class="left_menu">
                                        <ul>
                                                <?php 
                                                foreach($cate_pro_nav as $cate_pro)
                                                {
                                            ?>
                                            <li><a href="<?php echo base_url();?>du-an-c/<?php echo  mb_strtolower(url_title(removesign($cate_pro['name'])))?>-c<?php echo $cate_pro['id']?>"><?php echo $cate_pro['name']?></a></li>
                                            <?php } ?>
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
                                                        <a href="<?php echo base_url();?>du-an/<?php echo  mb_strtolower(url_title(removesign($noi_bat_menu_1[0]['name'])))?>-c<?php echo $noi_bat_menu_1[0]['id_cate']?>/<?php echo  mb_strtolower(url_title(removesign($noi_bat_menu_1[0]['title'])))?>-i<?php echo $noi_bat_menu_1[0]['id_pro']?>">
                                                        <?php 
                                                        if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/project/'.$noi_bat_menu_1[0]['img']))
                                                        {
                                                        ?>
                                                            <img src="<?php echo base_url();?>file/uploads/project/<?php echo $noi_bat_menu_1[0]['img']?>" width="200" height="154" alt="<?php echo $noi_bat_menu_1[0]['title']?>" title="<?php echo $noi_bat_menu_1[0]['title']?>"/>
                                                            <?php } ?>
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <h2>
                                                            <a href="<?php echo base_url();?>du-an/<?php echo  mb_strtolower(url_title(removesign($noi_bat_menu_1[0]['name'])))?>-c<?php echo $noi_bat_menu_1[0]['id_cate']?>/<?php echo  mb_strtolower(url_title(removesign($noi_bat_menu_1[0]['title'])))?>-i<?php echo $noi_bat_menu_1[0]['id_pro']?>"><?php echo $noi_bat_menu_1[0]['title']?></a></h2>
                                                        <span class="updated_date"><?php echo date('d/m/Y h:i',$noi_bat_menu_1[0]['create_date'])?></span>
                                                        <br />
                                                        <p><?php echo sub_string(loaibohtmltrongvanban($noi_bat_menu_1[0]['content']),200);?></p>
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
                                                <?php 
                                                foreach($noi_bat_menu as $noi_menu)
                                                {
                                                ?>
                                                    <li><span class="bullet"></span><a href="<?php echo base_url();?>du-an/<?php echo mb_strtolower(url_title(removesign($noi_menu['name'])))?>-c<?php echo $noi_menu['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($noi_menu['title'])))?>-i<?php echo $noi_menu['id_pro']?>" title="<?php echo $noi_menu['title']?>">
                                                        <span><?php echo $list_city[$noi_menu['id_city']]?>: </span>
                                                       <?php echo sub_string(loaibohtmltrongvanban($noi_menu['content']),45);?>
                                                    </a></li>
                                                 <?php }?>   
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li ><a href="/doanh-nghiep">
                        DOANH NGHIỆP</a></li>
                    <li ><a href="<?php echo base_url();?>kham-pha" >
                        KHÁM PHÁ</a>
                        <div class="sub_menu">
                            <div class="wrap">
                                <div class="col_178">
                                    <div class="left_menu">
                                        <ul>
                                        <?php 
                                        foreach($nav_cate_dis as $cate_nav)
                                        {
                                        ?>
                                                <li><a href="<?php echo base_url();?>kham-pha-c/<?php echo mb_strtolower(url_title(removesign($cate_nav['name'])))?>-c<?php echo $cate_nav['id']?>"><?php echo $cate_nav['name']?></a></li>
                                        <?php } ?>        
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
                                                        <a href="/kham-pha/khong-gian-song-c7/thong-dong-cuoi-ngua-ngam-bien-o-nam-phi-i45131">
                                                        <?php 
                                                        if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/discovery/'.$last_dis[0]['img']))
                                                        {
                                                        ?>
                                                            <img src="<?php echo base_url();?>file/uploads/discovery/<?php echo $last_dis[0]['img']?>" width="200" height="125" alt="<?php echo $last_dis[0]['title']?>" title="<?php echo $last_dis[0]['title']?>"/>
                                                        <?php } ?>
                                                            </a>
                                                    </div>
                                                    <div class="right">
                                                        <h2>
                                                            <a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($last_dis[0]['name'])))?>-c<?php echo $last_dis[0]['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($last_dis[0]['title'])))?>-i<?php echo $last_dis[0]['id_disco']?>"><?php echo $last_dis[0]['title']?></a></h2>
                                                        <span class="updated_date">08/01/2014 16:50</span>
                                                        <br />
                                                        <p><?php echo sub_string(loaibohtmltrongvanban($last_dis[0]['content']),200);?></p>
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
                                            <?php 
                                            foreach($last_dis_nb as $last_dis)
                                            {
                                            ?>
                                                    <li><span class="bullet"></span><a href="<?php echo base_url();?>kham-pha/<?php echo mb_strtolower(url_title(removesign($last_dis['name'])))?>-c<?php echo $last_dis['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($last_dis['title'])))?>-i<?php echo $last_dis['id_disco']?>" title="<?php echo $last_dis['title']?>" >
                                                        <?php echo $last_dis['title']?>
                                                    </a></li>
                                             <?php } ?>       
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
                <?php 
                if($this->tank_auth->is_logged_in())
                {
                ?>
                <div class="login">
                        <a href="<?php echo base_url();?>thanh-vien/tai-san-dang-hien-thi" class="signin"><span class="ico_16 ico_login_16">
                        </span>Về trang cá nhân</a><div class="dropdown">
                            <a href="<?php echo base_url();?>logout" title="Thoát">setting</a></div>
                    </div>
                <?php } else {  ?>
                    <div class="content default">
                        <ul>
                            <li class="login"><span class="login_ico ico_24 ico_login_24"></span><a href="<?php echo base_url();?>dang-nhap">
                                Đăng nhập</a></li>
                            <li class="register"><span class="register_ico ico_24 ico_register_24"></span><a href="<?php echo base_url();?>dang-ky" class="register">
                                Đăng ký</a></li>
                        </ul>
                    </div>
                    <?php } ?>
            </div>
            <div class="post_propertise">
                <a href="<?php echo base_url();?>thanh-vien/tai-san-dang-moi">ĐĂNG TÀI SẢN CỦA BẠN</a>
            </div>
        </div>