
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>admin/user/listuser">Users</a>
        </li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Thêm thành viên</h2>
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
                        <label class="control-label" for="disabledInput">Full Name</label>
                        <div class="controls">
                            <input type="text" name="fullname"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Email</label>
                        <div class="controls">
                            <?php
                            $email = array(
                                'name' => 'email',
                                'id' => 'email',
                                'value' => set_value('email'),
                                'class' => 'input-xlarge focused'
                            );
                            if ($email) {
                                ?>
                                <?php echo form_input($email); ?>
                                <?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']]) ? $errors[$email['name']] : ''; ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Username</label>
                        <div class="controls">
                            <?php
                            $username = array(
                                'name' => 'username',
                                'id' => 'username',
                                'value' => set_value('username'),
                                'maxlength' => $this->config->item('username_max_length', 'tank_auth'),
                                'class' => 'input-xlarge focused'
                            );

                            if ($username) {
                                ?>
                                <?php echo form_input($username); ?>

                                <?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']]) ? $errors[$username['name']] : ''; ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Mật khẩu</label>
                        <div class="controls">
                            <?php
                            $password = array(
                                'name' => 'password',
                                'id' => 'password',
                                'value' => set_value('password'),
                                'maxlength' => $this->config->item('password_max_length', 'tank_auth'),
                                'class' => 'input-xlarge focused'
                            );
                            echo form_password($password);
                            ?>
                            <?php echo form_error($password['name']); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Mật khẩu</label>
                        <div class="controls">
                            <?php
                            $confirm_password = array(
                                'name' => 'password2',
                                'id' => 'password2',
                                'value' => set_value('confirm_password'),
                                'maxlength' => $this->config->item('password_max_length', 'tank_auth'),
                               
                                'class' => 'input-xlarge focused'
                            );
                            echo form_password($confirm_password);
                            ?>
                            <?php echo form_error($password['name']); ?>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">User Role</label>
                        <div class="controls">
                            <select name="role">
                            <?php 
                            foreach($user_role as $role)
                            {
                            ?>
                            <option value="<?php echo $role['id']?>"><?php echo $role['name']?></option>
                            <?php } ?>
                            </select>
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
