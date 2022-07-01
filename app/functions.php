<?php
include __DIR__ . '/env.php';

$site = "Sensational Water Damage Specialists";
$phone_number = "1300 174 902";
$admin_email = 'arijal@aiims.com.au'; // 'operations@sensationalcleaning.com.au';
// $bcc_email = "";
$no_reply_email = 'no-reply@sensational.com.au';
$recaptcha_client_secret = $client_secret;
$recaptcha_server_secret = $server_secret;

function renderImg($filename, $folder, $classname = "")
{
    $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $src = "./assets/images/" . $folder . "/" . $filename;

    if (file_exists("./assets/images/" . $folder . "/" . $filename_without_ext . ".webp")) {
        $src = "./assets/images/" . $folder . "/" . $filename_without_ext . ".webp";
    }

    return "<img src=" . $src . " alt=" . $filename_without_ext . " class='" . $classname . "'>";
}
