<?php
        require_once '../../classes/houseDAO.class.php';

        $state = $_POST['estado'];
        $city = $_POST['cidade'];
        $district = $_POST['bairro'];
        $street = $_POST['rua'];
        $number = $_POST['numero'];
        $price = $_POST['valor'];
        $desc = $_POST['descricao'];
        $idLocador = $_POST['idLocador'];
        $idImovel = $_POST['idImovel'];
        $idEndereco = $_POST['idEndereco'];
        $idUsuario = $_POST['idUsuario'];

        $house = new HouseDAO();

        $house->setValue($price);
        $house->setDesc($desc);
        $house->setState($state);
        $house->setCity($city);
        $house->setDistrict($district);
        $house->setStreet($street);
        $house->setNumber($number);
        $house->setLocator($idLocador);
        $house->setAdress($idEndereco);
        $house->setId($idImovel);

        $house->update();

        header("Location: ../../pages/locator/locator.php?idLocador=$idLocador&idUsuario=$idUsuario");
?>