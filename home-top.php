<?php
if(!isset($_SESSION))session_start();
if(!isset($_SESSION["FB_kullanici"],$_SESSION["FB_sifre"],$_SESSION['FB_adi'])){
  header("refresh:0.005;url=index.php");
}
?>
<div id="anaheader">
  <div id="logo">
    <a href="home.php"><img src="img/home-icon.png" width="25px" height="25px" title="Facebook" /></a>
  </div>
  <div id="arama">
    <form id="formarama" action="" method="" name="">
    <input id="search" type="text" size="30" placeholder="Ara" />
    <input id="aramabuton" type="image" src="img/search.png" />
    <div id="aramabutonicerik">
      <a href=""><div id="aranacakicerik">Yavuz</div></a>
      <a href=""><div id="aranacakicerik">Ahmet</div></a>
      <a href=""><div id="aranacakicerik">Engin</div></a>
      <a href=""><div id="aranacakicerik">Enes</div></a>
      <a href=""><div id="aranacakicerik">Fatih</div></a>
    </div>
    </form>
  </div>
  <div id="ana_butonlar">
    <a href="profil.php" title="<?php echo $_SESSION['FB_adi']; ?>"><div id="profil_buton" style="width:120px;height:20px;">
      <img src="<?php echo $_SESSION['FB_profil']; ?>" width="30px" height="30px" />
      <p><?php echo $_SESSION['FB_adi']; ?></p></div></a>

      <a href="home.php"><div id="anasayfa">Anasayfa</div></a>
      <a href=""><div id="ark_bul">Arkadaşlarını Bul</div></a>
  </div>
  <div id="icon_butonlar">
    <div><img src="img/ark_bul.png" width="20px" height="20px" /></div>
    <div><img src="img/messenger.png" width="20px" height="20px" /></div>
    <div><img src="img/earth.png" width="20px" height="20px" /></div>
  </div>
  <div id="other_butonlar">
      <div><img src="img/help.png" width="20px" height="20px" /></div>
      <div id="digerbtn">
        <img src="img/diger.png" width="12px" height="12px" />
        <div id="acilirpencere">
          <a href=""><div>Sayfa Oluştur</div></a>
          <hr>
          <a href=""><div id="hrsonrasi">Grup Kur</div></a>
          <a href=""><div>Grupları Yönet</div></a>
          <hr>
          <a href=""><div id="hrsonrasi">Reklam Oluştur</div></a>
          <a href=""><div>Facebook'ta Reklam Verme</div></a>
          <hr>
          <a href="" id="hrsonrasi"><div>Hareketler Dökümü</div></a>
          <a href=""><div>Haber Kaynağı Tercihleri</div></a>
          <a href=""><div>Ayarlar</div></a>
          <a href="cikis.php"><div>Çıkış Yap</div></a>

        </div>
      </div>
  </div>
</div>
