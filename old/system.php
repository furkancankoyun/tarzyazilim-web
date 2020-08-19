<?php
@mysql_connect( $db_config[ 'host' ], $db_config[ 'username' ], $db_config[ 'password' ] )or exit( 'Error connect to database' );
@mysql_select_db( $db_config[ 'database' ] )or exit( 'Error select database' );
mysql_set_charset( 'utf8' );
date_default_timezone_set( 'Europe/Istanbul' );

$system_settings = mysql_fetch_array( mysql_query( 'SELECT* FROM system_settings' ) );

function contenturl( $t ) {
	return strtolower( str_replace( '--', '-', str_replace( ' ', '-', str_replace( '  ', '-', preg_replace( "/[^a-zA-Z0-9 ]+/", "", lang_convert( trim( $t ) ) ) ) ) ) );
}

function lang_convert( $t ) {
	$tr = array(
		'ş',
		'Ş',
		'ı',
		'İ',
		'ğ',
		'Ğ',
		'ü',
		'Ü',
		'ö',
		'Ö',
		'ç',
		'Ç'
	);
	$en = array(
		's',
		'S',
		'i',
		'I',
		'g',
		'G',
		'u',
		'U',
		'o',
		'O',
		'c',
		'C'
	);
	return str_replace( $tr, $en, $t );
}

function yas_hesapla( $yil ) {
	$suanki_yil = date( "Y" );
	$uye_yil = $yil;
	$yas = $suanki_yil - $uye_yil;
	return $yas;
}

function getRealIpAddr() {
	if ( !empty( $_SERVER[ 'HTTP_CLIENT_IP' ] ) ) {
		$ip = $_SERVER[ 'HTTP_CLIENT_IP' ];
	} elseif ( !empty( $_SERVER[ 'HTTP_X_FORWARDED_FOR' ] ) )

	{
		$ip = $_SERVER[ 'HTTP_X_FORWARDED_FOR' ];
	} else {
		$ip = $_SERVER[ 'REMOTE_ADDR' ];
	}
	return $ip;
}

?>