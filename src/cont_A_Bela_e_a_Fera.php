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

    <img src="<?php echo $conto.'Fera_10.jpg' ?>" class="" style="width:100%;height:430px;object-fit: cover;object-position: center 15%;"> 

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
    
        <center><h1 class="font-antic mt-3 mb-2"> A Bela e a Fera </h1></center>
        <center><h3 class="font-antic mt-3 mb-5"> La Belle et la Bete - Madame de Villeneuve - 1740</h3></center>

        <p class="text-justify mb-4 font-s-11 recuo"><span class="font-london font-s-30 mr-2 px-3 border switch-cap text-white muda" style="line-height: 1;">N</span>o mundo das fadas, quanto mais velha for uma pessoa mais respeitável ela se torna, porém uma fada madura se apaixona por um rei e através do amor deles nasceu uma pequena menina. Esta é expulsa do mundo das fadas e deixam-na para ser criada por um comerciante. Em um pequeno vilarejo na França, a menina cresce com uma beleza inigualável, sendo apelidada de “Bela”. </p>
        
		
		<div class="row mb-4">

            <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/Fera_3.jpg);width:100%;height:100%;"></div></div>
            <div class="col-12 col-md-8 text-justify font-s-11"> 
			
			 <p class="mb-4 recuo">O pai de Bela perde todo seu dinheiro e é obrigado a mudar-se com toda sua numerosa família para uma modesta casa no campo. Bela é a única das irmãs que se adapta e se conforma com a mudança de status social. As outras cinco não aceitam o ocorrido e continuam vivendo sem trabalhar, sem ajudar em casa. Os seis irmãos ajudam o pai na plantação e Bela lida com os afazeres domésticos do dia a dia.</p>
              <p class="mb-4 recuo">Na mesma época, uma jovem rainha cria o seu mais lindo príncipe com todo o conforto que o palácio pode oferecer, porém ela deixa-o para as fadas cuidarem. Quando o príncipe está perto de completar seus dezessete anos, a fada que ficou encarregada de cuidar dele se afasta um por um tempo. Ao retornar algo incomum acontece, pois todo o sentimento maternal e de proteção que a fada possuía pelo príncipe se transforma em desejo carnal. A rainha intervém aos planos da fada de conquistar o príncipe e não permite a união, por causa de sua idade avançada. </p> 
              </div>

        </div>
		
		<p class="text-justify mb-4 font-s-11 recuo">Furiosa, a fada lança uma maldição em cima do rapaz que o torna feio e repugnante. Somente quando uma mulher aceitasse dormir com ele, por livre escolha, a maldição seria quebrada.</p>  
		<p class="text-justify mb-4 font-s-11 recuo">Com o passar do tempo o príncipe vira uma Fera rude e mal educada, até que um dia, após enfrentar uma terrível tempestade, o pai de Bela acaba encontrando seu castelo. A Fera permite que ele passe a noite, mas ao amanhecer ele precisará ir embora.</p> 
			
		

        <div class="row mb-4">

          <div class="col-12 col-md-8 text-justify font-s-11">
		  
		  
		  <p class="mb-4 recuo">Assim que o sol nasceu, o pai de Bela vai até o estábulo pegar o seu cavalo e ao sair do palácio encontra uma linda roseira e apanha uma para levar a sua filha mais nova. Assim que ele arranca a rosa do pé, a Fera surge da mata enfurecida pelo tamanho desrespeito e como punição decide que o comerciante deve morrer pelo seu ato. Porém sua decisão muda quando o homem comenta que a flor era para sua filha Bela.</p> 
		  <p class="mb-4 recuo">A Fera propõe um acordo com o comerciante: ele teria um mês para voltar e cumprir a sua punição, ou enviar a filha no seu lugar. Ao chegar em casa conta a família o ocorrido; todos os seus sete filhos e seis filhas ficam horrorizadas com o que tinha acontecido.</p>
		  <p class="mb-4 recuo">Bela não aceitou que o seu pai morresse por causa de seu pedido e decide fugir para o castelo, tomando seu lugar. Ao chegar lá, a Fera pergunta se ela veio por livre escolha e confirmando que sim, Bela é aceita. Mas, para Bela ficar no lugar do pai, ela teria que encontrar a Fera todas as noites no mesmo horário, para jantarem juntos.</p>
		  
		  
		  </div>
          <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/Fera_5.jpg);width:100%;height:100%;"></div></div>
            
        </div>
		

        <p class="text-justify mb-4 font-s-11 recuo">Com o tempo, Bela vai perdendo o medo da fera e ele percebendo, pergunta para ela se deseja dormir com ele. Assustada, o responde que não. A Fera saí do cômodo enfurecida, mas na mesma noite Bela passa a ter sonhos pecaminosos com um lindo príncipe, o qual não deseja mais acordar.</p> 
		
		
        <div class="row mb-4">
            <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/Fera_2.jpg);width:100%;height:100%;background-position: center 70%;"></div></div>
            <div class="col-12 col-md-8 text-justify font-s-11"> 
			
			<p class="mb-4 recuo">Na próxima noite, a fera a encontra novamente e faz a mesma pergunta: Bela quer dormir comigo? Ela novamente o responde que não. Depois de um tempo, Bela acaba se apaixonando pela Fera e aceita seu pedido. Após uma noite de amor inesquecível a Fera se transforma em um lindo homem.</p>
			<p class="mb-4 recuo">A rainha vendo que o seu filho voltou a ser humano passa a não aprovar a relação entre ele e Bela, devido a sua linhagem. <br> Porém, a fada velha revela o parentesco de Bela, que é fruto de uma noite de amor da fada com rei da Índia. Assim a rainha passa a aprovar o casamento dos dois; e eles vivem felizes para sempre.  </p>
	
              </div>
        </div>
		
		<br><br><center><h3> Curiosidades </h3></center><br>

		
        <p class="text-justify mb-4 font-s-11 recuo"> Este conto tem, de fato, uma parte de real. Petrus Gonsalvus era um homem que sofria de uma condição genética conhecida como hipertricose. O problema faz com que uma quantidade anormal de pelo cresça no corpo, incluindo a sua face.</p>
	
		  		  
		  

		<div class="row mb-4">

          <div class="col-12 col-md-8 text-justify font-s-11"> 
		  
		  <p class="mb-4 recuo">“Petrus Gonsalvus nasceu em 1537 numa das Ilhas Canárias e, logo jovem, foi capturado e colocado numa jaula. Tratado como um animal, ele foi enviado como presente para o Rei Henrique II, da França. Henrique não via Petrus como uma aberração e decidiu que ele deveria ser educado como um verdadeiro cavalheiro. Ele ganhou novas roupas, passou a comer refeições normais e aprendeu a ler e escrever em três línguas. A única condição do rei foi que o jovem utilizasse o seu nome de batismo, Pedro González, em sua forma latina: Petrus Gonsalvus.</p>
	 	  <p class="mb-4 recuo">Depois que o Rei Henrique II morreu, Gonsalvus se tornou propriedade da rainha viúva, Catherine de Medici. Dona do rapaz, que ainda era visto como algo menor que um humano por muita gente, ela decidiu fazer um experimento. Ela passou a questionar o que aconteceria se Gonsalvus se relacionasse com uma mulher comum e tivesse filhos. Será que a mulher poderia gerar novas pequenas feras?</p>
		
		  </div>
          <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/Fera_7.jpg);width:100%;height:100%;"></div></div>
            
        </div>
		
		 <p class="text-justify mb-4 font-s-11 recuo">A rainha organizou um casamento para Gonsalvus com uma jovem donzela filha de um servente da corte real. Somente no dia do casamento, Gonsalvus e sua esposa Catherine se conheceram pela primeira vez. A relação do casal deu origem a sete herdeiros e provou que a teoria da rainha estava certa. Dos sete filhos da união da Bela com a Fera, quatro possuíam a mesma condição genética do pai.</p>
		 
		    
			
	    <div class="row mb-4">
            <div class="col-12 col-md-4" ><div class="bg-img imgc-size" style="background-image: url(img/cont/Fera_8.jpg);width:100%;height:100%;background-position: center 70%;"></div></div>
            <div class="col-12 col-md-8 text-justify font-s-11"> 
			
			<p class="mb-4 recuo">A nova família viajou por vários países da Europa até que se fixou em Parma, na Itália, onde foram contratados (ou comprados) pelo Duque Ranuccio Farnese. O duque chegou a pagar por várias pinturas da família, mas nenhuma delas apresentava as crianças que nasceram normais, pois elas não eram consideradas interessantes. Por outro lado, as crianças que apresentavam pelos por todo o corpo foram exploradas pelo duque, sendo enviadas como presentes e servindo como animais de estimação para nobres e membros da alta classe europeia.</p>
			
              </div>
        </div>
		
		
								
		<p class="text-justify mb-5 font-s-11 recuo">O relacionamento de Petrus e Catherine durou por mais de 40 anos. Catherine morreu em 1623, supostamente anos depois da morte do marido. Não existem registros oficiais da morte de Petrus, possivelmente porque ele não era considerado um humano digno de um funeral comum. A última menção da vida de Petrus aconteceu em 1617, durante o batismo de um de seus netos e, por isso, acredita-se que ele tenha morrido por volta de 1618.” – retirado de: fatos desconhecidos- escrito por PH Mota</p>

        <center><h1 class="font-antic mt-3 mb-5">Fim</h1></center>

        <?php if(!isset($_SESSION['id_user'])){

        echo '<div class="alert alert-info  mt-3 mb-5 text-justify" role="alert">';
        echo 'Você está deslogado! para gerar um certificado é necessário <a href="Login.php" class="alert-link">fazer login ou cadastrar-se primeiro.</a>';
        echo '</div>';

        } else{
          echo '<center><a href="gerar_cert.php?post=2" target="_blank"><button type="button" id="env" class="btn btn-color-blue-3 mt-0 mb-1 border border-color-blue-1 px-5 py-2">Gerar certificado</button></a></center>';
        }
        
        ?>
        

        <hr id="opniao" class="bg-invert mb-5 mt-5">

        <h1 class="text-center mt-5 mb-5 font-antic">Deixe sua opnião</h1>

        <?php


        if(isset($_SESSION['id_user'])){
          echo "<form id='formComent' name='formComent' action='inc/db_coment.php?post=2' method='post' class='mb-5'>";
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

        exibiComentario(2);

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