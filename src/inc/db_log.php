<?php

require_once 'config.php';
require_once 'encripty.php';

// Recebe os valores do Login

$email     = $_POST['lemail'];
$senha     = $_POST["lpassword"];
$encripty = encriptyPass("IUoH88WFVRdR5!Pa", "V!QpQ!d*TfdeKEZ@", $senha);

// Faz a conexão

require_once $dbConn;

//Verifica as credenciais

$result = $conn->query("SELECT id_user, nome, sobrenome FROM tb_usuarios WHERE email = '$email' AND senha = '$encripty'");

if ($row = $result->fetch_array()){

    $_SESSION['id_user'] = $row['id_user'];
    $_SESSION['nome']    = $row['nome'];
    $_SESSION['ltname']  = $row['sobrenome'];

    header('Location: ../index.php');

} else{

    header('Location: ../Login.php?logFail=1');

}

?>