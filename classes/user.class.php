<?php
  class User{
    private $idUser;
    private $email;
    private $password;
    private $name;
    private $cpf;
    private $cnpj;
    private $isLocator;
    private $phone;

    function getIdUser() {
      return $this->idUser;
    }

    function setIdUser($idUser) {
      return $this->idUser = $idUser;
    }

    function getEmail() {
      return $this->email;
    }

    function setEmail($email) {
      return $this->email = $email;
    }

    function getPassword() {
      return $this->password;
    }

    function setPassword($password) {
      return $this->password = $password;
    }

    function getName() {
      return $this->name;
    }

    function setName($name) {
      return $this->name = $name;
    }

    function getCPF() {
      return $this->cpf;
    }

    function setCPF($cpf) {
      return $this->cpf = $cpf;
    }

    function getLocator() {
      return $this->isLocator;
    }

    function setIsLocator($isLocator) {
      return $this->isLocator = $isLocator;
    }

    function getCNPJ() {
      return $this->cnpj;
    }

    function setCNPJ($cnpj) {
      return $this->cnpj = $cnpj;
    }

    function getPhone() {
      return $this->phone;
    }

    function setPhone($phone) {
      return $this->phone = $phone;
    }
  }
?>