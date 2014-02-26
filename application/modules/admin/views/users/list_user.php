<a class="btn btn-primary" href="<?php echo base_url();?>admin/user/add">
    <i  class="icon icon-color icon-plus"></i> 
                                Thêm User
                            </a>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Members</h2>
            <div class="box-icon">

                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Ngày tạo</th>
                        <th>Email</th>
                        <th>Trạng thái</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php 
                    foreach($data as $member)
                    {
                    ?>
                    <tr>
                        <td><?php echo $member['username']?></td>
                        <td class="center"><?php echo date('d/m/Y',strtotime($member['created']));?></td>
                        <td class="center"><?php echo $member['email']?></td>
                        <td class="center">
                            <?php 
                            if($member['activated']==1)
                            {
                            ?>
                            <span class="label label-success">Hoạt động</span>
                            <?php } else {?> 
                                <span class="label label-important">Bị khóa</span>
                                <?php } ?>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="<?php echo base_url();?>admin/user/view/<?php echo $member['id']?>">
                                <i class="icon-zoom-in icon-white"></i>  
                                Xem chi tiết                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="icon-edit icon-white"></i>  
                               Sửa                                        
                            </a>
                            <a class="btn btn-info" href="<?php echo base_url();?>admin/user/update_role/<?php echo $member['id']?>">
                                <i class="icon-edit icon-white"></i>  
                              Update Role                                       
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="icon-trash icon-white"></i> 
                                Xóa
                            </a>
                            <?php 
                            if($member['activated']==1)
                            {
                            ?>
                            <a class="btn btn-primary" href="<?php echo base_url();?>admin/user/ban/<?php echo $member['id']?>">
                                <i class="icon icon-color icon-cross icon-white"></i> 
                                Khóa
                            </a>
                            <?php } else {?> <a class="btn btn-primary" href="<?php echo base_url();?>admin/user/ban/<?php echo $member['id']?>">
                                <i class="icon icon-color icon-check"></i> 
                                Mở Khóa
                            </a><?php }?>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->