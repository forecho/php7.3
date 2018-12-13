## 安装

```
$ docker run -it --rm -v `pwd`:/data --name php73 php7.3 bash
```

> `--rm` 命令选项，等价于在容器退出后，执行 `docker rm -v`

## 使用


```
sudo docker run -it php7.3 php /tmp/phpinfo.php
```