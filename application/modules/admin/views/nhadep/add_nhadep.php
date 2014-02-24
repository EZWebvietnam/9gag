
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
                        <label class="control-label" for="disabledInput">Tiêu đề</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" name="title">
                            <input class="input-xlarge disabled" id="disabledInput" type="hidden" name="code" value="<?php echo $code ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Danh mục</label>
                        <div class="controls">
                            <select name="id_cate">
                            <?php 
                            foreach($cate as $list_cate)
                            {
                            ?>
                            <option value="<?php echo $list_cate['id']?>"><?php echo $list_cate['name']?></option>
                            <?php } ?>
                            </select>
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Up hình</label>
                        <div class="controls">
                            <input id="userfile" name="userfile" type="file" multiple="true">
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
    <script src="<?php echo base_url()?>assets/js/jquery/uploadify_31/jquery.uploadify-3.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#userfile').uploadify({
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
				'swf'      : '<?php echo base_url()?>assets/js/jquery/uploadify_31/uploadify.swf',
				'uploader' : '<?php echo base_url()?>upload/do_upload/<?php echo $code;?>',
                                'debug':false,
                                'auto':true,
                                'cancelImg': '<?php echo base_url()?>assets/javascript/jquery/uploadify_31/uploadify-cancel.png',
                                'fileTypeExts':'*.jpg;*.bmp;*.png;*.tif',
                                'fileTypeDesc':'Image Files (.jpg,.bmp,.png,.tif)',
                                'fileSizeLimit':'2MB',
                                'fileObjName':'userfile',
                                'buttonText':'Select Photo(s)',
                                'multi':true,
                                'removeCompleted':false,
                                'onUploadError' : function(file, errorCode, errorMsg, errorString) {
                                    alert('The file ' + file.name + ' could not be uploaded: ' + errorString);
                                },
                                 'onUploadSuccess':function(file){
                                    document.getElementById('file').value=file.name
                                 }
			});
		});
	</script>