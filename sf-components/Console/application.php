<?php
require __DIR__.'/vendor/autoload.php';
use Symfony\Component\Console\Application;
use Learn\Symfony\Console\HelloCommand;

$application = new Application();
$application->add(new HelloCommand());
$application->run();
