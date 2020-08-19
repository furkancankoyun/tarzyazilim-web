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
  <!-- Yandex -->
  <!--==================================================-->
  <script type="text/javascript">
    (function (d, w, c) {
      (w[c] = w[c] || []).push(function () {
        try {
          w.yaCounter45156384 = new Ya.Metrika({
            id: 45156384,
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
          });
        } catch (e) {}
      });
      var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () {
          n.parentNode.insertBefore(s, n);
        };
      s.type = "text/javascript";
      s.async = true;
      s.src = "https://mc.yandex.ru/metrika/watch.js";

      if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
      } else {
        f();
      }
    })(document, window, "yandex_metrika_callbacks");
  </script>
  <noscript>
    <div><img
        src="https://mc.yandex.ru/watch/45156384"
        style="position:absolute; left:-9999px;"
        alt=""
      /></div>
  </noscript>
  <!-- Google -->
  <!--==================================================-->
  <script>
    (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-73065856-4', 'auto');
  ga('send', 'pageview');
</script>
  <!-- Facebook -->
  <!--==================================================-->
  <div id="fb-root"></div>
  <script>
    (function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/tr_TR/sdk.js#xfbml=1&version=v2.8&appId=1595665827321753";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script> <!-- Header Section -->
  <!--==================================================-->
  <header
    class="navbar navbar-default navbar-fixed-top"
    role="navigation"
  >
    <!-- Social Icon and Ip Section -->
    <!--==================================================-->
    <div class="nav-social hidden-xs">
      <div class="container">
        <div class="row">
          <div class="col-xs-6">
            <div class="tarz-social-icon">
              <a
                href="https://www.facebook.com/tarzyazilim"
                target="_blank"
              ><i class="fa fa-facebook"></i></a>
              <a
                href="https://www.instagram.com/tarzyazilim/"
                target="_blank"
              ><i class="fa fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <!-- Logo and Mobil Menu Section -->
      <!--==================================================-->
      <div class="navbar-header">
        <button
          type="button"
          class="navbar-toggle"
          data-toggle="collapse"
          data-target=".navbar-collapse"
        >
          <span class="sr-only">Mobile Menu</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a
          class="navbar-brand"
          href="/"
        ><img
            src="img/tarz-logo.png"
            alt="tarz-yazilim-logo"
          ></a>
      </div>
      <!-- Main Menu -->
      <!--==================================================-->
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="dropdown">
            <a
              href="#"
              class="dropdown-toggle"
              data-toggle="dropdown"
            >KURUMSAL <i class="fa fa-angle-down small"></i></a>
            <ul
              class="dropdown-menu"
              role="menu"
            >
              <li><a href="Hakkimizda">Hakkımızda</a></li>
              <li><a href="Hizmetlerimiz">Neler Yaparız?</a></li>
              <li><a href="Insan-Kaynaklari">İnsan Kaynakları</a></li>
              <li><a href="Is-Ortaklarimiz">İş Ortaklarımız</a></li>
            </ul>
          </li>
          <li><a href="Referanslarımız">REFERANSLARIMIZ</a></li>
          <li><a href="Netcity">NETCİTY BAŞVURU</a></li>
          <li class="active"><a href="atiker-basvuru">ATİKER BAŞVURU</a></li>
          <li><a href="Iletisim">İLETİŞİM</a></li>

          <li><a
              href="TARZ_DESTEK.exe"
              class="btn-primary-border"
            ><i class="fa fa-download"></i> TARZ DESTEK PROGRAMI</a></li>
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
        <li class="active">ATİKER BAŞVURU</li>
      </ol>
    </div>
  </section>
  <!-- Atiker Section -->
  <!--==================================================-->
  <section class="netcity-form">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <img
            src="./img/atk.png"
            class="img-responsive"
            style="margin: 0 auto; height: 6rem;"
            alt="atiker_logo"
          />
        </div>
        <div class="col-xs-12">
          <h1
            class="netcity-form__title"
            style="text-align: center;"
          >Atiker Yazılım Lisans Başvuru Formu</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <form
            name="nc_form"
            id="nc_form"
            method="post"
            action="Atiker"
            autocomplete="on"
          >
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">


                <input
                  type="text"
                  class="form-control"
                  id="nc_form__name"
                  aria-describedby="emailHelp"
                  placeholder="Tİcari Ünvan"
                >
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <input
                  type="nc_form__com_title"
                  id="nc_form__com_title"
                  class="form-control"
                  placeholder="Adınız"
                >

              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <input
                  name="nc_form__lastname"
                  id="nc_form__lastname"
                  type="text"
                  class="form-control atiker_input"
                  placeholder="Soyadınız"
                  required
                />
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <input
                  name="nc_form__address"
                  id="nc_form__address"
                  type="text"
                  class="form-control"
                  placeholder="Adresiniz"
                  required
                >
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <input
                  name="nc_form__region"
                  id="nc_form__region"
                  type="text"
                  class="form-control atiker_input"
                  placeholder="İl"
                  required
                />
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <input
                  name="nc_form__county"
                  id="nc_form__county"
                  type="text"
                  class="form-control atiker_input"
                  placeholder="İlçe"
                  required
                />
              </div>
              <div class="col-md-4 col-sm-12 col-xs-12">
                <input
                  name="nc_form__email"
                  id="nc_form__email"
                  type="email"
                  class="form-control"
                  placeholder="E-Posta"
                  required
                />
              </div>
              <div class="col-md-4 col-sm-12 col-xs-12">
                <input
                  name="nc_form__tel"
                  id="nc_form__tel"
                  type="tel"
                  class="form-control"
                  placeholder="Sabit Telefon"
                >
              </div>
              <div class="col-md-4 col-sm-12 col-xs-12">
                <input
                  name="nc_form__mobile"
                  id="nc_form__mobile"
                  type="tel"
                  class="form-control"
                  placeholder="Cep Telefonu"
                  required
                />
              </div>
              <!-- end Package Total -->


              <div class="container">
                <div class="row">

                  <div class="col-md-3">
                    <label for="padi">Ana Paket Lisansı</label>
                    <select
                      name="padi"
                      id="padi"
                      class="form-control"
                    >
                      <option value="">Seçin...</option>
                    </select>
                  </div>

                  <div class="col-md-3">
                    <label for="ksayisi">İlave Kullanıcı Sayısı</label>
                    <select
                      name="ksayisi"
                      id="ksayisi"
                      class="form-control"
                      disabled="disabled"
                    >
                      <option value="">Seçin...</option>
                    </select>
                  </div>

                  <div class="col-md-3">
                    <label for="fiyat">Toplam Lisans Fiyatı (TL)</label>
                    <label
                      name="fiyat"
                      id="fiyat"
                      class="form-control"
                      disabled="disabled"
                    >
                    </label>
                  </div>

                  <div class="col-md-3">
                    <label for="itutari"> %20 İndirim Tutarı (TL)</label>
                    <label
                      name="itutari"
                      id="itutari"
                      class="form-control"
                      disabled="disabled"
                    >

                    </label>
                  </div>

                  <div class="col-md-3">
                    <label for="ifiyat">Genel Toplam Tutar (TL)</label>
                    <label
                      name="ifiyat"
                      id="ifiyat"
                      class="form-control"
                      disabled="disabled"
                    >
                    </label>
                  </div>


                </div>
              </div>



              <div class="col-md-offset-4 col-md-4 col-sm-12 col-xs-12">
                <p id="nc_form__package01--selected__content"></p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <h3>PAKETE DAHİL ÜRÜN VE HİZMETLERİMİZ</h3>
              </div>
              <div class="col-xs-12">
                <ul class="list-group">
                  <li class="list-group-item">+ FİYATLARIMIZA KDV HARİÇTİR.</li>
                  <li class="list-group-item">+ BELİRTİLEN FİYATLAR SADECE LİSANS BEDELİ OLUP, SİSTEM KURLUMU, DEVREYE ALMA, EĞİTİM GİBİ HİZMET BEDELLERİ FİYATA DAHİL DEĞİLDİR.</li>
                  <li class="list-group-item">+ TESLİMAT: ÖDEMEYİ TAKİP EDEN 2 İŞ GÜNÜ İÇERİSİNDE LİSANSLARIMIZ DİJİTAL ORTAMLARDA TARAFINIZA TESLİM EDİLİR. EĞİTİM HİZMETLERİNE KARŞILIKLI YAPILACAK ANLAŞMADA BELİRTİLERN TARİHTE BAŞLANIR.</li>
                  <li class="list-group-item">+ LİSANS FİYATLARINA 1 YILLIK GÜNCELLEME BEDELİ DAHİLDİR.</li>
                  <li class="list-group-item">+ ÖDEME VE DİĞER DETAYLAR İÇİN SİPARİŞ FORMUNUN TARAFIMIZA ULAŞMASI HALİNDE SİZİNLE İLETİŞİME GEÇİLEREK DETAYLI SÖZLEŞME TARAFINIZ GÖNDERİLECEKTİR.</li>
                  <li class="list-group-item">+ KURULUM, EĞİTİM, DEVREYE ALMA GİBİ HİZMET FİYATLARIMIZA 3 AY BOYUNCA UZAK MASAÜSTÜ DESTEK HİZMETİ DAHİLDİR. DESTEK HİZMETLERİMİZ RESMİ ÇALIŞMA GÜN VE SAATLERİNDE VERİLMEKTEDİR.</li>
                  <li class="list-group-item">+ RAKİP PROGRAMLARIN GEÇİŞ İŞLMELERİNİZ, RAKİP PROGRAMI ALDIĞINIZI GÖSTEREN FATURAYI TARAFIMIZA İBRAZ ETMENİZ HALİNDE İLAVE OLARAK İNDİRİM SAĞLANIR. BU İNDİRİM ORANI %10'U GEÇMEZ.</li>
                  <li class="list-group-item">+ YERİNDE KURULUM VE EĞİTİM HİZMETLERİ KAHRAMANMARAŞ MERKEZ HARİCİNDE OLMASI HALİNDE ULAŞIM, KONAKLAMA, BARINMA GİBİ GİDERLER TARAFINIZDA KARŞILANIR.</li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-offset-4 col-md-4 col-sm-12 col-xs-12">
                <div
                  class="g-recaptcha"
                  data-sitekey="6Lf4TWIUAAAAAH2bWr5ZjFc7GHF3mNsUSkagtEu3"
                ></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input
                  name="nc_form__btnsubmit"
                  id="nc_form__btnsubmit"
                  type="submit"
                  value="Formu Gönder"
                  class="btn btn-success btn-block"
                />
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input
                  name="nc_form__btnreset"
                  id="nc_form__btnreset"
                  type="reset"
                  value="Formu Temizle"
                  class="btn btn-warning btn-block"
                />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer Section -->
  <!--==================================================-->
  <footer>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="footer-widget col-xs-12 col-md-9">
            <h3>HAKKIMIZDA</h3>
            <p><strong>Tarz Yazılım</strong> Teknolojik Sistemler Danışmanlık A.Ş. olarak 2013 yılında müşteri odaklı yazılım
              çözümleri üretmek için faaliyetlerimize başladık. Şirketin adı kuruluş amacını, hedeflerini ve şirketin gerçek
              kimliğini ortaya koyabilmesi için titiz bir çalışma sonucu belirlenmiştir.</p>
            <p>
              <u>Yaptığımız işin en iyisi</u>; yani sektöründe <b>TARZ</b> olmak üzere yola çıktık. Hedeflediğimiz sektörlerde
              <b>TARZ</b> olabilmenin bilinciyle çalışmalarımıza devam etmekteyiz. Yazılım sektöründe uluslar arası tanınmış
              platformlarda çalışarak güvenilirliği ve sağlam duruşu ile çağın tüm gelişmelerini takip eden, ileriyi görebilme
              azminde, müşteri odaklı bir firma/çalışan kültürü oluşturmayı vizyonumuz olarak benimsemiş bulunmaktayız. </p>
            <div class="visible-xs-block visible-sm-block pt20"></div>
          </div>
          <div class="footer-widget col-xs-12 col-md-3">
            <h3>İLETİŞİM</h3>
            <ul class="list-unstyled">
              <li><i class="fa fa-map-marker"></i>
                Hacı Bayram Veli Mah. Kuddusi Baba Bulvarı Flora Park Apt Altı Onikişubat, Kahramanmaraş </li>
              <li class="number"><i class="fa fa-phone"></i>
                0(850) 533 0 344 </li>
              <li><i class="fa fa-envelope"></i>
                bilgi@tarzyazilim.com.tr </li>
            </ul>
            <div class="visible-xs-block visible-sm-block pt20"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <p>TARZ <img src="img/tarz-logo-15.png"> YAZILIM</p>
            <p>
              2013 - 2018 Tüm hakları saklıdır.</p>
          </div>
        </div>
      </div>
    </div>
    <a
      href="#"
      class="scrollToTop"
    ><i class="fa fa-angle-up"></i></a>
  </footer> <!-- JavaScript -->
  <!--==================================================-->
  <script
    type="text/javascript"
    src="js/jquery-1.12.4.min.js"
  ></script>
  <script
    type="text/javascript"
    src="js/jquery.easing.1.3.js"
  ></script>
  <script
    type="text/javascript"
    src="js/bootstrap.min.js"
  ></script>
  <script
    type="text/javascript"
    src="js/jquery.vanillabox-0.1.7.min.js"
  ></script>
  <script
    type="text/javascript"
    src="js/slick.min.js"
  ></script>
  <script
    type="text/javascript"
    src="js/bootstrap-select.min.js"
  ></script>
  <script
    type="text/javascript"
    src="js/jquery.flexslider-min.js"
  ></script>
  <script
    type="text/javascript"
    src="js/jquery.placeholder.min.js"
  ></script>
  <script
    type="text/javascript"
    src="js/jquery.stellar.min.js"
  ></script>
  <script
    type="text/javascript"
    src="js/wow.min.js"
  ></script>
  <script
    type="text/javascript"
    src="js/main.js"
  ></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <script>
    $(document).ready(function () {
      ajaxFunc("padi", "", "#padi");

      $("#padi").on("change", function () {

        $("#ksayisi").attr("disabled", false).html("<option value=''>Seçin..</option>");
        console.log($(this).val());
        ajaxFunc("ksayisi", $(this).val(), "#ksayisi");

      });

      $("#ksayisi").on("change", function () {

        $("#fiyat").attr("disabled", false).html("<option value=''>Liste Fiyatı..</option>");
        console.log($(this).val());
        ajaxFunc("fiyat", $(this).val(), "#fiyat");

      });

      $("#ksayisi").on("change", function () {

        $("#itutari").attr("disabled", false).html("<option value=''>İndirim Tutarı..</option>");
        console.log($(this).val());
        ajaxFunc("itutari", $(this).val(), "#itutari");

      });

      $("#ksayisi").on("change", function () {

        $("#ifiyat").attr("disabled", false).html("<option value=''>Toplam Fiyat..</option>");
        console.log($(this).val);
        ajaxFunc("ifiyat", $(this).val(), "#ifiyat");

      });

      function ajaxFunc(action, name, id) {
        $.ajax({
          url: "ajax.php",
          type: "POST",
          data: {
            action: action,
            name: name
          },
          success: function (sonuc) {
            $.each($.parseJSON(sonuc), function (index, value) {
              var row = "";
              row += '<option value="' + value + '">' + value + '</option>';
              $(id).append(row);
            });
          }
        });
      }
    });
  </script>
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function () {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/59a27920b6e907673de09d91/default';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->
  <script>
    $("#nc_form__package01").change(function () {
      document.getElementById("nc_form__package01--selected__content").innerHTML = "<b>Seçtiğiniz Paket: </b>" + document.getElementById("nc_form__package01").value;
    });
    if ($('#atiker-form').length) {
      $('.navbar-default').css("border-top", "solid 3px #0a4fa1");
      $('.nav-social').css("background-color", "#0a4fa1");
      $('.breadcrumb-container').css("background-color", "#0a4fa1");
      $('.navbar-default .navbar-nav>.active>a').css("color", "#0a4fa1");
      $('.footer-top').css("background-color", "#0a4fa1");
      $('.footer-bottom').css("background-color", "#0a4fa1");
    };
  </script>
</body>

</html>