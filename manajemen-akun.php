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
<h1 style="color: white; text-align:center">Manajemen Akun</h1>
<div class="flex-bagian1">
    <div class = 'container-flex'>
        
            <div class='container-tabel'>
                <div class="search">
                <label for="search" style="color: white;">Pencarian : </label>
                <input type="text" class="form" name="search" id="search">
                <button class="btn input-data">Masukkan Data</button>
            </div>
                <table class="content-table">
                <thead>
                <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>Foto</th>
                <th style="width: 100px;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <tr id='.$row["id"].'>
                    <td data-target = "Nama">Brian Adiyatma</td>
                    <td data-target = "email">uwu.uwu@uwumail.com</td>
                    <td data-target = "username">brian123</td>
                    <td data-target = "password">123456</td>
                    <td data-target = "foto" ><img style="width: 100px;" src="./assets/img/profil/cat.PNG" alt=""></td>
                    <td style="width: 220px;">
                        <button type="submit" class="btn delete" id="delete"> Delete</button>
                        <button type="submit" class="btn-affirmative lihat"> Edit</button>
                    </td>
                    </tr>
                </table>
            </div>
    </div>
</div>
<div class="modal-window-lihat hidden">
    <button class="close-modal">&times;</button>
    <h1 style="color: white; text-align: center;">Edit Data</h1>
    <form action="">
        <div>
        <label for="date">Nama :</label>
        <input class="form" type="date" id="date">
        </div>
        <div>
        <label for="keterangan">Email :</label>
        <input class="form" type="text" id="keterangan">
        </div>
        <div>
        <label for="nominal">Username :</label>
        <input class="form" type="number" id="number">
        </div>
        <div>
        <label for="nominal">Password :</label>
        <input class="form" type="password" id="number">
        </div>
        <div>
            <input type="button" value="Edit" class="btn close-modal" id="edit-form-btn">
        </div>
    </form>
</div>
<div class="modal-window-input hidden">
    <button class="close-modal-input">&times;</button>
    <h1 style="color: white; text-align: center;">Edit Data</h1>
    <form action="">
        <div>
        <label for="date">Nama :</label>
        <input class="form" type="date" id="date">
        </div>
        <div>
        <label for="keterangan">Email :</label>
        <input class="form" type="text" id="keterangan">
        </div>
        <div>
        <label for="nominal">Username :</label>
        <input class="form" type="number" id="number">
        </div>
        <div>
        <label for="nominal">Password :</label>
        <input class="form" type="password" id="number">
        </div>
        <div>
            <input type="button" value="Masukkan" class="btn close-modal-input" id="edit-form-btn">
        </div>
    </form>
</div>
<div class="modal-window-delete hidden">
    <button class="close-modal delete-close">&times;</button>
    <h1 style="color: white; text-align: center;">Hapus Transaksi ?</h1>
    <p style="color: white;">Apakah anda yakin ingin menghapus Akun? Setelah dihapus tidak dapat dikembalikan lagi</p>
    <button class="btn-affirmative delete-close">Iya</button>
    <button class="btn delete-close">Tidak</button>
</div>
<div class="overlay hidden"></div>
<script src="./js/data-pengeluaran.js"></script>
</body>
</html>