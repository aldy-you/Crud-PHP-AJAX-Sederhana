<button id="ButtonTambah" class="btn btn-primary btn-sm">Tambah</button>
<br>
<br>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require "koneksi.php";
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM biodata");
        while ($result = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td>
                    <?= $no++; ?>
                </td>
                <td>
                    <?= $result['nama']; ?>
                </td>
                <td>
                    <?= $result['jk']; ?>
                </td>
                <td>
                    <?= $result['alamat']; ?>
                </td>
                <td>
                    <button id="ButtonEdit" class="btn btn-warning btn-sm" value="<?= $result['id']; ?>">Edit</button>
                    <button id="ButtonHapus" class="btn btn-danger btn-sm" onclick="return conf('Apakah Anda yakin ingin hapus data?')" value="<?= $result['id']; ?>">Hapus</button>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>