<?php

require_once 'config.php';

// Se o usuario não estiver logado retorna para outra pagina

if(!isset($_SESSION['id_user']) || !isset($_GET['post'])){

    $fallback = '..'.$sep.'index.php';

    $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;

    header("location: {$anterior}");
    exit;

}

// Faz a conexão

require_once $dbConn;

// Verifica se é uma resposta e prossegue de duas formas dependendo da decisão

$coment = strip_tags($_POST['coment']);
$posta  = $_GET['post'];
$idUser = $_SESSION['id_user'];

if(isset($_POST['reply'])){
    //echo "Esse comentario é uma resposta!";

    $reply = $_POST['reply'];

    $stmt = $conn->prepare("INSERT INTO tb_coment (id_user, id_post, reply, conteudo) VALUES (?, ?, ?, ?)");

    $stmt->bind_param("iiis", $idUser, $posta, $reply, $coment);

    $stmt->execute();

    header("Location: ".$_SERVER['HTTP_REFERER']."?comentSuc=1");

}else{
    
    $stmt = $conn->prepare("INSERT INTO tb_coment (id_user, id_post, conteudo) VALUES (?, ?, ?)");

    $stmt->bind_param("iis", $idUser, $posta, $coment);

    $stmt->execute();

    header("Location: ".$_SERVER['HTTP_REFERER']."?comentSuc=1");

}

?>