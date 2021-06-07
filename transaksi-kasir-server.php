<?php 
    $conn = mysqli_connect('localhost','root','','sidatok');
    $grosir = 0;
    $umum = 0;
    $output = '';
    if(isset($_POST['search'])){
        $search = $_POST['search'];
        $sql = "SELECT * FROM data_barang WHERE barcode = $search";
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res)==1){
            while($row = mysqli_fetch_array($res)){
                $output = $row; 
            }
        }
        echo json_encode(['res'=>$output]);
    }
    if(isset($_POST['datapembelian'])){
        $hargatotal = $_POST['hargatotal'];
        $beli = $_POST['datapembelian'];
        $jumlah = 0;
        $rand = mt_rand(0, 9999);
        for($i=0; $i<count($beli); $i++){
            $nama = $beli[$i]["nama_barang"];
            $barcode = $beli[$i]["barcode"];
            $harga = $beli[$i]["harga"];
            $stok = $beli[$i]["stok"];
            $jml = $beli[$i]["jumlah"];
            $pelanggan = $beli[$i]["pelanggan"];
            $desk = $beli[$i]["deskripsi"];
            $query = "INSERT INTO rincian_transaksi VALUES    
                ('', '$rand', '$nama', '$barcode', '$harga', '$stok', 
                '$jml', '$pelanggan', '$desk')";
            mysqli_query($conn, $query);
            $jumlah += $jml;
        }
        $date = date("Y-m-d");
        $laba=$beli['laba'];
        $sql = "INSERT INTO pemasukan VALUES
                ('', '$rand', '$hargatotal', '$jumlah', '$date','$laba')";
        mysqli_query($conn, $sql);
    }
    unset($_POST);
?>