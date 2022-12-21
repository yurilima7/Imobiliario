<?php
  class Connection{
    private static $connection;
    private static function getConnection(){
        if(!isset(self::$connection)){
            try {
                self::$connection = new PDO('mysql:localhost;dbname=patoservidor', 'root', '');
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