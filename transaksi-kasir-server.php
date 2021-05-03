<?php 
    $conn = mysqli_connect('localhost','root','','sidatok');
    $output = 'let harga = []';
    $search = $_POST['search'];
    $sql = "SELECT * FROM data_barang WHERE barcode = $search";
    $res = mysqli_query($conn, $sql);
    echo mysqli_error($conn);
    while($row = mysqli_fetch_array($res)){
        $output .= 'harga[0] = '.$row["harga_jual"];
        $output .= 'harga[1] = '.$row["harga_grosir"];
        $output .= 'document.querySelector("#harga").value = '.$row["harga_jual"];
        $output .= 'document.querySelector("#stok").value = '.$row["jumlah_barang"];
        $output .= 'document.querySelector("#deskripsi").value = '.$row["deskripsi"];
        $output .= 'document.querySelector("#nama-barang").value = '.$row["nama_barang"];
        $output .= 'console.log('.$row["harga_jual"].')';
    }
    echo '<script>'.$output.'</script>';
?>