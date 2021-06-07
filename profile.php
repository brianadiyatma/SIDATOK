<?php 
require_once 'connect.php';
if(!isset($_SESSION["login"])){
    belumLogin();
}
    $nama = $_SERVER['SCRIPT_NAME'];
    if ($nama != ''){
        header("Location: ./");
        exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/profile.css">
</head>
<body>
    <div class="margin-helper">
    <div class="container-input" style="color: #27293D;">
    <h1>PROFIL</h1>
    <form method="POST" id="form-import" action="" enctype="multipart/form-data">
        <div class="import-barang">
            <div class="splitter-flex">
            <div class="foto">

            </div>
                <div class="expired">
                    <p>Upload Foto</p>
                    <input type="file" id="img" class="form" name="gambar" accept="image/*">
                    <input type="submit" class="btn" value="Tambah"> 
                    <input type="hidden" name = "aksi" value = "upload">
                        </form>
                </div>
            </div>
            <div class="splitter-flex2">
                    <p>Nama</p>
                    <input type="text" class="form" name="harga_grosir" id="nama" readonly>
                    <p>Username</p>
                    <input type="text" class="form" name="jenis_barang" id="username" readonly>
                    <p>Role</p>
                    <input type="text" class="form" name="jumlah_barang" id="role" readonly>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="./js/profile.js"></script>
    </div>
    </div>
</body>
</html>