<?php require_once 'inc'.DIRECTORY_SEPARATOR.'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <!-- Incluindo head padrão -->
    <?php require_once $head; ?>

  </head>
  <body class="bg-home">
    <!-- Incluindo o menu -->
    <?php require_once $menu; ?>

    <div class="container-fluid mt-5" style="background-color:blue;"> <br> </div>

    <div class="container-fluid mt-1  wt-geral text-white" style="min-height:81vh;">

        <center><h1 class="font-antic"> Teste de título </h1></center>

        <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi labore eius, vero rem, fugit aspernatur laudantium dolor veritatis impedit eaque quidem provident? Odit similique, quas vel quibusdam voluptas praesentium rem?</p>
        <div class="row">

            <div class="col-12 col-md-9" style="background-color:red;"><br><br></div>
            <div class="col-12 col-md-3 text-justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ipsa nemo saepe soluta odio minima ab commodi minus reprehenderit! Optio laudantium distinctio odio amet necessitatibus fuga sed ex doloremque autem. </div>

        </div>

    </div>

    <!-- incluindo o rodapé -->
    <?php require_once $rodape ?>

    <!-- incluindo scripts -->
    <?php require_once $scriptJs; ?>

  </body>
</html>