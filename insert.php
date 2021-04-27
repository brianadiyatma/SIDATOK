<?php 
    $data = $_POST;
    var_dump($data);
    $conn = mysqli_connect('localhost','root','','sidatok');
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
    //return mysqli_affected_rows($conn);

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $nama_barang = $_POST['nama_barang'];
        $barcode = $_POST['barcode'];
        $harga_beli = $_POST['harga_beli'];
        $harga_jual = $_POST['harga_jual'];
        
    }
?>