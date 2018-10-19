<?php 
	session_start();
?>
<center>
<table border="0" width="500">
	<tr>
		<tH width="100"><a href="datamhsbr.php">EDIT DATA</a></tH>
	</tr>
</table>
</center><br><br>

<form method="POST">
	<table>
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="number" name="nim" length="15" value="<?php echo $_SESSION['nim'];?>"></td>
		</tr>


		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo $_SESSION['nama'];?>"></td>
		</tr>


