<!-- Meta tags Obrigatórias -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Favicon -->

<link rel="shortcut icon" type="imagem/x-icon" href = "img/f.ico"/>

<!-- Bootstrap CSS -->
<!--<link rel="stylesheet" href="css/bootstrap.css">-->

<link rel="stylesheet" href="css/style.css">

<?php
if ($pagForm == "Home"){
    if(!isset($_SESSION['animation'])){
        echo "<link rel='stylesheet' href='css/animation.css'>";
    }
}

?>

<title>Faebulare | <?php echo $pagForm; ?></title>