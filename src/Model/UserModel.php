<?php
// namespace Model;


class UserModel extends Core\Entity
{
    
    // public $email;
    // public $password;


    public function email_exit_check($email){

        $sql = 'SELECT id from users WHERE email = :email';
        $req = $con->prepare($sql);
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

   

}








