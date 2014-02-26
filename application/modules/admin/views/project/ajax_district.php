<div class="control-group" id="district">
                        <label class="control-label" for="disabledInput">Quận / huyện</label>
                        <div class="controls">
                           <select name="id_district" >
                           <?php 
                          
                           foreach($list_district_ajax as $l_d)
                           {
                           ?>
                            <option value="<?php echo $l_d['districtid']?>"><?php echo $l_d['name']?></option>
                           <?php } ?>
                           </select>
                        </div>
                    </div>