<div class="text-center">
    <h3>Laporan Data Berobat Klinik</h3>
</div>

<a href="index.php?hal=tambah">
    <input class="btn btn-success mb-3" type="submit" name="submit" value="Tambah">
</a>

<table class="table">

    <thead>
        <tr>
            <th scope="col">No Transaksi</th>
            <th scope="col">Pasien ID</th>
            <th scope="col">Nama Pasien</th>
            <th scope="col">Usia</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Keluhan</th>
            <th scope="col">Nama Poli</th>
            <th scope="col">Dokter</th>
            <th scope="col">Biaya Administrasi</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $qr_servis = mysqli_query($conn, "SELECT * FROM berobat as ts
							  INNER JOIN pasien as pl ON ts.pasienklinik_id=pl.pasienklinik_id
							  INNER JOIN dokter as tk ON ts.dokter_id=tk.dokter_id
							  INNER JOIN poli as bt ON tk.poli_id=bt.poli_id ORDER BY no_transaksi ASC");
        while ($rc_servis = mysqli_fetch_array($qr_servis)) {
        ?>

            <tr>
                <td><?= $rc_servis['no_transaksi']; ?></td>
                <td><?= $rc_servis['pasienklinik_id']; ?></td>
                <td><?= $rc_servis['nama_pasienklinik']; ?></td>
                <td>
                    <?php
                    $tanggal = $rc_servis['tanggal_lahirpasien'];
                    $berobat = $rc_servis['tanggal_berobat'];
                    echo date("Y", strtotime($berobat)) - date("Y", strtotime($tanggal));
                    ?>
                </td>
                <td><?= $rc_servis['jenis_kelaminpasien'] ?></td>
                <td><?= $rc_servis['keluhan_pasien']; ?></td>
                <td><?= $rc_servis['nama_poli']; ?></td>
                <td><?= $rc_servis['nama_dokter']; ?></td>
                <td><?= $rc_servis['biaya_adm']; ?></td>
            </tr>

        <?php
        }
        ?>
    </tbody>

</table>