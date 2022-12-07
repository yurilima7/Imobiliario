<?php
  class House{
    public $id;
    public $value;
    public $desc;
    public $image;
    public $status;
    public $Adress;
    public $Locator;
    public $Renter;

    public function __construct(
        $id,
        $value,
        $desc,
        $image,
        $status,
        $Adress,
        $Locator,
        $Renter = null
       )
     {
       $this->id = $id;
       $this->value = $value;
       $this->desc = $desc;
       $this->image = $image;
       $this->status = $status;
       $this->Adress = $Adress;
       $this->Locator = $Locator;
       $this->Renter = $Renter;
     }
    /// retorna todas as casas do banco de dados onde não estão alugadas
    public function getAllHouses($house){
     $sql = "SELECT * FROM tblHouse 
            INNER JOIN tblAdress ON
            tblAdress.id = tblHouse.fk_adress
            INNER JOIN tblLocator ON
            tblLocator.id = tblHouse.fk_locator
            WHERE tblHouse.fk_renter IS NULL";
     $result = $house->query($sql);
     foreach ($result as $row) {
        if ($row['fk_renter'] != null) {
            $houses[] = new House(
                                $row['tblHouse.id'],
                                $row['tblHouse.value'],
                                $row['tblHouse.desc'],
                                $row['tblHouse.image'],
                                $row['tblHouse.status'],
                                new Adress(
                                 $row['tblAdress.id'],
                                 $row['tblAdress.state'],
                                 $row['tblAdress.city'],
                                 $row['tblAdress.district'],
                                 $row['tblAdress.street'],
                                 $row['tblAdress.number'],
                                ),
                                $row['fk_locator'],
                                $row['fk_renter'],
                            );
        }
     }
     return $houses;
    }

    /// retorna todas as casas do banco de dados
    public function getAllHousesLocator($house, $fk_locator){
        $sql = "SELECT * FROM tblHouse WHERE fk_locator = $fk_locator";
        $result = $house->query($sql);
        foreach ($result as $row) {
           if ($row['fk_renter'] != 0) {
               $houses[] = new House(
                                   $row['id'],
                                   $row['value'],
                                   $row['desc'],
                                   $row['image'],
                                   $row['status'],
                                   $row['fk_adress'],
                                   $row['fk_locator'],
                                   $row['fk_renter'],
                               );
           }
        }
        return $houses;
    }


    public function get($house, $id){
       $sql = "SELECT * FROM  tblHouse WHERE id =$id";
       $result = $house->query($sql);
       $row = $result->fetch();
       return new House(
                                $row['id'],
                                $row['value'],
                                $row['desc'],
                                $row['image'],
                                $row['status'],
                                $row['fk_adress'],
                                $row['fk_locator'],
                                $row['fk_renter'],
       );
    }

    public static function create(
        $house,
        $value,
        $desc,
        $image,
        $status = 'livre',
        $fk_adress,
        $fk_locator
        ){
       $sql = "INSERT INTO  tblHouse (value, desc, image, status, fk_adress, fk_locator) 
                    VALUES ('$value', '$desc', '$image','$status','$fk_adress','$fk_locator')";
        $house->query($sql);
    }

    public static function update(
        $house, 
        $id,
        $value,
        $desc,
        $image,
        $status,
        $fk_adress,
        $fk_renter
    ){
        $sql = "UPDATE tblHouse 
              SET value = $value, desc = $desc, image = $image, status = $status, fk_renter  = $fk_renter 
              WHERE id = $id";
        $house->query($sql);
    }

    public static function delete($house, $id){
        $sql = "DELETE FROM tbllHouse WHERE id = $id";
        $house->query($sql);
    }
  }
  
?>