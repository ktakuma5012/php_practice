<?php

$drink = 'ブランデ';

switch ($drink){
    case 'ビール':
    case 'ワイン':
    case '日本酒':
        print '醸造酒です';
        break;
    case 'ブランデ':
    case 'ウィスキー':
        print '蒸留酒です';
        break;
} 
?>
