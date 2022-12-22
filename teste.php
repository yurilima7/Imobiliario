<?php

// try {
//     $dbh = new PDO('mysql:host=localhost;dbname=duckserver', 'root', '');
//     $sql = "INSERT INTO tblimovel (valor, descricao, status, fk_endereco, fk_locador) 
//                        VALUES (608, 'Imovel lindo de morrer', 'aberto', 1, 1)";
//     $dbh->query($sql);
//     printf('enviado com sucesso');
// } catch (PDOException $e) {
//     print "Error!: " . $e->getMessage() . "<br/>";
//     die();
// }

try {
    $dbh = new PDO('mysql:host=localhost;dbname=duckserver', 'root', '');

    return $dbh->query("SELECT * from tblimovel join tblendereco on tblimovel.fk_endereco = tblendereco.id where tblimovel.id = 1");
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}




// try {
//     $v = 2;
//     $dbh = new PDO('mysql:host=localhost;dbname=duckserver', 'root', '');
//     foreach($dbh->query("SELECT * from tblimovel join tbllocador 
//         on tblimovel.fk_locador = tbllocador.id join tblendereco on tblimovel.fk_endereco = tblendereco.id where tbllocador.id = $v") as $row) {
//         print_r($row);
//     }
//     $dbh = null;
// } catch (PDOException $e) {
//     print "Error!: " . $e->getMessage() . "<br/>";
//     die();
// }    
            // require_once 'classes\houseDAO.class.php';
            // $dao = new HouseDAO();
            // $announcement = $dao->listAll();

            // foreach ($announcement as $key => $value) {
            //     printf('leitura');
            //     print_r($value) ;
            // }

            //("SELECT count(*) from tblusuario;" quantidade de usuários
?>