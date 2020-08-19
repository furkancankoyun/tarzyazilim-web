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
          <li class="active"><a href="/"><i class="fa fa-home fa-lg"></i></a></li>
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
               <li><a href="atiker-basvuru">ATİKER BAŞVURU</a></li>
          <li><a href="Iletisim">İLETİŞİM</a></li>
      
          <li><a href="TARZ_DESTEK.exe" class="btn-primary-border"><i class="fa fa-download"></i> TARZ DESTEK PROGRAMI</a></li>
        </ul>
      </div>
    </div>
  </header>
  <!-- Carousel Section -->
  <!--==================================================-->
  <section class="container-fluid intro-slider">
    <div class="bg-slider-wrapper">
      <div id="main-slider" class="flexslider bg-slider">
        <ul class="slides">
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
      <li class="slide slide-4">
            <div class="push-text-slide"></div>
            <section class="home-promo">
              <div class="text-center">
                <h2 class="titlepro">
                  <span class="upper"></span>
                  <span class="middle"><strong>{</strong>ERP YENİDEN YAZILDI<strong>}</strong></span>
                  
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
  <section class="bg-white">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-3 text-center home-icons">
          <i class="fa fa-line-chart wow fadeInUp" data-wow-delay="20ms"></i>
          <div>
            <h4>Danışmanlıklar</h4>
            <h5>Danışmanlık Hizmetleri</h5>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 text-center home-icons">
          <i class="fa fa-tablet wow fadeInUp" data-wow-delay="40ms"></i>
          <div>
            <h4>Projeler</h4>
            <h5>Proje Hizmetleri</h5>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 text-center home-icons">
          <i class="fa fa-code wow fadeInUp" data-wow-delay="60ms"></i>
          <div>
            <h4>AR-GE</h4>
            <h5>Yazılım Geliştirme Faaliyetleri</h5>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 text-center home-icons">
          <i class="fa fa-suitcase wow fadeInUp" data-wow-delay="80ms"></i>
          <div>
            <h4>OTOMASYON</h4>
            <h5>Otomasyon, Web Hizmetleri</h5>
          </div>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </section>
  
  

  <!-- ABOUT US -->
  <!--==================================================-->
  <section class="bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title">
            <h2>HAKKIMIZDA</h2>
          </div>
        </div>
        <!-- VIDEO -->
        <div class="col-sm-12 col-md-6">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/t8WdzkZ7nw8?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0"
              allowfullscreen></iframe>
          </div>
          <div class="visible-xs-block visible-sm-block pt20"></div>
        </div>
        <!-- DESCRIPTION -->
        <div class="col-sm-12 col-md-6">
          <div class="blognews">
            <a href="Hakkimizda" class="mb20">
              <div class="item-img-wrap">
                <img src="img/ozel_yazilim.jpg" class="img-responsive" alt="template">
                <div class="item-img-overlay">
                  <div class="about">
                    <span class="btn btn-transparent-sm"><i class="fa fa-plus"></i> TARZ YAZILIM HAKKINDA</span>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <p><strong>Tarz Yazılım</strong> 2013 yılında kurulmuş olup öncelikli faaliyet alanımız Yazılım Geliştirme ve Ar-Ge
            faaliyetleri yapmaktayız. Faaliyet gösterdiğimiz tüm alanlarda, araştırma ve geliştirme faaliyetlerinde bulunan,
            teknolojik danışmanlık yapan, proje bazlı hizmet veren ve doğru bildiklerimizden ödün vermeden, dünya ölçeğinde
            bir bilişim firması olmak.</p>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </section>
  <!-- NEWS -->
  <!--==================================================-->
  
  

  <section class="bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-r">
            <h2>BİZDEN HABERLER</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div class="slick-carousel" id="news">
            <?php
						$sql_category = mysql_query( 'SELECT * FROM `topics` ORDER BY `ID` DESC LIMIT 10' );
						while ( $topics_data = mysql_fetch_array( $sql_category ) ) {
							echo '
                                <!-- Post -->
                                <div>
                                    <article class="blognews">
                                        <a href="' . $topics_data[ 'ID' ] . '-' . $topics_data[ 'url' ] . '.html" class="mt5 mb15">
                                            <div class="item-img-wrap">
                                                <img src="uploads/project/images/' . json_decode( $topics_data[ 'image' ] )[ 0 ] . '" class="img-responsive" alt="template" Style="width:870px;">
                                                <div class="item-img-overlay">
                                                    <div class="news">
                                                        <span class="btn btn-transparent-sm"><i class="fa fa-plus"></i> HABER DETAY</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <h4><a href="' . $topics_data[ 'ID' ] . '-' . $topics_data[ 'url' ] . '.html">' . $topics_data[ 'subject' ] . '</a></h4>
                                        <p>' . $topics_data[ 'short_content' ] . '...
                                        </p>
                                        <p class="author">
                                            <i class="fa fa-calendar"></i>
                                            ' . date( 'd.m.Y', $topics_data[ 'public_time' ] ) . '<span>/</span> 
                                            Yazar <a href="' . $topics_data[ 'ID' ] . '-' . $topics_data[ 'url' ] . '.html"><strong>' . $topics_data[ 'author' ] . '</strong></a>
                                        </p>
                                    </article>                                
                                </div><!-- /item - post -->

                                ';
						}
						?>
              <!-- Post -->
          </div>
          <!-- /news carousel -->
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