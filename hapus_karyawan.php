<?php 
include 'koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($koneksi, "DELETE FROM karyawan WHERE id = $id ");

if ($sql) {
?>
<script type="text/javascript">
	alert ("Data Berhasil Di hapus");
	window.location.href="karyawan.php";
</script>
<?php
} else {
	echo "Data Tak Dihapus";
}

?>