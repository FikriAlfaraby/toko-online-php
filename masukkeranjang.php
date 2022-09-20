<?php
    session_start();
    if($_POST){
        include "./toko.php";
        $qry_get_baju=mysqli_query($conn,"select * from produk where id_produk= '".$_GET['id_produk']."'");
        $dt_baju=mysqli_fetch_array($qry_get_baju);
        $_SESSION['cart'][]=array(
            'id_produk'=>$dt_baju['id_produk'],
            'nama_produk'=>$dt_baju['nama_produk'],
            'harga'=>$dt_baju['harga'],
            'foto' =>$dt_baju['foto'],
            'qty'=>$_POST['jumlah_beli'],
            'size'=>$_POST['size']
        );
    }
    header('location: shop.php');
?>