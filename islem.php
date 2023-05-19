<?php

require_once 'baglan.php';

if (isset($_POST['bilgiekle'])) {

    $bilgiekle = $db->prepare("INSERT INTO bilgi SET

        bilgi_ad=:bilgi_ad,
        bilgi_soyad=:bilgi_soyad

    ");
    $insert = $bilgiekle->execute([
        'bilgi_ad' => htmlspecialchars($_POST['ad_ekle']),
        'bilgi_soyad' => htmlspecialchars($_POST['soyad_ekle'])
    ]);
    if ($insert) {
        echo "Kayıt İşlemi Başarı ile eklendi";
    }
}

if (@$_GET['islem'] == "sil") {

    $sil = $db->prepare("DELETE FROM bilgi where bilgi_id=:bilgi_id");

    $kontrol = $sil->execute(array(



        'bilgi_id' => $_POST['bilgi_id']



    ));
}
if (isset($_POST['bilgiduzenle'])) {

    $bilgiekle = $db->prepare("UPDATE  bilgi SET

        bilgi_ad=:bilgi_ad,
        bilgi_soyad=:bilgi_soyad
        WHERE bilgi_id={$_POST['bilgi_id']}
    ");
    $update = $bilgiekle->execute([
        'bilgi_ad' => htmlspecialchars($_POST['ad_duzenle']),
        'bilgi_soyad' => htmlspecialchars($_POST['soyad_duzenle'])
    ]);
    if ($update) {
        echo "Kayıt Başarı İle Güncellendi";
    }
}
