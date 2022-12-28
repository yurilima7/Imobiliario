<?php
        require_once '../../classes/houseDAO.class.php';
        require_once '../../classes/adressDAO.class.php';

        $desc = $_POST['descricao'];
        $price = $_POST['valor'];
        $city = $_POST['cidade'];
        $district = $_POST['bairro'];
        $state = $_POST['estado'];
        $street = $_POST['rua'];
        $number = $_POST['numero'];

        $house = new HouseDAO();
        $adress = new AdressDAO();

        $house->setValue($price);
        $house->setDesc($desc);
        $adress->setCity($city);
        $adress->setDistrict($district);
        $adress->setState($state);
        $adress->setStreet($street);
        $adress->setNumber($number);

        $house->insert();
        $house->insertEnd();

        header("Location: ../../pages/add_announcement/announcement.php");
?>