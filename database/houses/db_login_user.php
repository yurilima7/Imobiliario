<?php
    require_once '../../classes/userDAO.class.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];  

    $user = new UserDAO();

    $user->setEmail($email);
    $user->setPassword($senha);

    $user->login();
?>