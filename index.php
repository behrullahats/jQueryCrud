<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery PHP Crud İşlemleri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

</head>
<style>
    #kayit-ekle {
        display: none;
    }

    #kayit-duzenle {
        display: none;
    }

    #bos-alan {
        display: none;
    }

    #basarili-islem {
        display: none;
    }

    #basarili-islem-duzenle {
        display: none;
    }

    #basarili-islem {
        display: none;
    }
</style>

<body>
    <div class="container">
        <H1><a href="index.php">jQuery Crud İşlemleri</a></H1>
        <div align="right">
            <button id="yeni-ekle" class="btn btn-success mb-4">Yeni Ekle</button>
        </div>

        <hr>
        <div id="listele"></div>


        <div id="kayit-ekle">
            <h3>Kayıt Ekleme</h3>
            <hr>
            <div id="bos-alan" class="alert alert-danger">Form Alanlarını Boş Bırakamazsınız</div>
            <div id="basarili-islem" class="alert alert-success">Kayıt Başarı ile eklendi</div>
            <form id="jquery-ekle" method="post">
                <div class="form-group">
                    <label for="">Adınız</label>
                    <input type="text" id="ad_ekle" class="form-control" name="ad_ekle" placeholder="Adınızı Giriniz">

                </div>
                <div class="form-group">
                    <label for="">Soyadınız</label>
                    <input type="text" id="soyad_ekle" class="form-control" name="soyad_ekle" placeholder="Soyadınızı Giriniz">

                </div>
                <input type="hidden" name="bilgiekle">
                <button type="button" id="gonder" class="btn btn-primary mt-2">Kayıt Ekle</button>
                <button type="button" id="geridon" class="btn btn-warning mt-2">Geri Dön</button>

            </form>
        </div>
        <div id="kayit-duzenle">
            <h3>Kayıt Düzenleme</h3>
            <hr>
            <div id="bos-alan" class="alert alert-danger">Form Alanlarını Boş Bırakamazsınız</div>
            <div id="basarili-islem-duzenle" class="alert alert-success">Kayıt Başarı ile eklendi</div>
            <form id="jquery-duzenle" method="post">
                <div class="form-group">
                    <label for="">Adınız</label>
                    <input type="text" id="ad_duzenle" class="form-control" name="ad_duzenle" value="">

                </div>
                <div class="form-group">
                    <label for="">Soyadınız</label>
                    <input type="text" id="soyad_duzenle" class="form-control" name="soyad_duzenle" value="">

                </div>
                <input type="hidden" name="bilgiduzenle">
                <input type="hidden" id="bilgi_id" name="bilgi_id" value="">
                <button type="button" id="guncelle" class="btn btn-primary mt-2">Kayıt Düzenle</button>
                <button type="button" id="geridonduzenle" class="btn btn-warning mt-2">Geri Dön</button>

            </form>
        </div>
    </div>






    <script type="text/javascript" src="js/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="js/ozel.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>