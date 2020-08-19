<?php
if (!empty($_POST['subject']) and !empty($_POST['content']) and !empty($_POST['short_content']) and !empty($_POST['category']) and !empty($_POST['author']))
{
	if ($_POST['category'] > 0 and $_POST['category'] < 4)
	{
		$uploaded_files = Array();
		$path = '../uploads/project/images/';
		$file_count = count($_FILES['image']['name']);
		for ($i=0; $i<$file_count; $i++)
		{
			if (!empty($_FILES['image']['name'][$i]))
			{
				$ext = pathinfo(strtolower($_FILES['image']['name'][$i]), PATHINFO_EXTENSION);
				$image_name = rand(1,100000) . '-' . rand(1,100000) . '-' . rand(1,100000) . '.' . $ext;
				if (in_array($ext, array('gif', 'png', 'jpg', 'jpeg')))
				{
					if (move_uploaded_file($_FILES['image']['tmp_name'][$i], $path . $image_name))
					{
						array_push($uploaded_files, $image_name);
					}
				}
			}
		}
		if(count($uploaded_files) > 0)
		{
				mysql_query('INSERT INTO topics SET url = \'' . mysql_real_escape_string(contenturl($_POST['subject'])) . '\', image = \'' . json_encode($uploaded_files) . '\', subject = \'' . mysql_real_escape_string($_POST['subject']) . '\', author = \'' . mysql_real_escape_string($_POST['author']) . '\', content = \'' . mysql_real_escape_string($_POST['content']) . '\', short_content = \'' . mysql_real_escape_string($_POST['short_content']) . '\', public_time = \'' . time() . '\', category = \'' . $_POST['category'] . '\'');
				$add_project_error = array('category' => 'success', 'text-1' => 'Başarılı', 'text-2' => 'Proje konusu başarıyla oluşturulup paylaşıldı.');
		}
		else
		{
			$add_project_error = array('category' => 'danger', 'text-1' => 'Hata oluştu', 'text-2' => 'Resimler sunucuya yüklenemedi.');
		}
	}
	else
	{
		$add_project_error = array('category' => 'danger', 'text-1' => 'Hata oluştu', 'text-2' => 'Kategori hatası, seçtiğiniz kategoriyi kontrol ediniz.');
	}
}
?>
<br><br>
<?php if(isset($add_project_error)){ ?>
<div class="alert alert-<?=$add_project_error['category'];?>"><strong><?=$add_project_error['text-1'];?>!</strong> <?=$add_project_error['text-2'];?></div>
<?php } ?>
<form class="form-horizontal" role="form" method="post" action="main.php?page=add_project" enctype="multipart/form-data">
	<div class="form-group">
		<label class="control-label col-sm-2" for="subject">Konu:</label>
		<div class="col-sm-10"><input type="text" class="form-control" id="subject" name="subject" placeholder="Proje konusunu yazınız" required></div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="short_content">Kısaca Bu Proje:</label>
		<div class="col-sm-10"><textarea class="form-control" id="short_content" rows="5" name="short_content" placeholder="Kısaca Proje detayını yazınız." required></textarea></div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="content">İçerik:</label>
		<div class="col-sm-10"><textarea class="form-control" id="content" rows="10" name="content" placeholder="Proje içeriğini yazınız." required></textarea></div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="author">Yazar:</label>
		<div class="col-sm-10"><input type="text" class="form-control" id="author" name="author" placeholder="Konuyu yazan yönetici" required></div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="image">Resim yükle:</label>
		<div class="col-sm-10"><input class="form-control" type="file" name="image[]" id="image[]" multiple="multiple"/></div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="category">Kategori:</label>
		<div class="col-sm-10">
			<select class="form-control" id="category" name="category" required>
				<option value="1">DEVAM EDEN PROJELER</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10"><button type="submit" class="btn btn-success">Projeyi Yayınla</button></div>
	</div>
</form>