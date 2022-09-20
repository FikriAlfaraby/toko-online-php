<?php
session_start();
if($_SESSION['status_login']!=true){
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>home</title>


    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"crossorigin="anonymous">
    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />


    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- header section starts  -->

    <header class="header">
      <a  href="home.html" class="logo text-decoration-none">
        <i class="fas fa-shopping-basket"></i> SeraStore
      </a>

      <nav class="navbar">
        <a class="text-decoration-none" href="home.php">Home</a>
        <a class="text-decoration-none" href="shop.php">Shop</a>
        <a class="text-decoration-none" href="history_pembelian.php">History</a>
      </nav>

      <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <div id="cart-btn" class="fas fa-shopping-cart">
          <span style="font-size:14px"><?php if(@$_SESSION['cart'] == null) {echo(""); } else echo(count(@$_SESSION['cart'])); ?></span>
        </div>
        <div id="login-btn" class="fas fa-user"></div>
      </div>

      <form action="" class="search-form">
        <input type="search" placeholder="search here..." id="search-box" />
        <label for="search-box" class="fas fa-search"></label>
      </form>

      <div class="shopping-cart">
        <?php
        if(@$_SESSION['cart']){
          $total_harga = 0;
                  foreach (@$_SESSION['cart'] as $key_produk => $val_produk):
              
                  
        ?>
        <div class="box">
          <a href="hapus_keranjang2.php?id=<?=$key_produk?>">
            <i class="fas fa-times"></i>
          </a>
          <img src="./Produk/gambar/<?=$val_produk['foto']?>" alt="" />
          <div class="content">
            <h3><?=$val_produk['nama_produk']?></h3>
            <span class="quantity"><?=$val_produk['qty']?></span>
            
            <span class="multiply">x</span>
            <span class="price"><?=$val_produk['harga']?></span>
            <p style="font-size:14px; color:#666" class-="mt-4">Size : <?=$val_produk['size']?></p>
          </div>
        </div>
        <?php     
                  $total = $val_produk['harga'] * $val_produk['qty'];
                  $total_harga += $total;
                  endforeach;
                  echo("
                  <tr >
                  <p><h3 class='total'>total : <span>Rp. ".$total_harga."</span></h3></p>
                  <td style='border:none;' colspan='6'><a href='checkout.php' class='btn btn-primary'>Check Out</a></td>
                </tr>  
                
                  ");
              } else {
                echo("
                  <p style='text-align:center; font-size:15px;'>Tidak Ada Produk di Keranjang</p></> 
                ");
              }
              ?>
        
        
      </div>

        <div class="card login-form" style="width: 30rem;">
          <img class="card-img-top" src="./image/pp.png" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-title text-center "><?= $_SESSION['username'] ?></h3>
            <p class="card-text text-center mb-1">Nama : <?= $_SESSION['nama'] ?></p>
            <p class="card-text text-center mb-1">Alamat : <?= $_SESSION['alamat'] ?></p>
            <p class="card-text text-center">Telephone : <?= $_SESSION['telephone'] ?></p>
            <a href="./Login/logout.php" class="btn btn-primary text-center">Log Out</a>
          </div>
        </div>
    </header>

    <!-- header section ends -->