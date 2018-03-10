<!DOCTYPE html>
<html lang="tr">
	<head>
		<meta http-equiv="Content Type" content="text/html;charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/giris.css" />
		<link rel="shortcut icon" href="img/sayfa.ico" />
		<title>Facebook - Giriş Yap veya Kaydol</title>
	</head>
	<body>
		<!-- Header Başlangıcı -->
		<header>
			<div id="header">
				<div id="logo"><a href=""><img src="img/logo1.png" width="170px" height="100%" /></a></div>
				<div id="girispanel">
					<div id="girisyazi">
						<div id="yazikadi">E-posta veya Telefon</div>
						<div id="yazisifre">Şifre</div>
					</div>
					<br/>
					<div id="girisinput">
						<form class="" action="giris_islemi.php" method="post">
							<input type="text" autofocus size="18" name="kadi" id="kadi" required>
							<input type="password" size="18" name="sifre" id="sifre" required>
							<input type="submit" name="giris" id="girisbuton" value="Giriş Yap">
						</form>
					</div>
					<div id="hesapunuttun">
						<a href="">Hesabını mı unuttun?</a>
					</div>
				</div>
			</div>
		</header>
		<!-- Header Bitişi -->

		<!-- Content Başlangıcı -->
		<content>
			<div id="ortakisim">
				<div id="resim">
					<p>Facebook tanıdıklarınla iletişim kurmanı ve<br/> hayatında olup bitenleri paylaşmanı sağlar.</p>
					<img src="img/anasayfa/resim1.png" />
				</div>
				<div id="kayitol">
					<h2>Hesap Aç</h2>
					<h3>Ücretsizdir ve her zaman ücretsiz kalacaktır.</h3>
					<form class="" action="uye_kayit_islemleri.php" method="post">
						<input type="text" id="uye_adi" name="adi" placeholder=" Adın" required />
						<input type="text" id="uye_soyad" name="soyadi" placeholder=" Soyadın" required /><br/>
						<input type="text" id="uye_kadi" name="email" placeholder=" Cep telefonu numarası veya e-posta" required /><br/>
						<input type="password" id="uye_sifre" name="sifre" placeholder=" Yeni Şifre" required />
						<h4>Doğum Tarihi</h4>
						<div id="tarih">
							<div id="selectbuton">
								<select name="gun" style="width:65px;height:30px;">
									<?php for ($sayac = 1; $sayac <= 31 ; $sayac++ ) {echo "<option value='".$sayac."'>".$sayac."</option>";}?>
								</select>
								<select name="ay" style="width:65px;height:30px;">
									<option value="Oca">Oca</option><option value="Şub">Şub</option><option value="Mar">Mar</option>
									<option value="Nis">Nis</option><option value="May">May</option><option value="Haz">Haz</option>
									<option value="Tem">Tem</option><option value="Ağu">Ağu</option><option value="Eyl">Eyl</option>
									<option value="Eki">Eki</option><option value="Kas">Kas</option><option value="Ara">Ara</option>
								</select>
								<select name="yil" style="width:65px;height:30px;">
									<?php for ($sayac = 2018; $sayac >= 1905 ; $sayac-- ) {echo "<option value='".$sayac."'>".$sayac."</option>";}?>
								</select>
							</div>
							<div style="line-height:12px;">
								<a href="" style="color:#365899;cursor:pointer;text-decoration:none;margin-left:10px;font-size:11px;">Doğum tarihimi vermem<br/>&nbsp;&nbsp;&nbsp;&nbsp;neden gerekiyor?</a>
							</div>
							</div>
							<div id="cinsiyet">
								<input type="radio" name="cinsiyet" value="Kadın" checked="true" />Kadın
								<input type="radio" name="cinsiyet" value="Erkek" />Erkek
							</div>
							<div>
								<h5>Hesap Aç düğmesine tıklayarak, <a style="color:#365899;">Çerez Kullanımı</a> dahil <a style="color:#365899;">Veri<br/> İlkemizi</a> okuduğunu ve <a style="color:#365899;">Koşullarımızı</a> kabul etmiş olursun.<br/> Facebook'tan SMS Bildirimleri alabilir ve bu bildirimleri istediğin<br/> zaman durdurabilirsin.</h5>
							</div>

							<div style="margin-bottom:35px;">
								<input type="submit" name="" value="Hesap Aç" id="kayitbuton" />
							</div>

							<div style="border-top: 1px solid #dddfe2;color: #666;font-size: 13px;margin-bottom:20px;">
								Ünlü biri, müzik grubu veya şirket için <a style="color:#365899;font-weight:bold;font-size:15px;">Sayfa oluştur.</a>
							</div>
					</form>

				</div>
			</div>
		</content>
		<!-- Content Bitişi -->

		<!-- Footer Başlangıcı -->
		<footer>
			<div id="dil" style="width:100%;height:200px;background-color:white;">
				<ul>
					<li style="color:#737373;margin-left:145px;">Türkçe</li>
					<li>Kurdî(Kurmancî)</li>
					<li>العربية</li>
					<li>English (UK)</li>
					<li>Zaza</li>
					<li>Deutsch</li>
					<li>Русский</li>
					<li>Français (France)</li>
					<li>فارسی</li>
					<li>Español</li>
					<li>Português (Brasil)</li>
				</ul>
				<input type="button" name="" value="+" style="margin-top:26px;width:30px;font-weight:bold;">
			</div>
			<hr width="1000px" height="1px" style="margin-top:-140px;color:#dddfe2;opacity:0.5;">
			<div id="butonlar">
			<ul style="margin-left:150px;">
				<li>Kaydol</li>
				<li>Ünlüler</li>
				<li>Sayfa Oluştur</li>
			</ul>
			<ul>
				<li>Giriş Yap</li>
				<li>Marketplace</li>
				<li>Geliştiriciler</li>
			</ul>
			<ul>
				<li>Messenger</li>
				<li>Gruplar</li>
				<li>Kariyer Olanakları</li>
			</ul>
			<ul>
				<li>Facebook Lite</li>
				<li>Tarifler</li>
				<li>Gizlilik</li>
			</ul>
			<ul>
				<li>Mobil</li>
				<li>Spor</li>
				<li>Çerezler</li>
			</ul>
			<ul>
				<li>Arkadaşlarını Bul</li>
				<li>Gör</li>
				<li>Ad Choices</li>
			</ul>
			<ul>
				<li>Kişiler</li>
				<li>Moments</li>
				<li>Koşullar</li>
			</ul>
			<ul>
				<li>Sayfalar</li>
				<li>Instagram</li>
				<li>Yardım</li>
			</ul>
			<ul>
				<li>Yerler</li>
				<li>Yerel</li>
			</ul>
			<ul>
				<li>Oyunlar</li>
				<li>Hakkımızda</li>
			</ul>
			<ul>
				<li>Konumlar</li>
				<li>Reklam Oluştur</li>
			</ul>
		</div>
		<div style="margin-top:50px;margin-left:185px;font-size:12px;clear:left;color: #737373;">
			Facebook © 2018
		</div>
		</footer>
		<!-- Footer Bitişi -->
	</body>
</html>
