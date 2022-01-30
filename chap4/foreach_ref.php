<?php 
 $data = ['和田', '千賀', '武田', '東浜', '笠谷'];

 foreach ($data as &$value) {
     $value = 'New' . $value;
 }
 print_r($data);
 ?>
