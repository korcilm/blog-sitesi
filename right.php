
<div class="ml-5 mr-5 mt-5">
  <div class="row">

    <?php include 'left.php'; ?>

    <div class="col-md-6 mt-5">
      <?php 
      $yazilarim=$db->prepare("SELECT * FROM yazilarim ORDER BY id DESC");   /*order by kısmı en son eklenenden başlayarak yazdırılmasını sağlıyor*/
      $yazilarim->execute();
      $yazicek=$yazilarim->fetchALL(PDO::FETCH_ASSOC);

      foreach ($yazicek as $row) {
        ?>
        <div class="card mb-3" >
          <img src="<?php echo $row["yazi_link"]; ?>" class="card-img-top img-thumbnail" alt="...">
          <div class="card-body">
            <h5 class="card-title"> <?php echo $row["yazi_adi"]; ?></h5>
            <p class="card-text">
              <?php 
              $secim= $row["yazi_aciklama"]; 
              echo substr($secim, 0,280);  
              ?>...
            </p>
            <a class="blog-title-link" href="yazi.php?id=<?php echo $row["id"]; ?>"><button class="btn btn-primary">Daha Fazla Oku</button></a>
          </div>
          <div class="card-footer text-muted">
            <div class="float-right"> <?php echo date($row["yazi_tarih"]) ; ?></div>
          </div>
        </div>

        <?php
      }
      ?>

      <nav class="Page navigation example">
        <ul class="pagination" style="margin-left: 250px;">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <?php include 'sag.php'; ?>

  </div>
</div>
