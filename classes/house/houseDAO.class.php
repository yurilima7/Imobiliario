<?php
require_once '../../classes/house/house.class.php';
require_once '../../classes/connection/connection.class.php';
require_once '../../classes/interface/IDatabase.class.php';
  class HouseDAO extends House implements IDatabase{
  	/**
	 * @return mixed
	 */
	public function insert() {
        //SELECT `id`, `valor`, `descricao`, `status`, `fk_endereco`, `fk_locador` FROM `patoservidor`.`tblimovel`
        $sql = "INSERT INTO tblimovel (id, valor, descricao, status, fk_endereco, fk_locador) 
                               VALUES (:id, :valor, :descricao, :status, :fk_endereco, :fk_locador)";
        $stmt = Connection::prepare($sql);
        $stmt->execute(
            array(
                ":id" => $this->getId(), 
                ":valor"=> $this->getValue(), 
                ":descricao"=> $this->getDesc(), 
                ":status"=> $this->getStatus(), 
                ":fk_endereco"=> $this->getAdrees(), 
                ":fk_locador"=> $this->getLocator()
            )
        );
	}
	
	/**
	 * @return mixed
	 */
	public function list($id) {
        $sql = "SELECT * FROM tblimovel where fk_locador = :id";
        $stmt = Connection::prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetchAll();
	}

    public function listAll(){
        //$status = 'aberto';
        // $sql = "SELECT * FROM tblimovel where status = :status";
        $sql = "SELECT * FROM `tblimovel`;";
        $stmt = Connection::prepare($sql);
        //$stmt->bindParam(":status", $status);
        $stmt->execute();
        return $stmt->fetchAll();
    }
	
	/**
	 * @return mixed
	 */
	public function search($id) {
        $sql = "SELECT * FROM tblimovel where id = $id";
        $stmt = Connection::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
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
?>