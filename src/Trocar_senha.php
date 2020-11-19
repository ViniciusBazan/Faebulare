<?php

require_once 'inc'.DIRECTORY_SEPARATOR.'config.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <!-- incluindo head padrão -->
    <?php require_once $head; ?>

  </head>
  <body class="text-white">
  <div class="container-fluid mt-5  wt-geral text-white">

<?php

if (isset($_SESSION['id_user'])){

    echo "<center><h1>Você está logado em outra conta</h1>
          <h5>Encerre sua sessão antes de prosseguir</h5></center>";

} else if(!isset($_GET['user']) || !isset($_GET['cod'])){

    echo "<center><h1>O link não é válido!</h1></center>";

} else {

    $user     = $_GET['user'];
    $security = $_GET['cod'];

    require_once 'inc/db_conn.php';

    // Verificação de usuario e código
    $result = $conn->query("SELECT email , security FROM tb_usuarios WHERE id_user = $user AND security = '$security'");

    if ($row = $result->fetch_array()){ // Os dados batem

        if($row['security'] == ""){

            echo "<center><h1>O link não é válido!</h1></center>";

        } else{
            $email = $row['email'];
            echo '<center><h1>Digite e confirme a nova senha:</h1></center>
            <div class="row" style="margin-top:10%;">

            <div class="col-md-3" style=""></div>
            <div class="col-12 col-md-6" style="">
            
                <form name="formRec" id="formRec" action="inc/db_alterpass.php" method="post">
                <input type="number" id="user" name="user" value="'.$user.'" readonly style="display:none;">
                    <div class="form-group">
                        <label for="newpw" class="">Nova Senha:</label>
                        <input type="password" class="form-control" id="newpw" name="newpw" required>
                    </div>
                    
                    
                    <div id="WarnPass" class="form-row" style="display:none;"> 
                    
                        <div class="form-group col-12">
                        
                            <div class="alert alert-danger" role="alert">
                                Senha inválida! Deve conter:
                                <hr>
                                <ul>
                                    <li>Entre 8 e 16 caracteres;</li>
                                    <li>No minímo 1 caracter minúsculo;</li>
                                    <li>No minímo 1 caracter maiúsculo;</li>
                                    <li>No minímo 1 caracter especial (!,@,#,$ entre outros);</li>
                                    <li>No minímo 1 caracter númerico.</li>
                                <ul>
                            </div>

                        </div>
                        
                    </div>




                    <div class="form-group">
                        <label for="confnewpw" class="">Confirme a nova senha:</label>
                        <input type="password" class="form-control" id="confnewpw" name="confnewpw" required>
                    </div>


                    <div id="WarnConf" class="form-row" style="display:none;"> 
                        
                        <div class="form-group col-12">
                        
                            <div class="alert alert-danger" role="alert">
                                As senhas não batem!
                            </div>

                        </div>
                        
                    </div>






                    <div class="form-group">
                        <center><button type="button" id="enviar" class="btn btn-color-green-2 mt-3 border border-color-green-1" onclick="validNewps()">Trocar a senha</button></center>
                    </div>
                    
            <div class="col-md-3" style=""></div>

            </div>';
        }

} else {

    echo "<center><h1>O link não é válido!</h1></center>";

}

}

?>
    </div>

    <script src="js/valNewPassword.js"></script>
  </body>
</html>