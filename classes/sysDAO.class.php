<?php
    require_once('connection.class.php');

    class SysDAO {
        public function countUsuarios() {

            try {
                $dbh = new PDO('mysql:host=localhost;dbname=e_rent', 'root', ''); 

                $result = $dbh->query("SELECT count(*) from tblusuario");

                foreach ($result as $key => $value) {
                    $qtdUsuarios = $value[0];
                }

                return $qtdUsuarios;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function countLocadores() {

            try {
                $dbh = new PDO('mysql:host=localhost;dbname=e_rent', 'root', ''); 

                $result = $dbh->query("SELECT count(*) from tbllocador");

                foreach ($result as $key => $value) {
                    $qtdLocadores = $value[0];
                }

                return $qtdLocadores;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function countLocatarios() {

            try {
                $dbh = new PDO('mysql:host=localhost;dbname=e_rent', 'root', ''); 

                $result = $dbh->query("SELECT count(*) from tbllocatario");

                foreach ($result as $key => $value) {
                    $qtdLocatarios = $value[0];
                }

                return $qtdLocatarios;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function countImoveis() {

            try {
                $dbh = new PDO('mysql:host=localhost;dbname=e_rent', 'root', ''); 

                $result = $dbh->query("SELECT count(*) from tblimovel");

                foreach ($result as $key => $value) {
                    $qtdImoveis = $value[0];
                }

                return $qtdImoveis;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function countImoveisDisponiveis() {

            try {
                $dbh = new PDO('mysql:host=localhost;dbname=e_rent', 'root', ''); 

                $result = $dbh->query("SELECT count(*) from tblimovel WHERE tblimovel.status='aberto'");

                foreach ($result as $key => $value) {
                    $qtdImoveisDisponiveis = $value[0];
                }

                return $qtdImoveisDisponiveis;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function countImoveisAlugados() {

            try {
                $dbh = new PDO('mysql:host=localhost;dbname=e_rent', 'root', ''); 

                $result = $dbh->query("SELECT count(*) from tblimovel WHERE tblimovel.status='alugado'");

                foreach ($result as $key => $value) {
                    $qtdImoveisAlugados = $value[0];
                }

                return $qtdImoveisAlugados;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }
?>