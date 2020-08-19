<?php
if (!empty($_POST['username']) and !empty($_POST['password']))
{
	if (mysql_num_rows(mysql_query('SELECT * FROM admin_users WHERE username = \''.mysql_real_escape_string($_POST['username']).'\'')) == 0)
	{
		mysql_query('INSERT INTO admin_users SET username = \''.mysql_real_escape_string($_POST['username']).'\', password = \''.sha1(md5(md5(sha1($_POST['password'])))).'\'');
		$authorized_users_error = array('category' => 'success', 'text-1' => 'Başarılı', 'text-2' => 'Yetkili hesabı oluşturuldu.');
	}
	else
	{
		$authorized_users_error = array('category' => 'danger', 'text-1' => 'Başarısız', 'text-2' => 'Hesap oluşturulamadı, zaten kullanıcı adı kullanımda.');
	}
}

if (!empty($_GET['del']))
{
	if($account['ID'] != $_GET['del'])
	{
		$sql_del = mysql_query('SELECT * FROM admin_users WHERE id = \''.mysql_real_escape_string($_GET['del']).'\'');
		if (mysql_num_rows($sql_del) == 1)
		{
			mysql_query('DELETE FROM admin_users WHERE id = \''.mysql_real_escape_string($_GET['del']).'\'');
		}
	}
	else
	{
		$authorized_users_error = array('category' => 'danger', 'text-1' => 'Başarısız', 'text-2' => 'Kendi hesabınızı silemezsiniz.');
	}
}
?>
<br><br>
<?php if(isset($authorized_users_error)){ ?>
<div class="alert alert-<?=$authorized_users_error['category'];?>"><strong><?=$authorized_users_error['text-1'];?>!</strong> <?=$authorized_users_error['text-2'];?></div>
<?php } ?>
<form class="form-horizontal" role="form" method="post" action="main.php?page=authorized_users">
	<div class="form-group">
		<label class="control-label col-sm-2" for="username">Kullanıcı Adı:</label>
		<div class="col-sm-10"><input type="text" class="form-control" id="username" name="username" required></div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="password">Şifre:</label>
		<div class="col-sm-10"><input type="text" class="form-control" id="password" name="password" required></div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10"><button type="submit" class="btn btn-success">Yetkili Hesap Oluştur</button></div>
	</div>
</form>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Kullanıcı Adı</th>
			<th>Aksiyon</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$sql_admin_users = mysql_query('SELECT * FROM admin_users');
		while($admin_users_data = mysql_fetch_array($sql_admin_users))
		{
			echo '<tr>
			<td>'.htmlspecialchars($admin_users_data['username'], ENT_QUOTES, 'UTF-8').'</td>
			<td><a href="main.php?page=authorized_users&del='.$admin_users_data['ID'].'">Sil</td>
			</tr>';
		}
		?>
	</tbody>
</table>