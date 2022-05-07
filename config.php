<?php 
ini_set("sendmail_from", $_GET["email"]);
$to = "turvesproducoes@gmail.com";
$number = $_GET["phone"];
$subject = "Message from HTML Learners";
$message = $_GET["message"];
$header =  $_GET["email"];


$result = mail ($to,$number,$subject,$message,$header);

if( $result == true){
    echo "Mensagem enviada com sucesso...";
}else{
    echo "*Desculpe nao foi possivel enviar...";
}
?>