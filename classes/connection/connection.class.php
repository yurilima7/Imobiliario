<?php
require_once 'config.inc.php';

  class Connection{
    private static $connection;
    private static function getConnection(){
        if(!isset(self::$connection)){
            try {
                self::$connection = new PDO('mysql:host=' . HOST . ';dbname='. DBNAME . ';port=' . PORT, USER, PASS);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            return self::$connection;
        }
    }
    public static function prepare($sql){
        return self::getConnection()->prepare($sql);
    }
  }
?>