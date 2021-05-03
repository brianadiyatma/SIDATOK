<?php
//require_once 'js/loader.php';
session_start();
$conn = mysqli_connect('localhost','root','','sidatok');
function login($username,$password,$type){
    global $conn;
    if($username != "" || $password != ""){
        //ambil data username dari db
        $result = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$username'");
        //cek username
        if(mysqli_num_rows($result) === 1){
          //cek password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])){
                $_SESSION["login"] = true;
                $_SESSION["username"] = $username;
                $_SESSION["type"] = $row["status"];
                header("Location: sidebar.php");
                exit;
            }
        }
    }
}
function belumLogin(){
    header("Location: index.php");
    exit;
}
function sdhLogin(){
    header("Location: sidebar.php");
    exit;
}
function tambahBarang($data){
    global $conn;
    $namaBarang = htmlspecialchars($data["nama_barang"]);
    $barcode = htmlspecialchars($data["barcode"]);
    $hargaBeli = htmlspecialchars($data["harga_beli"]);
    $hargaJual = htmlspecialchars($data["harga_jual"]);
    $expired = htmlspecialchars($data["expired"]);
    $hargaGrosir = htmlspecialchars($data["harga_grosir"]);
    $jenisBarang = htmlspecialchars($data["jenis_barang"]);
    $jumlahBarang = htmlspecialchars($data["jumlah_barang"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $query = "INSERT INTO data_barang VALUES    
            ('', '$barcode', '$namaBarang', '$hargaBeli', '$hargaJual', '$expired', 
            '$hargaGrosir', '$jenisBarang', '$jumlahBarang', '$deskripsi')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
if(isset($_POST['search'])){
    $output = "let harga = []";
    $search = $_POST['search'];
    $sql = "SELECT * FROM data_barang WHERE barcode = $search";
    $res = mysqli_query($conn, $sql);
    echo '<script>alert("Hello");</script>';
    echo $search;
    echo '<h1>Hello</h1>';
    echo mysqli_error($conn);
    while($row = mysqli_fetch_array($res)){
        echo $row['harga_jual'];
        $output .= "harga[0] = {$row['harga_jual']}";
        $output .= "harga[1] = {$row['harga_grosir']}";
        $output .= "document.querySelector('#harga').value = '{$row['harga_jual']}'";
        $output .= "document.querySelector('#stok').value = '{$row['jumlah_barang']}'";
        $output .= "document.querySelector('#deskripsi').value = '{$row['deskripsi']}'";
        $output .= "document.querySelector('#nama-barang').value = '{$row['nama_barang']}'";
        $output .= "console.log('{$row['harga_jual']}')";
    }
    echo "<script>{$output}</script>";
}
?>