<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../styles/style.css">
    <link rel="shortcut icon" href="/icon/logo.ico" type="image/x-icon">
    <title>E-RENT</title>
</head>
<body>
    <header class="header">
        <nav class="navBar limitContainer">
            <h1>E-RENT</h1>

            <a class="navItem" href="#about">Sobre</a>

            <a class="navItem" href="../locator/locator.php"  rel="next" target="_self">
                Locador
            </a>
            <a class="navItem" href="#">Ajuda</a>

            <div class="dropItem">
                <span><img class="userIcon" src="../../icon/user.png" alt="user"></span>
                <div class="dropItemContent">
                    <a class="opc" href="../home_rent/rent.php">Sair</a>
                </div>
            </div>
            
        </nav>
    </header>

    <main class="main limitContainer">
        <?php
            require_once '../../classes';

            $dao = new HouseDAO();
            $announcement = $dao->listAll();

            foreach ($announcement as $key => $value) {
        ?>   
            <a href="../property_description/property.php" rel="next" target="_self">
                <div class="card">
                    <img class="image" src="../../images/image01.png" alt="house">
                    <div class="data">
                        <li class="address"><?php echo $value['street'];?></li>
                        <li class="address"><?php echo $value['district'];?></li>
                    </div>
                    <div class="bottomCard">
                        <li class="information">Aluguel</li>
                        <li class="price"><?php echo $value['price'];?></li>
                    </div>
                </div>
            </a>
        <?php
            }
        ?>
        
        <!-- <div class="card">
            <img class="image" src="../../images/image01.png" alt="house">

            <div class="data">
                <li class="address">Rua 31 de Agosto</li>
                <li class="address">Centro</li>
            </div>

            <div class="bottomCard">
                <li class="information">Aluguel</li>
                <li class="price">R$ 250,00</li>
            </div>
        </div>

        <a href="../property_description/property.html" rel="next" target="_self">
            <div class="card">
                <img class="image" src="../../images/image02.png" alt="house">
                <div class="data">
                    <li class="address">Rua dos Imigrantes</li>
                    <li class="address">Centro</li>
                </div>
                <div class="bottomCard">
                    <li class="information">Venda</li>
                    <li class="price">R$ 250,00</li>
                </div>
            </div>
        </a>
    
        <div class="card">
            <img class="image" src="../../images/image03.png" alt="house">

            <div class="data">
                <li class="address">Residêncial Floresta</li>
                <li class="address">Centro</li>
            </div>

            <div class="bottomCard">
                <li class="information">Aluguel</li>
                <li class="price">R$ 355,00</li>
            </div>
        </div>
    
        <div class="card">
            <img class="image" src="../../images/image04.png" alt="house">

            <div class="data">
                <li class="address">Rua dos Imigrantes</li>
                <li class="address">Centro</li>
            </div>

            <div class="bottomCard">
                <li class="information">Aluguel</li>
                <li class="price">R$ 250,00</li>
            </div>
        </div>
      
        <div class="card">
            <img class="image" src="../../images/image05.png" alt="house">

            <div class="data">
                <li class="address">Condomínio Boa Vista</li>
                <li class="address">Centro</li>
            </div>

            <div class="bottomCard">
                <li class="information">Aluguel</li>
                <li class="price">R$ 450,00</li>
            </div>
        </div>

        <div class="card">
            <img class="image" src="../../images/image07.png" alt="house">

            <div class="data">
                <li class="address">Residêncial Floresta</li>
                <li class="address">Centro</li>
            </div>

            <div class="bottomCard">
                <li class="information">Aluguel</li>
                <li class="price">R$ 250,00</li>
            </div>
        </div>

        <div class="card">
            <img class="image" src="../../images/image08.png" alt="house">

            <div class="data">
                <li class="address">Residêncial Floresta</li>
                <li class="address">Centro</li>
            </div>

            <div class="bottomCard">
                <li class="information">Aluguel</li>
                <li class="price">R$ 250,00</li>
            </div>
        </div>

        <div class="card">
            <img class="image" src="../../images/image09.png" alt="house">

            <div class="data">
                <li class="address">Rua 31 de Agosto</li>
                <li class="address">Centro</li>
            </div>

            <div class="bottomCard">
                <li class="information">Aluguel</li>
                <li class="price">R$ 250,00</li>
            </div>
        </div>

        <div class="card">
            <img class="image" src="../../images/image10.png" alt="house">

            <div class="data">
                <li class="address">Condomínio Flor de Jardim</li>
                <li class="address">Centro</li>
            </div>

            <div class="bottomCard">
                <li class="information">Aluguel</li>
                <li class="price">R$ 350,00</li>
            </div>
        </div>

        <div class="card">
            <img class="image"src="../../images/image11.png" alt="house">

            <div class="data">
                <li class="address">Condomínio Flor de Jardim</li>
                <li class="address">Centro</li>
            </div>

            <div class="bottomCard">
                <li class="information">Aluguel</li>
                <li class="price">R$ 450,00</li>
            </div>
        </div> -->
           
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