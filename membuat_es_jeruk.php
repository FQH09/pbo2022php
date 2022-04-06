<?php

require 'vendor\autoload.php';

use App\Models\EsJeruk;

$esjerukku = new EsJeruk();
$esjerukku->setRasa("Yang pernah ada");
echo $esjerukku->getRasa()."\n";
echo $esjerukku->minum()."\n";
$esjerukku->setHarga("Rp 10.000");
echo "Harga es jeruk = ". $esjerukku->getHarga()."\n";
echo $esjerukku->jual();
