<?php 
include 'koneksi.php';

$id_surat_msk = $_GET['id_surat_msk'];

$sql = mysqli_query($koneksi, "DELETE FROM surat_masuk WHERE id_surat_msk = $id_surat_msk ");

if ($sql) {
?>
<script type="text/javascript">
	alert ("Data Berhasil Di hapus");
	window.location.href="surat_masuk.php";
</script>
<?php
} else {
	echo "Data Tak Dihapus";
}

?>