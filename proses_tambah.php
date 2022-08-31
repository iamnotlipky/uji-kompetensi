<?php
include 'config.php';

$no_trans = $_POST['no_trans'];
$pasienklinik_id = $_POST['pasienklinik_id'];
$tgl = $_POST['tgl'];
$bln = $_POST['bln'];
$thn = $_POST['thn'];
$tanggal_berobat = $thn . '-' . $bln . '-' . $tgl;
$dokter_id	= $_POST['dokter_id'];
$keluhan_pasien = $_POST['keluhan_pasien'];
$biaya_adm = $_POST['biaya_adm'];


mysqli_query($conn, "INSERT INTO berobat VALUES(
		'" . $no_trans . "',
		'" . $pasienklinik_id . "',
		'" . $tanggal_berobat . "',
		'" . $dokter_id . "',
		'" . $keluhan_pasien . "',
		" . $biaya_adm . "
		)");


header('Location:index.php?hal=data', true, 301);
