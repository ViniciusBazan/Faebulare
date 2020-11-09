<?php

require_once 'config.php';

unset($_SESSION['id_user'], $_SESSION['nome'], $_SESSION['ltname']);
header('Location: ../Login.php?encSuc=1');

?>