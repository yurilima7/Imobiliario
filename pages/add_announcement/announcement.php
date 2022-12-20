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
        
        <form action="../../database/houses/db_insert_house.php" method="post">
            <div class="container">
                <label for="">ACEITA PET?
                    <input type="radio" name="resposta" value="pet" required>
                    <label for="yes">Sim</label>
                    <input type="radio" name="resposta" value="pet" required>
                    <label for="not">Não</label>
                </label>
            </div>

            <div class="container">
                <label for="">METRÔ PRÓXIMO? 
                    <input type="radio" name="resposta2" value="subway" required>
                    <label for="yes">Sim</label>
                    <input type="radio" name="resposta" value="subway" required>
                    <label for="not">Não</label>
                </label>
            </div>

            <div class="container">
                <label for="">TEM GARAGEM? 
                    <input type="radio" name="resposta" value="garage" required>
                    <label for="yes">Sim</label>
                    <input type="radio" name="resposta" value="garage" required>
                    <label for="not">Não</label>
                </label>
            </div>

            <div class="form">
                <input type="text" name="state" id="state" placeholder="ESTADO" required>
                <input type="text" name="city" id="city" placeholder="CIDADE" required>
                <input type="text" name="district" id="district" placeholder="BAIRRO" required>
                <input type="text" name="street" id="street" placeholder="RUA" required>
                <input type="text" name="bedroom" id="bedroom" placeholder="QUANTIDADE DE QUARTOS" required>
                <input type="text" name="bathroom" id="bathroom" placeholder="QUANTIDADE DE BANHEIROS" required>
                <input type="text" name="size" id="size" placeholder="TAMANHO EM M²" required>
                <input type="text" name="price" id="price" placeholder="PREÇO DO ALUGUEL" required>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="DESCRIÇÃO"></textarea>
                <input type="file" name="files" accept="image/png, image/jpeg"  multiple />
                <a href="../home_rent/rent.php" rel="next" target="_self"><button>ANUNCIAR</button></a>
            </div>
        </form>
    </div>
</body>
</html>