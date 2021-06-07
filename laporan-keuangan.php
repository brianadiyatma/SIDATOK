<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/laporan-keuangan.css">
</head>
<body>
    <?php
    $nama = $_SERVER['SCRIPT_NAME'];
    if ($nama != ''){
        header("Location: ./");
        exit;
    }
?>
<h1 style="color: white; text-align:center">Laporan Keuangan</h1>
<div class="flex-bagian1">
    <div class="search-container">
        <form action="">
            <label for="tanggal-laporan" style="color:white">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal-laporan" class="form">
            <div>
            <input type="button" value="Cari" class="btn">
            </div>    
        </form>
    </div>
</div>
<div class="flex-bagian2">
    <div class="container-pemasukkan">
    <h2 style="color: white;">Tabel Pemasukkan</h2>
    <div id="table-pem"></div>
    </div>
    <div class="container-pengeluaran">
    <h2 style="color: white;">Tabel Pengeluaran</h2>
    <div id="table-peng"></div>
    </div>
</div>
<script src="./js/laporan.js"></script>
</body>
</html>