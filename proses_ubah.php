<?php
include 'config.php';

$no_trans = $_POST['no_trans'];
$pasienklinik_id = $_POST['pasienklinik_id'];
$tgl = $_POST['tgl'];
$bln = $_POST['bln'];
$thn = $_POST['thn'];
$tanggal_berobat = $thn . '-' . $bln . '-' . $tgl;
$dokter_id = $_POST['dokter_id'];
$keluhan_pasien = $_POST['keluhan_pasien'];
$biaya_adm = $_POST['biaya_adm'];


mysqli_query($conn, "UPDATE berobat SET no_transaksi= '" . $no_trans . "', 
		dokter_id='" . $dokter_id . "', 
		pasienklinik_id='" . $pasienklinik_id . "',
		tanggal_berobat='" . $tanggal_berobat . "',
		keluhan_pasien='" . $keluhan_pasien . "',
		biaya_adm = " . $biaya_adm . "
		WHERE no_transaksi = '" . $no_trans . "'");


header('Location:index.php?hal=data', true, 301);
