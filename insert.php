<?php 
session_start();
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
    }elseif($_POST['aksi']=='laporan'){
        if(isset($_POST['search'])){
            $sql="SELECT * FROM pemasukan WHERE tanggal LIKE '%".$_POST['search']."%'";
            $query = "SELECT * FROM pengeluaran WHERE tgl LIKE '%".$_POST['search']."%'";
      
          }else{
            $sql="SELECT * FROM pemasukan";
            $query = "SELECT * FROM pengeluaran";
          }
        $res=mysqli_query($conn, $sql);
        $result=mysqli_query($conn, $query);
        $trans = '<table class="content-table">
        <thead>
            <tr>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>';
        $peng = '<table class="content-table">
        <thead>
            <tr>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>';
        while($row=mysqli_fetch_assoc($res)){
            $trans .= '<tr>
            <td data-target = "nama_barang">'.$row['tanggal'].'</td>
            <td data-target = "expired">Transaksi</td>
            <td data-target = "expired">Rp.'.harga($row['total']).'</td>
            </tr>';
        }
        while($baris = mysqli_fetch_assoc($result)){
            $peng .= '<tr>
            <td data-target = "nama_barang">'.$baris['tgl'].'</td>
            <td data-target = "expired">'.$baris['ket'].'</td>
            <td data-target = "expired">Rp.'.harga($baris['nominal']).'</td>
            </tr>';
        }
        $trans.='</table>';
        $peng.='</table>';
        echo json_encode(['trans'=>$trans, 'peng'=>$peng]);
    }elseif($_POST['aksi']=='pengeluaran'){
        if(isset($_POST['search'])){
            $sql="SELECT * FROM pengeluaran WHERE tgl LIKE '%".$_POST['search']."%'";
          }else{
            $sql="SELECT * FROM pengeluaran";
          }
          $res=mysqli_query($conn, $sql);
          $output = '<table class="content-table">
          <thead>
          <tr>
          <th>Tanggal</th>
          <th>Keterangan</th>
          <th>Nominal</th>
          <th>Aksi</th>
          </tr>
          </thead>
          <tbody>';
          while($row = mysqli_fetch_assoc($res)){
              $output .= '<tr id='.$row["id"].'>
              <td data-target = "tanggal">'.$row['tgl'].'</td>
              <td data-target = "keterangan">'.$row['ket'].'</td>
              <td data-target = "Nominal">'.harga($row['nominal']).'</td>
              <td style="width: 220px;">
                  <button type="button" class="btn delete" id="delete" data-id='.$row["id"].'> Delete</button>
                  <button type="button" class="btn-affirmative lihat" id="edit" data-id='.$row["id"].'> Edit</button>
              </td>
              </tr>';
          }
              $output .= '</tbody></table>';
          echo json_encode(['output'=>$output]);
    }elseif(isset($_POST['insert'])){
        $tgl = $_POST['tgl'];
        $ket = $_POST['ket'];
        $nominal = $_POST['nominal'];
        mysqli_query($conn, "INSERT INTO pengeluaran VALUES('','$tgl','$ket','$nominal')");
    }elseif(isset($_POST['editPengeluaran'])){
        $tgl = $_POST['tgl'];
        $ket = $_POST['ket'];
        $nominal = $_POST['nominal'];
        $id = $_POST['id'];
        $sql = "UPDATE pengeluaran SET tgl = '$tgl', ket = '$ket', nominal = '$nominal' WHERE id = '$id'";
        mysqli_query($conn, $sql);
    }elseif(isset($_POST['hapusPengeluaran'])){
        $id = $_POST['id'];
        mysqli_query($conn, "DELETE FROM pengeluaran WHERE id='$id'");
    }elseif($_POST['aksi']=='akun'){
        if(isset($_POST['search'])){
            $sql="SELECT * FROM akun WHERE nama LIKE '%".$_POST['search']."%'";
          }else{
            $sql="SELECT * FROM akun";
          }
          $res=mysqli_query($conn, $sql);
          $output='<table class="content-table">
          <thead>
          <tr>
          <th>Nama</th>
          <th>Username</th>
          <th>Foto</th>
          <th style="width: 100px;">Aksi</th>
          </tr>
          </thead>
          <tbody>';
          while($row = mysqli_fetch_assoc($res)){
              $output.='<tr id='.$row["id"].'>
              <td data-target = "Nama">'.$row['nama'].'</td>
              <td data-target = "username">'.$row['username'].'</td>
              <td data-target = "foto" ><img style="width: 100px;" src="./assets/img/profil/'.$row['gambar'].'" alt=""></td>
              <td style="width: 220px;">
                  <button type="button" class="btn delete" id="delete" data-id='.$row["id"].'> Delete</button>
                  <button type="button" class="btn-affirmative lihat" id="edit" data-id='.$row["id"].'> Edit</button>
              </td>
              </tr>';
          }
          $output .= '</tbody></table>';
          echo json_encode(['output'=>$output]);
    }elseif(isset($_POST['insertAkun'])){
        $nama = $_POST['nama'];
        $user = $_POST['user'];
        $password = $_POST['password'];
        $password = password_hash($password, PASSWORD_DEFAULT);
        $type = $_POST['type'];
        mysqli_query($conn, "INSERT INTO akun VALUES('','$nama','$user','$password','$type','default.jpg')");
    }elseif(isset($_POST['editAkun'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $user = $_POST['user'];
        $password = $_POST['password'];
        $password = password_hash($password, PASSWORD_DEFAULT);
        $type = $_POST['type'];
        mysqli_query($conn, "UPDATE akun SET nama='$nama', username = '$user', password='$password', status ='$type' WHERE id='$id'");
    }elseif(isset($_POST['hapusAkun'])){
        $id = $_POST['id'];
        mysqli_query($conn, "DELETE FROM akun WHERE id='$id'");
    }elseif($_POST['aksi']=='profile'){
        $user = $_SESSION['username'];
        $res=mysqli_query($conn, "SELECT * FROM akun WHERE username = '$user'");
        $output='';
        $row=mysqli_fetch_assoc($res);
        $gambar = '<img src="./assets/img/profil/'.$row['gambar'].'" alt="" style="width: 250px; height: 250px; border-radius:50%">';
        echo json_encode(['gambar'=>$gambar, 'output'=>$row]);
    }elseif($_POST['aksi']=='upload'){
        if(!empty($_FILES['gambar']['name'])){
            $namaFile = $_FILES['gambar']['name'];
            $ukuran = $_FILES['gambar']['size'];
            $tmpName = $_FILES['gambar']['tmp_name'];
            $eksGambar = ['jpeg', 'jpg', 'png'];
            $eks = explode('.',$namaFile);
            $eks = strtolower(end($eks));
            $user =$_SESSION['username'];
            $namaFileBaru = date('YmdGis').'.'.$eks;
                move_uploaded_file($tmpName, './assets/img/profil/'.$namaFileBaru);
            $query = "UPDATE akun SET gambar = '$namaFileBaru' WHERE username = '$user'";
            $error = "Data berhasil diubah!";
            mysqli_query($conn, $query);
        }
        unset($_FILES);
    }elseif($_POST['aksi']=='dashboard'){
        $tglpemasukan = $tglpengeluaran = $totpemasukan = $totpengeluaran = [];

        $dateAkhir = date("Y-m-d", strtotime("-6 days"));
        $dateWingi = date("Y-m-d", strtotime("-1 days"));
        $query = "SELECT tanggal, total FROM pemasukan WHERE tanggal BETWEEN '$dateAkhir' AND '$dateWingi'";
        $res=mysqli_query($conn, $query);
        while($row=mysqli_fetch_assoc($res)){
            array_push($tglpemasukan, $row['tanggal']);
            array_push($totpemasukan, $row['total']);
        }
        $query = "SELECT tgl, nominal FROM pengeluaran WHERE tgl BETWEEN '$dateAkhir' AND '$dateWingi'";
        $result=mysqli_query($conn, $query);
        while($baris=mysqli_fetch_assoc($result)){
            array_push($tglpengeluaran, $baris['tgl']);
            array_push($totpengeluaran, $baris['nominal']);
        }
        $sumpengeluaran = array_sum($totpengeluaran);
        $sumpemasukan = array_sum($totpemasukan);
        $date = date("Y-m-d");
        $hasil = mysqli_query($conn, "SELECT SUM(total) AS total FROM pemasukan WHERE tanggal = '$date'");
        $line = mysqli_fetch_assoc($hasil);
        $output = '<h2>Penjualan Hari Ini</h2>
        <h1>Rp.'.harga($line['total']).'</h1>';
        $hasil = mysqli_query($conn, "SELECT SUM(nominal) AS total FROM pengeluaran WHERE tgl = '$date'");
        $line = mysqli_fetch_assoc($hasil);
        $totalpeng = '<h2>Pengeluaran Hari ini</h2>
        <h1>Rp.'.harga($line['total']).'</h1>';
        $hasil = mysqli_query($conn, "SELECT SUM(laba) AS total FROM pemasukan WHERE tanggal = '$date'");
        $line = mysqli_fetch_assoc($hasil);
        $totlaba = '<h2>Laba Bruto Hari ini</h2>
        <h1>Rp.'.harga($line['total']).'</h1>';
        $hasil = mysqli_query($conn, "SELECT * FROM data_barang WHERE expired = '$date'");
        $expired = '<table class="content-table">
        <thead>
            <tr>
            <th>Nama Barang</th>
            <th>Expired</th>
            </tr>
        </thead>
        <tbody>';
        while($row=mysqli_fetch_assoc($hasil)){
            $expired .= '<tr id='.$row["id"].'>
            <td data-target = "nama_barang">'.$row['nama_barang'].'</td>
            <td data-target = "expired">'.$row['expired'].'</td>
            </tr>';
        }
        $expired .= '</tbody></table>';
        $hasil = mysqli_query($conn, "SELECT * FROM data_barang");
        $habis = '<table class="content-table">
        <thead>
          <tr>
          <th>Nama Barang</th>
          <th>Stok Barang</th>
          </tr>
        </thead>
      <tbody>';
      while($baris=mysqli_fetch_assoc($hasil)){
          $habis .= '<tr id='.$baris["id"].'>
          <td data-target = "nama_barang">'.$baris['nama_barang'].'</td>
          <td data-target = "stok_barang">'.$baris['jumlah_barang'].'</td>
          </tr>';
      }
      $habis .= '</tbody>        
      </table>';
        echo json_encode(['tglpemasukan'=>$tglpemasukan, 'tglpengeluaran'=>$tglpengeluaran, 'totpemasukan'=>$totpemasukan,'totpengeluaran'=>$totpengeluaran,'sumpeng'=>$sumpengeluaran,'sumpem'=>$sumpemasukan, 'totpen'=>$output,
        'totpeng'=>$totalpeng, 'totlaba'=>$totlaba, 'expired'=>$expired,'habis'=>$habis]);
    }
?>