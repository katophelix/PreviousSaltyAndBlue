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
$validator->fields(['Name','Location'])->areRequired()->maxLength(50);

$validator->field('Message')->maxLength(50);


$pp->requireReCaptcha();
$pp->getReCaptcha()->initSecretKey('6Lckc5YUAAAAAOGDBbPbDwn-ooUoT5Cbpk0YqTVN');


$pp->sendEmailTo('help@saltydog.com'); // ← Your email here

echo $pp->process($_POST);