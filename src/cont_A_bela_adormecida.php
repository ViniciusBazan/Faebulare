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

    <img src="<?php echo $conto.'Bela_1.jpg' ?>" class="" style="width:100%;height:430px;object-fit: cover;object-position: center 32%;"> 

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
    
        <center><h1 class="font-antic mt-3 mb-2"> A bela adormecida </h1></center>
        <center><h3 class="font-antic mt-3 mb-5"> Sol, lua e Talia - Giambattista Basile - 1634 </h3></center>

        <div class="row mb-4">
          <div class="col-12 col-md-8 text-justify font-s-11">
            <p class="mb-4 recuo"><span class="font-london font-s-30 mr-2 px-3 switch-cap text-white muda" style="line-height: 1;">E</span>ra uma vez um grande senhor que foi agraciado com o nascimento de uma filha, a quem deu o nome de Talia. Chamou os homens sábios e astrônomos de suas terras para que predissessem o seu futuro. Encontraram-se e, assessorando-se mutuamente, consultaram seu horóscopo e chegaram à conclusão de que ela correria um grande perigo devido a uma farpa de linho. Seu pai então proibiu qualquer planta de linho, cânhamo, ou qualquer outro material desse tipo em sua casa, esperando assim que escapasse do perigo.</p>
          </div>
          <div class="col-12 col-md-4" ><div class="box-right bg-img imgc-size muda" style="background-image: url(img/cont/Bela_5.jpeg);width:100%;height:100%;"></div></div>
        </div>

        <div class="row mb-4">

            <div class="col-12 col-md-4 order-2 order-md-1" ><div class="box-left bg-img imgc-size muda" style="background-image: url(img/cont/Bela_2.jpg);width:100%;height:100%;"></div></div>
            <div class="col-12 col-md-8 text-justify font-s-11 order-1 order-md-2"> 
              <p class="mb-4 recuo">Um dia, quando se havia convertido em uma bela jovem, Talia estava olhando através da janela e viu passar uma velha mulher fiando. Talia, que nunca tinha visto nem uma roca nem um fuso, quis ver como girava, e era tal a sua curiosidade que pediu à velha mulher que fosse até ela. Tomando a roca em sua mão, a garota começou a fiar o linho. Desgraçadamente, cravou-se uma farpa de linho debaixo da unha de Talia, e ela caiu morta ao solo. Quando a velha mulher viu o acontecido, assustou-se tanto que saiu pelas escadas e está fugindo até hoje.</p> 
              <p class="mb-4 recuo">Tão logo seu desgraçado pai viu o desastre que havia ocorrido, tomou-a e, depois de ser inundado pela tristeza e de derramar rios de lágrimas, tirou dali a belíssima Talia e levou-a até um de seus palácios no campo. Ali sentou-a em um trono de veludo debaixo de um dossel de brocado. Desejando apagar da memória todo o seu infortúnio, fechou todas as portas e abandonou para sempre o palácio onde havia sofrido sua grande perda.</p>
            </div>

        </div>

        <div class="row mb-4">

            
          <div class="col-12 col-md-8 text-justify font-s-11"> <p class="mb-4 recuo">Depois de muito tempo aconteceu que um rei caçava ali por perto. Um de seus falcões escapou de sua mão e voou ao interior do palácio através de uma janela. Como não acudisse ao chamado, o rei teve que bater à porta, crendo que o lugar fosse habitado. Mas ninguém atendeu, e então o rei mandou trazerem uma escada de vindimador, pois desejava descobrir o que havia dentro do palácio. Percorreu todos os quartos, salas e recantos, surpreendendo-se grandemente por não encontrar nenhuma alma viva. Por fim abriu a porta do quarto onde Talia se achava sob o encantamento e, crendo que apenas dormia, chamou-a. Como ela continuou inconsciente, ele tentou reanimar a bela moça, pensando que estivesse passando mal, mas não teve sucesso. Sentindo então inflamar-se seu sangue pela beleza dela, carregou-a nos braços, deitou-a na cama, beijou-a e lhe deu todo o seu amor. Deixando-a assim deitada, voltou para o seu reino e para as suas ocupações, e por um longo tempo não pensou mais naquilo que tinha acontecido.</p> </div>
          <div class="col-12 col-md-4" ><div class="box-right bg-img imgc-size muda" style="background-image: url(img/cont/Bela_3.png);width:100%;height:100%;"></div></div>
            

        </div>

        <p class="text-justify mb-4 font-s-11 recuo">Nove meses depois, Talia deu à luz dois filhos, um menino e uma menina, formosos como duas jóias. Duas fadas apareceram no palácio e cuidaram deles, colocando-os sobre os peitos de sua mãe. Certa vez, querendo mamar e não encontrando o mamilo, começaram a sugar o dedo de Talia. Fizeram-no tão forte que arrancaram a farpa de linho. Talia despertou assim de um longo sono e, vendo seus belíssimos filhos sobre ela, toda contente lhes deu o leite. Os bebês eram a coisa que mais queria na vida.</p>
        <p class="text-justify mb-4 font-s-11 recuo">Talia se viu sozinha no palácio, com os gêmeos ao lado, e não sabia o que tinha acontecido com ela. Mas notou que a mesa estava posta, com comida e bebida, embora não conseguisse ver quem as tinha trazido. Enquanto isso, o rei se lembrou da bela adormecida. Tornou a caçar e, voltando ao palácio, entrou para vê-la e encontrou-a desperta com aqueles dois lindos e alegres bonequinhos. Ele se regozijou como nunca antes na vida.</p>

        <div class="row mb-4">

            <div class="col-12 col-md-4" ><div class="box-left muda bg-img imgc-size" style="background-image: url(img/cont/Bela_4.jpg);width:100%;height:100%;background-position: center 70%;"></div></div>
            <div class="col-12 col-md-8 text-justify font-s-11"> 
              <p class="mb-4 recuo">Contou a Talia quem era, e como a tinha visto e entrado naquele lugar. Eles então se conheceram melhor, a amizade de ambos imediatamente se estreitou, e ele permaneceu com ela durante alguns dias. Depois desse tempo ele se despediu, prometendo que regressaria para levá-la com ele ao seu reino. E voltou ao seu reino, onde a todo momento tinha nos lábios os nomes de Talia, Sol e Lua – pois era assim que se chamavam seus filhos. Até mesmo quando estava comendo chamava-os pelos nomes. E não dormia nem acordava sem pronunciar seus nomes.</p>
              <p class="mb-4 recuo">A rainha, vendo que algo estranho havia ocorrido ao seu marido durante a caçada, começou a suspeitar. Percebendo que ele não fazia outra coisa além de chamar pelos nomes de Talia, Sol e Lua, ficou furiosa de ciúmes. Chamou seu secretário e disse-lhe:</p>
            </div>
        </div>

        <p class="text-justify mb-4 font-s-11 recuo">– Escuta, meu querido, tu estás entre a cruz e a espada. Se me disseres de quem o rei, meu marido, está enamorado, te farei enriquecer; e se me esconderes a verdade, te farei morrer.</p>
        <p class="text-justify mb-4 font-s-11 recuo">O secretário, por um lado, estava assustado; por outro lado, estava ávido pela riqueza. A avareza e o medo lhe fizeram esquecer a honra, a justiça e a lealdade, e contou-lhe tudo que sabia.</p>
        
        <div class="row mb-4">
          <div class="col-12 col-md-8 text-justify font-s-11">
            <p class="mb-4 recuo">Então a rainha ordenou que o secretário fosse até Talia, e lhe dissesse que o rei queria as crianças no palácio. Talia, com grande contentamento, obedeceu e enviou Sol e Lua pelo secretário, que os entregou nas mãos da rainha. Esta, que era mais venenosa que uma víbora, pediu ao cozinheiro que os matasse e cozinhasse em vários e apetitosos molhos, e os servisse para o rei comer. Mas o cozinheiro, tendo um coração terno, ao ver aquelas duas jóias formosas, sentiu compaixão e os entregou à sua esposa para que cuidasse deles. No palácio, ele preparou dois cordeiros de acordo com cem receitas diferentes.</p>
          </div>
          <div class="col-12 col-md-4" ><div class="box-right bg-img imgc-size muda" style="background-image: url(img/cont/Bela_6.jpg);width:100%;height:100%;"></div></div>
        </div>
        
        <p class="text-justify mb-4 font-s-11 recuo">Quando o rei chegou, a rainha, toda satisfeita, mandou servir a comida. O rei comeu com gosto, exclamando:</p>
        <p class="text-justify mb-4 font-s-11 recuo">– Oh, como isto é bom! Que requinte! Que primor!</p>
        <p class="text-justify mb-4 font-s-11 recuo">E ela, de quando em quando, lhe dizia:</p>
        <p class="text-justify mb-4 font-s-11 recuo">– Come! Pois a carne que comes é tua!</p>
        <p class="text-justify mb-4 font-s-11 recuo">Depois de ouvir isto algumas vezes, o rei se entristeceu e disse-lhe:</p>
        <p class="text-justify mb-4 font-s-11 recuo">– Sei muito bem que eu como a carne que é minha, porque sou rei e tudo é meu, enquanto tu nada trouxeste a esta casa.</p>
        <p class="text-justify mb-4 font-s-11 recuo">E se levantou, e foi dar uma volta pelo seu país para fazer a raiva passar.</p>
        <p class="text-justify mb-4 font-s-11 recuo">Mas à rainha ainda não bastava o que tinha feito, e então ordenou ao secretário que trouxesse Talia ao palácio, com a desculpa de que o rei a esperava. Talia se arrumou, toda contente, e partiu o mais rápido que pôde, pois desejava com todas as forças ver o rei, sem desconfiar do que sua inimiga lhe estava preparando.</p>
        <p class="text-justify mb-4 font-s-11 recuo">Encontrou-se diante da rainha, e esta, com o rosto deformado pela crueldade, disse-lhe com voz perversa e zombeteira:</p>
        <p class="text-justify mb-4 font-s-11 recuo">– Ah! Ah! Bem-vinda, senhora promíscua! Então és tu que enganou o rei! Tu, com esse sorriso insinuante, querias tê-lo todo para ti! Já chega, madame porcina! Chegaste ao teu tribunal, pois agora vou te dar o castigo que mereces!</p>
        <p class="text-justify mb-4 font-s-11 recuo">Talia começou a desculpar-se, dizendo que não era culpa dela, que o rei havia tomado posse das suas coisas enquanto ela estava enfeitiçada, mas a rainha não quis saber das desculpas. Acendeu uma grande fogueira no pátio do palácio, e deu ordens de botar a moça para arder. Ao ver que as coisas iam mal, Talia se ajoelhou diante da rainha e lhe disse:</p>
        <p class="text-justify mb-4 font-s-11 recuo">– Por favor, dá-me tempo ao menos para eu tirar estas belas roupas que uso!</p>
        <p class="text-justify mb-4 font-s-11 recuo">Não por piedade, mas porque queria ficar com aqueles vestidos bordados de ouro e pérolas, a rainha respondeu:</p>
        <p class="text-justify mb-4 font-s-11 recuo">– Está bem, vai te despir!</p>
        <p class="text-justify mb-4 font-s-11 recuo">Talia, então, foi se despir lentamente, e soltava um grito para cada parte da vestimenta que tirava. Tirou o manto, o casaco e a saia. No momento de remover a anágua, lançou um último grito. Depois disto, tomaram-na novamente e prepararam-se para prendê-la na estaca onde a rainha pretendia transformá-la em um montículo de cinzas. De repente, o rei apareceu e, diante daquela cena, mandou que ninguém se movesse. Queria saber o que se passava. Ao perguntar por seus filhos, a cruel rainha lhe disse:</p>
        <p class="text-justify mb-4 font-s-11 recuo">– A isto tu não darás remédio, porque eu te fiz comê-los, e tu adoraste!</p>
        <p class="text-justify mb-4 font-s-11 recuo">– Ai! Meus pobres cordeiros, então eu mesmo fui vosso lobo! Ai! Como é possível que eu não tenha reconhecido vossas carnes que tanto cheguei a acariciar? E tu, bruxa pérfida e renegada, como é que pudeste ser mais feroz do que bestas selvagens? Mas eu não te darei tempo nem para que peças perdão pelos teus pecados!</p>
        <p class="text-justify mb-4 font-s-11 recuo">E ordenou que a rainha fosse queimada na fogueira que havia preparado para Talia, fazendo queimar também o secretário, seu cúmplice. Mandou queimar até o cozinheiro, por haver picado e cozinhado os seus filhos. Mas o cozinheiro se atirou aos seus pés e disse:</p>
        <p class="text-justify mb-4 font-s-11 recuo">– Senhor, seria uma fogueira a recompensa pelo serviço que prestei a ti? Farás festa de mim, enquanto sou assado preso a uma estaca? É este o bom lugar que me darás, em uma grelha com a rainha? Eu esperava algo melhor por ter salvado as tuas crianças, desobedecendo àquele coração de pedra que queria te fazer comê-las!</p>
        <p class="text-justify mb-4 font-s-11 recuo">Ao ouvir estas palavras, o rei ficou atônito. Pensou estar sonhando, porque não podia crer no que seus próprios ouvidos lhe diziam. Voltou-se então para o cozinheiro e lhe disse:</p>
        <p class="text-justify mb-4 font-s-11 recuo">– Se é verdade que salvaste os meus filhos, então estejas seguro de que te impedirei de girar no espeto, e te darei o poder de fazer girar o meu coração, porque quero contentar-te em todos os teus desejos, e te darei uma recompensa tão grande que serás o homem mais feliz do mundo!</p>
        <p class="text-justify mb-4 font-s-11 recuo">Enquanto o rei pronunciava estas palavras, a esposa do cozinheiro, que tinha visto seu marido em perigo, trouxe Sol e Lua. O rei abraçou-os juntamente com Talia e, chorando de alegria, não se fartava nunca de beijá-los e acariciá-los.</p>
        <p class="text-justify mb-5 font-s-11 recuo">Depois de haver destinado uma grande renda ao cozinheiro, e de havê-lo nomeado camareiro-mor do palácio, o rei se casou com Talia, que viveu feliz e contente para sempre com seu marido e filhos, depois de ter experimentado que até mesmo dormindo é possível ser favorecida com a sorte.</p>

        <center><h1 class="font-antic mt-3 mb-5">Fim</h1></center>

        <?php if(!isset($_SESSION['id_user'])){

        echo '<div class="alert alert-info  mt-3 mb-5 text-justify" role="alert">';
        echo 'Você está deslogado! para gerar um certificado é necessário <a href="Login.php" class="alert-link">fazer login ou cadastrar-se primeiro.</a>';
        echo '</div>';

        } else{
          echo '<center><a href="manual.php" target="_blank"><button type="button" id="env" class="btn btn-color-blue-3 mt-0 mb-1 border border-color-blue-1 px-5 py-2 mr-2">Como imprimir</button></a>';
          echo '<a href="gerar_cert.php?post=1" target="_blank"><button type="button" id="env" class="btn btn-color-blue-3 mt-0 mb-1 border border-color-blue-1 px-5 py-2">Gerar certificado</button></a></center>';
        }
        
        ?>
        

        <hr id="opniao" class="bg-invert mb-5 mt-5">

        <h1 class="text-center mt-5 mb-5 font-antic">Deixe sua opnião</h1>

        <?php


        if(isset($_SESSION['id_user'])){
          echo "<form id='formComent' name='formComent' action='inc/db_coment.php?post=1' method='post' class='mb-5'>";
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

        exibiComentario(1);

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