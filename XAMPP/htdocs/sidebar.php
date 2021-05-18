<?php 
require_once 'connect.php';
require_once 'loader.php';
if(!isset($_SESSION["login"])){
    belumLogin();
  }
if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    $ssl = 'https';
}
else {
    $ssl = 'http';
}
$app_url = "http://localhost/";
//($ssl)."://".$_SERVER['HTTP_HOST'].(dirname($_SERVER["SCRIPT_NAME"]) == DIRECTORY_SEPARATOR ? "" : "/").trim(str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"])), "/");
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
            <a id="link"class="nav_link active" call_type = "dashboard">
              <ion-icon name="home-outline" class="nav_icon"></ion-icon>
              <span class="nav_name" >Dashboard</span></a
            >
            <a id="link"class="nav_link" call_type = "transaksi-kasir">
              <ion-icon name="cash-outline" class="nav_icon" ></ion-icon>
              <span class="nav_name">Transaksi Kasir</span>
            </a>

            <div class="nav_link collapse">
              <ion-icon name="cube-outline" class="nav_icon"></ion-icon>
              <span class="nav_name">Inventaris</span>
              <ion-icon name="chevron-down-outline" class="sub-menu"></ion-icon>
              <ul class="collapse_menu">
                <a id="link" class="collapse_sublink"call_type = 'import-manual' ><div class="reset-size"> <p>Import Manual</p></div></a>
                <a class="collapse_sublink" id="link"call_type = 'import-csv'><div class="reset-size"> <p>Import Dengan CSV</p></div></a>
                <a class="collapse_sublink" id="link"call_type = 'crud-table-inventory'><div class="reset-size"> <p>CRUD Table</p></div></a>
              </ul>
            </div>

            <div class="nav_link collapse">
              <ion-icon name="bar-chart-outline" class="nav_icon"></ion-icon>
              <span class="nav_name">Akuntansi</span>

              <ion-icon name="chevron-down-outline" class="sub-menu"></ion-icon>
              <ul class="collapse_menu">
                <li>
                  <a  class="collapse_sublink" id="link"call_type = "data-transaksi"><div class="reset-size"> <p>Data Transaksi</p></div> </a>
                </li>
                <li>
                  <a  class="collapse_sublink" id="link"call_type = "laporan-keuangan"><div class="reset-size"> <p>Laporan keuangan</p></div></a>
                </li>
                <li>
                  <a  class="collapse_sublink" id="link"call_type = "data-pengeluaran"><div class="reset-size"> <p>Data Pengeluaran</p></div></a>
                </li>
              </ul>
            </div>
            <a  class="nav_link" id="link" call_type = "manajemen-akun">
              <ion-icon name="man-outline" class="nav_icon"></ion-icon>
              <span class="nav_name" >Manajemen Akun</span></a
            >
          </div>
        </div>  
        <a class="nav_link" id="link">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js" integrity="sha512-VMsZqo0ar06BMtg0tPsdgRADvl0kDHpTbugCBBrL55KmucH6hP9zWdLIWY//OTfMnzz6xWQRxQqsUFefwHuHyg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Javascript Internal -->
    <script src="./js/sidebar.js"></script>
    <script src="./js/loader.js"></script>
  </body>
</html> 
