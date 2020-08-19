<?php
$ortakk = mysql_fetch_array(mysql_query('SELECT * FROM ortakk'));
$ortak_count = mysql_num_rows(mysql_query('SELECT * FROM ortakk'));
if (!empty($_POST['name']) and !empty($_POST['link']))
{
	$path = '../uploads/isortaklari/';
	$ext = pathinfo(strtolower($_FILES['image']['name']), PATHINFO_EXTENSION);
	$image_name = rand(1,100000) . '-' . rand(1,100000) . '-' . rand(1,100000) . '.' . $ext;
	if (!in_array($ext, array('gif', 'png', 'jpg', 'jpeg')))
	{
	$references_error = array('category' => 'danger', 'text-1' => 'Hata oluştu', 'text-2' => 'Yüklenen resim formatı hatalı. (gif, png, jpg ve jpeg uzantılı resimler desteklenmektedir.)');
}
else
{
	if (@move_uploaded_file($_FILES['image']['tmp_name'], $path . $image_name))
	{
	mysql_query('INSERT INTO ortakk SET ortak_name = \'' . mysql_real_escape_string($_POST['name']) . '\', ortak_image = \'' . $image_name . '\', ortak_link = \'' . mysql_real_escape_string($_POST['link']) . '\', ortak_aciklama = \'' . mysql_real_escape_string($_POST['aciklama']) . '\'');
	$references_error = array('category' => 'success', 'text-1' => 'Başarılı', 'text-2' => 'İş ortağı başarıyla oluşturulup paylaşıldı.');
}
else
{
	$references_error = array('category' => 'danger', 'text-1' => 'Hata oluştu', 'text-2' => 'Resim sunucuya yüklenemedi.');
}
}
}

if (!empty($_GET['del']))
{
	$sql = mysql_query('SELECT * FROM ortakk WHERE ortak_id = \''.mysql_real_escape_string($_GET['del']).'\'');
	if (mysql_num_rows($sql) == 1)
	{
	$data_del = mysql_fetch_array($sql);
	@unlink('../uploads/isortaklari/'.$data_del['ortak_image']);
	mysql_query('DELETE FROM ortakk WHERE ortak_id = \''.mysql_real_escape_string($_GET['del']).'\'');
}
}
?>
<br><br>
<?php if(isset($references_error)){ ?>
<div class="alert alert-<?=$references_error['category'];?>"><strong><?=$references_error['text-1'];?>!</strong> <?=$references_error['text-2'];?></div>
<?php } ?>
<form class="form-horizontal" role="form" method="post" action="main.php?page=isortaklari" enctype="multipart/form-data">
	<div class="form-group">
		<label class="control-label col-sm-2" for="image">İş Ortağı Logosu:</label>
		<div class="col-sm-10"><input class="form-control" type="file" name="image" id="image" required></div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="name">İş Ortağı adı:</label>
		<div class="col-sm-10"><input type="text" class="form-control" id="name" name="name" placeholder="İş Ortağı adını yazınız" required></div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="link">İş Ortağı Linki:</label>
		<div class="col-sm-10"><input type="text" class="form-control" id="link" name="link" placeholder="İş Ortağı için link yazınız" required></div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="aciklama">İş Ortağı Açıklaması:</label>
		<div class="col-sm-10"><textarea class="form-control" id="aciklama" rows="5" name="aciklama" placeholder="Proje içeriğini yazınız." required></textarea></div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10"><button type="submit" class="btn btn-success">İş Ortağı Ekle</button></div>
	</div>
</form>

<table class="table table-bordered">
	<thead>
		<tr>
			<th style="width:140px">Resim</th>
			<th>İş Ortağı Adı - Açıklaması</th>
			<th>Aksiyon</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$sql_ortakk = mysql_query('SELECT * FROM ortakk');
		while($references_data = mysql_fetch_array($sql_ortakk))
		{
		echo '<tr>
		<td><img class="media-object" src="../uploads/isortaklari/'.htmlspecialchars($references_data['ortak_image'], ENT_QUOTES, 'UTF-8').'" alt="Generic placeholder image" height="70px" width="140px"></td>
		<td><b>'.htmlspecialchars($references_data['ortak_name'], ENT_QUOTES, 'UTF-8').'</b><br>'.htmlspecialchars($references_data['ortak_aciklama'], ENT_QUOTES, 'UTF-8').'</td>
		<td><a href="main.php?page=isortaklari&del='.$references_data['ortak_id'].'">Sil</td>
	</tr>';
}
?>
</tbody>
</table>