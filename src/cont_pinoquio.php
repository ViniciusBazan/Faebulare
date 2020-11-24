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

    <img src="<?php echo $conto.'img13.jpg' ?>" class="" style="width:100%;height:430px;object-fit: cover;object-position: center 20%;"> 

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
    
        <center><h1 class="font-antic mt-3 mb-2"> Pinóquio </h1></center>
        <center><h3 class="font-antic mt-3 mb-5"> Le avventure di pinocchio - Carlo Collodi - 1880</h3></center>

        <p class="text-justify mb-4 font-s-11 recuo"><span class="font-london font-s-30 mr-2 px-3 border switch-cap text-white muda" style="line-height: 1;">G</span>epeto, um carpinteiro conhecido em sua cidade, ganha um presente de um antigo amigo, um pedaço de madeira falante. Ambicioso, ele decidiu que faria uma marionete mágica e rodaria o mundo ganhando centenas de euros a cada espetáculo. Primeiro ele esculpiu os olhos e pode ver que se mexiam, o observando curiosamente, depois desenhou um nariz que não parava de crescer, uma boca que imediatamente formou um sorriso debochado cheio de dentes.<br><br></p>
        <div class="row mb-4">

            <div class="col-12 col-md-4" ><div class="box-left muda bg-img imgc-size" style="background-image: url(img/cont/img45.jpg);width:100%;height:100%;"></div></div>
            <div class="col-12 col-md-8 text-justify font-s-11"> 
              <p class="mb-4 recuo">Por fim, Gepeto esculpiu seus braços e pernas, mas assim que levantou, Pinóquio fugiu porta a fora, forçando Gepeto correr desesperadamente atrás dele. Como a cidade era pequena, rapidamente todos puderam ver a grande bagunça que o boneco falante havia feito e, acreditando que ele era apenas um brinquedo indefeso, levaram Gepeto preso. Após o ocorrido, Pinóquio decidiu voltar para casa e lá encontrou um Grilo Falante que começou a lhe colocar juízo, disse que deveria estudar e ser alguém, deixar de ser teimoso ou acabaria se tornando um burro, assim tornando aquilo uma maldição.</p> 
              <p class="mb-4 recuo">     Furioso, o boneco pegou um martelo extremamente pesado e jogou no Grilo, o assassinando imediatamente. Depois disso lá ele ficou vivendo por algum tempo, quieto, até que Gepeto foi solto e voltou para seu lar. Ao chegar lá, encontrou Pinóquio arrependido pelos seus erros e até desejando frequentar a escola regularmente.<br><br> </p>
            </div>

        </div>

        <div class="row mb-4">

            
          <div class="col-12 col-md-8 text-justify font-s-11"> <p class="mb-4 recuo">Gepeto concordou, lhe fez uma bela roupa, deu algum dinheiro e o mandou a escola no dia seguinte. Mas é claro que o travesso boneco não faria o que prometeu, na verdade ele preferiu assistir a um teatro de marionetes, porém lá ele logo foi reconhecido pelos outros bonecos e seus donos que, imediatamente, viram nele a chance de sucesso.<br>Pinóquio percebeu o que estava acontecendo ali e saiu correndo imediatamente até que acabou encontrando um gato e uma raposa que moravam próximos a sua casa e sabiam que o boneco carregava dinheiro consigo. Eles decidiram que iriam rouba-lo, então Pinóquio mais uma vez teve que fugir desesperadamente e acabou encontrando outro grupo de interesseiros que acabou o sequestrando, eles o mataram enforcado com suas próprias cordas em uma árvore.</p> </div>
          <div class="col-12 col-md-4" ><div class="box-right muda bg-img imgc-size" style="background-image: url(img/cont/img14.jpg);width:100%;height:100%;"></div></div>
            

        </div>
		<br>
		<center><h1 class="font-antic mt-3 mb-2"> Curiosidades </h1></center>
		
              <p class="mb-4 recuo">  O conto do Pinóquio começa a ser produzido em 1880, período em que a 2ª revolução industrial estava a pleno vapor, essa história foi escrita pela primeira vez por Carlo Collodi, possuindo duas versões, sendo a primeira mais obscura e publicada no jornal infantil Italiano Giornale Per I Bambini, sua segunda versão foi exibida no mês seguinte a sua publicação devido a critica dos leitores desse jornal, visto que a estória possuía um final trágico.</p> 
              <p class="mb-4 recuo">Seu nome em italiano, pinocchio, quer dizer “pinhão”, trazendo a ideia da vida ainda em formação. A trajetória de Pinóquio mostra que ele comete erros constantemente, mas ele tem a vontade de concertar seus erros para assim se transformar em um menino de verdade.</p>
			  <p class="mb-4 recuo"> A história de Pinóquio é repleta de moral, mas é diferente das fábulas, que também trazem um ensinamento sempre. Nas fábulas, os personagens não são sempre avisados de seus erros e pagam pelo que fizeram no final. Portanto pode-se dizer que essa estória é uma fábula às avessas, já que a marionete erra varias vezes, mas pode sempre consertar seus erros</p>
			  
            </div>

        </div>
		<div class="container-fluid wt-geral">
        <center><h1 class="font-antic mt-3 mb-5">Fim</h1></center>

        <?php if(!isset($_SESSION['id_user'])){

        echo '<div class="alert alert-info  mt-3 mb-5 text-justify" role="alert">';
        echo 'Você está deslogado! para gerar um certificado é necessário <a href="Login.php" class="alert-link">fazer login ou cadastrar-se primeiro.</a>';
        echo '</div>';

        } else{
          echo '<center><a href="manual.php" target="_blank"><button type="button" id="env" class="btn btn-color-blue-3 mt-0 mb-1 border border-color-blue-1 px-5 py-2 mr-2">Como imprimir</button></a>';
          echo '<a href="gerar_cert.php?post=10" target="_blank"><button type="button" id="env" class="btn btn-color-blue-3 mt-0 mb-1 border border-color-blue-1 px-5 py-2">Gerar certificado</button></a></center>';
        }
        
        ?>
        

        <hr id="opniao" class="bg-invert mb-5 mt-5">

        <h1 class="text-center mt-5 mb-5 font-antic">Deixe sua opnião</h1>

        <?php


        if(isset($_SESSION['id_user'])){
          echo "<form id='formComent' name='formComent' action='inc/db_coment.php?post=10' method='post' class='mb-5'>";
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

        exibiComentario(10);

        ?>
        </div>
        
          



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