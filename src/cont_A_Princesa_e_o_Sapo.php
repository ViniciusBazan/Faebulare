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

    <img src="<?php echo $conto.'img96.png' ?>" class="" style="width:100%;height:550px;object-fit: cover;object-position: center 35%;"> 

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
    
        <center><h1 class="font-antic mt-3 mb-2"> O Príncipe Sapo </h1></center>
        <center><h3 class="font-antic mt-3 mb-5"> Irmãos Grimm </h3></center>

        <p class="text-justify mb-4 font-s-11 recuo"><span class="font-london font-s-30 mr-2 px-3 border switch-cap text-white muda" style="line-height: 1;">H</span>á muito tempo, quando os desejos funcionavam, vivia um rei que tinha filhas muito belas. A mais jovem era tão linda que o sol, que já viu tantas maravilhas, ainda assim ficava atônito sempre que iluminava seu rosto. Perto do castelo do rei havia um bosque grande e escuro no qual havia um lagoa sob uma velha árvore. Quando o dia era quente, a princesinha ia ao bosque e se sentava junto à fonte. Quando se aborrecia, pegava sua bola de ouro, a jogava alto e recolhia. Essa bola era seu brinquedo favorito. Porém aconteceu que uma das vezes que a princesa jogou a bola, esta não caiu em sua mão, mas sim no solo, rodando e caindo direto na água. A princesa viu como ia desaparecendo na lagoa, que era profunda, tanto que não se via o fundo. Então começou a chorar, mais e mais forte, e não se consolava e tanto se lamenta, que alguém lhe diz:</p>
        <div class="row mb-4">

            <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/img91.jpg);width:100%;height:100%;"></div></div>
            <div class="col-12 col-md-8 text-justify font-s-11"> 
              <p class="mb-4 recuo">- Que te aflige princesa? Choras tanto que até as pedras sentiriam pena.</p> 
              <p class="mb-4 recuo"> Olhou o lugar de onde vinha a voz e viu um sapo colocando sua enorme e feia cabeça fora d’água.</p>
			  <p class="mb-4 recuo"> - Ah, és tu, sapo - disse - Estou chorando por minha bola de ouro que caiu na lagoa.</p>
			  <p class="mb-4 recuo"> - Calma, não chores -, disse o sapo – Posso ajudar-te, porém, que me darás se te devolver a bola?</p>
			  <p class="mb-4 recuo"> - O que quiseres, querido sapo - disse ela, - Minhas roupas, minhas pérolas, minhas jóias, a coroa de ouro que levo.</p>
			  <p class="mb-4 recuo"> O sapo disse: - Não me interessam tuas roupas, tuas pérolas nem tuas jóias, nem a coroa. Porém me prometes deixar-me ser teu companheiro e brincar contigo, sentar a teu lado na mesa, comer em teu pratinho de ouro, beber de teu copinho e dormir em tua cama; se me prometes isto eu descerei e trarei tua bola de ouro".</p>

            </div>

        </div>

        <div class="row mb-4">

            
          <div class="col-12 col-md-8 text-justify font-s-11"> <p class="mb-4 recuo"> - Oh, sim- disse ela - Te prometo tudo o que quiseres, porém devolve minha bola – mas pensou- Fala como um tolo. Tudo o que faz é sentar-se na água com outros sapos e coachar. Não pode ser companheiro de um ser humano.<br> O sapo, uma vez recebida a promessa, meteu a cabeça na água e mergulhou. Pouco depois voltou nadando com a boa na boa, e a lançou na grama. A princesinha estava encantada de ver seu precioso brinquedo outra vez, colheu-a e saiu correndo com ela.<br>- Espera, espera - disse o sapo – Leva-me. Não posso correr tanto como tu.
          Mas de nada serviu coachar atrás dela tão forte quanto pôde. Ela não o escutou e correu para casa, esquecendo o pobre sapo, que se viu obrigado a voltar à lagoa outra vez.</p> 
		  <p class="text-justify mb-4 font-s-11 recuo">No dia seguente, quando ela sentou à mesa com o rei e toda a corte, estava comendo em seu pratinho de ouro e algo veio arrastando-se, splash, splish splash pela escada de mármore. Quando chegou ao alto, chamou à porta e gritou:<br>- Princesa, jovem princesa, abre a porta.</p></div>
          <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/img95.gif);width:100%;height:100%;"></div></div>
            

        </div>

        
        <p class="text-justify mb-4 font-s-11 recuo">Ela correu para ver quem estava lá fora. Quando abriu a porta, o sapo sentou-se diante dela e a princesa bateu a porta. Com pressa, tornou a sentar, mas estava muito assustada. O rei se deu conta de que seu coração batia violentamente e disse: - Minha filha, por que estás assustada? Há um gigante aí fora que te quer levar? <br>- Ah não, respondeu ela - não é um gigante, senão um sapo.<br>- O que quer o sapo de ti?<br>- Ah querido pai, estava jogando no bosque, junto à lagoa, quando minha bola de ouro caiu na água. Como gritei muito, o sapo a devolveu, e porque insistiu muito, prometi-lhe que seria meu companheiro, porém nunca pensei que seria capaz de sair da água.</p>

        <div class="row mb-4">

            <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/img90.jpg);width:100%;height:100%;background-position: center 70%;"></div></div>
            <div class="col-12 col-md-8 text-justify font-s-11"> 
              <p class="mb-4 recuo">Entretanto o sapo chamou à porta outra vez e gritou:<br> <br> - Princesa, jovem princesa, abre a porta. Não lembras que me disseste na lagoa? Princesa, jovem princesa, abre a porta.<br>Então o rei disse:</p>
              <p class="mb-4 recuo">- Aquilo que prometeste, deves cumprir. Deixa-o entrar.Ela abriu a porta, o sapo saltou e a seguiu até sua cadeira. Sentou-se e gritou:<br>- Sobe-me contigo.</p>
			  <p class="text-justify mb-4 font-s-11 recuo">Ela o ignorou até que o rei lhe ordenou. Uma vez que o sapo estava na cadeira, quis sentar na mesa. Quando subiu, disse:<br>- Aproxima teu pratinho de ouro porque devemos comer juntos.</p>
		<p class="text-justify mb-4 font-s-11 recuo">Ela o vez, porém se via que não de boa vontade. O sapo aproveitou para comer, porém ela enjoava a cada bocado. Em seguida disse o sapo:<br>- Comi e estou satisfeito, mas estou cansado. Leva-me ao quarto, prepara tua caminha de seda e nós dois vamos dormir.</p>
            </div>
        </div>

        
		<p class="text-justify mb-4 font-s-11 recuo">A princesa começou a chorar porque não gostava da idéia de que o sapo ia dormir na sua preciosa e limpa caminha. Porém o rei se aborreceu e disse:- Não devias desprezar àquele que te ajudou quando tinhas problemas.<br></p>
        
		  		  
		  

		<div class="row mb-4">

          <div class="col-12 col-md-8 text-justify font-s-11"> 
		  <p class="mb-4 recuo">Assim, ela pegou o sapo com dois dedos, e a levou para cima e a deixou num canto. Porém, quando estava na cama o sapo se arrastou até ela e disse:<br>- Estou cansado, eu tambem quero dormir, sobe-me senão conto a teu pai.
		  <p class="mb-4 recuo">A princesa ficou então muito aborrecida. Pegou o sapo e o jogou contra a parede.<br>- Cale-se, bicho odioso – disse ela. Porém, quando caiu ao chão não era um sapo, e sim um príncipe com preciosos olhos. Por desejo de seu pai ele era seu companheiro e marido. Ele contou como havia sido encantado por uma bruxa malvada e que ninguém poderia livrá-lo do feitiço exceto ela. Também disse que no dia seguinte iriam todos juntos ao seu reino.</p>
		  <p class="mb-4 recuo"> Se foram dormir e na manhã seguinte, quando o sol os despertou, chegou uma carruagem puxada por 8 cavalos brancos com plumas de avestruz na cabeça. Estavam enfeitados com correntes de ouro. Atrás estava o jovem escudeiro do rei, Henrique. Henrique havia sido tão desgraçado quando seu senhor foi convertido em sapo que colocou três faixas de ferro rodeando seu coração, para se acaso estalasse de pesar e tristeza. </p>
		  
		  </div>
          <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/img89.jpg);width:100%;height:100%;"></div></div>
            
        </div>
				
		
		
		
		
		
		<p class="text-justify mb-4 font-s-11 recuo">A carruagem ia levar ao jovem rei a seu reino. Enrique os ajudou a entrar e subiu atrás de novo, cheio de alegria pela libertação, e quando já chegavam a fazer uma parte do caminho, o filho do rei escutou um ruído atrás de si como se algo tivesse quebrado. Assim, deu a volta e gritou:<br>
        - Henrique, o carro está se rompendo. <br> - Não amo, não é o carro. É uma faixa de meu coração, a coloquei por causa da minha grande dor quando eras sapo e prisioneiro do feitiço.<br>Duas vezes mais, enquanto estavam no caminho, algo fez ruído e cada vez o filho do rei pensou que o carro estava rompendo, porém eram apenas as faixas que estavam se desprendendo do coração de Henrique, porque seu senhor estava livre e era feliz.</p>
		
		 
		  
		   </div>
        </div>
	

        <center><h1 class="font-antic mt-3 mb-5">Fim</h1></center>

        <?php if(!isset($_SESSION['id_user'])){

        echo '<div class="alert alert-info  mt-3 mb-5 text-justify" role="alert">';
        echo 'Você está deslogado! para gerar um certificado é necessário <a href="Login.php" class="alert-link">fazer login ou cadastrar-se primeiro.</a>';
        echo '</div>';

        } else{
          echo '<center><a href="gerar_cert.php?post=3" target="_blank"><button type="button" id="env" class="btn btn-color-blue-3 mt-0 mb-1 border border-color-blue-1 px-5 py-2">Gerar certificado</button></a></center>';
        }
        
        ?>
        

        <hr id="opniao" class="bg-invert mb-5 mt-5">

        <h1 class="text-center mt-5 mb-5 font-antic">Deixe sua opnião</h1>

        <?php


        if(isset($_SESSION['id_user'])){
          echo "<form id='formComent' name='formComent' action='inc/db_coment.php?post=3' method='post' class='mb-5'>";
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

        exibiComentario(3);

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