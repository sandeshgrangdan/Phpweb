<?php 

header("Content-Type: image/png");

require_once 'vendor/autoload.php';


    $qr = new Endroid\QrCode\QrCode();

    $qr->setText('http://localhost/Phpweb/protype/qrcode/index.php');
    $qr->setSize(200);
    $qr->setPadding(10);

    $qr-render();
