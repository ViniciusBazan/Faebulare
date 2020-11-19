<?php require_once 'inc'.DIRECTORY_SEPARATOR.'config.php'; 

if (isset($_SESSION['id_user'])){
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <!-- incluindo head padrão -->
    <?php require_once $head; ?>

  </head>
  <body>

    <div class="container-fluid mt-5  wt-geral text-white">
    <center><h1 class="mb-2">E-mail enviado</h1></center>
    <center><h5>Se você inseriu o email corretamente você recebera o link para trocar a senha</h5></center>
    <center><h5>Lembre-se de nunca divulgar sua senha ou o link para trocar</h5></center>

    <center><a class="alink muda" href="index.php" ><button type="button" id="voltar" class="btn btn-color-green-2  border border-color-green-1" style='margin-top:10%;'>Voltar para o site</button></a></center>

  </body>
</html>
