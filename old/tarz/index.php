<?php
if(!session_start()){
	exit('session_crashed');
}

include '../config.php';
include '../system.php';

$sql_account = mysql_query('SELECT * FROM admin_users WHERE session_id = \''.session_id().'\'');
if(mysql_num_rows($sql_account) == 1){
	exit(header('Location: main.php'));
}

if (!empty($_POST['username']) and !empty($_POST['password'])) {
    $sql = mysql_query('SELECT * FROM admin_users WHERE username = \'' . mysql_real_escape_string($_POST['username']) . '\' AND password = \'' . mysql_real_escape_string(sha1(md5(md5(sha1($_POST['password']))))) . '\'');
	if (mysql_num_rows($sql) == 1) {
        mysql_query('UPDATE admin_users SET session_id = \'' . session_id() . '\' WHERE ID = \'' . mysql_fetch_array($sql)['ID'] . '\'');
        exit(header('Location: main.php'));
    } else {
        $login_error = 'username';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>ACP - Giriş Yap</title>
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
		body, html{
			height: 100%;
			background: #656464 url("https://upload.wikimedia.org/wikipedia/commons/8/89/Cappadocia_Balloon_Inflating_Wikimedia_Commons.JPG") no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			font-family: "Roboto", sans-serif;
		}

		.main{
			margin-top: 70px;
		}

		h1.title { 
			font-size: 50px;
			font-family: 'Passion One', cursive; 
			font-weight: 400; 
		}

		hr{
			width: 10%;
			color: #fff;
		}

		.form-group{
			margin-bottom: 15px;
		}

		label{
			margin-bottom: 15px;
		}

		input,
		input::-webkit-input-placeholder {
			font-size: 11px;
			padding-top: 3px;
		}

		.main-login{
			background-color: #fff;
			/* shadows and rounded borders */
			-moz-border-radius: 2px;
			-webkit-border-radius: 2px;
			border-radius: 2px;
			-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

		}

		.main-center{
			margin-top: 30px;
			margin: 0 auto;
			max-width: 330px;
			padding: 40px 40px;

		}

		.login-button{
			margin-top: 5px;
		}

		.login-register{
			font-size: 11px;
			text-align: center;
		}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="index.php">
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label" style="color:white">Kullanıcı Adı</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"><span class="glyphicon glyphicon-certificate"></span></i></span>
									<input type="text" class="form-control" name="username" id="username" placeholder="Kullanıcı adınız" value="<?php if(!empty($_POST['username'])){ echo htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8'); } ?>" required/>
									<?php if(!empty($login_error)){ echo'<span class="glyphicon glyphicon-remove form-control-feedback"></span>'; } ?>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Şifre</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"><span class="glyphicon glyphicon-lock"></span></i></span>
									<input type="password" class="form-control" name="password" id="password" placeholder="Şifreni yaz" required/>
									<?php if(!empty($login_error)){ echo'<span class="glyphicon glyphicon-remove form-control-feedback"></span>'; } ?>
								</div>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success btn-lg btn-block login-button">Giriş Yap</button>
						</div><br>
						<div class="text-center"><a href="http://www.tarzyazilim.com.tr"><img src="../img/tarz-logo.png" height="35"/></a></div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>