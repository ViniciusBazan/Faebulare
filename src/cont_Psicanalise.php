<?php require_once 'inc'.DIRECTORY_SEPARATOR.'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <!-- Incluindo head padrão -->
    <?php require_once $head; ?>

  </head>
  <body class="dark muda" id="contBg">
    <!-- Incluindo o menu -->
    <?php require_once $menu; ?>

    <div style="width:100%;height:auto;">

    <img src="<?php echo $bg.'bglivros.png' ?>" class="" style="width:100%;height:480px;object-fit: cover;object-position: center 55%;"> 

        <div class="container-fluid mt-4  wt-geral  position-relative" style="min-height:81vh;">

            <div class="position-absolute  rounded-pill switch-border" style="right:0;">

            <a id="light" class="m-1" ><?php echo $sun; ?></a>
            <a id="dark" class="m-1" ><?php echo $moon; ?></a>
        
            </div>

            <br>
        
            <center><h1 class="font-antic mt-3 mb-2"> A bela adormecida </h1></center>
        
        </div>

    </div>

    <br>

    <a href="#top"><?php echo $topo;?></a>

    <!-- incluindo o rodapé -->
    <?php require_once $rodape ?>

    <!-- incluindo scripts -->
    <?php require_once $scriptJs; ?>

  </body>
</html>