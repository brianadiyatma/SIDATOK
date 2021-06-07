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
            <div id="table">
            </div>
    </div>
</div>
<div class="modal-window-lihat hidden">
    <button class="close-modal">&times;</button>
    <h1 style="color: white; text-align: center;">Edit Data</h1>
    <form action="">
        <div>
        <label for="date">Nama :</label>
        <input class="form" type="text" id="nama">
        </div>
        <div>
        <label for="nominal">Username :</label>
        <input class="form" type="text" id="user">
        </div>
        <div>
        <label for="nominal">Password :</label>
        <input class="form" type="password" id="pass">
        <input type="hidden" name="id" id="userId">
        </div>
        <div>
        <label for="nominal">User Type :</label>
        <select name="" id="typeEdit" class= "form">
                <option value="superadmin">Super Admin</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <div>
            <input type="button" value="Edit" class="btn close-modal" id="editAkun">
        </div>
    </form>
</div>
<div class="modal-window-input hidden">
    <button class="close-modal-input">&times;</button>
    <h1 style="color: white; text-align: center;">Masukkan Data</h1>
    <form action="" id="masuk">
        <div>
        <label for="date">Nama :</label>
        <input class="form" type="text" id="date" name="nama">
        </div>
        <div>
        <label for="nominal">Username :</label>
        <input class="form" type="text" id="number" name="user">
        </div>
        <div>
        <label for="nominal">Password :</label>
        <input class="form" type="password" id="number" name="password">
        <input type="hidden" name="insertAkun" value="akun">
        </div>
        <div>
        <label for="nominal">User Type :</label>
        <select id="pelanggan" class= "form" name="type">
                <option value="superadmin">Super Admin</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <div>
            <input type="button" value="Masukkan" class="btn close-modal-input" id="masukAkun">
        </div>
    </form>
</div>
<div class="modal-window-delete hidden">
    <button class="close-modal delete-close">&times;</button>
    <h1 style="color: white; text-align: center;">Hapus Transaksi ?</h1>
    <p style="color: white;">Apakah anda yakin ingin menghapus Akun? Setelah dihapus tidak dapat dikembalikan lagi</p>
    <button class="btn-affirmative delete-close" id="iya">Iya</button>
    <button class="btn delete-close">Tidak</button>
</div>
<div class="overlay hidden"></div>
<script src="./js/akun.js"></script>
</body>
</html>