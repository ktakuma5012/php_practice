<?php

$sum = 0;
for ($i = 1; $i <= 100; $i++){
    // 2で割り切れる偶数値のみ計算。
    // 処理をスキップ。
    if($i % 2 !== 0 ){ continue; }
    print $sum;
    echo PHP_EOL;
    $sum += $i;
}

print "合計値は{$sum}です!";
?>
