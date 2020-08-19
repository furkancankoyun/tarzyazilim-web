<?php
if(@mysql_num_rows(mysql_query('SELECT * FROM yorumlar WHERE Yorum_ID = \''.mysql_real_escape_string($_GET['id']).'\'')) == 0)
{
    exit('<script>location.href="main.php";</script>');
}
$id =$_GET['id'];
$data_edit_topics = mysql_fetch_array(mysql_query('SELECT * FROM yorumlar WHERE Yorum_ID = \''.mysql_real_escape_string($_GET['id']).'\''));

if (!empty($_POST['name']) and !empty($_POST['email'])and !empty($_POST['icerik']))
{
    mysql_query('UPDATE yorumlar SET name = \'' . mysql_real_escape_string($_POST['name']) . '\', email = \'' . mysql_real_escape_string($_POST['email']) . '\',onay = \''. mysql_real_escape_string($_POST['onay']).'\', icerik = \'' . mysql_real_escape_string($_POST['icerik']) . '\' WHERE Yorum_ID = \''.$_GET['id'].'\'');
    exit('<script>location.href="main.php?page=edit_yorum&id='.$_GET['id'].'";</script>');
}
?>
<br><br>
<form class="form-horizontal" role="form" method="post" action="main.php?page=edit_yorum&id=<?=$_GET['id'];?>">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-4">
                                            <div class="form-group">
                                                <label class="sr-only" for="name">İsim<br></label>
                                                <div class="inner-addon left-addon">
                                                    <i class="fa fa-user"></i>
                                                    <input type="text" class="form-control required" placeholder="İsim" name="name" id="name" data-name="Name" value="<?=htmlspecialchars($data_edit_topics['name'], ENT_QUOTES, 'UTF-8');?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <div class="form-group">
                                                <label class="sr-only" for="email">E-Posta<br></label>
                                                <div class="inner-addon left-addon">
                                                    <i class="fa fa-envelope"></i>
                                                    <input type="email" class="form-control required required-email" placeholder="E-Posta" name="email" id="email" data-name="email" value="<?=htmlspecialchars($data_edit_topics['email'], ENT_QUOTES, 'UTF-8');?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <div class="form-group">
                                                <label class="sr-only" for="baslik">Başlık<br></label>
                                                <div class="inner-addon left-addon">
                                                    <i class="fa fa-link"></i>
                                                    <input type="text" class="form-control required" placeholder="Başlık" name="baslik" id="baslik" data-name="baslik" value="<?=htmlspecialchars($data_edit_topics['baslik'], ENT_QUOTES, 'UTF-8');?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="sr-only" for="icerik">Yorum<br></label>
                                                <div class="inner-addon left-addon">
                                                    <i class="fa fa-comment"></i>
                                                    <textarea rows="11" name="icerik" id="icerik" class="form-control required" placeholder="Mesaj" data-name="icerik"><?=htmlspecialchars($data_edit_topics['icerik'], ENT_QUOTES, 'UTF-8');?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <label><input type="checkbox" name="onay" value="1" <?php if (htmlspecialchars($data_edit_topics['onay'], ENT_QUOTES, 'UTF-8')==1){echo "checked";}else{echo "";};?>/> Yayınlansın</label>
                                    </div>
                                    <div class="row actions">
                                        <div class="col-sm-12 col-md-6">
                                            <input type="submit" value="&#xf1d9; &nbsp;Yorumu Gönder" name="submit" id="submitButton" class="btn btn-default btn-primary-corp-big" title="Click here to leave a reply!">
                                        </div>
                                    </div>
                                </fieldset>
                                </form>
                                <script type="text/javascript">
    CKEDITOR.replace( 'icerik' );
</script>