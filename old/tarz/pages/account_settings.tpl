<?php
if (!empty($_POST['old_password']) and !empty($_POST['password']) and !empty($_POST['repassword']))
{
	if(md5($_POST['old_password']) == $account['password'])
	{
		if($_POST['password'] == $_POST['repassword'])
		{
			if(strlen($_POST['password']) > 3)
			{
				mysql_query('UPDATE admin_users SET password = \''.sha1(md5(md5(sha1($_POST['password'])))).'\' WHERE id = \''.$account['ID'].'\'');
				$account_settings_error = array('category' => 'success', 'text-1' => 'Başarılı', 'text-2' => 'Şifre değiştirildi.');
			}
			else
			{
				$account_settings_error = array('category' => 'danger', 'text-1' => 'Hata', 'text-2' => 'Yeni şifre çok kısa.');
			}
		}
		else
		{
			$account_settings_error = array('category' => 'danger', 'text-1' => 'Hata', 'text-2' => 'Girilen yeni şifreler aynı değil.');
		}
	}
	else
	{
		$account_settings_error = array('category' => 'danger', 'text-1' => 'Hata', 'text-2' => 'Eski şifre doğru değil.');
	}
}
?>
<br><br>
<?php if(isset($account_settings_error)){ ?>
<div class="alert alert-<?=$account_settings_error['category'];?>"><strong><?=$account_settings_error['text-1'];?>!</strong> <?=$account_settings_error['text-2'];?></div>
<?php } ?>
<form class="form-horizontal" role="form" method="post" action="main.php?page=account_settings">
	<div class="form-group">
		<label class="control-label col-sm-2" for="old_password">Eski Şifre:</label>
		<div class="col-sm-10"><input type="text" class="form-control" id="old_password" name="old_password" placeholder="Eski şifrenizi yazınız" required></div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="password">Yeni Şifre:</label>
		<div class="col-sm-10"><input type="text" class="form-control" id="password" name="password" placeholder="Yeni şifrenizi yazınız" required></div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="repassword">Yeni Şifre Tekrar:</label>
		<div class="col-sm-10"><input type="text" class="form-control" id="repassword" name="repassword" placeholder="Yeni şifrenizi tekrar yazınız" required></div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10"><button type="submit" class="btn btn-success">Kaydet</button></div>
	</div>
</form>