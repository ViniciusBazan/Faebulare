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

    <img src="<?php echo $conto.'JM_1.jpg' ?>" class="" style="width:100%;height:430px;object-fit: cover;object-position: center 42%;"> 

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
    
        <center><h1 class="font-antic mt-3 mb-2"> João e Maria </h1></center>
        <center><h3 class="font-antic mt-3 mb-5"> Nennillo e Nennella - Giambattista Basile - 1635 </h3></center>

        <p class="text-justify mb-4 font-s-11 recuo"><span class="font-london font-s-30 mr-2 px-3 border switch-cap text-white muda" style="line-height: 1;">A</span>i daquele que pensa em encontrar uma governanta para seus filhos dando-lhes uma madrasta! Ele apenas traz para sua casa a causa de sua ruína. Nunca houve uma madrasta que olhasse com benevolência para os filhos de outra pessoa; ou se por acaso alguém assim fosse encontrado, ela seria considerada um milagre e seria chamada de corvo branco. Mas, além de todos aqueles de quem você pode ter ouvido, vou agora lhe contar sobre outra, para ser adicionada à lista das madrastas sem coração, que você considerará bem merecedoras do castigo que ela comprou para si com dinheiro disponível.</p>
        <div class="row mb-4">

            <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/JM_5.png);width:100%;height:100%;"></div></div>
            <div class="col-12 col-md-8 text-justify font-s-11"> 
              <p class="mb-4 recuo">Era uma vez um bom homem chamado Jannuccio, que tinha dois filhos, Nennillo e Nennella, a quem amava tanto quanto sua própria vida. Mas tendo a Morte, com a lima fila do Tempo, cortado as grades da prisão da alma de sua esposa, ele tomou para si uma mulher cruel, que mal havia posto os pés em sua casa, ela começou a montar no cavalo alto, dizendo:</p> 
              <p class="mb-4 recuo"> "Vim aqui, de fato, para cuidar dos filhos de outras pessoas? Um belo trabalho que empreendi, para ter todos esses problemas e ser incomodado para sempre por um casal de pirralhos gritando! Quem dera eu tivesse quebrado o pescoço antes de vir a este lugar, ter comida ruim, bebida pior e não dormir à noite! Aqui está uma vida para levar! Certamente, vim como uma esposa, não como uma serva; mas devo encontrar um meio de me livrar dessas criaturas, ou me custou minha vida: melhor corar uma vez do que ficar pálido cem vezes; portanto, acabei com eles, pois estou decidido a mandá-los embora ou a sair de casa para sempre."</p>
            </div>

        </div>

        <div class="row mb-4">

            
          <div class="col-12 col-md-8 text-justify font-s-11"> <p class="mb-4 recuo">O pobre marido, que tinha alguma afeição por esta mulher, disse-lhe: "Calma, mulher! Não te zangues, porque o açúcar é caro; e amanhã de manhã, antes que o galo cante, vou tirar este aborrecimento para agradar vocês." <br> Então, na manhã seguinte, antes que a Aurora pendurasse a colcha vermelha na janela do Leste para arejá-la, Jannuccio pegou as crianças, uma por cada mão, e com um bom cesto cheio de coisas para comer no braço, conduziu-as para um bosque, onde um exército de choupos e faias mantinham as sombras sitiadas.<br> Então Jannuccio disse: "Meus filhinhos, fiquem aqui neste bosque, e comam e bebam alegremente; mas se vocês quiserem alguma coisa, sigam esta linha de cinzas que eu tenho espalhado enquanto avançávamos; esta será uma pista para guiá-los sair do labirinto e levá-lo direto para casa."</p> </div>
          <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/JM_2.jpg);width:100%;height:100%;"></div></div>
            

        </div>

        <p class="text-justify mb-4 font-s-11 recuo">Em seguida, dando um beijo em ambos, ele voltou chorando para sua casa. Mas na hora em que todas as criaturas, convocadas pelos condestáveis da Noite, pagam à Natureza a taxa do necessário repouso, as duas crianças começaram a ter medo de permanecer naquele lugar solitário, onde as águas de um rio, que agitava o impertinente pedras para obstruir seu curso, teriam assustado até mesmo um herói. Então eles foram lentamente ao longo do caminho das cinzas, e já era meia-noite quando chegaram a casa.</p>
        <p class="text-justify mb-4 font-s-11 recuo">Quando Pascozza, sua madrasta, viu as crianças, ela agiu não como uma mulher, mas uma fúria perfeita; chorando alto, torcendo as mãos, batendo os pés, bufando como um cavalo assustado e exclamando:<br><br>"Que bela obra é esta? Não há como livrar a casa dessas criaturas? É possível, marido, que você estão determinados a mantê-los aqui para atormentar minha própria vida? Vá, tire-os da minha vista! Não vou esperar o cacarejar dos galos e o cacarejar das galinhas; ou então, pode ter certeza de que amanhã de manhã irei embora para a casa dos meus pais, porque você não me merece. Não trouxe tantas coisas boas, apenas para ser feito escravo de crianças que não são minhas."</p>

        <div class="row mb-4">

            <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/JM_4.png);width:100%;height:100%;background-position: center 70%;"></div></div>
            <div class="col-12 col-md-8 text-justify font-s-11"> 
              <p class="mb-4 recuo">Pobre Jannuccio, que viu que as coisas estavam ficando muito quentes, imediatamente pegou os mais pequenos e voltou para o bosque; ao dar aos filhos outra cesta cheia de comida, disse-lhes: <br> <br> "Vejam, meus queridos, como esta minha esposa - que veio a minha casa para ser sua ruína e um prego em meu coração - os odeia; fica nesta floresta, onde as árvores, mais compassivas, te darão abrigo do sol; onde o rio, mais caridoso, te dará de beber sem veneno; e a terra, mais gentil, te dará um travesseiro de grama sem perigo . E quando você quiser comida, siga este pequeno caminho de farelo que eu fiz para você em linha reta, e você pode vir e buscar o que precisar."</p>
              <p class="mb-4 recuo">Dizendo isso, ele virou o rosto, para não se deixar ver chorar e desanimar as pobres criaturinhas.Depois de Nennillo e Nennella terem comido tudo o que havia na cesta, eles quiseram voltar para casa; mas ai! um asno - o filho do azar - havia comido todo o farelo espalhado no chão; assim, eles se perderam e vagaram desamparados na floresta por vários dias, alimentando-se de bolotas e castanhas que encontraram caídas no chão.</p>
            </div>
        </div>

        <p class="text-justify mb-4 font-s-11 recuo">Mas como o Céu sempre estende seu braço sobre os inocentes, veio por acaso um príncipe para caçar naquela floresta. Então Nennillo, ouvindo o latido dos cães, ficou tão assustado que se esgueirou até uma árvore oca; e Nennella saiu correndo a toda velocidade, e correu até sair da floresta e se encontrar na praia. Aconteceu que alguns piratas, que haviam pousado ali para buscar combustível, viram Nennella e a carregaram; e seu capitão a levou para casa com ele, onde ele e sua esposa, tendo acabado de perder uma menina, a tomaram como sua filha.</p>
		<p class="text-justify mb-4 font-s-11 recuo">Nesse ínterim, Nennillo, que se escondera na árvore, foi cercado pelos cães, que latiram tão furiosamente que o príncipe mandou descobrir a causa; e quando ele descobriu o lindo menino, que era tão jovem que ele não sabia quem eram seu pai e sua mãe, ele ordenou a um dos caçadores que o colocasse em sua sela e o levasse ao palácio real. Então, ele o educou com muito cuidado e instruiu-o em várias artes e, entre outras, ensinou-o a de escultor; de modo que, antes que se passassem três ou quatro anos, Nennillo se tornou tão especialista em sua arte que era capaz de esculpir um fio de cabelo.</p>
		<p class="text-justify mb-4 font-s-11 recuo">Mais ou menos nessa época, foi descoberto que o capitão do navio que levara Nennella para sua casa era um ladrão do mar, e o povo queria prendê-lo; mas, recebendo notificação oportuna dos escrivães nos tribunais, que eram seus amigos e a quem ele pagava, ele fugiu com toda a família. Foi decretado, entretanto, talvez pelo julgamento do Céu, que aquele que cometeu seus crimes no mar, no mar, deveria sofrer a punição deles; por ter embarcado em um pequeno barco, mal estava em mar aberto, veio uma tal tempestade de vento e tumulto das ondas, que o barco se virou e todos se afogaram, todos exceto Nennella, que não tinha participado os roubos do corsário, como sua esposa e filhos, escaparam do perigo; para então um grande peixe encantado.</p>
        
		  		  
		  

		<div class="row mb-4">

          <div class="col-12 col-md-8 text-justify font-s-11"> 
		  <p class="mb-4 recuo">A menina agora pensava que seus dias certamente haviam chegado ao fim, quando de repente ela encontrou algo que a surpreendeu dentro dos peixes: belos campos e belos jardins, e uma esplêndida mansão, com tudo que seu coração poderia desejar, na qual ela viveu como uma princesa. Em seguida, ela foi carregada rapidamente pelo peixe até uma rocha, onde por acaso o príncipe tinha vindo para escapar do calor escaldante do verão e desfrutar da brisa fresca do mar. E enquanto um grande banquete se preparava, Nennillo havia pisado em uma sacada do palácio na rocha para afiar algumas facas, orgulhando-se muito de ter conquistado honra em seu cargo. Quando Nennella o viu pela garganta do peixe, ela gritou alto: <br> <br> - Irmão, irmão, sua tarefa está cumprida, as mesas estão dispostas cada uma; <br> - Mas aqui no peixe devo sentar-me e suspirar, <br> - Oh irmão, sem você eu logo morrerei.</p> 
		  <p class="mb-4 recuo">Nennillo a princípio não deu atenção à voz, mas o príncipe, que estava em outra sacada e também a ouvira, virou-se na direção de onde vinha o som e viu o peixe. E quando ele ouviu novamente as mesmas palavras, ele ficou fora de si de espanto, e ordenou que vários servos tentassem de alguma forma pegar o peixe e puxá-lo para a terra.</p>
		  
		  </div>
          <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/JM_3.jpg);width:100%;height:100%;"></div></div>
            
        </div>
				
		
		
		<p class="text-justify mb-4 font-s-11 recuo"> Por fim, ouvindo as palavras "Irmão, irmão!" repetido continuamente, ele perguntou a todos os seus servos, um por um, se algum deles havia perdido uma irmã. E Nennillo respondeu que se lembrava, como um sonho, de ter tido uma irmã quando o príncipe o encontrou na floresta, mas que nunca mais tinha ouvido falar dela. Então o príncipe disse-lhe que se aproximasse do peixe e visse o que estava acontecendo, pois talvez essa aventura pudesse interessá-lo. </p>
		
		<p class="text-justify mb-4 font-s-11 recuo"> Assim que Nennillo se aproximou do peixe, ele ergueu a cabeça sobre a rocha e, abrindo a garganta com seis palmos de largura, Nennella saiu, tão bela que parecia uma ninfa em algum interlúdio, saiu daquele animal no encantamento de um mágico. E quando o príncipe lhe perguntou como tudo havia acontecido, ela lhe contou uma parte de sua triste história e o ódio de sua madrasta; mas não sendo capaz de lembrar o nome de seu pai nem de sua casa, o príncipe fez uma proclamação ser emitida, ordenando que quem tivesse perdido dois filhos, chamados Nennillo e Nennella, em um bosque, deveria vir ao palácio real, e ele iria receber notícias alegres deles. </p>
		
		<p class="text-justify mb-4 font-s-11 recuo"> Jannuccio, que durante todo esse tempo passara uma vida triste e desconsolada, acreditando que seus filhos haviam sido devorados por lobos, apressou-se agora com a maior alegria em procurar o príncipe e lhe disse que havia perdido os filhos. E quando ele contou a história, como ele foi compelido a levá-los para a floresta, o príncipe deu-lhe uma boa repreensão, chamando-o de estúpido por permitir que uma mulher colocasse o calcanhar em seu pescoço até que ele fosse levado para mandar embora duas joias como seus filhos. Mas depois de ter quebrado a cabeça de Jannuccio com essas palavras, aplicou nela o emplastro da consolação, mostrando-lhe os filhos, que o pai abraçou e beijou por meia hora sem se dar por satisfeito. </p>
		
		
			
		
		 <div class="row mb-4">

            <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/JM_6.png);width:100%;height:100%;background-position: center 70%;"></div></div>
            <div class="col-12 col-md-8 text-justify font-s-11"> 
              <p class="mb-4 recuo"> Então o príncipe o fez tirar o paletó e o vestiu como um senhor; e mandando chamar a mulher de Jannuccio, mostrou-lhe aquelas duas pepitas de ouro, perguntou-lhe o que merecia aquela pessoa que lhes fizesse mal e até colocasse em perigo a vida deles.</p>
              <p class="mb-4 recuo">E ela respondeu: "De minha parte, eu a colocaria em um barril fechado e a faria rolar montanha abaixo." <br> "Assim deve ser feito!" disse o príncipe. "A cabra deu uma cabeçada em si mesma. Rápido agora! Você passou a sentença, e deve sofrer, por ter gerado tamanha malícia a esses lindos enteados."</p>
		  
		   </div>
        </div>
		
		
		
		
		<p class="text-justify mb-5 font-s-11 recuo">Então ele deu ordens para que a sentença fosse executada imediatamente. Então, escolhendo um senhor muito rico entre seus vassalos, deu-lhe Nennella por esposa, e a filha de outro grande senhor para Nennillo; permitindo-lhes viver o suficiente, com seu pai, de modo que eles não desejassem nada no mundo. Mas a madrasta, encerrada no barril e excluída da vida, continuou a chorar através do buraco enquanto teve fôlego: <br><br> - Àquele que o mal busca, o mal cairá; <br> - Chega uma hora que recompensa a todos.</p>

        <center><h1 class="font-antic mt-3 mb-5">Fim</h1></center>

        <?php if(!isset($_SESSION['id_user'])){

        echo '<div class="alert alert-info  mt-3 mb-5 text-justify" role="alert">';
        echo 'Você está deslogado! para gerar um certificado é necessário <a href="Login.php" class="alert-link">fazer login ou cadastrar-se primeiro.</a>';
        echo '</div>';

        } else{
          echo '<center><a href="gerar_cert.php?post=7" target="_blank"><button type="button" id="env" class="btn btn-color-blue-3 mt-0 mb-1 border border-color-blue-1 px-5 py-2">Gerar certificado</button></a></center>';
        }
        
        ?>
        

        <hr id="opniao" class="bg-invert mb-5 mt-5">

        <h1 class="text-center mt-5 mb-5 font-antic">Deixe sua opnião</h1>

        <?php


        if(isset($_SESSION['id_user'])){
          echo "<form id='formComent' name='formComent' action='inc/db_coment.php?post=7' method='post' class='mb-5'>";
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

        exibiComentario(7);

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