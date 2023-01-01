<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <title>E-RENT</title>
</head>
<body>
    <header class="header">
        <nav class="navBar limitContainer">
            <h1>E-RENT</h1>

            <a class="navItem" href="#about">Sobre</a>
            
            <a class="navItem" href="{{route('locador', ['idLocador' => $idLocador, 'idUsuario' => $idUsuario])}}"  rel="next" target="_self">
                Locador
            </a>
            <a class="navItem" href="#">Ajuda</a>

            <div class="dropItem">
                <span><img class="userIcon" src="/icon/user.png" alt="user"></span>
                <div class="dropItemContent">
                    <a class="opc" href="{{route('listagem')}}">Sair</a>
                </div>
            </div>
            
        </nav>
    </header>

    
    <main class="main limitContainer">   
        
        @forelse ($imoveis as $imovel)    
          
            <div class="card">
                <!-- <img class="image" src="/images/image01.png" alt="house"> -->
                <img class="image" src="data:image/png;base64, {{base64_encode(($imovel->imagem));}}" alt="house">
                <div class="data">
                    <li class="address">{{$imovel->rua}}</li>
                    <li class="address">{{$imovel->bairro}}</li>
                </div>
                <div class="bottomCard">
                    <li class="information">Aluguel</li>
                    <li class="price">R$ {{$imovel->valor}}</li>
                </div>
            </div>
          
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