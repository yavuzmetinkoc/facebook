<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>



	</head>
<body>
<?php
  include("ayar.php");
  if($_POST){
		$kullanici_adi=trim($_POST["kadi"]);
		$sifre=md5(trim($_POST["sifre"]));
		$sql="SELECT * FROM db_uyeler Where Uye_Kullanici_Adi='$kullanici_adi' and Uye_Sifre='$sifre'";
		$result=mysqli_query($baglan,$sql);
		$uyekayit=mysqli_num_rows($result);
		$profilfoto;$kapakfoto;
		$durum=0;
		while($uyekayit2=mysqli_fetch_array($result)){
			extract($uyekayit2);
			if($kullanici_adi==$Uye_Kullanici_Adi && $sifre==$Uye_Sifre){
				$durum=1;
				$profilfoto=$Uye_Profil_Foto;
				$kapakfoto=$Uye_Kapak_Foto;
			}
			else{

			}
		}
		if($durum==0){
			header("refresh:0.3;url=index.php");
		}else{
			$_SESSION["FB_kullanici"]=$kullanici_adi;
			$_SESSION["FB_sifre"]=$sifre;
			$_SESSION["FB_profil"]=$profilfoto;
			$_SESSION["FB_kapak"]=$kapakfoto;
			$_SESSION['FB_adi']=$Uye_Adi." ".$Uye_Soyadi;
			$_SESSION['FB_adi2']=$Uye_Adi;
			echo "<div style='color:red';margin:0 auto;>Giriş Yapıldı...</div>";
			header("refresh:0.3;url=home.php");
		}

  }

?>
</body>
