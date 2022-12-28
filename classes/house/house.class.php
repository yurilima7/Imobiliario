<?php
  class House{
    public $id;
    public $value;
    public $desc;
    public $image;
    public $status;
    public $adress;
    public $locator;
    public $renter;

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

  function getAdrees(){
    return $this->adress;
  }
  function setAdress($adress)
  {return $this->adress = $adress;}

  function getLocator(){
    return $this->locator;
  }
  function setLocator($locator)
  {return $this->locator = $locator;}

  function getRenter(){
    return $this->renter;
  }
  function set($renter)
  {return $this->renter = $renter;}


    

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