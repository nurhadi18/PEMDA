<?php 
include 'koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($koneksi, "DELETE FROM admin WHERE id = $id ");

if ($sql) {
?>
<script type="text/javascript">
	alert ("Data Berhasil Di hapus");
	window.location.href="admin.php";
</script>
<?php
} else {
	echo "Data Tak Dihapus";
}

?>