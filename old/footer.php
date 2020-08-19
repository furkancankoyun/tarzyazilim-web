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
              <?=htmlspecialchars($system_settings['adress'], ENT_QUOTES, 'UTF-8');?>
            </li>
            <li class="number"><i class="fa fa-phone"></i>
              <?=htmlspecialchars($system_settings['phone_number'], ENT_QUOTES, 'UTF-8');?>
            </li>
            <li><i class="fa fa-envelope"></i>
              <?=htmlspecialchars($system_settings['email_adress'], ENT_QUOTES, 'UTF-8');?>
            </li>
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
            <?=htmlspecialchars($system_settings['founded'], ENT_QUOTES, 'UTF-8');?> Tüm hakları saklıdır.</p>
        </div>
      </div>
    </div>
  </div>
  <a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
</footer>