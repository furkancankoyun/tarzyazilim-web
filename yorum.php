<?php 
include 'config.php';
include 'system.php';
$adim = $_GET['adim'];

$id = $_GET['adim'];
$yorum_adi = mysql_real_escape_string($_POST['name']);
$yorum_email   = mysql_real_escape_string($_POST['email']);
$yorum_yorum   = mysql_real_escape_string($_POST['yorum']);
$tarih = date("d.m.Y");

if(($yorum_adi == "") or ($yorum_email == "") or ($yorum_yorum == "")){ // Eğer ad-soyad, email ve yorum alanı gibi zorunlu dolrudurlması gereken metin alanları boş ise hata mesajı verdiriyoruz.

echo '<script type="text/javascript">alert("Boş bıraktığınız alanlar var!");</script>';
echo '<meta http-equiv="refresh" content="0;URL=blogpost.php?id='.$id.'">';
if ($id == "0"){
echo '<script type="text/javascript">alert("ID değeri 0 geliyor!");</script>';
}
}
else{
$yorum_kaydet = mysql_query("INSERT INTO yorumlar (konu_id,name,email,yorum_tarih,icerik) VALUES ('$id','$yorum_adi','$yorum_email','$tarih','$yorum_yorum')");
if($yorum_kaydet){ //Eğer başarıyla eklenirse onay mesajı verdiriyoruz
$q = mysql_query('SELECT * FROM topics WHERE id = \'' . mysql_real_escape_string($_GET['adim']) . '\'');
if (mysql_num_rows($q) == 1)
{
  $data = mysql_fetch_array($q);
  exit(header('Location: '.$data['ID'].'-'.$data['url'].'.html'));
}
echo '<script type="text/javascript">alert("Yorum başarıyla eklendi!");</script>';
echo '<meta http-equiv="refresh" content="0;URL=javascript:history.back(-1)">';

}else{ //Eğer bir hata oluşursa hata mesajı verdiriyoruz

echo '<script type="text/javascript">alert("Yorum eklenemedi, bir hata oluştu!");</script>';
echo '<meta http-equiv="refresh" content="0;URL=javascript:history.back(-1)">';
}
}
?>