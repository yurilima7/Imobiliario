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

            <a class="navItem" href=""  rel="next" target="_self">
                Locador
            </a>
            <a class="navItem" href="#">Ajuda</a>

            <div>
                <a href="#registerForm"><button>Cadastrar</button></a>
                <a href="#loginForm"><button>Entrar</button></a>
            </div>
            
        </nav>
    </header>

    <main class="main limitContainer">
        <?php       
            require_once '../../classes/houseDAO.class.php';
            $dao = new HouseDAO();
            $announcement = $dao->listAll();
            
            foreach ($announcement as $key => $value) {
            ?>   
            
            <a href="../property_description/property.php?id=<?php echo $value['idImovel'];?>" rel="next" target="_self">
                <div class="card">
                    <img class="image" src="../../images/image01.png" alt="house">
                    <div class="data">
                        <li class="address"><?php echo $value['rua'];?></li>
                        <li class="address"><?php echo $value['bairro'];?></li>
                    </div>
                    <div class="bottomCard">
                        <li class="information">Aluguel</li>
                        <li class="price">R$ <?php echo $value['valor'];?></li>
                    </div>
                </div>
            </a>
        <?php
            }
        ?> 
    </main>

    <div id="loginForm" class="overlay">
        <div class="formPopup">
            <div class="rowBar">
                <a class="close" href="#">&times;</a>
                <h1>LOGIN</h1>
            </div>

            <div class="lineHorizontal"></div>

            <h2>Bem-Vindo ao E-RENT</h2>

            <form action="../../database/houses/db_login_user.php" method="POST">
                <div class="form">
                    <input type="text" name="email" id="E-MAIL" placeholder="E-MAIL" >
                    <input type="password" name="senha" id="PASSWORD" placeholder="SENHA" >
                    <div>
                        <button type="submit">ENTRAR</button>
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

            <form action="../register/register.php" method="post">
                <div class="form">
                    <input type="text" name="email" id="E-MAIL" placeholder="E-MAIL" required>
                    <input type="password" name="senha" id="PASSWORD" placeholder="SENHA" required>
                    <div>
                        <button type="submit">CONTINUAR</button>      
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