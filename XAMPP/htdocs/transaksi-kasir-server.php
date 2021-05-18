<?php 
    $conn = mysqli_connect('localhost','root','','sidatok');
    $output = '';
    $grosir = 0;
    $umum = 0;
    if(isset($_POST['search'])){
        $search = $_POST['search'];
        $sql = "SELECT * FROM data_barang WHERE barcode = $search";
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res)==1){
            while($row = mysqli_fetch_array($res)){
                $output .= '<div>
                <p class="tag">Nama Barang</p>
                <input class = "form" type="name" id="nama-barang" value="'.$row['nama_barang'].'" readonly>
            </div>
            <div>
                <p class="tag">Barcode</p>
                <input class = "form" type="name" id="barcode" value="'.$row['barcode'].'">
            </div>
            <div>
                <p class="tag">Pelanggan</p>
                <select name="" id="" class= "form">
                    <option value="umum">Umum</option>
                    <option value="grosir">Grosir</option>
                </select>
            </div>
            <div>
                <p class="tag">Harga</p>
                <input readonly class = "form" type="name" id="harga" value="'.$row['harga_jual'].'">
            </div>
            <div>
                <p class="tag">Jumlah</p>
                <input class="form" type="name" value="1" id="jumlah">
            </div>
            <div>
                <p class="tag">Stok</p>
                <input readonly class="form" type="name" id="stok" value="'.$row['jumlah_barang'].'">
            </div>
            <div>
                <p class="tag">Deskripsi</p>
                <textarea readonly name="" id="" cols="10" rows="10" id="deskripsi" class = "form">'.$row['deskripsi'].'</textarea>
            </div>
            <div>
                <button class="btn tambah" type="button">Tambah</button>
            </div>';
            $umum = $row['harga_jual'];
            $grosir = $row['harga_grosir'];
            }
        }else{
            $output .= '<div>
            <p class="tag">Nama Barang</p>
            <input class = "form" type="name" id="nama-barang" readonly>
        </div>
        <div>
            <p class="tag">Barcode</p>
            <input class = "form" type="name" id="barcode">
        </div>
        <div>
            <p class="tag">Pelanggan</p>
            <select name="" id="" class= "form">
                <option value="umum">Umum</option>
                <option value="grosir">Grosir</option>
            </select>
        </div>
        <div>
            <p class="tag">Harga</p>
            <input readonly class = "form" type="name" id="harga">
        </div>
        <div>
            <p class="tag">Jumlah</p>
            <input class="form" type="name" value="1" id="jumlah">
        </div>
        <div>
            <p class="tag">Stok</p>
            <input readonly class="form" type="name" id="stok">
        </div>
        <div>
            <p class="tag">Deskripsi</p>
            <textarea readonly name="" id="" cols="10" rows="10" id="deskripsi" class = "form"></textarea>
        </div>
        <div>
            <button class="btn tambah" type="button">Tambah</button>
        </div>';
        }
    }else{
        $output .= '<div>
            <p class="tag">Nama Barang</p>
            <input class = "form" type="name" id="nama-barang" readonly>
        </div>
        <div>
            <p class="tag">Barcode</p>
            <input class = "form" type="name" id="barcode">
        </div>
        <div>
            <p class="tag">Pelanggan</p>
            <select name="" id="" class= "form">
                <option value="umum">Umum</option>
                <option value="grosir">Grosir</option>
            </select>
        </div>
        <div>
            <p class="tag">Harga</p>
            <input readonly class = "form" type="name" id="harga">
        </div>
        <div>
            <p class="tag">Jumlah</p>
            <input class="form" type="name" value="1" id="jumlah">
        </div>
        <div>
            <p class="tag">Stok</p>
            <input readonly class="form" type="name" id="stok">
        </div>
        <div>
            <p class="tag">Deskripsi</p>
            <textarea readonly name="" id="" cols="10" rows="10" id="deskripsi" class = "form"></textarea>
        </div>
        <div>
            <button class="btn tambah" type="button">Tambah</button>
        </div>';
    }
    echo json_encode(['umum'=>$umum, 'grosir'=>$grosir, 'res'=>$output]);
?>