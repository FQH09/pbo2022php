<?php
namespace App\Models;

use Core\Minuman;

class EsJeruk implements Minuman{

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