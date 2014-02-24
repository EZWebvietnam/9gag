

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Thêm danh mục</h2>
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
                        <label class="control-label" for="disabledInput">Tên danh mục:</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name='cate'  type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Dang mục cha:</label>
                        <div class="controls">
                           <select name="parent">
                           <option value="0">--Chọn Danh Mục --</option>
                           <?php 
                           foreach($list_cate_project as $list_prj)
                           {
                           ?>
                           <option value="<?php echo $list_prj['id']?>"><?php echo $list_prj['name']?></option>
                           <?php } ?>
                           </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </div>
                </fieldset>
            </form>