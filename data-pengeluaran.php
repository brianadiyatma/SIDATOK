<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/data-pengeluaran.css">
</head>
<body>
    <?php
    $nama = $_SERVER['SCRIPT_NAME'];
    if ($nama != ''){
        header("Location: ./");
        exit;
    }
?>
<h1 style="color: white; text-align:center">Data Pengeluaran</h1>
<div class="flex-bagian1">
    <div class = 'container-flex'>
        
            <div class='container-tabel'>
                <div class="search">
                <label for="search" style="color: white;">Pencarian : </label>
                <input type="text" class="form" name="search" id="search">
                <button class="btn input-data">Masukkan Data</button>
            </div>
            <div id="table">
            </div>
    </div>
</div>
<div class="modal-window-lihat hidden">
    <button class="close-modal">&times;</button>
    <h1 style="color: white; text-align: center;">Edit Data</h1>
    <form id="edit">
        <div>
        <label for="date">Tanggal :</label>
        <input class="form" type="date" id="dateEdit" name="tgl">
        </div>
        <div>
        <label for="keterangan">Keterangan :</label>
        <input class="form" type="text" id="keteranganEdit" name="ket">
        </div>
        <div>
        <label for="nominal">Nominal :</label>
        <input class="form" type="number" id="numberEdit" name="nominalEdit">
        <input type="hidden" name="id" id="userId">
        </div>
        <div>
            <input type="submit" value="Edit" class="btn close-modal" id="inputedit">
        </div>
    </form>
</div>
<div class="modal-window-input hidden">
    <button class="close-modal-input">&times;</button>
    <h1 style="color: white; text-align: center;">Masukkan Data</h1>
    <form action="" id="masuk">
        <div>
        <label for="date">Tanggal :</label>
        <input class="form" type="date" id="date" name="tgl">
        </div>
        <div>
        <label for="keterangan">Keterangan :</label>
        <input class="form" type="text" id="keterangan" name="ket">
        </div>
        <div>
        <label for="nominal">Nominal :</label>
        <input class="form" type="number" id="number" name="nominal">
        <input type="hidden" name="insert" value="insertPengeluaran">
        </div>
        <div>
            <input type="submit" value="Masukkan" class="btn close-modal-input" id="inputmasuk">
        </div>
    </form>
</div>
<div class="modal-window-delete hidden">
    <button class="close-modal delete-close">&times;</button>
    <h1 style="color: white; text-align: center;">Hapus Transaksi ?</h1>
    <p style="color: white;">Apakah anda yakin ingin menghapus transaksi? Setelah dihapus tidak dapat dikembalikan lagi</p>
    <button class="btn-affirmative delete-close" id='iya'>Iya</button>
    <button class="btn delete-close">Tidak</button>
</div>
<div class="overlay hidden"></div>
<script src="./js/data-pengeluaran.js"></script>
</body>
</html>