<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/data-transaksi.css">
</head>
<body>
    <?php
    $nama = $_SERVER['SCRIPT_NAME'];
    if ($nama != ''){
        header("Location: ./");
        exit;
    }
?>
<h1 style="text-align: center; color :white">Data Transaksi</h1>
<div class = 'container-flex'>
        <div class='container-tabel'>
            <div class="search">
                <label for="search" style="color: white;">Pencarian : </label>
                <input type="text" class="form" name="search" id="search">
            </div>
            <table class="content-table">
            <thead>
            <tr>
            <th>Nomor Nota</th>
            <th>Total Transaksi</th>
            <th>Jumlah Item Transaksi</th>
            <th>Tanggal Transaksi</th>
            <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                <tr id='.$row["id"].'>
                <td data-target = "nomnor_nota">1950021233</td>
                <td data-target = "total_transaksi">100.000</td>
                <td data-target = "jumlah-item">10</td>
                <td data-target = "tanggal">10-May-2021</td>
                <td style="width: 220px;">
                    <button type="submit" class="btn delete" id="delete"> Delete</button>
                    <button type="submit" class="btn-affirmative lihat" id="lihat"> Lihat</button>
                </td>
                </tr>
            </table>
        </div>
</div>
<div class="modal-window-lihat hidden">
    <button class="close-modal">&times;</button>
    <h1 style="color: white; text-align: center;">Hapus Data</h1>
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
</div>
<div class="modal-window-delete hidden">
    <button class="close-modal delete-close">&times;</button>
    <h1 style="color: white; text-align: center;">Hapus Transaksi ?</h1>
    <p style="color: white;">Apakah anda yakin ingin menghapus transaksi? Setelah dihapus tidak dapat dikembalikan lagi</p>
    <button class="btn-affirmative delete-close">Iya</button>
    <button class="btn delete-close">Tidak</button>
</div>
<div class="overlay hidden"></div>
<script src="./js/data-transaksi.js"></script>
</body>
</html>