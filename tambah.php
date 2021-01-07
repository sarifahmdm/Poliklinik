<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/linearis.css">
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h4><a href="index.php" class"title">Data Praktikum</a></h4>
        <div class="nav">
          <a href="index.php">Home</a>
        </div>
      </div>
    </div>
    <?php
     include 'connection.php';
     $npm=$_POST['npm'];
     $nama=$_POST['nama'];
     $kelas=$_POST['kelas'];
     $email=$_POST['email'];
     $nilai=$_POST['nilai'];
     $nomor_ruang=$_POST['nomor_ruang'];
     $kode_matkul=$_POST['kode_matkul'];
     $Jurusan=$_POST['Jurusan'];
     $tambah="INSERT INTO `praktikan`(`npm`, `nama`, `kelas`, `email`, `nilai`,
       `nomor_ruang`, `kode_matkul`, `Jurusan`) VALUES ($npm,'$nama',
         '$kelas','$email','$nilai',$nomor_ruang,'$kode_matkul','$Jurusan')";
     $query = mysqli_query($conn,$tambah);
     if($query){
       echo"<br><br><center><h3>Data berhasil disimpan</h3></center>";
     } else {
      echo"<br><br><center><h3>Error, please try again!</h3></center>";
     }
    ?>
  </body>

</html>
