<?php

if(isset($_POST['email']) && !empty($_POST($_POST['name'])))

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['msg']);

$to = "guipadocastro@gmail.com";
$subjec = "Mensagem site PadoDevs";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;
$header = "From:guipadocastro@gmail.com". "\r\n"
            "Reply-To: ".$email. "\e\n".
            "X=Mailer: PHP/".phpversion();

if(mail($to.$subjec,$body,$header)) {

    echo("Email enviado com sucesso!");

}else{
    echo("O Email não pode ser enviado");
}



?>