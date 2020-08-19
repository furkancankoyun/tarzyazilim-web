<?php include 'config.php'; ?>
<?php include 'system.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Hakkımızda | Tarz Yazılım</title>
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
              <li class="active"><a href="Hakkimizda">Hakkımızda</a></li>
              <li><a href="Hizmetlerimiz">Neler Yaparız?</a></li>
              <li><a href="Insan-Kaynaklari">İnsan Kaynakları</a></li>
              <li><a href="Is-Ortaklarimiz">İş Ortaklarımız</a></li>
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
            <li class="active">HAKKIMIZDA</li>
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
                <h2>HAKKIMIZDA</h2>
              </div>
            </div>
            <div class="col-md-6">
              <p><strong>Tarz Yazılım</strong> Teknolojik Sistemler Danışmanlık A.Ş. olarak 2013 yılında müşteri odaklı yazılım
                çözümleri üretmek için faaliyetlerimize başladık. Şirketin adı kuruluş amacını, hedeflerini ve şirketin gerçek
                kimliğini ortaya koyabilmesi için titiz bir çalışma sonucu belirlenmiştir.
              </p>
              <p>Yaptığımız işin en iyisi; yani sektöründe TARZ olmak üzere yola çıktık. Hedeflediğimiz sektörlerde TARZ olabilmenin
                bilinciyle çalışmalarımıza devam etmekteyiz. Yazılım sektöründe uluslar arası tanınmış platformlarda çalışarak
                güvenilirliği ve sağlam duruşu ile çağın tüm gelişmelerini takip eden, ileriyi görebilme azminde, müşteri
                odaklı bir firma/çalışan kültürü oluşturmayı vizyonumuz olarak benimsemiş bulunmaktayız.</p>
              <h4 class="color5">Geleceğe yön veriyoruz</h4>
              <blockquote>
                <p>Teknolojiye yön veren ürünler geliştirme hedefi, azmi ve bilgi birikimine sahip bir yazılım geliştirme şirketiyiz.</p>
              </blockquote>
            </div>
            <!-- NAV-TABS -->
            <div class="col-md-6">
              <div class="slick-carousel" id="aboutCarousel">
                <!-- <div class="carousel-inner"> -->
                <div>
                  <img src="img/misyon.jpg" alt="Misyonumuz" class="img-responsive mb15">
                </div>
                <div>
                  <img src="img/misyon.jpg" alt="Vizyonumuz" class="img-responsive mb15">
                </div>
                <div>
                  <img src="img/misyon.jpg" alt="Hedefimiz" class="img-responsive mb15">
                </div>
                <!-- </div> -->
              </div>
              <!-- Tab Menú -->
              <ul class="nav nav-tabs nav-justified nav-about-carousel" id="navAboutCarousel">
                <li class="active">
                  <a data-toggle="tab" href="#mision">Misyonumuz</a>
                </li>
                <li>
                  <a data-toggle="tab" href="#vision">Vizyonumuz</a>
                </li>
                <li>
                  <a data-toggle="tab" href="#values">Hedefimiz</a>
                </li>
              </ul>
              <!-- Tab Content -->
              <div class="tab-content">
                <!-- Mision -->
                <div id="mision" class="tab-pane fade in active">
                  <h3 class="color5">Misyonumuz</h3>
                  <p style="height:116px">Misyonumuz, yazılım ve donanım geliştirmede ar-ge çalışmalarıyla beslenen ve sistem entegrasyonu konusunda
                    üstün ve yenilikçi yaklaşımlarla, müşterilerinin ihtiyacını en iyi şekilde karşılayan, kaliteli ve güvenilir
                    çözümler sunan bir firma olarak yazılım sektöründe bugün olduğu gibi gelecekte de hizmet vermektir.</p>
                </div>
                <!-- Vision -->
                <div id="vision" class="tab-pane fade">
                  <h3 class="color5">Vizyonumuz</h3>
                  <p style="height:116px">Vizyonumuz, hem ulusal hem de uluslararası platformda başarıları ve kalitesiyle tanınan platformlarda özgün
                    çözümleri ile teknolojiye ve sektöre yön veren, müşterilerini teknolojiyle buluşturan , iş akışını hızlandıran
                    alanında lider ve öncü bir şirket olmaktır.
                  </p>
                </div>
                <!-- Values -->
                <div id="values" class="tab-pane fade">
                  <h3 class="color5">Hedefimiz</h3>
                  <ul class="listicon-check row">
                    <li>Firmalara, üretim ve ticari faaliyetlerinde katma değerli destek olmak.</li>
                    <li>Araştırma geliştirme, yazılım, donanım ve altyapı faaliyetlerinde bulunmak.</li>
                    <li>Yaşam kolaylığı sunmak maksadıyla çözümler üretmek.</li>
                    <li>Firmaları, değişime adaptasyon ve kurumsallaşma süreçlerinde destelemek.</li>
                    <li>Bilgi birikimi ve enerjimizi en faydalı şekilde kullanmak.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </section>
      <?php include 'footer.php'; ?>
      <?php include 'script.php'; ?>
      </body>
</html>