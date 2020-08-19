<?php
if (!empty($_POST['site_name']) and !empty($_POST['short_description']) and !empty($_POST['description']) and !empty($_POST['working_hours']) and !empty($_POST['adress']) and !empty($_POST['phone_number']) and !empty($_POST['email_adress']) and !empty($_POST['facebook_url']) and !empty($_POST['twitter_url']) and !empty($_POST['google_plus_url']) and !empty($_POST['pinterest_url']) and !empty($_POST['linkedin_url']) and !empty($_POST['founded']))
{
	mysql_query('UPDATE system_settings SET site_name=\''.mysql_real_escape_string($_POST['site_name']).'\', short_description=\''.mysql_real_escape_string($_POST['short_description']).'\',description=\''.mysql_real_escape_string($_POST['description']).'\',working_hours=\''.mysql_real_escape_string($_POST['working_hours']).'\',adress=\''.mysql_real_escape_string($_POST['adress']).'\',phone_number=\''.mysql_real_escape_string($_POST['phone_number']).'\',email_adress=\''.mysql_real_escape_string($_POST['email_adress']).'\',facebook_url=\''.mysql_real_escape_string($_POST['facebook_url']).'\',twitter_url=\''.mysql_real_escape_string($_POST['twitter_url']).'\',google_plus_url=\''.mysql_real_escape_string($_POST['google_plus_url']).'\',pinterest_url=\''.mysql_real_escape_string($_POST['pinterest_url']).'\',linkedin_url=\''.mysql_real_escape_string($_POST['linkedin_url']).'\',founded=\''.mysql_real_escape_string($_POST['founded']).'\'');
	header('Location: main.php?page=system_settings');
}
?>
<br><br>
<form class="form-horizontal" role="form" method="post" action="main.php?page=system_settings">
	<div class="row">
		<div class="col-sm-4">
			<div class="well">Genel</div>
			<div class="form-group">
				<label class="control-label col-sm-5" for="site_name">Site Adı:</label>
				<div class="col-sm-7"><input type="text" class="form-control" id="site_name" name="site_name" value="<?=$system_settings['site_name'];?>" required></div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-5" for="short_description">Kısa Açıklama:</label>
				<div class="col-sm-7"><input type="text" class="form-control" id="short_description" name="short_description" value="<?=$system_settings['short_description'];?>" required></div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-5" for="description">Açıklama:</label>
				<div class="col-sm-7"><input type="text" class="form-control" id="description" name="description" value="<?=$system_settings['description'];?>" required></div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-5" for="working_hours">Çalışma Saatleri:</label>
				<div class="col-sm-7"><input type="text" class="form-control" id="working_hours" name="working_hours" value="<?=$system_settings['working_hours'];?>" required></div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="well">İletişim Bilgileri</div>
			<div class="form-group">
				<label class="control-label col-sm-5" for="adress">Adres:</label>
				<div class="col-sm-7"><input type="text" class="form-control" id="adress" name="adress" value="<?=$system_settings['adress'];?>" required></div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-5" for="phone_number">Telefon Numarası:</label>
				<div class="col-sm-7"><input type="text" class="form-control" id="phone_number" name="phone_number" value="<?=$system_settings['phone_number'];?>" required></div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-5" for="email_adress">Mail Adresi:</label>
				<div class="col-sm-7"><input type="text" class="form-control" id="email_adress" name="email_adress" value="<?=$system_settings['email_adress'];?>" required></div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-5" for="facebook_url">Facebook URL:</label>
				<div class="col-sm-7"><input type="text" class="form-control" id="facebook_url" name="facebook_url" value="<?=$system_settings['facebook_url'];?>" required></div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-5" for="twitter_url">Twitter URL:</label>
				<div class="col-sm-7"><input type="text" class="form-control" id="twitter_url" name="twitter_url" value="<?=$system_settings['twitter_url'];?>" required></div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-5" for="google_plus_url">İnstagram URL:</label>
				<div class="col-sm-7"><input type="text" class="form-control" id="google_plus_url" name="google_plus_url" value="<?=$system_settings['google_plus_url'];?>" required></div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-5" for="pinterest_url">Pinterest URL:</label>
				<div class="col-sm-7"><input type="text" class="form-control" id="pinterest_url" name="pinterest_url" value="<?=$system_settings['pinterest_url'];?>" required></div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-5" for="linkedin_url">Linkedin URL:</label>
				<div class="col-sm-7"><input type="text" class="form-control" id="linkedin_url" name="linkedin_url" value="<?=$system_settings['linkedin_url'];?>" required></div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="well">Diğer</div>
			<div class="form-group">
				<label class="control-label col-sm-5" for="founded">Kuruluş Tarihi:</label>
				<div class="col-sm-7"><input type="text" class="form-control" id="founded" name="founded" value="<?=$system_settings['founded'];?>" required></div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-1 col-sm-11"><button type="submit" class="btn btn-default">Ayarları Kaydet</button></div>
	</div>
</form>