<?php
$references_count = mysql_num_rows(mysql_query('SELECT * FROM references_list'));
$yorum_count = mysql_num_rows(mysql_query('SELECT * FROM yorumlar'));
$basvuru_count = mysql_num_rows(mysql_query('SELECT * FROM basvuru'));
$ortak_count = mysql_num_rows(mysql_query('SELECT * FROM ortakk'));
$category_1_count = mysql_num_rows(mysql_query('SELECT * FROM topics WHERE category = \'1\''));
$category_2_count = mysql_num_rows(mysql_query('SELECT * FROM topics WHERE category = \'2\''));
$category_3_count = mysql_num_rows(mysql_query('SELECT * FROM topics WHERE category = \'3\''));
?>
<br><br>
<div class="row">
	<div class="col-sm-3">
		<div class="list-group">
			<a href="main.php?page=topics&category=1" class="list-group-item">Haftalık/Aylık Konular <span class="badge"><?=$category_1_count;?></span></a>
			<a href="main.php?page=yorumlar" class="list-group-item">Yorumlar <span class="badge"><?=$yorum_count;?></span></a>
			<a href="main.php?page=basvuru" class="list-group-item">Başvurular <span class="badge"><?=$basvuru_count;?></span></a>
		</div>
	</div>
	<div class="col-sm-6">
	</div>
	<div class="col-sm-3">
		<div class="list-group">
			<a href="main.php?page=references" class="list-group-item">Referanslar <span class="badge"><?=$references_count;?></span></a>
		</div>
		<div class="list-group">
			<a href="main.php?page=isortaklari" class="list-group-item">İş Ortakları <span class="badge"><?=$ortak_count;?></span></a>
		</div>
		<div class="list-group">
			<a href="main.php?page=account_settings" class="list-group-item">Hesap Ayarları</a>
		</div>
	</div>
</div>