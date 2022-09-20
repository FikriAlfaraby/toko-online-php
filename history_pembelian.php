<?php
    include "./header.php";
?>

    <div class="heading">
      <h1>History Pembelian</h1>
      <p><a href="shop.php">Shop >></a> History</p>
    </div>

    <section class="history">
      <table class="table table-hover table-striped">
    <thead>
        <th>NO</th><th>Tanggal Beli</th><th>Nama Produk</th><th>Foto</th><th>Size</th><th>Jumlah</th><th>Harga</th><th>Total</th><th>Aksi</th>
    </thead>
    <tbody>
        <?php
            include './toko.php';
            $qry_histori=mysqli_query($conn,"select produk.nama_produk, transaksi.tgl_transaksi, qty, produk.harga, produk.foto, detail_transaksi.subtotal, detail_transaksi.size, transaksi.id_transaksi from transaksi JOIN produk ON transaksi.id_produk = produk.id_produk JOIN detail_transaksi ON detail_transaksi.id_transaksi = transaksi.id_transaksi where transaksi.id_pelanggan = '".$_SESSION['id_pelanggan']."' order by id_detail_transaksi desc;");
            $no=0;
            if (mysqli_num_rows($qry_histori) > 0) {
                while($dt_histori=mysqli_fetch_array($qry_histori)){
            
                    
            $no++;
            $hapus="<a href='hapus_history.php?id_transaksi=$dt_histori[id_transaksi]' onclick='return confirm(Apakah anda yakin menghapus Histori ini?)' class='btn btn-danger'>X</a>";
        ?>

            <tr>  
                <td><?=$no?></td>
                <td><?=$dt_histori['tgl_transaksi']?></td>
                <td><?=$dt_histori['nama_produk']?></td>
                <td><img src="./Produk/gambar/<?=$dt_histori['foto']?>" width="100px";></td>
                <td><?=$dt_histori['size']?></td>
                <td><?=$dt_histori['qty']?></td>
                <td><?="<span>Rp. </span>".$dt_histori['harga']?></td>
                <td><?="<span>Rp. </span>".$dt_histori['subtotal']?></td>
                <td><?=$hapus?></td> 
                <td>
            </tr>
            
            <?php
                }
            } else {
                echo("
                <tr>
                 <td colspan='8'><p style='text-align:center'>Tidak Ada Histori</p></td>
                </tr>  
                ");
             }
        ?>
    </tbody>
</table>
    </section>
<?php
    include "./footer.php";
?>