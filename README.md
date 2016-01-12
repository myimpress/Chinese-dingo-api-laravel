# Chinese-dingo-api
这是一个中文的api,基于dingo/api
所有的配置已经配置好,本demo只是让一些小白很好理解dingo-api怎么入门,进阶的demo日后送上
##安装
  ```shell
composer update 
```

#复制.env.example并改名为.env 在.env配置对应本机的内容
```shell
.env.example => .env
```
#运行命令生成表
  ```shell
php artisan migrate 
```
#运行命令迁移数据
  ```shell
php artisan db:seed 
```

>在浏览器输入 
```shell
域名/api/user
```
默认VERSION = v1 默认读取version = v1 的api , 浏览器不能直接读取version = v2 的api

>读取version = v2 的api,两个选择

>>1.把.env API_VERSION = v1 改为v2


>>2.用postman 在 headers 添加 左边Accept,右边application/vnd.api.v2+json

此配置完全适合小白,如是大神请绕过.


## License

MIT
