<?php
if (@$_GET['category'] < 1 or @$_GET['category'] > 3)
{
	exit('error');
}

if (!empty($_GET['del']))
{
	$sql_del = mysql_query('SELECT * FROM topics WHERE id = \''.mysql_real_escape_string($_GET['del']).'\'');
	if (mysql_num_rows($sql_del) == 1)
	{
		@unlink('../uploads/project/images/'.mysql_fetch_array($sql_del)['image']);
		mysql_query('DELETE FROM topics WHERE id = \''.mysql_real_escape_string($_GET['del']).'\'');
	}
}
?>


<script type="text/javascript">
function islem_onay(url){
	if(confirm("İşleminizden emin misiniz?")){
		window.location=url;
	}
}
</script>
<script type="text/javascript">
function islem_onay(url){
	if(confirm("Konuyu silmek üzeresiniz!")){
		window.location=url;
	}
}
</script>
<br><br>
<div class="panel panel-default">
	<div class="panel-body">
		<?php if($_GET['category'] == 1){ echo 'Devam Eden Projeler'; }elseif($_GET['category'] == 2){ echo 'Tamamlanan Projeler'; }elseif($_GET['category'] == 3){ echo 'Konsept Projeler'; }?>
	</div>
	<div class="panel-footer">
		<ul class="media-list">
			<?php
			$sayfa = (isset($_GET['sayfa'])) ? $_GET['sayfa'] : '';  // get metodu ile gönderilen "sayfa" parametresini aldık
	if(!$sayfa) $sayfa = 1; // eğer $sayfa değişkeni tanımlı değilse değerini 1 yapıyoruz
	$limit = 3; // Sayfalamada gösterilecek icerik sayısı
	$ksayisi = mysql_num_rows(mysql_query('SELECT * FROM topics')); //  Kayıt sayısını alıyoruz
	$ssayisi = ceil($ksayisi / $limit); // sayfa sayısını bulmak için ksayisi ile limiti bölüyoruz ve ceil ile tam sayı olması için yukarı yuvarlıyoruz
	$baslangic = ($sayfa*$limit)-$limit; // başlangıcın hangi kayıttan sonra başlıyacağının hesabı yapıyoruz

			$sql_category = mysql_query('SELECT * FROM topics WHERE category = \''.mysql_real_escape_string($_GET['category']).'\' ORDER BY ID DESC LIMIT 0,20');
			while($topics_data = mysql_fetch_array($sql_category))
			{
			?>
			<li class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object" src="../uploads/project/images/<?=json_decode($topics_data['image'])[0];?>" alt="Generic placeholder image" height="70px" width="70px">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading"><a href="../<?=$topics_data['ID'];?>-<?=$topics_data['url'];?>.html" target="_blank"><?=$topics_data['subject'];?></a></h4>
				</div>
				<div class="media-right">
					<button type="button" class="btn btn-default ">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> <a href="main.php?page=edit_topics&id=<?=$topics_data['ID'];?>">Düzenle</a>
					</button>
					<button type="button" class="btn btn-default" onclick="islem_onay('main.php?page=topics&category=<?=$_GET['category'];?>&del=<?=$topics_data['ID'];?>');">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> <a href="main.php?page=topics&category=<?=$_GET['category'];?>&del=<?=$topics_data['ID'];?>" >Sil</a>
					</button>
				</div>
			</li>
			<?php } ?>
		</ul>
<?php
								  if ($sayfa>1)
								  {
                                    echo '<li><a href="main.php?page=topics&category=1&sayfa='.($sayfa-1).'">&laquo;</a></li>';
								  }
								 
								for($i=1; $i<=$ksayisi; $i++){
		if($i<=$ssayisi){
			if($i==$sayfa){
				echo '<li class="active"><a href="#">'.$i.'</a></li>';
			}else{
				echo '<li><a href="main.php?page=topics&category=1&sayfa='.$i.'">'.$i.'</a></li>';
			}
		}
	}
								
								  if ($sayfa != $ssayisi)
								  {
                                    echo '<li><a href="main.php?page=topics&category=1&sayfa='.($sayfa-1).'">&laquo;</a></li>';
								  }
								  ?>
	</div>
</div>