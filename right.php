  <!-- Right Column -->
  <div>
   <!-- yazilarim -->
   <?php 

   $yazilarim=$db->prepare("SELECT * FROM yazilarim ORDER BY id DESC");   /*order by kısmı en son eklenenden başlayarak yazdırılmasını sağlıyor*/
   $yazilarim->execute();
   $yazicek=$yazilarim->fetchALL(PDO::FETCH_ASSOC);

   foreach ($yazicek as $row) {
    ?>
    <div class="container">
      <div class="blog">
        <h2 class="blog-title">
          <a class="blog-title-link" href="yazi.php?id=<?php echo $row["id"]; ?>"><?php echo $row["yazi_adi"]; ?>
        </h2>
        <div class="blog-photo"><img src="<?php echo $row["yazi_link"]; ?>"></div>
        <div class="blog-text">
         <?php 
         $secim= $row["yazi_aciklama"]; 
         echo substr($secim, 0,250);
         ?>...
       </div>
       <div class="blog-date">
        <?php 
        echo date($row["yazi_tarih"]) ; ?>        
      </div>
    </a>
  </div>
</div>
<?php
}

?>
<!-- End Right Column -->
</div>
