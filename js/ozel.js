$(function () {

    //Veriler sayfa yüklendiği gibi çekiliyor.
    $('#listele').load("veriler.php");

    $('#yeni-ekle').click(function () {
        $('#listele').fadeOut(200);
        $('#kayit-ekle').fadeIn(2000);
    });
    $('#duzenleme_islemi').click(function () {
        $('#listele').fadeOut(200);
        $('#kayit-duzenle').fadeIn(2000);
    });

    $('#gonder').click(function () {
        if ($('#ad_ekle').val() == "" || $('#soyad_ekle').val() == "") {

            $('#bos-alan').fadeIn(200);
            event.preventDefault();
        } else {

            $.ajax({
                type: "post",
                url: 'islem.php',
                data: $('#jquery-ekle').serialize(),
                success: function (cevap) {
                    $('#basarili-islem').fadeIn(200).text(cevap).delay(1200).fadeOut(200);
                    $('#listele').load("veriler.php");

                    $('#ad_ekle').val("");
                    $('#soyad_ekle').val("");
                }
            });

        }
    });
    $('#geridon').click(function () {
        $('#kayit-ekle').hide();
        $('#listele').fadeIn(170);


    });

    $("body").on("click", ".sils", function () {

        var bilgi_id = $(this).attr("id");

        var parent = $(this).parent("td").parent("tr");

        if (confirm('Silinecek ID=' + bilgi_id)) {

            $.ajax({



                type: "post",

                url: "islem.php?islem=sil",

                data: {
                    'bilgi_id': bilgi_id
                }, //normalde serialize ile dizi şeklinde formu yollardık bunda ise tek birşey gördeceğimiz için böyle kullanıyoruz

                success: function (silcevap) {

                    // $("#listele").load("veriler.php");

                    parent.fadeOut('slow');

                }



            })



        }



    });

    $('body').on("click", ".duzenles", function () {
        var bilgi_id = $(this).attr("id");

        $('#listele').hide();
        $('#kayit-duzenle').fadeIn(100);

        $.ajax({
            type: 'post',
            url: 'duzenle.php',
            data: {
                'bilgi_id': bilgi_id
            },
            success: function (duzenlecevap) {

                //$('#ad_duzenle').val(duzenlecevap);
                var obj = JSON.parse(duzenlecevap);

                $("#ad_duzenle").val(obj.bilgi_ad);
                $("#soyad_duzenle").val(obj.bilgi_soyad);
                $("#bilgi_id").val(bilgi_id);

            }
        });

    });


    //GÜNCELLEME İŞLEMİ 
    $('#guncelle').click(function () {


        $.ajax({
            type: "post",
            url: 'islem.php',
            data: $('#jquery-duzenle').serialize(),
            success: function (cevapd) {
                $('#basarili-islem-duzenle').fadeIn(200).text(cevapd).delay(4000).fadeOut(200);
                $('#listele').load("veriler.php");


            }
        });


    });

    $('#geridonduzenle').click(function () {
        $('#kayit-duzenle').hide();
        $('#listele').fadeIn(170);


    });


});


//Fade Out : Efektif bir şekilde yok eder.
//Fade In : Efektif bir şekilde gelmesini sağlar.
//event.preventDefault : Olayı Durdurmak için kullanılır.
// Confirm : Onay aldıktan sonra olan işlemi yapar