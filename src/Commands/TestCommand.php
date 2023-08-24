<?php

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

// 一个 Symfony Console 的命令需要继承 Symfony\Component\Console\Command\Command 这个类
class TestCommand extends Command
{
    protected static $defaultName = 'app:test'; // 命令的名称

    // 命令执行前调用的方法，用于设置命令的帮助信息和命令需要的参数和选项
    public function configure()
    {
        // 设置命令简介，输出命令列表时显示
        $this->setDescription('测试命令');
        // 设置命令帮助描述，使用 help <命令名称> 时会输出 
        $this->setHelp('这是一个无关紧要的测试命令，只会输出一条测试字符串');
    }

    // 命令执行时调用该方法，并且会传入一个输入对象和输出对象。
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('测试');

        return 0;
    }
}
