<?php 
include '../config.php';
if (!$_SESSION["admin_kadi"]) {
	header("Location: login.php");
}

//giriş işlemi
if (isset($_POST["loggin"])) {

	$admin_kadi= htmlspecialchars(trim($_POST["admin_kadi"]));
	$admin_sifre= htmlspecialchars(trim(md5($_POST["admin_sifre"])));

	if(!$admin_kadi || !$admin_sifre){
		header("Location: login.php?giris=bos");
	}else{

		$query=$db->prepare("SELECT * FROM admin WHERE admin_kadi=? AND admin_sifre=?");
		$query->execute(array($admin_kadi, $admin_sifre));
		$admin_giris=$query->fetch(PDO::FETCH_ASSOC);

		if ($admin_giris) {
			
			$_SESSION["login"] = true;
			$_SESSION["admin_kadi"] = $admin_giris["admin_kadi"];
			$_SESSION["admin_id"] 	= $admin_giris["admin_id"];

			header("Location: index.php");
		}else{
			header("Location: login.php?giris=no");
		}
	}
}
//profil işlemleri admin kullanıcı adı değiştirme
if (isset($_POST["kullanici-adi"])) {
	
	$admin_id   =$_GET["admin_id"];

	$admin_kadi =$_POST["admin_kadi"];

	if (!$admin_kadi) {

		header("Location: profil.php?admin-guncelle=bos");

	}else{

		$query=$db->prepare("UPDATE admin SET admin_kadi=? WHERE admin_id=?");
		$update=$query->execute(array($admin_kadi,$admin_id));

		if ($update) {
			header("Location: profil.php?admin-guncelle=yes");
		}else{
			header("Location: profil.php?admin-guncelle=no");
		}
	}

}

//profil işlemleri admin şifre değiştirme
if (isset($_POST["sifre-degistir"])) {
	
	$admin_id 	=$_GET["admin_id"];

	$eski_sifre =md5($_POST["eski_sifre"]);
	$yeni_sifre =md5($_POST["yeni_sifre"]);

	

	$query=$db->prepare("SELECT *FROM admin WHERE admin_sifre=?");
	$query->execute(array($eski_sifre));
	$query->fetch(PDO:: FETCH_ASSOC);
	$say=$query->rowCount();

	if ($say==0) {

		header("Location: profil.php?admin-guncelle=hatali");

	}else{

		$query=$db->prepare("UPDATE admin SET admin_sifre=?");
		$update=$query->execute(array($yeni_sifre));

		if ($update) {
			header("Location: profil.php?admin-guncelle=yes");
		}else{
			header("Location: profil.php?admin-guncelle=no");
		}


	}
	
}

// genel ayarlar
if (isset($_POST["genel-ayarlar"])) {
	
	$site_id		= $_GET["site_id"];

	$site_title		= $_POST["site_title"];
	$site_url		= $_POST["site_url"];
	$site_desc	    = $_POST["site_desc"];
	$site_keyw 		= $_POST["site_keyw"];

	if (!$site_title || !$site_url || !$site_desc || !$site_keyw ) {
		header("Location: genel-ayarlar.php?ayar-guncelle=bos");
	}else{
		
		$query = $db->prepare("UPDATE ayarlar SET site_title=?, site_url=?, site_desc=?, site_keyw=? WHERE site_id=?");
		$update = $query->execute(array($site_title, $site_url, $site_desc, $site_keyw, $site_id));
		
		if ($update) {
			header("Location: genel-ayarlar.php?ayar-guncelle=yes");
		}else{
			header("Location: genel-ayarlar.php?ayar-guncelle=no");
		}
	}
}

// yazi ekle
if (isset($_POST["yazi-ekle"])) {
	
	$yazi_adi		= $_POST["yazi_adi"];
	$yazi_aciklama	= $_POST["yazi_aciklama"];
	$yazi_link		= $_POST["yazi_link"];	
	if (!$yazi_adi || !$yazi_link || !$yazi_aciklama ) {
		header("Location: yazilarim.php?yazi-ekle=bos");
	}else{
		$query =$db->prepare("INSERT INTO yazilarim SET yazi_adi=? , yazi_link=? , yazi_aciklama=?");
		$insert =$query->execute(array($yazi_adi, $yazi_link, $yazi_aciklama));

		if ($insert) {
			header("Location: yazilarim.php?yazi-ekle=yes");
		}else{
			header("Location: yazilarim.php?yazi-ekle=no");
		}
	}
}	

//yazi düzenle
if (isset($_POST["yazi-duzenle"])) {
	
	$id		= $_GET["id"];

	$yazi_adi		= $_POST["yazi_adi"];
	$yazi_tarih		= $_POST["yazi_tarih"];
	$yazi_aciklama	= $_POST["yazi_aciklama"];
	$yazi_link		= $_POST["yazi_link"];
	

	if (!$yazi_adi || !$yazi_link || !$yazi_tarih || !$yazi_aciklama ) {
		header("Location: yazilarim.php?yazi-guncelle=bos");
	}else{
		
		$query = $db->prepare("UPDATE yazilarim SET yazi_adi=? , yazi_link=? , yazi_tarih=? , yazi_aciklama=? WHERE id=?");
		$update = $query->execute(array($yazi_adi, $yazi_link, $yazi_tarih, $yazi_aciklama, $id));
		
		if ($update) {
			header("Location: yazilarim.php?yazi-guncelle=yes");
		}else{
			header("Location: yazilarim.php?yazi-guncelle=no");
		}
	}
}
//yazi sil
$yazisil_id=@$_GET["yazisil_id"];
if (isset($yazisil_id)) {
	$query=$db->prepare("DELETE FROM yazilarim WHERE id=?");
	$delete=$query->execute(array($yazisil_id));

	if ($delete) {
		header("Location: yazilarim.php?yazi-sil=yes");
	}else{
		header("Location: yazilarim.php?yazi-sil=no");
	}
}

 // yorum ekle
if (isset($_POST["yorum-ekle"])) {
	

	$yorum			= $_POST["yorum"];
	$yorum_adi		= $_POST["yorum_adi"];
	$yorum_mail		= $_POST["yorum_mail"];	
	$yazi_id 		= $_POST["yazi_id"];

	if ( !$yorum || !$yorum_adi  || !$yorum_mail || !$yazi_id ) {
		header("Location: ..\yazi.php?id=$yazi_id&&yorum-ekle=bos");
	}else{
		$query =$db->prepare("INSERT INTO yorumlar  SET  yorum_adi=? , yorum_mail=? , yorum=? , yazi_id=?");
		$insert =$query->execute(array($yorum_adi, $yorum_mail, $yorum, $yazi_id));		
		if ($insert) {
			header("Location: ..\yazi.php?id=$yazi_id&&yorum-ekle=yes");
		}else{
			header("Location: ..\yazi.php?id=$yazi_id&&yorum-ekle=no");
		}
	}
}	

//yorum onay
$yorum_id=@$_GET["yorum_id"];
$onay=@$_GET["onay"];
if (isset($yorum_id)){

	$query = $db->prepare("UPDATE yorumlar SET onay=? WHERE yorum_id=?");
	$update = $query->execute(array($onay, $yorum_id));

	if ($update) {
		header("Location: yorum-onay.php?yazi-guncelle=yes");
	}else{
		header("Location: yorum-onay.php?yazi-guncelle=no");
	}
}

//yorum sil
$yorumsil_id=@$_GET["yorumsil_id"];
if (isset($yorumsil_id)) {
	$query=$db->prepare("DELETE FROM yorumlar WHERE yorum_id=?");
	$delete=$query->execute(array($yorumsil_id));

	if ($delete) {
		header("Location: yorum-onay.php?yazi-sil=yes");
	}else{
		header("Location: yorum-onay.php?yazi-sil=no");
	}
}
