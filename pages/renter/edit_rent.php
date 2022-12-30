<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../styles/announcement.css">
    <link rel="shortcut icon" href="/icon/logo.ico" type="image/x-icon">
    <title>Novo anúncio</title>
</head>
<body>
    <header class="header">
        <nav class="navBar limitContainer">
            <h1>E-RENT</h1>          
        </nav>
    </header>

    <div class="formPopup">
        <div class="rowBar">
            <h1>SOBRE O IMÓVEL</h1>
        </div>

        <?php
            require_once '../../classes/houseDAO.class.php';

            $idUsuario = $_GET['idUsuario'];

            $dao = new HouseDAO();
            $rent = $dao->listLoc($idUsuario);

            foreach ($rent as $key => $value) {
        ?>        

        <form action="../../database/houses/db_finishRent_house.php">
            <div class="form">
                <input type="text" disabled="" value="<?php echo $value['bairro'];?>">
                <input type="text" disabled="" value="<?php echo $value['rua'];?>">
                <input type="text" disabled="" value="<?php echo $value['numero'];?>">
                <input type="text" disabled="" value="<?php echo $value['valor'];?>">
                <input type="hidden" name="idImovel" value="<?php echo $value['idImovel']; ?>">
                <input type="hidden" name="idLocatario" value="<?php echo $value['idLocatario']; ?>">
                <input type="hidden" name="idUsuario" value="<?php echo $idUsuario; ?>">
                <button type="submit" class="delete">DESOCUPAR IMÓVEL</button>
            </div>
        </form>

        <?php 
            }
        ?>
    </div>
</body>
</html>