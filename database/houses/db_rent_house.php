<?php
	require_once '../../classes/houseDAO.class.php';

	$idImovel = $_GET['idImovel'];
    $idLocatario = $_GET['idLocatario'];
    $idUsuario = $_GET['idUsuario'];

	$house = new houseDAO();
	$house->rent($idImovel, $idLocatario);

	header("Location: ../../pages/renter/renter.php?idUsuario=$idUsuario&idLocatario=$idLocatario");
?>