<?php require_once 'inc'.DIRECTORY_SEPARATOR.'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <!-- incluindo head padrão -->
    <?php require_once $head; ?>

  </head>
  <body>
    <!-- Incluindo o menu -->
    <?php require_once $menu; ?>

<br>
    <div class="container-fluid mt-5 mb-5  wt-geral text-white" style="min-height:81vh;">

    <center><h1 class="font-antic"><span style="border-bottom: #cc0000 solid 3px">Quem somos?</span></h1></center>

        <div class="row mt-5 mb-5 font-antic">
            <div class="col-md-2"></div><div class="col-12 col-md-8"><center><h3>A equipe do Faebulare é composta por 4 adolescentes que cursam informática para a internet na Etec Parque Belém e são grandes interessados em contos.</h3></center></div><div class="col-md-2"></div>
        </div>

        <center class="mt-5"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-chevron-double-down" fill="#cc0000" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
            <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
            </svg>
         </center>

    </div>

    <!-- incluindo o rodapé -->
    <?php require_once $rodape ?>

    <!-- incluindo scripts -->
    <?php require_once $scriptJs; ?>

  </body>
</html>