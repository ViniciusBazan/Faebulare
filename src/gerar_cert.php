<?php
require_once 'inc'.DIRECTORY_SEPARATOR.'config.php';

if(!isset($_SESSION['id_user'])){
    $fallback = '..'.$sep.'index.php';

    $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;

    header("location: {$anterior}");
    exit;
}

require_once 'inc'.$sep.'db_conn.php';

$post   = $_GET['post'];

$result = $conn->query("SELECT titulo FROM tb_post WHERE id_post = '$post'");

$conto  = $result->fetch_array()[0];

$nome   = $_SESSION['nome']." ".$_SESSION['ltname'];

$image  = imagecreatefrompng($pathImg."certificado.png");

$black  = imagecolorallocate($image, 0, 0, 0);
$red    = imagecolorallocate($image, 140, 0, 0);

if(strlen($nome) > 25){
    $font_s = 20;
} else{
    $font_s = 28;
}

/*

* Função   : imagettftext(image, tamanho, angulo, X, Y, Color, caminho, texto)
* Objetivo : escrever usando uma fonte ".ttf"
* image    : colocar a variavel $image (tipo resource)
* tamanho  : tamanho da fonte
* angulo   : inclina a fonte, aceita valores entre 0 e 360
* X        : distancia em px do lado esquerdo da imagem
* Y        : distancia em pc do topo da imagem
* color    : variavel que recebeu a função imagecolorallocate
* caminho  : caminho até o arquivo da fonte
* texto    : texto a ser escrito

*/

header("Content-type: image/png");

imagettftext($image, $font_s, 0, 85, 375, $black,dirname(__FILE__).DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."OldLondon.ttf",$nome );

imagettftext($image, 30, 0, 85, 531, $red,dirname(__FILE__).DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."OldLondon.ttf",$conto );

// Cria a transparencia de fundo
imagealphablending($image, false);
imagesavealpha($image, true);

imagepng($image); 


imagedestroy($image);

?>