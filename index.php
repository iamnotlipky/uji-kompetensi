<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Ujikom Klinik Ade firman</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-success py-3">
        <div class="container-fluid">
            <a class="navbar-brand mx-auto" href="index.php">
                <h3>APLIKASI PENGELOLAAN KLINIK ADE FIRMAN AS</h3>
            </a>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3 my-3">
                <div class="card text-dark" st"yle="max-width: 18rem;">
                    <div class="card-header bg-danger text-light">
                        <h5 class="mt-2" align="center">MENU</h5>
                    </div>
                    <div class="card-body">
                        <a href="index.php?hal=tambah" class="btn btn-warning ms-3">Form</a><br>
                        <a href="#" class="btn btn-warning ms-3 mt-3">Data Pasien</a><br>
                        <a href="#" class="btn btn-warning ms-3 mt-3">Data Dokter</a><br>
                        <a href="#" class="btn btn-warning ms-3 mt-3">Data Poli</a><br>
                        <a href="index.php?hal=data" class="btn btn-warning ms-3 mt-3">Berobat</a>
                    </div>
                </div>

                <div class="card text-dark mt-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <a href="index.php?hal=laporan" class="btn btn-success ms-3">Laporan</a><br>
                        <a href="#" class="btn btn-success ms-3 mt-3">List Dokter</a><br>
                        <a href="#" class="btn btn-success ms-3 mt-3">List Pasien</a><br>
                        <a href="#" class="btn btn-success ms-3 mt-3">List Data Berobat</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 my-3">
                <?php
                include 'config.php';
                $hal = @$_GET['hal'];

                if ($hal == 'data') {
                    include 'menu_listberobat.php';
                } else if ($hal == 'laporan') {
                    include 'menu_laporan.php';
                } else if ($hal == 'tambah') {
                    include 'klinik_tambah.php';
                } else if ($hal == 'ubah') {
                    include 'klinik_ubah.php';
                }
                ?>
            </div>

        </div>

    </div>

    <script src="dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>