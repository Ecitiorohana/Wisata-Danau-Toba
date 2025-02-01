<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nomor=$_POST['nomor'];
$nama_wisata=$_POST['nama_wisata'];
$biaya=$_POST['biaya'];
$alamat=$_POST['alamat'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into wisata(nomor,nama_wisata,biaya,alamat) 
                        values ('$nomor', '$nama_wisata', '$biaya', '$alamat')");

if($simpan==true){

    header("location:tampil-wisata.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>