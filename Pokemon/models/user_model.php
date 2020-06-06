<?php

class User{

    public $name;
    public $id;
    public $email;
    public $password;

    function __construct($id,$name,$email,$password){

        $this-> name = $name;
        $this-> id = $id;
        $this-> email = $email;
        $this-> password = $password;


    }
}
?>