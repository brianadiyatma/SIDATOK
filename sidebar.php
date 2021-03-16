<?php 
  session_start();
  if(!isset($_SESSION["login"])){
    header("Location: login.php");
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
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/sidebar.css" />
  </head>
  <body id="body-all">
    <div class="sidebar" id="sidebar">
      <nav class="nav">
        <div>
          <div class="head_nav">
            <ion-icon
              name="menu-outline"
              id="nav-toggle"
              class="nav_toggle"
            ></ion-icon>
            <a href="#" class="nav_logo">SIDATOK</a>
          </div>
          <div class="nav_list">
            <a href="dashboard" id="link"class="nav_link active">
              <ion-icon name="home-outline" class="nav_icon"></ion-icon>
              <span class="nav_name">Dashboard</span></a
            >
            <a href="transaksi-kasir" id="link" class="nav_link">
              <ion-icon name="cash-outline" class="nav_icon"></ion-icon>
              <span class="nav_name">Transaksi Kasir</span>
            </a>

            <div class="nav_link collapse">
              <ion-icon name="cube-outline" class="nav_icon"></ion-icon>
              <span class="nav_name">Inventaris</span>
              <ion-icon name="chevron-down-outline" class="sub-menu"></ion-icon>
              <ul class="collapse_menu">
                <a href="import-manual" id="link" class="collapse_sublink"> Import Manual</a>
                <a href="import-csv" class="collapse_sublink" id="link">Import Dengan CSV</a>
              </ul>
            </div>

            <div class="nav_link collapse">
              <ion-icon name="bar-chart-outline" class="nav_icon"></ion-icon>
              <span class="nav_name">Akuntansi</span>

              <ion-icon name="chevron-down-outline" class="sub-menu"></ion-icon>
              <ul class="collapse_menu">
                <li>
                  <a href="data-transaksi" class="collapse_sublink" id="link">Data Transaksi </a>
                </li>
                <li>
                  <a href="laporan-keuangan" class="collapse_sublink" id="link">Laporan Keuangan</a>
                </li>
              </ul>
            </div>
            <a href="manajemen-akun" class="nav_link" id="link">
              <ion-icon name="man-outline" class="nav_icon"></ion-icon>
              <span class="nav_name">Manajemen Akun</span></a
            >
          </div>
        </div>
        <a href="profile" class="nav_link" id="link">
          <ion-icon name="person-outline" class="nav_icon"></ion-icon>
          <span class="nav_name"><?php echo $_SESSION["username"];?></span></a
        >
      </nav>
    </div>
    <div id="content">

    </div>

    <!-- Javascript External (ionicons.com dan JQuery) -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Javascript Internal -->
    <script src="./js/sidebar.js"></script>
    <script src="./js/loader.js"></script>
    
  </body>
</html>