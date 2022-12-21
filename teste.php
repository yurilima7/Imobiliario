<?php
// try {
//     $dbh = new PDO('mysql:host=localhost;dbname=rent', 'root', '');
//     foreach($dbh->query('SELECT * from tblimovel') as $row) {
//         print_r($row);
//     }
//     $dbh = null;
// } catch (PDOException $e) {
//     print "Error!: " . $e->getMessage() . "<br/>";
//     die();
// }    
            require_once 'classes\houseDAO.class.php';
            $dao = new HouseDAO();
            $announcement = $dao->listAll();

            foreach ($announcement as $key => $value) {
                printf('leitura');
                print_r($value) ;
            }
?>