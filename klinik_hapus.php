<?php
include 'config.php';
$no_trans = $_GET['no'];
mysqli_query($conn, "DELETE FROM berobat WHERE no_transaksi='" . $no_trans . "'");
header('Location:index.php?hal=data', true, 301);
