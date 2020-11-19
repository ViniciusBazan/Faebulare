<?php

require_once 'inc/config.php';

require_once("../vendor/autoload.php");

    /**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$email = $_POST['email'];

require_once 'inc/db_conn.php';

//Verifica se o email já foi cadastrado

$resultado = $conn->query("SELECT id_user, email, dt_criar, nome, sobrenome FROM tb_usuarios WHERE email = '$email'");

if ($row = $resultado->fetch_array()){ //E-mail existe


    // Gera o código em 3 partes e depois junta
    $pt1      = substr(md5(md5($row['dt_criar'])), 0, 4);

    $pt2      = substr(md5(md5(time())), 0, 4);

    $pt3      = substr(md5(md5(rand(10,99))), 0, 2);

    $security = $pt1.$pt2.$pt3;

    $id       = $row['id_user'];

    $nomecomp = $row['nome']." ".$row['sobrenome'];

    // Armazenar o codígo no banco de dados

    $stmt = $conn->prepare("UPDATE tb_usuarios SET security = ? WHERE id_user = ?");

    $stmt->bind_param("si", $security, $id);

    $stmt->execute();

    // Enviar e-mail com o código

    


//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP(); // prepara para enviar email

//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_OFF;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

$mail->SMTPOptions = array('ssl'=>array('verify_peer'=>false, 'verify_peer_name'=>false, 'allow_self_signed'=>true)); 

//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail

/* Nesse momento deve-se colocar email e senha do gmail */

$mail->Username = 'faebulare@gmail.com';

//Password to use for SMTP authentication
$mail->Password = 'dhjv123456';

//Set who the message is to be sent from

$mail->CharSet = 'UTF-8';
$mail->Encoding = 'base64';

/* Nesse momento definimos email e nome de quem envia */

$mail->setFrom('faebulare@gmail.com', 'Equipe Faebulare');

//Set an alternative reply-to address
//Metodo não obrigatorio
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to

/* Define quem recebe os email, podendo colcoar multiplos destinatarios ao adicionar mais linhas com addAddress */

$mail->addAddress($email, $nomecomp);

//Set the subject line

/* Define o assunto do email */

$mail->Subject = 'Recuperação de senha';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body

/* Define o corpo do email em um arquivo */

$html = "<html>
            <body style='background-color:#111;color:#fff'>
            <br><br>
            <div style='margin-left:5%;margin-right:5%;width:90%;'>
            <center><h1>Olá, ".$nomecomp."</h1></center>
            <p>Recebemos um pedido para alteração de senha, se foi você que pediu basta clicar no botão a baixo:</p>
            <br>
            <center><a href='http://localhost/Faebulare/src/Trocar_senha.php?user=$id&cod=$security' target='_blank' style='background-color:#1c7a6c;padding:10px;text-decoration:none;color:#fff;border-radius: 10px;'>Trocar senha</a></center>
            <br>
            <p>Caso o botão não funcione, utilize o seguinte link: http://localhost/Faebulare/src/Trocar_senha.php?user=$id&cod=$security</p>
            <br>
            <p>Se não foi você que fez o pedido de alteração ignore este e-mail, lembre-se de não divulgar sua senha e esse link com ninguém</p>
            <br>
            <p>Atenção este é um email automatico, não responda</p>
            <p>Equipe Faebulare</p>
            </div>
            </body>
         </html>";

$mail->msgHTML($html);

//Replace the plain text body with one created manually

//Define a mensagem que aparece caso o HTML não funcione

$mail->AltBody = 'Texto alternativo';

//Attach an image file

/* Metodo comentado abaixo anexa algo */

//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    header('Location: Email_enviado.php');
    //echo 'Mailer Error: '. $mail->ErrorInfo;
} else {
    header('Location: Email_enviado.php');
    //echo 'Message sent!';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}

} else{ //E-mail não existe

    echo 'Não existe';

} 


?>