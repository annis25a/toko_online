<?php

if($_POST){

    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telepon=$_POST['telepon'];

    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='t_produk.php';</script>";
    } elseif(empty($alamat)){

        echo "<script>alert('alamat tidak boleh kosong');location.href='t_produk.php';</script>";
    } elseif(empty($telepon)){

        echo "<script>alert('telepon tidak boleh kosong');location.href='t_produk.php';</script>";
    } else {
        include "koneksi.php";

        $insert=mysqli_query($conn,"INSERT INTO `pelanggan` (`nama`, `alamat`, `telepon`,) VALUES ('$nama', '$alamat, '$telepon',);");

        if($insert){
            echo "<script>alert('Sukses menambahkan pelanggan');location.href='t_produk.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pelanggan');location.href='t_produk.php';</script>";
        }
    }
}
?>