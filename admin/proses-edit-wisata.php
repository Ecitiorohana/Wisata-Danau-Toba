<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['wisata_id'];
$nomor=$_POST['nomor'];
$nama_wisata=$_POST['nama_wisata'];
$biaya=$_POST['biaya'];
$alamat=$_POST['alamat'];

$ubah=$koneksi->query("update wisata set nomor='$nomor', nama_wisata='$nama_wisata', biaya='$biaya', alamat='$alamat' where wisata_id='$id'");

if($ubah==true){

    header("location:tampil-wisata.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>