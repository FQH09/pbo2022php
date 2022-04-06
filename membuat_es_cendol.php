<?php


require 'vendor\autoload.php';

use App\Models\EsCendol;

$escendolku = new EsCendol();
$escendolku->setRasa("Manis");
echo $escendolku->getRasa()."\n";
echo $escendolku->minum();