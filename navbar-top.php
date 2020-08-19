<!-- Social Icon and Ip Section -->
<!--==================================================-->
<div class="nav-social hidden-xs">
  <div class="container-fluid" style="padding: 0 2rem;">
    <div class="row">
      <div class="col-xs-6">
        <div class="tarz-social-icon">
          <a href="<?=htmlspecialchars($system_settings['facebook_url'], ENT_QUOTES, 'UTF-8');?>" target="_blank"><i class="fa fa-facebook"></i></a>
          <a href="<?=htmlspecialchars($system_settings['google_plus_url'], ENT_QUOTES, 'UTF-8');?>" target="_blank"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="col-xs-6">
        <div class="tarz-your-ip">
          <p>IP ADRESİNİZ:
            <?php echo getRealIpAddr(); ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>