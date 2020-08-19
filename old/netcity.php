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
  <header class="navbar navbar-default navbar-fixed-top" role="navigation">
    <?php include 'navbar-top.php'; ?>
    <div class="container">
      <!-- Logo and Mobil Menu Section -->
      <!--==================================================-->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Mobile Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        <a class="navbar-brand" href="/"><img src="img/tarz-logo.png" alt="tarz-yazilim-logo"></a>
      </div>
      <!-- Main Menu -->
      <!--==================================================-->
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">KURUMSAL <i class="fa fa-angle-down small"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="Hakkimizda">Hakkımızda</a></li>
              <li><a href="Hizmetlerimiz">Neler Yaparız?</a></li>
              <li><a href="Insan-Kaynaklari">İnsan Kaynakları</a></li>
              <li><a href="Is-Ortaklarimiz">İş Ortaklarımız</a></li>
            </ul>
          </li>
          <li><a href="Referanslarımız">REFERANSLARIMIZ</a></li>
          <li class="active"><a href="Netcity">NETCİTY BAŞVURU</a></li>
          <li><a href="atiker-basvuru">ATİKER BAŞVURU</a></li>
          <li><a href="Iletisim">İLETİŞİM</a></li>
    
          <li><a href="TARZ_DESTEK.exe" class="btn-primary-border"><i class="fa fa-download"></i> TARZ DESTEK PROGRAMI</a></li>
        </ul>
      </div>
    </div>
  </header>
  <!-- Breadcrumb Section -->
  <!--==================================================-->
  <section class="breadcrumb-container">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="/">ANA SAYFA</a></li>
        <li class="active">NETCİTY BAŞVURU</li>
      </ol>
    </div>
  </section>
  <!-- NetCity Section -->
  <!--==================================================-->
  <section class="netcity-form">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
                      <img src="./img/netcity.png" class="img-responsive" style="margin: 0 auto; height: 4rem;" alt="netcity_logo"/>
          <h1 class="netcity-form__title" style="text-align: center;">Netcity Başvuru Formu</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <form name="nc_form" id="nc_form" method="post" action="Netcity" autocomplete="on">
            <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <input name="nc_form__name" id="nc_form__name" type="text" class="form-control" placeholder="Adınız Soyadınız veya Ticari Ünvan" required>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <input name="nc_form__personalid" id="nc_form__personalid" type="text" class="form-control" placeholder="T.C. Kimlik Numaranız veya Vergi No" required>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <input name="nc_form__email" id="nc_form__email" type="email" class="form-control" placeholder="E-Mail" required>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <input name="nc_form__address" id="nc_form__address" type="text" class="form-control" placeholder="Adresiniz" required>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <select name="nc_form__region" id="nc_form__region" class="form-control col-xs-12">
                  <option selected value="">İl</option>
                  <option value="Kahramanmaraş">Kahramanmaraş</option>
                </select>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <select name="nc_form__county" id="nc_form__county" class="form-control col-xs-12">
                  <option selected value="">İlçe</option>
                  <option value="Onikişubat">Onikişubat</option>
                  <option value="Dulkadiroğlu">Dulkadiroğlu</option>
                </select>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <input name="nc_form__tel" id="nc_form__tel" type="tel" class="form-control" placeholder="Sabit Telefon">
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <input name="nc_form__mobile" id="nc_form__mobile" type="tel" class="form-control" placeholder="Cep Telefonu" required>
              </div>
              <div class="col-md-offset-4 col-md-4 col-sm-12 col-xs-12">
                <label class="col-xs-12" for="nc_form__package01">PAKETLER</label>
                <select name="nc_form__package01" id="nc_form__package01" class="form-control col-xs-12">
                  <option selected value="">Paket Seç</option>
                  <option value="12 MBİT BİREYSEL PAKET - 1 AYLIK - 55 TL">12 MBİT BİREYSEL PAKET - 1 AYLIK - 55 TL</option>
                  <option value="12 MBİT BİREYSEL PAKET - 3 AYLIK - 160 TL">12 MBİT BİREYSEL PAKET - 3 AYLIK - 160 TL</option>
                  <option value="12 MBİT BİREYSEL PAKET - 6 AYLIK - 310 TL">12 MBİT BİREYSEL PAKET - 6 AYLIK - 310 TL</option>
                  <option value="12 MBİT BİREYSEL PAKET - 12 AYLIK - 590 TL">12 MBİT BİREYSEL PAKET - 12 AYLIK - 590 TL</option>
                  <option value="24 MBİT BİREYSEL PAKET - 1 AYLIK - 75 TL">24 MBİT BİREYSEL PAKET - 1 AYLIK - 75 TL</option>
                  <option value="24 MBİT BİREYSEL PAKET - 3 AYLIK - 220 TL">24 MBİT BİREYSEL PAKET - 3 AYLIK - 220 TL</option>
                  <option value="24 MBİT BİREYSEL PAKET - 6 AYLIK - 425 TL">24 MBİT BİREYSEL PAKET - 6 AYLIK - 425 TL</option>
                  <option value="24 MBİT BİREYSEL PAKET - 12 AYLIK - 800 TL">24 MBİT BİREYSEL PAKET - 12 AYLIK - 800 TL</option>
                  <option value="24 MBİT KOBİ PAKETİ (SABİT IP DAHİL) 1 AYLIK - 110 TL">24 MBİT KOBİ PAKETİ (SABİT IP DAHİL) 1 AYLIK - 110 TL</option>
                  <option value="24 MBİT KOBİ PAKETİ (SABİT IP DAHİL) 3 AYLIK - 320 TL">24 MBİT KOBİ PAKETİ (SABİT IP DAHİL) 3 AYLIK - 320 TL</option>
                  <option value="24 MBİT KOBİ PAKETİ (SABİT IP DAHİL) 6 AYLIK - 620 TL">24 MBİT KOBİ PAKETİ (SABİT IP DAHİL) 6 AYLIK - 620 TL</option>
                  <option value="24 MBİT KOBİ PAKETİ (SABİT IP DAHİL) 12 AYLIK - 1180 TL">24 MBİT KOBİ PAKETİ (SABİT IP DAHİL) 12 AYLIK - 1180 TL</option>
                  <option value="DETICATED KURUMSAL PAKET (SABİT IP DAHİL) 20/20 MBİT(AYLIK) - 400 TL">DETICATED KURUMSAL PAKET (SABİT IP DAHİL) 20/20 MBİT(AYLIK) - 400 TL</option>
                  <option value="DETICATED KURUMSAL PAKET (SABİT IP DAHİL) 50/50 MBİT(AYLIK) - 600 TL">DETICATED KURUMSAL PAKET (SABİT IP DAHİL) 50/50 MBİT(AYLIK) - 600 TL</option>
                </select>
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
                  <li class="list-group-item">- SEÇİLEN AY KADAR İNTERNET ERİŞİM HİZMETİ</li>
                  <li class="list-group-item">- SİSTEME UYUMLU MODEMİNİZ YOK İSE EĞER BİR DEFAYA MAHSUS OLMAK ÜZERE 130 TL’YE KURULUM EKİBİMİZ SİZE WI-FI UYUMLU MODEMİN KURULUMUNU YAPACAKTIR</li>
                  <li class="list-group-item">- NETWORK KABLOSU(CAT 6) 2.00 TL/ METRESİ</li>
                  <li class="list-group-item">- NETWORK KABLOSU İÇİN KÖPRÜ CİHAZININ KULLANILMASI HALİNDE 10 TL/ADET ŞEKLİNDE ÜCRETLENDİRME YAPILIR</li>
                  <li class="list-group-item">- 12 AY ABONELİKLERDE 175 TL AKTİVASYON ÜCRETİ ALINMAZ, HARİCEN ÜCRET İNTERNET BEDELİNE İLAVE OLARAK TAHSİL EDİLİR</li>
                  
                  <li class="list-group-item">- BELİRTİLEN HIZLAR; HAVA KOŞULLARI,SİNYAL KİRLİLİĞİ VE BULUNDUĞUNUZ LOKASYON YOĞUNLUĞUNA GÖRE DEĞİŞİKLİK GÖSTEREBİLİR</li>
                  <li class="list-group-item">- FİYATLARIMIZ 31.12.2018 TARİHİNE KADAR GEÇERLİDİR</li>
                  
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
                <input name="nc_form__btnsubmit" id="nc_form__btnsubmit" type="submit" value="Formu Gönder" class="btn btn-success btn-block">
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input name="nc_form__btnreset" id="nc_form__btnreset" type="reset" value="Formu Temizle" class="btn btn-warning btn-block">
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
                $mail->FromName = "NetCity Başvurusu";  //göndericinin adı
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
                  $nc_form__personalid   =   (isset($_POST["nc_form__personalid"]))?$_POST["nc_form__personalid"]:"";
                  $nc_form__email        =   (isset($_POST["nc_form__email"]))?$_POST["nc_form__email"]:"";
                  $nc_form__address      =   (isset($_POST["nc_form__address"]))?$_POST["nc_form__address"]:"";
                  $nc_form__region       =   (isset($_POST["nc_form__region"]))?$_POST["nc_form__region"]:"";
                  $nc_form__county       =   (isset($_POST["nc_form__county"]))?$_POST["nc_form__county"]:"";
                  $nc_form__tel          =   (isset($_POST["nc_form__tel"]))?$_POST["nc_form__tel"]:"";
                  $nc_form__mobile       =   (isset($_POST["nc_form__mobile"]))?$_POST["nc_form__mobile"]:"";
                  $nc_form__package01    =   (isset($_POST["nc_form__package01"]))?$_POST["nc_form__package01"]:"";
                  //iletisim formu hangi değerlerle bize ulaşsın
                  $mesajk     =   "<b>Müracaat Eden:</b> $nc_form__name <hr />";
                  $mesajk     .=  "<b>Müracaat Edenin T.C. Kimlik No / Vergi No:</b> $nc_form__personalid <br />";
                  $mesajk     .=  "<b>Cep Telefonu:</b> $nc_form__mobile <br />";
                  $mesajk     .=  "<b>Sabit Telefon:</b> $nc_form__tel <br />";
                  $mesajk     .=  "<b>Eposta Adresi:</b> $nc_form__email <br />";
                  $mesajk     .=  "<b>Açık Adresi:</b> $nc_form__address <br />";
                  $mesajk     .=  "<b>Adres İl/İlçe:</b> $nc_form__county / $nc_form__region <br />";
                  $mesajk     .=  "<b>Talep Edilen Paket:</b> $nc_form__package01 <hr />";
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
</body>

</html>