<?php require_once 'inc'.DIRECTORY_SEPARATOR.'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <!-- incluindo head padrão -->
    <?php require_once $head; ?>

  </head>
  <body class="bg-home">
    <!-- Incluindo o menu -->
    <?php require_once $menu; ?>


    <div class="container-fluid mt-4  wt-geral text-white" style="min-height:81vh;">
  
    <div class="row">
    <div class="col-lg-2"></div>

    <div class="col-12 col-lg-8">
    <div id="contos-img" class="carousel slide" data-ride="carousel" data-interval="6000">
  <ol class="carousel-indicators d-none d-md-flex">
    <li data-target="#contos-img" data-slide-to="0" class="active"></li>
    <li data-target="#contos-img" data-slide-to="1"></li>
    <li data-target="#contos-img" data-slide-to="2"></li>
    <li data-target="#contos-img" data-slide-to="3"></li>
    <li data-target="#contos-img" data-slide-to="4"></li>
    <li data-target="#contos-img" data-slide-to="5"></li>
    <li data-target="#contos-img" data-slide-to="6"></li>
    <li data-target="#contos-img" data-slide-to="7"></li>
    <li data-target="#contos-img" data-slide-to="8"></li>
    <li data-target="#contos-img" data-slide-to="9"></li>
    <li data-target="#contos-img" data-slide-to="10"></li>
  </ol>
  <center><div class="carousel-inner" style="width:90%;height:auto;">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo $slide.'chapeuzinho.png' ?>" alt="Primeiro Slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="background-color: rgba(0,0,0,.4)"><strong>Chapeuzinho vermelho</strong></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $slide.'joao_maria.png' ?>" alt="Segundo Slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="background-color: rgba(0,0,0,.4)"><strong>João e Maria</strong></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $slide.'bela_adormecida.png' ?>" alt="Terceiro Slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="background-color: rgba(0,0,0,.4)"><strong>Bela adormecida</strong></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $slide.'bela_fera.png' ?>" alt="Segundo Slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="background-color: rgba(0,0,0,.4)"><strong>Bela e a Fera</strong></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $slide.'branca_neve.png' ?>" alt="Segundo Slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="background-color: rgba(0,0,0,.4)"><strong>Branca de neve</strong></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $slide.'cinderela.png' ?>" alt="Segundo Slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="background-color: rgba(0,0,0,.4)"><strong>Cinderala</strong></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $slide.'gato.png' ?>" alt="Segundo Slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="background-color: rgba(0,0,0,.4)"><strong>Gato de botas</strong></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $slide.'pinoquio.png' ?>" alt="Segundo Slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="background-color: rgba(0,0,0,.4)"><strong>Pinoquio</strong></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $slide.'princesa_sapo.png' ?>" alt="Segundo Slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="background-color: rgba(0,0,0,.4)"><strong>Princesa e o sapo</strong></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $slide.'rapunzel.png' ?>" alt="Segundo Slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="background-color: rgba(0,0,0,.4)"><strong>Rapunzel</strong></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $slide.'sereia.png' ?>" alt="Segundo Slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="background-color: rgba(0,0,0,.4)"><strong>Ariel</strong></h5>
      </div>
    </div>
  </div></center>
  <a class="carousel-control-prev" href="#contos-img" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon rg" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#contos-img" role="button" data-slide="next">
    <span class="carousel-control-next-icon lf" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
</div>
<div class="col-lg-2"></div>


</div>

<div class="row d-none d-md-flex">

  <div class="col-3"></div>
  <div class="col-6">
    <center><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-chevron-double-down" fill="#cc0000" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
            <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
            </svg>
            </center>
  </div>
  <div class="col-3"></div>

</div>

<br><br><br><br>

<div class="row mt-5">

  <div class="col-1"> </div>

  <div class="col-11">
    <img class="position-absolute wtem-4 wtem-md-2" src="<?php echo $folhas.'1.png' ?>"  style="z-index:0;"><h1 class="font-london font-s-40 font-s-md-20 position-relative" style="z-index:1;">Nem toda história...</h1>
  </div>

  


  <div class="col-3"> </div>

  <div class="col-9">
  <h1 class="font-london font-s-40 font-s-md-20 position-relative" style="z-index:1">Terminou com um final feliz... </h1>
  </div>

  

</div>

<br><br><br><br><br><br><br><br>

<div class="row">

  <div class="col-3 d-none d-lg-flex"> <img  src="<?php echo $folhas.'3.png' ?>" style="width:70%;height:auto;" > </div>

  <div class="col-12 col-lg-6"> <center><p class="font-antic font-s-md-16 font-s-18">Reunimos alguns dos contos mais conhecidos mundialmente em suas versões menos disseminadas.</p></center> </div>

  <div class="col-3 d-none d-lg-flex"> <img  src="<?php echo $folhas.'4.png' ?>" style="width:70%;height:auto;" > </div>

</div>

    </div>

    <!-- incluindo o rodapé -->
    <?php require_once $rodape ?>

    <!-- incluindo scripts -->
    <?php require_once $scriptJs; ?>

  </body>
</html>