<?php
    $conn = mysqli_connect('localhost','root','','sidatok');
    $result = mysqli_query($conn, "SELECT * FROM data_barang");
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
    <link rel="stylesheet" href="./css/crud.css">
</head>
<body>
 <div class="modal hidden">
      <button class="close-modal">&times;</button>
      <h1>Hapus Item</h1>
      <p>
        Item yang sudah dihapus tidak bisa dikembalikan kembali apakah anda yakin ingin menghapus ?
      </p>
            <button type="button" class="btn-affirmative iya" id="iya">Iya</button>
            <button type="button" class="btn tidak" id= "tidak">Tidak</button>
    </div>
        <div class="overlay hidden"></div>
 <div class="modal-2 hidden">
      <button class="close-modal">&times;</button>
      <h1>EDIT DATA</h1>
    <form id="form-edit">
        <div class="import-barang">
            <div class="splitter-flex">
                <div class="Nama-barang">
                    <p>Nama Barang</p>
                    <input type="text" id="Nama-barang"class="form" name="nama_barang">
                </div>
                <div class="barcode">
                    <p>Barcode</p>
                    <input type="number" id="barcode" class="form" name="barcode">
                </div>
                <div class="Harga-beli">
                    <p>Harga Beli</p>
                    <input type="text" id="Harga-beli" class="form" name="harga_beli">
                </div>
                <div class="harga-jual">
                    <p>Harga Jual</p>
                    <input type="text" id="harga-jual" class="form" name="harga_jual">
                </div>
                <div class="expired">
                    <p>Expired</p>
                    <input type="date" id="expired" class="form" name="expired">
                </div>
            </div>
            <div class="splitter-flex2">
                <div class="harga-grosir">
                    <p>Harga Grosir</p>
                    <input type="text" class="form" name="harga_grosir" id="harga-grosir">
                </div>
                <div class="jenis-barang">
                    <p>jenis barang</p>
                    <input type="text" class="form" name="jenis_barang" id="jenis-barang">
                </div>
                <div class="jumlah-barang">
                    <p>Jumlah Barang</p>
                    <input type="text" class="form" name="jumlah_barang" id="jumlah-barang">
                    <input type="hidden" class="form" name="jumlah_barang" id="userID">
                </div>
                <div class="deskripsi-singkat">
                    <p>Deskripsi Singkat</p>
                    <textarea type="text" class="form" name="deskripsi" id="deskripsi-singkat"></textarea>
                </div>
                <input type="submit" value="Edit" class="btn-affirmative edit" id="edit">
            <button type="button" class="btn tidak" id= "batal">Batal</button>
            </div>
        </div>
    </form>
    </div>
        <div class="overlay-2 hidden"></div>
<div class="title"><h1>CRUD Tabel Inventaris</h1></div>
<div class="crud">
<div class="search">
    <h1 style="color: white;"></h1>
    <label for="search" style="color: white;">Pencarian : </label>
    <input type="text" class="form" name="search" id="search">
</div>
<div id="tabelcrud">

</div>
<div class="pagination">

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./js/crud.js"></script>
</body>
</html>
