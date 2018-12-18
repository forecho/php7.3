<?php

# 新增 array_key_first 和 array_key_last 函数

$items = [
    1 => 'a',
    2 => 'b',
];

echo '新增 array_key_first 用法：' . PHP_EOL;

if (version_compare(PHP_VERSION, '7.3.0') >= 0) {
    // php 7.3 之后
    $firstKey = array_key_first($items);
} else {
    // php 7.3 之前
    reset($items);
    $firstKey = key($items);
}

var_dump($firstKey); // 1


//////////////////////////////////////////////////////////////////////////////////

echo '新增 array_key_last 用法：' . PHP_EOL;

 $items = [
     1 => 'a',
     2 => 'b',
 ];

if (version_compare(PHP_VERSION, '7.3.0') >= 0) {
    // php 7.3 之后
    $lastKey = array_key_last($items);
} else {
    // php 7.3 之前
    end($items);
    $lastKey = key($items);
}

var_dump($lastKey); // 2