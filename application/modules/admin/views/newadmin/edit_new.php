
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>admin/adminnew">Tin tức</a>
        </li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Sửa Tin Tức</h2>
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
								<label class="control-label">Tiêu điểm</label>
                                <?php 
                                if($detail[0]['hot']==1)
                                {
                                ?>
								<div class="controls">
								  <label class="radio">
									<div class="radio" id="uniform-optionsRadios1"><span class="checked"><input type="radio" name="loai_tin" id="loai_tin" value="1" checked="" style="opacity: 0;"></span></div>
									Có
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<div class="radio" id="uniform-optionsRadios2"><span><input type="radio" name="loai_tin" id="loai_tin" value="0" style="opacity: 0;"></span></div>
									Không
								  </label>
								</div>
                            <?php } else {?>
                            <div class="controls">
								  <label class="radio">
									<div class="radio" id="uniform-optionsRadios1"><span><input type="radio" name="loai_tin" id="loai_tin" value="1" style="opacity: 0;"></span></div>
									Có
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<div class="radio" id="uniform-optionsRadios2"><span  class="checked"><input type="radio" name="loai_tin" id="loai_tin" checked=""  value="0" style="opacity: 0;"></span></div>
									Không
								  </label>
								</div>
                            <?php } ?>
							  </div>

                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Tiêu đề</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="title" value="<?php echo $detail[0]['title']?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Danh mục bài viết</label>
                        <div class="controls">
                           <select name="id_cate">
                           <?php 
                           foreach($list_cate_new as $v)
                           {
                            if($v['id']==$detail[0]['id_cate'])
                            {
                           ?>
                           <option selected="" value="<?php echo $v['id']?>"><?php echo $v['name']?></option>
                           <?php } else { ?> 
                            <option value="<?php echo $v['id']?>"><?php echo $v['name']?></option>
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
                        <label class="control-label" for="disabledInput">Tag</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="tag" value="<?php echo $detail[0]['tag_key']?>">
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
            </script>
