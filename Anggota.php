<?php

class Anggota{
    public $no_anggota;
    public $nama_lengkap;
    public $no_hp;

    public function bergabung(){
        $tahun_bergabung = date('Y');
        return $tahun_bergabung;
    }

    public function setNo_anggota($no_anggota_baru)
    {
        $this->no_anggota = $no_anggota_baru;
    }
    public function getNo_anggota()
    {
        return $this->no_anggota;
    }
    public function setNama_lengkap($nama_lengkap_baru)
    {
        $this->nama_lengkap = $nama_lengkap_baru;
    }
    public function getNama_lengkap()
    {
        return $this->nama_lengkap;
    }
    public function setNo_hp($no_hp_baru)
    {
        $this->no_hp = $no_hp_baru;
    }
    public function getNo_hp()
    {
        return $this->no_hp;
    }
  
}

$Anggota_terbaru = new Anggota();
$Anggota_terbaru->setNo_anggota(1122334455);
$Anggota_terbaru->setNama_lengkap("Muhammad Faqih");
$Anggota_terbaru->setNo_hp(+6289765498234);
$Bergabung_Anggota_terbaru = $Anggota_terbaru->bergabung();
echo "No. Anggota yang bergabung = ". $Anggota_terbaru->getNo_anggota();
echo "Nama lengkap anggota baru = ". $Anggota_terbaru->getNama_lengkap();
echo "No. Hp anggota yang bergabung = ". $Anggota_terbaru->getNo_hp();
echo "Tahun anggota tersebut bergabung = ". $Bergabung_Anggota_terbaru;
