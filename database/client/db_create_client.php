<?php
   try{
    $connection = new PDO (
        'mysql:host=localhost; dbname=rent',
        'root',
        ''
    );
    
    
   } catch(PDOException){
    print "Erro!: {$e->getMessage()} <br/>";
    die();
   }
?>