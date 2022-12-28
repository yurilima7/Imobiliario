<?php
   require_once ('adress.class.php');
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

            $sql = "INSERT INTO tblimovel (valor, descricao, status, fk_locador) 
                               VALUES ('$valor', '$desc', 'aberto', 1)";

            $dbh->query($sql);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        //SELECT `id`, `valor`, `descricao`, `status`, `fk_endereco`, `fk_locador` FROM `e_rent`.`tblimovel`
       
        // $stmt = Connection::prepare($sql);
        // $stmt->execute(
        //     array(
        //         ":id" => $this->getId(), 
        //         ":valor"=> $this->getValue(), 
        //         ":descricao"=> $this->getDesc(), 
        //         ":status"=> $this->getStatus(), 
        //         ":fk_endereco"=> $this->getAdrees(), 
        //         ":fk_locador"=> $this->getLocator()
        //    // );
	}
	
    /**
	 * @return mixed
	 */
    public function insertEnd() {

        try {
            $dbh = new PDO('mysql:host=localhost;dbname=e_rent', 'root', '');
            $city = $this->getCity();
            $district = $this->getDistrict();
            $state = $this->getState();
            $street = $this->getStreet();
            $number = $this->getNumber();

            
            $sql = "INSERT INTO tblendereco (fk_imovel, estado, cidade, bairro, rua, numero) 
                                VALUES (104, $state, $city, $district, $street, $number)";

            $dbh->query($sql);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        //SELECT `id`, `valor`, `descricao`, `status`, `fk_endereco`, `fk_locador` FROM `e_rent`.`tblimovel`
       
        // $stmt = Connection::prepare($sql);
        // $stmt->execute(
        //     array(
        //         ":id" => $this->getId(), 
        //         ":valor"=> $this->getValue(), 
        //         ":descricao"=> $this->getDesc(), 
        //         ":status"=> $this->getStatus(), 
        //         ":fk_endereco"=> $this->getAdrees(), 
        //         ":fk_locador"=> $this->getLocator()
        //    // );
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
	public function update($id) {
	}
	
	/**
	 *
	 * @param mixed $id
	 * @return mixed
	 */
	public function remove($id) {
        $sql = "DELETE FROM tblimovel WHERE id = :id";
        $stmt = Connection::prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
	}
}
