<?php
  class House{
    private $id;
    private $value;
    private $desc;
    private $image;
    private $status;
    private $adress;
    private $locator;
    private $renter;

  // function get(){
  //   return $this->var;
  // }
  // function set($var)
  // {return $this->var = $var;}

  function getId(){
    return $this->id;
  }
  function setId($id)
  {return $this->id = $id;}

  function getValue(){
    return $this->value;
  }
  function setValue($value)
  {return $this->value = $value;}

  function getDesc(){
    return $this->desc;
  }
  function setDesc($desc)
  {return $this->desc = $desc;}

  function getImage(){
    return $this->image;
  }
  function setImage($image)
  {return $this->image = $image;}

  function getStatus(){
    return $this->status;
  }
  function setStatus($status)
  {return $this->status = $status;}

  function getLocator(){
    return $this->locator;
  }
  function setLocator($locator)
  {return $this->locator = $locator;}

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
    //     $value,
    //     $desc,
    //     $image,
    //     $status,
    //     $adress,
    //     $locator,
    //     $renter
    //    )
    //  {
    //    $this->id = $id;
    //    $this->value = $value;
    //    $this->desc = $desc;
    //    $this->image = $image;
    //    $this->status = $status;
    //    $this->adress = $adress;
    //    $this->locator = $locator;
    //    $this->renter = $renter;
    //  }
    
  }
  
?>