<?php require_once 'inc'.DIRECTORY_SEPARATOR.'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <!-- incluindo head padrão -->
    <?php require_once $head; ?>

  </head>
  <body class="bg-home">

    <?php

      if(!isset($_SESSION['animation'])){
        echo '<img id="animation" class="" src="img/ani.gif" style="width:100%;height:100vh;z-index:30; position:fixed;">';
      }

    ?>

    <!-- Incluindo o menu -->
    <?php require_once $menu; ?>

    <div class="bg-home" style="width:100%;min-height:81vh;clip-path: polygon(50% 0%, 100% 0, 100% 91%, 50% 100%, 0 91%, 0 0);">
    <div class="container-fluid mt-4  wt-geral text-white" style="">
  
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
	<a href="cont_Chapeuzinho_Vermelho.php">
      <img class="d-block w-100" src="<?php echo $slide.'chapeuzinho.png' ?>" alt="Primeiro Slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="background-color: rgba(0,0,0,.4)"><strong>Chapeuzinho vermelho</strong></h5>
      </div>
    </div>
    <div class="carousel-item">
	<a href="cont_Joao_e_Maria.php">
      <img class="d-block w-100" src="<?php echo $slide.'joao_maria.png' ?>" alt="Segundo Slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="background-color: rgba(0,0,0,.4)"><strong>João e Maria</strong></h5>
      </div>
    </div>
    <div class="carousel-item">
	<a href="cont_A_Bela_Adormecida.php">
      <img class="d-block w-100" src="<?php echo $slide.'bela_adormecida.png' ?>" alt="Terceiro Slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="background-color: rgba(0,0,0,.4)"><strong>Bela adormecida</strong></h5>
      </div>
    </div>
    <div class="carousel-item">
	<a href="cont_A_Bela_e_a_Fera.php">
      <img class="d-block w-100" src="<?php echo $slide.'bela_fera.png' ?>" alt="Segundo Slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="background-color: rgba(0,0,0,.4)"><strong>Bela e a Fera</strong></h5>
      </div>
    </div>
    <div class="carousel-item">
	<a href="cont_Branca_de_Neve.php">
      <img class="d-block w-100" src="<?php echo $slide.'branca_neve.png' ?>" alt="Segundo Slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="background-color: rgba(0,0,0,.4)"><strong>Branca de neve</strong></h5>
      </div>
    </div>
    <div class="carousel-item">
	<a href="cont_Cinderela.php">
      <img class="d-block w-100" src="<?php echo $slide.'cinderela.png' ?>" alt="Segundo Slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="background-color: rgba(0,0,0,.4)"><strong>Cinderela</strong></h5>
      </div>
    </div>
    <div class="carousel-item">
	<a href="cont_O_Gato_de_Botas.php">
      <img class="d-block w-100" src="<?php echo $slide.'gato.png' ?>" alt="Segundo Slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="background-color: rgba(0,0,0,.4)"><strong>Gato de botas</strong></h5>
      </div>
    </div>
    <div class="carousel-item">
	<a href="cont_Pinoquio.php">
      <img class="d-block w-100" src="<?php echo $slide.'pinoquio.png' ?>" alt="Segundo Slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="background-color: rgba(0,0,0,.4)"><strong>Pinóquio</strong></h5>
      </div>
    </div>
    <div class="carousel-item">
	<a href="cont_A_Princesa_e_o_Sapo.php">
      <img class="d-block w-100" src="<?php echo $slide.'princesa_sapo.png' ?>" alt="Segundo Slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="background-color: rgba(0,0,0,.4)"><strong>Princesa e o sapo</strong></h5>
      </div>
    </div>
    <div class="carousel-item">
	<a href="cont_Rapunzel.php">
      <img class="d-block w-100" src="<?php echo $slide.'rapunzel.png' ?>" alt="Segundo Slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="background-color: rgba(0,0,0,.4)"><strong>Rapunzel</strong></h5>
      </div>
    </div>
    <div class="carousel-item">
	<a href="cont_Pequena_Sereia.php">
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



<div class="row mt-3">

  <div class="col-3"></div>
  <div class="col-6">
    <center><a href="#hist" class="scrollSuave muda opaci"><img src="img/arrow.png" style="width:2em;height:2.4em;"></a>
            </center>
  </div>
  <div class="col-3"></div>

</div>

<br><br><br><br>

<div class="row mt-3 mt-md-5">

  <div class="col-1"> </div>

  <div class="col-11">
    <img id="hist" class="position-absolute wtem-4 wtem-md-2" src="<?php echo $folhas.'1.png' ?>"  style="z-index:0;"><h1 class="font-london font-s-40 font-s-md-20 position-relative" style="z-index:1;">Nem toda história...</h1>
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

<div class="row  mt-3 mb-5">

  <div class="col-3"></div>
  <div class="col-6">
            <center><a href="#cards" class="scrollSuave muda opaci"><img src="img/arrow.png" style="width:2em;height:2.4em;"><a>
            </center>
  </div>
  <div class="col-3"></div>

</div>
<br>
<br>


    </div>
    </div>

    <div class="bg-img text-white" style="width:100%;height:100%;background-image: url(img/bg/bglivros3.png);margin-top:-160px;margin-bottom:-92px;">
      
        <div class="container-fluid mt-5 mb-5  wt-geral ">
        <br><br><br><br id="cards"><br>
          <div class="row mt-5 mb-5">
            <div class="col-12 col-md-4 mb-5 mb-md-0"><center><a href="cont_Psicanalise.php"><img class="img-fluid home-cards opaci-suav muda" src="<?php echo $cards.'img_psicanalise.png';  ?>" ></a></center></div>
            <div class="col-12 col-md-4 mt-0 mt-md-5 mb-5 mb-lg-0"><center><a href="cont_Autores.php"><img class="img-fluid home-cards opaci-suav muda" src="<?php echo $cards.'img_autores.png';  ?>" ></a></center></div>
            <div class="col-12 col-md-4 mb-5 mb-md-0"><center><a href="cont_Quem_somos.php"><img class="img-fluid home-cards opaci-suav muda" src="<?php echo $cards.'img_sobre.png';  ?>" ></a></center></div>
          </div>
        <br>

        </div>
    </div>
<br>

    <!-- incluindo o rodapé -->
    <?php require_once $rodape ?>

    <!-- incluindo scripts -->
    <?php require_once $scriptJs; ?>

  </body>
</html>