<?php

namespace Learn\Tests;

use Learn\HelloCommand;
use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Component\Console\Application;

class HelloCommandTest extends \PHPUnit_Framework_TestCase
{

	public function testExecute()
	{
		$application = new Application('hello');
		$application->add(new HelloCommand());
		$command = $application->find("learn:hello");
		$commandTester = new CommandTester($command);
		$commandTester->execute(array(
			'command'=>$command->getName(),
			'name'=>'putera kahfi'
		));

		$output = $commandTester->getDisplay();
		$this->assertContains("Hello putera kahfi", $output);

	}
}


