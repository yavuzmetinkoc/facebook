<?php if(!isset($_SESSION))session_start();
	if(!isset($_SESSION["FB_kullanici"],$_SESSION["FB_sifre"],$_SESSION['FB_adi'])){
		header("refresh:0.005;url=index.php");
	}
 ?>
<div id="anacenter">
  <div id="anapaylasim">
    <div id="paylasimalani">
      <div id="paylasimsecenek">
        <a><div class="gonderiolustur" style="border-right:1px solid gray;color:gray"><img src="img/pencil.png" widtt="15px" height="15px" />Gönderi Oluştur</div></a>
        <a><div class="paylasimresim" style="border-right:1px solid gray;"><img src="img/photo.png"  widtt="15px" height="15px" />Fotograf/Video Albümü</div></a>
        <a><div><img src="img/video.png" widtt="15px" height="15px" />Canlı Yayın</div></a>
      </div>
      <div id="paylasimicerik">
        <img src="<?php echo $_SESSION['FB_profil']; ?>" width="50px" height="50px" />
        <form action="" name="">
          <input type="text" id="paylasiminput" placeholder="Ne düşünüyorsun , <?php echo $_SESSION['FB_adi2']; ?>" width="80%" height="50px" />
          <hr/>
          <div class="paylasimresim" style="margin-left:-50px;"><img src="img/galeri.png" width="20px" height="20px" /><p>Fotoğraf/Video</p></div>
          <div><img src="img/emoji.jpg" width="20px" height="20px" /><p>His/Eylem</p></div>
          <div>...</div>
          <span id="exit" class="close" title="Close Modal"><p>&times;</p></span>
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
  <div id="reklam">
    <div>
      <div id="arkoneri">
        <div id="oneribaslik">
          <h4>Tanıyor Olabileceğin Kişiler</h4>
          <a href="">Tümünü Gör</a>
        </div>
        <div id="onerikisiler">
          <?php
            for($i=0;$i<=3;$i++){
                echo '
                <div>
                <img src="img/user.png" width="50px" height="50px" />
                <p id="arkadaseklekadi">Kullanıcı Adı</p>
                <div><p id="arkadaseklebuton"><img src="img/addfriend.png" width="12px" height="12px" id="addfriend" />Arkadaşı Ekle</p></div>
                </div>
                ';
            }
           ?>
        </div>
      </div>
      <div id="dil">

      </div>
      <img src="img/reklam1.jpg" width="100%" height="50%" />
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
  </div>



</div>
