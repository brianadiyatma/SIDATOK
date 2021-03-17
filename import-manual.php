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
    <form action="#">
        <div class="import-barang">
            <div class="splitter-flex">
            <div class="Nama-barang">
                <p>Nama Barang</p>
                <input type="text" class="form">
            </div>
            <div class="barcode">
                <p>Barcode</p>
                <input type="number" class="form">
            </div>
            <div class="Harga-beli">
                <p>Harga Beli</p>
                <input type="text" class="form">
            </div>
            <div class="harga-jual">
                <p>Harga Jual</p>
                <input type="text" class="form">
            </div>
            <div class="expired">
                <p>Expired</p>
                <input type="date" class="form">
            </div>
            </div>
            <div class="splitter-flex2">
            <div class="harga-grosir">
                <p>Harga Grosir</p>
                <input type="text" class="form">
            </div>
            <div class="jenis-barang">
                <p>jenis barang</p>
                <input type="text" class="form">
            </div>
            <div class="jumlah-barang">
                <p>Jumlah Barang</p>
                <input type="text" class="form">
            </div>
            <div class="deskripsi-singkat">
                <p>Deskripsi Singkat</p>
                <textarea type="text" class="form"></textarea>
            </div>
            </div>
            </div>
            <input type="submit" class="btn" name="add-item" value="Tambah">
    </form>
    </div>
</body>
</html>