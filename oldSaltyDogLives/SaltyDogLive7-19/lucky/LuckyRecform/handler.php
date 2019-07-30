<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler(); 

$validator = $pp->getValidator();
$validator->fields(['Name','Email'])->maxLength(50);
$validator->field('Email')->isEmail();
$validator->field('Message')->maxLength(6000);

$visitor_email = $_POST['email2'];

// $mail = new PHPMailer();
// $mail->AddCC('somebody@example.com');


// $pp->requireReCaptcha();
// $pp->getReCaptcha()->initSecretKey('6Lckc5YUAAAAAOGDBbPbDwn-ooUoT5Cbpk0YqTVN');

$pp->attachFiles(['image']);

$pp->sendEmailTo('kat@saltydog.com'); // ← Your email here
$pp->AddCC($visitor_email);
// $pp->sendEmailTo('kat@saltydog.com');

echo $pp->process($_POST);