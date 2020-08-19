<?php 
include 'config.php'; 
include 'system.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Hoşgeldiniz | Tarz Yazılım</title>
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
  <!-- Carousel Section -->
  <!--==================================================-->
  <section class="container-fluid intro-slider">
    <div class="bg-slider-wrapper">
      <div id="main-slider" class="flexslider bg-slider">
        <ul class="slides">
          <li class="slide slide-4">
            <div class="push-text-slide"></div>
            <section class="home-promo">
              <div class="text-center">
                <h2 class="titlepro">
                  <span class="upper"></span>
                  <span class="middle"><strong>{</strong>ERP YENİDEN YAZILDI<strong>}</strong></span>
                </h2>
                <a href="atiker-basvuru" class="btn btn-transparent"><i class="fa fa-hand-o-right"></i> SATIN ALIN</a>
              </div>
            </section>
          </li>
          <li class="slide slide-1">
            <div class="push-text-slide"></div>
            <section class="home-promo">
              <div class="text-center">
                <h2 class="titlepro">
                  <span class="upper"></span>
                  <span class="middle">ÖNCE <strong>MEMNUNİYET</strong></span>
                  <span class="bottom">Önceliğimiz müşteri memnuniyeti</span>
                </h2>
              </div>
            </section>
          </li>
          <li class="slide slide-2">
            <div class="push-text-slide"></div>
            <section class="home-promo">
              <div class="text-center">
                <h2 class="titlepro">
                  <span class="upper"></span>
                  <span class="middle">FARKLI BEKLENTİLERE <strong>FARKLI ÇÖZÜMLER</strong></span>
                  <span class="bottom">İhtiyacınız olan çözümü çok yönlü seçeneklerle hizmetinize sunuyoruz</span>
                </h2>
              </div>
            </section>
          </li>
          <li class="slide slide-3">
            <div class="push-text-slide"></div>
            <section class="home-promo">
              <div class="text-center">
                <h2 class="titlepro">
                  <span class="upper"></span>
                  <span class="middle"><strong>{</strong>EN İYİSİNİN BİR TIK FAZLASI<strong>}</strong></span>
                  <span class="bottom">Hayatınızı kolaylaştıracak bir tık atın</span>
                </h2>
                <a href="Iletisim" class="btn btn-transparent"><i class="fa fa-hand-o-right"></i> İLETİŞİM</a>
              </div>
            </section>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- PRINCIPAL SERVICES -->
  <!--==================================================-->
 <section id="new">
	<div class="container">
					<div class="row">
			      <div class="col-xs-12">
          <img src="./img/atk.png" class="img-responsive" style="margin: 10px auto; height: 6rem;" alt="atiker_logo" />
        </div>
						<div class="col-md-6">
				
							<div class="tabs">
								<ul class="nav nav-tabs">
									<li class="active" >
										<a href="#popular" data-toggle="tab" style="color:red"> Ekran ve olay E-posta bildirimi</a>
									</li>
									<li>
									</li>
								</ul>
								<div class="tab-content"  style="background-color:#DDDDDD">
									<div id="popular7" class="tab-pane active"   >
								
										<p>Program ekranlarında her hangi bir kritik iş adımından haberdar olunması gerekiyor ise bildirim sistemi kullanılmalıdır. </p>
									<a href="ekran-ve-olay.php"><button type="button" class="btn btn-danger">Detaylar</button></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="tabs">
								<ul class="nav nav-tabs text-right tabs-primary">
									<li class="active">
										<a href="#popular7" data-toggle="tab"style="color:red">Kullanıcı bazlı kayıt güvenliği</a>
									</li>

								</ul>
								<div class="tab-content" style="background-color:#DDDDDD">
									<div id="popular7" class="tab-pane active">
									
										<p>
Gelişmiş veri tabanı sistemlerinde de var olan bu özellik sayesinde kullanıcılar bir birlerinin yapmış oldukları kayıtları silemez ya da düzeltemezler.</p>
<a href="kullanici-bazli.php">	<button type="button" class="btn btn-danger">Detaylar</button></a>
									</div>

								</div>
							</div>
						</div>
					</div>
					
						<div class="row">
						<div class="col-md-6">
							<div class="tabs" style="margin:5px auto">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#popular" data-toggle="tab"style="color:red">Yönetsel raporlama desteği</a>
									</li>
									<li>
									</li>
								</ul>
								<div class="tab-content"  style="background-color:#DDDDDD">
									<div id="popular" class="tab-pane active">
									
										<p>
Stratejik iş planlaması günümüz işletme yönetimlerinde kaçınılmaz hale gelmiştir.</p>
<a href="yönetsel-raporlama.php">	<button type="button" class="btn btn-danger">Detaylar</button></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="tabs" style="margin:5px auto">
								<ul class="nav nav-tabs text-right tabs-primary">
									<li class="active">
										<a href="#popular7" data-toggle="tab" style="color:red">Tarih kilitleme</a>
									</li>

								</ul>
								<div class="tab-content"  style="background-color:#DDDDDD">
									<div id="popular7" class="tab-pane active">
							
										<p>Atiker Yazılım program ekranlarında birçok işlem fonksiyon butonu bulunmaktadır.</p>
											<a href="tarih-kilitleme.php"><button type="button" class="btn btn-danger">Detaylar</button></a>
									</div>

								</div>
							</div>
						</div>
					</div>
					</div>
					</section>
					
					
					
  
  

  <!-- ABOUT US -->
  <!--==================================================-->
  <section class="bg-gray">
    <div class="container">
          <div class="row">
        <div class="col-sm-12">
                    <div class="col-xs-12">
                      <img src="img/ATIKMA.png" class="img-responsive" style="margin: 0 auto; height: 6rem;" alt="netcity_logo"/>
        </div>
      
        
        </div>
        <!-- atiker -->
                    <div class="col-md-6">
                    <h1 style="color:#d32f2e">+ Açık Mimari</h1>
 <h1 style="color:#d32f2e">+ Esnek Raporlama</h1>
 <h1 style="color:#d32f2e">+ Parametrik Yapı</h1>
        
      
    </div>
    
        <div class="col-md-6">
          <img src="img/programlar.jpg" class="img-responsive"  style="margin: 0 auto; height: auto;">
       </div>

    <!-- /container -->
  </section>
  <!-- NEWS -->
  <!--==================================================-->
  
  <!--==================================================-->
  <!-- Atiker text start -->
    <section class="bg-white">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-3 text-center home-icons">
          <div>
            <h4 style="color:#d32f2e">Kopyala / Yapıştır</h4>
            <h5>Yaygın tüm tablo tabanlı ofis programları ile kolay ve hızlı entegrasyon.</h5>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 text-center home-icons">

          <div>
            <h4 style="color:#d32f2e">Her İşlem İz bırakır</h4>
            <h5>Gelişmiş logolama sistemi düzeltme ve silme gibi kayıt işlemlerinin arka planda saklar.</h5>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 text-center home-icons">

          <div>
            <h4 style="color:#d32f2e">Kolay Kullanım</h4>
            <h5>Yalın felsefe ürünü ekranlar ve menü yapısı le akıcı iş süreçleri sağlar.</h5>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 text-center home-icons">
 
          <div>
            <h4 style="color:#d32f2e">Zamanlanmış Bİldİrmİler</h4>
            <h5>Zamanlanmış arka plan bildirim hizmetleri size işinizle ilgili kritik bilgileri anlık olarak ulaştırır.</h5>
          </div>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </section>
  <!-- BUY NOW -->
  <!--==================================================-->
  <section class="bg-buy parallax process-rounded" data-stellar-background-ratio="0.5">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-md-12">
          <h1 class="intro-text mt30 wow fadeInUp">
            TARZ DESTEK PROGRAMINI İNDİR
          </h1>
          <p class="lead mt30" style="color:white;">Size heryerden kolay şekilde hizmet vermek için destek programımızı indirin</p>
          <p><a href="TARZ_DESTEK.exe" class="btn btn-default btn-primary-corp-big"><i class="fa fa-shopping-cart le"></i> TARZ DESTEK PROGRAMI</a>
          </p>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container-fluid -->
  </section>
  <!-- CLIENTS -->
  <!--==================================================-->
  <section class="bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title">
            <h2>REFERANSLAR</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div class="slick-carousel" id="clients">
            <?php
						$sql_client = mysql_query( 'SELECT * FROM references_list' );
						while ( $references_1 = mysql_fetch_array( $sql_client ) ) {
							echo '
                                <div><a href="' . htmlspecialchars( $references_1[ 'link' ], ENT_QUOTES, 'UTF-8' ) . '"><img src="uploads/references/' . htmlspecialchars( $references_1[ 'image' ], ENT_QUOTES, 'UTF-8' ) . '" alt="Client"></a></div>
                                ';
						}
						?>
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