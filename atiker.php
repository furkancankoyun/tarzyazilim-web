<?php include 'config.php'; ?>
<?php include 'system.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Hoşgeldiniz | Tarz Yazılım</title>
  <?php include 'head.php'; ?>
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
<!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
  <?php include 'analytics.php'; ?>
  <!-- Header Section -->
  <!--==================================================-->
  <?php include 'header.php'; ?>
  <!-- Breadcrumb Section -->
  <!--==================================================-->
  <section class="breadcrumb-container">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="/">ANA SAYFA</a></li>
        <li class="active">ATİKER LİSANS BAŞVURU FORMU</li>
      </ol>
    </div>
  </section>
  <!-- Atiker Section -->
  <!--==================================================-->
  <section id="atiker-form" class="netcity-form">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <img src="./img/atk.png" class="img-responsive" style="margin: 0 auto; height: 6rem;" alt="atiker_logo" />
        </div>
        <div class="col-xs-12">
          <h1 class="netcity-form__title" style="text-align: center;">Atiker Yazılım Lisans Başvuru Formu</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <form name="nc_form" id="nc_form" method="post" action="atiker-basvuru" autocomplete="on">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <input name="nc_form__com_title" id="nc_form__com_title" type="text" class="form-control" placeholder="Ticari Ünvan" required />
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <input name="nc_form__name" id="nc_form__name" type="text" class="form-control" placeholder="Adınız" required />
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <input name="nc_form__lastname" id="nc_form__lastname" type="text" class="form-control atiker_input" placeholder="Soyadınız" required />
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <input name="nc_form__address" id="nc_form__address" type="text" class="form-control" placeholder="Adresiniz" required />
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <input name="nc_form__county" id="nc_form__county" type="text" class="form-control atiker_input" placeholder="İlçe" required />
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <input name="nc_form__region" id="nc_form__region" type="text" class="form-control atiker_input" placeholder="İl" required />
              </div>
              <div class="col-md-4 col-sm-12 col-xs-12">
                <input name="nc_form__email" id="nc_form__email" type="email" class="form-control" placeholder="E-Posta" required />
              </div>
              <div class="col-md-4 col-sm-12 col-xs-12">
                <input name="nc_form__tel" id="nc_form__tel" type="tel" class="form-control" placeholder="Sabit Telefon" required />
              </div>
              <div class="col-md-4 col-sm-12 col-xs-12">
                <input name="nc_form__mobile" id="nc_form__mobile" type="tel" class="form-control" placeholder="Cep Telefonu" required />
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <label for="padi">Ana Paket Lisansı</label>
                <select name="padi" id="padi" class="form-control" placeholder="Ana Paket Lisansı">
                  <option value="">Ana Paket Lisansı Seçin...</option>
                </select>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <label for="ksayisi">İlave Kullanıcı Sayısı</label>
                <select name="ksayisi" id="ksayisi" class="form-control" disabled="disabled" >
                  <option value="">Seçin...</option>
                </select>
              </div>
              <div class="col-md-4 col-sm-12 col-xs-12">
                <label for="fiyat">Toplam Lisans Fiyatı (TL)</label>
                  <label name="fiyat" id="fiyat" class="form-control" disabled="disabled" ></label>
              </div>
              <div class="col-md-4 col-sm-12 col-xs-12">
                <label for="itutari"> %20 İndirim Tutarı (TL)</label>
                <label name="itutari" id="itutari" class="form-control" disabled="disabled" >
                </label>
              </div>
              <div class="col-md-4 col-sm-12 col-xs-12">
                <label for="ifiyat">Genel Toplam Tutar (TL)</label>
                <label name="ifiyat" id="ifiyat" class="form-control" disabled="disabled">
                </label>
              </div>
              <div class="col-md-offset-4 col-md-4 col-sm-12 col-xs-12">
                <p id="nc_form__package01--selected__content"></p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <h3>PAKETE DAHİL ÜRÜN VE HİZMETLERİMİZ</h3>
              </div>
              <div class="col-xs-12">
                <ul class="list-group">
                  <li class="list-group-item">+ FİYATLARIMIZA KDV HARİÇTİR.</li>
                  <li class="list-group-item">+ BELİRTİLEN FİYATLAR SADECE LİSANS BEDELİ OLUP, SİSTEM KURLUMU, DEVREYE ALMA, EĞİTİM GİBİ HİZMET BEDELLERİ FİYATA DAHİL DEĞİLDİR.</li>
                  <li class="list-group-item">+ TESLİMAT: ÖDEMEYİ TAKİP EDEN 2 İŞ GÜNÜ İÇERİSİNDE LİSANSLARIMIZ DİJİTAL ORTAMLARDA TARAFINIZA TESLİM EDİLİR. EĞİTİM HİZMETLERİNE KARŞILIKLI YAPILACAK ANLAŞMADA BELİRTİLERN TARİHTE BAŞLANIR.</li>
                  <li class="list-group-item">+ LİSANS FİYATLARINA 1 YILLIK GÜNCELLEME BEDELİ DAHİLDİR.</li>
                  <li class="list-group-item">+ ÖDEME VE DİĞER DETAYLAR İÇİN SİPARİŞ FORMUNUN TARAFIMIZA ULAŞMASI HALİNDE SİZİNLE İLETİŞİME GEÇİLEREK DETAYLI SÖZLEŞME TARAFINIZ GÖNDERİLECEKTİR.</li>
                  <li class="list-group-item">+ KURULUM, EĞİTİM, DEVREYE ALMA GİBİ HİZMET FİYATLARIMIZA 3 AY BOYUNCA UZAK MASAÜSTÜ DESTEK HİZMETİ DAHİLDİR. DESTEK HİZMETLERİMİZ RESMİ ÇALIŞMA GÜN VE SAATLERİNDE VERİLMEKTEDİR.</li>
                  <li class="list-group-item">+ RAKİP PROGRAMLARIN GEÇİŞ İŞLMELERİNİZ, RAKİP PROGRAMI ALDIĞINIZI GÖSTEREN FATURAYI TARAFIMIZA İBRAZ ETMENİZ HALİNDE İLAVE OLARAK İNDİRİM SAĞLANIR. BU İNDİRİM ORANI %10'U GEÇMEZ.</li>
                  <li class="list-group-item">+ YERİNDE KURULUM VE EĞİTİM HİZMETLERİ KAHRAMANMARAŞ MERKEZ HARİCİNDE OLMASI HALİNDE ULAŞIM, KONAKLAMA, BARINMA GİBİ GİDERLER TARAFINIZDA KARŞILANIR.</li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-offset-4 col-md-4 col-sm-12 col-xs-12">
                <div class="g-recaptcha" data-sitekey="6Lf4TWIUAAAAAH2bWr5ZjFc7GHF3mNsUSkagtEu3"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input name="nc_form__btnsubmit" id="nc_form__btnsubmit" type="submit" value="Formu Gönder" class="btn btn-success btn-block" />
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input name="nc_form__btnreset" id="nc_form__btnreset" type="reset" value="Formu Temizle" class="btn btn-warning btn-block" />
              </div>
            </div>
          </form>
          <?php
            if ($_POST) {
              function mailgonder($kimden,$kime,$nc_form__email,$konu,$mesaj){
                require "mail/class.phpmailer.php";
                require_once "mail/class.smtp.php";
                $mail = new PHPMailer();   
                $mail->IsSMTP();
                $mail->From     = $kimden; 
                $mail->Sender   = $kimden;  
                $mail->FromName = "Atiker Lisans Başvurusu";  //göndericinin adı
                $mail->Host     = "smtp.yandex.com.tr"; //smtp nin kullanacağı mail sunucusu
                $mail->SMTPSecure = "ssl";
                $mail->SMTPAuth = true;  
                $mail->Username = "bahadir@tarzyazilim.com.tr";  //mail hesabı kullanıcı adı
                $mail->Password = "Tarz*2393*";  //mail hesabına ait şifre
                $mail->Port = "465"; //smtp nin kullanacağı giden mail sunucu portu
                $mail->CharSet = "utf-8";
                $mail->WordWrap = 50;
                $mail->IsHTML(true);
                $mail->Subject  = $konu; 
                $body = $mesaj;
                $textBody = strip_tags($mesaj);
                $mail->Body = $body;  
                $mail->AltBody = $textBody;  
                $mail->AddAddress($kime);  //mailin gönderileceği mail adresi
                $mail->AddAddress($nc_form__email);  //mailin gönderileceği mail adresi
                return ($mail->Send())?true:false;
                $mail->ClearAddresses();  
                $mail->ClearAttachments();
              }
            }
          ?>
          <?php
              $hmesaji="";
              if(isset($_POST["nc_form__btnsubmit"])){
                  $nc_form__name         =   (isset($_POST["nc_form__name"]))?$_POST["nc_form__name"]:"";
                  $nc_form__name         =   (isset($_POST["nc_form__name"]))?$_POST["nc_form__lastname"]:"";
                  $nc_form__com_title   =   (isset($_POST["nc_form__com_title"]))?$_POST["nc_form__com_title"]:"";
                  $nc_form__email        =   (isset($_POST["nc_form__email"]))?$_POST["nc_form__email"]:"";
                  $nc_form__address      =   (isset($_POST["nc_form__address"]))?$_POST["nc_form__address"]:"";
                  $nc_form__region       =   (isset($_POST["nc_form__region"]))?$_POST["nc_form__region"]:"";
                  $nc_form__county       =   (isset($_POST["nc_form__county"]))?$_POST["nc_form__county"]:"";
                  $nc_form__tel          =   (isset($_POST["nc_form__tel"]))?$_POST["nc_form__tel"]:"";
                  $nc_form__mobile       =   (isset($_POST["nc_form__mobile"]))?$_POST["nc_form__mobile"]:"";
                  $nc_form__package01    =   (isset($_POST["nc_form__package01"]))?$_POST["nc_form__package01"]:"";
                  $nc_form__padi    =   (isset($_POST["padi"]))?$_POST["padi"]:"";
                  $nc_form__ksayisi    =   (isset($_POST["ksayisi"]))?$_POST["ksayisi"]:"";
                  $nc_form__fiyat    =   (isset($_POST["fiyat"]))?$_POST["fiyat"]:"";
                  $nc_form__itutari    =   (isset($_POST["itutari"]))?$_POST["itutari"]:"";
                  $nc_form__ifiyat    =   (isset($_POST["ifiyat"]))?$_POST["ifiyat"]:"";
                  //iletisim formu hangi değerlerle bize ulaşsın
                  $mesajk     =   "<b>Adı ve Soyadı:</b> $nc_form__name $nc_form__lastname <hr />";
                  $mesajk     .=  "<b>Ticari Ünvan:</b> $nc_form__com_title <br />";
                  $mesajk     .=  "<b>Cep Telefonu:</b> $nc_form__mobile <br />";
                  $mesajk     .=  "<b>Sabit Telefon:</b> $nc_form__tel <br />";
                  $mesajk     .=  "<b>Eposta Adresi:</b> $nc_form__email <br />";
                  $mesajk     .=  "<b>Adres:</b> $nc_form__address <br />";
                  $mesajk     .=  "<b>İl / İlçe:</b> $nc_form__county / $nc_form__region <br />";
                  $mesajk     .=  "<b>Talep Edilen Paket Adı:</b> $nc_form__padi <br />";
                  $mesajk     .=  "<b>Talep Edilen Paket Kullanıcı Sayısı:</b> $nc_form__ksayisi <br />";
                  $mesajk     .=  "<b>Talep Edilen Paket Fiyatı:</b> $nc_form__fiyat <br />";
                  $mesajk     .=  "<b>Talep Edilen Paket İndirimli Tutarı:</b> $nc_form__itutari <br />";
                  $mesajk     .=  "<b>Talep Edilen Paket İndirimli Fiyatı:</b> $nc_form__ifiyat <hr />";
                  $mesajk     .=  "<span style='font-size:10px;color:#bbbbbb;'>Bu mesaj ". date('H:i:s d.m.Y') ." tarihinde gönderildi.</span>";
                  //iletisim formu hangi mail adresinden hangi mail adresine gitsin?
                  if(mailgonder("bahadir@tarzyazilim.com.tr","bahadir@tarzyazilim.com.tr",$nc_form__email,$nc_form__name,$mesajk))
                  {
                      $hmesaji =  "<div class='alert alert-success' role='alert'>Başvuru işleminiz başarılı !</div>";
                      echo $hmesaji;
                  }
                  else
                  {
                      $hmesaji =  "<div class='alert alert-danger' role='alert'>Mail gönderme işlemi gerçekleşmedi !</div>";
                      echo "<p>$hmesaji</p>";
                  }
              }
          ?>
        </div>
      </div>
    </div>
  </section>
  <?php include 'footer.php'; ?>
  <?php include 'script.php'; ?>
  <script>
    $("#nc_form__package01").change(function () {
      document.getElementById("nc_form__package01--selected__content").innerHTML="<b>Seçtiğiniz Paket: </b>"+document.getElementById("nc_form__package01").value;
    });
  </script>
  <script>
    $(document).ready(function () {
      ajaxFunc("padi", "", "#padi");

      $("#padi").on("change", function () {

        $("#ksayisi").attr("disabled", false).html("<option value=''>Seçin..</option>");
        console.log($(this).val());
        ajaxFunc("ksayisi", $(this).val(), "#ksayisi");

      });

      $("#ksayisi").on("change", function () {

        $("#fiyat").attr("disabled", false).html("<option value=''>Liste Fiyatı..</option>");
        console.log($(this).val());
        ajaxFunc("fiyat", $(this).val(), "#fiyat");

      });

      $("#ksayisi").on("change", function () {

        $("#itutari").attr("disabled", false).html("<option value=''>İndirim Tutarı..</option>");
        console.log($(this).val());
        ajaxFunc("itutari", $(this).val(), "#itutari");

      });

      $("#ksayisi").on("change", function () {

        $("#ifiyat").attr("disabled", false).html("<option value=''>Toplam Fiyat..</option>");
        console.log($(this).val);
        ajaxFunc("ifiyat", $(this).val(), "#ifiyat");

      });

      function ajaxFunc(action, name, id) {
        $.ajax({
          url: "ajax.php",
          type: "POST",
          data: {
            action: action,
            name: name
          },
          success: function (sonuc) {
            $.each($.parseJSON(sonuc), function (index, value) {
              var row = "";
              row += '<option value="' + value + '">' + value + '</option>';
              $(id).append(row);
            });
          }
        });
      }
    });
  </script>
</body>

</html>