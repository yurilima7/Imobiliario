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
            <h1>EDITAR ANÚNCIO</h1>
        </div>

        <?php
            require_once '../../classes/houseDAO.class.php';

            $id = $_GET['id'];
            $idLocador = $_GET['idLocador'];
            $idUsuario = $_GET['idUsuario'];

            $dao = new HouseDAO();
            $house = $dao->searchImovel($id);

            foreach ($house as $key => $value) {
        ?>        
        
        <form action="../../database/houses/db_update_house.php" method="post">

            <div class="form">
                <input type="hidden" name="idImovel" value="<?php echo $id; ?>">
                <input type="hidden" name="idEndereco" value="<?php echo $value['idEndereco']; ?>">
                <input type="text" name="estado" id="state" placeholder="ESTADO" value="<?php echo $value['estado'];?>" required>
                <input type="text" name="cidade" id="city" placeholder="CIDADE" value="<?php echo $value['cidade'];?>" required>
                <input type="text" name="bairro" id="district" placeholder="BAIRRO" value="<?php echo $value['bairro'];?>" required>
                <input type="text" name="rua" id="street" placeholder="RUA" value="<?php echo $value['rua'];?>" required>
                <input type="text" name="numero" id="number" placeholder="NÚMERO" value="<?php echo $value['numero'];?>" required>
                <input type="text" name="valor" id="price" placeholder="PREÇO DO ALUGUEL" value="<?php echo $value['valor'];?>" required>
                <textarea name="descricao" id="description" cols="30" rows="10" placeholder="DESCRIÇÃO"><?php echo $value['descricao'];?></textarea>
                <input type="file" name="files" accept="image/png, image/jpeg"  multiple />
                <input type="hidden" name="idUsuario" value="<?php echo $idUsuario; ?>">
 
                <button type="submit" name="idLocador" value="<?php echo $idLocador;?>">Salvar</button>
            </div>
        </form>

        <form action="../../database/houses/db_delete_house.php">
            <div class="form">
                <input type="hidden" name="idImovel" value="<?php echo $id; ?>">
                <input type="hidden" name="idEndereco" value="<?php echo $value['idEndereco']; ?>">
                <input type="hidden" name="idUsuario" value="<?php echo $idUsuario; ?>">
                <button type="submit" name="idLocador" value="<?php echo $idLocador;?>" class="delete">DELETAR IMÓVEL</button>
            </div>
        </form>

        <?php 
            }
        ?>
    </div>
</body>
</html>