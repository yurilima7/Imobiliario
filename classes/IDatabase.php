<?php
  interface IDatabase{
    function insert();
    function list($id);
    function search($id);
    function update();
    function remove($idImovel, $idEndereco);
  }
?>