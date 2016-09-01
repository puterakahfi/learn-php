<?php

namespace Learn\Symfony\Console;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommand extends Command
{
	protected function configure()
	{
		$this->setName('learn:hello')
			->setDescription('Say hello to console')
			->setHelp('This command it allow you to display hello ');

		$this->addArgument("name", InputArgument::REQUIRED, 'Your name:');
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$output->writeln([
			"Display hello world from console",
			"=============================="
			]);

		$output->write("Hello ");
		$output->write($input->getArgument("name"));
	}

}
