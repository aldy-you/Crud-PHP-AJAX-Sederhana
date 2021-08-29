<div class="row">
    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
        <form method="POST" id="FormTambah">
            <div class="form-group">
                <button id="ButtonBatal" class="btn btn-secondary btn-sm">Kembali</button>
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" required autofocus />
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <br>
                <label>
                    <input type="radio" name="jk" id="jk" value="Laki-laki" required /> Laki-laki</label>
                <br />
                <label>
                    <input type="radio" name="jk" id="jk" value="Perempuan" required /> Perempuan</label>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" id="simpan" name="simpan" class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>