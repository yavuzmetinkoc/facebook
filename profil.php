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
		<link rel="stylesheet" href="css/profil.css" />
		<link rel="stylesheet" href="css/home-top.css" />
		<link rel="stylesheet" href="css/home-right.css" />
		<link rel="stylesheet" href="css/home-center.css" />
		<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
		
		<link rel="shortcut icon" href="img/sayfa.ico" />
		<title><?php echo $_SESSION['FB_adi']; ?></title>

	</head>
<body>
	<script type="text/javascript" src="js/arama.js"></script>
	<script type="text/javascript" src="js/paylasimprofil.js"></script>
<?php
  include("ayar.php");
?>
	<header>
		<?php include("home-top.php"); ?>
	</header>
	<div id="container">
		<div id="left">
			<div id="profilresimler">
				<a href="">
					<div id="kapakfoto">
						<img src="<?php echo $_SESSION['FB_kapak']; ?>" title="Kapak Fotoğrafı" />
						<div id="bilgiguncelle"><p>Bilgilerini Güncelle</p></div>
						<div id="hareketlerdokumu">
							<p style="padding-right:5px;border-right:1px solid gray;">Hareketler Dökümünü Gör</p>
							<p style="padding:0px 10px;"><center>...</center></p>
						</div>
						<div id="profilkadi"><p>Kullanıcı Adı</p></div>
					</div>
				</a>
				<div id="resimlerbuton">
					<div id="profilbuton" style="width:200px;height:40px;">
						<div id="profilresmi">
							<img src="<?php echo $_SESSION['FB_profil']; ?>" width="158px" height="158px" />
							<div><img src="img/camera.png" width="20px" height="20px" /><p>Profil Resmini Güncelle</p></div>
						</div>
						<div id="profilresmi" style="overflow:hidden;visibilty:hidden;"></div>
					</div>
					<div id="profilbuton"><p style="color: #4b4f56;">Zaman Tüneli</p></div>
					<div id="profilbuton"><p>Hakkında</p></div>
					<div id="profilbuton"><p>Arkadaşlar</p></div>
					<div id="profilbuton"><p>Fotoğraflar</p></div>
					<div id="profilbuton"><p>Diğer</p></div>
				</div>
			</div>
			<div id="profilcenter">
				<div id="profilbilgi">
					<div>
						<img src="img/earthblue.png" width="18px" height="18px" /><h4>Künye</h4>
						<div>
							<div><img src="img/location.png" width="15px" height="15px" /><p>Memleketi</p><p id="memleket">Adana</p></div>
							<div><img src="img/galeri.png" width="15px" height="15px" /><p id="onecikanfoto">Öne Çıkan Fotoğrafları Ekle</p></div>
						</div>

					</div>
					<div>
						<img src="img/galeri.png" width="18px" height="18px" /><h4>Fotoğraflar</h4>
						<div>
							<?php
								for($i=0;$i<=3;$i++){
									echo '<a href=""><div><img src="img/resim1.jpg" width="80px" height="80px" /></div></a>';
								}
							?>
						</div>
					</div>
					<div>
						<img src="img/arkadaslar.png" width="18px" height="18px" /><h4>Arkadaşlar</h4><h4 id="arkadassayi">100</h4>
						<div>
							<?php
								for($i=0;$i<=8;$i++){
									echo '<a href=""><div><img src="img/resim1.jpg" width="80px" height="80px" /><div>Yavuz</div></div></a>';
								}
							?>
						</div>
					</div>
					<div>
						<img src="img/line.png" width="18px" height="18px" /><h4>Öne Çıkan Albümler</h4>
					</div>
					<div>
						<img src="img/biliyormuydunuz.png" width="18px" height="18px" /><h4>Biliyor Muydun</h4>
					</div>
					<div id="reklamalanilink">
			      <a href="">Gizlilik</a>
			      <a href="">Koşullar</a>
			      <a href="">Reklamlar</a>
			      <a href="">Ad Choices</a>
			      <a href="">Çerezler</a>
			      <a href="">Diğer</a>
			      <p>Facebook © 2018</p>
			    </div>
				</div>

				<?php //Profilde Paylaşımlar ?>
				<div id="profilpaylasim">
					<?php //Profilde Paylaşım Yapma ?>
					<div id="paylasimalani">
			      <div id="paylasimsecenek">
			        <a><div class="gonderiolustur" style="border-right:1px solid gray;color:gray"><img src="img/pencil.png" widtt="15px" height="15px" />Gönderi Oluştur</div></a>
			        <a><div class="paylasimresim" style="border-right:1px solid gray;"><img src="img/photo.png" widtt="15px" height="15px" />Fotograf/Video Albümü</div></a>
			        <a href=""><div><img src="img/video.png" widtt="15px" height="15px" />Canlı Yayın</div></a>
			      </div>
			      <div id="paylasimicerik">
			        <img src="<?php echo $_SESSION['FB_profil']; ?>" width="50px" height="50px" />
			        <form action="" name="">
			          <input type="text" id="paylasiminput" placeholder="Ne düşünüyorsun , <?php echo $_SESSION['FB_adi2']; ?>" width="80%" height="50px" />
			          <hr/>
			          <div class="paylasimresim" style="margin-left:-50px;"><img src="img/galeri.png" width="20px" height="20px" /><p>Fotoğraf/Video</p></div>
			          <div><img src="img/emoji.jpg" width="20px" height="20px" /><p>His/Eylem</p></div>
								<div>...</div>
								<span id="exit" class="close1" style="" title="Close Modal"><p>&times;</p></span>
							<div class="paylasimgizli">
								<select>
									<option value="herkeseacik">Herkese Açık</option>
									<option value="arkadaslar">Arkadaşlar</option>
									<option value="sadeceben">Sadece Ben</option>
								</select>
								<input type="submit" id="paylasbuton" value="Paylaş" width="100px" height="30px" />
								<input type="file" id="paylasimresimdosya" style="visibility: hidden;width:5px;height:5px;" />
							</div>
			        </form>
			      </div>
			    </div>
					<?php //Profilde Yapılan Paylaşımları Görüntüleme ?>
					<div id="paylasimlar">
			      <div id="paylasimbilgi">
			        <img src="<?php echo $_SESSION['FB_profil']; ?>" width="40px" height="40px" /><div><p id="paylasimkadi">Kullanıcı Adı</p><p id="paylasimsekli">Webtekno'nun</p><p id="paylasimyazi"> gönderisini paylaştı.</p></div><br/>
			        <div><p id="paylasimdk">20 dk</p><img src="img/earth.png" id="paylasimturu" width="10px" height="10px" /></div><br/>
			      </div>
			      <div id="paylasimicerigi">
			        <p>Paylaşım Yazı İçeriği</p>
			        <img src="img/reklam1.jpg" width="95%" height="275x" />

			      </div>
			      <hr style="width:95%;"/>
			      <div id="paylasimbutonlar">
			          <div><img src="img/likeicon.png" width="30px" height="30px" /><p>Beğen</p></div>
			          <div><img src="img/yorumyapicon.png" width="30px" height="30px" /><p>Yorum Yap</p></div>
			          <div><img src="img/paylasicon.png" width="30px" height="30px" /><p>Paylaş</p></div>
			      </div>
			    </div>
				</div>
			</div>
		</div>
		<div id="right" style="overflow:hidden;">
			<?php include("home-right.php"); ?>
		</div>
	</div>
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
</html>
