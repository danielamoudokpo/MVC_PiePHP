<?php
namespace Model;

class FoodModel extends \Core\Entity{

    public function affiche(){
        echo "food";
        echo "<br>";
        var_dump($this);
        // var_dump($this->table);
    }
}