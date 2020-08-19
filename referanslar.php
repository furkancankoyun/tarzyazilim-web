<?php include 'config.php'; ?>
<?php include 'system.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Referanslarımız | Tarz Yazılım</title>
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
        <li class="active">REFERANSLARIMIZ</li>
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
            <h2>REFERANSLARIMIZ</h2>
          </div>
        </div>
        <?php
              $sql_category = mysql_query('SELECT * FROM references_list ORDER BY ID DESC');
              while($ortak_data = mysql_fetch_array($sql_category))
              {
                echo '
                <div class="col-md-4">
                  <div class="item-brand">
                    <div class="item-img-wrap">
                      <a href="'.$ortak_data['link'].'" class="work-brand-img" target="_blank">
                        <img src="uploads/references/'.$ortak_data['image'].'" alt="İş ortaklarımızdan '.$ortak_data['name'].'" class="img-responsive mb15">
                      </a>
                    </div>
                    <h3 class="color5 wow fadeInUp" style="font-size:1.3125em;">'.$ortak_data['name'].'</h3>
                    <p>'.$ortak_data['aciklama'].'</p>
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