<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../styles/property.css">
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

            <div>
                <a href="#registerForm"><button>Cadastrar</button></a>
                <a href="#loginForm"><button>Entrar</button></a>
            </div>
            
        </nav>
    </header>

    <main class="limitContainer">
        <?php
            require_once '../../classes';

            $dao = new HouseDAO();
            $house = $dao->list($id);//alterar depois
        ?>
        <div class="containerProperty">
            <img class="image" src="../../images/image_description.png" alt="house">

            <div class="cardInformation">
                <div class="data">
                    <li class="address"><?php echo $house['city'] ;?></li>
                    <li class="address"><?php echo $house['state'] ;?></li>
                    <li class="address"><?php echo $house['street'] ;?></li>
                    <li class="address"><?php echo $house['district'] ;?></li>

                    <div class="bottomCard">
                        <li class="price"><?php echo $house['price'] ;?></li>
                    </div>    
                </div>

                <div>
                    <a href="#"><button>ALUGAR</button></a>
                </div>
            </div>
        </div>

        <div class="lineHorizontal"></div>

        <div class="iconsInformations">
            <div>
                <img src="../../icon/bedroom.svg" alt="quartos">
                <li><?php echo $house['bedroom'] ;?></li>
            </div>

            <div>
                <img src="../../icon/shower.svg" alt="banheiros">
                <li><?php echo $house['bathroom'] ;?></li>
            </div>

            <div>
                <img src="../../icon/garage.svg" alt="garagem">
                <li><?php echo $house['garage'] ;?></li>
            </div>

            <div>
                <img src="../../icon/centimeter.svg" alt="tamanho">
                <li><?php echo $house['size'] ;?></li>
            </div>
            
            <div>
                <img src="../../icon/pets_true.svg" alt="animais">
                <li><?php echo $house['pet'] ;?></li>
            </div>

            <div>
                <img src="../../icon/subway.svg" alt="metrô">
                <li><?php echo $house['subway'] ;?></li>
            </div>
        </div>

        <div class="lineHorizontal"></div>

        <div class="description">
            <h2>Descrição</h2>
            <p>
                <?php echo $house['description'] ;?>
            </p>
        </div>
    </main>

    <div id="loginForm" class="overlay">
        <div class="formPopup">
            <div class="rowBar">
                <a class="close" href="#">&times;</a>
                <h1>LOGIN</h1>
            </div>

            <div class="lineHorizontal"></div>

            <h2>Bem-Vindo ao E-RENT</h2>

            <form action="" method="post">
                <div class="form">
                    <input type="text" name="E-MAIL" id="E-MAIL" placeholder="E-MAIL" required>
                    <input type="password" name="PASSWORD" id="PASSWORD" placeholder="SENHA" required>
                    <div>
                        <a href="../home_rent/rent_connected.php" rel="next" target="_self">
                            <button>ENTRAR</button>
                        </a>
                    </div>
                </div>
            </form>
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

            <form action="" method="post">
                <div class="form">
                    <input type="text" name="E-MAIL" id="E-MAIL" placeholder="E-MAIL" required>
                    <input type="password" name="PASSWORD" id="PASSWORD" placeholder="SENHA" required>
                    <div>
                        <a href="../register/register.php" rel="next" target="_self">
                            <button>CONTINUAR</button>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

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