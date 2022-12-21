<?php
  class Adress {
    public $id;
    public $state;
    public $city;
    public $district;
    public $street;
    public $number;

    function getId(){
    return $this->id;
  }
  function setId($id)
  {return $this->id = $id;}

  function getState(){
    return $this->state;
  }
  function setState($state)
  {return $this->state = $state;}

  function getCity(){
    return $this->city;
  }
  function setCity($city)
  {return $this->city = $city;}

  function getDistrict(){
    return $this->district;
  }
  function setDistrict($district)
  {return $this->district = $district;}

  function getStreet(){
    return $this->street;
  }
  function setStreet($street)
  {return $this->street = $street;}


  function getNumber(){
    return $this->number;
  }
  function setNumber($number)
  {return $this->number = $number;}


  

    // public function __construct(
    //     $id,
    //     $state,
    //     $city,
    //     $district,
    //     $street,
    //     $number
    //    ){  
    //     $this->id = $id;
    //     $this->state = $state;
    //     $this->city = $city;
    //     $this->district = $district;
    //     $this->street = $street;
    //     $this->number = $number;
    //    }
  }

  
  
?>