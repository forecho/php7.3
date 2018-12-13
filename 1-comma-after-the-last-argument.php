<?php

# 在函数调用中允许尾随逗号，在频繁附加新值的上下文中派上用场，因为它们可以防止由于缺少逗号而导致的错误

print_r($array = [1, 2,]);

function someFunction($arg, $arg2) {
    return $arg . $arg2;
}

if (version_compare(PHP_VERSION, '7.3.0') >= 0) {
    // php 7.3 之后
    someFunction('a', 'b', );
    unset($a, $b, $c,);
} else {
    // php 7.3 之前
    someFunction('a', 'b');
    unset($a, $b, $c,);
}
