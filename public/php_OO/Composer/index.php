<?php 

require 'vendor/autoload.php';

use \classes\matematica\Basica;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('path/to/your.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

$m = new Basica();
echo $m->somar(10,21);