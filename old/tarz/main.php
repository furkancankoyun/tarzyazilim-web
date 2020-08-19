<?php
if (!session_start())
{
	exit('session_crashed');
}

include '../config.php';
include '../system.php';

$account_data = mysql_query('SELECT * FROM admin_users WHERE session_id = \''.session_id().'\'');
if (mysql_num_rows($account_data) == 0)
{
	exit(header('Location: logout.php'));
}

$account = mysql_fetch_array($account_data);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="../css/yazdir.css" rel="stylesheet" type="text/css" media="print">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ACP - Yönetim Merkezi</title>
	<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
	<link rel="shortcut icon" href="../favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<!-- Bootstrap -->
	<link href="graphic/ext/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<style>
		.navbar {
			margin-bottom: 0;
			background-color: #b92152;
			z-index: 9999;
			border: 0;
			font-size: 12px !important;
			line-height: 1.42857143 !important;
			letter-spacing: 4px;
			border-radius: 0;
			font-family: Montserrat, sans-serif;
		}
		.navbar li a, .navbar .navbar-brand {
			color: #fff !important;
		}
		.navbar-nav li a:hover, .navbar-nav li.active a {
			color: #b92152 !important;
			background-color: #fff !important;
		}
		.navbar-default .navbar-toggle {
			border-color: transparent;
			color: #fff !important;
		}
	</style>
	
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="main.php"><img src="../img/tarz_logo.png" height="35"/></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li <?php if(empty($_GET['page'])){ echo 'class="active"'; } ?>><a href="main.php">Genel Bakış</a></li>
					<li <?php if(@$_GET['page'] == 'add_project'){ echo 'class="active"'; } ?>><a href="main.php?page=add_project">Haber Ekle</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li <?php if(@$_GET['page'] == 'system_settings'){ echo 'class="active"'; } ?>><a href="main.php?page=system_settings"><span class="glyphicon glyphicon-cog"></span> Sistem Ayarları</a></li>
					<li <?php if(@$_GET['page'] == 'authorized_users'){ echo 'class="active"'; } ?>><a href="main.php?page=authorized_users"><span class="glyphicon glyphicon-cog"></span> Yetkili Kişiler</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Çıkış Yap</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<?php
		switch (@$_GET['page'])
		{
			case 'system_settings':
			include 'pages/system_settings.tpl';
			break;
			case 'account_settings':
			include 'pages/account_settings.tpl';
			break;
			case 'references':
			include 'pages/references.tpl';
			break;
			case 'authorized_users':
			include 'pages/authorized_users.tpl';
			break;
			case 'topics':
			include 'pages/topics.tpl';
			break;
			case 'edit_topics':
			include 'pages/edit_topics.tpl';
			break;
			case 'add_project':
			include 'pages/add_project.tpl';
			break;
			case 'edit_yorum':
			include 'pages/edit_yorum.tpl';
			break;
			case 'yorumlar':
			include 'pages/yorumlar.tpl';
			break;
			case 'basvuru':
			include 'pages/basvuru.tpl';
			break;
			case 'basvuru_grn':
			include 'pages/basvuru_grn.tpl';
			break;
			case 'isortaklari':
			include 'pages/isortaklari.tpl';
			break;
			default:
			include 'pages/main.tpl';
		}
		?>
<script type="text/javascript">
	CKEDITOR.replace( 'content' );
	CKEDITOR.replace( 'short_content' );
	CKEDITOR.replace( 'icerik' );
	CKEDITOR.replace( 'content' );
	CKEDITOR.replace( 'content' );
</script>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="graphic/ext/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	
</body>
</html>