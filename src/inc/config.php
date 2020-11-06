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
    $slide         = $pathImg.'slide'.$sep;
    $folhas        = $pathImg.'folhas'.$sep;
    $conto         = $pathImg.'cont'.$sep;
    $autor         = $pathImg.'autores'.$sep;
    $bg            = $pathImg.'bg'.$sep;
    $devs          = $pathImg.'devs'.$sep;

/* Nome do arquivo em execução */

$pag           = basename($_SERVER['PHP_SELF']);
$pagForm       = substr($pag, 0, -4);

// Verificar se é um conteúdo
$verCont = FALSE;

if (strpos($pagForm, "cont_") !== FALSE){
    $pagForm = str_replace("cont_", "", $pagForm);
    $verCont = TRUE;
}

if ($pagForm == 'index'){
    $pagForm = 'Home';
} else if (strpos($pagForm, '_')){
    $pagForm = str_replace('_', ' ', $pagForm);
}


/* Icons */
$info = '<svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="white" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/><circle cx="8" cy="4.5" r="1"/></svg>';
$sun  = '<svg class="switch-icon muda" width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-sun" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M3.5 8a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0z"/><path fill-rule="evenodd" d="M8.202.28a.25.25 0 0 0-.404 0l-.91 1.255a.25.25 0 0 1-.334.067L5.232.79a.25.25 0 0 0-.374.155l-.36 1.508a.25.25 0 0 1-.282.19l-1.532-.245a.25.25 0 0 0-.286.286l.244 1.532a.25.25 0 0 1-.189.282l-1.509.36a.25.25 0 0 0-.154.374l.812 1.322a.25.25 0 0 1-.067.333l-1.256.91a.25.25 0 0 0 0 .405l1.256.91a.25.25 0 0 1 .067.334L.79 10.768a.25.25 0 0 0 .154.374l1.51.36a.25.25 0 0 1 .188.282l-.244 1.532a.25.25 0 0 0 .286.286l1.532-.244a.25.25 0 0 1 .282.189l.36 1.508a.25.25 0 0 0 .374.155l1.322-.812a.25.25 0 0 1 .333.067l.91 1.256a.25.25 0 0 0 .405 0l.91-1.256a.25.25 0 0 1 .334-.067l1.322.812a.25.25 0 0 0 .374-.155l.36-1.508a.25.25 0 0 1 .282-.19l1.532.245a.25.25 0 0 0 .286-.286l-.244-1.532a.25.25 0 0 1 .189-.282l1.508-.36a.25.25 0 0 0 .155-.374l-.812-1.322a.25.25 0 0 1 .067-.333l1.256-.91a.25.25 0 0 0 0-.405l-1.256-.91a.25.25 0 0 1-.067-.334l.812-1.322a.25.25 0 0 0-.155-.374l-1.508-.36a.25.25 0 0 1-.19-.282l.245-1.532a.25.25 0 0 0-.286-.286l-1.532.244a.25.25 0 0 1-.282-.189l-.36-1.508a.25.25 0 0 0-.374-.155l-1.322.812a.25.25 0 0 1-.333-.067L8.203.28zM8 2.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11z"/></svg>';
$moon = '<svg class="switch-icon muda" width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-moon" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.53 10.53a7 7 0 0 1-9.058-9.058A7.003 7.003 0 0 0 8 15a7.002 7.002 0 0 0 6.53-4.47z"/></svg>';
$topo = '<svg class="muda" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up-circle-fill" fill="#cc0000" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/></svg>';

?>