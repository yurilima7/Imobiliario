<?php
   require_once ('user.class.php'); 
   require_once ('IUser.php');
   require_once('connection.class.php');
  class UserDAO extends User implements IUser{
  	/**
	 * @return mixed
	 */
	public function insert() {

        try {
            $dbh = new PDO('mysql:host=localhost;dbname=e_rent', 'root', ''); 
            $email = $this->getEmail();
            $senha = $this->getPassword();
            $nome = $this->getName();
            $cpf = $this->getCPF();
            $isLocador = $this->getLocator();
            $telefone = $this->getPhone();

            $sql = "INSERT INTO tblusuario (nome, cpf, email, senha, isLocator, telefone) 
                               VALUES ('$nome', '$cpf', '$email', '$senha', '$isLocador', '$telefone')";
            $dbh->query($sql);
            $idUsuario = $dbh->lastInsertId();

            if ($isLocador == 1) {
                $sqlLocador = "INSERT INTO tbllocador (cnpj, fk_usuario) 
                        VALUES ('', '$idUsuario')";
                
                $dbh->query($sqlLocador);
                header("Location: ../../pages/home_rent/rent.php");
            }
            else {
                $sqlLocatario = "INSERT INTO tbllocatario (fk_usuario) 
                        VALUES ('$idUsuario')";

                $dbh->query($sqlLocatario);
                header("Location: ../../pages/home_rent/rent.php");
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
	}
    
	/**
	 * @return mixed
	 */
	public function login() {
	}
}
