<?php

//bool usort ( array &$array , callable $value_compare_func )

$keys = ['banana', 'apple', 'orange'];
$data = ['apple','banana','orange'];

usort($data, function ($a, $b) use ($keys) {
    return array_search($a, $keys) <=> array_search($b, $keys);
});

print_r($data);
?>
