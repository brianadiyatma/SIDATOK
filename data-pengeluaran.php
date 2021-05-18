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
            </div>
                <table class="content-table">
                <thead>
                <tr>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Nominal</th>
                <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <tr id='.$row["id"].'>
                    <td data-target = "tanggal">15-May-2021</td>
                    <td data-target = "keterangan">Kulakan makanan Ringan</td>
                    <td data-target = "Nominal">100.000</td>
                    <td style="width: 220px;">
                        <button type="submit" class="btn delete" id="delete" data-id='.$row["id"].'> Delete</button>
                        <button type="submit" class="btn-affirmative edit" id="edit" data-id='.$row["id"].'> Edit</button>
                    </td>
                    </tr>
                </table>
            </div>
    </div>
</div>
</body>
</html>