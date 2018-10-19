<form method="POST">
	<table>
		<tr> 
			<td> NAMA : </td><td> <input type="text" name="nama"></td>
		</tr>
		<tr> 
			<td> NIM : </td><td> <input type="text" name="nim"></td>
		</tr>
		
		<tr>
			<td> JENIS KELAMIN </td>
			<TD>:</TD>
			<td><input type="radio" name="jk" value="perempuan" checked>perempuan<br></td>
			<td><input type="radio" name="jk" value="laki-laki" checked>laki-laki<br></td>
		</tr>

		<tr>
			<td> PRODI</td>
			<TD>:</TD>
			<td><select name="prodi" required>
				<option value="fit">SILAHKAN PILIH</option>
	 			<option value="fit">D3 MANAJEMENT INFORMATIKA</option>
	  			<option value="fik">D3 TEKNIK INFORMATIKA</option>
	  			<option value="feb">S1 SISTEM INFORMASI</option>
	  			<option value="fkb">S1 MBTI</option>
	  			<option value="fkb">S1 TEKNIK ELEKTRO</option>
			</td>
		</tr>

		<tr>
			<td> FAKULTAS</td>
			<TD>:</TD>
			<td><select name="fakultas" required>
				<option value="fit">SILAHKAN PILIH</option>
	 			<option value="fit">FAKULTAS ILMU TERAPAN</option>
	  			<option value="fik">FAKULTAS TEKNIK ELEKTRO</option>
	  			<option value="feb">FAKULTAS REKAYASA INDUSTRI</option>
	  			<option value="fkb">FAKULTAS KOMUNIKASI BISNIS</option>
			</td>
		</tr>

		<tr>
			<td> ASAL</td>
			<TD>:</TD>
			<TD> <input type="textarea" name="asal"></TD>
		</tr>

		<tr>
			<td> MOTTO HIDUP</td>
			<TD>:</TD>
			<TD> <input type="textarea" name="motto"></TD>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="Registrasi"></td>
		</tr>
	
	</table>
</form>

<?php 
	if (isset($_POST['submit'])) {
		include "koneksi.php";
		if ($koneksi) {
		
		$nim=$_POST['nim'];
		$nama=$_POST['nama'];
		$jk=$_POST['jk'];
		$prodi=$_POST['prodi'];
		$fakultas=$_POST['fakultas'];
		$asal=$_POST['asal'];
		$motto=$_POST['motto'];

		$query="INSERT INTO mahasiswa VALUES ('$nim','$nama','$jk','$prodi','$fakultas','$asal','$motto')";

		$hasil=mysqli_query($koneksi,$query);
		if ($hasil) {
			echo "berhasil"."<br>";
			echo "<a href ='viewdata.php'>Klik</a> untuk melihat data";
		}
		}
		else{
			echo "gagal";


	
			
		}

	}
 ?>