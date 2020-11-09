<?php

function encriptyPass($ch1, $ch2, $decripty){

    define('SECRET_IV', pack('a16', $ch1));
    define('SECRET', pack('a16', $ch2));

    $encripty = base64_encode(base64_encode(openssl_encrypt(
        $decripty,
        'AES-128-CBC',  // metodo de cryptografia
	    SECRET,         // primeira chave
	    0,              // pode manter 0
	    SECRET_IV       // segunda chave
    )));

    return $encripty;

}

?>