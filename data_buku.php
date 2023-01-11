<?php

$title = 'Daftar Pengunjung';

include 'layout/header.php';

$data_pengunjung = select("SELECT * FROM pengunjung ORDER BY id_pengunjung DESC");

?>


<div class="container mt-5">
    <h1>Data Pengunjung</h1>
    <hr>

    <a href="?hal=tambah-pengunjung" class="btn btn-primary mb-2">Tambah</a>
    <a href="bukuxls.php" class="btn btn-success mb-2">Download Excel</a>

    <table class="table table-bordered table-striped mt-3" id="table">
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
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_pengunjung as $pengunjung): ?>
            <tr>
                <td>
                    <?= $no++; ?>
                </td>
                <td>
                    <?= $pengunjung['nama']; ?>
                </td>
                <td>
                    <?= $pengunjung['nomor']; ?>
                </td>
                <td>
                    <?= $pengunjung['kantor']; ?>
                </td>
                <td>
                    <?= $pengunjung['alamat']; ?>
                </td>
                <td>
                    <?= $pengunjung['keperluan']; ?>
                </td>
                <td>
                    <?= $pengunjung['kesan']; ?>
                </td>
                <td>
                    <?= date('d-m-y H:i:s', strtotime($pengunjung['tanggal'])); ?>
                </td>

                <td widht="15%" class="text-center col-2">
                    <a href="detail-pengunjung.php?id_pengunjung=<?= $pengunjung['id_pengunjung']; ?>"
                        class="btn btn-secondary btn-sm">Detail</a>
                    <a href="?hal=ubah-pengunjung&id_pengunjung=<?php echo $pengunjung['id_pengunjung'] ?>"
                        class="btn btn-success btn-sm">Ubah</a>
                    <a href="hapus-pengunjung.php?id_pengunjung=<?= $pengunjung['id_pengunjung']; ?>"
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin Hapus Data Pengunjung?');">Hapus</a>
                </td>
            </tr>


            <?php endforeach; ?>
        </tbody>


    </table>
</div>


<?php include 'layout/footer.php'; ?>