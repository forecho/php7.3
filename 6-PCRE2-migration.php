<?php

# 正则匹配换成 PCRE2 了，7.3之前是 PCRE1 (8.x)，并且已经被废弃

## 下面代码在 PHP 7.3 上错误，7.2之前正常
// var_dump(preg_match('/[\w-.]+/', ''));
// Warning: preg_match(): Compilation failed: invalid range in character class at offset 3s


## 最大的改变就是 PCRE2 严格要求将连字符移动到最后，或者对其进行转义。下面代码正常
var_dump(preg_match('/[\w\-.]+/', ''));

# PCRE2 语法 http://pcre.org/current/doc/html/pcre2syntax.html
# PCRE 语法 http://pcre.org/original/doc/html/pcresyntax.html