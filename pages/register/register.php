<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../styles/register.css">
    <link rel="shortcut icon" href="/icon/logo.ico" type="image/x-icon">
    <title>Registrar</title>
</head>
<body>
    <header class="header">
        <nav class="navBar limitContainer">
            <h1>E-RENT</h1>          
        </nav>
    </header>

    <div class="formPopup">
        <div class="rowBar">
            <h1>DIGITE SEUS DADOS</h1>
        </div>

        <div class="lineHorizontal"></div>

        <?php
            $email = $_POST['email'];
            $senha = $_POST['senha'];   
        ?>

        <form action="../../database/houses/db_insert_user.php" method="post">
            <div class="container">
                
                <label for="">É LOCADOR?
                    <input type="radio" name="locador" VALUE="1" required>
                    <label for="yes">Sim</label>
                    <input type="radio" name="locador" VALUE="0" required>
                    <label for="not">Não</label>
                </label>
            </div>

            <div class="form">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <input type="hidden" name="senha" value="<?php echo $senha; ?>">
                <input type="text" name="nome" id="fullName" placeholder="NOME COMPLETO" required>
                <input type="text" name="cpf" id="CPF" placeholder="CPF" required>
                <input type="text" name="telefone" id="telefone" placeholder="TELEFONE" required>
                <button type="submit">ENTRAR</button>
            </div>
        </form>
    </div>
</body>
</html>