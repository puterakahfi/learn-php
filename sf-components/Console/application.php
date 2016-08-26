<?php

require __DIR__.'/vendor/autoload.php';
use Symfony\Component\Console\Application;
use Learn\Symfony\Console\CreateUserCommand;

$application = new Application();
$application->add(new CreateUserCommand());
$application->run();
