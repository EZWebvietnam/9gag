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
            <h2><i class="icon-edit"></i> Xem chi tiết: <?php echo $detail[0]['username']?></h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" id='view' method="post">
                <fieldset>
                    
                    
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Role</label>
                        <div class="controls">
                            <select name="role">
                            <?php 
                            foreach($user_role as $role)
                            {
                                if($detail[0]['role']==$role['id'])
                                {
                            ?>
                            <option selected="" value="<?php echo $role['id']?>"><?php echo $role['name']?></option>
                            <?php } else { ?> 
                            <option value="<?php echo $role['id']?>"><?php echo $role['name']?></option>
                            <?php }  } ?>
                            </select>
                        </div>
                    </div>
                   <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </fieldset>
            </form>
            
            