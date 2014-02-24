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

            <h2><i class="icon-user"></i> Danh sách giao dịch</h2>

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

                        <th>Mã số hóa đơn</th>

                        <th>Thành viên</th>

                        <th>Số tiền</th>
                         <th>Trạng thái</th>
                       

                    </tr>

                </thead>   

                <tbody>

                    <?php 

                    foreach($list_order as $prj)

                    {

                    ?>

                    <tr>
                        <td class="center"><?php echo $prj['code']?></td>
                        <td class="center"><?php echo $prj['username']?></td>
                        <td class="center"><?php echo $prj['money']?></td>
                        <td class="center"><?php if($prj['status']==0)
                        {
                        ?>
                        <a href="<?php echo base_url();?>admin/adminorder/update_blaceuser/<?php echo $prj['id_order']?>"><img title="Chờ xác nhận" src="<?php echo base_url();?>template/admin_ninhbinhcoop/img/cancel-on.png" /></a>
                        <?php } else { ?> 
                        <img width="20" height="20" title="Đã xác nhận" src="<?php echo base_url();?>template/admin_ninhbinhcoop/img/ok.png" />
                        <?php } ?></td>
                    </tr>
                    <?php } ?>

                    

                </tbody>

            </table>            

        </div>

    </div><!--/span-->



</div><!--/row-->