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
            $image = $this->getImage();

            $sql = "INSERT INTO tblimovel (valor, descricao, status, fk_locador) 
                               VALUES ('$valor', '$desc', 'aberto', '$idLocador')";
            $dbh->query($sql);
            $idImovel = $dbh->lastInsertId();
            
            $sqlII = "INSERT INTO tblendereco (fk_imovel, estado, cidade, bairro, rua, numero) 
                         VALUES ('$idImovel', '$state', '$city', '$district', '$street', '$number')";
            $dbh->query($sqlII);

            $sqlImage = "INSERT INTO tblimagem (fk_imovel, imagem, fk_locador)
                         VALUES ('$idImovel', '$image', '$idLocador')";
            $dbh->query($sqlImage);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
	}

	/**
	 * @return mixed
	 */
    // lista os imóveis de um locador
	public function list($id) {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=e_rent', 'root', '');

            return $dbh->query(" SELECT * FROM tblimovel
            JOIN tbllocador ON tbllocador.idLocador = tblimovel.fk_locador
            JOIN tblendereco ON tblimovel.idImovel = tblendereco.fk_imovel
            JOIN tblimagem ON tblimovel.idImovel = tblimagem.fk_imovel
            WHERE tbllocador.idLocador = '$id';");

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
	}
    /**
	 * @return mixed
	 */
    // lista os imóveis de um locatario
	public function listLoc($id) {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=e_rent', 'root', '');

            return $dbh->query("SELECT * FROM tbllocatario JOIN tblimovel ON tbllocatario.fk_imovel = tblimovel.idImovel
                                JOIN tblendereco ON tblendereco.fk_imovel = tblimovel.idImovel 
                                JOIN tblimagem on tblimagem.fk_imovel = tblimovel.idImovel WHERE fk_usuario = $id");

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
	}
    // lista todos os disponíveis
    public function listAll(){
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=e_rent', 'root', '');

            return $dbh->query("SELECT * from tblendereco join tblimovel on tblendereco.fk_imovel = tblimovel.idImovel join tblimagem on tblimovel.idImovel = tblimagem.fk_imovel WHERE tblimovel.status = 'aberto';");
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        } 
    }

    // lista imóvel específico para edição/delete
    public function searchImovel($id) {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=e_rent', 'root', '');

            return $dbh->query("SELECT * from tblendereco join tblimovel on tblendereco.fk_imovel = tblimovel.idImovel join tblimagem on tblimovel.idImovel = tblimagem.fk_imovel WHERE tblimovel.idImovel = $id"); 
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
	}
	
	/**
	 * @return mixed
	 */
    // lista um imóvel em específico
	public function search($id) {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=e_rent', 'root', '');

            return $dbh->query("SELECT * from tblendereco join tblimovel on tblendereco.fk_imovel = tblimovel.idImovel join tblimagem on tblimovel.idImovel = tblimagem.fk_imovel WHERE tblimovel.idImovel = $id")->fetch();
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
	}

    /**
	 * @return mixed
	 */
    // fazer aluguel
    public function rent($idImovel, $idLocatario){
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=e_rent', 'root', '');

            $sql = "UPDATE tblimovel SET status='alugado' WHERE idImovel = $idImovel";
            $dbh->query($sql);

            $sqlLocatario = "UPDATE tbllocatario SET fk_imovel='$idImovel' WHERE idLocatario = $idLocatario";
            $dbh->query($sqlLocatario);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    // desocupa imóvel
	public function rentFinish($idImovel, $idLocatario){
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=e_rent', 'root', '');

            $sql = "UPDATE tblimovel SET status='aberto' WHERE idImovel = $idImovel";
            $dbh->query($sql);

            $sqlLocatario = "UPDATE tbllocatario SET fk_imovel=null WHERE idLocatario = $idLocatario";
            $dbh->query($sqlLocatario);
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

            $sqlImage = "DELETE FROM tblimagem WHERE fk_imovel = $idImovel";
            $dbh->query($sqlImage);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
	}
}
