<div class="col-md-3 mt-5 ">

 <div class="card  mx-5">
  <div class="card-body">
    <form action="search.php" method="get" class="form-inline">
      <input class="form-control " name="kelime" type="search" placeholder="Konu Giriniz" aria-label="Search">
      <input class="form-control btn btn-primary" type="submit" value="Ara" >
    </form>
  </div>
</div>


<div class="card mx-5 mt-3">
  <div class="card-header">
    <h4>Son Yazılar</h4>
  </div>

  <div class="card-body ">
    <div class="row">
      <?php  
      $blog=$VT->VeriGetir("bloglar","WHERE durum=?",array(1),"ORDER BY ID DESC");
      if ($blog!=false) {

        ?>
        <div class="col">
          <ul class="list-unstyled">
            <?php 
            $sira=0;
            for ($i=0; $i < count($blog) ; $i++) {
              $sira++;
              if ($sira!=6) {
                ?>
                <li><a href="yazi.php?ID=<?=$blog[$i]["ID"]?>"><i class="fas fa-book-reader"></i> <?=$blog[$i]["baslik"]?></a></li>
                <?php
              }
            }
          }
          ?>
        </ul>
      </div>

    </div>
  </div>
</div>

<div class="card  mx-5 mt-3">
  <div class="card-header">
    <h4>Widget</h4>
  </div>
  <div class="card-body ">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
</div>
</div>
