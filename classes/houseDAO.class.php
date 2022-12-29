<?php
   require_once ('house.class.php'); 
   require_once ('IDatabase.php');
   require_once('connection.class.php');
  class HouseDAO extends House implements IDatabase{
  	/**
	 * @return mixed
	 */
	public function insert() {

        try {
            $dbh = new PDO('mysql:host=localhost;dbname=e_rent', 'root', '');
            $valor = $this->getValue();
            $desc = $this->getDesc();
            $state = $this->getState();
            $city = $this->getCity();
            $district = $this->getDistrict();
            $street = $this->getStreet();
            $number = $this->getNumber();
            $idLocador = $this->getLocator();

            $sql = "INSERT INTO tblimovel (valor, descricao, status, fk_locador) 
                               VALUES ('$valor', '$desc', 'aberto', '$idLocador')";
            $dbh->query($sql);
            $idImovel = $dbh->lastInsertId();
            
            $sqlII = "INSERT INTO tblendereco (fk_imovel, estado, cidade, bairro, rua, numero) 
                         VALUES ('$idImovel', '$state', '$city', '$district', '$street', '$number')";
            $dbh->query($sqlII);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
	}

	/**
	 * @return mixed
	 */
	public function list($id) {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=e_rent', 'root', '');

            return $dbh->query("SELECT * from tblendereco join tblimovel on tblendereco.fk_imovel = tblimovel.idImovel
                                join tbllocador on tblimovel.fk_locador = tbllocador.idLocador where tbllocador.idLocador = $id");
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
	}

    public function listAll(){
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=e_rent', 'root', '');

            return $dbh->query("SELECT * from tblendereco join tblimovel on tblendereco.fk_imovel = tblimovel.idImovel WHERE tblimovel.status = 'aberto'");
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        } 
    }

    public function searchImovel($id) {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=e_rent', 'root', '');

            return $dbh->query("SELECT * from tblendereco join tblimovel on tblendereco.fk_imovel = tblimovel.idImovel WHERE tblimovel.idImovel = $id");
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
	}
	
	/**
	 * @return mixed
	 */
	public function search($id) {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=e_rent', 'root', '');

            return $dbh->query("SELECT * from tblendereco join tblimovel on tblendereco.fk_imovel = tblimovel.idImovel WHERE tblimovel.idImovel = $id")->fetch();
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
	}
	
	/**
	 *
	 * @param mixed $id
	 * @return mixed
	 */
	public function update() {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=e_rent', 'root', '');
            $valor = $this->getValue();
            $desc = $this->getDesc();
            $state = $this->getState();
            $city = $this->getCity();
            $district = $this->getDistrict();
            $street = $this->getStreet();
            $number = $this->getNumber();
            $idLocador = $this->getLocator();
            $idImovel = $this->getId();
            $idAdress = $this->getAdress();

            $sql = "UPDATE tblimovel SET valor='$valor', descricao='$desc', status='aberto', fk_locador='$idLocador'
                        WHERE idImovel = $idImovel";
            $dbh->query($sql);
            
            $sqlII = "UPDATE tblendereco SET fk_imovel='$idImovel', estado='$state', cidade='$city', bairro='$district', rua='$street', numero='$number'
                         WHERE idEndereco = $idAdress";
            $dbh->query($sqlII);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
	}
	
	/**
	 *
	 * @param mixed $idImovel $idEndereco
	 * @return mixed
	 */
	public function remove($idImovel, $idEndereco) {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=e_rent', 'root', '');

            $sql = "DELETE FROM tblimovel WHERE idImovel = $idImovel";
            $dbh->query($sql);

            $sqlII = "DELETE FROM tblendereco WHERE idEndereco = $idEndereco";
            $dbh->query($sqlII);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
	}
}
