<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>



	</head>
<body>
	<?php
		include("ayar.php");
		if($_POST){
			$kullanici_adi=trim($_POST["email"]);
			$adi=trim($_POST["adi"]);
			$soyad=trim($_POST["soyadi"]);
			$Email=trim($_POST["email"]);
			$sifre=md5(trim($_POST["sifre"]));
			$yil=trim($_POST["yil"]);
			$ay=trim($_POST["ay"]);
			$gun=trim($_POST["gun"]);

			$dogum_tarihi=$yil."-".$ay."-".$gun;
			$cinsiyet=$_POST["cinsiyet"];
			$profilyol="img/user1.png";
			$kapakyol="img/camera.png";
			$durum=1;


			$sql="SELECT * FROM db_uyeler Where Uye_Kullanici_Adi='$kullanici_adi'";
			$result=mysqli_query($baglan,$sql);
			$uyekayit=mysqli_num_rows($result);
				if($uyekayit!=0){
					$durum=0;
						echo "<div style='color:red';margin:0 auto;>BÖYLE BİR KULLANICI ADI VAR...</div>";
						header("refresh:2;url=index.php");
				}
			$sql="SELECT * FROM db_uyeler Where Uye_Email='$Email'";
			$result=mysqli_query($baglan,$sql);
			$uyekayit=mysqli_num_rows($result);
				if($uyekayit!=0){
					$durum=0;
					echo "<div style='color:red';margin:0 auto;>BÖYLE BİR E-MAİL KAYITLI...</div>";
					header("refresh:1;url=index.php");

				}
				if ( filter_var($Email, FILTER_VALIDATE_EMAIL) ){
					if($durum==1)
					{
						$_SESSION["kullanici"]=$kullanici_adi;
						$sql="INSERT INTO db_uyeler(Uye_Kullanici_Adi,Uye_Adi,Uye_Soyadi,Uye_Email,Uye_Sifre,Uye_Dogum_Tarihi,Uye_Cinsiyet,Uye_Profil_Foto,Uye_Kapak_Foto,Uye_Durum) VALUES('$kullanici_adi','$adi','$soyad','$Email','$sifre','$dogum_tarihi','$cinsiyet','$profilyol','$kapakyol','$durum')";
						$sorgula=mysqli_query($baglan,$sql);
						header("refresh:1;url=index.php");
					}

				}
				else{
					echo "Böyle bir e-mail olamaz";
					header("refresh:1;url=index.php");
				}
			}else{
				echo "İşlem Yapılmadı..";
			}


?>
</body>
