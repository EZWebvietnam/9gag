<link href="<?php echo base_url() ?>assets/js/jquery/uploadify_31/uploadify.css" type="text/css" media="screen" rel="stylesheet"/>
<script src="<?php echo base_url() ?>plugin/ckeditor/ckeditor.js"></script>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Thêm bài viết</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" name='post' method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Tên bài viết</label>
                        <div class="controls">
                            <input class="input-xlarge focused"  name='name' id="name" type="text" value="<?php echo $post_detail[0]['name']?>">
                        </div>
                    </div>    
                    <div class="control-group">
                        <label class="control-label" >Danh mục tin tức</label>
                        <div class="controls">
                            <select  data-rel="chosen" name='cate'>
                                <?php 
                                foreach($list_cate as $cate)
                                {
                                    if($post_detail[0]['id_cate']==$cate['id'])
                                    {
                                ?>
                                <option selected="" value='<?php echo $cate['id']?>'><?php echo $cate['name']?></option>
                                <?php } else { ?> <option value='<?php echo $cate['id']?>'><?php echo $cate['name']?></option><?php }}?>
                            </select>    
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" >Hình ảnh</label>
                        <div class="controls">
                            <input id="userfile" name="userfile" type="file" multiple="true">
                            <input type='hidden' name='file' id='file'/> 
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" >Nội dung</label>
                        <div class="controls">
                            <textarea class="ckeditor" name="editor1" id="editor21"><?php echo $post_detail[0]['content']?></textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('editor1');
                            </script> 
                        </div>
                    </div>


                    <div class="form-actions">
                        <button onclick="update_post();" type="button" class="btn btn-primary">Thêm</button>
                    </div>
                </fieldset>
            </form>
             <!---<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>--->
            <script>
                function update_post()
                {
                    document.post.action="<?php echo base_url();?>admin/post/save/<?php echo $post_detail[0]['id']?>";
                    document.post.submit();
                }
                function keypress(e) {
                    var keypressed = null;
                    if (window.event)
                    {
                        keypressed = window.event.keyCode;
                    }
                    else
                    {
                        keypressed = e.which;
                    }

                    if (keypressed < 48 || keypressed > 57)
                    {
                        if (keypressed == 8 || keypressed == 127)
                        {
                            return;
                        }
                        return false;
                    }
                }
                $(function() {
                    $(".tinh_di").live("click", function() {
                        var id_tinh = "";
                        $('.tinh_di').each(function() {
                            id_tinh = $(this).val();
                        });
                        $.post("<?php echo base_url(); ?>admin/bus/get_bus_province", {"id_tinh": id_tinh}, function(response) {
                            $("#ben_di").html(response);
                        });
                    });
                    $(".tinh_den").live("click", function() {
                        var tinh_den = "";
                        $('.tinh_den').each(function() {

                            tinh_den = $(this).val();


                        });
                        $.post("<?php echo base_url(); ?>admin/bus/get_bus_province", {"tinh_den": tinh_den}, function(response) {
                            $("#ben_den").html(response);
                        });
                    });
                });
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
				'uploader' : '<?php echo base_url()?>upload/do_upload',
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