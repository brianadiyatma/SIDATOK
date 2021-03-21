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
    <link rel="stylesheet" href="./css/import-manual.css">
</head>
<body>
    <div class="margin-helper">
    <div class="container-input">
    <h1>IMPORT MANUAL</h1>
    <form method="POST" id="form-import" action="insert.php">
        <div class="import-barang">
            <div class="splitter-flex">
                <div class="Nama-barang">
                    <p>Nama Barang</p>
                    <input type="text" class="form" name="nama_barang" required>
                </div>
                <div class="barcode">
                    <p>Barcode</p>
                    <input type="number" class="form" name="barcode" required>
                </div>
                <div class="Harga-beli">
                    <p>Harga Beli</p>
                    <input type="text" class="form" name="harga_beli" required>
                </div>
                <div class="harga-jual">
                    <p>Harga Jual</p>
                    <input type="text" class="form" name="harga_jual" required>
                </div>
                <div class="expired">
                    <p>Expired</p>
                    <input type="date" class="form" name="expired" required>
                </div>
            </div>
            <div class="splitter-flex2">
                <div class="harga-grosir">
                    <p>Harga Grosir</p>
                    <input type="text" class="form" name="harga_grosir" required>
                </div>
                <div class="jenis-barang">
                    <p>jenis barang</p>
                    <input type="text" class="form" name="jenis_barang" required>
                </div>
                <div class="jumlah-barang">
                    <p>Jumlah Barang</p>
                    <input type="text" class="form" name="jumlah_barang" required>
                </div>
                <div class="deskripsi-singkat">
                    <p>Deskripsi Singkat</p>
                    <textarea type="text" class="form" name="deskripsi" required></textarea>
                </div>
                <input type="submit" class="btn">
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="./js/import-barang.js"></script>
    </form>
    </div>
    </div>
</body>
</html>