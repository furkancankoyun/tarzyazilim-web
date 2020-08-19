<?php include 'config.php'; ?>
<?php include 'system.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>İş Ortaklarımız | Tarz Yazılım</title>
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
          <li class="dropdown active">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">KURUMSAL <i class="fa fa-angle-down small"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="Hakkimizda">Hakkımızda</a></li>
              <li><a href="Hizmetlerimiz">Neler Yaparız?</a></li>
              <li><a href="Insan-Kaynaklari">İnsan Kaynakları</a></li>
              <li class="active"><a href="Is-Ortaklarimiz">İş Ortaklarımız</a></li>
            </ul>
          </li>
          <li><a href="Referanslarımız">REFERANSLARIMIZ</a></li>
          <li><a href="Netcity">NETCİTY BAŞVURU</a></li>
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
        <li class="active">İŞ ORTAKLARIMIZ</li>
      </ol>
    </div>
  </section>
  <!-- About Us Section -->
  <!--==================================================-->
  <section class="bg-white" data-wow-duration="1200ms" data-wow-delay="100ms">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title">
            <h2>İŞ ORTAKLARIMIZ</h2>
          </div>
        </div>
        <?php
              $sql_category = mysql_query('SELECT * FROM ortakk ORDER BY ortak_id ASC');
              while($ortak_data = mysql_fetch_array($sql_category))
              {
                echo '
                <div class="col-md-4">
                  <div class="item-brand">
                    <div class="item-img-wrap">
                      <a href="'.$ortak_data['ortak_link'].'" class="work-brand-img" target="_blank">
                        <img src="uploads/isortaklari/'.$ortak_data['ortak_image'].'" alt="İş ortaklarımızdan '.$ortak_data['ortak_name'].'" class="img-responsive mb15">
                      </a>
                    </div>
                    <h3 class="color5 wow fadeInUp text-center" style="font-size:1.3125em;">'.$ortak_data['ortak_name'].'</h3>
                    <p class="text-center">'.$ortak_data['ortak_aciklama'].'</p>
                  </div>
                </div>
                  ';
                }
                ?>
      </div>
    </div>
  </section>
  <?php include 'footer.php'; ?>
  <?php include 'script.php'; ?>
</body>

</html>