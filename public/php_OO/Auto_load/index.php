<?php 

require 'autoloader.php';

use \matematica\Basica;//USE


$m = new Basica(); //Com o Use
echo $m->somar(12, 8);

$upload = new \foto\Upload();// Sem o Use
