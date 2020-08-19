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
          <li><a href="Netcity">NETCİTY BAŞVURU</a></li>
          <li><a href="Iletisim">İLETİŞİM</a></li>
          <li><a href="atiker.php">ATİKER BAŞVURU</a></li>
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
        <li class="active">Atİker Başvuru</li>
      </ol>
    </div>
  </section>
  <!-- Atiker Section -->
  <!--==================================================-->
  <section class="atiker-form">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
            
          <h1 class="atiker-form__title">Atiker Lisans Başvuru Formu</h1>
          <img src="img/atk.png">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
            
            
     <form>
  <div class="form-group row">
    <label for="text" class="col-sm-2 col-form-label">Ticari Ünvan :</label>
    <div class="col-sm-10">
        <input name="nc_form__personalid" id="nc_form__personalid" type="text" class="form-control" placeholder="... " required>
             
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-sm-2 col-form-label">İsim :</label>
    <div class="col-sm-10">
        <input name="nc_form__personalid" id="nc_form__personalid" type="text" class="form-control" placeholder="... " required>
    </div>
  </div>
  
    <div class="form-group row">
    <label for="text" class="col-sm-2 col-form-label">Soyisim :</label>
    <div class="col-sm-10">
        <input name="nc_form__personalid" id="nc_form__personalid" type="text" class="form-control" placeholder="... " required>
    </div>
  </div>
  
    <div class="form-group row">
    <label for="text" class="col-sm-2 col-form-label">E-Posta :</label>
    <div class="col-sm-10">
        <input name="nc_form__personalid" id="nc_form__personalid" type="text" class="form-control" placeholder="... " required>
    </div>
  </div>
  
    <div class="form-group row">
    <label for="text" class="col-sm-2 col-form-label">Cep Telefon :</label>
    <div class="col-sm-10">
        <input name="nc_form__personalid" id="nc_form__personalid" type="text" class="form-control" placeholder="... " required>
    </div>
  </div>
  
   <div class="form-group row">
    <label for="text" class="col-sm-2 col-form-label">Telefon :</label>
    <div class="col-sm-10">
        <input name="nc_form__personalid" id="nc_form__personalid" type="text" class="form-control" placeholder="... " required>
    </div>
  </div>
  
  
 <div class="form-group row">
    <label for="text" class="col-sm-2 col-form-label">Açık Adresiniz</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword" placeholder="...">
    </div>
  </div>
  

      <select name="nc_form__region" id="nc_form__region" class="form-control col-xs-12">
                  <option selected value="">İl</option>
                  <option value="Kahramanmaraş">Adana</option>
                   <option value="Kahramanmaraş">Adıyaman</option>
                    <option value="Kahramanmaraş">Afyon</option>
                     <option value="Kahramanmaraş">Ağrı</option>
                      <option value="Kahramanmaraş">Amasya</option>
                      <option value="Kahramanmaraş">Ankara</option>
                      <option value="Kahramanmaraş">Antalya</option>
                      <option value="Kahramanmaraş">Artvin</option>
                      <option value="Kahramanmaraş">Aydın</option>
                      <option value="Kahramanmaraş">Balıkesir</option>
                      <option value="Kahramanmaraş">Bilecik</option>
                      <option value="Kahramanmaraş">Bingöl</option>
                      <option value="Kahramanmaraş">Bitlis</option>
                      <option value="Kahramanmaraş">Bolu</option>
                      <option value="Kahramanmaraş">Burdur</option>
                      <option value="Kahramanmaraş">Bursa</option>
                      <option value="Kahramanmaraş">Çanakkale</option>
                      <option value="Kahramanmaraş">Çankırı</option>
                      <option value="Kahramanmaraş">Çorum</option>
                      <option value="Kahramanmaraş">Denizli</option>
                      <option value="Kahramanmaraş">Diyarbakır</option>
                      <option value="Kahramanmaraş">Edirne</option>
                      <option value="Kahramanmaraş">Elazığ</option>
                      <option value="Kahramanmaraş">Erzincan</option>
                      <option value="Kahramanmaraş">Erzurum</option>
                      <option value="Kahramanmaraş">Eskişehir</option>
                      <option value="Kahramanmaraş">Gaziantep</option>
                      <option value="Kahramanmaraş">Giresun</option>
                      <option value="Kahramanmaraş">Gümüşhane</option>
                      <option value="Kahramanmaraş">Hakkari</option>
                      <option value="Kahramanmaraş">Hatay</option>
                      <option value="Kahramanmaraş">Isparta</option>
                      <option value="Kahramanmaraş">İstanbul</option>
                      <option value="Kahramanmaraş">İzmir</option>
                      <option value="Kahramanmaraş">Kars</option>
                      <option value="Kahramanmaraş">Kastamonu</option>
                      <option value="Kahramanmaraş">Kayseri</option>
                      <option value="Kahramanmaraş">Kırklareli</option>
                      <option value="Kahramanmaraş">Kırşehir</option>
                      <option value="Kahramanmaraş">Kocaeli</option>
                      <option value="Kahramanmaraş">Konya</option>
                      <option value="Kahramanmaraş">Kütahya</option>
                      <option value="Kahramanmaraş">Malatya</option>
                      <option value="Kahramanmaraş">Manisa</option>
                      <option value="Kahramanmaraş">K.Maraş</option>
                      <option value="Kahramanmaraş">Mardin</option>
                      <option value="Kahramanmaraş">Muğla</option>
                      <option value="Kahramanmaraş">Muş</option>
                      <option value="Kahramanmaraş">Nevşehir</option>
                      <option value="Kahramanmaraş">Niğde</option>
                      <option value="Kahramanmaraş">Ordu</option>
                      <option value="Kahramanmaraş">Rize</option>
                      <option value="Kahramanmaraş">Sakarya</option>
                      <option value="Kahramanmaraş">Samsun</option>
                      <option value="Kahramanmaraş">Siirt</option>
                      <option value="Kahramanmaraş">Sinop</option>
                      <option value="Kahramanmaraş">Sivas</option>
                      <option value="Kahramanmaraş">Tekirdağ</option>
                      <option value="Kahramanmaraş">Tokat</option>
                      <option value="Kahramanmaraş">Trabzon</option>
                      <option value="Kahramanmaraş">Tunceli</option>
                      <option value="Kahramanmaraş">Şanlıurfa</option>
                      <option value="Kahramanmaraş">Uşak</option>
                      <option value="Kahramanmaraş">Van</option>
                      <option value="Kahramanmaraş">Yozgat</option>
                      <option value="Kahramanmaraş">Zonguldak</option>
                      <option value="Kahramanmaraş">Aksaray</option>
                      <option value="Kahramanmaraş">Bayburt</option>
                      <option value="Kahramanmaraş">Karaman</option>
                      <option value="Kahramanmaraş">Kırıkkale</option>
                      <option value="Kahramanmaraş">Batman</option>
                      <option value="Kahramanmaraş">Şırnak</option>
                      <option value="Kahramanmaraş">Bartın</option>
                      <option value="Kahramanmaraş">Ardahan</option>
                      <option value="Kahramanmaraş">Iğdır</option>
                      <option value="Kahramanmaraş">Yalova</option>
                      <option value="Kahramanmaraş">Karabük</option>
                      <option value="Kahramanmaraş">Kilis</option>
                      <option value="Kahramanmaraş">Osmaniye</option>
                      <option value="Kahramanmaraş">Düzce</option>
 
                </select>

</form>
         
              
          
     

              
        <div class="row">
<div class="col-sm-6">
<div class="card" style="width: 40rem;">
  <div class="card-body">
    <h5 class="card-title">AtiksE Sistem Entegratörü Fast Starter Paket (24 Modül)<br><u>AtiksE Fast Starter paket 1 Kullanıcılı Pakettir</u></h5>
    <p class="card-text">Stok Yönetimi, Cari Hesap Yönetimi, Kasa Modülü, Fatura Modülü, Çek-Senet Sistemi, Fatura Muhtelif Modülü, Satış Teklif Yönetim Sistemi, Form İşlemleri, Excel ve Tablolardan Veri Aktarımı, Alım Talep Yönetim Sistemi, Sipariş Yönetim Sistemi, Banka Modülü, Kredi Kartı (Müşteri, Firma), Genel Muhasebe, BA-BS Uygulaması, Dövizli İşlemler, Garanti Takip Uygulaması, Barkod, Depo Yönetimi, Seri/Lot/Parti Takip, Modül Kayıtları, Tevkifat Uygulaması, AtikİM İmalat Yönetimi Entegrasyonu, AtikİK İnsan Kaynakları Entegrasyonu</p>
    <a href="#" class="btn btn-primary">750,00 TL</a>
  </div>
</div>

</div>

<div class="col-sm-6">
    <table class="table">
  <thead>
    <tr>

      <th scope="col">Paket Fiyatı</th>
      <th scope="col">+2 Kulanıcı Fiyatı</th>
      <th scope="col">+5 Kullanıcı Fiyatı</th>
      <th scope="col">Toplam</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">750,00 TL</th>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      </div>
    </tr>

  </tbody>
</table>
</div>


  </div>
 

  
</div>

        
        <div class="row">
<div class="col-sm-6">
<div class="card" style="width: 40rem;">
  <div class="card-body">
    <h5 class="card-title">Atikss Sistem Entegratörü Fast Paket (14 Modül)<br><u>Atikse Fast Starter paket 1 Kullanıcılı Pakettir</u></h5>
    <p class="card-text">Stok Yönetimi, Cari Hesap Yönetimi, Kasa Modülü, Fatura Modülü, Çek-Senet Sistemi, Fatura Muhtelif Modülü, Satış Teklif Yönetim Sistemi, Form İşlemleri, Excel ve Tablolardan Veri Aktarımı, Sipariş Yönetim Sistemi, Banka Modülü, Modül Kayıtları, Barkod, Tevkifat Uygulaması</p>
    <a href="#" class="btn btn-primary">1.350,00 TL</a>
  </div>
</div>

</div>

<div class="col-sm-6">
<table class="table">
  <thead>
    <tr>
      <th scope="col">+2 Kulanıcı Fiyatı</th>
      <th scope="col">+5 Kullanıcı Fiyatı</th>
      <th scope="col">Toplam</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">2.300,00 TL</th>
      <td><input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">5.700,00TL</td>
      <td></td>

      </div>
    </tr>

  </tbody>
</table>
</div>
  </div>
 
        <div class="row">
<div class="col-sm-6">
<div class="card" style="width: 40rem;">
  <div class="card-body">
    <h5 class="card-title">Atikse Sistem Entegratörü Standard+ Paket (22 Modül)<br><u>AtikSE Fast Starter paket 1 Kullanıcılı Pakettir</u></h5>
    <p class="card-text">Stok Yönetimi, Cari Hesap Yönetimi, Kasa Modülü, Fatura Modülü, Çek-Senet Sistemi, Fatura Muhtelif Modülü, Satış Teklif Yönetim Sistemi, Form İşlemleri, Excel ve Tablolardan Veri Aktarımı, Sipariş Yönetim Sistemi, Banka Modülü, Modül Kayıtları, Barkod, Tevkifat Uygulaması
+
Genel Muhasebe, Dövizli İşlemler, Depo Yönetimi, Alım Talep Yönetim Sistemi, BA-BS Uygulaması, Depo Stok Sayım Modülü, Plasiyer Uygulaması, Banka Kredi Kartı Modülü</p>
    <a href="#" class="btn btn-primary">3.750,00 TL</a>
  </div>
</div>

</div>

<div class="col-sm-6">
<table class="table">
  <thead>
    <tr>
      <th scope="col">+2 Kullanıcı Fiyatı</th>
      <th scope="col">+5 Kullanıcı Fiyatı</th>
      <th scope="col">+10 Kullanıcı Fiyatı</th>
      <th scope="col">+15 Kullanıcı Fiyatı</th>
      <th scope="col">+20 Kullanıcı Fiyatı</th>
      <th scope="col">+25 Kullanıcı Fİyatı</th>
      <th scope="col">Toplam</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">6.600,00 TL</th>

      <td><input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">15.900,00 TL</td>
      <td><input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">30.000,00 TL</td>
      <td><input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">42.100,00 TL</td>
      <td><input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">52.500,00 TL</td>
      <td><input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">60.900,00 TL</td>
      <td></td>
      <td></td>
      </div>
    </tr>

  </tbody>
</table>
</div>
  </div>
  </div>
  
</div>
              
<section>
    <div class="container">
                     <div class="row">
              <div class="col-xs-12">
                <h3>GENEL AÇIKLAMALAR</h3>
              </div>
              <div class="col-xs-12">
                <ul class="list-group">
                  <li class="list-group-item">+ FİYATLARIMIZA KDV HARİÇTİR.</li>
                  <li class="list-group-item">+ BELİRTİLEN FİYATLAR SADECE LİSANS BEDELİ OLUP, SİSTEM KURLUMU, DEVREYE ALMA, EĞİTİM GİBİ HİZMET BEDELLERİ FİYATA DAHİL DEĞİLDİR.</li>
                  <li class="list-group-item">+ TESLİMAT: ÖDEMEYİ TAKİP EDEN 2 İŞ GÜNÜ İÇERİSİNDE LİSANSLARIMIZ DİJİTAL ORTAMLARDA TARAFINIZA TESLİM EDİLİR. EĞİTİM HİZMETLERİNE KARŞILIKLI YAPILACAK ANLAŞMADA BELİRTİLERN TARİHTE BAŞLANIR.</li>
                  <li class="list-group-item">+ LİSANS FİYATLARINA 1 YILLIK GÜNCELLEME BEDELİ DAHİLDİR.</li>
                  <li class="list-group-item">+  ÖDEME VE DİĞER DETAYLAR İÇİN SİPARİŞ FORMUNUN TARAFIMIZA ULAŞMASI HALİNDE SİZİNLE İLETİŞİME GEÇİLEREK DETAYLI SÖZLEŞME TARAFINIZ GÖNDERİLECEKTİR.</li>
                  <li class="list-group-item">+ KURULUM, EĞİTİM, DEVREYE ALMA GİBİ HİZMET FİYATLARIMIZA 3 AY BOYUNCA UZAKM DESTEK HİZMETİ DAHİLDİR. DESTEK HİZMETLERİMİZ RESMİ ÇALIŞMA GÜN VE SAATLERİNDE VERİLMEKTEDİR.</li>
                  <li class="list-group-item">+  RAKİP PROGRAMLARIN GEÇİŞ İŞLMELERİNİZ, RAKİP PROGRAMI ALDIĞINIZI GÖSTEREN FATURAYI TARAFIMIZA İBRAZ ETMENİZ HALİNDE İLAVE OLARAK İNDİRİM SAĞLANIR. BU İNDİRİM ORANI %10'U GEÇMEZ.</li>
                  <li class="list-group-item">+ YERİNDE KURULUM VE EĞİTİM HİZMETLERİ KAHRAMANMARAŞ MERKEZ HARİCİNDE OLMASI HALİNDE ULAŞIM, KONAKLAMA, BARINMA GİBİ GİDERLER TARAFINIZDA KARŞILANIR.</li>  
                </ul>
              </div>
            </div>
            </div>
            </section>




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
                $mail->FromName = "Atiker Başvuru Formu";  //göndericinin adı
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