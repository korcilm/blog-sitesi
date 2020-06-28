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
				<table class="table">
					<thead>
						<tr>
							<th  width="5%">#</th>
							<th  width="15%">İsim</th>
							<th  width="15%">Tarihi</th>
							<th  width="15%">Hangi Yazım</th>
							<th  width="15%">Yorum</th>
							<th  width="15%">Onay</th>
						</tr>
					</thead>

					<tbody>
						<?php 
						$query =$db->prepare("SELECT * FROM yorumlar WHERE onay=0");
						$query->execute();
						$cek =$query->fetchALL(PDO::FETCH_ASSOC);
						$say =$query->rowCount();

						foreach ($cek as $row) {
							?>
							<tr>
								<td><center><?php echo $row["yorum_id"]; ?></center></td>
								<td><?php echo $row["yorum_adi"]; ?></td>
								<td><center><?php echo $row["yorum_tarih"]; ?></center></td>
								<td><?php echo $row["yazi_id"]; ?></td>
								<td><?php echo $row["yorum"]; ?></td>
								<td>
									<center>
										<a href="islem.php?yorum_id=<?php echo $row["yorum_id"]; ?> && onay=<?php echo $row["onay"]+1; ?>" title="Onayla"><button class="update">Onayla</button></a>
										<a href="islem.php?yorumsil_id=<?php echo $row["yorum_id"]; ?>" title="Sil"><button class="delete">Sil</button></a>
									</center>
								</td>
							</tr>

							<?php 
						}
						?>
					</tbody>
				</table>
			</div>
		</div>					
	</div>
</div>
<!-- footer -->
<?php include 'footer.php'; ?>
