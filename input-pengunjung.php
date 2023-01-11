<?php

include 'config/app.php';

$title = 'Tambah Pengunjung';

// check tombol Simpan di tekan
if (isset($_POST['input'])) {
    if (create_pengunjung($_POST) > 0) {
        echo "<script>
        alert('Data Pengunjung Berhasil di Tambahkan');
        document.location.href = 'input-pengunjung.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Pengunjung Gagal di Tambahkan');
        document.location.href = 'input-pengunjung.php';
        </script>";
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



</head>

<body>

    <!-- Section: Design Block -->
    <section>

        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
            <div class="container">
                <div class="row gx-lg-5 align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h1 class="my-5 display-4 fw-bold ls-tight">
                            Selamat Datang Di <br />
                            <span class="text-primary">SMKN 2 SUMEDANG</span>
                        </h1>
                        <p style="color: hsl(217, 10%, 50.8%)">
                        <h2 class="text-primary">Visi Sekolah</h2>
                        Terwujudnya sumber daya manusia yang unggul di era globalisasi pada tahun 2025

                        <h2 class="text-primary">Misi Sekolah</h2>
                        Meningkatkan keimanan, ketaqwaan dan karakter seluruh warga sekolah, <br>
                        Meningkatkan profesionalisme Sumber Daya Manusia,<br>
                        Pola pembelajaran yang mengarah ke Life Skill dalam bidang Bisnis Manajemen dan Teknologi
                        informasi, <br>
                        Menumbuhkan pola kemitraan baik dengan dunia kerja maupun dengan masyarakat pada umumnya.

                        </p>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card">
                            <div class="card-body py-5 px-md-5">
                                <form action="" method="POST">

                                    <!-- Judul -->
                                    <h2 class="text-center mb-5 text-uppercase">form input data</h2>
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
                                        <input type="text" class="form-control" id="keperluan" name="keperluan"
                                            required>
                                    </div>

                                    <div class="row">
                                        <!-- alamat -->
                                        <div class="mb-3 col-6">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea class="form-control" id="alamat" rows="3" name="alamat"
                                                required></textarea>
                                        </div>


                                        <!-- kesan -->
                                        <div class="mb-3 col-6">
                                            <label for="kesan" class="form-label">Kesan & Pesan</label>
                                            <textarea class="form-control" id="kesan" rows="3" name="kesan"
                                                required></textarea>
                                        </div>
                                    </div>




                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block mb-4" name="input">
                                        Simpan
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Section: Design Block -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>