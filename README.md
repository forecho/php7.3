## 安装

```
$ docker run -it --rm -v `pwd`:/data --name php73 php7.3 bash
```

> `--rm` 命令选项，等价于在容器退出后，执行 `docker rm -v`

## 目录


- [函数调用中允许尾随逗号](1-comma-after-the-last-argument.php)
- [新增 array_key_first 和 array_key_last 函数](2-first-and-last-array-key.php)
- [新增 is_countable 函数](3-countable-for-risky-variables.php)
- [更安全的JSON解析](4-safer-json-parsing.php)
- [更加方便的 Heredoc 和 Nowdoc 语法](5-heredoc-and-nowdoc-syntaxes.php)
- [正则匹配换成 PCRE2](6-PCRE2-migration.php)
- [list() 引用赋值](7-list-reference-assignment.php)

## 使用


```
cd /data
php 1-comma-after-the-last-argument.php
```

## 参考连接

- [PHP 7.3 is On Track](https://www.phparch.com/2018/09/php-7-3-is-on-track)
- [PHP 7.3 is On Track](https://kinsta.com/blog/php-7-3/)
- [What's New in PHP 7.3 in 30 Seconds in Diffs](https://www.tomasvotruba.cz/blog/2018/08/16/whats-new-in-php-73-in-30-seconds-in-diffs/)
- [What’s New in PHP 7.3: A Look at Final Release](https://www.cloudways.com/blog/whats-new-in-php-7-3/)
- [What's new and changing in PHP 7.3](https://ayesh.me/Upgrade-PHP-7.3)
- [Migrating from PHP 7.2.x to PHP 7.3.x](http://php.net/manual/zh/migration73.php)