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

    <img src="<?php echo $conto.'img (44).jpg' ?>" class="" style="width:100%;height:430px;object-fit: cover;object-position: center 32%;"> 

    <div class="container-fluid mt-4  wt-geral  position-relative" style="min-height:81vh;">

        <div class="position-absolute  rounded-pill switch-border" style="right:0;">

        <a id="light" class="m-1" ><?php echo $sun; ?></a>
        <a id="dark" class="m-1" ><?php echo $moon; ?></a>
      
        </div>

        <br>
    
        <center><h1 class="font-antic mt-3 mb-5"> Teste de título </h1></center>

        <p class="text-justify"><span class="font-london font-s-30 mr-2 px-3 bg-color-red-1 border border-color-red-2" style="line-height: 1;">L</span>orem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi labore eius, vero rem, fugit aspernatur laudantium dolor veritatis impedit eaque quidem provident? Odit similique, quas vel quibusdam voluptas praesentium rem?</p>
        <div class="row">

            <div class="col-12 col-md-4" ><center><img class="img-fluid" src="<?php echo $conto.'img (48).jpg' ?>"></center></div>
            <div class="col-12 col-md-8 text-justify"> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ipsa nemo saepe soluta odio minima ab commodi minus reprehenderit! Optio laudantium distinctio odio amet necessitatibus fuga sed ex doloremque autem Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ipsa nemo saepe soluta odio minima ab commodi minus reprehenderit! Optio laudantium distinctio odio amet necessitatibus fuga sed ex doloremque autem Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ipsa nemo saepe soluta odio minima ab commodi minus reprehenderit! Optio laudantium distinctio odio amet necessitatibus fuga sed ex doloremque autem.</p> </div>

        </div>

        <div class="row">

            
          <div class="col-12 col-md-8 text-justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ipsa nemo saepe soluta odio minima ab commodi minus reprehenderit! Optio laudantium distinctio odio amet necessitatibus fuga sed ex doloremque autem Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ipsa nemo saepe soluta odio minima ab commodi minus reprehenderit! Optio laudantium distinctio odio amet necessitatibus fuga sed ex doloremque autem Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ipsa nemo saepe soluta odio minima ab commodi minus reprehenderit! Optio laudantium distinctio odio amet necessitatibus fuga sed ex doloremque autem. </div>
          <div class="col-12 col-md-4" ><center><img class="img-fluid" src="<?php echo $conto.'img (48).jpg' ?>"></center></div>
            

        </div>


    </div>

    </div>

    <!-- incluindo o rodapé -->
    <?php require_once $rodape ?>

    <!-- incluindo scripts -->
    <?php require_once $scriptJs; ?>

  </body>
</html>