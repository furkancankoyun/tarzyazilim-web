<?php
function temizle($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_POST) {
	$adi = temizle($_POST['name']);
	$soyadi = temizle($_POST['surname']);
	$tc = temizle($_POST['tc']);
	$cinsiyet = temizle($_POST['cinsiyet']);
	$askerlik = temizle($_POST['askerlik']);
	$dtarih = temizle($_POST['DTarih']);
	$mhal = temizle($_POST['MHal']);
	$il = temizle($_POST['sehir']);
	$ilce = temizle($_POST['ilce']);
	$adres = temizle($_POST['adres']);
	$evno = temizle($_POST['evno']);
	$cepno = temizle($_POST['cepno']);
	$email = temizle($_POST['email']);
	$ilkogretim = temizle($_POST['ilkogretim']);
	$iomezuniyet = temizle($_POST['iomezuniyet']);
	$ionot = temizle($_POST['ioderece']);
	$ortaogretim = temizle($_POST['ortaogretim']);
	$oomezuniyet = temizle($_POST['oomezuniyet']);
	$oonot = temizle($_POST['ooderece']);
	$yuksekogretim = temizle($_POST['yuksekogretim']);
	$mezuniyet = temizle($_POST['mezuniyet']);
	$yonot = temizle($_POST['yoderece']);
	$ingseviye = temizle($_POST['ing']);
	$frseviye = temizle($_POST['Fr']);
	$alseviye = temizle($_POST['Al']);
	$tecrube = temizle($_POST['tecrube']);
	$bilgi = temizle($_POST['bilgi']);
	$cdiliseviye = temizle($_POST['C']);
	$csdiliseviye = temizle($_POST['Cs']);
	$javadiliseviye = temizle($_POST['Java']);
	$phpdiliseviye = temizle($_POST['Php']);
	$haric = $_POST['haric'];
		if (empty($adi)) {
			echo '<div class="col-xs-12">
			<div class="alert alert-danger" role="alert">İsim alanını boş bıraktınız.</div>
		</div>';
	} elseif (empty($soyadi)) {
		echo '<div class="col-xs-12">
		<div class="alert alert-danger" role="alert">Soyisim alanını boş bıraktınız.</div>
	</div>';
	} elseif (empty($tc)) {echo '<div class="col-xs-12">
	<div class="alert alert-danger" role="alert">Tc kimlik numarası alanını boş bıraktınız.</div>
	</div>';
	} elseif (empty($cinsiyet)) {
		echo '<div class="col-xs-12">
		<div class="alert alert-danger" role="alert">Cinsiyet alanını boş bıraktınız.</div>
	</div>';
	} elseif ($askerlik=="sec") {
		echo '<div class="col-xs-12">
		<div class="alert alert-danger" role="alert">Askerlik durumu alanını boş bıraktınız.</div>
	</div>';
	} elseif (empty($dtarih)) {
		echo '<div class="col-xs-12">
		<div class="alert alert-danger" role="alert">Doğum tarihi alanını boş bıraktınız.</div>
	</div>';
	} elseif (empty($mhal)) {
		echo '<div class="col-xs-12">
		<div class="alert alert-danger" role="alert">Medeni hal alanını boş bıraktınız.</div>
	</div>';
	} elseif (empty($il)) {
		echo '<div class="col-xs-12">
		<div class="alert alert-danger" role="alert">Şehir alanını boş bıraktınız.</div>
	</div>';
	}  elseif ($il=="0") {
		echo '<div class="col-xs-12">
		<div class="alert alert-danger" role="alert">Şehir alanını boş bıraktınız.</div>
	</div>';
	} elseif (empty($ilce)) {
		echo '<div class="col-xs-12">
		<div class="alert alert-danger" role="alert">İlçe alanını boş bıraktınız.</div>
	</div>';
	} elseif (empty($adres)) {
		echo '<div class="col-xs-12">
		<div class="alert alert-danger" role="alert">Adres alanını boş bıraktınız.</div>
	</div>';
	} elseif (empty($evno)) {
		echo '<div class="col-xs-12">
		<div class="alert alert-danger" role="alert">Ev telefonu alanını boş bıraktınız.</div>
	</div>';
	} elseif (empty($cepno)) {
		echo '<div class="col-xs-12">
		<div class="alert alert-danger" role="alert">Cep telefonu alanını boş bıraktınız.</div>
	</div>';
	} elseif (empty($email)) {
		echo '<div class="col-xs-12">
		<div class="alert alert-danger" role="alert">E-Posta alanını boş bıraktınız.</div>
	</div>';
	} elseif (empty($ilkogretim)) {
		echo '<div class="col-xs-12">
		<div class="alert alert-danger" role="alert">İlköğretim bilgisi alanını boş bıraktınız.</div>
	</div>';
	} elseif (empty($iomezuniyet)) {
		echo '<div class="col-xs-12">
		<div class="alert alert-danger" role="alert">İlk Öğretim mezuniyet tarihi alanını boş bıraktınız.</div>
	</div>';
	} elseif (empty($ionot)) {
		echo '<div class="col-xs-12">
		<div class="alert alert-danger" role="alert">İlk Öğretim diploma notu alanını boş bıraktınız.</div>
	</div>';
	} elseif (empty($ingseviye)) {
		echo '<div class="col-xs-12">
		<div class="alert alert-danger" role="alert">İngilizce dil seviyesi alanını boş bıraktınız.</div>
	</div>';
	} elseif (empty($frseviye)) {
		echo '<div class="col-xs-12">
		<div class="alert alert-danger" role="alert">Fransızca dil seviyesi alanını boş bıraktınız.</div>
	</div>';
	} elseif (empty($alseviye)) {
		echo '<div class="col-xs-12">
			<div class="alert alert-danger" role="alert">Almanca dil seviyesi alanını boş bıraktınız.</div>
		</div>';
	} elseif (empty($tecrube)) {
		echo '<div class="col-xs-12">
			<div class="alert alert-danger" role="alert">Tecrübe bilgisi alanını boş bıraktınız.</div>
		</div>';
	} elseif (empty($bilgi)) {
		echo '<div class="col-xs-12">
			<div class="alert alert-danger" role="alert">Bilgisayar bilgisi alanını boş bıraktınız.</div>
		</div>';
	} elseif (empty($cdiliseviye)) {
		echo '<div class="col-xs-12">
			<div class="alert alert-danger" role="alert">C dili seviye alanını boş bıraktınız.</div>
		</div>';
	} elseif (empty($csdiliseviye)) {
		echo '<div class="col-xs-12">
			<div class="alert alert-danger" role="alert">C# dili seviye alanını boş bıraktınız.</div>
		</div>';
	} elseif (empty($phpdiliseviye)) {
		echo '<div class="col-xs-12">
			<div class="alert alert-danger" role="alert">Php dili seviye alanını boş bıraktınız.</div>
		</div>';
	} elseif (empty($javadiliseviye)) {
		echo '<div class="col-xs-12">
			<div class="alert alert-danger" role="alert">Java dili seviye alanını boş bıraktınız.</div>
		</div>';
	} else {
		$sql = "INSERT INTO `basvuru` (`basvuru_id`, `basvuru_adi`, `basvuru_soyadi`, `basvuru_tc`, `basvuru_cinsiyet`, `basvuru_dtarih`, `basvuru_mhal`, `basvuru_askerlik`, `basvuru_il`, `basvuru_ilce`, `basvuru_adres`, `basvuru_evno`, `basvuru_cepno`, `basvuru_email`, `basvuru_ilk`, `basvuru_iomezuniyet`, `basvuru_ionot`, `basvuru_orta`, `basvuru_oomezuniyet`, `basvuru_oonot`, `basvuru_uni`, `basvuru_mezuniyet`, `basvuru_yonot`, `basvuru_ing`, `basvuru_fr`, `basvuru_al`, `basvuru_tecrube`, `basvuru_bilgi`, `basvuru_c`, `basvuru_cs`, `basvuru_java`, `pasvuru_php`, `basvuru_haric`) VALUES (NULL, '$adi', '$soyadi', '$tc','$cinsiyet','$dtarih','$mhal','$askerlik','$il', '$ilce', '$adres', '$evno', '$cepno','$email', '$ilkogretim', '$iomezuniyet', '$ionot','$ortaogretim','$oomezuniyet','$oonot','$yuksekogretim','$mezuniyet','$yonot', '$ingseviye','$frseviye', '$alseviye', '$tecrube', '$bilgi', '$cdiliseviye','$csdiliseviye','$javadiliseviye','$phpdiliseviye', '$haric')";
		mysql_query($sql);
		echo '<div class="col-md-12">
		<div class="alert alert-success" role="alert">Sayın '.$adi.' '.$soyadi.' başurunuz alındı. Değerlendirilip size dönüş yapılacaktır. </div>
		</div>';
	}
}
?>