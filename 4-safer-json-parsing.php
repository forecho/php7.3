<?php

# 更安全的JSON解析


# 目前而言 json_decode() 如果失败，会 return null；而 json_encode() 如果失败，会 return false。如果要了解具体是什么失败，则要调用 json_last_error() 或 json_last_error_msg()

$json = "{";
var_dump(json_decode($json));
// null
var_dump(json_last_error_msg());

$data = "\xB1\x31";
var_dump(json_encode($data)); // 无效的 UTF8 序列
// false

var_dump(json_last_error_msg());

echo "php 7.3\n";
if (version_compare(PHP_VERSION, '7.3.0') >= 0) {
    // php 7.3 之后
    // var_dump(json_encode($data, JSON_THROW_ON_ERROR));
    // var_dump(json_decode($json, null, null, JSON_THROW_ON_ERROR));

    try {
        return json_decode($json, null, null, JSON_THROW_ON_ERROR);
    } catch (\JsonException $exception) {
        // echo $exception->code;
    }
}