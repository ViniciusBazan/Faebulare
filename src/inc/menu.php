<nav class="navbar navbar-expand-lg navbar-dark bg-color-dark-2">



<a class="navbar-brand mr-lg-4 ml-lg-3" href="index.php"><img src="img/Logo.png" class="logo-wt"></a>

<img src="img/selo.png" class="selo-wt selo-pos" id="selo" style="z-index:10;">

<!-- Botão para abrir e fechar menu hamburguer -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite" onclick="openMenu(this)">


  <div class="barras">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
  </div>
  
</button>

<div class="collapse navbar-collapse" id="navbarSite">

    <ul class="navbar-nav mr-auto">

        <li class="nav-item dropdown mr-lg-3">
            <a class="nav-link muda font-s-12 mt-lg-4 dropdown-toggle" data-toggle="dropdown" id="navdrop" href="#">Contos</a>
            <div class="dropdown-menu navbar-dark bg-color-dark-2">
                <a class="dropdown-item muda mb-2" href="cont_A_Bela_Adormecida.php">A bela adormecida</a>
                <a class="dropdown-item muda mb-2" href="cont_A_Bela_e_a_Fera.php">A bela e a fera</a>
                <a class="dropdown-item muda mb-2" href="cont_A_Princesa_e_o_Sapo.php">A princisa e o sapo</a>
                <a class="dropdown-item muda mb-2" href="cont_Branca_de_Neve.php">Branca de neve</a>
                <a class="dropdown-item muda mb-2" href="cont_Chapeuzinho_Vermelho.php">Chapeuzinho</a>
                <a class="dropdown-item muda mb-2" href="cont_Cinderela.php">Cinderela</a>
                <a class="dropdown-item muda mb-2" href="cont_Joao_e_Maria.php">João e Maria</a>
                <a class="dropdown-item muda mb-2" href="cont_O_Gato_de_Botas.php">O gato de botas</a>
                <a class="dropdown-item muda mb-2" href="cont_Pequena_Sereia.php">Pequena sereia</a>
                <a class="dropdown-item muda mb-2" href="cont_Pinoquio.php">Pinoquio</a>
                <a class="dropdown-item muda mb-2" href="cont_Rapunzel.php">Rapunzel</a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link muda font-s-12 mt-lg-4" href="cont_Psicanalise.php">Psicanálise</a>
        </li>

    </ul>

    <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <a class="nav-link muda font-s-12 mt-lg-4 mr-lg-3" href="cont_Autores.php">Autores</a>
        </li>


        <li class="nav-item">
            <a class="nav-link muda font-s-12 mt-lg-4 mr-lg-4" href="cont_Quem_somos.php">Sobre nós</a>
        </li>

        <?php

        if (isset($_SESSION['id_user'])){
            echo "<li class='nav-item dropdown ml-auto'><a class='nav-link muda font-s-12 mt-lg-4 opaci-son mr-lg-3 dropdown-toggle' data-toggle='dropdown' id='navdrop2' href='#'><img src='img/login.png' class='login-wt muda'> Olá, ".$_SESSION['nome']."</a><div class='dropdown-menu navbar-dark bg-color-dark-2'><a class='dropdown-item muda mb-2' href='inc/db_enc.php'>Encerrar sessão</a></div></li>";
        } else{
            echo '<li class="nav-item  ml-auto"><a class="nav-link muda font-s-12 mt-lg-4 opaci-son mr-lg-3" href="Login.php"><img src="img/not_login.png" class="login-wt muda"> Faça Login</a></li>';
        }

        ?>

    </ul>

    

</div>


</nav>