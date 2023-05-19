<?php

require_once 'baglan.php';

$bilgisor = $db->prepare("SELECT * FROM bilgi order by bilgi_id DESC");
$bilgisor->execute();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ad</th>
                <th>Soyad</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            <?php

            while ($bilgicek = $bilgisor->fetch(PDO::FETCH_ASSOC)) {

            ?>
                <tr>
                    <td><?php echo $bilgicek['bilgi_id'] ?></td>
                    <td><?php echo $bilgicek['bilgi_ad'] ?></td>
                    <td><?php echo $bilgicek['bilgi_soyad'] ?></td>
                    <td width="20">
                        <button id="<?php echo $bilgicek['bilgi_id'] ?>" class="btn btn-primary btn-sm duzenles">Düzenle</button>
                    </td>
                    <td width="20">
                        <button id="<?php echo $bilgicek['bilgi_id'] ?>" class="btn btn-danger btn-sm sils">Sil</button>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>


</body>

</html>