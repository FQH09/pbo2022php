<?php
namespace App\Models;

use Core\Minuman;
use Core\Produk;

class EsJeruk implements Minuman,Produk{
    private $rasa;
    private $harga;

    public function setHarga($harga){
        $this->harga =$harga;
    }

    public function getHarga(){
        return $this->harga;
    }

    public function jual(){
        echo "produk sudah terjual";
    }

    public function setRasa($rasa){
        $this->rasa = $rasa;
    }

    public function getRasa()
    {
        return $this->rasa;
    }
    
    public function minum(){
        echo "hmm segar-segar asem";
    }
}