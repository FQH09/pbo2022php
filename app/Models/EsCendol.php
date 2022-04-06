<?php 
namespace App\Models;

use Core\Minuman;

class EsCendol implements Minuman{
    private $rasa;

    public function setRasa($rasa){
        $this->rasa = $rasa;
    }

    public function getRasa()
    {
        return $this->rasa;
    }

    public function minum(){
        echo "Segar dan manis rasanya, seperti kamu";
    }
}