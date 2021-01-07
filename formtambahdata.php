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
  </head>
  <body>
      <div class="container">
        <div class="header">
          <h4><a href="index.php" class"title">Tambah Data Mahasiswa</a></h4>
        </div>
      </div>

    <div class="out">
      <div class="outsideBox">
        <form action="tambah.php" class="login" method="POST">
          <h1>Tambah Data</h1>
          <input type="text" name="npm" placeholder="NPM" required>
          <input type="text" name="nama" placeholder="Nama" required>
          <input type="text" name="kelas" placeholder="Kelas" required>
          <input type="text" name="email" placeholder="Email" required>
          <input type="text" name="nilai" placeholder="nilai" required>
          <input type="text" name="nomor_ruang" placeholder="nomor_ruang" required>
          <input type="text" name="kode_matkul" placeholder="kode_matkul" required>
          <input type="text" name="Jurusan" placeholder="Jurusan" required>
          <button type="submit" >Tambah</button>
        </form>
      </div>
    </div>
  </body>
</html>
