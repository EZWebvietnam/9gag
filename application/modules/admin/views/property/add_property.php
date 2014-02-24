
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>admin/adminproperty">Tài sản</a>
        </li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Thêm Tài sản</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" id='view' method="post" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
								<label class="control-label">Loại tin</label>
								<div class="controls">
								  <label class="radio">
									<div class="radio" id="uniform-optionsRadios1"><span class="checked"><input type="radio" name="loai_tin" id="loai_tin" value="1" checked="" style="opacity: 0;"></span></div>
									Cần bán
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<div class="radio" id="uniform-optionsRadios2"><span><input type="radio" name="loai_tin" id="loai_tin" value="2" style="opacity: 0;"></span></div>
									Cho thuê
								  </label>
								</div>
							  </div>

                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Tiêu đề</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="title">
                            <input class="input-xlarge disabled" id="disabledInput" type="hidden" name="code" value="<?php echo $code;?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Thành phố / Tỉnh</label>
                        <div class="controls">
                           <select name="id_city" class="tinh">
                           <?php 
                           foreach($list_city as $k=>$v)
                           {
                           ?>
                           <option value="<?php echo $k?>"><?php echo $v?></option>
                           <?php } ?>
                           </select>
                        </div>
                    </div>
                    
                    <div class="control-group" id="district">
                        <label class="control-label" for="disabledInput">Quận / huyện</label>
                        <div class="controls">
                           <select name="id_district" >
                           </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Thành viên</label>
                        <div class="controls">
                           <select name="id_user" >
                           <?php 
                           foreach($list_user as $user)
                           {
                           ?>
                           <option value="<?php echo $user['id']?>"><?php echo $user['full_name']?></option>
                           <?php } ?>
                           </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Danh mục</label>
                        <div class="controls">
                           <select name="id_cate" >
                           <?php 
                           foreach($list_cate_pro as $cate)
                           {
                           ?>
                           <option value="<?php echo $cate['id']?>"><?php echo $cate['name']?></option>
                           <?php } ?>
                           </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Hình ảnh</label>
                        <div class="controls">
                            <input type="file" name="userfile" id="file_logo_cong_ty">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Vị trí địa ốc</label>
                        <div class="controls">
                           <select name="vi_tri_dia_oc" >
                           <?php 
                           foreach($vi_tri_dia_oc as $cate)
                           {
                           ?>
                           <option value="<?php echo $cate['id']?>"><?php echo $cate['name']?></option>
                           <?php } ?>
                           </select>
                        </div>
                    </div>
                    <div class="control-group" id="id_duan">
                        <label class="control-label" for="disabledInput">Dự Án</label>
                        <div class="controls">
                           <select name="id_duan" >
                           <option value="0">--Chọn Dự Án ---</option>
                           </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Giá</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="price">
                        </div>
                    </div>
                    <div class="control-group">
								<label class="control-label">Nổi bật</label>
								<div class="controls">
								  <label class="radio">
									<div class="radio" id="uniform-optionsRadios1"><span class="checked"><input type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked="" style="opacity: 0;"></span></div>
									Miễn trung gian
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<div class="radio" id="uniform-optionsRadios2"><span><input type="radio" name="optionsRadios" id="optionsRadios2" value="2" style="opacity: 0;"></span></div>
									Ký gửi môi giới
								  </label>
								</div>
							  </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Phần trăm ký gửi</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="phi_ky_gui">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Diện tích sử dụng</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="dien_tich">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Diện tích khuôn viên - Chiều ngang</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="chieu_ngang">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Diện tích khuôn viên - Chiều ngang sau</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="chieu_ngang_sau">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Diện tích khuôn viên - Chiều dài</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="chieu_dai">
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Diện tích xây dựng - Chiều ngang</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="xd_chieu_ngang">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Diện tích xây dựng - Chiều ngang sau</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="xd_chieu_ngang_sau">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Diện tích xây dựng - Chiều dài</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="xd_chieu_dai">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Tình trạng pháp lý</label>
                        <div class="controls">
                           <select name="tinh_trang_phap_ly" >
                           <?php 
                           foreach($tinh_trang_phap_ly as $t_t_p_l)
                           {
                           ?>
                           <option value="<?php echo $t_t_p_l['id']?>"><?php echo $t_t_p_l['name']?></option>
                           <?php } ?>
                           </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Hướng tài sản</label>
                        <div class="controls">
                           <select name="huong" >
                           <?php 
                           foreach($get_list_huong as $huong)
                           {
                           ?>
                           <option value="<?php echo $huong['id']?>"><?php echo $huong['name']?></option>
                           <?php } ?>
                           </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Số lầu</label>
                        <div class="controls">
                           <select name="so_lau" >
                           <?php 
                           for($i=1;$i<=30;$i++)
                           {
                           ?>
                           <option value="<?php echo $i?>"><?php echo $i?></option>
                           <?php } ?>
                           </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Số phòng khách</label>
                        <div class="controls">
                           <select name="so_phong_khach" >
                           <?php 
                           for($i=1;$i<=30;$i++)
                           {
                           ?>
                           <option value="<?php echo $i?>"><?php echo $i?></option>
                           <?php } ?>
                           </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Phòng ngủ</label>
                        <div class="controls">
                           <select name="so_phong_ngu" >
                           <?php 
                           foreach($get_phong_ngu as $pn)
                           {
                           ?>
                           <option value="<?php echo $pn['id']?>"><?php echo $pn['name']?></option>
                           <?php } ?>
                           </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Số phòng tắm - WC</label>
                        <div class="controls">
                           <select name="so_phong_tam_wc" >
                           <?php 
                           for($i=1;$i<=30;$i++)
                           {
                           ?>
                           <option value="<?php echo $i?>"><?php echo $i?></option>
                           <?php } ?>
                           </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Số phòng khác</label>
                        <div class="controls">
                           <select name="phong_khac" >
                           <?php 
                           for($i=1;$i<=30;$i++)
                           {
                           ?>
                           <option value="<?php echo $i?>"><?php echo $i?></option>
                           <?php } ?>
                           </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Các tiện ích</label>
                        <div class="controls">
                           <p><input type="checkbox" value="1" name="day_du_tien_nghi" />Đầy đủ tiện nghi</p>
                           <input type="checkbox" value="1" name="cho_dau_xe_hoi" />Chỗ đậu xe hơi
                           <p><input type="checkbox" value="1" name="san_vuon" />Sân vườn</p>
                           <p><input type="checkbox" value="1" name="ho_boi" />Hồ bơi</p>
                           <p><input type="checkbox" value="1" name="tien_kinh_doanh" />Tiện kinh doanh</p>
                           <p><input type="checkbox" value="1" name="tien_de_o" />Tiện để ở</p>
                           <p><input type="checkbox" value="1" name="tien_lam_van_phong" />Tiện làm văn phòng</p>
                           <p><input type="checkbox" value="1" name="tien_cho_san_xuat" />Tiện cho sản xuất</p>
                           <p><input type="checkbox" value="1" name="cho_sinh_vien_thue" />Cho sinh viên thuê</p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" >Nội dung</label>
                        <div class="controls">
                            <textarea class="ckeditor" name="editor1" id="editor21"></textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('editor1');
                            </script> 
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </div>
                </fieldset>
            </form>
            <script>
                function back()
                {
                    view_a = document.getElementById('view');
                    view_a.action = "<?php echo base_url(); ?>admin/user/add";
                    view_a.submit();
                }
                $(function() {
                                    $(".tinh").live("click", function() {
                                        var id_tinh = "";
                                        $('.tinh').each(function() {
                                            id_tinh = $(this).val();
                                        });
                                        $.post("<?php echo base_url();?>admin/adminproject/ajax_get_district", {"id_tinh": id_tinh}, function(response) {
                                            $("#district").html(response);
                                        });
                                        $.post("<?php echo base_url();?>admin/adminproject/ajax_get_project_city", {"id_tinh": id_tinh}, function(response) {
                                            $("#id_duan").html(response);
                                        });
                                    });
                            
                                });
            </script>
