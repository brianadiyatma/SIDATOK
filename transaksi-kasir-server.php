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
    }
    echo json_encode(['umum'=>$umum, 'grosir'=>$grosir, 'res'=>$output]);
?>