<?php
$conn = mysqli_connect("localhost","root","","php-api");
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
$Id = $_POST['Id'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Level = $_POST['Level'];
$Fullname = $_POST['Fullname'];
$sql_update=("UPDATE users SET Username='$Username', Password='$Password', Level='$Level', Fullname='$Fullname' WHERE Id='$Id'");
mysqli_query($conn,$sql_update)or die(mysqli_error($conn));
echo '<script>
alert("Data Berhasil Diedit");
location="index.php"
</script>';
?>