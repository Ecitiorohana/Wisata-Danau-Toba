<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-wisata.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from wisata where wisata_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nomor">Nomor</label>
                        <input type="hidden" name="wisata_id" value="<?php echo $row['wisata_id']?>" class="form-control">
                        <input type="number" name="nomor" value="<?php echo $row['nomor']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_wisata">Nama Wisata</label>
                        <input type="text" name="nama_wisata" value="<?php echo $row['nama_wisata']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="biaya">Biaya masuk</label>
                        <input type="text" name="biaya" value="<?php echo $row['biaya']?>" class="form-control">
                        
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"><?php echo $row['alamat']?></textarea>
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>