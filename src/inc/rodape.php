
<!-- <img src="img/book.png" class="book-wt book-pos" id="book"> --> 
<div class="container-fluid bg-color-dark-2 text-white" id="container-rodape">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 col-md-4 mt-md-5 mb-md-2 order-2 order-md-2">
                <center><p><a class="muda alink" href="index.php">Home</a> / <a class="muda alink" href="cont_Autores.php">Autores</a> / <a class="muda alink" href="cont_Quem_somos.php">Sobre Nós</a></p></center>
            </div>

            <div class="col-12 col-md-4 mt-md-5 mb-md-2 order-3 order-md-2">
                <center><p>&copy; Copyright 2020 - Faebulare</p></center>
            </div>

            <div class="col-12 col-md-4 mt-5 mb-md-2 order-1 order-md-3">
                <center><p><?php
                    if(!isset($_SESSION['id_user'])){

                    echo '<a class="muda alink" href="Login.php">Faça login ou cadastre-se aqui</a>';

                    }else{
                        echo "Olá ".$_SESSION['nome']." ".$_SESSION['ltname'].". <a class='muda alink' href='inc/db_enc.php'>Encerre sua sessão aqui!</a>";
                    }
                    ?>
                </p></center>
            </div>
        </div>
    </div>
</div>

