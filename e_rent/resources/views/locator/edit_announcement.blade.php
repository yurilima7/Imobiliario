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
            <h1>EDITAR ANÚNCIO</h1>
        </div>
        @forelse ($imovel as $house)
            <form action="{{route('atualizar', ['idUsuario' => $idUsuario, 
                    'idLocador' => $idLocador, 'idImovel' => $house->idImovel])}}" method="post">
                @csrf
                <div class="form">
                    <input type="hidden" name="idEndereco" value="{{$house->idEndereco}}">
                    <input type="hidden" name="idImagem" value="{{$house->idImagem}}">
                    <input type="text" name="estado" id="state" placeholder="ESTADO" value="{{$house->estado}}" required>
                    <input type="text" name="cidade" id="city" placeholder="CIDADE" value="{{$house->cidade}}" required>
                    <input type="text" name="bairro" id="district" placeholder="BAIRRO" value="{{$house->bairro}}" required>
                    <input type="text" name="rua" id="street" placeholder="RUA" value="{{$house->rua}}" required>
                    <input type="text" name="numero" id="number" placeholder="NÚMERO" value="{{$house->numero}}" required>
                    <input type="text" name="valor" id="price" placeholder="PREÇO DO ALUGUEL" value="{{$house->valor}}" required>
                    <textarea name="descricao" id="description" cols="30" rows="10" placeholder="DESCRIÇÃO">{{$house->descricao}}</textarea>
                    <input type="file" name="imagem" accept="image/png, image/jpeg" />
    
                    <button>Salvar</button>
                </div>
            </form>

            <form action="{{route('deletar', ['idUsuario' => $idUsuario, 
                    'idLocador' => $idLocador, 'idImovel' => $house->idImovel])}}" method="post">
                @csrf
                <div class="form">
                    <input type="hidden" name="idEndereco" value="{{$house->idEndereco}}">
                    <input type="hidden" name="idImagem" value="{{$house->idImagem}}">
                    <button class="delete">DELETAR IMÓVEL</button>
                </div>
            </form>
        @empty
            <p>Sem dados</p>
        @endforelse
    </div>
</body>
</html>