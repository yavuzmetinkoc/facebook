<?php

	## Hataları Gizleme
	##error_reporting(0);


	$host="localhost";
	$user="root";
	$pass="";
	$db="facebook";

	## Mysql Bağlantısı ##

	$baglan=mysqli_connect($host,$user,$pass) or die (mysql_error());

	##veritabanı seçimi

	mysqli_select_db($baglan,$db) or die ("veritabanı yok");
	mysqli_set_charset($baglan,"utf8");



?>
