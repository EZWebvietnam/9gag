<style>
.error-info {
background-color: #FF0000;
border-color: #FFFFFF;
color: #FFFFFF;
}
.success-info {
background-color: #00FF85;
border-color: #FFFFFF;
color: #FFFFFF;
}
.success {
padding: 8px 35px 8px 14px;
margin-bottom: 18px;
text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
background-color: #7EE2A2;
border: 1px solid #7ed0e5;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
color: #EDF5FA;
}
.error {
padding: 8px 35px 8px 14px;
margin-bottom: 18px;
text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
background-color: #DB3A3A;
border: 1px solid #7ed0e5;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
color: #EDF5FA;
}
</style>
<a class="btn btn-primary" href="<?php echo base_url();?>admin/adminadv/add">
    <i  class="icon icon-color icon-plus"></i> 
                                Thêm Quảng Cáo
                            </a>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Quảng Cáo</h2>
            <div class="box-icon">

                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
        <?php 
            if($this->session->flashdata('type'))
            {
        ?>
        <div class="<?php echo $this->session->flashdata('type') ?> <?php echo $this->session->flashdata('type')?>-info">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<i class="icon-info-sign"></i> <?php echo $this->session->flashdata('message')?>						</div>
        <?php } ?>
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Hình ảnh</th>
                        <th>Vị trí</th>
                        <th>Ngày hết hạn</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php 
                    foreach($list_adv as $prj)
                    {
                    ?>
                    <tr>
                        <td><img width="100" height="100" src="<?php echo base_url();?>file/uploads/adv/<?php echo $prj['file']?>"/></td>
                        <td class="center"><?php echo $prj['name']?></td>
                        <td class="center"><?php echo $prj['exp_date']?></td>
                        <td class="center">
                       
                       
                            <a class="btn btn-info" href="<?php echo base_url(); ?>admin/adminadv/edit/<?php echo $prj['id_detail']?>">
                                <i class="icon-edit icon-white"></i>  
                               Sửa                                        
                            </a>
                            <a onclick="confirm('Bạn có chắc muốn xóa hay không ?')" class="btn btn-danger" href="<?php echo base_url();?>admin/adminadv/delete/<?php echo $prj['id_detail']?>">
                                <i class="icon-trash icon-white"></i> 
                                Xóa
                            </a>
                            
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->