<?php

$recepient = "kid230671@gmail.com";
$sitename = "Creative";

$name = trim($_GET["name"]);
$phone = trim($_GET["phone"]);
$mail = trim($_GET["email"]);
$text = trim($_GET["textarea"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nТелефон: $phone \Email: $mail \nТекст: $text";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");