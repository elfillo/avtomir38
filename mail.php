<?php

$recepient = "fill1992@inbox.ru";
$sitename = "Автомир38";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$sendlocation = trim($_POST["locationCatch"]);
$message = "\nИмя: $name \n
            Телефон: $phone \n
            Заявка сделана с $sendlocation \n";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");