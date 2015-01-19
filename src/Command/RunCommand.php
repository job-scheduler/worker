<?php

namespace JobScheduler\Worker\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use JobScheduler\Utils;

class RunCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('worker:run')
            ->setDescription('Run the worker, start processing commands from the queueu')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $running = true;
        while ($running) {
            $output->writeln(
                '<info>Ping server:</info>'
            );
            sleep(5);
        }
    }
}
