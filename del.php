<?php
$conn = mysqli_connect("localhost","root","","php-api");
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
$Id = $_GET['Id'];
$sql_delete=("DELETE FROM okta WHERE Id='$Id' ");
mysqli_query($conn,$sql_delete)or die(mysqli_error($conn));
echo '<script>
alert("Data Berhasil Dihapus");
location="index.php?"
</script>';
?>