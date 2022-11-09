<?php

//function send($data) {
//    $to = 'edson.tibo@gmail.com';
//    $subject = $data->subject;
//    $message = $data->message;
//    $headers = "From: {$data->email}" . "\r\n" .
//    'Reply-TO: contato@devclass.com.br' . "\r\n" .
//    'X-Mailer: PHP/' . phpversion();
//
//    return mail($to, $subject, $message, $headers);
//}

function send(array $data) {
    $email = new PHPMailer\PHPMailer\PHPMailer;
    $email->CharSet = 'UTF-8';
    $email->SMTPSecure = 'plain'; //ssl;
    $email->isSMTP();
    $email->Host = 'smtp.mailtrap.io';
    $email->Port = '2525';
    $email->SMTPAuth = true;
    $email->Username = '451003b5ea279e';
    $email->Password = '49275f94d04afc';
    $email->isHTML(true);
    $email->setFrom('edson.tibo@gmail.com');
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['mensagem'];
    $email->Subject = $data['assunto'];
    $email->AltBody = 'Para ver este email tenha certeza de estar vendo em um programa que aceita HTML';
    //$email->MsgHTML($data['mensagem']);

    echo $email->ErrorInfo;

    return $email->send();
}