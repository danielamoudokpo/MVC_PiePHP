<?php
namespace Model; 

class UserModel extends \Core\Entity
{
    public $relations = [
        'has_one' => ['table' => 'promo','key'=>'promo_id'],
        'has_many' => ['table'=>'article','key'=>'user_id'],
        'many_to_many' => ['table1' => 'user','table2' => 'food']
    ];


    public function email_exit_check($email){

        $sql = 'SELECT id from users WHERE email = :email';
        $req = $this->db->prepare($sql);
        $req->bindParam(':email',$email);
        $req->execute();
    
        $nbrRows = $req->rowCount();
        if($nbrRows > 0){
            echo"<br/> email is already used !";
            exit();
        }else {
            echo 'success';
            exit();
        }
    }

    // public function read(){
    //     echo ";o";
    // }

}








