<?php
if(isset($_GET['call_type']))
{
	$call_type = $_GET['call_type'];

	if($call_type == "dashboard")
	{
		echo json_encode(array(
			'status'=>'success',
			'title'=> 'Dashboard',
			'description' => 'Melihat Jalannya USAHA dengan DASHBOARD',
			'url' => $call_type.'.php',
			'data'=>file_get_contents('dashboard.php'),
		));
	}
	else if($call_type == "transaksi-kasir")
	{
		echo json_encode(array(
			'status'=>'success',
			'title'=> 'Transaksi Kasir',
			'description' => 'Melayani Customer dengan dashboard',
			'url' => $call_type.'.php',
			'data'=>file_get_contents('transaksi-kasir.php'),
		));
	}
	else if($call_type == "import-manual")
	{
		echo json_encode(array(
			'status'=>'success',
			'title'=> 'Import Manual',
			'description' => 'Mengimport Manual dengan form',
			'url' => $call_type.'.php',
			'data'=>file_get_contents('import-manual.php'),
		));
	}
	else if($call_type == "import-csv")
	{
		echo json_encode(array(
			'status'=>'success',
			'title'=> 'Import CSV',
			'description' => 'Import dengan CSV',
			'url'=> $call_type.'.php',
			'data'=>file_get_contents('import-csv.php'),
		));
	}
	else if($call_type == "crud-table-inventory")
	{
		echo json_encode(array(
			'status'=>'success',
			'title'=> 'CRUD Tabel',
			'description' => 'Create Edit dan Delete',
			'url'=> $call_type.'.php',
			'data'=>file_get_contents('crud-table-inventory.php'),
		));
	}
	else if($call_type == "data-transaksi")
	{
		echo json_encode(array(
			'status'=>'success',
			'title'=> 'Melihat data Transaksi',
			'description' => 'melihat data transaksi konsumen',
			'url'=> $call_type.'.php',
			'data'=>file_get_contents('data-transaksi.php'),
		));
	}
	else if($call_type == "laporan-keuangan")
	{
		echo json_encode(array(
			'status'=>'success',
			'title'=> 'Laporan Keuangan',
			'description' => 'Menjalankan laporan keuangan',
			'url'=> $call_type.'.php',
			'data'=>file_get_contents('laporan-keuangan.php'),
		));
	}
	else if($call_type == "data-pengeluaran")
	{
		echo json_encode(array(
			'status'=>'success',
			'title'=> 'Data Pengeluaran',
			'description' => 'Data Pengeluaran Perusahaan',
			'url'=> $call_type.'.php',
			'data'=>file_get_contents('data-pengeluaran.php'),
		));
	}
	else if($call_type == "manajemen-akun")
	{
		echo json_encode(array(
			'status'=>'success',
			'title'=> 'Manajemen Akun',
			'description' => 'Memanajemen Akun Pengguna',
			'url'=> $call_type.'.php',
			'data'=>file_get_contents('manajemen-akun.php'),
		));
	}
}