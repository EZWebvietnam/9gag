<script>

  $(function() {

    $( "#datepicker" ).datepicker(

    { dateFormat: 'yy-mm-dd' }

    );

  });

  </script>

<div>

    <ul class="breadcrumb">

        <li>

            <a href="#">Home</a> <span class="divider">/</span>

        </li>

        <li>

            <a href="<?php echo base_url(); ?>admin/adminadv">Quảng cáo</a>

        </li>

    </ul>

</div>

<div class="row-fluid sortable">

    <div class="box span12">   

        <div class="box-header well" data-original-title>

            <h2><i class="icon-edit"></i> Sửa Quảng Cáo</h2>

            <div class="box-icon">

                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>

                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>

                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>

            </div>

        </div>

        <div class="box-content">

            <form class="form-horizontal" id='view' method="post" enctype="multipart/form-data">

                <fieldset>

                    <div class="control-group">

								<label class="control-label">Vị trí</label>

								<div class="controls">

                                <?php 

                                $i=1;

                                foreach($list_type_adv as $type_adv)

                                {

                                ?>

								  <label class="radio">
                                    <?php 
                                    if($type_adv['id']==$detail[0]['vi_tri'])
                                    {
                                    ?>
									<div class="radio" id="uniform-optionsRadios<?php echo $i;?>"><input checked="" type="radio" name="loai_qc" id="loai_tin" value="<?php echo $type_adv['id']?>" style="opacity: 0;"></span></div>
                                    <?php } else {?>
                                    <div class="radio" id="uniform-optionsRadios<?php echo $i;?>"><input type="radio" name="loai_qc" id="loai_tin" value="<?php echo $type_adv['id']?>" style="opacity: 0;"></span></div>
                                    <?php } ?>
								<?php echo $type_adv['name']?>

								  </label>

								  <div style="clear:both"></div>

								 <?php $i++;} ?> 

								</div>

							  </div>

                    <div class="control-group">

                        <label class="control-label" for="disabledInput">Hình ảnh</label>

                        <div class="controls">

                            <input type="file" name="userfile" id="file_logo_cong_ty">

                        </div>

                    </div>

                    <div class="control-group">

                        <label class="control-label" for="disabledInput">Ngày hết hạn</label>

                        <div class="controls">

                            <input type="text" id="datepicker" name="date" value="<?php echo $detail[0]['exp_date']?>">

                        </div>

                    </div>

                    <div class="control-group">

                        <label class="control-label" for="disabledInput">Link</label>

                        <div class="controls">

                            <input type="text"  name="link" value="<?php echo $detail[0]['link']?>">

                        </div>

                    </div>

                    <div class="form-actions">

                        <button type="submit" class="btn btn-primary">Cập nhập</button>

                    </div>

                </fieldset>

            </form>

           

