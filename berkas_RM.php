<?php
include 'connection.php';
#$id_diagnosa = $_GET['id_diagnosa'];
$id_diagnosa = $_GET['id_diagnosa'];
$select_diagnosa = "SELECT * FROM `diagnosa` WHERE id_diagnosa ='$id_diagnosa'";
$query_select_diagnosa = mysqli_query($conn, $select_diagnosa);
$data_diagnosa = mysqli_fetch_array($query_select_diagnosa);
$nomor_rekam_medis = $data_diagnosa['no_rekam_medis'];
$select_pasien ="SELECT * FROM `pasien` WHERE no_rekam_medis = '$nomor_rekam_medis'";
$query_pasien = mysqli_query($conn, $select_pasien);
$data_pasien = mysqli_fetch_array($query_pasien);
$id_pasien = $data_pasien['id_pasien'];
$nama_pasien = $data_pasien['nama_pasien'];
$suku_bangsa = $data_pasien['suku'];
$jenis_kelamin = $data_pasien['jenis_kelamin'];
$agama = $data_pasien['agama'];
$pendidikan_terakhir = $data_pasien['pendidikan_terakhir'];
$status_perkawinan = $data_pasien['status_perkawinan'];
$pekerjaan = $data_pasien['id_pekerjaan'];
$nomor_induk_keluarga =$data_pasien['nik'];
$id_alamat = $data_pasien['id_alamat'];
$select_pembiayaan = "SELECT * FROM `pembiayaan` WHERE id_pasien = '$id_pasien'";
$query_select_pembiayaan = mysqli_query($conn, $select_pembiayaan);
$data_pembiayaan = mysqli_fetch_array($query_select_pembiayaan);
$jenis_pembiayaan =$data_pembiayaan['jenis_pembiayaan'];
$nama_asuransi = $data_pembiayaan['nama_asuransi'];
$nomor_asuransi = $data_pembiayaan['nomor_asuransi'];
$tgl_lahir = $data_pasien['tgl_lahir'];
$tanggal = new DateTime($tgl_lahir);
$today = new DateTime();
$umur = $today->diff($tanggal)->y;
$keluhan_utama = $data_diagnosa['keluhan_utama'];
$rp_sekarang =$data_diagnosa['rp_sekarang'];
$rp_dahulu= $data_diagnosa['rp_dahulu'];
$rp_keluarga = $data_diagnosa['rp_keluarga'];
$rp_sosial = $data_diagnosa['rp_pribadi_sosial'];
$diagnosis = $data_diagnosa['diagnosis'];
$diagnosis_banding = $data_diagnosa['diagnosis_banding'];
$edukasi = $data_diagnosa['edukasi'];

$select_tanda_vital = "SELECT * FROM `tanda_vital` WHERE id_diagnosa ='$id_diagnosa'";
$query_select_tv = mysqli_query($conn, $select_tanda_vital);
$data_tv= mysqli_fetch_array($query_select_tv);
$tekanan_darah = $data_tv['tekanan_darah'];
$nadi = $data_tv['nadi'];
$suhu =$data_tv['suhu'];
$respirasi = $data_tv['respirasi'];

$select_alamat = "SELECT * FROM `alamat` WHERE id_alamat = '$id_alamat'";
$query_select_alamat = mysqli_query($conn, $select_alamat);
$data_alamat = mysqli_fetch_array($query_select_alamat);
$alamat_rumah = $data_alamat ['alamat_lengkap'];

$select_pemeriksaan_fisik = "SELECT * FROM `pemeriksaan_fisik`
  WHERE id_diagnosa ='$id_diagnosa'";
$query_select_ps= mysqli_query($conn, $select_pemeriksaan_fisik);
$data_ps = mysqli_fetch_array($query_select_ps);
$kepala_dan_leher = $data_ps['kepala_dan_leher'];
$thorax =$data_ps['thorax'];
$abdomen = $data_ps['abdomen'];
$ekstrimitas = $data_ps['ekstremitas'];
$status_lokalisasi = $data_ps['status_lokalisasi'];

$select_pp = "SELECT * FROM `pemeriksaan_penunjang` WHERE id_diagnosa='$id_diagnosa'";
$query_pp = mysqli_query($conn, $select_pp);
$data_pp = mysqli_fetch_array($query_pp);
$hemoglobin = $data_pp['hemoglobin'];
$lekosit = $data_pp['lekosit'];
$led = $data_pp['led'];
$trombosit = $data_pp['trombosit'];
$hemotrocit = $data_pp['hemotrocit'];
$mcv = $data_pp['mcv'];
$mch = $data_pp['mch'];
$mchc = $data_pp['mchc'];
$gula_darah_swaktu = $data_pp['gula_darah_swaktu'];
$gula_darah_puasa = $data_pp['gula_darah_puasa'];
$gula_darah_post_prandial = $data_pp['gula_darah_post_prandial'];
$kolestrol_total = $data_pp['kolestrol_total'];
$asam_urat = $data_pp['asam_urat'];
$urea = $data_pp['urea'];
$creatinine = $data_pp['creatinine'];
$sgot = $data_pp['sgot'];
$sgpt = $data_pp['sgpt'];
$dengue = $data_pp['dengue'];
$widal = $data_pp['widal'];
$pp_test = $data_pp['pp_test'];
$urine_lengkap = $data_pp['urine_lengkap'];

// Koneksi library FPDF
require('fpdf.php');
// Setting halaman PDF
$pdf = new FPDF('p','mm','A4');
// Menambah halaman baru
$pdf->AddPage();
// Setting jenis font
$pdf->Image('logo.png' ,25,8,23,23);
$pdf->SetFont('Arial','B',11);
// Membuat string
$pdf->Cell(190,5,'KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN',0,1,'C');
$pdf->Cell(190,7,'KLINIK UNIVERSITAS LAMPUNG',0,1,'C');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(190,5,'Jl. Prof. Dr. Sumantri Brojonegoro No. 1 Bandar Lampung 35145 Tlp.(0721)701609',0,1,'C');
$pdf->Cell(190,5,'Fax.(0721)702767 / wa.085281240911/082182920785 e-mail:klinikunila@gmail.com',0,1,'C');
$pdf->SetLineWidth(0.6);
$pdf->Line(190, 33, 20, 33);
$pdf->SetFont('Arial','B',11);
// Membuat string
$pdf->Cell(190,10,'Rekam Medis Rawat Jalan',0,1,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(15);
$pdf->Cell(43,5,'No. Rekam Medik',0,0);
$pdf->Cell(4,5,' : ',0,0);
$pdf->Cell(40,5,$nomor_rekam_medis,0,0);
$pdf->Cell(43,5,'Suku Bangsa',0,0);
$pdf->Cell(4,5,' : ',0,0);
$pdf->Cell(15,5,$suku_bangsa,0,1);
$pdf->Cell(15);
$pdf->Cell(43,5,'Nomor Induk Keluarga   ',0,0);
$pdf->Cell(4,5,' : ',0,0);
$pdf->Cell(40,5,$nomor_induk_keluarga,0,0);
$pdf->Cell(43,5,'Pekerjaan',0,0);
$pdf->Cell(4,5,' : ',0,0);
$pdf->Cell(15,5,$pekerjaan,0,1);
$pdf->Cell(15);
$pdf->Cell(43,5,'Nama Pasien ',0,0);
$pdf->Cell(4,5,' : ',0,0);
$pdf->Cell(40,5,$nama_pasien,0,0);
$pdf->Cell(43,5,'Pendidikan Terakhir',0,0);
$pdf->Cell(4,5,' : ',0,0);
$pdf->Cell(15,5,$pendidikan_terakhir,0,1);
$pdf->Cell(15);
$pdf->Cell(43,5,'Umur ',0,0);
$pdf->Cell(4,5,' : ',0,0);
$pdf->Cell(40,5,$umur,0,0);
$pdf->Cell(43,5,'Status Perkawinan',0,0);
$pdf->Cell(4,5,' : ',0,0);
$pdf->Cell(15,5,$status_perkawinan,0,1);
$pdf->Cell(15);
$pdf->Cell(43,5,'Jenis Kelamin ',0,0);
$pdf->Cell(4,5,' : ',0,0);
$pdf->Cell(40,5,$jenis_kelamin,0,0);
$pdf->Cell(43,5,'Pekerjaan',0,0);
$pdf->Cell(4,5,' : ',0,0);
$pdf->Cell(15,5,$pekerjaan,0,1);
$pdf->Cell(15);
$pdf->Cell(43,5,'Alamat Rumah',0,0);
$pdf->Cell(4,5,' : ',0,0);
$pdf->Cell(40,5,$alamat_rumah,0,0);
$pdf->Cell(43,5,'Jenis Pembiayaan',0,0);
$pdf->Cell(4,5,' : ',0,0);

if($jenis_pembiayaan != "Umum"){
  $pdf->Cell(15,5,$jenis_pembiayaan."/".$nama_asuransi,0,1);
} else {
  $pdf->Cell(15,5,$jenis_pembiayaan
  ,0,1);
}

$pdf->Cell(15);
$pdf->Cell(43,5,'Agama',0,0);
$pdf->Cell(4,5,' : ',0,0);
$pdf->Cell(40,5,$agama,0,0);
$pdf->Cell(43,5,'Nomor Asuransi',0,0);
$pdf->Cell(4,5,' : ',0,0);
$pdf->Cell(15,5,$nomor_asuransi,0,1);

// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(10,4,'',0,1);
$pdf->SetLineWidth(0.2);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(6);
$pdf->Cell(40,6,'Anamnesis',1,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(28,6,'Tekanan Darah ',1,0);
$pdf->Cell(5,6,' :',1,0);
$pdf->Cell(20,6,$tekanan_darah.' k/m',1,0);
$pdf->Cell(12,6,'Nadi',1,0);
$pdf->Cell(5,6,' :',1,0);
$pdf->Cell(15,6,$nadi.' mnHg',1,0);
$pdf->Cell(12,6,'Suhu ',1,0);
$pdf->Cell(5,6,' :',1,0);
$pdf->Cell(10,6,$suhu.' C',1,0);
$pdf->Cell(18,6,'Respirasi',1,0);
$pdf->Cell(5,6,' :',1,0);
$pdf->Cell(15,6,$respirasi.' k/m',1,1);

$select_penanganan = "SELECT * FROM `penanganan` WHERE id_diagnosa = '$id_diagnosa'";
$query_penanganan = mysqli_query($conn, $select_penanganan);
$data_penanganan = mysqli_fetch_array($query_penanganan);
$pdf->SetFont('Arial','',10);
$total = 35000;
  $pdf->Cell(6);
  $pdf->Cell(40,6,'Keluhan Utama',1,0);
  $pdf->Cell(5,6,' :',0,0);
  $pdf->Cell(145,6,$keluhan_utama,1,1);
  $pdf->Cell(6);
  $pdf->Cell(40,6,'RP Sekarang ',1,0);
  $pdf->Cell(5,6,' :',0,0);
  $pdf->Cell(145,6,$rp_sekarang,1,1);
  $pdf->Cell(6);
  $pdf->Cell(40,6,'RP Dahulu ',1,0);
  $pdf->Cell(5,6,' :',0,0);
  $pdf->Cell(145,6,$rp_dahulu,1,1);
  $pdf->Cell(6);
  $pdf->Cell(40,6,'RP Keluarga ',1,0);
  $pdf->Cell(5,6,' :',0,0);
  $pdf->Cell(145,6,$rp_keluarga,1,1);
  $pdf->Cell(6);
  $pdf->Cell(40,6,'RP Sosial dan Pribadi ',1,0);
  $pdf->Cell(5,6,' :',0,0);
  $pdf->Cell(145,6,$rp_sosial,1,1);

  $pdf->SetFont('Arial','B',11);
  $pdf->Cell(6);
  $pdf->Cell(190,6,'Pemeriksaan Fisik',1,1);
  $pdf->SetFont('Arial','',10);
  $pdf->Cell(6);
  $pdf->Cell(40,6,'Kepala dan Leher',1,0);
  $pdf->Cell(5,6,' :',0,0);
  $pdf->Cell(145,6,$kepala_dan_leher,1,1);
  $pdf->Cell(6);
  $pdf->Cell(40,6,'Thorax ',1,0);
  $pdf->Cell(5,6,' :',0,0);
  $pdf->Cell(145,6,$thorax,1,1);
  $pdf->Cell(6);
  $pdf->Cell(40,6,'Abdomen ',1,0);
  $pdf->Cell(5,6,' :',0,0);
  $pdf->Cell(145,6,$abdomen,1,1);
  $pdf->Cell(6);
  $pdf->Cell(40,6,'Ekstrimitas ',1,0);
  $pdf->Cell(5,6,' :',0,0);
  $pdf->Cell(145,6,$ekstrimitas,1,1);
  $pdf->Cell(6);
  $pdf->Cell(40,6,'Status dan Lokalisasi ',1,0);
  $pdf->Cell(5,6,' :',0,0);
  $pdf->Cell(145,6,$status_lokalisasi,1,1);

  $pdf->SetFont('Arial','B',11);
  $pdf->Cell(6);
  $pdf->Cell(190,6,'Pemeriksaan Penunjang',1,1);
  $pdf->SetFont('Arial','',10);
  $pdf->Cell(6);
  $pdf->Cell(28,6,'Hemoglobin ',1,0);
  $pdf->Cell(5,6,' :',1,0);
  $pdf->Cell(15,6,$hemoglobin,1,0);
  $pdf->Cell(12,6,'lekosit',1,0);
  $pdf->Cell(5,6,' :',1,0);
  $pdf->Cell(15,6,$lekosit,1,0);
  $pdf->Cell(12,6,'Led ',1,0);
  $pdf->Cell(5,6,' :',1,0);
  $pdf->Cell(13,6,$led,1,0);
  $pdf->Cell(20,6,'Trombosit',1,0);
  $pdf->Cell(5,6,' :',1,0);
  $pdf->Cell(7,6,$trombosit,1,0);
  $pdf->Cell(30,6,'SGPT ',1,0);
  $pdf->Cell(5,6,' :',1,0);
  $pdf->Cell(13,6,$sgpt,1,1);

  $pdf->Cell(6);
  $pdf->Cell(28,6,'Hemotrocit ',1,0);
  $pdf->Cell(5,6,' :',1,0);
  $pdf->Cell(15,6,$hemotrocit,1,0);
  $pdf->Cell(12,6,'MCV',1,0);
  $pdf->Cell(5,6,' :',1,0);
  $pdf->Cell(15,6,$mcv,1,0);
  $pdf->Cell(12,6,'MCH ',1,0);
  $pdf->Cell(5,6,' :',1,0);
  $pdf->Cell(13,6,$mch,1,0);
  $pdf->Cell(20,6,'MCHC',1,0);
  $pdf->Cell(5,6,' :',1,0);
  $pdf->Cell(7,6,$mchc,1,0);
  $pdf->Cell(30,6,'PP Test',1,0);
  $pdf->Cell(5,6,' :',1,0);
  $pdf->Cell(13,6,$pp_test,1,1);


  $pdf->Cell(6);
  $pdf->Cell(28,6,'Urea ',1,0);
  $pdf->Cell(5,6,' :',1,0);
  $pdf->Cell(15,6,$urea,1,0);
  $pdf->Cell(12,6,'Widal',1,0);
  $pdf->Cell(5,6,' :',1,0);
  $pdf->Cell(15,6,$widal,1,0);
  $pdf->Cell(12,6,'SGOT ',1,0);
  $pdf->Cell(5,6,' :',1,0);
  $pdf->Cell(13,6,$sgot,1,0);
  $pdf->Cell(20,6,'Dengue',1,0);
  $pdf->Cell(5,6,' :',1,0);
  $pdf->Cell(7,6,$dengue,1,0);
  $pdf->Cell(30,6,'Urine Lengkap ',1,0);
  $pdf->Cell(5,6,' :',1,0);
  $pdf->Cell(13,6,$urine_lengkap,1,1);

  $pdf->Cell(6);
  $pdf->Cell(40,6,'Creatinine',1,0);
  $pdf->Cell(5,6,' :',1,0);
  $pdf->Cell(15,6,$creatinine,1,0);
  $pdf->Cell(45,6,'Gula Darah Swaktu ',1,0);
  $pdf->Cell(5,6,' :',1,0);
  $pdf->Cell(15,6,$gula_darah_swaktu,1,0);
  $pdf->Cell(45,6,'Gula Darah Puasa',1,0);
  $pdf->Cell(5,6,' :',1,0);
  $pdf->Cell(15,6,$gula_darah_puasa,1,1);
  $pdf->Cell(6);
  $pdf->Cell(75,6,'Gula Darah Post Prandial ',1,0);
  $pdf->Cell(5,6,' :',1,0);
  $pdf->Cell(15,6,$gula_darah_post_prandial,1,0);
  $pdf->Cell(75,6,'Asam Urat',1,0);
  $pdf->Cell(5,6,' :',1,0);
  $pdf->Cell(15,6,$asam_urat,1,1);

  $pdf->SetFont('Arial','B',11);
  $pdf->Cell(6);
  $pdf->Cell(190,6,'Diagnosis dan Diagnosis Banding',1,1);
  $pdf->SetFont('Arial','',10);
  $pdf->Cell(6);
  $pdf->Cell(55,6,'Diagnosis',1,0);
  $pdf->Cell(5,6,' :',1,0);
  $pdf->Cell(130,6,$diagnosis,1,1);
  $pdf->Cell(6);
  $pdf->Cell(55,6,'Diagnosis Banding',1,0);
  $pdf->Cell(5,6,' :',1,0);
  $pdf->Cell(130,6,$diagnosis_banding,1,1);

  $pdf->SetFont('Arial','B',11);
  $pdf->Cell(6);
  $pdf->Cell(190,6,'Terapi',1,1);
  $pdf->SetFont('Arial','',10);

  $select_resep = "SELECT * FROM `resep` WHERE id_diagnosa='$id_diagnosa'";
  $query_resep = mysqli_query($conn, $select_resep);
  while ($data_resep = mysqli_fetch_array($query_resep)) {
    $kode_obat = $data_resep['kode_obat'];
    $aturan_pemakaian = $data_resep['aturan_pemakaian'];
    $select_obat = "SELECT * FROM `obat` WHERE kode_obat='$kode_obat'";
    $query_obat = mysqli_query($conn, $select_obat);
    $data_obat = mysqli_fetch_array($query_obat);
    $nama_obat = $data_obat['nama_obat'];
    $jumlah_obat = $data_resep['jumlah'];
    $pdf->Cell(6);
    $pdf->Cell(55,6,$nama_obat,1,0);
    $pdf->Cell(5,6,' :',0,0);
    $pdf->Cell(130,6,$aturan_pemakaian." ".$jumlah_obat,1,1);
  }
  $pdf->SetFont('Arial','B',10);
  $pdf->Cell(6);
  $pdf->Cell(190,6,'Edukasi',1,1);
  $pdf->SetFont('Arial','',10);
  $pdf->Cell(6);
  $pdf->Cell(190,6,$edukasi,1,1);


$pdf->Cell(25,4,'',0,1,'L');
$pdf->Cell(125);
$pdf->Cell(30,6,'Bandar Lampung, '.date('l d M Y'),0,1,'L');
$pdf->Cell(125);
$pdf->Cell(30,2,'Mengetahui,',0,1,'L');
$pdf->Cell(125);
$pdf->Cell(30,30,'Dokter',0,1,'L');
$pdf->Output();
?>
