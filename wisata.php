<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-8"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Data Wisata</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<th>Nomor</th>
							<th>Nama wisata</th>
							<th>Biaya masuk</th>
							<th>Alamat</th>
						</tr>
						</thead>
						<?php

						include "koneksi.php";
						$sql=$koneksi->query("select * from wisata");

						while($row= $sql->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $row['nomor']?></td>
							<td><?php echo $row['nama_wisata']?></td>
							<td><?php echo $row['biaya']?></td>
							<td><?php echo $row['alamat']?></td>
							<td><a href="detail-wisata.php?id=<?php echo $row['wisata_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-zoom-in"></button>
                </a></td>
						</tr>
						<?php } ?>
						</table>
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