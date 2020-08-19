<?php include 'config.php'; ?>
<?php include 'system.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>İnsan Kaynakları | Tarz Yazılım</title>
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
              <li class="active"><a href="Insan-Kaynaklari">İnsan Kaynakları</a></li>
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
  <div class="breadcrumb-container">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="/">ANA SAYFA</a></li>
        <li class="active">İNSAN KAYNAKLARI</li>
      </ol>
    </div>
  </div>

  <!-- HR Form All Section -->
  <!--==================================================-->
  <section class="bg-white">
    <div class="container">
      <div class="row wow fadeIn">
        <?php include 'b2.php'; ?>
        <form name="contactform" id="contactform" method="post" action="basvuru.php">
          <!-- HR Form All Section 01 -->
          <!--==================================================-->
          <div class="col-sm-12 col-md-6 cinfo">
            <fieldset>
              <div class="title">
                <h2>KİMLİK BİLGİLERİ</h2>
              </div>
              <div class="row">
                <!-- HR Form Section 01 -->
                <!--==================================================-->
                <div class="col-md-6 col-lg-6">
                  <div class="form-group">
                    <label class="sr-only" for="name">İsim<br></label>
                    <div class="inner-addon left-addon">
                      <i class="fa fa-user"></i>
                      <input type="text" class="form-control required" placeholder="İsim" name="name" id="name" data-name="Name" maxlength="50">
                    </div>
                  </div>
                </div>
                <!-- HR Form Section 02 -->
                <!--==================================================-->
                <div class="col-md-6 col-lg-6">
                  <div class="form-group">
                    <label class="sr-only" for="surname">Soyisim<br></label>
                    <div class="inner-addon left-addon">
                      <i class="fa fa-user"></i>
                      <input type="text" class="form-control required" placeholder="Soyisim" name="surname" id="surname" maxlength="50">
                    </div>
                  </div>
                </div>
                <!-- HR Form Section 03 -->
                <!--==================================================-->
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="sr-only" for="tc">TC<br></label>
                    <div class="inner-addon left-addon">
                      <i class="fa fa-user"></i>
                      <input type="text" class="form-control required" placeholder="TC Kimlik Numarası" name="tc" id="tc" data-name="tc" maxlength="20">
                    </div>
                  </div>
                  <div class="row row-lg">
                    <div class="col-lg-7">
                      <div class="form-group">
                        Cinsiyet<br>
                        <select class="selectpicker" data-style="selectcorp" name="cinsiyet" id="cinsiyet">
                                <option value="sec">Cinsiyet seçin</option>
                                <option value="Erkek">Erkek</option>
                                <option value="Kadın">Kadın</option>
                              </select>
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <div class="form-group">
                        <label class="sr-only" for="DTarih">Dtarih<br></label>
                        <div class="inner-addon left-addon">
                          Doğum Tarihi<input type="date" step="7" class="form-control required" name="DTarih" id="DTarih"
                            data-name="DTarih">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="MHal">MHal<br></label>
                    <div class="inner-addon left-addon">
                      <div class="row row-sm">
                        <div class="col-sm-7">
                          <input type="radio" style="width: 25%; height: 20px" name="MHal" value="Evli"> Evli
                          <input type="radio" style="width: 25%; height: 20px" name="MHal" value="Bekar"> Bekar<br>
                        </div>
                        <div class="col-sm-5" style="padding-left:15px;">
                          Askerlik Durumu<br>
                          <select class="selectpicker" data-style="selectcorp" name="askerlik" id="askerlik">
                                  <option value="sec">Seçiniz</option>
                                  <option value="Yaptı">Yaptı</option>
                                  <option value="Yapmadı">Yapmadı</option>
                                  <option value="Muaf">Muaf</option>
                                </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>
          </div>
          <!-- HR Form All Section 02 -->
          <!--==================================================-->
          <div class="col-sm-12 col-md-6">
            <fieldset>
              <div class="title">
                <h2>İLETİŞİM BİLGİLERİ</h2>
              </div>
              <div class="row">
                <div class="col-md-5 col-lg-5">
                  <div class="form-group">
                    <select class="selectpicker" data-style="selectcorp" name="sehir" id="sehir">
                            <option value="0">Şehir Seçiniz</option>
                              <?php
                              $sql=mysql_query("SELECT id,ad FROM il ORDER BY id ASC");
                              while ($row=mysql_fetch_array($sql)) {
                                  ?>  
                                <option class="form-control" value="<?=$row['ad']?>"><?=$row['ad']?></option>
                                  <?php
                              }
                              global $sec;
                              $sec =$row['id']
                              ?>
                          </select>
                  </div>
                </div>
                <div class="col-md-7 col-lg-7">
                  <div class="form-group">
                    <label class="sr-only" for="ilce">İlçe<br></label>
                    <div class="inner-addon left-addon">
                      <i class="fa fa-user"></i>
                      <input type="text" class="form-control" placeholder="Semt (Örn. Taksim)" name="ilce" id="ilce" data-name="ilce" maxlength="20">
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="sr-only" for="adres">Adres<br></label>
                    <div class="inner-addon left-addon">
                      <i class="fa fa-comment"></i>
                      <textarea rows="3" name="adres" id="adres" class="form-control required" placeholder="Adres" data-name="adres" maxlength="250"></textarea>
                    </div>
                  </div>
                  <div class="row row-lg">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="sr-only" for="name">Ev Telefonu<br></label>
                        <div class="inner-addon left-addon">
                          <i class="fa fa-phone"></i>
                          <input type="text" class="form-control required" placeholder="Ev telefonu" name="evno" id="evno" data-name="evno" maxlength="20">
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="sr-only" for="name">Cep Telefonu<br></label>
                        <div class="inner-addon left-addon">
                          <i class="fa fa-phone"></i>
                          <input type="text" class="form-control required" placeholder="Cep Telefonu" name="cepno" id="cepno" data-name="cepno" maxlength="20">
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="sr-only" for="email">Email<br></label>
                        <div class="inner-addon left-addon">
                          <i class="fa fa-envelope"></i>
                          <input type="email" class="form-control required required-email" placeholder="Email" name="email" id="email" data-name="Email"
                            maxlength="50">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>
          </div>
          <p>&nbsp;</p>
          <div class="col-md-12">
            <fieldset>
              <div class="title">
                <h2>EĞİTİM BİLGİLERİ</h2>
              </div>
              <div class="row">
                <!-- İlk öğretim bilgileri !-->
                <div class="col-xs-8">
                  <div class="form-group">
                    <label class="sr-only" for="ilkogretim">İlköğretim<br></label>
                    <div class="inner-addon left-addon">
                      <i class="fa fa-user"></i>
                      <input type="text" class="form-control required" placeholder="İlk öğretim gördüğünüz okul" name="ilkogretim" id="ilkogretim"
                        data-name="ilkogretim" maxlength="150">
                    </div>
                  </div>
                </div>
                <div class="col-xs-2">
                  <div class="form-group">
                    <label class="sr-only" for="iomezuniyet">Mezuniyetyılı<br></label>
                    <div class="inner-addon left-addon">
                      <i class="fa fa-user"></i>
                      <input type="text" class="form-control required" placeholder="Mezuniyet yılı" name="iomezuniyet" id="iomezuniyet" data-name="iomezuniyet"
                        maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-xs-2">
                  <div class="form-group">
                    <label class="sr-only" for="ioderece">DiplomaNotu<br></label>
                    <div class="inner-addon left-addon">
                      <i class="fa fa-user"></i>
                      <input type="text" class="form-control required" placeholder="Diploma notu" name="ioderece" id="ioderece" data-name="ioderece"
                        maxlength="15">
                    </div>
                  </div>
                </div>
                <!-- Orta öğretim bilgileri !-->
                <div class="col-xs-8">
                  <div class="form-group">
                    <label class="sr-only" for="ortaogretim">Ortaöğretim<br></label>
                    <div class="inner-addon left-addon">
                      <i class="fa fa-user"></i>
                      <input type="text" class="form-control required" placeholder="Orta öğretim gördüğünüz okul" name="ortaogretim" id="ortaogretim"
                        data-name="ortaogretim" maxlength="150">
                    </div>
                  </div>
                </div>
                <div class="col-xs-2">
                  <div class="form-group">
                    <label class="sr-only" for="oomezuniyet">Mezuniyetyılı<br></label>
                    <div class="inner-addon left-addon">
                      <i class="fa fa-user"></i>
                      <input type="text" class="form-control required" placeholder="Mezuniyet yılı" name="oomezuniyet" id="oomezuniyet" data-name="oomezuniyet"
                        maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-xs-2">
                  <div class="form-group">
                    <label class="sr-only" for="ooderece">DiplomaNotu<br></label>
                    <div class="inner-addon left-addon">
                      <i class="fa fa-user"></i>
                      <input type="text" class="form-control required" placeholder="Diploma notu" name="ooderece" id="ooderece" data-name="ooderece"
                        maxlength="15">
                    </div>
                  </div>
                </div>
                <!-- Yüksek öğretim bilgileri !-->
                <div class="col-xs-8">
                  <div class="form-group">
                    <label class="sr-only" for="yuksekogretim">Yükseköğretim<br></label>
                    <div class="inner-addon left-addon">
                      <i class="fa fa-user"></i>
                      <input type="text" class="form-control required" placeholder="Yüksek öğretim gördüğünüz okul" name="yuksekogretim" id="yuksekogretim"
                        data-name="yuksekogretim" maxlength="150">
                    </div>
                  </div>
                </div>
                <div class="col-xs-2">
                  <div class="form-group">
                    <label class="sr-only" for="mezuniyet">Mezuniyetyılı<br></label>
                    <div class="inner-addon left-addon">
                      <i class="fa fa-user"></i>
                      <input type="text" class="form-control required" placeholder="Mezuniyet yılı" name="mezuniyet" id="mezuniyet" data-name="mezuniyet"
                        maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-xs-2">
                  <div class="form-group">
                    <label class="sr-only" for="yoderece">DiplomaNotu<br></label>
                    <div class="inner-addon left-addon">
                      <i class="fa fa-user"></i>
                      <input type="text" class="form-control required" placeholder="Diploma notu" name="yoderece" id="yoderece" data-name="yoderece"
                        maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-xs-4">&nbsp;</div>
                <div class="col-xs-2">Kötü</div>
                <div class="col-xs-2">Orta</div>
                <div class="col-xs-2">iyi</div>
                <div class="col-xs-2">Çok iyi</div>
                <div class="col-xs-4">İngilizce</div>
                <div class="col-xs-2"><input type="radio" name="ing" value="kotu"></div>
                <div class="col-xs-2"><input type="radio" name="ing" value="orta"></div>
                <div class="col-xs-2"><input type="radio" name="ing" value="iyi"></div>
                <div class="col-xs-2"><input type="radio" name="ing" value="cokiyi"></div>
                <div class="col-xs-4">Fransızca</div>
                <div class="col-xs-2"><input type="radio" name="Fr" value="kotu"></div>
                <div class="col-xs-2"><input type="radio" name="Fr" value="orta"></div>
                <div class="col-xs-2"><input type="radio" name="Fr" value="iyi"></div>
                <div class="col-xs-2"><input type="radio" name="Fr" value="cokiyi"></div>
                <div class="col-xs-4">Almanca</div>
                <div class="col-xs-2"><input type="radio" name="Al" value="kotu"></div>
                <div class="col-xs-2"><input type="radio" name="Al" value="orta"></div>
                <div class="col-xs-2"><input type="radio" name="Al" value="iyi"></div>
                <div class="col-xs-2"><input type="radio" name="Al" value="cokiyi"></div><br><br><br><br><br>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="sr-only" for="tecrube">Tecrube<br></label>
                    <div class="inner-addon left-addon">
                      <i class="fa fa-comment"></i>
                      <textarea rows="3" name="tecrube" id="tecrube" class="form-control required" placeholder="Kısaca iş tecrübenizden bahsedin"
                        data-name="tecrube" maxlength="255"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="bilgi">Bilgi<br></label>
                    <div class="inner-addon left-addon">
                      <i class="fa fa-comment"></i>
                      <textarea rows="3" name="bilgi" id="bilgi" class="form-control required" placeholder="Kısaca bilgisayar bilginizden bahsedin"
                        data-name="bilgi" maxlength="255"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>
            <fieldset>
              <div class="title">
                <h2>PROGRAMLAMA DİLLERİ</h2>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group">
                    <div class="col-xs-4">&nbsp;</div>
                    <div class="col-xs-2">Kötü</div>
                    <div class="col-xs-2">Orta</div>
                    <div class="col-xs-2">iyi</div>
                    <div class="col-xs-2">Çok iyi</div>

                    <div class="col-xs-4">C</div>
                    <div class="col-xs-2"><input type="radio" name="C" value="kotu"></div>
                    <div class="col-xs-2"><input type="radio" name="C" value="orta"></div>
                    <div class="col-xs-2"><input type="radio" name="C" value="iyi"></div>
                    <div class="col-xs-2"><input type="radio" name="C" value="cokiyi"></div>

                    <div class="col-xs-4">C#</div>
                    <div class="col-xs-2"><input type="radio" name="Cs" value="kotu"></div>
                    <div class="col-xs-2"><input type="radio" name="Cs" value="orta"></div>
                    <div class="col-xs-2"><input type="radio" name="Cs" value="iyi"></div>
                    <div class="col-xs-2"><input type="radio" name="Cs" value="cokiyi"></div>

                    <div class="col-xs-4">Java</div>
                    <div class="col-xs-2"><input type="radio" name="Java" value="kotu"></div>
                    <div class="col-xs-2"><input type="radio" name="Java" value="orta"></div>
                    <div class="col-xs-2"><input type="radio" name="Java" value="iyi"></div>
                    <div class="col-xs-2"><input type="radio" name="Java" value="cokiyi"></div>

                    <div class="col-xs-4">PHP</div>
                    <div class="col-xs-2"><input type="radio" name="Php" value="kotu"></div>
                    <div class="col-xs-2"><input type="radio" name="Php" value="orta"></div>
                    <div class="col-xs-2"><input type="radio" name="Php" value="iyi"></div>
                    <div class="col-xs-2"><input type="radio" name="Php" value="cokiyi"></div><br><br><br><br><br>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="haric">Hariç<br></label>
                    <div class="inner-addon left-addon">
                      <i class="fa fa-comment"></i>
                      <textarea rows="3" name="haric" id="haric" placeholder="Diğer eklemek istedikleriniz." data-name="haric" maxlength="250"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row actions">
                <div class="col-sm-12 col-md-6">
                  <input type="submit" value="&#xf1d9; &nbsp;BAŞVURUYU TAMAMLA" name="submit" id="submitButton" class="btn btn-default btn-primary-corp-big"
                    title="Başvuruyu tamamlamak için tıklayın" />
                </div>
              </div>
            </fieldset>
          </div>
          <p>&nbsp;</p>
        </form>
      </div>
    </div>
  </section>
  <?php include 'footer.php'; ?>
  <?php include 'script.php'; ?>
  <script type="text/javascript" src="js/jquery.plugin.min.js"></script>
  <script type="text/javascript" src="js/jquery.datepick.js"></script>
  <script type="text/javascript" src="js/jquery.datepick-tr.js"></script>
  <script type="text/javascript" src="js/selectchained.js"></script>
  <script type="text/javascript" src="js/smoothscroll.min.js"></script>
  <script type="text/javascript" src="js/form-validation.js"></script>
  <script type="text/javascript">
    $(function () {
      $('#popupDatepicker').datepick();
      $('#inlineDatepicker').datepick({
        onSelect: showDate
      });
    });

    function showDate(date) {
      alert('The date chosen is ' + date);
    };
    $("#ilce").remoteChained("#il", "ililce.php");
    $("#semt").remoteChained("#ilce", "ililce.php");
  </script>
</body>

</html>