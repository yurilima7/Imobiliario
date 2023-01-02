<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="shortcut icon" href="/icon/logo.ico" type="image/x-icon">
    <title>E-RENT</title>
</head>
<body>
    <header class="header">
        <nav class="navBar limitContainer">
            <a href="{{route('home_locador', ['idLocador' => $idLocador, 'idUsuario' => $idUsuario])}}">
                <h1>E-RENT</h1>
            </a>

            <a class="navItem" href="#about">Sobre</a>
            <a class="navItem" href="#">Locador</a>
            <a class="navItem" href="#">Ajuda</a>

            <div>
                <a href="{{route('registrar_imovel', ['idUsuario' => $idUsuario, 'idLocador' => $idLocador])}}"  rel="next" target="_self">
                    <button>Anunciar</button>
                </a>
            </div>
            
        </nav>
    </header>

    <main class="main limitContainer">
        @forelse ($imoveis as $imovel)   
            <a href="{{route('atualizar_imovel', ['idUsuario' => $idUsuario, 
                'idLocador' => $idLocador, 'idImovel' => $imovel->idImovel])}}" rel="next" target="_self">
                <div class="card">
                    <img class="image" src="/image/{{ $imovel->imagem }}" alt="house">
                    <div class="data">
                        <li class="address">{{$imovel->rua}}</li>
                        <li class="address">{{$imovel->bairro}}</li>
                    </div>
                    <div class="bottomCard">
                        <li class="information">Aluguel</li>
                        <li class="price">R$ {{$imovel->valor}}</li>
                    </div>
                </div>
            </a>
        @empty
            <p>Sem imóveis</p>
        @endforelse
    </main>

    <footer class="footer" id="about">
        <p class="limitContainer">
            E-RENT IMOBILIÁRIA, somos uma empresa focada na disponibilização das melhores 
            ofertas de imóveis para aluguel e/ou vendas para nossos locatários. <br>
            Para nossos locadores oferecemos todo o suporte para o gerênciamento de seus imóveis
            Processos rápidos, transparentes e da melhor qualidade.
        </p>
        <p class="limit-container">Todos os direitos reservados a E-RENT IMOBILIÁRIA.</p>
    </footer>
</body>
</html>