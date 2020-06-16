<!-- header --> 
<?php include 'header.php'; ?>


<!-- side bar -->
<?php include 'sidebar.php'; ?>

<!-- alert uyarı bolmesi -->
<div class="alert">	
	<?php 
	if (@$_GET["yorum-ekle"]=="bos") {
		?>	
		<div class=" alert-warning" >
			<span > Boş alan bırakmayınız!</span>
		</div>
		<?php
	}elseif (@$_GET["yorum-ekle"]=="yes") {
		?>			
		<div class="alert-success" >
			<span > İşleminiz başarıyla gerçekleştirildi!</span>
		</div>
		<?php
	}elseif (@$_GET["yorum-ekle"]=="no") {
		?>
		<div class=" alert-warning" >
			<span > İşleminiz gerçekleşirken hata oluştu!</span>
		</div>
		<?php
	}
		?>			
		


	<?php 
	$id=1;

	$query=$db->prepare("SELECT * FROM yorumlar");
	$query->execute();
	$cek=$query->fetch(PDO::FETCH_ASSOC);
	?>

</div>	

<!-- footer -->
<?php include 'footer.php'; ?>