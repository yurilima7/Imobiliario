<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/announcement.css">
    <link rel="shortcut icon" href="/icon/logo.ico" type="image/x-icon">
    <title>Relatório</title>
</head>
<body>
    <header class="header">
        <nav class="navBar limitContainer">
            <h1>E-RENT</h1>          
        </nav>
    </header>

    <div class="rowBar">
        <h1>Relatório</h1>
    </div>

    <ul class="limitContainer">
        <li>Total de usuários: {{$qtdUsuarios}}</li>
        <li>Total de locadores: {{$qtdLocadores}}</li>
        <li>Total de locatários: {{$qtdLocatarios}}</li>
        <li>Total de imóveis: {{$qtdImoveis}}</li>
        <li>Total de imóveis disponíveis: {{$qtdDispAluguel}}</li>
        <li>Total de imóveis alugados: {{$qtdAlugados}}</li>
    </ul>
</body>
</html>