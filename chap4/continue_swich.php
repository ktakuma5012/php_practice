<?php

for($i = 1; $i < 4; $i++){
    $result = 0;
    switch ($i){
        case 1:
        case 3;
            $result = $i * $i;
        case 2:
            //  switch文内ではbreakとして働く
            continue;
    }
    print "{$i}の二乗は{$result}です!";
    echo PHP_EOL;
}
?>
