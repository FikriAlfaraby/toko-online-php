<?php 
 include "header.php";
?>

    <div class="heading">
      <h1>Our Product</h1>
      <p><a href="home.php">home >></a> shop</p>
    </div>
    <section class="products">
      <h1 class="title">
        our <span>products</span> <a href="#">view all >></a>
      </h1>

      <div class="box-container">
        <?php
            include "./toko.php";
            $qry_baju=mysqli_query($conn,"select * from produk");
            while($dt_baju=mysqli_fetch_array($qry_baju)){
        ?>
        <div class="box">
          <div class="icons">
            <a  href="detail.php?id_produk=<?=$dt_baju['id_produk']?>" class="fas fa-shopping-cart text-decoration-none"></a>
          </div>
          <div class="image">
            <img src="./Produk/gambar/<?=$dt_baju['foto']?>" alt="" />
          </div>
          <div class="content">
            <h3><?=$dt_baju['nama_produk']?></h3>
            <p style="font-size:15px"><?=substr($dt_baju['deskripsi'],0,20)?></p>
            <div class="price"><?="<span>Rp. </span>".substr($dt_baju['harga'],0,20)?></div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
          </div>
        </div>
        <?php
            }
        ?>
      </div>
    </section>

<?php 
  include 'footer.php';
?>
