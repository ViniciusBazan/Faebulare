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

/* Icons */
$info = '<svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="white" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/><circle cx="8" cy="4.5" r="1"/></svg>';

?>