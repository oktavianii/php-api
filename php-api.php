<?php
	$koneksi = mysqli_connect("localhost","root","","php-api");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
	<link rel="stylesheet" href="php_api.css">
</head>
<body>
	<a href="form.php" class="add">+ Tambah Data</a>
	<table align="center" width="70%">
		<tr>
			<td colspan="6" style="background-color: #2196F3; color: #fff">
				<h3><center>DATA</center></h3>
			</td>
		</tr>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th>Fullname</th>
			<th>Action</th>
		</tr>
		<?php
			$qry = mysqli_query($koneksi,"SELECT * FROM siswa");
			while($data = mysqli_fetch_array($qry)){
		 ?>
		<tr>
			<td align="center"><?php echo $data['id']; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['password']; ?></td>
			<td><?php echo $data['level']; ?></td>
			<td><?php echo $data['fullname']; ?></td>
			<td align="center">
				<a href="edit.php?id=<?php echo $data['id']; ?>">Ubah</a>
				<a href="delete.php?id=<?php echo $data['id']; ?>"><span style="color: #C62828;">Hapus</span></a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>