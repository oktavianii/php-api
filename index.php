<?php 
$conn = mysqli_connect("localhost","root","","php-api");
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

function query($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$box = [];
		while ($data = mysqli_fetch_assoc($result)) {
			$box[] = $data;
		}
		return $box;
	}

$students = query("SELECT * FROM okta");	

?>


<html>
	<head>
		<title></title>
	</head>
	<body>
		<table border="1px" cellpadding="10" cellspacing="0">
	 		<tr>
	 			<td bgcolor="#18A6BB" align="center">Id</td>
	 			<td bgcolor="#18A6BB" align="center">Username</td>
	 			<td bgcolor="#18A6BB" align="center">Level</td>
	 			<td bgcolor="#18A6BB" align="center">Fullname</td>
	 			<td bgcolor="#18A6BB" align="center">Action</td>
	 		</tr>
	 		<?php foreach($students as $student) : ?>
				 <tr>
				 	<td><?= $student["id"] ?></td>
				 	<td><?= $student["username"] ?></td>
				 	<td><?= $student["level"] ?></td>
				 	<td><?= $student["fullname"] ?></td>
				  <td>
						<a  href="edit.php?Id=<?php echo $student['id'];?>">Edit</a> |
						<a  href="del.php?Id=<?php echo $student['id']; ?>">Hapus</a>
		  			</td>
				 </tr>
				<?php endforeach; ?>
	 	</table>
 	</body>
</html>