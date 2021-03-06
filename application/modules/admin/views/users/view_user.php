<?php
$old_password = array(
	'name'	=> 'old_password',
	'id'	=> 'old_password',
	'value' => set_value('old_password'),
	'size' 	=> 30,
    'class'=>'input-xlarge focused'
);
$new_password = array(
	'name'	=> 'new_password',
	'id'	=> 'new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
     'class'=>'input-xlarge focused'
);
$confirm_new_password = array(
	'name'	=> 'confirm_new_password',
	'id'	=> 'confirm_new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size' 	=> 30,
     'class'=>'input-xlarge focused'
);
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo base_url();?>admin/user/listuser">Users</a>
        </li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Xem chi tiết: <?php echo $user_info[0]['username']?></h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" id='view'>
                <fieldset>
                    
                    
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Username</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="<?php echo $user_info[0]['username']?>" disabled="">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Email</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="<?php echo $user_info[0]['email']?>" disabled="">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Ngày tạo</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="<?php echo date('d/m/Y h:i:s',strtotime($user_info[0]['created']))?>" disabled="">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Lần đăng nhập gần nhất</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="<?php echo date('d/m/Y h:i:s',strtotime($user_info[0]['last_login']))?>" disabled="">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Lần đăng nhập gần nhất</label>
                        <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="<?php echo date('d/m/Y h:i:s',strtotime($user_info[0]['last_login']))?>" disabled="">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button class="btn" onclick="back()">Back</button>
                    </div>
                </fieldset>
            </form>
            <script>
                function back()
                {
                    view_a = document.getElementById('view');
                    view_a.action="<?php echo base_url();?>admin/user/listuser";
                    view_a.submit(); 
                }
              </script>
            