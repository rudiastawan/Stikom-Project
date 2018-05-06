<option value=''></option>
  <?php
    foreach ($asal->result() as $data): ?>
   		<option value="<?php echo $data->nama; ?>" > <?php echo $data->nama; ?></option>    
    <?php endforeach; ?>