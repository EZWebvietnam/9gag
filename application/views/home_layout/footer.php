<div id="footer">

    

    <div id="footer_top">

<div id="bottom_menu" class="wrap">

                <div id="news_menu">

                    <h4>»THÔNG TIN ĐỊA ỐC</h4>

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

                <div id="market_menu">

                    <h4>»SIÊU THỊ ĐỊA ỐC</h4>

                    <ul>

                        <?php 

                                                foreach($cate_sieu_thi_list as $cate_st)

                                                {

                                                ?>

                                                <li><a href="<?php echo base_url();?>sieu-thi/<?php echo mb_strtolower(url_title(removesign($cate_st['name'])))?>-c<?php echo $cate_st['id']?>"><?php echo $cate_st['name']?></a>

                                                </li>

                                                <?php } ?>

                    </ul>

                </div>

                <div id="project_menu">

                    <h4>»DỰ ÁN</h4>

                    <ul>

                            <?php 

                                                foreach($cate_pro_nav as $cate_pro)

                                                {

                                            ?>

                                            <li><a href="<?php echo base_url();?>du-an-c/<?php echo  mb_strtolower(url_title(removesign($cate_pro['name'])))?>-c<?php echo $cate_pro['id']?>"><?php echo $cate_pro['name']?></a></li>

                                            <?php } ?>

                    </ul>

                </div>

                <div id="company_menu">

                    <h4><a href="<?php echo base_url();?>doanh-nghiep">»DOANH NGHIỆP ĐỊA ỐC</a></h4>

                    

                </div>

                <div id="discover_menu" class="last">

                    <h4>

                        »KHÁM PHÁ - TRẢI NGHIỆM</h4>

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

     

        <div class="wrap">

            <div id="social_network" class="white_border_box rounded_box">

                <div class="content">

                    <div class="like">

                    <div style="margin-bottom:5px;">

                        <b>Chăm sóc khách hàng</b>

                        <p><b>Hotline:</b> 01222666896</p>

                        </div>

                        <br />

                  	

                    </div>

                    <div class="join_network">

                        <h4>KẾT NỐI VỚI CHÚNG TÔI TẠI: </h4>

                        <ul>

                        <li class="facebook"><a href="http://facebook.com/" target="_blank">facebook</a></li>

                        <li class="twitter"><a href="https://twitter.com/" target="_blank">twitter</a></li>

                        <li class="youtube"><a href="http://www.youtube.com/" target="_blank">youtube</a></li>

                        <li class="google"><a href="https://plus.google.com/u/1/b/" target="_blank">google</a></li>

                        <li class="linkedin"><a href="http://www.linkedin.com/in/diaoconline" target="_blank">linkedin</a></li>

                        </ul>

                    </div>

                </div>

            </div>

           <div id="dool_network" class="white_border_box rounded_box">

                <div class="content">

					<h4>TƯ VẤN TRỰC TUYẾN</h4>

					<br/>

					<div style="margin-left:5px;">

                   <ul>  

                   <a href="ymsgr:sendim?dcbhouse"><img class="aligncenter  wp-image-6317" title="yahoo" src="http://www.aithietke.com/wp-content/uploads/2013/10/yahoo.png" alt="" width="112" height="30"></a>

                   <a href="ymsgr:sendim?hongdao.tnmt"><img class="aligncenter  wp-image-6317" title="yahoo" src="http://www.aithietke.com/wp-content/uploads/2013/10/yahoo.png" alt="" width="112" height="30"></a>

                   <a href="ymsgr:sendim?dcbland"><img class="aligncenter  wp-image-6317" title="yahoo" src="http://www.aithietke.com/wp-content/uploads/2013/10/yahoo.png" alt="" width="112" height="30"></a>

                

                    </ul></div>

                </div>

            </div>

            <div id="misc" class="rounded_style_3 rounded_box">

                <div class="content">

                   	<ul>

                    <li class="btn_help_center first"><a href="" target="_blank"><span></span>TRUNG TÂM TRỢ GIÚP</a></li>

                    <li class="btn_ad_price_list"><a href="" target="_blank"><span></span>BẢNG GIÁ QUẢNG CÁO</a></li>

                    <li class="btn_point_load"><a href="" target="_blank"><span></span>NẠP ĐIỂM DOOL</a></li>

                    <li class="btn_our_services"><a href="" target="_blank"><span></span>DỊCH VỤ CỦA CHÚNG TÔI</a></li>

                    <li class="btn_post_guide"><a href="" target="_blank"><span></span>HƯỚNG DẪN ĐĂNG TIN</a></li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

    <div id="footer_bottom">

        <div id="foot_content" class="wrap">

        <div id="foot_nav">

            <ul>

            <li class="first"><a href="" target="_blank">Về chúng tôi</a></li>

            <li><a href="<?php echo base_url(); ?>" target="_blank">Hướng dẫn sử dụng</a></li>

            <li><a href="<?php echo base_url(); ?>quy-dinh-su-dung">Quy định sử dụng</a></li>

            <li><a href="<?php echo base_url(); ?>dieu-khoan-thoa-thuan">Điều khoản thỏa thuận</a></li>

      

            <li><a href="<?php echo base_url(); ?>chinh-sach-bao-mat">Chính sách bảo mật</a></li>

            <li><a href="<?php echo base_url(); ?>lien-he">Liên hệ</a></li>

            <li><a href="/rss"><img width="36" height="14" alt="rss diaoconline" src="<?php echo base_url();?>template/home_ezwebvietnam/Content/images/icon_rss.gif"/></a></li>

            </ul>

        </div>

        <div class="copyright">

        <p>Copyright © 2007 - 2013 DCBLand Corp. ® Ghi rõ nguồn "DCBLand.com" khi phát hành lại thông tin từ website này.<br />

        655 Luỹ Bán Bích,Phường Phú Thạnh, Quận Tân Phú,TP.HCM, Viet Nam. Tel: 0947098968

</p>



        </div>

    </div>

    </div>

</div>