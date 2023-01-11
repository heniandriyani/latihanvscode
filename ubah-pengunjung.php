<?php

// batas login
// if (!isset($_SESSION["login"])) {
//     echo "<script>
//     document.location.href = 'login.php';
//     </script>";

//     exit;
// }

$title = 'Ubah Pengunjung';

include 'layout/header.php';

// mengambil id_pengunjung dari url
$id_pengunjung = (int) $_GET['id_pengunjung'];

$pengunjung = select("SELECT * FROM pengunjung WHERE id_pengunjung = $id_pengunjung")[0];

// check tombol Simpan di tekan
if (isset($_POST['ubah'])) {
    if (update_pengunjung($_POST) > 0) {
        echo "<script>
        alert('Data Pengunjung Berhasil Diubah');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Pengunjung Gagal Diubah');
        document.location.href = 'data_buku.php';
        </script>";
    }
}

?>


<div class="container mt-5">
    <h1>Ubah Pengunjung</h1>
    <hr>

    <form action="" method="post">
        <input type="hidden" name="id_pengunjung" value="<?= $pengunjung['id_pengunjung']; ?>">

        <div class="row">
            <!-- nama -->
            <div class="mb-3 col-6">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $pengunjung['nama']; ?>"
                    required>
            </div>

            <!-- nomor -->
            <div class="mb-3 col-6">
                <label for="nomor" class="form-label">Telepon</label>
                <input type="number" class="form-control" id="nomor" name="nomor" value="<?= $pengunjung['nomor']; ?>"
                    required>
            </div>
        </div>

        <!-- kantor -->
        <div class="mb-3">
            <label for="nomor" class="form-label">Kantor / Instansi</label>
            <input type="text" class="form-control" id="kantor" name="kantor" value="<?= $pengunjung['kantor']; ?>"
                required>
        </div>
        
        <!-- keperluan -->
        <div class="mb-3">
            <label for="nomor" class="form-label">Keperluan</label>
            <input type="text" class="form-control" id="keperluan" name="keperluan"
                value="<?= $pengunjung['keperluan']; ?>" required>
        </div>

        <div class="row">
        <!-- alamat -->
        <div class="mb-3 col-6">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat"
                required><?= $pengunjung['alamat']; ?></textarea>
        </div>

        <!-- kesan -->
        <div class="mb-3 col-6">
            <label for="kesan" class="form-label">Kesan & Pesan</label>
            <textarea class="form-control" id="kesan" rows="3" name="kesan"
                required><?= $pengunjung['kesan']; ?></textarea>
        </div>
        </div>

        <button type="submit" name="ubah" class="btn btn-primary" style="float: right;">Ubah</button>
    </form>
</div>

<?php include 'layout/footer.php'; ?>