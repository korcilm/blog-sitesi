<!-- header -->
<?php include 'header.php'; ?>

<!-- side bar -->
<?php include 'sidebar.php'; ?>
<?php 
$yazi_id =$_GET["yazi_id"];
$query=$db->prepare("SELECT * FROM yazilarim WHERE yazi_id=?");
$query->execute(array($yazi_id));
$cek=$query->fetch(PDO::FETCH_ASSOC);
?>

<div class="container">
	<div class="right">
		<div class="panel-heading">
			<h3>Yazı Düzenle</h3>
		</div>
		<div class="panel-info">
			<div class="heading">
				<form action="islem.php?yazi_id=<?php echo $cek["yazi_id"]; ?>" method="POST" class="form-horizontal" role="form">

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Başlık</label>
						<div class="column">
							<input type="text" name="yazi_adi" class="form-control" value="<?php echo $cek["yazi_adi"]; ?>" required>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Tarih</label>
						<div class="column">
							<input type="text" name="yazi_tarih" class="form-control" value="<?php echo $cek["yazi_tarih"]; ?>" required>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Yazı</label>
						<div class="column">
							<textarea class="form-control" name="yazi_aciklama" cols="30" rows="5"><?php echo $cek["yazi_aciklama"]; ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Görselin Adresi</label>
						<div class="column">
							<input type="text" name="yazi_link" class="form-control" value="<?php echo $cek["yazi_link"]; ?>" required>
						</div>
					</div>

					<div class="button" >
						<button class="update" name="yazi-duzenle">Güncelle</button>						
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
<!-- footer -->
<?php include 'footer.php'; ?>
