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
        $idUsuario = $_POST['idUsuario'];

        $image = $_FILES['imagem']['tmp_name'];
        $lengthImage = $_FILES['imagem']['size'];

        $temp = fopen($image, "r");
        $content = fread($temp, $lengthImage);
        $content = addslashes($content);
        fclose($temp);

        $house = new HouseDAO();

        $house->setValue($price);
        $house->setDesc($desc);
        $house->setState($state);
        $house->setCity($city);
        $house->setDistrict($district);
        $house->setStreet($street);
        $house->setNumber($number);
        $house->setLocator($idLocador);
        $house->setImage($content);

        $house->insert();

        header("Location: ../../pages/locator/locator.php?idLocador=$idLocador&idUsuario=$idUsuario");
?>