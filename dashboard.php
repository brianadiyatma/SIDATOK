<?php
    $nama = $_SERVER['SCRIPT_NAME'];
    if ($nama != ''){
        header("Location: ./");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/dashboard.css" />
  </head>
  <body>
    <h1 style="color: white; text-align: center">Dashboard</h1>
    <div class="flex-bagian1">
      <div class="window-dashboard1">
        <canvas id="penjualan-harian"> </canvas>
      </div>
      <div class="window-dashboard2">
        <canvas id="pengeluaran-harian"> </canvas>
      </div>
    </div>
    <div class="flex-bagian2">
      <div class="window-dashboard3">
        <canvas id="perbandingan"> </canvas>
      </div>
      <div class="window-dashboard4"></div>
      <div class="window-dashboard5"></div>
      <div class="window-dashboard6"></div>
    </div>
    <div class="flex-bagian3">
      <div class="window-dashboard7">
        <h2>Inventaris Mendekati Expired</h2>
        <div id="table-expired"></div>
        <!-- <table class="content-table">
            <thead>
                <tr>
                <th>Nama Barang</th>
                <th>Expired</th>
                </tr>
            </thead>
            <tbody>
                    <tr id='.$row["id"].'>
                    <td data-target = "nama_barang">Susu Kental Manis</td>
                    <td data-target = "expired">20-May-2021</td>
                    </tr>
    </table> -->
      </div>
      <div class="window-dashboard8">
        <h2>Stok Inventaris Akan Habis</h2>
        <div id="table-habis"></div>
        <!-- <table class="content-table">
      <thead>
        <tr>
        <th>Nama Barang</th>
        <th>Stok Barang</th>
        </tr>
      </thead>
    <tbody>
            <tr id='.$row["id"].'>
            <td data-target = "nama_barang">Aqua 300ml</td>
            <td data-target = "stok_barang">5</td>
            </tr>
    </table> -->
      </div>
    </div>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"
      integrity="sha512-VMsZqo0ar06BMtg0tPsdgRADvl0kDHpTbugCBBrL55KmucH6hP9zWdLIWY//OTfMnzz6xWQRxQqsUFefwHuHyg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="./js/dashboard.js"></script>
  </body>
</html>
