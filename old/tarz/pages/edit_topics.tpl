<?php
if(@mysql_num_rows(mysql_query('SELECT * FROM topics WHERE ID = \''.mysql_real_escape_string($_GET['id']).'\'')) == 0)
{
	exit('<script>location.href="main.php";</script>');
}

$data_edit_topics = mysql_fetch_array(mysql_query('SELECT * FROM topics WHERE id = \''.mysql_real_escape_string($_GET['id']).'\''));

if (!empty($_POST['subject']) and !empty($_POST['content']) and !empty($_POST['short_content']) and !empty($_POST['category']) and !empty($_POST['author']))
{
	mysql_query('UPDATE topics SET url = \''.mysql_real_escape_string(contenturl($_POST['subject'])).'\', subject = \''. mysql_real_escape_string($_POST['subject']).'\', author = \'' . mysql_real_escape_string($_POST['author']) . '\', content = \'' . mysql_real_escape_string($_POST['content']) . '\', short_content = \'' . mysql_real_escape_string($_POST['short_content']) . '\', public_time = \''.time().'\', category = \''.$_POST['category'].'\' WHERE id = \''.$_GET['id'].'\'');
	exit('<script>location.href="main.php?page=edit_topics&id='.$_GET['id'].'";</script>');
}
?>
<br><br>
<?php if(isset($edit_topics_error)){ ?>
<div class="alert alert-<?=$edit_topics_error['category'];?>"><strong><?=$edit_topics_error['text-1'];?>!</strong> <?=$edit_topics_error['text-2'];?></div>
<?php } ?>

<form class="form-horizontal" role="form" method="post" action="main.php?page=edit_topics&id=<?=$_GET['id'];?>">
	<div class="form-group">
		<label class="control-label col-sm-2" for="subject">Konu:</label>
		<div class="col-sm-10"><input type="text" class="form-control" id="subject" name="subject" placeholder="Proje konusunu yazınız" value="<?=htmlspecialchars($data_edit_topics['subject'], ENT_QUOTES, 'UTF-8');?>" required></div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="short_content">Kısaca Bu Proje:</label>
		<div class="col-sm-10"><textarea class="form-control" id="short_content" rows="5" name="short_content" placeholder="Kısaca Proje detayını yazınız." required><?=htmlspecialchars($data_edit_topics['short_content'], ENT_QUOTES, 'UTF-8');?></textarea></div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="content">İçerik:</label>
		<div class="col-sm-10"><textarea class="form-control" id="content" rows="10" name="content" placeholder="Proje içeriğini yazınız." required><?=htmlspecialchars($data_edit_topics['content'], ENT_QUOTES, 'UTF-8');?></textarea></div>
	</div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="author">Yazar:</label>
        <div class="col-sm-10"><input type="text" class="form-control" id="author" name="author" placeholder="Konuyu yazan yönetici" value="<?=htmlspecialchars($data_edit_topics['author'], ENT_QUOTES, 'UTF-8');?>" required></div>
    </div>
    <div class="form-group">
		<label class="control-label col-sm-2" for="category">Kategori:</label>
		<div class="col-sm-10">
			<select class="form-control" id="category" name="category" required>
				<option value="1" <?php if($data_edit_topics['category'] == 1){ echo 'selected'; } ?>>DEVAM EDEN PROJELER</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10"><button type="submit" class="btn btn-success">Projeyi Yayınla</button></div>
	</div>
</form>
