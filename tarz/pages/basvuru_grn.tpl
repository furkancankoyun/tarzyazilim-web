<?php
if(@mysql_num_rows(mysql_query('SELECT * FROM basvuru WHERE basvuru_id = \''.mysql_real_escape_string($_GET['id']).'\'')) == 0)
{
	exit('<script>location.href="main.php";</script>');
}

$basvuru_grn = mysql_fetch_array(mysql_query('SELECT * FROM basvuru WHERE basvuru_id = \''.mysql_real_escape_string($_GET['id']).'\''));

?>
<br><br>
<div class="panel panel-default">
    <div class="panel-body text-center">
    <input class="btn btn-default" onclick="window.print();" type="button" value="SAYFAYI YAZDIR" id="yazici" />
    </div>
    <div class="panel-footer col-md-6" id="kimlik">
        <table style="width:50%">
            <tr>
                <td colspan="2"><h3><b>KİMLİK BİLGİLERİ</b></h3></td>
            </tr>
            <tr>
                <td><h4 style="color:red">Adı:</h4></td><td><h4><?=$basvuru_grn['basvuru_adi'];?></h4></td>
            </tr>
            <tr>
                <td><h4 style="color:red">Soyadı:</h4></td><td><h4><?=$basvuru_grn['basvuru_soyadi'];?></h4></td>
            </tr>
            <tr>
                <td><h4 style="color:red">Tc:</h4></td><td><h4><?=$basvuru_grn['basvuru_tc'];?></h4></td>
            </tr>
            <tr>
                <td><h4 style="color:red">Cinsiyet:</h4></td><td><h4><?=$basvuru_grn['basvuru_cinsiyet'];?></h4></td>
            </tr>
            <tr>
                <td><h4 style="color:red">Doğum Tarihi:</h4></td><td><h4><?=$basvuru_grn['basvuru_dtarih'];?></h4></td>
            </tr>
            <tr>
                <td><h4 style="color:red">Medeni Hal:</h4></td><td><h4><?=$basvuru_grn['basvuru_mhal'];?></h4></td>
            </tr>
        </table>
    </div>
    <div class="panel-footer col-md-6" id="iletisim">
        <table style="width:100%">
            <tr>
                <td colspan="2"><h3><b>İLETİŞİM BİLGİLERİ</b></h3></td>
            </tr>
            <tr>
                <td><h4 style="color:red">EvTel:</h4></td><td><h4><?=$basvuru_grn['basvuru_evno'];?></h4></td>
            </tr>
            <tr>
                <td><h4 style="color:red">CepTel:</h4></td><td><h4><?=$basvuru_grn['basvuru_cepno'];?></h4></td>
            </tr>
            <tr>
                <td><h4 style="color:red">EPosta:</h4></td><td><h4><?=$basvuru_grn['basvuru_email'];?></h4></td>
            </tr>
            <tr>
                <td><h4 style="color:red">Adres:</h4></td><td><h4><?=$basvuru_grn['basvuru_adres'];?></h4></td>
            </tr>
            <tr>
                <td><h4 style="color:red">İl:</h4></td><td><h4><?=$basvuru_grn['basvuru_il'];?></h4></td>
            </tr>
            <tr>
                <td><h4 style="color:red">ilçe:</h4></td><td><h4><?=$basvuru_grn['basvuru_ilce'];?></h4></td>
            </tr>
        </table>
    </div>
    <div class="panel-footer col-md-6" id="egitim">
        <table style="width:100%">
            <tr style="text-align:left">
                <td colspan="2"><h3 style="align:left"><b>EĞİTİM BİLGİLERİ</b></h3></td>
            </tr>
            <tr>
                <td><h4 style="color:red">İlk Okul:</h4></td><td><h4 style="text-align:left"><?=$basvuru_grn['basvuru_iomezuniyet'];?> - <?=$basvuru_grn['basvuru_ilk'];?></h4></td>
                <td><h4 style="color:red">Diploma Notu:</h4></td><td><h4><?=$basvuru_grn['basvuru_ionot'];?></h4></td>
            </tr>
            <tr>
                <td><h4 style="color:red">Orta Okul:</h4></td><td><h4><?=$basvuru_grn['basvuru_oomezuniyet'];?> - <?=$basvuru_grn['basvuru_orta'];?></h4></td>
                <td><h4 style="color:red">Diploma Notu:</h4></td><td><h4><?=$basvuru_grn['basvuru_oonot'];?></h4></td>
            </tr>
            <tr>
                <td><h4 style="color:red">Üniversite:</h4></td><td><h4><?=$basvuru_grn['basvuru_mezuniyet'];?> - <?=$basvuru_grn['basvuru_uni'];?></h4></td>
                <td><h4 style="color:red">Diploma Notu:</h4></td><td><h4><?=$basvuru_grn['basvuru_yonot'];?></h4></td>
            </tr>
        </table>
    </div>
    <div class="panel-footer col-md-6" id="dil">
        <table style="width:40%">
            <tr style="text-align:center">
                <td><h3 style="align:center"><b>&nbsp;</b></h3></td>
            </tr>
            <tr>
                <td><h4 style="color:red;">İlgilizce seviyesi: </h4></td><td><h4><?=$basvuru_grn['basvuru_ing'];?></h4></td>
            </tr>
            <tr>
                <td><h4 style="color:red;">Fransızca seviyesi: </h4></td><td><h4><?=$basvuru_grn['basvuru_fr'];?></h4></td>
            </tr>
            <tr>
                <td><h4 style="color:red;">Almanca seviyesi: </h4></td><td><h4><?=$basvuru_grn['basvuru_al'];?></h4></td>
            </tr>
        </table>
    </div>
    <div class="panel-footer col-md-12" id="prog">
        <table style="width:100%">
            <tr style="text-align:center">
                <td colspan="9"><h3 style="align:center"><b>PROGRAMLAMA DİLLERİ</b></h3></td>
            </tr>
            <tr style="text-align:center;color:red;">
                <td><h4>C Dili seviye</h4></td><td><h4>C# Dili seviye</h4></td><td><h4>Java Dili seviye</h4></td><td><h4>PHP Dili seviye</h4></td><td><h4>Diğer eklemek istedikleri</h4></td>
            </tr>
            <tr style="text-align:center">
                <td><h4><?=$basvuru_grn['basvuru_c'];?></h4></td><td><h4><?=$basvuru_grn['basvuru_cs'];?></h4></td><td><h4><?=$basvuru_grn['basvuru_java'];?></h4></td><td><h4><?=$basvuru_grn['pasvuru_php'];?></h4></td><td><h4><?=$basvuru_grn['basvuru_haric'];?></h4></td>
            </tr>
        </table>
    </div>
</div>
