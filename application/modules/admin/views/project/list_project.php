<a class="btn btn-primary" href="<?php echo base_url();?>admin/adminproject/add">
    <i  class="icon icon-color icon-plus"></i> 
                                Thêm Dự Án
                            </a>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Dự án</h2>
            <div class="box-icon">

                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Tên dự án</th>
                        <th>Ngày tạo</th>
                        <th>Địa chỉ</th>
                        <th>Thành viên</th>
                        <th>Danh mục</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php 
                    foreach($list_project_admin as $prj)
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
                           
                            <span class="center"><?php echo $prj['name']?></span>
                            
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="<?php echo base_url();?>du-an/<?php echo mb_strtolower(url_title(removesign($prj['name'])))?>-c<?php echo $prj['id_cate']?>/<?php echo mb_strtolower(url_title(removesign($prj['title'])))?>-i<?php echo $prj['id_pro']?>">
                                <i class="icon-zoom-in icon-white"></i>  
                                Xem chi tiết                                            
                            </a>
                            <a class="btn btn-info" href="<?php echo base_url(); ?>admin/adminproject/edit/<?php echo $prj['id_pro']?>">
                                <i class="icon-edit icon-white"></i>  
                               Sửa                                        
                            </a>
                            <a onclick="confirm('Bạn có chắc muốn xóa hay không ?')" class="btn btn-danger" href="<?php echo base_url();?>admin/adminproject/delete/<?php echo $prj['id_pro']?>">
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