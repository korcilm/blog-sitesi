<?php include"header.php" ?>
<div class="mt-0">
<!-- alert uyarı bolmesi -->
<?php 
if (@$_GET["yorum-ekle"]=="bos") {
	?>
	<div class="row justify-content-center">
		<div class="alert alert-warning position-fixed alert-dismissible col-md-5 ">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<i class="fas fa-exclamation-triangle"></i> Boş alan bırakmayınız!
		</div>
	</div>	
	<?php
}elseif (@$_GET["yorum-ekle"]=="yes") {
	?>			
	<div class="row justify-content-center  ">
		<div class="alert alert-success position-fixed alert-dismissible col-md-5">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<i class="fas fa-check-square"></i> Yorumunuz başarıyla alınmıştır. Admin onayından sonra yayınlanacaktır.
		</div>
	</div>
	<?php
}elseif (@$_GET["yorum-ekle"]=="no") {
	?>
	<div class="row justify-content-center ">
		<div class="alert alert-danger  position-fixed alert-dismissible col-md-5">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<i class="fas fa-exclamation-triangle"></i> İşleminiz gerçekleşirken hata oluştu!
		</div>
	</div>
	<?php
}
?>
</div>	

<div class="ml-5 mr-5 mt-5">
	<div class="row">
		<?php include 'left.php'; ?>

		<div class="col-md-6  mt-5">

			<div class="card mb-3">	<?php 
			
			$yazi_id=$_GET["ID"];
			$blog=$VT->VeriGetir("bloglar","WHERE ID=?",array($_GET["ID"]),"");
			

			if ($blog!=false) {

				if (!empty($blog[0]["resim"])){
					?>
					<div class="card-header">
						<img src="images/bloglar/<?=$blog[0]["resim"]?>" class="card-img-top" alt="..." style="max-height: 250px; ">
					</div>
					<?php
				}
				else{
					?>
					<div class="card-header">
					</div>
					<?php
				}
				?>
				<div class="card-body">
					<h5 class="card-title"><?=$blog[0]["baslik"]?></h5>
					<p class="card-text">
						<?php
						$metin=stripslashes($blog[0]["metin"]);
						echo $metin;
						?></p>
					</div>

					<div class="card-footer text-muted">

						<div class="float-right">
							<?php 

							$date = $blog[0]["tarih"];
							$date = date('d.m.Y  H:i', strtotime($date)); 
							echo $date;
						}
						?>
					</div> 

				</div>
			</div>	

			<div class="comment-respond">
				<h3 class="comment-title">Bir cevap yazın </h3>	<hr>
				<form action="panel\islem.php" method="POST" class="comment-form" id="form">
					<p class="comment-notes">
						<label for="form-notes">Yorumlarınız isminizle yayımlanır.</label>	
					</p>
					
					<div class="form-group">
						<textarea class="form-control" id="comment" name="yorum" rows="3" placeholder="Yorum yapınız.." ></textarea>
					</div>
					
					<div class="row">
						<div class="form-group col-md-6">
							<label for="author">İsim</label> 
							<input type="text"  name="kullaniciadi" class="form-control" id="author">
						</div>
						<div class="form-group col-md-6">
							<label for="email">Email</label>
							<input type="email" name="mail" class="form-control" id="email" aria-describedby="emailHelp">
							<input type="hidden" name="yazi_id" value="<?=$_GET["ID"]?>">
							<small id="emailHelp" class="form-text text-muted">Email adresiniz kimseyle paylaşılmamaktadır.</small>
							
						</div>
					</div>

					<div class="form-submit">
						<input class="btn btn-primary" id="submit" name="yorum-ekle" type="submit" value="Yorum Yap">
					</div>

				</form>
				<hr>
			</div>	

			<?php 
			$yorum=$VT->VeriGetir("yorumlar","WHERE blogID=? AND onay=?",array($yazi_id,1),"ORDER BY ID DESC");
			if ($yorum!=false) {

				for ($i=0; $i < count($yorum) ; $i++) { 


					?>	
					<ul class="list-unstyled">
						<div class="card mb-2">
							<li class="media">
								<div class="m-3">
									<i class="fas fa-user-circle fa-2x"></i>
								</div>

								<div class="media-body mt-3 mr-4 text-justify">
									<h5 class="mt-0 mb-1"><?=$yorum[$i]["kullaniciadi"]?></h5>
									<?=$yorum[$i]["yorum"]?>
								</div>
							</li>
							<div class="card-footer text-muted">
								<div class="float-right"><?php 

								$date = $yorum[$i]["tarih"];
								$date = date('d.m.Y  H:i', strtotime($date)); 
								echo $date;

								?></div>
							</div>
						</div>
					</ul>

					<?php 

				}
			}
			?>
			<hr>
		</div>
		

		<?php include 'sag.php'; ?>
	</div>
</div>
<?php include"footer.php" ?>
