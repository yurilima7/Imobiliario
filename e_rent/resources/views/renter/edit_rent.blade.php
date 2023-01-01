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
            <h1>E-RENT</h1>          
        </nav>
    </header>

    <div class="formPopup">
        <div class="rowBar">
            <h1>SOBRE O IMÓVEL</h1>
        </div>  
        @forelse ($imovel as $house)
            <form action="{{route('desocupar', ['idUsuario' => $idUsuario, 
                    'idLocatario' => $idLocatario, 'idImovel' => $idImovel])}}" method="post">
                @csrf
                <div class="form">
                    <input type="text" disabled="" value="{{$house->bairro}}">
                    <input type="text" disabled="" value="{{$house->rua}}">
                    <input type="text" disabled="" value="{{$house->numero}}">
                    <input type="text" disabled="" value="{{$house->valor}}">
                    <button class="delete">DESOCUPAR IMÓVEL</button>
                </div>
            </form>
        @empty
            <p>Sem dados</p>
        @endforelse
    </div>
</body>
</html>