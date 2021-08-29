<?php
require "koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM biodata WHERE id='$id'");;
$result = mysqli_fetch_array($query);
?>
<div class="row">
    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
        <form method="POST" id="formEdit">
            <div class="form-group">
                <button id="ButtonBatal" class="btn btn-secondary btn-sm">Kembali</button>
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="hidden" name="id" id="id" value="<?= $result['id']; ?>" />
                <input type="text" name="nama" id="nama" class="form-control" value="<?= $result['nama']; ?>" required />
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <br>
                <label>
                    <input type="radio" name="jk" id="jk" value="Laki-laki" <?php if ($result['jk'] == "Laki-laki") echo "checked"; ?> required />Laki-laki</label>
                <br>
                <label>
                    <input type="radio" name="jk" id="jk" value="Perempuan" <?php if ($result['jk'] == "Perempuan") echo "checked"; ?> required />Perempuan</label>

            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" required><?= $result['alamat']; ?></textarea>
            </div>
            <div class="form-group">
                <button type="submit" id="simpan" name="simpan" class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>