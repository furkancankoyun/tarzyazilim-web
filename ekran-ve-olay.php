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
        <li class="active">EKRAN VE OLAY E-POSTA BİLDİRİMİ</li>
      </ol>
    </div>
  </section>
  <!-- Atiker Section -->
  <!--==================================================-->
  <section id="atiker-form" class="netcity-form">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <img src="./img/atk.png" class="img-responsive" style="margin: 0 auto; height: 6rem;" alt="atiker_logo" />
          <p class="netcity-form__title" style="text-align: center;">Program ekranlarında her hangi bir kritik iş adımından haberdar olunması gerekiyor ise bildirim sistemi kullanılmalıdır. Yeni bir stok  kartı açıldığında, bir cari kart bilgileri değiştirildiğinde ya da kasadan bir kayıt silindiğinde sistem otomatik olarak ilgili kişilere eposta ile bildirim yapacaktır. Günümüzde hemen her işletmede anlık müdahale edilmediği zaman oluşabilecek sorunları anlık öğrenmek için bildirim sistemi geliştirildi.</p>
        </div>
      </div>
    
    </div>
  </section>
  <?php include 'footer.php'; ?>
  <?php include 'script.php'; ?>


</body>

</html>