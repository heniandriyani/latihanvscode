<?php

$title = 'Tambah Pengunjung';

include 'layout/header.php';

// check tombol Simpan di tekan
if (isset($_POST['tambah'])) {
    if (create_pengunjung($_POST) > 0) {
        echo "<script>
        alert('Data Pengunjung Berhasil di Tambahkan');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Pengunjung Gagal di Tambahkan');
        document.location.href = 'data_buku.php';
        </script>";
    }
}

?>


<div class="container mt-5">
    <h1>Tambah Pengunjung</h1>
    <hr>

    <form action="" method="post">

        <div class="row">
            <!-- nama -->
            <div class="mb-3 col-6">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <!-- nomor -->
            <div class="mb-3 col-6">
                <label for="nomor" class="form-label">Telepon</label>
                <input type="number" class="form-control" id="nomor" name="nomor" required>
            </div>
        </div>

        <!-- kantor -->
        <div class="mb-3">
            <label for="nomor" class="form-label">Kantor / Instansi</label>
            <input type="text" class="form-control" id="kantor" name="kantor" required>
        </div>

        <!-- keperluan -->
        <div class="mb-3">
            <label for="nomor" class="form-label">Keperluan</label>
            <input type="text" class="form-control" id="keperluan" name="keperluan" required>
        </div>

        <div class="row">
            <!-- alamat -->
            <div class="mb-3 col-6">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" rows="3" name="alamat" required></textarea>
            </div>


            <!-- kesan -->
            <div class="mb-3 col-6">
                <label for="kesan" class="form-label">Kesan & Pesan</label>
                <textarea class="form-control" id="kesan" rows="3" name="kesan" required></textarea>
            </div>
        </div>


        <button type="submit" name="tambah" class="btn btn-primary" style="float: right;">Simpan</button>
    </form>
</div>

<?php include 'layout/footer.php'; ?>