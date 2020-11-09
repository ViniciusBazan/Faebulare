<?php

// Definindo constantes para a conexão
// Em caso de troca de uma das constantes basta alterar seu valor

define("SERVIDOR", "localhost" );  // Servidor
define("USER", "root");            // Usuario
define("PASSWORD", "usbw");        // Senha
define("DB", "db_faebulare");      // Banco de dados

// Estabelecendo conexão com o banco de dados por meio da classe mysqli

$conn = new mysqli(SERVIDOR, USER, PASSWORD, DB );

?>