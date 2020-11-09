<?php

require_once 'config.php';

// Recebe os valores do cadastro

$name     = $_POST['name'];
$lastname = $_POST['sobrenome'];
$email    = $_POST['email'];
$senha    = $_POST['password'];
$valid    = 1;

// Faz a conexão

require_once $dbConn;

//Verifica se o email já foi cadastrado

$result = $conn->query("SELECT email FROM tb_usuarios WHERE email = '$email'");

if ($result->fetch_array()){

    header('Location: ../Login.php?cadFail=1');
    
} else { // Insere os dados caso o registro não exista

    // Tratamento de dados

    require_once 'encripty.php';

    $encripty = encriptyPass("IUoH88WFVRdR5!Pa", "V!QpQ!d*TfdeKEZ@", $senha);

    // Insere um novo usuario

    $stmt = $conn->prepare("INSERT INTO tb_usuarios (email, senha, nome, sobrenome, valid) VALUES (?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssi", $email, $encripty, $name, $lastname, $valid);

    $stmt->execute();

    header('Location: ../Login.php?cadSuc=1');

}






?>