## 安装

```
$ docker run -it --rm -v `pwd`:/data --name php73 php7.3 bash
```

> `--rm` 命令选项，等价于在容器退出后，执行 `docker rm -v`

## 使用


```
sudo docker run -it php7.3 php /tmp/phpinfo.php
```

## 参考连接

- <https://www.simcf.cc/3296.html/>
- <https://www.cloudways.com/blog/whats-new-in-php-7-3/>
- <https://www.phparch.com/2018/09/php-7-3-is-on-track/>
- <https://www.tomasvotruba.cz/blog/2018/08/16/whats-new-in-php-73-in-30-seconds-in-diffs/>
- <https://ayesh.me/Upgrade-PHP-7.3>