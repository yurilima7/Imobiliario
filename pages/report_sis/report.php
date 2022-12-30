<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../styles/announcement.css">
    <link rel="shortcut icon" href="/icon/logo.ico" type="image/x-icon">
    <title>Relatório</title>
</head>
<body>
    <?php
        require_once '../../classes/sysDAO.class.php';
        
        $dao = new SysDAO();
        $usuarios = $dao->countUsuarios();
        $locadores = $dao->countLocadores();
        $locatarios = $dao->countLocatarios();
        $imoveis = $dao->countImoveis();
        $imoveisAlugados = $dao->countImoveisAlugados();
        $imoveisDisponiveis = $dao->countImoveisDisponiveis();
    ?>

    <header class="header">
        <nav class="navBar limitContainer">
            <h1>E-RENT</h1>          
        </nav>
    </header>

    <div class="rowBar">
        <h1>Relatório</h1>
    </div>

    <ul class="limitContainer">
        <li>Total de usuários: <?php echo $usuarios ;?></li>
        <li>Total de locadores: <?php echo $locadores ;?></li>
        <li>Total de locatários: <?php echo $locatarios ;?></li>
        <li>Total de imóveis: <?php echo $imoveis ;?></li>
        <li>Total de imóveis alugados: <?php echo $imoveisAlugados ;?></li>
        <li>Total de imóveis disponíveis: <?php echo $imoveisDisponiveis ;?></li>
    </ul>
</body>
</html>