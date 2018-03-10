<?php
if(!isset($_SESSION))session_start();
	if(!isset($_SESSION["FB_kullanici"],$_SESSION["FB_sifre"],$_SESSION['FB_adi'])){
		header("refresh:0.005;url=index.php");
	}
 ?>
<div id="anaright">
  <div id="sohbet">
    <div id="kisiliste">
    <?php
      for($i=0;$i<=10;$i++){
        echo '<a href=""><div id="kisiler"><img src="img/user.png" width="25px" height="25px" /> <p>Kullanıcı Adı</p></div></a>';
      }
     ?>
   </div>
   <div id="sohbetara">
     <form id="" action="" name="">
       <input type="text" placeholder="Ara" width="100%" height="10px" />
       <img src="img/search.png" width="12px" height="12px" />
     </form>
   </div>
  </div>
</div>
