<?php
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
    <link rel="stylesheet" href="./css/transaksi-kasir.css">
</head>
<body>
<h1 class='title' style="text-align: center;">Transaksi Kasir</h1>
<div class="container-keseluruhan">
<div class="container-input">
    <form action="#">
    <div class="window-kasir2">
    <div>
            <p class="tag">Nama Barang</p>
            <input class = "form" type="name" id="nama-barang" readonly>
        </div>
        <div>
            <p class="tag">Barcode</p>
            <input class = "form" type="name" id="barcode">
        </div>
        <div>
            <p class="tag">Pelanggan</p>
            <select name="" id="pelanggan" class= "form">
                <option value="umum">Umum</option>
                <option value="grosir">Grosir</option>
            </select>
        </div>
        <div>
            <p class="tag">Harga Umum</p>
            <input readonly class = "form" type="name" id="harga-umum">
        </div>
        <div>
            <p class="tag">Harga Grosir</p>
            <input readonly class = "form" type="name" id="harga-grosir">
        </div>
        <div>
            <p class="tag">Jumlah</p>
            <input class="form" type="name" value="1" id="jumlah">
        </div>
        <div>
            <p class="tag">Stok</p>
            <input readonly class="form" type="name" id="stok">
            <input readonly class="form" type="hidden" id="laba">
            <input readonly class="form" type="hidden" id="laba2">
        </div>
        <div>
            <p class="tag">Deskripsi</p>
            <textarea readonly name="" id="deskripsi" cols="10" rows="10" id="deskripsi" class = "form"></textarea>
        </div>
        <div>
            <button class="btn" type="button" id="batal-btn">Batal</button>
        </div>
        <div>
            <button class="btn-affirmative" type="button" id="tambah-btn">Tambah</button>
        </div>
    </div>   
    </form>
    <div class = "window-kasir3">
    <h3 style="color: white;">Harga Total</h3>    
    <h1 style="color: white; font-size: 100px;" id="harga-total">0</h1>
    
</div>
</div>
<div class = "container-table">
    
    <table class="content-table">
      <thead>
        <tr>
        <th>Nama Barang</th>
        <th>Barcode</th>
        <th>Pelanggan</th>
        <th>Harga Satuan</th>
        <th>QTY</th>
        <th>Subtotal</th>
        <th>Stok</th>
        <th>Deskripsi Singkat</th>
        <th>Aksi</th>
        </tr>
      </thead>
    <tbody class="tabel-kasir">
    </table>
    <div class = "container-bawah-tabel">
            <div class="container-bawah-tabel1">
                <form action="">
                    <div>
                        <p style="color: white;">Nama Pekerja :</p>
                        <input class="form" type="text" id="nama-pekerja">
                    </div>
                    <div>
                        <p style="color: white;">Tanggal :</p>
                        <input class="form" type="date">
                    </div>
                </form>
            </div>
            <div class="container-bawah-tabel2">
                    <div class="aksi-bawah">
                    <button class="checkout btn">CheckOut</button>
                    <button class="batal btn">Batal</button>
                    <button class="print btn">Print</button>
                    </div>
            </div>
        </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./js/transaksi-kasir.js"></script>
<script id="script"></script>
</body>
</html>
