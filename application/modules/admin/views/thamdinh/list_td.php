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
<div class="row-fluid sortable">		

    <div class="box span12">

        <div class="box-header well" data-original-title>

            <h2><i class="icon-user"></i> Thẩm định giá</h2>

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

                        <th>Mã số tài sản</th>

                        <th>Địa chỉ</th>

                        <th>Họ tên</th>
                         <th>SĐT</th>
                          <th>Email</th>
                        <th>Actions</th>

                    </tr>

                </thead>   

                <tbody>

                    <?php 

                    foreach($list_tham_dinh as $prj)

                    {

                    ?>

                    <tr>

                        <td class="center"><?php echo $prj['ma_so_tai_san']?></td>

                        <td class="center"><?php echo $prj['dia_chi']?></td>

                        <td class="center"><?php echo $prj['ho_ten']?></td>
                        <td class="center"><?php echo $prj['sdt']?></td>
                        <td class="center"><?php echo $prj['email']?></td>
                        <td class="center">
                            <a onclick="confirm('Bạn có chắc muốn xóa hay không ?')" class="btn btn-danger" href="<?php echo base_url();?>admin/adminthamdinh/delete/<?php echo $prj['id']?>">

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