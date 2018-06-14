# 肥宅快乐水 - 模板

[![Coverage Status](https://coveralls.io/repos/github/zhangxiangliang/cola-composer-package-template/badge.svg)](https://coveralls.io/github/zhangxiangliang/cola-composer-package-template)
[![Build Status](https://travis-ci.org/zhangxiangliang/cola-composer-package-template.svg?branch=master)](https://travis-ci.org/zhangxiangliang/cola-composer-package-template)

这是 `肥宅快乐水` 项目的 composer 包模板文件, 用于 `小二` 自己创建项目包所使用。

## 说明
```
├── LICENSE           => 项目声明文件
├── README.md         => 项目介绍文件
├── composer.json     => Composer 配置文件，包括了测试相关的依赖 例如 phpunit
├── composer.lock     => Composer 版本锁
├── phpunit.xml.dist  => phpunit 配置文件
├── src               => 代码目录
├── .coveralls.yml    => coveralls 配置文件
├── .travis.yml       => travis 配置文件
├── .gitignore        => 配置了基本的 版本忽略文件
└── test              => 测试用例目录
    └── bootstrap.php => 测试启动加载文件
```
