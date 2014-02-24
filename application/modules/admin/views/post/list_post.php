<a class="btn btn-primary" href="<?php echo base_url();?>admin/post/add">
    <i  class="icon icon-color icon-plus"></i> 
                                Thêm bài viết
                            </a>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Danh mục bài viết</h2>
            <div class="box-icon">

                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Tóm tắt</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php 
                    foreach($list_post as $post)
                    {
                    ?>
                    <tr>
                        <td><?php echo $post['name']?></td>
                        <td><?php echo sub_string(loaibohtmltrongvanban($post['content']), 200)?></td>
                        <td class="center">
                            
                            <a class="btn btn-info" href="<?php echo base_url();?>admin/post/edit/<?php echo $post['id']?>">
                                <i class="icon-edit icon-white"></i>  
                               Sửa                                        
                            </a>
                            <a onclick="return confirm('Bạn có chắc muốn xóa không ?')" class="btn btn-danger" href="<?php echo base_url();?>admin/post/delete/<?php echo $post['id']?>">
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