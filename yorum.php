
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



<div class="comment-respond">
	<h3 class="comment-title">Bir cevap yazın </h3>	<hr>
	<form action="admin\islem.php" method="POST" class="comment-form" id="form">
		<p class="comment-notes">
			<label for="form-notes">Yorumlarınız isminizle yayımlanır.</label>	
		</p>
		<p class="comment-form-comment">
			<textarea id="comment" name="yorum" cols="45" rows="8" maxlength="65525" required="required" placeholder="Yorum yapınız.."></textarea>
		</p>
		<p class="comment-form-author">
			<input id="author" name="yorum_adi" type="text"  size="30" maxlength="245" required='required' />
			<label for="author">İsim </label>
		</p>
		<p class="comment-form-email">
			<input id="email" name="yorum_mail" type="text"  size="30" maxlength="100" required='required' />
			<label for="email">E-posta </label> 
			<input type="hidden" name="yazi_id" value="<?php echo $cek["id"]; ?>">
		</p>
		<p class="form-submit">
			<input id="submit" name="yorum-ekle" type="submit" class="submit" value="Yorum Yap">
		</p>

	</form>
	<hr>
</div>



<?php 
$yorumlar=$db->prepare("SELECT * FROM yorumlar WHERE yazi_id=? ORDER BY yorum_id DESC ");
$yorumlar->execute();
$yorumcek=$yorumlar->fetchALL(PDO::FETCH_ASSOC);

foreach ($yorumcek as $row ) {
	?>	

	<div class="contain" style="box-shadow: 1px 2px 3px;">
		<div class="yorum">
			<h4 class="yorum-isim"><?php echo $row["yorum_adi"]; ?></h4>
			<div class="yorum-text">
				<?php echo $row["yorum"]; ?>
			</div>
			<div class="yorum-date"><?php echo $row["yorum_tarih"]; ?></div>
		</div>
	</div>
	<?php 
}
?>