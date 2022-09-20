<?php
    include "./header.php";
    include "./toko.php";
    $qry_detail_baju=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
    $dt_baju=mysqli_fetch_array($qry_detail_baju);
?>

    <div class="heading">
      <h1>Detail Produk</h1>
      <p><a href="shop.php">Shop >></a> Detail</p>
    </div>

    <section class="about">
      <div class="image">
        <img src="./Produk/gambar/<?=$dt_baju['foto']?>" alt="" />
      </div>

      <div class="content">
        <h3><?=$dt_baju['nama_produk']?></h3>
        <form action="masukkeranjang.php?id_produk=<?=$dt_baju['id_produk']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Harga : </td><td><?="<span>Rp. </span>".$dt_baju['harga']?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi : </td><td><?=$dt_baju['deskripsi']?></td>
                    </tr>
                    <tr><td>Size : </td><td>
                      <select name="size" class="form-control">
                      <option disabled>Pilih Size</option>
                      <option value="S">S</option>
                      <option value="M">M</option>
                      <option value="L">L</option>
                      <option value="XL">XL</option>
                      <option value="XXL">XXL</option>
                  </select></td></tr>
                    <tr>
                        <td>Jumlah : </td><td><input type="number" name="jumlah_beli" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="BELI"></td>
                    </tr>
                </thead>
            </table>
        </form>
      </div>
    </section>
<?php 
  include "footer.php";
?>
