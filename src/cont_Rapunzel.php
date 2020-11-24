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

    <img src="<?php echo $conto.'Rapunzel_5.jpg' ?>" class="" style="width:100%;height:430px;object-fit: cover;object-position: center 20%;"> 

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
    
        <center><h1 class="font-antic mt-3 mb-2"> Rapunzel </h1></center>
        <center><h3 class="font-antic mt-3 mb-5"> Giambattista Basile - Petrosinella - 1634 </h3></center>

        <p class="text-justify mb-4 font-s-12"><span class="font-london font-s-30 mr-2 px-3 border switch-cap text-white muda" style="line-height: 1;">E</span>ra uma vez uma mulher chamada Pascadozzia. Estando um dia diante de uma janela que dava para o jardim de uma ogra, viu um lindo canteiro de salsa, pela qual sentiu tanta saudade que quase desmaiou; e sendo incapaz de resistir ao seu desejo, ela observou até que a ogra saiu, e então arrancou um punhado dela.</p>
        
              <p class="mb-4 text-justify font-s-12">Mas quando a ogra voltou para casa e ia cozinhar seu guisado, ela descobriu que alguém tinha estado na salsa e disse: </p> 
              <p class="mb-4 text-justify font-s-12">A pobre mulher desceu repetidas vezes ao jardim, até que uma manhã a ogra a encontrou e, furiosa, exclamou: </p>
			  <p class="mb-4 text-justify font-s-12">- Afinal, eu te peguei, seu ladrão, seu malandro? Prithee, você paga o aluguel do jardim, que você vem desta maneira atrevida e rouba minhas plantas? Pela minha fé, mas eu vou fazer você fazer penitência! </p>
			  <p class="mb-4 text-justify font-s-12">A pobre Pascadozzia, apavorada, começou a dar desculpas, dizendo que nem por gula nem por desejo de fome fora tentada pelo demônio a cometer essa falta, mas temia que a criança nascesse com uma safra de salsa. em seu rosto; e ela acrescentou que a ogra deveria antes agradecê-la, por não ter dado suas feridas nos olhos.</p>
            
        <div class="row mb-4">


          <div class="col-12 col-md-8 text-justify font-s-12"> 
		              <p class="mb-4 text-justify">-  Que azar para mim, mas vou pegar esse patife de dedo comprido e fazê-lo se arrepender, e ensiná-lo à sua custa que cada um deve comer do seu próprio prato, e não se meter com as xícaras dos outros. </p>
			  
		  <p class="mb-4">- As palavras são apenas vento, respondeu a ogra; </p> 
		   <p class="mb-4">- Não vou ser pego com essa tagarelice; você fechou o balanço da vida, a menos que prometa me dar o filho que você tiver, menina ou menino, seja ele qual for.</p>
            <p class="mb-4">A pobre Pascadozzia, para escapar do perigo em que se encontrava, jurou com as mãos cumprir a promessa. Portanto, a ogra a soltou. Mas quando chegou a sua hora, Pascadozzia deu à luz uma menina, tão bonita que era uma alegria olhar, que, por ter um belo ramo de salsa no seio, se chamava Salsa.</p> 
			<p class="mb-4">E a garotinha crescia dia após dia, até que ela tinha sete anos de idade sua mãe a mandou para a escola; e toda vez que ela ia pela rua e encontrava a ogra, a velha lhe dizia: </p>  </div>
          <div class="col-12 col-md-4" ><div class="box-right muda bg-img imgc-size" style="background-image: url(img/cont/Rapunzel_8.jpg);width:100%;height:100%;"></div></div>
           

        </div>

        <p class="text-justify mb-4 font-s-12">- Diga a sua mãe para se lembrar da promessa.</p>
        <p class="text-justify mb-4 font-s-12">E ela repetia esta mensagem tantas vezes, que a pobre mãe, não tendo mais paciência para ouvir a mesma história, disse um dia a Salsa: </p>

        <div class="row mb-4">

            <div class="col-12 col-md-4" ><div class="box-left muda bg-img imgc-size" style="background-image: url(img/cont/Rapunzel_3.jpeg);width:100%;height:100%;background-position: center 40%;"></div></div>
            <div class="col-12 col-md-8 text-justify font-s-12"> 
              <p class="mb-4">-Se você encontrar a velha como sempre, e ela te lembrar da promessa odiosa , responda a ela, 'Pegue!' </p>
              <p class="mb-4">Quando Parsley, que não sonhava com doenças, encontrou a ogra novamente e a ouviu repetir as mesmas palavras, ela respondeu inocentemente como sua mãe lhe dissera; então a ogra, agarrando-a pelos cabelos, levou-a para um bosque onde o sol nunca entrava. Em seguida, ela colocou a pobre menina em uma torre, que ela fez surgir com sua arte, e que não tinha portão nem escada, mas apenas uma janelinha, pela qual ela subia e descia por meio do cabelo de Salsa, que era muito longo, como o marinheiro é usado para subir e descer o mastro de um navio.</p>
              <p class="mb-4">Ora, aconteceu um dia, quando a ogra havia deixado a torre, que Parsley colocou a cabeça para fora da janelinha e soltou os cabelos ao sol; e o filho de um príncipe que passava viu essas duas bandeiras douradas, que convidavam todas as almas a se alistarem sob o estandarte do amor; e vendo com espanto no meio daquelas ondas brilhantes o rosto de uma sereia, que encantava todos os corações, ele se apaixonou desesperadamente por tão maravilhosa beleza; e enviando-lhe um memorial de suspiros, ela decretou recebê-lo em favor.</p>
			  <p class="mb-4">As coisas correram tão bem com o príncipe, que logo houve acenos de cabeça e beijos de mãos, agradecimentos e ofertas, esperanças e promessas, palavras suaves e elogios. E quando isso continuou por vários dias, Salsa e o príncipe tornaram-se tão íntimos que marcaram um encontro e concordaram que deveria ser à noite, e que Salsa deveria dar à ogra um pouco de suco de papoula e puxar o príncipe com suas tranças. Assim, quando chegou a hora marcada, o príncipe foi até a torre, onde Salsa, deixando cair o cabelo a um determinado sinal, agarrou-o com as duas mãos e gritou:</p>
			  <p class="mb-4">- Puxa!</p>
              <p class="mb-4"> E quando ele foi puxado, ele rastejou pela pequena janela para a câmara.</p>
			</div>	
        </div>
           
		   <div class="row mb-4">

            <div class="col-12 col-md-8 text-justify font-s-12"> 
              
              
			  <p class="mb-4">Na manhã seguinte, bem cedo, o príncipe desceu pela mesma escada, para voltar para casa. E tendo repetido essas visitas muitas vezes, uma fofoca da ogra, que estava para sempre bisbilhotando coisas que não lhe diziam, e metendo o nariz em todos os cantos, descobriu o segredo e disse à ogra para estar no vigia, pois aquela Salsa foi cortejada por um jovem.</p>
			  <p class="mb-4">A ogra agradeceu à fofoqueira pela informação e disse que tomaria muito cuidado para parar na estrada; e quanto a Salsa, era impossível para ela escapar, pois ela havia lançado um feitiço sobre ela, de modo que, a menos que ela tivesse em sua mão as três nozes que estavam em uma viga da cozinha, seria trabalho perdido tentar afastar-se.</p>
			 
		
			  
			  
			  
			</div>
			<div class="col-12 col-md-4" ><div class="box-right muda bg-img imgc-size" style="background-image: url(img/cont/Rapunzel_2.png);width:100%;height:100%;background-position: center 10%;"></div></div>
        </div>
		 <p class="text-justify mb-4 font-s-12">Enquanto conversavam assim, Parsley, que estava com os ouvidos bem abertos e suspeitava da fofoca, ouviu tudo o que se passava. E quando a noite espalhou suas vestes negras, e o príncipe apareceu como de costume, ela o fez subir nas vigas e encontrar as nozes, sabendo muito bem que efeito elas teriam, já que ela havia se encantado com a ogra. Então, tendo feito uma escada de corda, os dois desceram ao chão, puseram-se nos calcanhares e dispararam em direção à cidade.</p>
		<p class="text-justify mb-4 font-s-12">Mas a fofoca acontecendo ao vê-los sair, deu um grande alô, e começou a gritar e fazer tanto barulho que a ogra acordou; e vendo que Salsa tinha fugido, desceu pela mesma escada, que estava presa à janela, e saiu correndo atrás dos amantes, que, ao vê-la vindo em seus calcanhares mais rápido do que um cavalo solto, se entregaram por perdido. Mas Salsa, lembrando-se das nozes, rapidamente jogou uma no chão, e eis! instantaneamente um bulldog da Córsega começou, - uma fera terrível! - que com as mandíbulas abertas e latindo alto voou para a ogra como se fosse engoli-la de uma só vez. Mas a velha, que era mais astuta e rancorosa que o diabo, meteu a mão no bolso e, tirando um pedaço de pão, deu-o ao cão, o que o fez pendurar o rabo e acalmar a sua fúria.</p>
		<p class="text-justify mb-4 font-s-12">Então ela se virou para correr atrás dos fugitivos novamente; mas Salsa, vendo-a se aproximando, jogou a segunda noz-de-galha no chão, e eis! levantou-se um leão feroz que, açoitando a terra com o rabo, sacudindo a crina e abrindo as mandíbulas a um metro de distância, estava se preparando para matar a ogra; quando, voltando rapidamente, ela arrancou a pele de um burro que pastava no meio de uma campina e correu para o leão, que, imaginando ser um verdadeiro asno, ficou com tanto medo que fugiu o mais rápido que pôde.</p>
		<p class="text-justify mb-4 font-s-12">A ogra, tendo saltado este segundo fosso, voltou-se novamente para perseguir os pobres amantes, que, ouvindo o barulho dos seus calcanhares e vendo a nuvem de pó que se elevava ao céu, conjeturaram que ela voltaria. Mas a velha, que a todo momento temia que o leão a perseguisse, não havia arrancado a pele do asno; e quando Parsley jogou no chão a terceira noz-de-galha, surgiu um lobo que, sem dar tempo à ogra para pregar uma nova peça, a devorou exatamente como ela estava, na forma de um asno.</p>
		<p class="text-justify mb-4 font-s-12">Assim, os amantes, agora livres do perigo, seguiram seu caminho vagarosa e silenciosamente para o reino do príncipe, onde, com o livre consentimento de seu pai, ele tomou Salsa por esposa; e assim, depois de todas essas tempestades do destino, eles experimentaram a verdade, que uma hora no porto, o marinheiro liberta dos medos, esquece as tempestades de cem anos.</p>
        <p class="text-justify mb-4 font-s-12">A história de Zeza foi ouvida com tanto prazer até o fim que, se tivesse continuado por mais uma hora, o tempo teria aparecido apenas um momento.</p>
        <center><h1 class="font-antic mt-3 mb-5">Fim</h1></center>

        <?php if(!isset($_SESSION['id_user'])){

        echo '<div class="alert alert-info  mt-3 mb-5 text-justify" role="alert">';
        echo 'Você está deslogado! para gerar um certificado é necessário <a href="Login.php" class="alert-link">fazer login ou cadastrar-se primeiro.</a>';
        echo '</div>';

        } else{
          echo '<center><a href="gerar_cert.php?post=11" target="_blank"><button type="button" id="env" class="btn btn-color-blue-3 mt-0 mb-1 border border-color-blue-1 px-5 py-2">Gerar certificado</button></a></center>';
        }
        
        ?>
        

        <hr id="opniao" class="bg-invert mb-5 mt-5">

        <h1 class="text-center mt-5 mb-5 font-antic">Deixe sua opnião</h1>

        <?php


        if(isset($_SESSION['id_user'])){
          echo "<form id='formComent' name='formComent' action='inc/db_coment.php?post=11' method='post' class='mb-5'>";
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

        exibiComentario(11);

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