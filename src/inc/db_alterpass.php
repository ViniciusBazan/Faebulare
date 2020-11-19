<?php

require_once 'config.php';

if (isset($_POST['user']) && isset($_POST['newpw'])){

    require_once 'encripty.php';
    
    // Recebe os valores do update

    $user          = $_POST['user'];
    $novaSenha     = encriptyPass("IUoH88WFVRdR5!Pa", "V!QpQ!d*TfdeKEZ@", $_POST['newpw']);
    $resetSecurity = "";

    require_once $dbConn;

    $stmt = $conn->prepare("UPDATE tb_usuarios SET senha = ?, security = ? WHERE id_user = ?");

    $stmt->bind_param("ssi", $novaSenha, $resetSecurity, $user);

    $stmt->execute();

    header("Location: ..".$sep."Login.php?altSuc=1");


} else{
    header("Location: ..".$sep."Login.php?altFail=1");
}

?>