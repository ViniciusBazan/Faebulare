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

    <img src="<?php echo $conto.'img3.jpg' ?>" class="" style="width:100%;height:550px;object-fit: cover;object-position: center 55%;"> 

    <div class="container-fluid mt-4  wt-geral  position-relative" style="min-height:81vh;">
	
	 <?php

    if (isset($_SESSION['suc']) && isset($_SESSION['id_user'])){
      echo '<div id="alertSuccess" class="alert alert-success alert-dismissible fade show mb-5 mt-5" role="alert"><strong>Seu comentário foi feito com sucesso!</strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
      unset($_SESSION['suc']);
    }

    if (isset($_SESSION['pal']) && isset($_SESSION['id_user'])){
      echo '<div id="alertPal" class="alert alert-danger alert-dismissible fade show mb-5 mt-5" role="alert"><strong>Não admitimos palavras de baixo calão ou endereços de sites inapropriados nos comentários!</strong> Mensagens claramente ofensivas estão sujeitas a serem apagadas. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
      unset($_SESSION['pal']);
    }

    ?>

        <div class="position-absolute  rounded-pill switch-border" style="right:0;">

        <a id="light" class="m-1" ><?php echo $sun; ?></a>
        <a id="dark" class="m-1" ><?php echo $moon; ?></a>
      
        </div>

        <br>
    
        <center><h1 class="font-antic mt-3 mb-2"> Chapeuzinho Vermelho  </h1></center>
        <center><h3 class="font-antic mt-3 mb-5"> Charles Perroult</h3></center>

        <p class="text-justify mb-4 font-s-11 recuo"><span class="font-london font-s-30 mr-2 px-3 border switch-cap text-white muda" style="line-height: 1;">E</span>xiste uma menina que vive numa aldeia; ela é a coisa mais linda que se podia imaginar. Sua mãe era louca por ela, e a avó mais louca ainda. A boa velinha mandou fazer para ela um chapeuzinho vermelho, e esse chapéu assentou-lhe tão bem que a menina passou a ser chamada por todo mundo de Chapeuzinho Vermelho.</p>
        <div class="row mb-4">

            <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/img42.jpg);width:100%;height:100%;"></div></div>
            <div class="col-12 col-md-8 text-justify font-s-11"> 
              <p class="mb-4 recuo">Um dia, tendo feito alguns bolos, sua mãe disse-lhe:</p> 
              <p class="mb-4 recuo"> — Vá ver como está passando a sua avó, pois fiquei sabendo que ela está um pouco adoentada. Leve-lhe um bolo e este potezinho de manteiga.<br>Chapeuzinho Vermelho partiu logo para a casa da avó que morava numa aldeia vizinha. Ao atravessar a floresta ela encontrou o Lobo, que ficou louco de vontade de comê-la; não ousou fazer isso, porém, por causa da presença de alguns lenhadores na floresta. Perguntou a ela aonde ia, e a pobre menina, que ignorava ser perigoso parar e conversar com um lobo, respondeu:</p>
            </div>

        </div>

        <div class="row mb-4">

            
          <div class="col-12 col-md-8 text-justify font-s-11"> <p class="mb-4 recuo"><br>— Vou à casa da minha avó, para levar-lhe um bolo e um potezinho de manteiga que mamãe mandou.<br><br> — Ela mora muito longe? — quis saber o Lobo. <br><br>— Mora, sim! — Falou Chapeuzinho Vermelho.<br><br>— Mora depois daquele moinho que se avista lá longe, muito longe, na primeira casa da aldeia.<br><br>— Muito bem — disse o Lobo. — Eu também vou visita-la. Eu sigo por este caminho aqui, e você por aquele lá. Vamos ver quem chega primeiro.<br></p> </div>
          <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/img38.jpg);width:100%;height:100%;object-position: center 30%;"></div></div>
            

        </div>
        <div class="row mb-4">

            <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/img39.jpg);width:100%;height:100%;background-position: center 50%;"></div></div>
            <div class="col-12 col-md-8 text-justify font-s-11">
			<p class="mb-4 recuo"> O Lobo saiu correndo a toda velocidade pelo caminho mais curto, enquanto a menina seguia pelo caminho mais longo, distraindo-se a colher avelãs, a correr atrás das borboletas e a fazer um buquê com as florezinhas que ia encontrando.<br>O Lobo não levou muito tempo para chegar à casa da avó. Ele bate: toc, toc.</p>
              <p class="mb-4 recuo">  — Quem é? — pergunta a avó.</p>
              <p class="mb-4 recuo">— É a sua neta, Chapeuzinho Vermelho — falou o Lobo, disfarçando a voz. <br><br>— Trouxe para a senhora um bolo e um potezinho de manteiga, que minha mãe mandou.</p>
            </div>
        </div>
		<div class="row mb-4">

          <div class="col-12 col-md-8 text-justify font-s-11"> 
		  <p class="mb-4 recuo"><br>A boa avozinha, que estava acamada porque não se sentia muito bem, gritou-lhe:<br>— Levante a aldraba, que o ferrolho sobe.<br>O Lobo fez isso e a porta se abriu. Ele lançou-se sobre a boa mulher e mordeu seu pescoço, fazendo ela sangrar até secar, separando assim seu sangue em uma garrafa de vinho e sua carne em um ensopado.<br> <br> Algum tempo depois Chapeuzinho Vermelho chega na casa de sua avó e bate na porta: toc, toc. <br>  — Quem é? — pergunta o Lobo afinando sua voz para enganar a menina.<br> — É a sua netinha Chapeuzinho Vermelho — disse a menina estranhando um pouco a voz rouca, mas ela atribuiu isso ao fato dela estar adoentada. — Trouxe para a senhora um bolo e um potezinho de manteiga, que minha mãe mandou.</p> 
		  
		  
		  </div>
          <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/img40.jpg);width:100%;height:100%;"></div></div>
            
        </div>
		 <div class="row mb-4">

            <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/img29.jpg);width:100%;height:100%;background-position: center 70%;"></div></div>
            <div class="col-12 col-md-8 text-justify font-s-11"> 
			   <p class="mb-4 recuo">Logo o Lobo repetiu o que a boa avozinha disse para ele:</p>
			   <p class="mb-4 recuo">— Levante a aldraba, que o ferrolho sobe.</p>
			   <p class="mb-4 recuo">Chapeuzinho Vermelho fez isso e entrou na casa, o Lobo estava escondido de baixo das cobertas da avó da menina e vendo-a entrar disse:</p>
			   <p class="mb-4 recuo">— Ponha o bolo e o potezinho sobre a mesa e coma um pouco do ensopado que fiz e beba um pouco do vinho.</p>
              <p class="mb-4 recuo"> Depois de se alimentar com a sopa e o vinho preparado com os restos de sua avó o Lobo fez um pedido para ela:</p>
              <p class="mb-4 recuo">— Se deite nua aqui na minha cama, pois estou com frio e preciso que você me aqueça. </p>
			  <p class="mb-4 recuo">A menina sem desconfiar do pedido estranho, faz exatamente isso, despiu-se e deitou ao lado do Lobo, que em gargalhadas devora Chapeuzinho Vermelho.</p>
		  
		   </div>
        </div>
        <center><h1 class="font-antic mt-3 mb-5">Fim</h1></center>

        <?php if(!isset($_SESSION['id_user'])){

        echo '<div class="alert alert-info  mt-3 mb-5 text-justify" role="alert">';
        echo 'Você está deslogado! para gerar um certificado é necessário <a href="Login.php" class="alert-link">fazer login ou cadastrar-se primeiro.</a>';
        echo '</div>';

        } else{
          echo '<center><a href="gerar_cert.php?post=5" target="_blank"><button type="button" id="env" class="btn btn-color-blue-3 mt-0 mb-1 border border-color-blue-1 px-5 py-2">Gerar certificado</button></a></center>';
        }
        
        ?>
        

        <hr id="opniao" class="bg-invert mb-5 mt-5">

        <h1 class="text-center mt-5 mb-5 font-antic">Deixe sua opnião</h1>

        <?php


        if(isset($_SESSION['id_user'])){
          echo "<form id='formComent' name='formComent' action='inc/db_coment.php?post=5' method='post' class='mb-5'>";
          echo "<div class='form-group'>
          <label class='font-s-11' for='coment'>Digite seu comentário aqui <strong>".$_SESSION['nome']." ".$_SESSION['ltname'].".</strong> Você tem <span class='caracteres' style='color:green;'>600</span> caracteres restantes. <span id='replyText'></span></label>
          <textarea class='form-control' id='coment' name='coment' rows='5' style='resize: none' maxlength='600' required></textarea>
          </div>
          <span id='replySpan' style='display:none;'></span>";
          echo '<div id="alertShort" style="display:none;" class="alert alert-warning alert-dismissible fade show mb-0 mt-0" role="alert"><strong>Seu comentário é muito curto!</strong> Escreva ao menos 20 caracteres antes de enviar </div>
                <div class="form-group">
                  <center><button type="button" id="env" class="btn btn-color-green-2 mt-3 border border-color-green-1 px-5 py-2" onclick="valComent()">Enviar comentário</button></center>
                </div>';
          echo "</form>";
        }else{
          echo '<div class="alert alert-info mb-5 text-justify" role="alert">';
          echo 'Você está deslogado! para deixar um comentário é necessário <a href="Login.php" class="alert-link">fazer login ou cadastrar-se primeiro</a> antes de interagir com outros usuários.';
          echo '</div>';  
        }

        require_once 'inc/db_inc_coment.php';

        exibiComentario(5);

        ?>
        
        
          



        </div>





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