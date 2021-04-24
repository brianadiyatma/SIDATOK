<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/crud.css">
</head>
<body>
    <?php
    $nama = $_SERVER['SCRIPT_NAME'];
    if ($nama != ''){
        header("Location: ./");
        exit;
    }
?>
<div class="title"><h1>Crud Tabel Inventaris</h1></div>
<div class="crud">
<div class="search">
    <h1 style="color: white;"></h1>
    <label for="search" style="color: white;">Pencarian : </label>
    <input type="text" class="form" name="search">
</div>
<table style="width:100%">
  <table class="content-table">
  <thead>
    <tr>
    <th>Nama Barang</th>
    <th>Barcode</th>
    <th>Harga Beli</th>
    <th>Harga Jual</th>
    <th>Harga Grosir</th>
    <th>Expired</th>
    <th>Jenis Barang</th>
    <th>Jumlah Barang</th>
    <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>Aqua 1500Ml</td>
        <td>150842458</td>
        <td>4500</td>
        <td>5000</td>
        <td>4700</td>
        <td>12/05/2025</td>
        <td>Minuman</td>
        <td>50</td>
        <td>
           <button type="submit" class="btn-affirmative"> Edit</button>
            <button type="submit" class="btn"> Delete</button>
        </td>
    </tr>
    <tr class="active-row">
        <td>Aqua 1500Ml</td>
        <td>150842458</td>
        <td>4500</td>
        <td>5000</td>
        <td>4700</td>
        <td>12/05/2025</td>
        <td>Minuman</td>
        <td>50</td>
         <td>
            <button type="submit" class="btn-affirmative"> Edit</button>
            <button type="submit" class="btn" > Delete</button>
        </td>
    </tr>
    <tr>
        <td>Aqua 1500Ml</td>
        <td>150842458</td>
        <td>4500</td>
        <td>5000</td>
        <td>4700</td>
        <td>12/05/2025</td>
        <td>Minuman</td>
        <td>50</td>
         <td>
            <button type="submit" class="btn-affirmative"> Edit</button>
            <button type="submit" class="btn"> Delete</button>
        </td>
    </tr>
  </tbody>
</table>
</table>
<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a href="#" class="active">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>

</body>
</html>