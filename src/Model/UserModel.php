<?php
// namespace Model;


class UserModel extends Core\Entity
{
    
    // public $email;
    // public $password;


    public function read(){

        $rqt = "SELECT email from users ";
        $send = $this->db->prepare($rqt);
        $send->execute();
        $row = $send->fetchAll(PDO::FETCH_ASSOC);
            foreach ($row as $value) {
                 print_r ($value).'<br />';
            }
        // select email from users where id = 1;
    }

    public function update(){

    }

    public function delete(){

    }

}








