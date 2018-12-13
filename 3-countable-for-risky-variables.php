<?php

# 新增 is_countable 函数，在需要 count 变量的时候有用，PS：[Countable 接口](http://php.net/manual/zh/class.countable.php)

// $items = null;
$items = [];

echo sprintf('There is %d items' . PHP_EOL, count($items));
// 这种情况会报错 Warning: count(): Parameter must be an array or an object that implements Countable

if (version_compare(PHP_VERSION, '7.3.0') >= 0) {
    // php 7.3 之后
    if (is_countable($items)) {
        echo sprintf('There is %d items' . PHP_EOL, count($items));
    }
} else {
    if (is_array($items) || $items instanceof \Countable) {
        echo sprintf('There is %d items' . PHP_EOL, count($items));   
    }
}