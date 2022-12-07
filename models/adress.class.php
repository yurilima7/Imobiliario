<?php
  class Adress {
    public $id;
    public $state;
    public $city;
    public $district;
    public $street;
    public $number;

    public function __construct(
        $id,
        $state,
        $city,
        $district,
        $street,
        $number
       ){  
        $this->id = $id;
        $this->state = $state;
        $this->city = $city;
        $this->district = $district;
        $this->street = $street;
        $this->number = $number;
       }
  }

  
  
?>