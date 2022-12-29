<?php
    require_once '../../classes/userDAO.class.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];  
    $nome = $_POST['nome'];  
    $cpf = $_POST['cpf'];
    $isLocador = $_POST['locador'];
    $telefone = $_POST['telefone'];

    $user = new UserDAO();

    $user->setEmail($email);
    $user->setPassword($senha);
    $user->setName($nome);
    $user->setCPF($cpf);
    $user->setIsLocator($isLocador);
    $user->setPhone($telefone);

    $user->insert();
?>