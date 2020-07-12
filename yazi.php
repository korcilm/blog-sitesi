<?php include"header.php" ?>

<!-- alert uyarı bolmesi -->
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
		<span > Yorumunuz başarıyla alınmıştır. Admin onayından sonra yayınlanacaktır.</span>
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

$yazi_id2=$yazi_id = @$_GET["id"];

$query=$db->prepare("SELECT * FROM yazilarim WHERE id=?");
$query->execute(array($yazi_id));
$cek=$query->fetch(PDO::FETCH_ASSOC);
?>	

<div class="ml-5 mr-5 mt-5">
	<div class="row">
		<?php include 'left.php'; ?>

		<div class="col-md-6 ">

			<div class="card mb-3" >
				<img src="<?php echo $cek["yazi_link"]; ?>" class="card-img-top img-thumbnail" alt="...">
				<div class="card-body">
					<h5 class="card-title"><?php echo $cek["yazi_adi"]; ?></h5>
					<p class="card-text"><?php echo $cek["yazi_aciklama"]; ?></p>
				</div>
				<div class="card-footer text-muted">
					<div class="float-right"><?php echo $cek["yazi_tarih"]; ?></div>
				</div>
			</div>

			<div class="comment-respond">
				<h3 class="comment-title">Bir cevap yazın </h3>	<hr>
				<form action="admin\islem.php" method="POST" class="comment-form" id="form">
					<p class="comment-notes">
						<label for="form-notes">Yorumlarınız isminizle yayımlanır.</label>	
					</p>
					
					<div class="form-group">
						<textarea class="form-control" id="comment" name="yorum" rows="3" placeholder="Yorum yapınız.." required="required"></textarea>
					</div>
					
					<div class="row">
						<div class="form-group col-md-6">
							<label for="author">İsim</label> 
							<input type="text"  name="yorum_adi" class="form-control" id="author" required='required'>
						</div>
						<div class="form-group col-md-6">
							<label for="email">Email</label>
							<input type="email" name="yorum_mail" class="form-control" id="email" aria-describedby="emailHelp">
							<input type="hidden" name="yazi_id" value="<?php echo $cek["id"]; ?>">
							<small id="emailHelp" class="form-text text-muted" required='required'>Email adresiniz kimseyle paylaşılmamaktadır.</small>
							
						</div>
					</div>

					<div class="form-submit">
						<input class="btn btn-primary" id="submit" name="yorum-ekle" type="submit" class="submit" value="Yorum Yap">
					</div>

				</form>
				<hr>
			</div>


			<?php 
			$yorumlar=$db->prepare("SELECT * FROM yorumlar WHERE yazi_id=$yazi_id2 and onay=1 ORDER BY yorum_id DESC ");
			$yorumlar->execute();
			$yorumcek=$yorumlar->fetchALL(PDO::FETCH_ASSOC);

			foreach ($yorumcek as $row ) {
				?>	
				<ul class="list-unstyled">
					<div class="card mb-2">
						<li class="media">
							<div class="m-3">
								<i class="fas fa-user-circle fa-2x"></i>
							</div>
							
							<div class="media-body mt-3 mr-4 text-justify">
								<h5 class="mt-0 mb-1"><?php echo $row["yorum_adi"]; ?></h5>
								<?php echo $row["yorum"]; ?>
							</div>
						</li>
						<div class="card-footer text-muted">
							<div class="float-right"><?php echo $row["yorum_tarih"]; ?></div>
						</div>
					</div>
				</ul>

				<?php 
			}
			?>
		</div>

		<?php include 'sag.php'; ?>
	</div>
</div>
<?php include"footer.php" ?>
