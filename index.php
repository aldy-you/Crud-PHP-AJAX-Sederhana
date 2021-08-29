<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Halaman Utama</title>
</head>

<body>
    <div class="mt-4">
        <h4 class="text-center mb-3">CRUD PHP AJAX Sederhana with JQuery Library</h4>
        <!-- Data -->
        <div class="container">
            <div id="konten"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            //load data saat aplikasi dijalankan 
            loadData();

            //Load form add
            $("#konten").on("click", "#ButtonTambah", function() {
                $.ajax({
                    url: 'tambah.php',
                    type: 'get',
                    success: function(data) {
                        $('#konten').html(data);
                    }
                });
            });

            //Load form edit dengan parameter id
            $("#konten").on("click", "#ButtonEdit", function() {
                var id = $(this).attr("value");
                $.ajax({
                    url: 'edit.php',
                    type: 'get',
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $('#konten').html(data);
                    }
                });
            });

            //tombol kembali
            $("#konten").on("click", "#ButtonBatal", function() {
                loadData();
            });

            //simpan data 
            $("#konten").on("submit", "#FormTambah", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'aksi.php?proses=simpan',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });

            //edit data
            $("#konten").on("submit", "#FormEdit", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'aksi.php?proses=edit',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });

            //hapus data berdasarkan id
            $("#konten").on("click", "#ButtonHapus", function() {
                var id = $(this).attr("value");
                $.ajax({
                    url: 'aksi.php?proses=hapus',
                    type: 'post',
                    data: {
                        id: id
                    },
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });
        })

        function loadData() {
            $.ajax({
                url: 'data.php',
                type: 'get',
                success: function(data) {
                    $('#konten').html(data);
                }
            });
        }
    </script>
</body>

</html>