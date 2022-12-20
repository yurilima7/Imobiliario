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
            <h1>NOVO ANÚNCIO</h1>
        </div>

        <?php
            require_once '../../classes';

            $id = $_GET['id'];

            $dao = new HouseDAO();
            $house = $dao->list($id);//alterar depois
        ?>        
        
        <form action="../../database/houses/db_insert_house.php" method="post">
            <div class="container">
                <label for="">ACEITA PET?
                    <input type="radio" NAME="resposta" VALUE="pet" required>
                    <label for="yes">Sim</label>
                    <input type="radio" NAME="resposta" VALUE="pet" required>
                    <label for="not">Não</label>
                </label>
            </div>

            <div class="container">
                <label for="">METRÔ PRÓXIMO? 
                    <input type="radio" NAME="resposta2" VALUE="subway" required>
                    <label for="yes">Sim</label>
                    <input type="radio" NAME="resposta" VALUE="subway" required>
                    <label for="not">Não</label>
                </label>
            </div>

            <div class="container">
                <label for="">TEM GARAGEM? 
                    <input type="radio" NAME="resposta" VALUE="garage" required>
                    <label for="yes">Sim</label>
                    <input type="radio" NAME="resposta" VALUE="garage" required>
                    <label for="not">Não</label>
                </label>
            </div>

            <div class="form">
                <input type="text" name="state" id="state" placeholder="ESTADO" value="<?php echo $house['state'];?>" required>
                <input type="text" name="city" id="city" placeholder="CIDADE" value="<?php echo $house['city'];?>" required>
                <input type="text" name="district" id="district" placeholder="BAIRRO" value="<?php echo $house['district'];?>" required>
                <input type="text" name="street" id="street" placeholder="RUA" value="<?php echo $house['street'];?>" required>
                <input type="text" name="bedroom" id="bedroom" placeholder="QUANTIDADE DE QUARTOS" value="<?php echo $house['bedroom'];?>" required>
                <input type="text" name="bathroom" id="bathroom" placeholder="QUANTIDADE DE BANHEIROS" value="<?php echo $house['bathroom'];?>" required>
                <input type="text" name="size" id="size" placeholder="TAMANHO EM M²" value="<?php echo $house['size'];?>" required>
                <input type="text" name="price" id="price" placeholder="PREÇO DO ALUGUEL" value="<?php echo $house['price'];?>" required>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="DESCRIÇÃO" value="<?php echo $house['description'];?>"></textarea>
                <input type="file" name="files" accept="image/png, image/jpeg"  multiple />
                <a href="../locator/locator.php" rel="next" target="_self"><button>ANUNCIAR</button></a>
                <a href="../locator/locator.php" rel="next" target="_self"><button class="delete">DELETAR IMÓVEL</button></a>
            </div>
        </form>
    </div>
</body>
</html>