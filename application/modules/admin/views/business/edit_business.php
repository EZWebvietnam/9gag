
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>admin/adminnew">Tài sản</a>
        </li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Sửa Doanh Nghiệp</h2>
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
                        <label class="control-label" for="disabledInput">Tên</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="title" value="<?php echo $detail[0]['ten_dn']?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Thành viên chủ quản</label>
                        <div class="controls">
                           <select name="id_cate">
                           <?php 
                           foreach($list_user as $v)
                           {
                            if($v['id']==$detail[0]['id_user'])
                            {
                           ?>
                           <option selected="" value="<?php echo $v['id']?>"><?php echo $v['full_name']?></option>
                           <?php } else { ?> 
                           <option value="<?php echo $v['id']?>"><?php echo $v['full_name']?></option>
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
                        <label class="control-label" for="disabledInput">Địa chỉ</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="address" value="<?php echo $detail[0]['dia_chi_dn']?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">SĐT</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="sdt" value="<?php echo $detail[0]['sdt']?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">FAX</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="fax" value="<?php echo $detail[0]['fax']?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Mail</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="mail" value="<?php echo $detail[0]['mail']?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Web</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="web" value="<?php echo $detail[0]['web']?>">
                        </div>
                    </div>					<div class="control-group">								<label class="control-label">Trạng thái</label>								<div class="controls">								<?php								if($detail[0]['status']==1)								{								?>								  <label class="radio">									<div class="radio" id="uniform-optionsRadios1"><span class="checked"><div class="radio" id="uniform-optionsRadios1"><span class="checked"><input type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked="" style="opacity: 0;"></span></div></span></div>									Kích hoạt								  </label>								  <div style="clear:both"></div>								  <label class="radio">									<div class="radio" id="uniform-optionsRadios2"><span><div class="radio" id="uniform-optionsRadios2"><span><input type="radio" name="optionsRadios" id="optionsRadios2" value="2" style="opacity: 0;"></span></div></span></div>									Không kích hoạt								  </label>								 <?php } else {?>								 <label class="radio">									<div class="radio" id="uniform-optionsRadios1"><span ><div class="radio" id="uniform-optionsRadios1"><span><input type="radio" name="optionsRadios" id="optionsRadios1" value="1" style="opacity: 0;"></span></div></span></div>									Kích hoạt								  </label>								  <div style="clear:both"></div>								  <label class="radio">									<div class="radio" id="uniform-optionsRadios2"><span class="checked"><div class="radio" id="uniform-optionsRadios2"><span  class="checked"><input type="radio" name="optionsRadios" checked=""  id="optionsRadios2" value="2" style="opacity: 0;"></span></div></span></div>									Không kích hoạt								  </label>								 <?php }?>								</div>					</div>					<div class="control-group">								<label class="control-label">Nổi bật</label>								<div class="controls">								<?php								if($detail[0]['noi_bat']==1)								{								?>								  <label class="radio">									<div class="radio" id="uniform-optionsRadios1"><span class="checked"><div class="radio" id="uniform-optionsRadios1"><span class="checked"><input type="radio" name="noi_bat" id="optionsRadios1" value="1" checked="" style="opacity: 0;"></span></div></span></div>									Có								  </label>								  <div style="clear:both"></div>								  <label class="radio">									<div class="radio" id="uniform-optionsRadios2"><span><div class="radio" id="uniform-optionsRadios2"><span><input type="radio" name="noi_bat" id="optionsRadios2" value="2" style="opacity: 0;"></span></div></span></div>									Không								  </label>								<?php } else {?>								<label class="radio">									<div class="radio" id="uniform-optionsRadios1"><span><div class="radio" id="uniform-optionsRadios1"><span><input type="radio" name="noi_bat" id="optionsRadios1" value="1" style="opacity: 0;"></span></div></span></div>									Có								  </label>								  <div style="clear:both"></div>								  <label class="radio">									<div class="radio" id="uniform-optionsRadios2"><span  class="checked"><div class="radio" id="uniform-optionsRadios2"><span  class="checked"><input type="radio" checked=""  name="noi_bat" id="optionsRadios2" value="2" style="opacity: 0;"></span></div></span></div>									Không								  </label>								<?php } ?>								</div>							  </div>
                    <div class="control-group">
                        <label class="control-label" >Nội dung</label>
                        <div class="controls">
                            <textarea class="ckeditor" name="editor1" id="editor21"><?php echo $detail[0]['gioi_thieu']?></textarea>
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
            </script>
