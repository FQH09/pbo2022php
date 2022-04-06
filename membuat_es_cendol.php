<?php


require 'vendor\autoload.php';

use App\Models\EsCendol;

$escendolku = new EsCendol();
$escendolku->setRasa("Manis");
echo $escendolku->getRasa()."\n";
echo $escendolku->minum()."\n";
$escendolku->setHarga("Rp 15.000");
echo "Harga es cendol = ". $escendolku->getHarga()."\n";
echo $escendolku->jual();