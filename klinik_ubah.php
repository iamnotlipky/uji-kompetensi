<div class="text-center">
    <h3>Edit Data Berobat</h3>
</div>

<?php
$no_trans = $_GET['no'];
$qr_servis = mysqli_query($conn, "SELECT * FROM berobat WHERE no_transaksi = '" . $no_trans . "' ");
while ($rc_servis = mysqli_fetch_array($qr_servis)) {
    $pasienklinik_id = $rc_servis['pasienklinik_id'];
    $tanggal_berobat = $rc_servis['tanggal_berobat'];
    $tgl_srv = explode("-", $tanggal_berobat);
    $dokter_id = $rc_servis['dokter_id'];
    $keluhan_pasien = $rc_servis['keluhan_pasien'];
    $biaya_adm = $rc_servis['biaya_adm'];
}
?>

<div class="mt-3">
    <form action="proses_ubah.php" method="POST">
        <table cellpadding="10px" cellspacing="0">
            <tr>
                <td width="20%">No Transaksi</td>
                <td>
                    <input type="text" name="no_trans" maxlength="5" value="<?= $no_trans ?>">
                </td>
            </tr>
            <tr>
                <td>Nama Pasien</td>
                <td>
                    <?php
                    $qr_pl = mysqli_query($conn, "SELECT * FROM pasien");
                    ?>
                    <select name="pasienklinik_id">
                        <?php
                        while ($rc_pl = mysqli_fetch_array($qr_pl)) {
                            if ($pasienklinik_id == $rc_pl['pasienklinik_id']) {
                                $slc_pl = 'selected';
                            } else {
                                $slc_pl = '';
                            }

                        ?>
                            <option <?= $slc_pl; ?> value="<?= $rc_pl['pasienklinik_id']; ?>">
                                <?= $rc_pl['nama_pasienklinik']; ?>

                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tanggal Berobat</td>
                <td>
                    <select name="tgl">
                        <?php
                        for ($tgl = 1; $tgl <= 31; $tgl++) {
                            if ($tgl_srv[2] == $tgl) {
                                $slc_tgl = 'selected';
                            } else {
                                $slc_tgl = '';
                            }
                        ?>
                            <option <?= $slc_tgl; ?> value="<?= $tgl; ?>"><?= $tgl; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    Bulan
                    <select name="bln">
                        <?php
                        $s_bln = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                        for ($bln = 1; $bln <= 12; $bln++) {
                            if ($tgl_srv[1] == $bln) {
                                $slc_bln = 'selected';
                            } else {
                                $slc_bln = '';
                            }
                        ?>
                            <option <?= $slc_bln; ?> value="<?= $bln; ?>"><?= $s_bln[$bln - 1]; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    Tahun
                    <input type="text" name="thn" value="<?= $tgl_srv[0]; ?>" <?= $tgl_srv[0]; ?>>
                </td>
            </tr>
            <tr>
                <td>Nama Dokter</td>
                <td>
                    <?php
                    $qr_tk = mysqli_query($conn, "SELECT * FROM dokter");
                    ?>
                    <select name="dokter_id">
                        <?php
                        while ($rc_tk = mysqli_fetch_array($qr_tk)) {
                            if ($dokter_id == $rc_tk['dokter_id']) {
                                $slc_tk = 'selected';
                            } else {
                                $slc_tk = '';
                            }

                        ?>
                            <option <?= $slc_tk; ?> value="<?= $rc_tk['dokter_id']; ?>">
                                <?= $rc_tk['nama_dokter']; ?>

                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Keluhan</td>
                <td><input type="text" name="keluhan_pasien" value="<?= $keluhan_pasien; ?>"></td>
            </tr>
            <tr>
                <td>Biaya Administrasi</td>
                <td><input type="text" name="biaya_adm" value="<?= $biaya_adm; ?>"></td>
            </tr>
            <tr>
                <td><input class="btn btn-primary" type="submit" name="submit" value="Submit"> <input class="btn btn-danger" type="reset" name="reset" value="Clear"></td>
            </tr>
        </table>
    </form>
</div>