<?php
require_once 'inc'.DIRECTORY_SEPARATOR.'config.php';

if(!isset($_SESSION['id_user'])){
    $fallback = '..'.$sep.'index.php';

    $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;

    header("location: {$anterior}");
    exit;
}

$image  = imagecreatefrompng($pathImg."manual.png");

header("Content-type: image/png");

// Cria a transparencia de fundo
imagealphablending($image, false);
imagesavealpha($image, true);

imagepng($image); 


imagedestroy($image);



?>