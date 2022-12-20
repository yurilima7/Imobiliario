<?php
  abstract class User{
    var $id_user;
    var $email;
    var $password;
    var $name;
    var $cpf;
    var $isLocator;

    function __construct($id_user, $email, $password, $name, $cpf, $isLocator)
    {   $this->id_user = $id_user;
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->cpf = $cpf;
        $this->isLocator = $isLocator;
    }
  }
?>