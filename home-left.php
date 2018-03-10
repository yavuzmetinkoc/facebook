<?php if(!isset($_SESSION))session_start();
	if(!isset($_SESSION["FB_kullanici"],$_SESSION["FB_sifre"],$_SESSION['FB_adi'])){
		header("refresh:0.005;url=index.php");
	}
 ?>
<div id="ana">
  <a href="profil.php"><div id="profil">
 <img src="<?php echo $_SESSION['FB_profil']; ?>" width="25px" height="25px" />
  <p style="font-weight:bold;"><?php echo $_SESSION['FB_adi']; ?></p></div></a>
  
  <a href=""><div id="haberkaynagi"><img src="img/news.png" width="25px" height="25px" /> <p>Haber Kaynağı</p></div></a>
  <a href=""><div id="messenger"><img src="img/messenger_blue.svg" width="25px" height="25px" /> <p>Messenger</p></div></a>
  <div id="kesfet">
    <h4>Keşfet</h4>
    <a href=""><div id="messenger"><img src="img/calendar.png" width="25px" height="25px" /> <p>Etkinlikler</p></div></a>
    <a href=""><div id="messenger"><img src="img/market.png" width="25px" height="25px" /> <p>MarketPlace</p></div></a>
    <a href=""><div id="messenger"><img src="img/group.png" width="25px" height="25px" /> <p>Gruplar</p></div></a>
    <a href=""><div id="messenger"><img src="img/flag.png" width="25px" height="25px" /> <p>Sayfalar</p></div></a>
    <a href=""><div id="messenger"><img src="img/history.png" width="25px" height="25px" /> <p>Tarihte Bugün</p></div></a>
    <a href=""><div id="messenger"><img src="img/contacts.png" width="25px" height="25px" /> <p>Arkadaş Listesi</p></div></a>
    <a href=""><div id="messenger"><img src="img/location.png" width="25px" height="25px" /> <p>Düzenlemeler Öner</p></div></a>
    <a href=""><div id="messenger"><img src="img/kriz.png" width="25px" height="25px" /> <p>Kriz Yardım Merkezi</p></div></a>
    <a href=""><div id="messenger"><img src="img/galeri2.png" width="25px" height="25px" /> <p>Sayfalar Akışı</p></div></a>
    <a href=""><div id="messenger"><img src="img/kesfet.png" width="25px" height="25px" /> <p>Keşfet Akışı</p></div></a>
    <a href=""><div id="messenger"><img src="img/galeri.png" width="25px" height="25px" /> <p>Fotoğraflar</p></div></a>
    <a href=""><div id="messenger"><img src="img/games.png" width="25px" height="25px" /> <p>Oyunlar</p></div></a>
    <a href=""><div id="messenger"><img src="img/contacts.png" width="25px" height="25px" /> <p>Arkadaşlarını Bul</p></div></a>
    <a href=""><div id="messenger"><img src="img/video.png" width="25px" height="25px" /> <p>Canlı Video</p></div></a>
    <a href=""><div id="messenger"><img src="img/games2.png" width="25px" height="25px" /> <p>Oyun Haberleri</p></div></a>
    <a href=""><div id="messenger"><img src="img/ark_bul.png" width="25px" height="25px" /> <p>Kişileri Keşfet</p></div></a>
    <a href=""><div id="messenger"><img src="img/saved.png" width="25px" height="25px" /> <p>Kaydedilenler</p></div></a>
  </div>
  <div id="olustur">
    <h4>Olustur</h4>
    <a href=""><div style="margin-left:20px;">Reklam</div></a><a href=""><div>Sayfa</div></a><a href=""><div>Grup</div></a><a href=""><div style="margin-left:20px;">Etkinlik</div></a>
  </div>
</div>
