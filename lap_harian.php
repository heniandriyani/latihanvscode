<div class="col-md-12">
<div class="card">
<div class="card shadow mb-4">
	<div class="card-header">
		<h4>Laporan Harian</h4>	
	</div>
	<div class="card-body">
	<div class="table-responsive">
		<h6>Penyortiran Data Berdasarkan Tanggal</h6>
			<form action="?hal=lap_harian" method="post" class="form-inline">
				<div class="form group">
					<label>Tanggal Awal</label>
					<div class="input-group date">
						<div class="input-group-addon">
							<span class="glyphicon-th"></span>
						</div>
						<input id="tgl_mulai" placeholder="masukkan tanggal awal" type="date" class="form-control datepicker" name="tgl_awal" value="<?php if (isset($_POST['tgl_awal'])) echo $_POST['tgl_awal'];?>">
					</div>
				</div>
				<div class="form group ">
					<label>Tanggal Akhir</label>
					<div class="input-group date">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-th"></span>
						</div>
						<input id="tgl_akhir" placeholder="masukkan tanggal akhir" type="date" class="form-control datepicker" name="tgl_akhir" value="<?php if (isset($_POST['tgl_akhir'])) echo $_POST['tgl_akhir'];?>">
					</div>
				</div>

			
				<button type="submit" class="btn btn-primary mt-4">Sortir</button>
			
			</form>

<table class="table">
					<thead>
						<tr>
							<th>No</th>
                <th>Nama</th>
                <th>No Hp</th>
                <th>Kantor</th>
                <th>Alamat</th>
                <th>Keperluan</th>
                <th>Pesan & Kesan</th>
                <th class="col-2">Tanggal</th>
						<tr>
					</thead>
					<tbody>
					<?php
					include "koneksi.php";
					if (isset($_POST['tgl_awal'])&& isset($_POST['tgl_akhir'])){
					$tgl_awal=date('Y-m-d', strtotime($_POST["tgl_awal"]));
					$tgl_akhir=date('Y-m-d', strtotime($_POST["tgl_akhir"]));
					
					$sql="select * from pengunjung where tanggal between '".$tgl_awal."' and '" .$tgl_akhir."' order by nama asc";
				}else{
					$sql="select * from pengunjung order by nama asc";
				}
				$_SESSION['sql'] = $sql;
				$hasil=mysqli_query($koneksi, $sql);
					$no = 0;
					while ($data = mysqli_fetch_array($hasil)){
						$no++;
					?>
						<tr>
							<td><?php echo $no; ?></td>
						<td><?php echo $data['nama']; ?></td>
						<td><?php echo $data['nomor']; ?></td>
						<td><?php echo $data['kantor']; ?></td>
						<td><?php echo $data['alamat']; ?></td>
						<td><?php echo $data['keperluan']; ?></td>
						<td><?php echo $data['kesan']; ?></td>
						<td><?php echo $data['tanggal']; ?></td>
							<td>
								
						<?php } ?>
					</tbody>
				</table>
				<a href="cetak_harian.php" class="btn btn-primary" target="_blank">Cetak Laporan Harian</a>
				</div>
				</div>
</div>