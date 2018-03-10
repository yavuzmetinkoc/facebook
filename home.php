<?php session_start();
	if(!isset($_SESSION["FB_kullanici"],$_SESSION["FB_sifre"],$_SESSION['FB_adi'])){
		header("refresh:0.005;url=index.php");
	}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content Type" content="text/html;charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
		<link rel="stylesheet" href="css/home.css" />
		  <link rel="stylesheet" href="css/home-top.css" />
			<link rel="stylesheet" href="css/home-left.css" />
			<link rel="stylesheet" href="css/home-right.css" />
			<link rel="stylesheet" href="css/home-center.css" />
		<link rel="shortcut icon" href="img/sayfa.ico" />
		<title>Facebook</title>

	</head>
<body>
<script type="text/javascript" src="js/arama.js"></script>
<script type="text/javascript" src="js/paylasim.js"></script>


<?php
  include("ayar.php");
?>
	<header>
		<?php include("home-top.php"); ?>
	</header>
	<div id="container">
		<div id="left"><?php include("home-left.php"); ?></div>
		<div id="center"><?php include("home-center.php"); ?></div>
		<div id="right"><?php include("home-right.php"); ?></div>
	</div>
	<footer>

	</footer>
	<script>
    $("#search").on("focusout",function(){
        $("#aramabutonicerik").hide();
    });
    $("#search").on("focus",function(){
        $("#aramabutonicerik").show();
	});
	$("#paylasiminput").on("focus",function(){
        $(".paylasimgizli").show();
	});

    </script>
</body>
