<html>

<head>
	<title></title>
	<link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body onload="window.print()" onfocus="window.close()">
	<h1 lass="text-center">DATA HARIAN</h1>
	<br>
	<table class="table table-bordered table-hover">
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
				<tr>
			</thead>
			<tbody>
				<?php
				include "koneksi.php";
				session_start();
				$hasil = mysqli_query($koneksi, $_SESSION['sql']);
				$no = 0;
				while ($data = mysqli_fetch_array($hasil)) {
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

</body>

</html>
<div class="col-md-8">

</div>

	<html>