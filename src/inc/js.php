<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>

<!-- JavaScript (Opcional) -->

<script src="js/bars.js"></script>
<?php
if ($pag == "Login.php"){
    echo "<script src='js/typeUser.js'></script>";
    echo "<script src='js/capsdetector.js'></script>";
    echo "<script src='js/valCamp.js'></script>";
    echo "<script src='js/toolTip.js'></script>";
}

if ($verCont){
    echo "<script src='js/switch.js'></script>";
    echo "<script src='js/topo.js'></script>";
}

if ($pag == "cont_Quem_somos.php" || $pag == "cont_Psicanalise.php"){
    echo "<script src='js/scrollSuave.js'></script>";
}

?>