<?php
function harga($hargaRaw){
  $arr = str_split($hargaRaw);
  $harga = "";
  $k = 0;
  for($j=count($arr)-1; $j>=0; $j--){
    $k++;
    if($k==3){
        $harga .= $arr[$j];
        if($j!=0){
            $harga .= ".";
        }
        $k = 0;
    }else{
        $harga .= $arr[$j];
    }
  } 
  return strrev($harga);
} 
$conn = mysqli_connect('localhost','root','','sidatok');
$record = 5;
$page = '';
$halaman = '';
if(isset($_POST['page'])){
  $page = $_POST['page'];
}else{
  $page = 1;
}
$start = ($page-1)*5;
if(isset($_POST['search'])){
  $sql="SELECT * FROM pemasukan WHERE nomor_nota LIKE '%".$_POST['search']."%' LIMIT $start, $record";
  $pageQuery = "SELECT * FROM pemasukan WHERE nomor_nota LIKE '%".$_POST['search']."%'";

}else{
  $sql="SELECT * FROM pemasukan LIMIT $start, $record";
  $pageQuery = "SELECT * FROM pemasukan";
}
$result = mysqli_query($conn, $sql); 
$pageRes = mysqli_query($conn, $pageQuery);
$totalRec = mysqli_num_rows($pageRes);
$totalPages = ceil($totalRec/$record);

$output = '
<table class="content-table">
    <thead>
    <tr>
    <th>Nomor Nota</th>
    <th>Total Transaksi</th>
    <th>Item Transaksi</th>
    <th>Tanggal Transaksi</th>
    <th>Aksi</th>
    </tr>
    </thead>
    <tbody>';
while($row = mysqli_fetch_assoc($result)){
  $nomor = $row['nomor_nota'];
  $res=mysqli_query($conn, "SELECT rincian_transaksi.nama_barang AS nama, rincian_transaksi.jumlah AS jml
  FROM pemasukan LEFT JOIN rincian_transaksi ON pemasukan.nomor_nota = rincian_transaksi.kode_transaksi 
  WHERE pemasukan.nomor_nota = '$nomor'");
    $output .= '
        <tr id='.$row["id"].'>
        <td data-target = "nomnor_nota">'.$row['nomor_nota'].'</td>
        <td data-target = "total_transaksi">Rp.'.harga($row['total']).'</td>
        <td data-target = "jumlah-item">';
        while($baris = mysqli_fetch_assoc($res)){
          $output.= $baris['nama'].' = '.$baris['jml'].'</br>';
        }
        $output .='</td>
        <td data-target = "tanggal">'.$row['tanggal'].'</td>
        <td style="width: 220px;">
            <button type="submit" class="btn delete" id="delete" data-id='.$row["id"].'> Delete</button>
            <button type="submit" class="btn-affirmative edit" id="edit" data-id='.$row["id"].'> Lihat</button>
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
