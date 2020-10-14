<?php

// Definindo variaveis padrão

/* sources */
$sep           = DIRECTORY_SEPARATOR;

    /** inc **/
    $pathInc       = 'inc'.$sep;
    $head          = $pathInc.'head.php';
    $scriptJs      = $pathInc.'js.php';
    $menu          = $pathInc.'menu.php';
    $rodape        = $pathInc.'rodape.php';

    /** img **/
    $pathImg       = 'img'.$sep;

/* Nome do arquivo em execução */

$pag           = basename($_SERVER['PHP_SELF']);
$pagLen        = strlen($pag);
$pagForm       = substr($pag, 0, -4);
if ($pagForm == 'index'){
    $pagForm = 'Home';
} else if (strpos($pagForm, '_')){
    $pagForm = str_replace('_', ' ', $pagForm);
}

?>