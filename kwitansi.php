<?php
include 'connection.php';
#$id_diagnosa = $_GET['id_diagnosa'];
$id_diagnosa = $_GET['id_diagnosa'];
$terbilang = $_GET['terbilang'];


$update_diagnosa = "UPDATE `diagnosa` SET `terbilang` = '$terbilang' WHERE `diagnosa`.`id_diagnosa` = $id_diagnosa";
$query_update_diagnosa = mysqli_query($conn, $update_diagnosa);

$select_diagnosa = "SELECT * FROM `diagnosa` WHERE id_diagnosa ='$id_diagnosa'";
$query_select_diagnosa = mysqli_query($conn, $select_diagnosa);
$data_diagnosa = mysqli_fetch_array($query_select_diagnosa);
$nomor_rekam_medis = $data_diagnosa['no_rekam_medis'];
$terbilang = $data_diagnosa['terbilang'];
$tanggal_periksa = $data_diagnosa['tanggal_periksa'];
$tahun_diagnosa = substr($tanggal_periksa,0,4);
$bulan_diagnosa = substr($tanggal_periksa,5,2);
$tanggal_diagnosa = substr($tanggal_periksa,8,2);

$select_pasien ="SELECT * FROM `pasien` WHERE no_rekam_medis = '$nomor_rekam_medis'";
$query_pasien = mysqli_query($conn, $select_pasien);
$data_pasien = mysqli_fetch_array($query_pasien);
$nama_pasien = $data_pasien['nama_pasien'];
$ajukan = $data_pasien['ajukan'];
$sum = $_GET['sum'];
if ($ajukan == 1) {
  $total = 25000;
} else {
  $total = 35000;
}


// Koneksi library FPDF
require('fpdf.php');
// Setting halaman PDF
$pdf = new FPDF('p','mm','A4');
// Menambah halaman baru
$pdf->AddPage();
// Setting jenis font
$pdf->Image('logo.png' ,25,8,23,23);
$pdf->SetFont('Arial','B',10);
// Membuat string
$pdf->Cell(190,5,'KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN',0,1,'C');
$pdf->Cell(190,7,'KLINIK UNIVERSITAS LAMPUNG',0,1,'C');
$pdf->SetFont('Arial','B',7);
$pdf->Cell(190,5,'Jl. Prof. Dr. Sumantri Brojonegoro No. 1 Bandar Lampung 35145 Tlp.(0721)701609',0,1,'C');
$pdf->Cell(190,5,'Fax.(0721)702767 / wa.085281240911/082182920785 e-mail:klinikunila@gmail.com',0,1,'C');
$pdf->SetLineWidth(0.6);
$pdf->Line(190, 33, 15, 33);
$pdf->SetFont('Arial','B',9);
// Membuat string
$pdf->Cell(190,10,'KWITANSI PEMBAYARAN KLINIK UNILA',0,1,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(15);
$pdf->Cell(140,7,'No. Rekam Medik    :   '.$nomor_rekam_medis,0,1,'L');
$pdf->Cell(15);
$pdf->Cell(140,3,'Nama                       :   '.$nama_pasien,0,1,'L');
$pdf->Cell(15);
$pdf->Cell(140,7,'Untuk Pembayaran  :',0,1,'L');

// Setting spasi kebawah supaya tidak rapat

$pdf->SetLineWidth(0.2);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(15);
$pdf->Cell(10,6,'NO',1,0);
$pdf->Cell(80,6,'Tindakan',1,0);
$pdf->Cell(25,6,'Tarif',1,1);

$pdf->SetFont('Arial','',10);

$select_penanganan = "SELECT * FROM `penanganan` WHERE id_diagnosa = '$id_diagnosa'";
$query_penanganan = mysqli_query($conn, $select_penanganan);

$num =1;
$pdf->Cell(15);
$pdf->Cell(10,6,$num,1,0);
$pdf->Cell(80,6,'Konsultasi dan Obat',1,0);
$pdf->Cell(25,6,'Rp '.$total,1,1);
while ($data_penanganan = mysqli_fetch_array($query_penanganan)) {
  $id_tindakan = $data_penanganan['id_tindakan'];
  $select_t = "SELECT * FROM `tindakan` WHERE id_tindakan = $id_tindakan";
  $query_t = mysqli_query($conn, $select_t);
  $data_t = mysqli_fetch_array($query_t);
  $nama_tindakan = $data_t['nama_tindakan'];
  $select_tindakan = "SELECT * FROM `tarif_tindakan` WHERE id_tindakan=$id_tindakan";
  $query_tt = mysqli_query($conn, $select_tindakan);
  while ($data_tt = mysqli_fetch_array($query_tt)) {
    $start_date = $data_tt ['start_date'];
    $end_date = $data_tt ['end_date'];
    $tahun_mulai =substr($start_date,0,4);
    $bulan_mulai =substr($start_date,5,2);
    $tanggal_mulai =  substr($start_date,8,2);
    $tarif = $data_tt['tarif'];
  }
  $num = $num +1;
  $pdf->Cell(15);
  $pdf->Cell(10,6,$num,1,0);
  $pdf->Cell(80,6,$nama_tindakan,1,0);
  if ($end_date == null) {
    if ($tahun_mulai <= $tahun_diagnosa && $bulan_mulai <= $bulan_diagnosa) {
      $total = $total + $tarif ;
      $pdf->Cell(25,6,'Rp '.$tarif,1,1);
    }
  }
}
$total_sum1 = $total+$sum;
$pdf->Cell(15);
$pdf->Cell(10,6,$num,1,0);
$pdf->Cell(80,6,'Tes LAB',1,0);
$pdf->Cell(25,6,'Rp '.$sum,1,1);
$pdf->Cell(15);
$pdf->Cell(10,6,'Total',1,0);
$pdf->Cell(80,6,'',1,0);
$pdf->Cell(25,6,'Rp '.$total_sum1,1,1);
$pdf->Cell(15);
$pdf->Cell(115,6,'Terbilang : '.$terbilang,1,1);


$pdf->Cell(125);
$pdf->Cell(30,9,'Bandar Lampung, '.date('l d M Y'),0,1,'L');
$pdf->Cell(125);
$pdf->Cell(30,2,'Penerima,',0,1,'L');
$pdf->Cell(125);
$pdf->Cell(30,30,'Kasir',0,1,'L');

#$query = mysqli_query($conn, "SELECT * FROM ");
#while ($row = mysqli_fetch_array($query)){
#    $pdf->Cell(10,6,$row['id'],1,0);
#    $pdf->Cell(50,6,$row['NamaMotor'],1,0);
#    $pdf->Cell(25,6,$row['Cicilan'],1,1);
#}
$update_d = "UPDATE `diagnosa` SET `status_pembayaran` = '0' WHERE `diagnosa`.`id_diagnosa` = $id_diagnosa";
$query_update_d = mysqli_query($conn, $update_d);
$update_pasien = "UPDATE `pasien` SET `level` = '1' WHERE `pasien`.`no_rekam_medis` = $nomor_rekam_medis";
$query_pasien_update = mysqli_query($conn, $update_pasien);
$pdf->Output();
?>
