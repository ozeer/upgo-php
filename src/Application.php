#!/usr/bin/env php
<?php

require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application();

// 设置应用名称
$application->setName('UpGo is a CLI tool to update or upgrade Golang.');
// 设置应用版本
$application->setVersion('1.0.0');

// 添加命令文件
$application->add(new App\Commands\TestCommand());
$application->add(new App\Commands\InputCommand());

$application->run();
