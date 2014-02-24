<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'maxsize'	=> 30,
    'class'=>'input-large span10',
    'placeholder'=>'Username'
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or login';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'maxsize'	=> 30,
        'class'=>'input-large span10',
        'placeholder'=>'Password',
        'type'=>'password'
    
);
$form = array('id'=>'form_login','class'=>'form-horizontal');
?>
<?php echo form_open($this->uri->uri_string(),$form); ?>

						<fieldset>
							<div class="input-prepend" title="Username" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><?php echo form_input($login); ?>
                                                                <?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><?php echo form_input($password); ?>
                                                                <?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
							</div>
							<div class="clearfix"></div>

							
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary">Login</button>
							</p>
						</fieldset>
					     <?php echo form_close(); ?>