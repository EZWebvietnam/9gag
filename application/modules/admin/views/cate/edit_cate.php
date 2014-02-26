

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Sửa danh mục: <?php echo $cate_detail[0]['name']?></h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" name='cate' method="post">
                <fieldset>


                    <div class="control-group">
                        <label class="control-label" for="disabledInput">Tên danh mục:</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name='cate'  type="text" value="<?php echo $cate_detail[0]['name']?>">
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button onclick="update_cate();" type="button" class="btn btn-primary">Update</button>
                    </div>
                </fieldset>
            </form>
            <script>
                function update_cate()
                {
                    document.cate.action="<?php echo base_url();?>admin/cate/save/<?php echo $cate_detail[0]['id']?>";
                    document.cate.submit();
                }
            </script>