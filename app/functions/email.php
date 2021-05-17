<?php

function send(array $data){

    $email = new PHPMailer\PHPMailer\PHPMailer;

    $email->CharSet = 'UTF-8';
    $email->SMTSecure = 'PLAIN';
    $email->isSMTP();
    $email->SMTPDebug = 2;
    $email->Host = 'smtp.mailtrap.io';
    $email->Port = 465;
    $email->SMTPAuth = true;
    $email->Username = 'b52a9a120f718e';
    $email->Password = 'd15d1744286638';
    $email->isHTML(true);
    $email->setFrom('marnandf@gmail.com');
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['mensagem'];
    $email->Subject = $data['assunto'];
    $email->AltBody = 'Para ver este email tenha certeza de estar vendo em um programa que aceita ver HTML';
    $email->MsgHTML($data['mensagem']);

    return $email->send();

}

?>