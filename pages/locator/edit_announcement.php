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

            $dao = new HouseDAO();
            $house = $dao->searchImovel($id);//alterar depois

            foreach ($house as $key => $value) {
        ?>        
        
        <form action="" method="post">

            <div class="form">
                <input type="text" name="state" id="state" placeholder="ESTADO" value="<?php echo $value['estado'];?>" required>
                <input type="text" name="city" id="city" placeholder="CIDADE" value="<?php echo $value['cidade'];?>" required>
                <input type="text" name="district" id="district" placeholder="BAIRRO" value="<?php echo $value['bairro'];?>" required>
                <input type="text" name="street" id="street" placeholder="RUA" value="<?php echo $value['rua'];?>" required>
                <input type="text" name="numero" id="number" placeholder="NÚMERO" value="<?php echo $value['numero'];?>" required>
                <input type="text" name="price" id="price" placeholder="PREÇO DO ALUGUEL" value="<?php echo $value['valor'];?>" required>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="DESCRIÇÃO"><?php echo $value['descricao'];?></textarea>
                <input type="file" name="files" accept="image/png, image/jpeg"  multiple />
                <a href="../locator/locator.php" rel="next" target="_self"><button>Salvar</button></a>
                <a href="../locator/locator.php" rel="next" target="_self"><button class="delete">DELETAR IMÓVEL</button></a>
            </div>
        </form>

        <?php 
            }
        ?>
    </div>
</body>
</html>