<?php

require 'vendor\autoload.php';
use App\Models\Anggota;

$Anggota_terbaru = new Anggota("Muhammad Faqih", +6289765498234);
$Anggota_terbaru->setNoAnggota(1122334455);
$Bergabung_Anggota_terbaru = $Anggota_terbaru->bergabung();
echo "No. anggota yang bergabung = ". $Anggota_terbaru->getNoAnggota()."\n";
echo "Nama lengkap anggota baru = ". $Anggota_terbaru->getNamaAnggota()."\n";
echo "Konstanta anggota = ". $Anggota_terbaru::PRIA."\n";
echo "No. Hp anggota yang bergabung = ". $Anggota_terbaru->getNoHp()."\n";
echo "Tahun anggota baru bergabung = ". $Bergabung_Anggota_terbaru;