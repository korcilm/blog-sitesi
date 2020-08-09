 
<div class="ml-5 mr-5 mt-5">
 <div class="row">

  <?php include 'left.php'; ?>
  <div class="col-md-6 mt-4">
    <hr>
    <div class="card-columns">

      <?php 

      $blog=$VT->VeriGetir("bloglar","WHERE durum=?",array(1),"ORDER BY ID DESC");
      if ($blog!=false) {

        for ($i=0; $i < count($blog) ; $i++) { 
          ?>
          <div class="card mx-1 mb-3">
            <?php 
            if (!empty($blog[$i]["resim"])){
              ?>
              <img src="images/bloglar/<?=$blog[$i]["resim"]?>" class="card-img-top" alt="...">
              <?php
            }
            ?>
            <div class="card-body">
              <h3 class="card-title"><b><?=$blog[$i]["baslik"]?></b> </h3>
              <p class="card-text">
                <?php 
                $secim=stripslashes($blog[$i]["description"]);
                echo substr($secim, 0,150);  
                ?>...
              </p>
              <a class="btn btn-primary blog-title-link" href="yazi.php?ID=<?=$blog[$i]["ID"]?>"> Daha Fazla Oku</a>
              <p class="card-text"><small class="text-muted">
                <?php 
                $tarih=$blog[$i]["tarih"];
                $tarih = date('d.m.Y  H:i', strtotime($tarih)); 
                echo $tarih;
                ?>
              </small></p>
            </div>
          </div>
          <?php
        }
      }
      ?>
    </div>
    <hr>
  </div>
  <?php include 'sag.php'; ?>
</div>
</div>
