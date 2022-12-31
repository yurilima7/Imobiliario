<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/property.css">
    <link rel="shortcut icon" href="/icon/logo.ico" type="image/x-icon">
    <title>E-RENT</title>
</head>
<body>
    <header class="header">
        <nav class="navBar limitContainer">
            <h1>E-RENT</h1>

            <a class="navItem" href="#about">Sobre</a>
            <a class="navItem" href="#">Locador</a>
            <a class="navItem" href="#">Ajuda</a>

            <div class="dropItem">
                <span><img class="userIcon" src="../../icon/user.png" alt="user"></span>
                <div class="dropItemContent">
                    <a class="opc" href="../property_description/property.php">Sair</a>
                </div>
            </div>
            
        </nav>
    </header>

    <main class="limitContainer">
        @forelse ($imovel as $house) 
            <div class="containerProperty">
                <!-- <img class="image" src="../../images/image_description.png" alt="house"> -->
                <img class="image" src="data:image/png;base64, {{base64_encode(($house->imagem));}}" alt="house">

                <div class="cardInformation">
                    <div class="data">
                        <li class="address">{{$house->cidade}}</li>
                        <li class="address">{{$house->estado}}</li>
                        <li class="address">{{$house->rua}}</li>
                        <li class="address">{{$house->bairro}}</li>

                        <div class="bottomCard">
                            <li class="price">{{$house->valor}}</li>
                        </div>    
                    </div>

                    <div>
                        <a href="#"><button>ALUGAR</button></a>
                    </div>
                </div>
            </div>

            <div class="lineHorizontal"></div>

            <div class="description">
                <h2>Descrição</h2>
                <p>
                    {{$house->descricao}}
                </p>
            </div>
        @empty
            <p>Sem dados</p>
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