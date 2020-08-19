<?php

if (!empty($_GET['del']))
{
	$sql_del = mysql_query('SELECT * FROM yorumlar WHERE Yorum_ID = \''.mysql_real_escape_string($_GET['del']).'\'');
	if (mysql_num_rows($sql_del) == 1)
	{
		mysql_query('DELETE FROM yorumlar WHERE Yorum_ID = \''.mysql_real_escape_string($_GET['del']).'\'');
	}
}
?>
<br><br>
<div class="panel panel-default">
	<div class="panel-body">
	</div>
	<div class="panel-footer">
		<ul class="media-list">
			<?php
			$sql_yorum = mysql_query('SELECT * FROM yorumlar INNER JOIN topics ON yorumlar.konu_id = topics.ID');
			while($yorum_data = mysql_fetch_array($sql_yorum))
			{
			?>
			<li class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object" src="../uploads/project/images/<?=json_decode($yorum_data['image'])[0];?>" alt="Generic placeholder image" height="70px" width="70px">
					</a>
				</div>
				<div class="media-body"><h3 class="media-heading">Konu <a href="../<?=$yorum_data['ID'];?>-<?=$yorum_data['url'];?>.html" target="_blank"><?=$yorum_data['subject'];?></a></h3>
					<h4 class="media-heading"><a href="../<?=$yorum_data['ID'];?>-<?=$yorum_data['url'];?>.html#aaa<?=$yorum_data['ID'];?>" target="_blank"><br><?=$yorum_data['name'];?></a></h4>
				</div>
				<div class="media-right">
					<button type="button" class="btn btn-default">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> <a href="main.php?page=edit_yorum&id=<?=$yorum_data['Yorum_ID'];?>">Görüntüle</a>
					</button>
					<button type="button" class="btn btn-default">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> <a href="main.php?page=yorumlar&del=<?=$yorum_data['Yorum_ID'];?>">Sil</a>
					</button>
				</div>
			</li>
			<?php } ?>
		</ul>
	</div>
</div>