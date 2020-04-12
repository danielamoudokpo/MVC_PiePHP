<?php
namespace Model;

class ArticleModel extends \Core\Entity{

    public function affiche(){
    echo "article";
    echo "<br>";
    var_dump($this);
    // var_dump($this->table);
}

}