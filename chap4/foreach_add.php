<?php
$data = ['和田', '千賀', '武田', '東浜', '笠谷'];

foreach ($data as &$value) {
    
    var_dump ($value);

    if ($value === '笠谷') { $data[] = '鈴木'; }
}
?>
