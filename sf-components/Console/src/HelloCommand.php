<?php

namespace Learn;


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
		$this->addArgument("last", InputArgument::OPTIONAL, ' Last Name:');

	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$output->writeln([
			"<info>Display your name from console</info>",
			"<comment>==============================</comment>"
		]);

		$last = $input->getArgument("last");
		$text = $input->getArgument("name");
		if($last){
			$text .= ' '.$input->getArgument("last");
		}

		$output->write("Hello ");
		$output->write($text);
	}

}
