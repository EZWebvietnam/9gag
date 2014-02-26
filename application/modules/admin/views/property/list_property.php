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
<a class="btn btn-primary" href="<?php echo base_url();?>admin/adminproperty/add">
    <i  class="icon icon-color icon-plus"></i> 
                                Thêm Tài Sản
                            </a>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Tài sản</h2>
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
                        <th>Tên dự án</th>
                        <th>Ngày tạo</th>
                        <th>Địa chỉ</th>
                        <th>Thành viên</th>
                        <th>Danh mục</th>
                        <th>Tình trạng</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php 
                    foreach($list_property_admin as $prj)
                    {
                    ?>
                    <tr>
                        <td><?php echo $prj['title']?></td>
                        <td class="center"><?php echo date('d/m/Y',$prj['create_date']);?></td>
                        <td class="center"><?php echo $list_district[$prj['id_district']]?>,<?php echo $list_city[$prj['id_city']]?></td>
                        <td class="center">
                           
                            <span class="center"><?php echo $prj['full_name']?></span>
                            
                        </td>
                       
                        <td class="center">
                           
                            <span class="center"><?php echo $prj['loai_dia_oc']?></span>
                            
                        </td>
                        <td class="center">
                           <?php 
                           if($prj['status']==1)
                           {
                           ?>
                            <span class="center"><img src="<?php echo base_url();?>template/admin_ninhbinhcoop/img/ok.png" width="16" height="16" title="Tài sản đã được duyệt"/></span>
                           <?php } else {?>
                           <span class="center"><a href="<?php echo base_url();?>admin/adminproperty/confirmpending/<?php echo $prj['id']?>"><img src="<?php echo base_url();?>template/admin_ninhbinhcoop/img/cancel-on.png" title="Tài sản chưa được duyệt" width="16" height="16" title="Tài sản đã được duyệt"/></a></span>
                           <?php } ?> 
                        </td>
                        <td class="center">
                        <?php 
                        if($prj['status']==0)
                        {
                        ?>
                            <a class="btn btn-success" href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($prj['loai_dia_oc'])))?>-c<?php echo $prj['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($prj['title'])))?>-h<?php echo $prj['id']?>">
                        <?php } else {?> 
                        <a class="btn btn-success" href="<?php echo base_url();?>nha/<?php echo mb_strtolower(url_title(removesign($prj['loai_dia_oc'])))?>-c<?php echo $prj['id_ldo']?>/<?php echo mb_strtolower(url_title(removesign($prj['title'])))?>-h<?php echo $prj['id']?>">
                        <?php } ?>
                                <i class="icon-zoom-in icon-white"></i>  
                                Xem chi tiết                                            
                            </a>
                            <a class="btn btn-info" href="<?php echo base_url(); ?>admin/adminproperty/edit/<?php echo $prj['id']?>">
                                <i class="icon-edit icon-white"></i>  
                               Sửa                                        
                            </a>
                            <a onclick="confirm('Bạn có chắc muốn xóa hay không ?')" class="btn btn-danger" href="<?php echo base_url();?>admin/adminproperty/delete/<?php echo $prj['id']?>">
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