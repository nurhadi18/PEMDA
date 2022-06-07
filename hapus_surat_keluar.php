<?php 
include 'koneksi.php';

$id_surat_klr = $_GET['id_surat_klr'];

$sql = mysqli_query($koneksi, "DELETE FROM surat_keluar WHERE id_surat_klr = $id_surat_klr ");

if ($sql) {
?>
<script type="text/javascript">
	alert ("Data Berhasil Di hapus");
	window.location.href="surat_keluar.php";
</script>
<?php
} else {
	echo "Data Tak Dihapus";
}

?>