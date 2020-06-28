<!-- header -->
<?php include 'header.php'; ?>

<!-- side bar -->
<?php include 'sidebar.php'; ?>

<div class="container">
	<div class="right">
		<div class="panel-heading">
			<h3>Yazı Ekle</h3>
		</div>
		<div class="panel-info">
			<div class="heading">
				<form action="islem.php" method="POST" class="form-horizontal" role="form">

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Başlık</label>
						<div class="column">
							<input type="text" name="yazi_adi" class="form-control" placeholder="Yazınızın başlıgını giriniz" required>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Yazı</label>
						<div class="column">
							<textarea class="form-control" name="yazi_aciklama" cols="30" rows="5"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Görselin Adresi</label>
						<div class="column">
							<input type="text" name="yazi_link" class="form-control" placeholder="Görselin linkini ekleyin" required>
						</div>
					</div>
					<div class="button" >
						<button class="update" name="yazi-ekle">Ekle</button>						
					</div>

				</form>
			</div>
		</div>					
	</div>
</div>
<!-- footer -->
<?php include 'footer.php'; ?>
