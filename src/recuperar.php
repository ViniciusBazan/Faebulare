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
    <center><h1 class="mb-2">Informe o email da sua conta</h1></center>
    <center><h5>Se o e-mail existir, enviaremos um link para mudar a senha</h5></center>

        <div class="row" style="margin-top:15%;">

            <div class="col-md-3" style=""></div>
            <div class="col-12 col-md-6" style="">
            
                <form name="formRec" id="formRec" action="ger_cod.php" method="post">
                    <div class="form-group">
                        <label for="email" class="">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="EmailDaConta@domínio.com" required>
                    </div>
                    <div class="form-group">
                        <center><button type="submit" id="enviar" class="btn btn-color-green-2 mt-3 border border-color-green-1">Enviar meu link</button></center>
                    </div>
                </form>
            
            </div>
            <div class="col-md-3" style=""></div>

        </div>

    </div>

  </body>
  </html>