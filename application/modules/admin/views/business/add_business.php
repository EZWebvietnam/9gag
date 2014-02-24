
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
            <h2><i class="icon-edit"></i> Thêm Tin Tức</h2>
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
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="title">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Thành viên chủ quản</label>
                        <div class="controls">
                           <select name="id_cate">
                           <?php 
                           foreach($list_user as $v)
                           {
                           ?>
                           <option value="<?php echo $v['id']?>"><?php echo $v['full_name']?></option>
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
                        <label class="control-label" for="disabledInput">Địa chỉ</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="address">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">SĐT</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="sdt">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">FAX</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="fax">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Mail</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="mail">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Web</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="web">
                        </div>
                    </div>					<div class="control-group">								<label class="control-label">Trạng thái</label>								<div class="controls">								  <label class="radio">									<div class="radio" id="uniform-optionsRadios1"><span class="checked"><div class="radio" id="uniform-optionsRadios1"><span class="checked"><input type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked="" style="opacity: 0;"></span></div></span></div>									Kích hoạt								  </label>								  <div style="clear:both"></div>								  <label class="radio">									<div class="radio" id="uniform-optionsRadios2"><span><div class="radio" id="uniform-optionsRadios2"><span><input type="radio" name="optionsRadios" id="optionsRadios2" value="2" style="opacity: 0;"></span></div></span></div>									Không kích hoạt								  </label>								</div>					</div>					<div class="control-group">								<label class="control-label">Nổi bật</label>								<div class="controls">								  <label class="radio">									<div class="radio" id="uniform-optionsRadios1"><span class="checked"><div class="radio" id="uniform-optionsRadios1"><span class="checked"><input type="radio" name="noi_bat" id="optionsRadios1" value="1" checked="" style="opacity: 0;"></span></div></span></div>									Có								  </label>								  <div style="clear:both"></div>								  <label class="radio">									<div class="radio" id="uniform-optionsRadios2"><span><div class="radio" id="uniform-optionsRadios2"><span><input type="radio" name="noi_bat" id="optionsRadios2" value="2" style="opacity: 0;"></span></div></span></div>									Không								  </label>								</div>							  </div>
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
            </script>
