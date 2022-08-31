<div class="text-center">
    <h3>Form Berobat</h3>
</div>

<div class="mt-3">
    <form action="proses_tambah.php" method="POST">
        <table cellpadding="10px" cellspacing="0">
            <tr>
                <td width="20%">No Transaksi</td>
                <td>
                    <input type="text" name="no_trans" maxlength="5">
                </td>
            </tr>
            <tr>
                <td> Nama Pasien</td>
                <td>
                    <?php
                    $qr_pl = mysqli_query($conn, "SELECT * FROM pasien");
                    ?>

                    <select class="form_select" name="pasienklinik_id">
                        <option selected>-- Pilih Pasien --</option>
                        <?php
                        while ($rc_pl = mysqli_fetch_array($qr_pl)) {
                        ?>
                            <option value="<?= $rc_pl['pasienklinik_id']; ?>">
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
                        <option selected>-- Pilih Tanggal --</option>
                        <?php
                        for ($tgl = 1; $tgl <= 31; $tgl++) {
                        ?>
                            <option value="<?= $tgl; ?>"><?= $tgl; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    Bulan
                    <select name="bln">
                        <option selected>-- Pilih Bulan --</option>
                        <?php
                        $s_bln = array("Januari", "FebruarI", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                        for ($bln = 1; $bln <= 12; $bln++) {
                        ?>
                            <option value="<?= $bln; ?>"><?= $s_bln[$bln - 1]; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    Tahun
                    <input type="text" name="thn">
                </td>
            </tr>
            <tr>
                <td>Nama Dokter</td>
                <td>

                    <?php
                    $qr_tk = mysqli_query($conn, "SELECT * FROM dokter");
                    ?>
                    <select name="dokter_id">
                        <option selected>-- Pilih Dokter --</option>
                        <?php
                        while ($rc_tk = mysqli_fetch_array($qr_tk)) {

                        ?>
                            <option value="<?= $rc_tk['dokter_id']; ?>">
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
                <td><input type="text" name="keluhan_pasien"></td>
            </tr>
            <tr>
                <td>Biaya Administrasi</td>
                <td><input type="text" name="biaya_adm"></td>
            </tr>
            <tr>
                <td><input class="btn btn-primary" type="submit" name="submit" value="Submit"> <input class="btn btn-danger" type="reset" name="reset" value="Clear"></td>
            </tr>
        </table>
    </form>
</div>