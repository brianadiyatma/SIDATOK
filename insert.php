<?php 
    $data = $_POST;
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
?>