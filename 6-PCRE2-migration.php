<?php

# 正则匹配换成 PCRE2 了，7.3之前是  PCRE (8.x)

## 下面代码在 PHP 7.3 上错误，7.2之前正常
// var_dump(preg_match('/[\w-.]+/', ''));
// Warning: preg_match(): Compilation failed: invalid range in character class at offset 3s


## PCRE2 严格要求将连字符移动到最后，或者对其进行转义。下面代码正常
var_dump(preg_match('/[\w\-.]+/', ''));