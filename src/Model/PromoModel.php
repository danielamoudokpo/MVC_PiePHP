<?php
namespace Model;

class PromoModel extends \Core\Entity{
    

    public function affiche(){
        echo "promo";
        echo "<br>";
        var_dump($this);
        // var_dump($this->table);
    }
   
    
}