<?php
    $conn = mysqli_connect('localhost','root','','sidatok');
    $record = 5;
    $page = '';
    $halaman = '';
    if(isset($_POST['page'])){
      $page = $_POST['page'];
    }else{
      $page = 1;
    }
    $start = ($page-1)*8;
    if(isset($_POST['search'])){
      $sql="SELECT * FROM data_barang WHERE nama_barang LIKE '%".$_POST['search']."%' LIMIT $start, $record";
      $pageQuery = "SELECT * FROM data_barang WHERE nama_barang LIKE '%".$_POST['search']."%'";

    }else{
      $sql="SELECT * FROM data_barang LIMIT $start, $record";
      $pageQuery = "SELECT * FROM data_barang";
    }
    $result = mysqli_query($conn, $sql); 
    $pageRes = mysqli_query($conn, $pageQuery);
    $totalRec = mysqli_num_rows($pageRes);
    $totalPages = ceil($totalRec/$record);
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
    }
    $output .= '</tbody></table>';
    $halaman .= '
    <span style="color:white;">Page '.$page.'-'.$totalPages.'</span>
    <a href="#" class="previous" id="'.$page.'">&laquo;</a>
    <a href="#">'.$page.'</a>
    <a href="#" class="next" id="'.$page.'">&raquo;</a>';
    
    echo json_encode(['output'=>$output, 'halaman'=>$halaman, 'max'=>$totalPages]);
?>
