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
$pdf->Cell(190,7,'LAPORAN DISPOSISI SURAT KELUAR',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'Pemerintah Daerah Kabupaten Probolinggo',0,1,'C');
$pdf->SetFont('Arial','B',12);


// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,5,'',0,1);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,7,'Kode Surat Keluar',1,0);
$pdf->Cell(50,7,'Jenis Surat',1,0);
$pdf->Cell(30,7,'Perihal',1,0);
$pdf->Cell(35,7,'Tanggal Terima',1,0);
$pdf->Cell(30,7,'Ket Disposisi',1,0);

$pdf->Ln();
$id_diposisi = $_GET['id_diposisi'];

	$koneksi = mysqli_connect("localhost","root","","db_surat");


$sql = mysqli_query($koneksi,"SELECT d.id_disposisi, d.tgl_terima, d.ket_disposisi, s.no_surat_klr,s.jenis_surat,s.perihal FROM disposisi d
JOIN surat_keluar s ON d.id_surat_klr = s.id_surat_klr");
while ($row = mysqli_fetch_assoc($sql)) {
	$pdf->SetFont('Arial','','10');		
	$pdf->Cell(40,7,$row['no_surat_klr'],1,0);
	$pdf->Cell(50,7,$row['jenis_surat'],1,0);
	$pdf->Cell(30,7,$row['perihal'],1,0);
	$pdf->Cell(35,7,$row['tgl_terima'],1,0);
	$pdf->Cell(30,7,$row['ket_disposisi'],1,0);
	
		
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



$pdf->Cell(30.8,0.12,'Karyawan, ',0,0,'R');
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