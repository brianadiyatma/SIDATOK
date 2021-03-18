<?php 
require_once 'connect.php';
if(!isset($_SESSION["login"])){
    belumLogin();
}
// if (isset($_POST["add-item"])){
//     //header("Location: sidebar.php");
    
//     echo "<script>
//     $(document).ready(function () {
//         //Laman Pertama
//         $('#content').load('import-manual.php ');
//     });
//             </script>";
//     // if (tambahBarang($_POST) > 0){

//     // }
// }
// ?>
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
    <header> <h1>IMPORT MANUAL</h1></header>
    <div class="container-input">
    <form action="" method="POST">
        <div class="import-barang">
            <div class="splitter-flex">
                <div class="Nama-barang">
                    <p>Nama Barang</p>
                    <input type="text" class="form" name="nama_barang">
                </div>
                <div class="barcode">
                    <p>Barcode</p>
                    <input type="number" class="form" name="barcode">
                </div>
                <div class="Harga-beli">
                    <p>Harga Beli</p>
                    <input type="text" class="form" name="harga_beli">
                </div>
                <div class="harga-jual">
                    <p>Harga Jual</p>
                    <input type="text" class="form" name="harga_jual">
                </div>
                <div class="expired">
                    <p>Expired</p>
                    <input type="date" class="form" name="expired">
                </div>
            </div>
            <div class="splitter-flex2">
                <div class="harga-grosir">
                    <p>Harga Grosir</p>
                    <input type="text" class="form" name="harga_grosir">
                </div>
                <div class="jenis-barang">
                    <p>jenis barang</p>
                    <input type="text" class="form" name="jenis_barang">
                </div>
                <div class="jumlah-barang">
                    <p>Jumlah Barang</p>
                    <input type="text" class="form" name="jumlah_barang">
                </div>
                <div class="deskripsi-singkat">
                    <p>Deskripsi Singkat</p>
                    <textarea type="text" class="form" name="deskripsi"></textarea>
                </div>
            </div>
        </div>
        <input type="submit" class="btn" name="add-item" value="Tambah">
    </form>
    </div>
</body>
</html>