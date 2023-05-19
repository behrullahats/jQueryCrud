<?php

require_once 'baglan.php';

$bilgisor = $db->prepare("SELECT * FROM bilgi where bilgi_id=:id");
$bilgisor->execute([
    'id' => @$_POST['bilgi_id']

]);

$bilgicek = $bilgisor->fetch(PDO::FETCH_ASSOC);

//echo $bilgicek['bilgi_ad'];
$array = array(

    'bilgi_ad' => $bilgicek['bilgi_ad'],
    'bilgi_soyad' => $bilgicek['bilgi_soyad']

);
echo $json = json_encode($array);
