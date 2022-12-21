<?php

  class Renter extends User{
    var $id_renter;
    var $fk_user;
    var $fk_house;

    function __construct(
        $id_renter,
        $id_user,
        $email,
        $cpf,
        $password,
        $name,
        $isLocator
        )
    {
        $this->id_renter = $id_renter;
        $this->fk_user = $id_user;

    }
  }
?>