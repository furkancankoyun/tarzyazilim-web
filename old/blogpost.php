<?php
include 'config.php';
include 'system.php';
if (empty($_GET['id']))
{
  exit(header('Location: index.php'));
}

$q = mysql_query('SELECT * FROM topics WHERE id = \'' . mysql_real_escape_string($_GET['id']) . '\'');
if (mysql_num_rows($q) == 1)
{
  $data = mysql_fetch_array($q);
}
else
{
  exit(header('Location: 404.php'));
}
if (!session_start())
{
    exit('session_crashed');
}
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>
      <?=$data['subject'];?> | Tarz Yazılım</title>
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
          <li class="active">
            <?=$data['subject'];?>
          </li>
        </ol>
      </div>
    </section>
    <!-- Blog Section -->
    <!--==================================================-->
    <section class="bg-white">
      <div class="container">
        <div id="content" class="row">
          <div class="col-md-12">
            <div class="title">
              <h2>HABERLER</h2>
            </div>
          </div>
          <div id="main" class="col-md-8" role="main">
            <article>
              <header>
                <div class="post-thumbnail">
                  <img class="img-responsive" src="uploads/project/images/<?=json_decode($data['image'])[0];?>" width="100%" alt="<?=$data['subject'];?>">
                </div>
                <h2 class="entry-title">
                  <?=$data['subject'];?>
                </h2>
                <p class="author">
                  <i class="fa fa-calendar"></i>
                  <?=date('d.m.Y', $data['public_time']);?> <span>/</span> Yazan <a href=""><strong><?=$data['author'];?></strong></a>
                </p>
              </header>
              <div class="post_content">
                <p>
                  <?=$data['short_content'];?>
                </p>
                <p>
                  <?=$data['content'];?>
                </p>
              </div>
              <footer class="row entry-meta">
                <div class="col-md-10">
                  <p class="tags-links">
                  </p>
                </div>
                <?php
                                $id = $_GET['id'];
                                $account_data = mysql_query('SELECT * FROM admin_users WHERE session_id = \''.session_id().'\'');
                                if (mysql_num_rows($account_data) == 1) {
                                    echo '

                                    <div class="col-md-2">
                                        <p class="text-right" id="edit-post">
                                            <a href="tarz/main.php?page=edit_topics&id='.$_GET['id'].'" class="btn-edit m0"><i class="fa fa-edit"></i>&nbsp;Düzenle</a>
                                        </p>
                                    </div>';}
                                    ?>
              </footer>
            </article>
            <!-- Comment Section -->
            <!--==================================================-->
            <div class="comments">
              <h5 class="comments-title">
                <i class="fa fa-comments"></i> <span class="color4"><?=$data['subject'];?></span> konusuna ait yorumlar
              </h5>
              <!-- Comment 1 -->
              <ol>
                <?php
                                    $account_data = mysql_query('SELECT * FROM admin_users WHERE session_id = \''.session_id().'\'');
                                    $id = mysql_real_escape_string($_GET['id']);
                                    $sql_yorumlar = mysql_query("SELECT * FROM yorumlar WHERE konu_id=$id ORDER BY Yorum_ID DESC");
                                    while($yorum_data = mysql_fetch_array($sql_yorumlar))
                                    {
                                        if ($yorum_data['onay']==1) {
                                            if (mysql_num_rows($account_data) == 0) {
                                            # code...
                                                echo '
                                                <li>
                                                    <!-- Comment 2 -->
                                                    <div class="media comment">
                                                        <a name=”baslik1”>
                                                            <a class="avatar" href="#">
                                                                <img class="media-object" src="http://placehold.it/64x64/BDC3C7/ffffff" alt="">
                                                            </a>
                                                            <div class="media-body">
                                                                <h5 class="media-heading">'.$yorum_data['name'].'
                                                                    <small></small>
                                                                </h5>
                                                                <p class="small">
                                                                    <i class="fa fa-calendar"></i> 
                                                                    <span>
                                                                        '.$yorum_data['yorum_tarih'].'
                                                                    </span>
                                                                </p>
                                                                <p>'.$yorum_data['icerik'].'</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    ';
                                                }else{
                                                    echo '
                                                    <li><a name="aaa'.$id.'">
                                                        <!-- Comment 2 -->
                                                        <div class="media comment">
                                                            <a class="avatar" href="#">
                                                                <img class="media-object" src="http://placehold.it/64x64/BDC3C7/ffffff" alt="">
                                                            </a>
                                                            <div class="media-body">
                                                                <h5 class="media-heading">'.$yorum_data['name'].'
                                                                    <small></small>
                                                                </h5>
                                                                <p class="small">
                                                                    <a href="http://localhost/wordpresscorp/?p=1#comment-1">
                                                                        <i class="fa fa-calendar"></i> 
                                                                        <span>
                                                                            '.$yorum_data['yorum_tarih'].'
                                                                        </span>
                                                                    </a>
                                                                </p>
                                                                <p>'.$yorum_data['icerik'].'</p>
                                                                <p class="text-right"><a href="" class="btn-reply"><i class="fa fa-reply"></i>&nbsp;Reply</a><a href="tarz/main.php?page=edit_yorum&id='.$yorum_data['Yorum_ID'].'" class="btn-edit"><i class="fa fa-edit"></i>&nbsp;Yorumu düzenle</a></p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    ';

                                                    
                                                }
                                            }
                                        }
                                        ?>
              </ol>
            </div>
            <!-- /comments -->

            <!-- Comments form -->
            <div class="row">
              <div class="col-md-12 mt10">
                <h4 class="color5">Yorum yazın</h4>
                <form action="yorum.php?adim=<?php echo $id; ?>" method="POST">
                  <fieldset>
                    <div class="row">
                      <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                          <label class="sr-only" for="name">İsim<br></label>
                          <div class="inner-addon left-addon">
                            <i class="fa fa-user"></i>
                            <input type="text" class="form-control required" placeholder="İsim" name="name" id="name" data-name="Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                          <label class="sr-only" for="email">Eposta (paylaşılmayacak)<br></label>
                          <div class="inner-addon left-addon">
                            <i class="fa fa-envelope"></i>
                            <input type="email" class="form-control required required-email" placeholder="Eposta (paylaşılmayacak)" name="email" id="email"
                              data-name="email">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="sr-only" for="message">Yorum<br></label>
                          <div class="inner-addon left-addon">
                            <i class="fa fa-comment"></i>
                            <textarea rows="11" name="yorum" id="yorum" class="form-control required" placeholder="Mesajınız..." data-name="Comment"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row actions">
                      <div class="col-sm-12 col-md-6">
                        <input type="submit" value="&#xf1d9; &nbsp;Yorumu Gönder" name="submit" id="submitButton" class="btn btn-default btn-primary-corp-big"
                          title="Click here to leave a reply!">
                      </div>
                    </div>
                  </fieldset>
                </form>

                <p>&nbsp;</p>
              </div>
            </div>
            <!-- /comments form -->
          </div>
          <!-- Sidebar -->
          <!--==================================================-->
          <aside class="col-md-4 sidebar sidebar-right">
            <!-- Search form -->
            <div class="well widget">
              <form method="get">
                <div class="input-group search-form" role="form">
                  <label class="sr-only" for="subscribe-email">Ara...</label>
                  <input type="text" class="form-control" name="s" id="search" value="" placeholder="Ara...">
                  <span class="input-group-btn">
                                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                            </span>
                </div>
              </form>
            </div>
            <!-- Recent posts -->
            <div class="well widget">
              <h2>Son Yazılar</h2>
              <ul class="list-unstyled">
                <?php
                                        $sql_category = mysql_query('SELECT * FROM `topics` ORDER BY `ID` DESC LIMIT 5;');
                                        while($topics_data = mysql_fetch_array($sql_category))
                                        {
                                            echo '


                                            <li><a href="'.$topics_data['ID'].'-'.$topics_data['url'].'.html">'.$topics_data['subject'].'</a>
                                            </li>';
                                        }
                                        ?>
              </ul>
            </div>
            <div style="float:right" class="fb-page visible-lg-block" data-href="https://www.facebook.com/tarzyazilim" data-tabs="timeline"
              data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
              <blockquote cite="https://www.facebook.com/tarzyazilim" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tarzyazilim">Tarz Yazılım Teknolojik Sistemler Danışmanlık A.Ş.</a></blockquote>
            </div>
            <div style="float:right" class="fb-page visible-md-block " data-href="https://www.facebook.com/tarzyazilim" data-tabs="timeline"
              data-width="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
              <blockquote cite="https://www.facebook.com/tarzyazilim" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tarzyazilim">Tarz Yazılım Teknolojik Sistemler Danışmanlık A.Ş.</a></blockquote>
            </div>
            <div style="margin:0px auto; left:10%; right:10%;" class="fb-page visible-sm-block visible-xs-block" data-href="https://www.facebook.com/tarzyazilim"
              data-tabs="timeline" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
              data-show-facepile="true">
              <blockquote cite="https://www.facebook.com/tarzyazilim" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tarzyazilim">Tarz Yazılım Teknolojik Sistemler Danışmanlık A.Ş.</a></blockquote>
            </div>
          </aside>
        </div>
      </div>
    </section>

    <?php include 'footer.php'; ?>
    <?php include 'script.php'; ?>
  </body>

  </html>