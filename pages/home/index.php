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

            <a class="navItem" href="#">Sobre</a>

            <div class="dropItem">
                <span>Buscar</span>
                <div class="dropItemContent">
                    <a class="opc" href="#">Imóveis para comprar</a>
                    <a class="opc" href="../home_rent/rent.html">Imóveis para alugar</a>
                </div>
            </div>

            <a class="navItem" href="#">Locador</a>
            <a class="navItem" href="#">Ajuda</a>

            <div>
                <a href="#registerForm"><button>Cadastrar</button></a>
                <a href="#loginForm"><button>Entrar</button></a>
            </div>
            
        </nav>
    </header>

    <main class="main limitContainer">
    <?php    
            require_once('../../classes/house/houseDAO.class.php');
            $dao = new HouseDAO();
            $announcement = $dao->listAll();

            foreach ($announcement as $key => $value) {
        ?>   
            <a href="../property_description/property.php" rel="next" target="_self">
                <div class="card">
                    <img class="image" src="../../images/image01.png" alt="house">
                    <div class="data">
                        <!-- <li class="address">></li>
                        <li class="address"></li> -->
                        <li class="address">street</li>
                        <li class="address">district</li>
                    </div>
                    <div class="bottomCard">
                        <li class="information">Aluguel</li>
                        <li class="price"><?php echo $value['valor'];?></li>
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
                <li class="information">Venda</li>
                <li class="price">R$ 25.500,00</li>
            </div>
        </div>
    
        <div class="card">
            <img class="image" src="../../images/image02.png" alt="house">

            <div class="data">
                <li class="address">Rua dos Imigrantes</li>
                <li class="address">Centro</li>
            </div>

            <div class="bottomCard">
                <li class="information">Venda</li>
                <li class="price">R$ 25.000,00</li>
            </div>
        </div>
    
        <div class="card">
            <img class="image" src="../../images/image04.png" alt="house">

            <div class="data">
                <li class="address">Rua dos Imigrantes</li>
                <li class="address">Centro</li>
            </div>

            <div class="bottomCard">
                <li class="information">Venda</li>
                <li class="price">R$ 45.550,00</li>
            </div>
        </div>
      
        <div class="card">
            <img class="image" src="../../images/image05.png" alt="house">

            <div class="data">
                <li class="address">Condomínio Boa Vista</li>
                <li class="address">Centro</li>
            </div>

            <div class="bottomCard">
                <li class="information">Venda</li>
                <li class="price">R$ 14.550,00</li>
            </div>
        </div>

        <div class="card">
            <img class="image" src="../../images/image06.png" alt="house">

            <div class="data">
                <li class="address">Condomínio Boa Vista</li>
                <li class="address">Centro</li>
            </div>

            <div class="bottomCard">
                <li class="information">Venda</li>
                <li class="price">R$ 32.250,00</li>
            </div>
        </div>

        <div class="card">
            <img class="image" src="../../images/image08.png" alt="house">

            <div class="data">
                <li class="address">Residêncial Floresta</li>
                <li class="address">Centro</li>
            </div>

            <div class="bottomCard">
                <li class="information">Venda</li>
                <li class="price">R$ 27.000,00</li>
            </div>
        </div>

        <div class="card">
            <img class="image" src="../../images/image09.png" alt="house">

            <div class="data">
                <li class="address">Rua 31 de Agosto</li>
                <li class="address">Centro</li>
            </div>

            <div class="bottomCard">
                <li class="information">Venda</li>
                <li class="price">R$ 34.450,00</li>
            </div>
        </div>

        <div class="card">
            <img class="image"src="../../images/image11.png" alt="house">

            <div class="data">
                <li class="address">Condomínio Flor de Jardim</li>
                <li class="address">Centro</li>
            </div>

            <div class="bottomCard">
                <li class="information">Venda</li>
                <li class="price">R$ 20.050,00</li>
            </div>
        </div>

        <div class="card">
            <img class="image" src="../../images/image12.png" alt="house">

            <div class="data">
                <li class="address">Condomínio Flor de Jardim</li>
                <li class="address">Centro</li>
            </div>

            <div class="bottomCard">
                <li class="information">Venda</li>
                <li class="price">R$ 19.550,00</li>
            </div>
        </div> -->
      
    </main>

    <div id="loginForm" class="overlay">
        <div class="formPopup">
            <div class="rowBar">
                <a class="close" href="#">&times;</a>
                <h1>LOGIN</h1>
            </div>

            <div class="lineHorizontal"></div>

            <h2>Bem-Vindo ao E-RENT</h2>

            <div class="form">
                <input type="text" name="E-MAIL" id="" placeholder="E-MAIL" required>
                <input type="password" name="PASSWORD" id="" placeholder="SENHA" required>
                <button>ENTRAR</button>
            </div>
        </div>
    </div>

    <div id="registerForm" class="overlay">
        <div class="formPopup">
            <div class="rowBar">
                <a class="close" href="#">&times;</a>
                <h1>CADASTRAR</h1>
            </div>

            <div class="lineHorizontal"></div>

            <h2>Bem-Vindo ao E-RENT</h2>

            <div class="form">
                <input type="text" name="E-MAIL" id="" placeholder="E-MAIL" required>
                <input type="password" name="PASSWORD" id="" placeholder="SENHA" required>
                <button>CONTINUAR</button>
            </div>
        </div>
    </div>

    <footer class="footer">
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