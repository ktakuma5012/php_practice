<?php

$data = ['kishikawa', 'takahashi', 'matsui','55'];
var_dump(array_search('kishikawa', $data)); #0
var_dump(array_search('mitani', $data)); #2
var_dump(array_search('yokota', $data)); #false

var_dump(array_search(55, $data)); #数値と文字列比較は `==`なのでint(3)
var_dump(array_search(55, $data, true)); #false 第三引数にtrueを渡すと現道にチェックをする。
?>
