<?php
include 'config.php';
include 'system.php';
if ($_POST) {
function mailgonder($kimden,$kime,$konu,$mesaj){
         require "mail/class.phpmailer.php"; 
         $mail = new PHPMailer();   
         $mail->IsSMTP();
         $mail->From     = $kimden; 
         $mail->Sender   = $kimden;  
         $mail->FromName = "İletişim formu";  //göndericinin adı
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
         //$mail->AddAddress("mail@mail.com");  //maillerin gideceği ek adresler (varsa)
         return ($mail->Send())?true:false;      
         $mail->ClearAddresses();  
         $mail->ClearAttachments();
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>İletişim | Tarz Yazılım</title>
  <?php include 'head.php'; ?>
</head>

<body>
  <!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
  <?php include 'analytics.php'; ?>
  <?php include 'preloader.php'; ?>
  <!-- Header Section -->
  <!--==================================================-->
  <?php include 'header.php'; ?>
  <!-- Breadcrumb Section -->
  <!--==================================================-->
  <section class="breadcrumb-container">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="/">ANA SAYFA</a></li>
        <li class="active">İLETİŞİM</li>
      </ol>
    </div>
  </section>

      <!-- CONTACT
        ===============================================================-->
      <section class="bg-white">
        <div class="container">
          <div class="row wow fadeIn">
            <div class="col-md-12">
              <div class="title">
                <h2>İLETİŞİM</h2>
              </div>
            </div>
            <!-- CONTACT INFO -->
            <div class="col-sm-12 col-md-5 cinfo">
             
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d279.4935978047965!2d36.92076750163037!3d37.576048738420674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152ddda861303f27%3A0x20cc2cf7d0ab2423!2sHac%C4%B1+Bayram+Veli+Mahallesi%2C+Kuddusi+Baba+Blv.+No%3A70%2C+46040+Kahramanmara%C5%9F+Merkez%2FKahramanmara%C5%9F!5e0!3m2!1str!2str!4v1537337812661" width="450" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              <address>
                <p><i class="fa fa-map-marker"></i>
                  <?=htmlspecialchars($system_settings['adress'], ENT_QUOTES, 'UTF-8');?>
                </p>
                <p><i class="fa fa-phone"></i>
                  <?=htmlspecialchars($system_settings['phone_number'], ENT_QUOTES, 'UTF-8');?>
                </p>
                <p><i class="fa fa-envelope"></i>
                  <?=htmlspecialchars($system_settings['email_adress'], ENT_QUOTES, 'UTF-8');?>
                </p>
              </address>
              <div class="visible-xs-block visible-sm-block pt20"></div>
            </div>
            <!-- /Contact Info -->
            <!-- CONTACT FORM -->
            <div class="col-sm-12 col-md-7">
              <?php
                $hmesaji="";
                if(isset($_POST["submit"])){
                    $ad         =   (isset($_POST["name"]))?$_POST["name"]:"";
                    $eposta     =   (isset($_POST["email"]))?$_POST["email"]:"";
                    $telefon    =   (isset($_POST["phone"]))?$_POST["phone"]:"";
                    $mesaj      =   (isset($_POST["message"]))?$_POST["message"]:"";
                    if($ad == "" || $eposta == "" || $telefon == "" || $mesaj == "")
                        $hmesaji = "<span style=\"border:1px solid #666; background-color:#0099CC; color:#FFF; padding:2px; cursor:pointer;\">Hata! Lutfen gerekli alanlarin dolduruldugundan emin olun!</span>";
                    else
                    {
                      //iletisim formu hangi değerlerle bize ulaşsın
                      $mesajk     =   "<b>$ad</b> adiyla mail gonderildi.<hr />";
                      $mesajk     .=  "Telefon: $telefon <br />";
                      $mesajk     .=  "Eposta Adresi: $eposta <br />";
                      $mesajk     .=  "Ziyaretçinin Mesajı: $mesaj <hr />";
                      $mesajk     .=  "<span style='font-size:10px;color:#bbbbbb;'>Bu mesaj ". date('H:i:s d.m.Y') ." tarihinde gönderildi.</span>";
                      //iletisim formu hangi mail adresinden hangi mail adresine gitsin?
                      if(mailgonder("bahadir@tarzyazilim.com.tr","bahadir@tarzyazilim.com.tr","Ziyaretci Mesaji",$mesajk))
                      {
                        $hmesaji =  "<div class='alert alert-success' role='alert'>Mail gönderme işleminiz başarılı !</div>";
                        echo $hmesaji;
                      }
                      else
                      {
                        $hmesaji =  "<div class='alert alert-danger' role='alert'>Mail gönderme işlemi gerçekleşmedi !</div>";
                        echo "<p>$hmesaji</p>";
                      }
                    }
                  } else {
                    echo "<form name='contactform' id='contactform' method='post' action='Iletisim'>
                            <fieldset>
                                <div class='row'>
                                    <div class='col-md-12'>
                                        <div class='form-group'>
                                            <label class='sr-only' for='name'>İsim<br></label>
                                            <div class='inner-addon left-addon'>
                                                <i class='fa fa-user'></i>
                                                <input type='text' class='form-control required' placeholder='İsim' name='name' id='name' data-name='Name'>
                                            </div>
                                        </div>
                                        <div class='row row-lg'>
                                            <div class='col-lg-7'>
                                                <div class='form-group'>
                                                    <label class='sr-only' for='email'>E Posta<br></label>
                                                    <div class='inner-addon left-addon'>
                                                        <i class='fa fa-envelope'></i>
                                                        <input type='email' class='form-control required required-email' placeholder='E Posta' name='email' id='email' data-name='Email'>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='col-lg-5'>
                                                <div class='form-group'>
                                                    <label class='sr-only' for='name'>Telefon<br></label>
                                                    <div class='inner-addon left-addon'>
                                                        <i class='fa fa-phone'></i>
                                                        <input type='text' class='form-control' placeholder='Telefon' name='phone' id='phone' data-name='Phone'>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='form-group'>
                                            <label class='sr-only' for='message'>Mesaj<br></label>
                                            <div class='inner-addon left-addon'>
                                                <i class='fa fa-comment'></i>
                                                <textarea rows='13' name='message' id='message' class='form-control required' placeholder='Mesaj' data-name='Message'></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='row actions'>
                                    <div class='col-sm-12 col-md-6'>
                                    <div class='g-recaptcha' data-sitekey='6LeI9RMUAAAAAN2NPRyu48_lkUAr8dRR6wZgD6ob'></div>
                                        <input type='submit' value='&#xf1d9; &nbsp;GÖNDER' name='submit' id='submitButton' class='btn btn-default btn-primary-corp-big' title='Mesajı göndermek için tıklayın!' />
                                    </div>
                                </div>
                            </fieldset>
                        </form>";
                    }
                ?>
                <p>&nbsp;</p>
            </div>
          </div>
        </div>
      </section>

      <?php include 'footer.php'; ?>
      <?php include 'script.php'; ?>
    </body>
    
    </html>