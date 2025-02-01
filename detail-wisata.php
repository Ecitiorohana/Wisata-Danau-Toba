<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-8"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Detail Data Wisata</h2>
				<?php
                $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from wisata where wisata_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<td width="20%">Nomor</td><td width="5%">:</td><td><?php echo $row['nomor']?></td>	
						</tr>
						<tr>
							<td>Nama Wisata</td><td>:</td><td><?php echo $row['nama_wisata']?></td>
						</tr>
						<tr>
							<td>Biaya</td><td>:</td><td><?php echo $row['biaya']?></td>
						</tr>
						<tr>
							<td>Alamat</td><td>:</td><td><?php echo $row['alamat']?></td>
						</tr>
						</thead>
			
						</table><a href="wisata.php"> kembali
						
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->
			
			<div class="col-md-4"><!-- Awal kolom kedua -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-tasks"></span>Info Lainnya</h2>
				<h4>Rumah Adat</h4>
				<img src="images/batak.jpeg" class="img-thumbnail img-responsive">
				<p>Rumah Bolon adalah rumah adat Batak Toba di provinsi Sumatera Utara. Mengutip buku Asal-Usul, Silsilah, dan Tradisi Budaya Batak Toba oleh <b>Jonar T.H. Situmorang</b> Rumah Bolon adalah simbol dari identitas masyarakat Batak yang tinggal di Sumatera Utara.<br/><a class="btn btn-danger btn-xs" href="ruang_kelas.html"role="button">Info rumah batak</a></p>
				</div>
      </div>
			</div><!-- Akhir Kolom Kedua -->
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
		<?php include "footer.php";?>