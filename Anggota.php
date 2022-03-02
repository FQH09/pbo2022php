<?php

class Anggota{
    const PRIA = 1;
    const WANITA = 0;

    private $no_anggota;
    private $nama_lengkap;
    private $no_hp;

    public function __construct($nama_lengkap_baru, $no_hp_baru){
        $this->nama_lengkap = $nama_lengkap_baru;
        $this->no_hp = $no_hp_baru;
    }

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

$Anggota_terbaru = new Anggota("Muhammad Faqih", +6289765498234);
$Anggota_terbaru->setNo_anggota(1122334455);
$Bergabung_Anggota_terbaru = $Anggota_terbaru->bergabung();
echo "No. anggota yang bergabung = ". $Anggota_terbaru->getNo_anggota()."\n";
echo "Nama lengkap anggota baru = ". $Anggota_terbaru->getNama_lengkap()."\n";
echo "Konstanta anggota = ". $Anggota_terbaru::PRIA."\n";
echo "No. Hp anggota yang bergabung = ". $Anggota_terbaru->getNo_hp()."\n";
echo "Tahun anggota baru bergabung = ". $Bergabung_Anggota_terbaru;
