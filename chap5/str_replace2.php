<?php

// 置き換える文字列
$str = ['PHPは良い言語です。','PHPは良いサーバ実行環境です！'];
// 置き換え後の文字列
$src = ['PHP','良い'];
// 対象の文字列
$rep = ['PHP7','素晴らしい'];

print_r(str_replace($src, $rep, $str, $cnt));
print "{$cnt}個の置き換えを実行しました。";
?>
