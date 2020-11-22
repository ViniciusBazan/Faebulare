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

    <img src="<?php echo $conto.'img21.jpg' ?>" class="" style="width:100%;height:430px;object-fit: cover;object-position: center 42%;"> 

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
    
        <center><h1 class="font-antic mt-3 mb-2"> O Gato de Botas </h1></center>
        <center><h3 class="font-antic mt-3 mb-5"> Charles Perrault</h3></center>

        <p class="text-justify mb-4 font-s-11 recuo"><span class="font-london font-s-30 mr-2 px-3 border switch-cap text-white muda" style="line-height: 1;">E</span>ra uma vez um moleiro que, ao morrer, deixou como herança para os seus três filhos todos os seus bens, que consistiam em um moinho, um burro e um gato. A divisão foi logo feita. Não foram chamados para fazê-la notários ou advogados, que acabariam fazendo desaparecer em pouco tempo o pequeno patrimônio. O filho mais velho ficou com o moinho, o segundo ficou com o burro e o pobre do caçula teve de se contentar com o gato, naturalmente muito aborrecido por ter de se contentar com um quinhão tão pequeno. <br>- Os meus irmãos – disse ele – vão poder ganhar a vida honestamente, trabalhando em conjunto. Eu, porém, depois de comer meu gato e fazer um chinelo com a sua pele, vou ter de morrer de fome. </p>
        <div class="row mb-4">

            <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/img19.jpeg);width:100%;height:100%;"></div></div>
            <div class="col-12 col-md-8 text-justify font-s-11"> 
              <p class="mb-4 recuo">O gato que ouvira a lamúria do dono, embora sem parecer que estivesse ouvindo, disse-lhe, com ar muito sério, muito compenetrado:</p> 
              <p class="mb-4 recuo"> - Não te preocupes, meu dono. Nada mais precisarás fazer do que me dar um saco e um par de botas, e verás que não foste prejudicado na partilha.</p>
			  <p class="mb-4 recuo"> Embora sem acreditar muito nessa promessa, o jovem herdeiro não a rejeitou de todo, lembrando-se de como aquele gato era esperto em suas manobras para pegar ratos, ora se pendurando com o corpo muito reto, ora estendendo no chão, fingindo-se de morto. Resolveu experimentar.</p>
            </div>

        </div>

        <div class="row mb-4">

            
          <div class="col-12 col-md-8 text-justify font-s-11"> <p class="mb-4 recuo">Logo que recebeu o que pedira, o Gato calçou as botas, pôs o saco nas costas e foi para uma clareira do bosque onde sempre havia muitos coelhos. Lá chegando, deitou-se, fingindo que estava morto e havendo antes deixado o saco aberto ao seu lado, tendo dentro muito farelo e algumas cenouras. E lá ficou esperando que algum coelhinho mais inocente, pouco familiarizado com as maldades do mundo, se sentisse atraído pelas iguarias e entrasse dentro do saco. E, de fato, não demorou muito que um coelhinho bem gordinho caísse na armadilha, e mais do que depressa o Gato fechou o saco, pegou o coelho, matou-o sem dó nem piedade.
		  Muito orgulhoso com o seu feito, Mestre gato foi ao palácio do Rei e pediu uma audiência. Conduzido aos aposentos reais, fez uma profunda reverencia ao Rei.</p> </div>
          <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/img22.jpg);width:100%;height:100%;"></div></div>
            

        </div>

        <p class="text-justify mb-4 font-s-11 recuo">- Majestade – disse – aqui está um coelho selvagem que meu senhor, o Marquês de Carabás (um nome que ele inventou na hora) me ordenou que oferecesse, respeitosamente, como homenagem, a Vossa Majestade.</p>
        <p class="text-justify mb-4 font-s-11 recuo">- Dize ao teu senhor que agradeço e que fiquei muito satisfeito com o presente – disse o rei.
        No dia seguinte, o gato escondeu-se em um trigal, onde, usando o mesmo truque da véspera, e convidou o portador a beber à sua saúde.<br><br>Nos dois ou três meses seguintes, o Gato continuou a levar ao rei, como presentes, peças de caça supostamente abatidas pelo suposto Marquês de Carabás. E, certo dia, sabendo que o Rei ia passear na margem do rio, em companhia da filha, a princesa mais bela do mundo, o Gato disse ao seu dono:<br>- Se seguires o meu conselho, a fortuna estará feita. Vai tomar banho no rio, no ponto que eu indicar, e deixa o resto por minha conta.</p>

        <div class="row mb-4">

            <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/img31.jpg);width:100%;height:100%;background-position: center 70%;"></div></div>
            <div class="col-12 col-md-8 text-justify font-s-11"> 
              <p class="mb-4 recuo">O Marquês de Carabás seguiu o conselho do Gato de Botas, embora sem saber o que ele realmente pretendia fazer. Enquanto estava se banhando, o Rei passou, e o Gato se pôs a gritas com toda a força de que dispunha:<br> <br> - Socorro! Socorro! Meu Senhor, o Marquês de Carabás está se afogando!<br>Ouvindo os gritos, o rei olhou pela janela e, reconhecendo o Gato que já tantas vezes lhe oferecera peças de caça, mandou a carruagem parar e ordenou aos homens de sua escolta que fossem imediatamente socorrer o Marquês de Carabás. Enquanto os guardas tiravam do rio o pobre Marquês, o Gato aproximou-se do coche real e contou ao Rei que, enquanto o Marquês de Carabás se encontrava no rio, surgiram alguns ladrões que furtaram as suas roupas, e fugiram sem serem apanhados. (Na verdade, o próprio Gato de Botas escondera a roupa de seu dono do meio de umas pedras).</p>
              <p class="mb-4 recuo">O Rei, imediatamente, mandou um de seus homens ao palácio, a fim de buscar as melhores roupas para o Senhor Marquês de Carabás. E quando o Marquês se apresentou, metido nos ricos trajes que haviam sido trazidos, e, sendo ele próprio, um jovem robusto e bonito, estava realmente muito mais parecido com um nobre do que com um simples filho de moleiro. Causou ótima impressão ao Rei, e principalmente, à filha do Rei. E, na verdade, bastou o jovem Marquês dirigir-lhe uns dois ou três olhares muito respeitosos, mas também bastante ternos, para que a princesa ficasse loucamente apaixonada por ele.</p>
            </div>
        </div>

        <p class="text-justify mb-4 font-s-11 recuo">O Rei fez questão que ele entrasse no coche e os acompanhasse no passeio. O gato de Botas, satisfeitíssimo, vendo que os seus planos estavam sendo coroados de pleno êxito, saiu correndo, a toda velocidade, na frente do coche e, vendo mais adiante, um grupo de camponeses ceifando um trigal, gritou-lhes:</p>
		<p class="text-justify mb-4 font-s-11 recuo">- Se não disserdes ao Rei que todas estas terras pertencem ao Marquês de Carabás, sereis todos despedaçados, transformados em carne picadinha!<br> Ao passar por ali, o Rei não deixou de perguntar aos ceifeiros que era o dono daquelas terras.<br>
        - Pertencem ao Senhor Marquês de Carabás! – responderam todos, em uníssono, pois o Gato de Botas os amedrontara.</p>
		<p class="text-justify mb-4 font-s-11 recuo">E assim foi o Gato sempre correndo à frente do coche, e sempre obrigando os ceifeiros que encontrava a dizer ao Rei que a terra pertencia ao Merques de Carabás. O Rei ficou admiradíssimo diante da grande riqueza do Marquês de Carabás.<br>Sempre bem antes do coche, o Gato de Botas afinal chegou a um castelo cujo proprietário era um poderoso feiticeiro, o feiticeiro mais rico que já existira, pois todas as terras que o Rei atravessara antes lhe pertenciam. O Gato teve o cuidado de indagar quem era o feiticeiro e qual eram os seus poderes. Depois, pediu permissão para vê-lo, e, sendo admitido, disse-lhe que não poderia, tendo passado à frente de seu castelo, de apresentar-lhe os seus respeitos. O feiticeiro o recebeu civilmente.</p>
        
		  		  
		  

		<div class="row mb-4">

          <div class="col-12 col-md-8 text-justify font-s-11"> 
		  <p class="mb-4 recuo">- Informaram-me – disse o Gato – que sois capaz de vos transformar em qualquer espécie de animal, como, por exemplo, um leão ou um elefante.<br>- E sou mesmo! – replicou o feiticeiro, cheio de vaidade. – Quer ver? <br> E virou um leão, passando um susto tremendo no Gato que fugiu e escondeu-se num armário, embora as botas o atrapalhassem muito, e só saiu de lá quando o leão tornou a virar o feiticeiro. <br> - Realmente, é admirável – elogiou o Gato, ainda trêmulo. – Mas me disseram também que sois capaz de vos transformar em um bicho pequeno, como um camundongo, por exemplo. Nisso, para falar a verdade, não acreditei. <br> - Pois vais ver se não é verdade! – exclamou o feiticeiro, ferido em sua vaidade.</p> 
		  <p class="mb-4 recuo">E virou um camundongo que o Gato tratou de devorar imediatamente.</p>
		   
		  
		  </div>
          <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/img23.jpg);width:100%;height:100%;"></div></div>
            
        </div>
				
		
		
		<p class="text-justify mb-4 font-s-11 recuo"> Logo depois, o Rei, chegando diante do imponente castelo do feiticeiro, quis visitá-lo. O gato, ouvindo o barulho do coche, correu a receber o Rei. </p>
		
		<p class="text-justify mb-4 font-s-11 recuo"> - Seja Vossa Majestade bem-vindo ao Castelo do meu senhor Marquês de Carabás! – disse, fazendo uma reverência.<br>- O quê, Senhor Marquês! – exclamou o Rei. – Este magnífico castelo também lhe pertence? É esplêndido! Deixa-me ver o seu interior. </p>
		
		<p class="text-justify mb-4 font-s-11 recuo"> O Marquês ajudou a Princesa a descer da carruagem e acompanhou o Rei que subiu a esplêndida escadaria e chegou ao salão, onde estava sendo servido um magnífico banquete que o feiticeiro iria oferecer a alguns amigos, os quais, vendo que o Rei se encontrava dentro do castelo, desistiram de entrar. </p>
		
		
			
		
		 <div class="row mb-4">

            <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/img10.jpg);width:105%;height:80%;background-position: center 60%;"></div></div>
            <div class="col-12 col-md-8 text-justify font-s-11"> 
              <p class="mb-4 recuo"> O Rei ficou entusiasmadíssimo com a magnificência do Castelo e a riqueza do Marquês, e percebendo que o Marquês estava apaixonado pela Princesa e a Princesa por ele, não hesitou em dizer-lhe, durante o banquete, depois de já ter bebido uns cinco ou seis copos bem cheios:</p>
              <p class="mb-4 recuo">- Depende inteiramente de vós, Senhor Marquês de Carabás, tornar-vos, ou não, meu genro. <br> Nem é preciso dizer que o Marquês aceitou, com a devida reverência, e elevada honra que lhe oferecia o soberano. E o casamento logo se realizou.<br>O gato de Botas tornou-se um ilustre fidalgo e nunca mais caçou camundongos, a não ser de vez em quando, para se distrair um pouco.</p>
			  <p class="mb-4 recuo">Então ele deu ordens para que a sentença fosse executada imediatamente. Então, escolhendo um senhor muito rico entre seus vassalos, deu-lhe Nennella por esposa, e a filha de outro grande senhor para Nennillo; permitindo-lhes viver o suficiente, com seu pai, de modo que eles não desejassem nada no mundo. Mas a madrasta, encerrada no barril e excluída da vida, continuou a chorar através do buraco enquanto teve fôlego: </p>
			  <p class="mb-4 recuo">- Àquele que o mal busca, o mal cairá;</p>
			  <p class="mb-4 recuo">- Chega uma hora que recompensa a todos.</p>
		  
		   </div>
        </div>
        <center><h1 class="font-antic mt-3 mb-5">Fim</h1></center>

        <?php if(!isset($_SESSION['id_user'])){

        echo '<div class="alert alert-info  mt-3 mb-5 text-justify" role="alert">';
        echo 'Você está deslogado! para gerar um certificado é necessário <a href="Login.php" class="alert-link">fazer login ou cadastrar-se primeiro.</a>';
        echo '</div>';

        } else{
          echo '<center><a href="gerar_cert.php?post=8" target="_blank"><button type="button" id="env" class="btn btn-color-blue-3 mt-0 mb-1 border border-color-blue-1 px-5 py-2">Gerar certificado</button></a></center>';
        }
        
        ?>
        

        <hr id="opniao" class="bg-invert mb-5 mt-5">

        <h1 class="text-center mt-5 mb-5 font-antic">Deixe sua opnião</h1>

        <?php


        if(isset($_SESSION['id_user'])){
          echo "<form id='formComent' name='formComent' action='inc/db_coment.php?post=8' method='post' class='mb-5'>";
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

        exibiComentario(8);

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