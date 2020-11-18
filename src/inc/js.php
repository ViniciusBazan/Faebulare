<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>

<!-- JavaScript (Opcional) -->

<script src="js/bars.js"></script>
<script src="js/scrollSuave.js"></script>
<?php
if ($pagForm == "Login"){
    echo "<script src='js/capsdetector.js'></script>";
    echo "<script src='js/valCamp.js'></script>";
    echo "<script src='js/toolTip.js'></script>";
}

if ($pagForm == "Home"){

    if(!isset($_SESSION['animation'])){

        echo "<script src='js/animation.js'></script>";
        $_SESSION['animation'] = 1;
}

}

if ($verCont){
    echo "<script src='js/switch.js'></script>";
    echo "<script src='js/topo.js'></script>";
    echo "<script src='js/caracteres.js'></script>";
    echo "<script src='js/reply.js'></script>";
    echo "<script src='js/valComent.js'></script>";
    echo "<script src='js/toolTip.js'></script>";
}



?>