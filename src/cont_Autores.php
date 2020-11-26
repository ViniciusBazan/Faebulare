<?php require_once 'inc'.DIRECTORY_SEPARATOR.'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <!-- Incluindo head padrão -->
    <?php require_once $head; ?>

  </head>
  <body class="text-white">
    <!-- Incluindo o menu -->
    <?php require_once $menu; ?>

    <div style="width:100%;height:auto;">

        <div class="row position-absolute mt-5" style="width:100%;">
            <div class="col-6"> </div>
            <div class="col-6 ">
                <h1 class="mt-5 text-center font-antic text-white" style="text-shadow: 4px 3px 2px #000;">Perrault, Grimm,</h1>
                <h1 class="mt-1 text-center font-antic text-white" style="text-shadow: 4px 3px 2px #000;"> Andersen</h1>
                <h1 class="mt-1 text-center font-antic text-white" style="text-shadow: 4px 3px 2px #000;"> & outros.</h1>
            </div>
        </div>

    

        <img src="<?php echo $pathImg.'livros.png' ?>" class="" style="width:100%;height:430px;object-fit: cover;object-position: center 32%;"> 

        <div class="container-fluid mt-4  wt-geral  position-relative" style="min-height:81vh;">
		
		<center><h1 class="font-london mt-5 mb-5">Mini Biografias dos principais autores citados </h1></center>

        <center><h1 class="font-antic mt-5 mb-5"> <span style="border-bottom: #CFBFFF solid 3px;">Charles Perrault</span> </h1></center>

        <div class="row mb-5">

            <div class="col-12 col-lg-3 mb-4 mt-lg-0"><center><img class="img-fluid" src="<?php echo $autor.'charles_perrault.png'; ?>"></center></div>
            <div class="col-12 col-lg-9 text-justify mt-3">
            <p class="recuo font-s-11"> Foi um importante escritor francês, autor de um grande número de contos infantis, entre eles, “A Bela Adormecida”, “O Gato de Botas”, “Chapeuzinho Vermelho” e o “Pequeno Polegar”. Filho de Pierre Perrault e de Paquette Le Clerc, descendente de uma nobre família de Tours, cidade próxima a Paris. Em 1637, Charles ingressou no Colégio de Beauvais, onde realizou brilhante estudo literário. Liderando o grupo dos Modernos, Charles Perrault tentou provar a superioridade da literatura de sua época. </p>
            <p class="recuo font-s-11"> Foi cobrador geral da corte e depois deu início a sua carreira literária publicando uma série de odes dedicadas ao rei Luís XIV. Em 1697, com quase setenta anos, Charles Perrault passou a registrar as histórias, ou contos da memória popular. Ao dar um acabamento literário a esse tipo de história, estava criando um novo gênero da literatura “o conto de fadas”. Escreveu um livro, publicado no dia 11 de janeiro de 1697, ficou conhecido como “Contos da Mãe Gansa”, onde as histórias eram encerradas em forma de poesia, contendo sempre uma “lição de moral”.</p>
                <div class="row mt-5">
                    <div class="col-4">
                    <center><p><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="#CFBFFF" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg> França</p></center>
                    </div>
                    <div class="col-4"><center><svg id="Capa_1" fill="#CFBFFF" enable-background="new 0 0 512 512" height="2em" viewBox="0 0 512 512" width="2em" xmlns="http://www.w3.org/2000/svg"><g><path d="m407.271 119.471h-119.532v-104.489c0-8.274-6.716-14.982-15-14.982h-33.478c-8.284 0-15 6.708-15 14.982v104.489h-119.532c-8.284 0-15 6.708-15 14.982v33.438c0 8.274 6.716 14.982 15 14.982h119.532v314.145c0 8.274 6.716 14.982 15 14.982h33.478c8.284 0 15-6.708 15-14.982v-314.145h119.532c8.284 0 15-6.708 15-14.982v-33.438c0-8.274-6.716-14.982-15-14.982z"/></g></svg> 1628 - 1703</center></div>
                    <div class="col-4" style="border-bottom: #CFBFFF solid 3px;border-right: #CFBFFF solid 3px;"></div>
                </div>
            </div>

        </div>

        <center><h1 class="font-antic mt-5 mb-5"> <span style="border-bottom: #cc0000 solid 3px;">Jacob e Wilhelm Grimm</span> </h1></center>

        <div class="row mb-5">

            <div class="col-12 col-lg-4 mb-4 mt-lg-0 order-lg-2"><center><img class="img-fluid" src="<?php echo $autor.'irmao_grimm.png'; ?>"></center></div>
            <div class="col-12 col-lg-8 text-justify mt-3 order-lg-1">
            <p class="recuo font-s-11">Nascidos em Hanau, os irmãos estudaram Direito junto ao seu pai, mas começaram a se dedicar integralmente à literatura e acabaram deixando a advocacia de lado. 1837 foi um ano marcante para eles, pois demonstraram ideias contestadoras em relação ao rei da Alemanha e foram expulsos da Universidade de Göttingen junto a cinco professores. Reconhecidos no mundo inteiro pela excelência narrativa e qualidade dos contos que produziram desde o começo do século XIX, afirmavam que estavam apenas escrevendo, durante à noite, as histórias que escutavam de camponeses, amigos e parentes durante o dia.</p>
            <p class="recuo font-s-11">Estudiosos, sabiam que os primeiros povos transmitiram oralmente suas histórias, passando a tradição de pai para filho, de geração para geração. Um dos contos mais famosos da humanidade, Branca de Neve, imortalizada pelo desenho criado nos estúdios Disney, foi passada para os irmãos Grimm por 2 amigas de sua família. Publicados em 1812, os primeiros contos dos Grimm levavam o nome de "Histórias das Crianças e do Lar", totalizando 51 histórias. Porém, a maior importância dos irmãos Grimm para a literatura foi a coleta dos contos, que acabou impulsionando outros estudiosos a realizarem o mesmo processo em seus países. Provavelmente, histórias trágicas que foram passadas pelo povo aos Grimm, acabaram sendo alteradas para ganharem finais felizes e se tornarem mais leves para a leitura de crianças e adolescentes. Os contos dos irmãos Grimm são enquadrados no gênero fantástico por apresentarem personagens e cenários imaginários.</p>
                <div class="row mt-5">
                    <div class="col-4 order-2">
                    <center><p><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="#cc0000" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg> Alemanha</p></center>
                    </div>
                    <div class="col-5 order-3"><center><svg id="Capa_1" fill="#cc0000" enable-background="new 0 0 512 512" height="2em" viewBox="0 0 512 512" width="2em" xmlns="http://www.w3.org/2000/svg"><g><path d="m407.271 119.471h-119.532v-104.489c0-8.274-6.716-14.982-15-14.982h-33.478c-8.284 0-15 6.708-15 14.982v104.489h-119.532c-8.284 0-15 6.708-15 14.982v33.438c0 8.274 6.716 14.982 15 14.982h119.532v314.145c0 8.274 6.716 14.982 15 14.982h33.478c8.284 0 15-6.708 15-14.982v-314.145h119.532c8.284 0 15-6.708 15-14.982v-33.438c0-8.274-6.716-14.982-15-14.982z"/></g></svg> <span class="mr-2">1785 - 1863</span> <svg id="Capa_1" fill="#cc0000" enable-background="new 0 0 512 512" height="2em" viewBox="0 0 512 512" width="2em" xmlns="http://www.w3.org/2000/svg"><g><path d="m407.271 119.471h-119.532v-104.489c0-8.274-6.716-14.982-15-14.982h-33.478c-8.284 0-15 6.708-15 14.982v104.489h-119.532c-8.284 0-15 6.708-15 14.982v33.438c0 8.274 6.716 14.982 15 14.982h119.532v314.145c0 8.274 6.716 14.982 15 14.982h33.478c8.284 0 15-6.708 15-14.982v-314.145h119.532c8.284 0 15-6.708 15-14.982v-33.438c0-8.274-6.716-14.982-15-14.982z"/></g></svg> 1786 - 1859</center></div>
                    <div class="col-3 order-1" style="border-bottom: #cc0000 solid 3px;border-left: #cc0000 solid 3px;"></div>
                </div>
            </div>

        </div>

        <center><h1 class="font-antic mt-5 mb-5"> <span style="border-bottom: #FFFF00 solid 3px;">Bruno Bettelheim</span> </h1></center>

        <div class="row mb-5">

            <div class="col-12 col-lg-3 mb-4 mt-lg-0"><center><img class="img-fluid" src="<?php echo $autor.'bruno_bettelheim.png'; ?>"></center></div>
            <div class="col-12 col-lg-9 text-justify mt-5">
            <p class="recuo font-s-11">Nascido em Viena, o psicanalista austro-americano é originário de numa família judia da alta burguesia. Entrou na universidade para fazer um curso que passava pela literatura, história da arte e estética. A partir de 1932, uniu-se a psicanalistas vienenses que se interessavam pelo tratamento de crianças. Em 1938, foi deportado pelos nazistas para um campo de concentração de Dachau e Buchenwald, onde passou um ano sendo violentamente espancado. Essa experiência desumana o marcou profundamente. Depois de liberado, Bettelheim foi morar nos Estados Unidos.</p>
            <p class="recuo font-s-11">A partir de 1943, ligou-se à Escola Ortogênica de Chicago, que dirigiu durante cerca de trinta anos e que acolhia crianças classificadas como autistas. Dizia-se um homem do trabalho de campo: um clínico que se inspirava em princípios filosóficos. Aposentado, continuou muito ativo, escrevendo diversos livros – entre os quais Psicanálise dos contos de fadas, obra inspirada nos relatórios que produziu a respeito dos casos que atendeu e que se tornou um best-seller mundial. Fazia conferências e participava de programas de rádio e televisão. Obteve grande fama na mídia dos Estados Unidos e do resto do mundo.</p>
                <div class="row mt-5">
                    <div class="col-4">
                    <center><p><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="#FFFF00" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg> Áustria</p></center>
                    </div>
                    <div class="col-4"><center><svg id="Capa_1" fill="#FFFF00" enable-background="new 0 0 512 512" height="2em" viewBox="0 0 512 512" width="2em" xmlns="http://www.w3.org/2000/svg"><g><path d="m407.271 119.471h-119.532v-104.489c0-8.274-6.716-14.982-15-14.982h-33.478c-8.284 0-15 6.708-15 14.982v104.489h-119.532c-8.284 0-15 6.708-15 14.982v33.438c0 8.274 6.716 14.982 15 14.982h119.532v314.145c0 8.274 6.716 14.982 15 14.982h33.478c8.284 0 15-6.708 15-14.982v-314.145h119.532c8.284 0 15-6.708 15-14.982v-33.438c0-8.274-6.716-14.982-15-14.982z"/></g></svg> 1903-1990</center></div>
                    <div class="col-4" style="border-bottom: #FFFF00 solid 3px;border-right: #FFFF00 solid 3px;"></div>
                </div>
            </div>

        </div>

        <center><h1 class="font-antic mt-5 mb-5"> <span style="border-bottom: #1485cc solid 3px;">Giambattista Basile </span> </h1></center>

        <div class="row mb-5">

            <div class="col-12 col-lg-3 mb-4 mt-lg-0 order-lg-2"><center><img class="img-fluid" src="<?php echo $autor.'giam.png'; ?>"></center></div>
            <div class="col-12 col-lg-9 text-justify mt-3 order-lg-1">
            <p class="recuo font-s-11">Nascido em Giugliano in Campania, foi um soldado e escritor italiano. Mercenário a serviço da República de Veneza, servindo também na ilha de Creta, onde frequentou a Accademia degli Stravaganti, sociedade literária local. Após curtas temporadas em Stigliano e Mântua, retorna à Nápoles, onde presta serviços como soldado e administrador a vários senhores feudais.</p>
            <p class="recuo font-s-11">Sua obra maior é “Lo Cunto de li Cunti”, também conhecida como "Pentamerão", livro escrito em prosa no dialeto napolitano, um conjunto de fábulas dirigidas às crianças que recolheu do povo e de tradições locais em suas viagens. Vários personagens hoje muito conhecidos como Cinderela (La Cenerentola), Rapunzel e A Bela Adormecida (La Bella Addormentata nel Bosco), posteriormente também recontadas por Charles Perrault e os Irmãos Grimm, constam dessa obra. Foi o primeiro livro em língua latina a citar um ogro. Foi publicada postumamente por sua irmã, Adriana Basile, uma famosa cantora da época. Foi sepultado na igreja de Santa Sofia.</p>
                <div class="row mt-5">
                    <div class="col-4 order-2">
                    <center><p><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="#1485cc" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg> itália</p></center>
                    </div>
                    <div class="col-5 order-3"><center><svg id="Capa_1" fill="#1485cc" enable-background="new 0 0 512 512" height="2em" viewBox="0 0 512 512" width="2em" xmlns="http://www.w3.org/2000/svg"><g><path d="m407.271 119.471h-119.532v-104.489c0-8.274-6.716-14.982-15-14.982h-33.478c-8.284 0-15 6.708-15 14.982v104.489h-119.532c-8.284 0-15 6.708-15 14.982v33.438c0 8.274 6.716 14.982 15 14.982h119.532v314.145c0 8.274 6.716 14.982 15 14.982h33.478c8.284 0 15-6.708 15-14.982v-314.145h119.532c8.284 0 15-6.708 15-14.982v-33.438c0-8.274-6.716-14.982-15-14.982z"/></g></svg> <span class="mr-2">1566 – 1632</span></div>
                    <div class="col-3 order-1" style="border-bottom: #1485cc solid 3px;border-left: #1485cc solid 3px;"></div>
                </div>
            </div>

        </div>

        <center><h1 class="font-antic mt-5 mb-5"> <span style="border-bottom: #f4b12f solid 3px;">Hans Cristian Andersen</span> </h1></center>

        <div class="row mb-5">

            <div class="col-12 col-lg-4 mb-4 mt-lg-0"><center><img class="img-fluid" src="<?php echo $autor.'hans.png'; ?>"></center></div>
            <div class="col-12 col-lg-8 text-justify mt-3">
            <p class="recuo font-s-11">Andersen ficou célebre principalmente pelos contos de fadas que criou, como o Patinho Feio e a Pequena Sereia, na época este gênero era muito raro. Nasceu em Odense, em uma família extremamente pobre. O pai estimulava as fantasias e o dom criativo do filho, contava várias histórias e o presenteou com um teatro de marionetes. Ele até chegou a memorizar muitas peças de Shakespeare.</p>
            <p class="recuo font-s-11">Quando tinha 11 anos, seu pai morreu e ele teve que parar de estudar. Começou a trabalhar, e ao completar 14 anos partiu para Copenhague, onde garantiu uma vaga no Teatro Real, com a ajuda de um conselheiro de Estado. Na instituição ele atuou como ator e bailarino, além de compor diversas peças. Terminou os estudos com 22 anos; alto, magro e desajeitado, sentia-se constrangido entre os colegas bem mais jovens e muito menores que ele. Para sair de uma crise financeira escreveu algumas histórias infantis baseadas no folclore dinamarquês. A fama mundial chegou em 1835, com o livro “O Improvisador”. Nas obras, o autor buscava transmitir modelos comportamentais e refletir os conflitos sociais. Ele acreditava que a igualdade de direitos deveria reger o mundo e a relação entre os homens. Em reconhecimento à contribuição para a literatura, em 2 de abril, data de seu nascimento, é celebrado o Dia Internacional do Livro Infanto-juvenil.</p>
                <div class="row mt-5">
                    <div class="col-4">
                    <center><p><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="#f4b12f" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg> Dinamarca</p></center>
                    </div>
                    <div class="col-4"><center><svg id="Capa_1" fill="#f4b12f" enable-background="new 0 0 512 512" height="2em" viewBox="0 0 512 512" width="2em" xmlns="http://www.w3.org/2000/svg"><g><path d="m407.271 119.471h-119.532v-104.489c0-8.274-6.716-14.982-15-14.982h-33.478c-8.284 0-15 6.708-15 14.982v104.489h-119.532c-8.284 0-15 6.708-15 14.982v33.438c0 8.274 6.716 14.982 15 14.982h119.532v314.145c0 8.274 6.716 14.982 15 14.982h33.478c8.284 0 15-6.708 15-14.982v-314.145h119.532c8.284 0 15-6.708 15-14.982v-33.438c0-8.274-6.716-14.982-15-14.982z"/></g></svg> 1805 - 1875</center></div>
                    <div class="col-4" style="border-bottom: #f4b12f solid 3px;border-right: #f4b12f solid 3px;"></div>
                </div>
            </div>

        </div>

        <center><h1 class="font-antic mt-5 mb-5"> <span style="border-bottom: #239987 solid 3px;">Gabrielle Suzanne Barbort</span> </h1></center>

        <div class="row mb-5">

            <div class="col-12 col-lg-4 mb-4 mt-lg-0 order-lg-2"><center><img class="img-fluid" src="<?php echo $autor.'gabi.png'; ?>"></center></div>
            <div class="col-12 col-lg-8 text-justify mt-3 order-lg-1">
            <p class="recuo font-s-11">Gabrielle-Suzanne Barbot de Villeneuve foi uma autora francesa, mais conhecida por escrever a versão original do conto de fadas "La Belle et la Bête - 1740", história que critica o matrimônio. Nasceu em Paris, mas pertencia a uma poderosa família protestante de La Rochelle. </p>
            <p class="recuo font-s-11">Sua trajetória é marcada por relações amorosas complicadas. Em 1706, casou-se com Jean-Baptiste Gaalon de Barzay, membro da aristocracia de Poitou e tenente-coronel de infantaria no Regimento de Berville, juntos tiveram uma filha. Gabrielle-Suzanne ficou viúva aos 26 anos, perdeu progressivamente a fortuna da família e foi forçada a procurar um meio de trabalho para se sustentar. Ela fez seu caminho para Paris, onde embarcou em sua carreira literária. O primeiro livro dela foi uma novela intitulada “La Phoénix conjugal”, publicada somente em 1734, quando tinha já seus quarenta e nove anos. Muitos acreditam, que seu revisor foi Crébillon, o maior e mais famoso dramaturgo da época. Eles se casaram e viveram juntos até a morte de Gabrielle.</p>
                <div class="row mt-5">
                    <div class="col-4 order-2">
                    <center><p><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="#239987" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg> França</p></center>
                    </div>
                    <div class="col-5 order-3"><center><svg id="Capa_1" fill="#239987" enable-background="new 0 0 512 512" height="2em" viewBox="0 0 512 512" width="2em" xmlns="http://www.w3.org/2000/svg"><g><path d="m407.271 119.471h-119.532v-104.489c0-8.274-6.716-14.982-15-14.982h-33.478c-8.284 0-15 6.708-15 14.982v104.489h-119.532c-8.284 0-15 6.708-15 14.982v33.438c0 8.274 6.716 14.982 15 14.982h119.532v314.145c0 8.274 6.716 14.982 15 14.982h33.478c8.284 0 15-6.708 15-14.982v-314.145h119.532c8.284 0 15-6.708 15-14.982v-33.438c0-8.274-6.716-14.982-15-14.982z"/></g></svg> <span class="mr-2">1695 – 1755</span> </center></div>
                    <div class="col-3 order-1" style="border-bottom: #239987 solid 3px;border-left: #239987 solid 3px;"></div>
                </div>
            </div>

        </div>

        <!-- Fim dos autores !-->






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

        