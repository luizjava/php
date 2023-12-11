<?php 
// Caminho da biblioteca PHPMailer
require './phpmailer/class.phpMailerAutoload';
 
// Instância do objeto PHPMailer
$mail = new PHPMailer;
 
// Configura para envio de e-mails usando SMTP
$mail->isSMTP();
 
// Servidor SMTP
$mail->Host = 'smtp.gmail.com';
 
// Usar autenticação SMTP
$mail->SMTPAuth = true;
 
// Usuário da conta
$mail->Username = 'luizgarcia.java@gmail.com';
 
// Senha da conta
$mail->Password = 'java.doc';
 
// Tipo de encriptação que será usado na conexão SMTP
$mail->SMTPSecure = 'ssl';
 
// Porta do servidor SMTP
$mail->Port = 465;
 
// Informa se vamos enviar mensagens usando HTML
$mail->IsHTML(true);
 
// Email do Remetente
$mail->From = 'wllsistemas02@gmail.com';
 
// Nome do Remetente
$mail->FromName = 'William';
 
// Endereço do e-mail do destinatário
$mail->addAddress('wllfl@ig.com.br');
 
// Assunto do e-mail
$mail->Subject = 'E-mail PHPMailer';
 
// Mensagem que vai no corpo do e-mail
$mail->Body = '<h1>Mensagem enviada via PHPMailer</h1>';
 
// Envia o e-mail e captura o sucesso ou erro
if($mail->Send()):
    echo 'Enviado com sucesso !';
else:
    echo 'Erro ao enviar Email:' . $mail->ErrorInfo;
endif;
?>