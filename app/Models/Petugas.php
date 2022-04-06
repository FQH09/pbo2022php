<?php
namespace App\Models;

use App\Models\User;

class Petugas extends User{
    public $nip;
    public $nama_lengkap;
    public $alamat;

    public function __construct(){
       $this->nip = 232435234324;
       $this->nama_lengkap = "Muhammad Faqih";
       $this->alamat = "Jl. H Paris 2";
       $this->_array = array('NIP'=>$this->nip, 'Nama Lengkap'=>$this->nama_lengkap, 'Alamat'=>$this->alamat);
    }

    public function lihatProfil(){
        echo $this->_array['NIP']. "<br>";
        echo $this->_array['Nama Lengkap']. "<br>";
        echo $this->_array['Alamat']. "<br>";
        var_dump($this->_array);
    }

    public function register(){
        echo "Petugas tidak perlu register";
    }
}
