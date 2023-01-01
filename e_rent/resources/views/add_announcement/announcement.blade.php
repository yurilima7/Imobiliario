<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/announcement.css">
    <link rel="shortcut icon" href="/icon/logo.ico" type="image/x-icon">
    <title>Novo anúncio</title>
</head>
<body>
    <header class="header">
        <nav class="navBar limitContainer">
        <a href="../home_rent/rent.php" rel="next" target="_self"><h1>E-RENT</h1> </a>        
        </nav>
    </header>

    <div class="formPopup">
        <div class="rowBar">
            <h1>NOVO ANÚNCIO</h1>
        </div>
        
        <form action="{{route('registrar', ['idUsuario' => $idUsuario, 'idLocador' => $idLocador])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <input type="text" name="estado" id="state" placeholder="ESTADO" required>
                <input type="text" name="cidade" id="city" placeholder="CIDADE" required>
                <input type="text" name="bairro" id="district" placeholder="BAIRRO" required>
                <input type="text" name="rua" id="street" placeholder="RUA" required>
                <input type="text" name="numero" id="number" placeholder="NÚMERO" required>
                <input type="text" name="valor" id="price" placeholder="PREÇO DO ALUGUEL" required>
                <textarea name="descricao" id="description" cols="30" rows="10" placeholder="DESCRIÇÃO"></textarea>
                <input type="file" name="imagem" accept="image/png, image/jpeg"  multiple />
                <button>cadastrar</button>
            </div>
        </form>
    </div>
</body>
</html>