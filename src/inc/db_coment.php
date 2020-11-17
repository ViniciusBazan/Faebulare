<?php

require_once 'config.php';

// Se o usuario não estiver logado retorna para outra pagina

if(!isset($_SESSION['id_user']) || !isset($_GET['post'])){

    $fallback = '..'.$sep.'index.php';

    $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;

    header("location: {$anterior}");
    exit;

}

// Faz a conexão

require_once $dbConn;

// Verifica se é uma resposta e prossegue de duas formas dependendo da decisão

$coment = strip_tags($_POST['coment']);
$posta  = $_GET['post'];
$idUser = $_SESSION['id_user'];


// Blacklist de palavrões
$palavroes = array (
    " puta",
    " pqp",
    " p.q.p",
    " p q p",
    " fuder",
    " vsf",
    " v.s.f",
    " v s f",
    " arrombado",
    " cu",
    " c*",
    " c.u",
    " c#",
    " c@",
    " c&",
    " c!",
    " pnc",
    " p.n.c",
    " babaca",
    " foda",
    " foder",
    " transar",
    " foda-se",
    " fds",
    " f.d.s",
    " f d s",
    " caralho",
    " cacete",
    " caceta",
    " merda",
    " porra",
    " boquete",
    " pica",
    " pau",
    " punheta",
    " siririca ",
    " trepar",
    " buceta",
    " bosseta",
    " xoxota",
    " vagabunda",
    " viado",
    " chupa",
    " corno",
    " chupa",
    " fodido",
    " trouxa",
    " mijar",
    " cagar",
    " peido",
    " anus",
    " baitola",
    " brioco",
    " bunda",
    " chifrudo",
    " chifruda",
    " clitores",
    " cocaina",
    " maconha",
    " culhão",
    " culhao",
    " defunto",
    " cuzao",
    " cuzão",
    " cuzona",
    " debil",
    " esporrada",
    " esporro",
    " rabuda",
    " sifilis",
    " xavasca",
    " xerereca",
    " xexeca",
    " xana",
    " xaninha"

);

$links     = array (
    '(.*)\.(xxx)',
    '4tube\.com',
    'clickme\.net',
    'cnnamador\.com',
    'extremefuse\.com',
    'fakku\.net',
    'fux\.com(?!\.br)', //Com .br é de advogados
    'heavy-r\.com', 
    'kaotic\.com', 
    'xhamster\.com',
    'porndoe\.com',
    'pornocarioca\.com',
    'rapebait\.net',
    'redtube\.com',
    'sex\.com',
    'vidmax\.com',
    'wipfilms\.net',
    'xvideos\.(com|net)',
    'porntube\.com'
);

$verPal = false;

foreach ($palavroes as $value){
    $pos = strpos($coment, $value);
 
    if (!($pos === false))
        $verPal = true;        
}

foreach ($links as $regex) {

    if (preg_match("/{$regex}/i", $coment) > 0){
        $verPal = true;
    }

}

if ($verPal == true){
    header("Location: ".$_SERVER['HTTP_REFERER']);
    $_SESSION['pal'] = 1;
    exit;
}

if(isset($_POST['reply'])){
    //echo "Esse comentario é uma resposta!";

    $reply = $_POST['reply'];

    $stmt = $conn->prepare("INSERT INTO tb_coment (id_user, id_post, reply, conteudo) VALUES (?, ?, ?, ?)");

    $stmt->bind_param("iiis", $idUser, $posta, $reply, $coment);

    $stmt->execute();

    $_SESSION['suc'] = 1;

    header("Location: ".$_SERVER['HTTP_REFERER']);

}else{
    
    $stmt = $conn->prepare("INSERT INTO tb_coment (id_user, id_post, conteudo) VALUES (?, ?, ?)");

    $stmt->bind_param("iis", $idUser, $posta, $coment);

    $stmt->execute();

    $_SESSION['suc'] = 1;

    header("Location: ".$_SERVER['HTTP_REFERER']);

}

?>