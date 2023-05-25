<?php
//require das classes do PHP Mailer
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 'marco.tereso@gmail.com';
$mail->Password = 'troqqizzianhgpis';
$mail->Port = 587;
$mail->setFrom('marco.tereso@gmail.com','Stand Melhor Opção');
$mail->addAddress('marco.tereso@gmail.com');
$mail->isHTML(true);
$mail->Subject="Registo no Stand Melhor Opção";
$mail->Body = nl2br("Bem vindo! <br>Informamos que foi adicionado ao nosso portal do stand com sucesso!");
if(!$mail->send()){
	echo "Não foi possível enviar o email.<br>";
	echo "Erro: ".$mail->ErrorInfo;
}else{
	echo "<script>alert('Envio de email bem sucedido');</script>";
	//echo "<script>window.location.href= '../html/formRegisto.html'</script>";
}

?>