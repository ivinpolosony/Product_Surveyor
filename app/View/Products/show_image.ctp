<?php 
Configure::write('debug', 0);
header("Content-type: image/jpeg"); //assume jpg image
echo $data['Product']['product_image'];
?>