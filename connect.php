<?php
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
?>