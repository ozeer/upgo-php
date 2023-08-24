<?php

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class InputCommand extends Command
{
    protected static $defaultName = 'app:input';

    public function configure()
    {
        $this->setDescription('测试输入参数和选项');
        $this->setHelp('测试输入参数和选项');
        // 配置参数 name，为必选
        $this->addArgument('name', InputArgument::REQUIRED, '名字');
        // 配置参数 age，为可选且默认值为 18
        $this->addArgument('age', InputArgument::OPTIONAL, '年龄', 18);
        // 配置选项 isHan，缩写为 -x，可选，不需要值
        $this->addOption('isHan', 'x', InputOption::VALUE_NONE, '是否汉族');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        // 获取 name 参数
        $name = $input->getArgument('name');
        // 获取 age 参数，如果没填则为默认值
        $age = $input->getArgument('age');
        // 获取 isHan 选项，对于 InputOption::VALUE_NONE 类型的选项得到的是 bool 值
        $han = $input->getOption('isHan');
        $output->writeln('姓名：' . $name);
        $output->writeln('年龄：' . $age);
        $output->writeln('是否汉族：' . ($han ? '是' : '否'));

        // 默认背景，绿色文本
        $output->writeln('<info>foo</info>');
        // 默认背景，黄色文本
        $output->writeln('<comment>foo</comment>');
        // 青色背景，黑色文本
        $output->writeln('<question>foo</question>');
        // 红色背景，白色文本
        $output->writeln('<error>foo</error>');
        // 绿色文本
        $output->writeln('<fg=green>foo</>');
        // 青色背景，黑色文本
        $output->writeln('<fg=black;bg=cyan>foo</>');
        // 加粗字体，黄色文本
        $output->writeln('<bg=yellow;options=bold>foo</>');
        // 加粗字体，下划线
        $output->writeln('<options=bold,underscore>foo</>');
        $output->writeln('<href=https://symfony.com>Symfony Homepage</>');
        
        return 0;
    }
}
