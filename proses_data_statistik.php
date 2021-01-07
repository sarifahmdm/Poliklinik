<?php
  include 'connection.php';

  $bulan = $_POST['bulan'];
  $tahun = $_POST['tahun'];
  $pekerjaan = $_POST['pekerjaan'];
  $jenis_penyakit = $_POST['jenis_penyakit'];
  $jumlah = 0;
  $presentase = 1;

  if ($bulan ='semua') {
    if ($tahun = 'semua') {
      if ($pekerjaan = 'semua') {
        if ($jenis_penyakit = 'semua') {
          $kondisi = 1;
          header ('Location:tampilan_statistik.php?bulan='.$bulan.'&& tahun='.$tahun.'&& pekerjaan='.$pekerjaan.
            '&& jenis_penyakit='.$jenis_penyakit.'&& jumlah='.$jumlah.'&& presentase='.$presentase.'&& kondisi='.$kondisi);
        } else {
          $kondisi = 2;
          header ('Location:tampilan_statistik.php?bulan='.$bulan.'&& tahun='.$tahun.'&& pekerjaan='.$pekerjaan.
            '&& jenis_penyakit='.$jenis_penyakit.'&& jumlah='.$jumlah.'&& presentase='.$presentase.'&& kondisi='.$kondisi);
        }
      } else {
        if ($jenis_penyakit = 'semua') {
          $kondisi = 3;
          header ('Location:tampilan_statistik.php?bulan='.$bulan.'&& tahun='.$tahun.'&& pekerjaan='.$pekerjaan.
            '&& jenis_penyakit='.$jenis_penyakit.'&& jumlah='.$jumlah.'&& presentase='.$presentase.'&& kondisi='.$kondisi);
        } else {
          $kondisi = 4;
          header ('Location:tampilan_statistik.php?bulan='.$bulan.'&& tahun='.$tahun.'&& pekerjaan='.$pekerjaan.
            '&& jenis_penyakit='.$jenis_penyakit.'&& jumlah='.$jumlah.'&& presentase='.$presentase.'&& kondisi='.$kondisi);
        }
      }
    } else {
      if ($pekerjaan = 'semua') {
        if ($jenis_penyakit = 'semua') {
          $kondisi = 5;
          header ('Location:tampilan_statistik.php?bulan='.$bulan.'&& tahun='.$tahun.'&& pekerjaan='.$pekerjaan.
            '&& jenis_penyakit='.$jenis_penyakit.'&& jumlah='.$jumlah.'&& presentase='.$presentase.'&& kondisi='.$kondisi);
        } else {
          $kondisi = 6;
          header ('Location:tampilan_statistik.php?bulan='.$bulan.'&& tahun='.$tahun.'&& pekerjaan='.$pekerjaan.
            '&& jenis_penyakit='.$jenis_penyakit.'&& jumlah='.$jumlah.'&& presentase='.$presentase.'&& kondisi='.$kondisi);
        }
      } else {
        if ($jenis_penyakit = 'semua') {
          $kondisi = 7;
          header ('Location:tampilan_statistik.php?bulan='.$bulan.'&& tahun='.$tahun.'&& pekerjaan='.$pekerjaan.
            '&& jenis_penyakit='.$jenis_penyakit.'&& jumlah='.$jumlah.'&& presentase='.$presentase.'&& kondisi='.$kondisi);
        } else {
          $kondisi = 8;
          header ('Location:tampilan_statistik.php?bulan='.$bulan.'&& tahun='.$tahun.'&& pekerjaan='.$pekerjaan.
            '&& jenis_penyakit='.$jenis_penyakit.'&& jumlah='.$jumlah.'&& presentase='.$presentase.'&& kondisi='.$kondisi);
        }
      }
    }
  } else {
    if ($tahun = 'semua') {
      if ($pekerjaan = 'semua') {
        if ($jenis_penyakit = 'semua') {
          $kondisi = 9;
          header ('Location:tampilan_statistik.php?bulan='.$bulan.'&& tahun='.$tahun.'&& pekerjaan='.$pekerjaan.
            '&& jenis_penyakit='.$jenis_penyakit.'&& jumlah='.$jumlah.'&& presentase='.$presentase.'&& kondisi='.$kondisi);
        } else {
          $kondisi = 10;
          header ('Location:tampilan_statistik.php?bulan='.$bulan.'&& tahun='.$tahun.'&& pekerjaan='.$pekerjaan.
            '&& jenis_penyakit='.$jenis_penyakit.'&& jumlah='.$jumlah.'&& presentase='.$presentase.'&& kondisi='.$kondisi);
        }
      } else {
        if ($jenis_penyakit = 'semua') {
          $kondisi = 11;
          header ('Location:tampilan_statistik.php?bulan='.$bulan.'&& tahun='.$tahun.'&& pekerjaan='.$pekerjaan.
            '&& jenis_penyakit='.$jenis_penyakit.'&& jumlah='.$jumlah.'&& presentase='.$presentase.'&& kondisi='.$kondisi);
        } else {
          $kondisi = 12;
          header ('Location:tampilan_statistik.php?bulan='.$bulan.'&& tahun='.$tahun.'&& pekerjaan='.$pekerjaan.
            '&& jenis_penyakit='.$jenis_penyakit.'&& jumlah='.$jumlah.'&& presentase='.$presentase.'&& kondisi='.$kondisi);
        }
      }
    } else {
      if ($pekerjaan = 'semua') {
        if ($jenis_penyakit = 'semua') {
          $kondisi = 12;
          header ('Location:tampilan_statistik.php?bulan='.$bulan.'&& tahun='.$tahun.'&& pekerjaan='.$pekerjaan.
            '&& jenis_penyakit='.$jenis_penyakit.'&& jumlah='.$jumlah.'&& presentase='.$presentase.'&& kondisi='.$kondisi);
        } else {
          $kondisi = 13;
          header ('Location:tampilan_statistik.php?bulan='.$bulan.'&& tahun='.$tahun.'&& pekerjaan='.$pekerjaan.
            '&& jenis_penyakit='.$jenis_penyakit.'&& jumlah='.$jumlah.'&& presentase='.$presentase.'&& kondisi='.$kondisi);
        }
      } else {
        if ($jenis_penyakit = 'semua') {
          $kondisi = 14;
          header ('Location:tampilan_statistik.php?bulan='.$bulan.'&& tahun='.$tahun.'&& pekerjaan='.$pekerjaan.
            '&& jenis_penyakit='.$jenis_penyakit.'&& jumlah='.$jumlah.'&& presentase='.$presentase.'&& kondisi='.$kondisi);
        } else {
          $kondisi = 15;
          header ('Location:tampilan_statistik.php?bulan='.$bulan.'&& tahun='.$tahun.'&& pekerjaan='.$pekerjaan.
            '&& jenis_penyakit='.$jenis_penyakit.'&& jumlah='.$jumlah.'&& presentase='.$presentase.'&& kondisi='.$kondisi);
        }
      }
    }
  }
?>
