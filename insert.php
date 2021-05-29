<?php 
    $conn = mysqli_connect('localhost','root','','sidatok');
    if($_POST['aksi']=="edit"){
        $id = htmlspecialchars($_POST['id']);
        $nama_barang = htmlspecialchars($_POST['nama_barang']);
        $barcode = htmlspecialchars($_POST['barcode']);
        $harga_beli = htmlspecialchars($_POST['harga_beli']);
        $harga_jual = htmlspecialchars($_POST['harga_jual']);
        $expired = htmlspecialchars($_POST['expired']);
        $harga_grosir = htmlspecialchars($_POST['harga_grosir']);
        $jenis_barang = htmlspecialchars($_POST['jenis_barang']);
        $jumlah_barang = htmlspecialchars($_POST['jumlah_barang']);
        $deskripsi = htmlspecialchars($_POST['deskripsi']);
        $query = "UPDATE data_barang SET nama_barang = '$nama_barang', 
                    barcode = '$barcode', harga_beli = '$harga_beli', 
                    harga_jual = '$harga_jual', expired = '$expired',
                    harga_grosir = '$harga_grosir', jenis_barang = '$jenis_barang',
                    jumlah_barang = '$jumlah_barang', deskripsi = '$deskripsi' 
                    WHERE id = '$id'";
        mysqli_query($conn, $query);
    }elseif($_POST['aksi']=="hapus"){
        $id = $_POST['id'];
        $query = "DELETE FROM data_barang WHERE id = '$id'";
            echo '<h1>hello world</h1>';
        mysqli_query($conn, $query);
    }elseif($_POST['aksi']=="masuk"){
        $data = $_POST;
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
    }
?>