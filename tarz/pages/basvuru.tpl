<?php

if (!empty($_GET['del']))
{
	$sql_del = mysql_query('SELECT * FROM basvuru WHERE basvuru_id = \''.mysql_real_escape_string($_GET['del']).'\'');
	if (mysql_num_rows($sql_del) == 1)
	{
		mysql_query('DELETE FROM basvuru WHERE basvuru_id = \''.mysql_real_escape_string($_GET['del']).'\'');
	}
}
?>
<br><br>
<div class="panel panel-default">
	<div class="panel-body">
	</div>
	<div class="panel-footer">
		<ul class="media-list">
			<?php $suanki_yil = date("Y"); 
			$sql_basvuru = mysql_query('SELECT * FROM basvuru');
			while($basvuru_data = mysql_fetch_array($sql_basvuru))
			{
			?>
			<li class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object" src="../img/user.png" alt="Kullanıcı resmi" height="70px" width="70px">
					</a>
				</div>
				<div class="media-body"><h3 class="media-heading">Adı Soyadı => <a href="main.php?page=basvuru_grn&id=<?=$basvuru_data['basvuru_id'];?>" target="_blank"><?=$basvuru_data['basvuru_adi'];?> <?=$basvuru_data['basvuru_soyadi'];?></a></h3>
					<h4 class="media-heading"><b><?=$basvuru_data['basvuru_mhal'];?></b> Cinsiyeti <b><?=$basvuru_data['basvuru_cinsiyet'];?></b> Mezun olduğu üniersite <b><?=$basvuru_data['basvuru_uni'];?></b></h4>
				</div>
				<div class="media-right">
					<button type="button" class="btn btn-default">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> <a href="main.php?page=basvuru_grn&id=<?=$basvuru_data['basvuru_id'];?>">Düzenle</a>
					</button>
					<button type="button" class="btn btn-default" style="width:100%;">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> <a href="main.php?page=yorumlar&del=<?=$basvuru_data['Yorum_ID'];?>">Sil</a>
					</button>
				</div>
			</li>
			<?php } ?>
		</ul>
	</div>
</div>