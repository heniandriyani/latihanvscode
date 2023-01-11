<?php


$title = 'Detail Pengunjung';

include 'layout/header.php';


$id_pengunjung = (int) $_GET['id_pengunjung'];

$pengunjung = select("SELECT * FROM pengunjung WHERE id_pengunjung = $id_pengunjung")[0];

?>


<div class="container mt-5">
    <h1>Data <?= $pengunjung['nama']; ?>
    </h1>
    <hr>

    <table class="table table-bordered table-striped mt-3">
        <tr>
            <td>Nama</td>
            <td> :
                <?= $pengunjung['nama']; ?>
            </td>
        </tr>

        <tr>
            <td>Nomor HP</td>
            <td> :
                <?= $pengunjung['nomor']; ?>
            </td>
        </tr>

        <tr>
            <td>Kantor / Instansi</td>
            <td> :
                <?= $pengunjung['kantor']; ?>
            </td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td> :
                <?= $pengunjung['alamat']; ?>
            </td>
        </tr>

        <!-- <tr>
            <td width="50%">Foto</td>
            <td>
                <a href="assets/img/">
                    <img src="assets/img/" alt="foto" width="50%">
                </a>
            </td>
        </tr> -->

    </table>

    <a href="index.php" class="btn btn-secondary" style="float: right;">Kembali</a>

</div>


<?php include 'layout/footer.php'; ?>