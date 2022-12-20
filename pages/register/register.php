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

        <form action="" method="post">
            <div class="container">
                <label for="">É LOCADOR?
                    <input type="radio" NAME="resposta" VALUE="isLocator" required>
                    <label for="yes">Sim</label>
                    <input type="radio" NAME="resposta" VALUE="isLocator" required>
                    <label for="not">Não</label>
                </label>
            </div>
            <div class="form">
                <input type="text" name="fullName" id="fullName" placeholder="NOME COMPLETO" required>
                <input type="text" name="CPF" id="CPF" placeholder="CPF" required>
                <a href="../home_rent/rent_connected.php" rel="next" target="_self">
                    <button>ENTRAR</button>
                </a>
            </div>
        </form>
    </div>
</body>
</html>