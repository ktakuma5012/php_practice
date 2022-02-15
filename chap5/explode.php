<?php

$data = 'リオとニンザブロウとリンリン';
//とで区切る。
print_r(explode('と', $data));
// なし
print_r(explode('や', $data));
// 2要素でいい感じに区切る。
print_r(explode('と', $data, 2));
// 最後から2つ要素目までは切る
print_r(explode('と', $data, -2));
?>
