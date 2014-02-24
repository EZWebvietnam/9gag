<div class="row-fluid sortable">		

    <div class="box span12">

        <div class="box-header well" data-original-title>

            <h2><i class="icon-user"></i> Email đăng ký</h2>

            <div class="box-icon">



                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>

                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>

            </div>

        </div>

        <div class="box-content">

            <table class="table table-striped table-bordered bootstrap-datatable datatable">

                <thead>

                    <tr>

                        <th>Email</th>

                        <th>Actions</th>

                    </tr>

                </thead>   

                <tbody>

                    <?php 

                    foreach($list as $email)

                    {

                    ?>

                    <tr>

                        <td><?php echo $email['email']?></td>

                        

                        <td class="center">



                            <a onclick="return confirm('Bạn có chắc muốn xóa không ?')" class="btn btn-danger" href="<?php echo base_url();?>admin/adminemailsubcrise/delete/<?php echo $email['id']?>">

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