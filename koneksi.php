<?php 
	$server		= "localhost";
	$user		= "root";
	$password	= "";
	$db_jurnal7	= "db_jurnal7";

	$koneksi = mysqli_connect($server, $user, $password, $db_jurnal7);

	if (!$koneksi) {
		 echo "koneksi gagal";
	}
 ?>