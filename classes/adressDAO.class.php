<?php
require_once ('adress.class.php'); 
require_once ('IDatabase.php');
require_once('connection.class.php');
class AdressDAO extends Adress implements IDatabase{
    
	/**
	 * @return mixed
	 */
	public function insert() {

		$sql = "";
        
	}
	
	/**
	 *
	 * @param mixed $id
	 * @return mixed
	 */
	public function list($id) {
	}
	
	/**
	 *
	 * @param mixed $id
	 * @return mixed
	 */
	public function search($id) {
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
	}
}
?>