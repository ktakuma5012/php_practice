<?php

$sum = 0;
for($i = 1; $i <= 100; $i++){
    $sum += $i;
    print $sum;
    if ($sum > 1000){ break; }
}

print  "合計は1000を超えるときは1~${i}を加算したときです"
?>
