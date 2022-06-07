<?php
error_reporting(0)
?>
<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'LAPORAN  BARANG KELUAR',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DI TOKO ALBAIK STORE',0,1,'C');
$pdf->SetFont('Arial','B',12);


// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,5,'',0,1);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(20,7,'Kode',1,0);
$pdf->Cell(50,7,'Nama Barang',1,0);
$pdf->Cell(30,7,'Jumlah Keluar',1,0);
$pdf->Cell(30,7,'Tanggal Keluar',1,0);

$pdf->Ln();
$id_klr = $_GET['id_klr'];

$kon = mysqli_connect("localhost","root","","db_albaik");

$sql = mysqli_query($kon,"SELECT m.id_klr, m.jml_barang_klr, m.tgl_klr,  b.kd_barang,b.nama FROM barang_klr m
JOIN barang b ON m.id = b.id");
while ($row = mysqli_fetch_assoc($sql)) {
	$pdf->SetFont('Arial','','10');		
	$pdf->Cell(20,7,$row['kd_barang'],1,0);
	$pdf->Cell(50,7,$row['nama'],1,0);
	$pdf->Cell(30,7,$row['jml_barang_klr'],1,0);
	$pdf->Cell(30,7,$row['tgl_klr'],1,0);
	
		
$pdf->Ln(); 
$i++;
}

$pdf->Ln();
$pdf->SetFont('Arial','','8');		
$pdf->Ln();

$tgl=date("d-F-Y");
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(25,8,'Probolinggo, ',0,0,'R');

$pdf->Cell(25,8,$tgl,0,0,'R');
$pdf->Ln();



$pdf->Cell(30.8,0.12,'Petugas, ',0,0,'R');
$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(48,25.4,'_________________________',0,0,'R');

$pdf->Output();



?>