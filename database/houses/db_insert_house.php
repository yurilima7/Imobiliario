<?php
        require_once '../../classes/houseDAO.class.php';
        $desc = $_POST['descricao'];
        $price = $_POST['valor'];
        $house = new HouseDAO();
$house->setValue($price);
$house->setDesc($desc);

$house->insert();

header("Location: ../../pages/add_announcement/announcement.php");
?>