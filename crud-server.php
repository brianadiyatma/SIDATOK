<?php
    $conn = mysqli_connect('localhost','root','','sidatok');
    $result = mysqli_query($conn, "SELECT * FROM data_barang"); 
    $output = '
    <table style="width:100%">
    <table class="content-table">
      <thead>
        <tr>
        <th>Nama Barang</th>
        <th>Barcode</th>
        <th>Harga Beli</th>
        <th>Harga Jual</th>
        <th>Harga Grosir</th>
        <th>Expired</th>
        <th>Jenis Barang</th>
        <th>Jumlah Barang</th>
        <th>Deskripsi Singkat</th>
        <th>Aksi</th>
        </tr>
      </thead>
    <tbody>';
    $a=1;
    while($row = mysqli_fetch_assoc($result)){
      $output .= '
        <tr id='.$row["id"].'>
            <td data-target = "nama_barang">'.$row["nama_barang"].'</td>
            <td data-target = "barcode">'.$row["barcode"].'</td>
            <td data-target = "harga_beli">'.$row["harga_beli"].'</td>
            <td data-target = "harga_jual">'.$row["harga_jual"].'</td>
            <td data-target = "harga_grosir">'.$row["harga_grosir"].'</td>
            <td data-target = "expired">'.$row["expired"].'</td>
            <td data-target = "jenis_barang">'.$row["jenis_barang"].'</td>
            <td data-target = "jumlah_barang">'.$row["jumlah_barang"].'</td>
            <td data-target = "deskripsi" style="width: 100px;">'.$row['deskripsi'].'</td>
            <td style="width: 220px;">
                <button type="submit" class="btn-affirmative edit" id="edit" data-id='.$row["id"].'> Edit</button>
                <button type="submit" class="btn delete" id="delete" data-id='.$row["id"].'> Delete</button>
            </td>
        </tr> ';
        
        $a++;
    }

    $output .= '</tbody></table>';
    echo $output;
?>
