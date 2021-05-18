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
<h1 class='title'>Transaksi Kasir</h1>
<div class="container-keseluruhan">
<div class="container-input">
    <form action="#">
    <div class="window-kasir2">
        
    </div>   
    </form>
    <div class = "window-kasir3">
    <h3 style="color: white;">Harga Total</h3>    
    <h1 style="color: white; font-size: 100px;">69000</h1>
    
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
    <tbody>
            <tr id='.$row["id"].'>
            <td data-target = "nama_barang">Rokok 76</td>
            <td data-target = "barcode">54687523574</td>
            <td data-target = "pelanggan">Grosir</td>
            <td data-target = "harga-satuan">15000</td>
            <td data-target = "jumlah-beli">2</td>
            <td data-target = "subtotal">30000</td>
            <td data-target = "jumlah_barang">100</td>
            <td data-target = "deskripsi" style="width: 100px;">Minuman Segar Berhadiah</td>
            <td style="width: 220px;">
                <button type="submit" class="btn delete" id="delete" data-id='.$row["id"].'> Delete</button>
            </td>
            </tr>
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
<div class="modal-lihat hidden">
      <button class="close-modal">&times;</button>
      <h1>Barang Transaksi</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./js/transaksi-kasir.js"></script>
<script id="script"></script>
</body>
</html>
