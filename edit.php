<html>
<head>
	<title>Tabel pegawai</title>
</head>
<body>
 
	<h3>TABEL pegawai</h3>
	<br/>
	<a href="index.php">Kembali</a>
	<br/>
	<br/>
	<h3>Edit Data pegawai</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from pegawai where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>



		<form method="post" action="update.php">
			<table>
				
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>NOMOR HP</td>
					<td><input type="text" name="nohp" value="<?php echo $d['nohp']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
				<td>UMUR</td>
				<td><input type="text" name="umur" value="<?php echo $d['umur']; ?>"></td>
			</tr>
				<tr>

					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>