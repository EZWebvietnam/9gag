<div class="control-group" id="id_duan">
                        <label class="control-label" for="disabledInput">Dự án</label>
                        <div class="controls">
                           <select name="id_duan" >
                           <option value="0">--Chọn Dự Án ---</option>
                           <?php 
                          
                           foreach($list_district_ajax as $l_d)
                           {
                           ?>
                            <option value="<?php echo $l_d['id']?>"><?php echo $l_d['title']?></option>
                           <?php } ?>
                           </select>
                        </div>
                    </div>