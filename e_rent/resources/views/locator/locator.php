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
            <a class="navItem" href="#">Locador</a>
            <a class="navItem" href="#">Ajuda</a>

            <div>
                <a href="../add_announcement/announcement.php"  rel="next" target="_self">
                    <button>Anunciar</button>
                </a>
            </div>
            
        </nav>
    </header>

    <main class="main limitContainer">

        <?php
            require_once '../../classes/houseDAO.class.php';

            // $idLocador = $_GET['id'];
            $idLocador = 1;

            $dao = new HouseDAO();
            $announcement = $dao->list($idLocador);

            foreach ($announcement as $key => $value) {
        ?>   
            <a href="edit_announcement.php?id=<?php echo $value['id'];?>" rel="next" target="_self">
                <div class="card">
                    <img class="image" src="../../images/image01.png" alt="house">
                    <div class="data">
                        <li class="address"><?php echo $value['rua'];?></li>
                        <li class="address"><?php echo $value['bairro'];?></li>
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