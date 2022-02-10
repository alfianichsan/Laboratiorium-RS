<?php
// memanggil library FPDF
require('fpdf.php');
include "../php/koneksi.php";
$id_pasien = $_POST['id_pasien'];
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->Ln(10);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5, 'RUMAH SAKIT','0','1','C',false);
$pdf->Ln(2);
$pdf->SetFont('Arial','i',8);
$pdf->Cell(0,5, 'Jl. PH.H. Mustofa No.23, Neglasari, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40124','0','1','C',false);
$pdf->Ln(3);
$pdf->Cell(190, 0.6, '','0','1','C',true);
$pdf->Ln(5);


$sql = mysqli_query($conn, "SELECT * FROM data_pasien WHERE id_pasien= '$id_pasien'");
if(mysqli_num_rows($sql)) {
    while ($row=mysqli_fetch_array($sql)) {
$pdf->SetFont('Arial','',10);
$pdf->Write(5, 'ID Pasien 		: ');
$pdf->Write(5, $row['id_pasien']);
$pdf->Ln(5);
$pdf->Write(5, 'Nama 			: ');
$pdf->Write(5, $row['nama_pasien']);
$pdf->Ln(5);
$pdf->Write(5, 'TTL 			: ');
$pdf->Write(5, $row['ttl_pasien']);
$pdf->Ln(5);
$pdf->Write(5, 'Alamat 			: ');
$pdf->Write(5, $row['alamat_pasien']);
$pdf->Ln(5);
$pdf->Write(5, 'Jenis Kelamin 	: ');
$pdf->Write(5, $row['gender_pasien']);
$pdf->Ln(10);
	}
}

$query=mysqli_query($conn, "SELECT kode_pemeriksaan FROM pembayaran WHERE id_pasien = '$id_pasien'");
if(mysqli_num_rows($query) == 0){
}else{      
$data = mysqli_fetch_array($query);
}
$pdf->SetFont('Arial','B',12);
$pdf->Write(5, 'Pemeriksaan');
$pdf->SetFont('Arial','B',10);
$pdf->Ln(8);
$pdf->Cell(65,8, 'Nama Pemeriksaan',1,0,'L');
$pdf->Cell(45,8, 'Hasil',1,0,'L');
$pdf->Cell(50,8, 'Nilai Normal',1,0,'L');
$pdf->Cell(30,8, 'Satuan',1,0,'L');
$pdf->SetFont('Arial','',10);

$query=mysqli_query($conn, "SELECT * FROM pembayaran WHERE id_pasien = '$id_pasien'");
if(mysqli_num_rows($query) == 0){
}else{      
$data2 = mysqli_fetch_array($query);
$tags = $data['kode_pemeriksaan'];
$tag = explode(",", $tags);
$tags2 = $data2['hasil_pemeriksaan'];
$tag2 = explode(";", $tags2);
$i = 0;
foreach ($tag as $t) {
	$query2=mysqli_query($conn, "SELECT * FROM pemeriksaan WHERE kode_pemeriksaan = '$t'");
		while ($row=mysqli_fetch_array($query2)) { 
		//<!-- <tr><td><?php echo $tag2[$i] </td></tr> -->
		$pdf->Ln(8);
		$pdf->Cell(65,8, $row['nama_pemeriksaan'],1,0,'L');
		$pdf->Cell(45,8, $tag2[$i],1,0,'L');
		$pdf->Cell(50,8, $row['nilai_normal'],1,0,'L');
		$pdf->Cell(30,8, $row['satuan'],1,0,'L');
		
		$i++;
		}
	}
}

$pdf->Ln(15);
$pdf->SetFont('Arial','',12);
$pdf->Write(5, 'Keterangan :');
$pdf->Ln(6);
$pdf->SetFont('Arial','i',11);
$pdf->Write(5, $data2['keterangan']);

$pdf->Output();
?>