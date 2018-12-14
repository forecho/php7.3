<?php

# list() 对于从变量数组中快速分配变量非常有用。


 // 在PHP 7.3之前，不可能通过引用分配变量
//  $arr = ['apple', 'orange'];
//  list($a, &$b) = $arr;
//  $b = 'banana';
//  echo $a . PHP_EOL;
//  echo $arr[1] . PHP_EOL;
 // Fatal error: [] and list() assignments cannot be by reference in .. on line ..




if (version_compare(PHP_VERSION, '7.3.0') >= 0) {
    // 7.3 支持
    $array = ['a1', 'b1'];
    [$a, $b, $c] = $array;

    echo $a . PHP_EOL;
    echo $c . PHP_EOL;

    // 7.3 list 支持引用传值
    $arr = ['apple', 'orange'];
    list($a, &$b) = $arr;
    echo $a . PHP_EOL;
    echo $b . PHP_EOL;

    // 这种情况都会出错，使用引用右边必须是变量
    list($a, &$b) = [12, 14];
    // Fatal error: Cannot assign reference to non referencable value in .. on line ..
}


// php 7 都支持
$array = ['a1', 'b1'];
[$a, $b] = $array;

echo $a . PHP_EOL;