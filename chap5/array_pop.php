<?php


$data = ['鈴木','松井','高橋'];
# 末尾に追加
array_push($data, '筒香', '村上');
echo PHP_EOL;
print_r($data);

# 末尾の値を抜く・この場合は村上がぬける。
array_pop($data);
echo PHP_EOL;
print_r($data);

//先頭から値を抜く。 '鈴木が抜かれている。'
print array_shift($data);
echo PHP_EOL;
print_r($data);

//先頭から値を抜く。
print array_unshift($data, 'tsutsugo', 'murakami');
echo PHP_EOL;
print_r($data);
