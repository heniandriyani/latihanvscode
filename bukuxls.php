<?php
$date = date("dmY");
header("Content-type: aplication/octet-stream");
header("Content-Disposition:attachment; filename=data-buku-$date.xls");
header("Pragma: no cache");
header("Expires: 0");
?>
<div class="col-md-4 mt-5" align="center">
	<h5>DATA SISWA</h5>
	<div>
		<table border="1" id="example3" class="table table-striped table-bordered" style="width: 100%">
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
              
            </tr>
			</thead>
			<tbody>
				<?php
				include "koneksi.php";
				$query = mysqli_query($koneksi, "SELECT * FROM pengunjung ");
				$no = 0;
				while ($data = mysqli_fetch_array($query)) {
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

					</tr>
				<?php } ?>
			</tbody>
		</table>