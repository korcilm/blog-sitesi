<!-- header -->
<?php include 'header.php'; ?>


<!-- side bar -->
<?php include 'sidebar.php'; ?>
<div class="container">
	<div class="right">
		<div class="panel-heading">
			<h3>Anasayfa Bilgilendirme</h3>		
		</div>
		<div class="panel-info">
			<div class="heading">
				<?php 
				$query=$db->prepare("SELECT * FROM yazilarim");
				$query->execute();
				$query->fetch(PDO::FETCH_ASSOC);
				$say=$query->rowCount();
				?>
				<center>	
					<h3>Yazılarım</h3>
					<span style="font-size: 36px;"><?php echo $say ?></span>
					<br>Adet
				</center>
			</div>
		</div>					
	</div>
</div>
</div>



<!-- footer -->
<?php include 'footer.php'; ?>

