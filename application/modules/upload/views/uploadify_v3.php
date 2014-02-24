<!DOCTYPE HTML>
<html lang="en-GB">
<head>
    <meta charset="UTF-8">
    <title>Uploadify V3 &amp; CodeIgniter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Emmanueln Okorie">

    <!-- Styles -->
    <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" type="text/css" media="screen" rel="stylesheet"/>
    <link href="<?php echo base_url()?>assets/js/jquery/uploadify_31/uploadify.css" type="text/css" media="screen" rel="stylesheet"/>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>

<!-- Main Content -->
<div class="container">
    <h1 class="page-header">Uploadify V3 &amp; CodeIgniter</h1>

    <p>This is a simple tutorial demo showing Uploadify V3 working with CodeIgniter 2.1.2</p>
    <?php echo form_open_multipart(); ?>
    <form>
		<div id="queue"></div>
		<input id="userfile" name="userfile" type="file" multiple="true">
                <input type='hidden' name='file' id='file'/>
	</form>
    <?php echo form_close(); ?>
</div>
<!-- End Of Main Content -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/jquery/jquery-1.8.0.min.js"><\/script>')</script>
<script src="<?php echo base_url()?>assets/js/jquery/uploadify_31/jquery.uploadify-3.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
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
</body>
</html>