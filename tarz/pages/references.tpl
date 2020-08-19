<?php
$references_list = mysql_fetch_array(mysql_query('SELECT * FROM references_list'));
$references_count = mysql_num_rows(mysql_query('SELECT * FROM references_list'));
if (!empty($_POST['name']) and !empty($_POST['link']))
{
	$path = '../uploads/references/';
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

			mysql_query('INSERT INTO references_list SET name = \'' . mysql_real_escape_string($_POST['name']) . '\', aciklama = \'' . mysql_real_escape_string($_POST['aciklama']) . '\', image = \'' . $image_name . '\', link = \'' . mysql_real_escape_string($_POST['link']) . '\'');
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
	$sql = mysql_query('SELECT * FROM references_list WHERE id = \''.mysql_real_escape_string($_GET['del']).'\'');
	if (mysql_num_rows($sql) == 1)
	{
		$data_del = mysql_fetch_array($sql);
		@unlink('../uploads/references/'.$data_del['image']);
		mysql_query('DELETE FROM references_list WHERE id = \''.mysql_real_escape_string($_GET['del']).'\'');
	}
}
?>
<br><br>
<?php if(isset($references_error)){ ?>
<div class="alert alert-<?=$references_error['category'];?>"><strong><?=$references_error['text-1'];?>!</strong> <?=$references_error['text-2'];?></div>
<?php } ?>
<form class="form-horizontal" role="form" method="post" action="main.php?page=references" enctype="multipart/form-data">
	<div class="form-group">
		<label class="control-label col-sm-2" for="name">Referans Adı:</label>
		<div class="col-sm-10"><input type="text" class="form-control" id="name" name="name" placeholder="Referans adını yazınız" required></div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="aciklama">Referans Açıklaması:</label>
		<div class="col-sm-10"><input type="text" class="form-control" id="aciklama" name="aciklama" placeholder="Referans açıklamasını yazınız" required></div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="link">Referans Linki:</label>
		<div class="col-sm-10"><input type="text" class="form-control" id="link" name="link" placeholder="Referans için link yazınız" required></div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="image">Referans Logosu:</label>
		<div class="col-sm-10"><input class="form-control" type="file" name="image" id="image" required></div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10"><button type="submit" class="btn btn-success">Referans Ekle</button></div>
	</div>
</form>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Referans</th>
			<th>Aksiyon</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$sql_references_list = mysql_query('SELECT * FROM references_list');
		while($references_data = mysql_fetch_array($sql_references_list))
		{
			echo '<tr>
			<td>'.htmlspecialchars($references_data['name'], ENT_QUOTES, 'UTF-8').'</td>
			<td><a href="main.php?page=references&del='.$references_data['ID'].'">Sil</td>
			</tr>';
		}
		?>
	</tbody>
</table>