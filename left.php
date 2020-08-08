<div class="col-md-3 mt-5">
  <div class="card mx-4 ">
    <div class="card-header">
      <img src="<?=SITE?>images/fotom1.jpg" style="width: 100%; height: 200px;" alt="">    
    </div>
    <div class="card-body">

      <?php 
      $hakkimda=$VT->VeriGetir("hakkimda","WHERE ID=?",array(1),"");
      if ($hakkimda!=false) {
        $adsoyad=$hakkimda[0]["adsoyad"];
        $bilgi=$hakkimda[0]["bilgi"];
      }
      ?> 
      <h1><?=$adsoyad?></h1>

      <?php 
      $dizi= explode("-", $bilgi ,2);      
      ?>
      <p class="text-center"> <?=$dizi[0]?></p>

      <p class="text-center"><?=$dizi[1]?></p>

      <?php 
      $ayarlar=$VT->VeriGetir("ayarlar","WHERE ID=?", array(1),"ORDER BY ID ASC",1);
      ?>
      <ul class="social-icon">
        <li><a href="<?=$ayarlar[0]["mail"]?>" target="_blank" class="facebook"><i class="fas fa-envelope-square fa-lg"></i></a></li>
        <li><a href="<?=$ayarlar[0]["twitter"]?>" target="_blank" class="twitter"><i class="fab fa-twitter-square fa-lg"></i></a></li>
        <li><a href="<?=$ayarlar[0]["linkedin"]?>" target="_blank" class="linkedin"><i class="fab fa-linkedin fa-lg"></i></a></li>
        <li><a href="<?=$ayarlar[0]["github"]?>" target="_blank" class="github"><i class="fab fa-github fa-lg"></i></a></li>
        <li><a href="<?=$ayarlar[0]["medium"]?>" target="_blank" class="github"><i class="fab fa-medium fa-lg"></i></a></li>
      </ul>

    </div>
  </div>
</div>
