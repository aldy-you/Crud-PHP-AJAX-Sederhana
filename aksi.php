<?php
require "koneksi.php";

switch ($_GET['proses']) {

    case 'simpan':

        $a = $_POST['nama'];
        $b = $_POST['jk'];
        $c = $_POST['alamat'];

        $query = mysqli_query($koneksi, "INSERT INTO biodata(nama, jk, alamat) VALUES('$a', '$b', '$c')");
        if ($query) {
            echo "Data berhasil disimpan";
        }
        break;

    case 'edit':

        $a = $_POST['IdMhsw'];
        $b = $_POST['nama'];
        $c = $_POST['jk'];
        $d = $_POST['alamat'];


        $query = mysqli_query($koneksi, "UPDATE biodata SET nama='$b', jk='$c', alamat='$d'  WHERE id='$a'");
        if ($query) {
            echo "Data berhasil diubah";
        }
        break;

    case 'hapus':

        $id = $_POST['id'];
        $query = mysqli_query($koneksi, "DELETE FROM biodata WHERE id='$id'");
        if ($query) {
            echo "Data berhasil dihapus";
        }
        break;
}
