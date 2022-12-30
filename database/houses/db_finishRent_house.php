<?php
	require_once '../../classes/houseDAO.class.php';

	$idImovel = $_GET['idImovel'];
    $idLocatario = $_GET['idLocatario'];
    $idUsuario = $_GET['idUsuario'];

	$house = new houseDAO();
	$house->rentFinish($idImovel, $idLocatario);

	header("Location: ../../pages/home_rent/rent_loc.php?idUsuario=$idUsuario&idLocatario=$idLocatario"); 
?>