<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<br>
	<a href="input.php">+ TAMBAH PEGAWAI</a>
	<br>
	<br>
	<table border="1" width="40%">
		<tr>
			<th>id_pegawai</th>
			<th>Nama</th>
			<th>Departemen</th>
			<th>OPSI</th>
		</tr>
		<?php
		$host = "localhost";
		$username = "root";
		$password = "";
		$database = "db_pegawai";
    $conn = mysqli_connect($host, $username , $password, $database);
		// Check Connection
		if (mysqli_connect_errno()) { //jika mySQLI connect error maka tampilkan teks failed
			echo "Failed to connect to MySQL ". mysqli_connect_error();
		};
		$data = mysqli_query($conn,"select * from tb_pegawai"); //membuat sebuah variabel data
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id_pegawai']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['departemen']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id_pegawai']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id_pegawai']; ?>">HAPUS</a> 
				</td>
      </tr>
    <?php
  }
  ?>
</table>
</body>
</html>
