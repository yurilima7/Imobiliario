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
            <?php
                $idLocador = $_GET['idLocador']; 
                $idUsuario = $_GET['idUsuario'];       
            ?> 
            <a href="../home_rent/rent_connected.php?idLocador=<?=$idLocador?>&idUsuario=<?=$idUsuario?>">
                <h1>E-RENT</h1>
            </a>

            <a class="navItem" href="#about">Sobre</a>
            <a class="navItem" href="#">Locador</a>
            <a class="navItem" href="#">Ajuda</a>

            <div>
                <?php
                    $idLocador = $_GET['idLocador'];   
                ?>

                <a href="../add_announcement/announcement.php?idLocador=<?=$idLocador?>&idUsuario=<?=$idUsuario?>"  rel="next" target="_self">
                    <button>Anunciar</button>
                </a>
            </div>
            
        </nav>
    </header>

    <main class="main limitContainer">

        <?php
            require_once '../../classes/houseDAO.class.php';

            $idLocador = $_GET['idLocador'];
            
            $dao = new HouseDAO();
            $announcement = $dao->list($idLocador);

            foreach ($announcement as $key => $value) {
                
        ?>   
            <a href="edit_announcement.php?id=<?php echo $value['idImovel'];?>&idLocador=<?=$idLocador?>&idUsuario=<?=$idUsuario?>" rel="next" target="_self">
                <div class="card">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($value['imagem']); ?>" alt="house" width=100%>
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