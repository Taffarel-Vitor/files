<?php
//include arquivo proteção
include "funcao_limpa.php";

$remetente = protecao_email($_POST["email"]);
$nome = protecao($_POST['nome']);
$assunto = protecao($_POST['assunto']);
$msg = protecao(wordwrap($_POST["mensagem"]));
$headers = "MIME-Version: 1.1\r\n"; 
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From:".$remetente."\r\n";
// remetente 
$headers .= "Return-Path:".$remetente."\r\n"; 
// return-path
if((strlen($remetente) < 5) || (strlen($msg) < 10)){
     header("location:contato.php");

}
else{
    $envio = mail("taffarel@yesverdade.com",$assunto,$nome.'<br/>'.$msg, $headers);
    if($envio){
        header("location:contato.php?var=success");
        
    }
    else{ 
         header("location:contato.php?var=ERROR");
     }
}
 ?>