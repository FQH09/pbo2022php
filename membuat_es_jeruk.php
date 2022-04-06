<?php

require 'vendor\autoload.php';

use App\Models\EsJeruk;

$esjerukku = new EsJeruk();
$esjerukku->setRasa("Yang pernah ada");
echo $esjerukku->getRasa()."\n";
echo $esjerukku->minum();
