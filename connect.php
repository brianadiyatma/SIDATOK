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
// function tambahBarang($data){
//     $nama_barang = $data[nama_barang];
// }
?>