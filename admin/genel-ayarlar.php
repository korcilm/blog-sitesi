<!-- header -->
<?php include 'header.php'; ?>

<!-- side bar -->
<?php include 'sidebar.php'; ?>

<!-- alert uyarı bolmesi -->	
<div class="alert">
	<?php 
	if (@$_GET["ayar-guncelle"]=="bos") {
		?>
		<div class="alert-warning" >
			<span> Boş alan bırakmayınız!</span>
		</div>
		<?php
	}elseif (@$_GET["ayar-guncelle"]=="yes") {
		?>
		<div class="alert-success" >
			<span> İşleminiz başarıyla gerçekleştirildi!</span>
		</div>					
		<?php
	}elseif (@$_GET["ayar-guncelle"]=="no") {
		?>
		<div class="alert-warning" >
			<span> İşleminiz gerçekleşirken hata oluştu!</span>
		</div>
		<?php
	}
	?>  
</div>

<div class="container">
	<div class="right">
		<div class="panel-heading">
			<h3>Genel Ayarlar</h3>
		</div>
		<div class="panel-info">
			<div class="heading">
				<form action="islem.php?site_id=<?php echo $id; ?>" method="POST" class="form-horizontal" role="form">

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Site Title</label>
						<div class="column">
							<input type="text" name="site_title" class="form-control"  value="<?php echo $cek["site_title"] ?>">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Site Url</label>
						<div class="column">
							<input type="text" name="site_url" class="form-control" value="<?php echo $cek["site_url"] ?>">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Site Description</label>
						<div class="column">
							<input type="text" name="site_desc" class="form-control"  value="<?php echo $cek["site_desc"] ?>">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Site Keywords</label>
						<div class="column">
							<input type="text" name="site_keyw" class="form-control"   value="<?php echo $cek["site_keyw"] ?>">
						</div>
					</div>

					<div class="button" >
						<button class="update" name="genel-ayarlar">Güncelle</button>						
					</div>

				</form>

			</div>
		</div>					
	</div>
</div>

<!-- footer -->
<?php include 'footer.php'; ?>
