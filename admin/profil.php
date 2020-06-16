<!-- header -->
<?php include 'header.php'; ?>

<?php 
$admin_id=1;
$query=$db->prepare("SELECT * FROM admin WHERE admin_id=?");
$query->execute(array($admin_id));
$cek=$query->fetch(PDO::FETCH_ASSOC);
?>

<!-- side bar -->
<?php include 'sidebar.php'; ?>

<!-- alert uyarı bolmesi -->
<div class="alert">
	<?php 
	if (@$_GET["admin-guncelle"]=="bos") {
		?>
		<div class="alert-warning" >
			<span> Boş alan bırakmayınız!</span>
		</div>
		<?php
	}elseif (@$_GET["admin-guncelle"]=="yes") {
		?>
		<div class="alert-success" >
			<span > İşleminiz başarıyla gerçekleştirildi!</span>
		</div>					
		<?php
	}elseif (@$_GET["admin-guncelle"]=="no") {
		?>
		<div class="alert-warning" >
			<span > İşleminiz gerçekleşirken hata oluştu!</span>
		</div>
		<?php
	}elseif (@$_GET["sifre-degistir"]=="yes") {
		?>
		<div class="alert-success" >
			<span> İşleminiz başarıyla yapıldı!</span>
		</div>
		<?php
	}elseif (@$_GET["sifre-degistir"]=="no") {
		?>
		<div class="alert-danger" >
			<span> İşleminiz gerçekleşirken hata oluştu!</span>
		</div>
		<?php
	}elseif (@$_GET["sifre-degistir"]=="hatali") {
		?>
		<div class="alert-warning" >
			<span> Girdiğiniz eski şifre hatalıdır!</span>
		</div>
		<?php
	}
	?>  

</div>


<div class="container">
	<div class="right">
		<div class="panel-heading">
			<h3>Anasayfa Bilgilendirme</h3>		
		</div>

		<div class="panel-info">
			<div class="heading">
				<h3>Kullanıcı Adı Değiştir</h3>

				<form action="islem.php?admin_id=<?php echo $admin_id; ?>" method="POST" class="form-horizontal" role="form">

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Kullanıcı Adı</label>
						<div class="column">
							<input type="text" name="admin_kadi" class="form-control"  value="<?php echo $cek["admin_kadi"] ?>">
						</div>
					</div>

					<div class="" >
						<button class="update" name="kullanici-adi">Güncelle</button>						
					</div>
				</form>
			</div>
		</div>

		<div class="panel-info">
			<div class="heading">
				<h3>Şifre Değiştir</h3>

				<form action="islem.php?admin_id=<?php echo $admin_id; ?>" method="POST" class="form-horizontal" role="form">

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Eski Şifre</label>
						<div class="column">
							<input type="password" name="eski_sifre" class="form-control" required="" >
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Yeni Şifre</label>
						<div class="column">
							<input type="password" name="yeni_sifre" class="form-control" required="" >
						</div>
					</div>
					
					<div class="" >
						<button class="update" name="sifre-degistir" >Güncelle</button>						
					</div>
				</form>
			</div>
		</div>

	</div>
</div>



<!-- footer -->
<?php include 'footer.php'; ?>
