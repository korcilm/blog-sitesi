<!-- header --> 
<?php include 'header.php'; ?>


<!-- side bar -->
<?php include 'sidebar.php'; ?>

<!-- alert uyarı bolmesi -->
<div class="alert">	
	<?php 
	if (@$_GET["yazi-ekle"]=="bos") {
		?>	
		<div class=" alert-warning" >
			<span > Boş alan bırakmayınız!</span>
		</div>
		<?php
	}elseif (@$_GET["yazi-ekle"]=="yes") {
		?>			
		<div class="alert-success" >
			<span > İşleminiz başarıyla gerçekleştirildi!</span>
		</div>
		<?php
	}elseif (@$_GET["yazi-ekle"]=="no") {
		?>
		<div class=" alert-warning" >
			<span > İşleminiz gerçekleşirken hata oluştu!</span>
		</div>
		<?php
	}elseif (@$_GET["yazi-guncelle"]=="bos") {
		?>			
		<div class=" alert-warning" >
			<span > Boş alan bırakmayınız!</span>
		</div>
		<?php
	}elseif (@$_GET["yazi-guncelle"]=="yes") {
		?>			
		<div class="alert-success" >
			<span> İşleminiz başarıyla gerçekleştirildi!</span>
		</div>
		<?php
	}elseif (@$_GET["yazi-guncelle"]=="no") {
		?>			
		<div class=" alert-warning" >
			<span > İşleminiz gerçekleşirken hata oluştu!</span>
		</div>
		<?php
	}elseif (@$_GET["yazi-sil"]=="yes") {
		?>
		<div class="alert-success" >
			<span > İşleminiz başarıyla gerçekleştirildi!</span>
		</div>
		<?php
	}elseif (@$_GET["yazi-sil"]=="no") {
		?>
		<div class="alert-warning" >
			<span > İşleminiz gerçekleşirken hata oluştu!</span>
		</div>
		<?php
	}
	?>  


	<?php 
	$id=1;

	$query=$db->prepare("SELECT * FROM yazilarim");
	$query->execute();
	$cek=$query->fetch(PDO::FETCH_ASSOC);
	?>

</div>	
<div class="container">
	<div class="right">
		<div class="panel-heading">
			<h3>Yazılarım</h3>
		</div>
		<div class="panel-info">
			<div class="heading">
				<table class="table">
					<thead>
						<tr>
							<th  width="5%">#</th>
							<th style="text-align: left;" width="65%">Başlık</th>
							<th  width="15%">Tarihi</th>
							<th  width="15%">İşlemler</th>
						</tr>
					</thead>

					<tbody>
						<?php 
						$query =$db->prepare("SELECT * FROM yazilarim");
						$query->execute();
						$cek =$query->fetchALL(PDO::FETCH_ASSOC);
						$say =$query->rowCount();

						foreach ($cek as $row) {
							?>
							<tr>
								<td><center><?php echo $row["id"]; ?></center></td>
								<td><?php echo $row["yazi_adi"]; ?></td>
								<td><center><?php echo $row["yazi_tarih"]; ?></center></td>



								<td>
									<center>
										<a href="yazi-duzenle.php?id=<?php echo $row["id"]; ?>" title="Düzenle"><button class="update">Düzenle</button></a>
										<a href="islem.php?yazisil_id=<?php echo $row["id"]; ?>" title="Sil"><button class="delete">Sil</button></a>
									</center>
								</td>
							</tr>

							<?php 
						}
						?>
					</tbody>
				</table>
				<div class="insert-button"><a href="yazi-ekle.php" title="Yazı Ekle"><button class="insert">Yazı Ekle</button></a></div>	
			</div>
		</div>					
	</div>
</div>

<!-- footer -->
<?php include 'footer.php'; ?>