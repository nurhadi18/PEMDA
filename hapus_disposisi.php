<?php 
include 'koneksi.php';

$id_disposisi = $_GET['id_disposisi'];

$sql = mysqli_query($koneksi, "DELETE FROM disposisi WHERE id_disposisi = $id_disposisi ");

if ($sql) {
?>
<script type="text/javascript">
	alert ("Data Berhasil Di hapus");
	window.location.href="disposisi.php";
</script>
<?php
} else {
	echo "Data Tak Dihapus";
}

?>