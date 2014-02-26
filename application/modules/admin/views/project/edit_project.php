
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>admin/adminproject">Dự Án</a>
        </li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Thêm Dự Án</h2>
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
                        <label class="control-label" for="disabledInput">Tên Dự Án</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="title" value="<?php echo $detail[0]['title']?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Thành phố / Tỉnh</label>
                        <div class="controls">
                           <select name="id_city" class="tinh">
                           <?php 
                           foreach($list_city as $k=>$v)
                           {
                            if($v == $detail[0]['id_city'])
                            {
                           ?>
                           <option selected="" value="<?php echo $k?>"><?php echo $v?></option>
                           <?php } else { ?> 
                           <option value="<?php echo $k?>"><?php echo $v?></option>
                           <?php } } ?>
                           </select>
                        </div>
                    </div>
                    
                    <div class="control-group" id="district">
                        <label class="control-label" for="disabledInput">Quận / huyện</label>
                        <div class="controls">
                           <select name="id_district" >
                           <?php 
                           foreach($list_district_edit as $l_d_e)
                           {
                            if($detail[0]['id_district']==$l_d_e['districtid'])
                            {
                           ?>
                           <option selected="" value="<?php echo $l_d_e['districtid']?>"><?php echo $l_d_e['name']?></option>
                           <?php } else { ?> 
                           <option value="<?php echo $l_d_e['districtid']?>"><?php echo $l_d_e['name']?></option>
                           <?php } } ?>
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
                            if($user['id'] == $detail[0]['id_user'])
                            {
                           ?>
                           <option selected="" value="<?php echo $user['id']?>"><?php echo $user['full_name']?></option>
                           <?php } else { ?> 
                           <option value="<?php echo $user['id']?>"><?php echo $user['full_name']?></option>
                           <?php } } ?>
                           </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Danh mục</label>
                        <div class="controls">
                           <select name="id_cate" >
                           <?php 
                           foreach($list_cate_project as $cate)
                           {
                            if($cate['id']==$detail['id_cate'])
                            {
                           ?>
                           <option selected="" value="<?php echo $cate['id']?>"><?php echo $cate['name']?></option>
                           <?php } else { ?> 
                           <option value="<?php echo $cate['id']?>"><?php echo $cate['name']?></option>
                           <?php } } ?>
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
                        <label class="control-label" for="disabledInput">Hình ảnh</label>
                        <div class="controls">
                            <?php 
                            if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/project/'.$detail[0]['img']))
                            {
                            ?>
                            <input type="hidden" name="old_file" value="<?php echo $detail[0]['img']?>"/>
                            <img width="100" height="100" src="<?php echo base_url();?>file/uploads/project/<?php echo $detail[0]['img']?>"/>
                            <?php  } else {?> 
                            <img width="100" height="100" src="<?php echo base_url();?>file/uploads/no_image.gif"/>
                            <?php }?>
                        </div>
                    </div>
                    <div class="control-group">
								<label class="control-label">Nổi bật</label>
								<div class="controls">
                                <?php 
                                
                                if($detail[0]['tieu_diem']==1)
                                {
                                ?>
								  <label class="radio">
									<div class="radio" id="uniform-optionsRadios1"><span class="checked"><input type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked="" style="opacity: 0;"></span></div>
									Có
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<div class="radio" id="uniform-optionsRadios2"><span><input type="radio" name="optionsRadios" id="optionsRadios2" value="2" style="opacity: 0;"></span></div>
									Không
								  </label>
                                <?php } else {
                                    
                                    ?> 
                                <label class="radio">
									<div class="radio" id="uniform-optionsRadios1"><input type="radio" name="optionsRadios" id="optionsRadios1" value="1" style="opacity: 0;"></span></div>
									Có
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<div class="radio" id="uniform-optionsRadios2"><span class="checked"><input type="radio" name="optionsRadios" id="optionsRadios2" checked=""  value="2" style="opacity: 0;"></span></div>
									Không
								  </label>
                                <?php } ?>
								</div>
							  </div>
                    <div class="control-group">
                        <label class="control-label" >Nội dung</label>
                        <div class="controls">
                            <textarea class="ckeditor" name="editor1" id="editor21"><?php echo $detail[0]['content']?></textarea>
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
                                    });
                            
                                });
            </script>
