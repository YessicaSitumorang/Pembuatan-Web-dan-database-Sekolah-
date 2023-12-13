<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel Admin-Nama Sekolah </title>
    <link  href="style1.css?version=<?php echo filemtime('style1.css'); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lemonada&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lemon&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="bv">

     <!--ini navbar-->
    <div class="container">
       <nav class="navbar navbar-expand-lg bg-light" id="navbarScroll">
  <div class="container-fluid">
    <a class="navbar-brand" id="kel"> Kelompok 1 </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"> Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="tambah_data.php">Formulir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="ekskul.php">Ekskul </a>
          <li class="nav-item">
          <a class="nav-link active" href="tampil_data.php"> Siswa </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="alamat_data.php">Alamat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="logout.php">Keluar</a>
        </li>
  </ul>
</div>
</div>
    </div>
    </div>
    <div class="content">

    <form action="cek_tambah_data.php" method="POST" id="tambah">
        <center>
        <h1 id="Judul"> <br>Tambah Data <br></h1>
        <table width="100%" height="100%" id="tambah">
            <br>
             <tr>
                <td><label for="nik">NIK</label></td>
                <td ><input id ="kolom2" type="text" name="nik" id="nik" required></td>
            </tr>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td ><input  id ="kolom2" type="text" name="nama" id="nama" required></td>
            </tr>
            <tr>
                <td><label for="jenis_kelamin">Jenis_kelamin</label></td>
                <td><input  id ="kolom2" type="jenis_kelamin" name="jenis_kelamin" id="jenis_kelamin" required></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td><input  id ="kolom2" type="text" name="alamat" id="alamat" required></td>
            </tr>
            <tr>
                <td><label for="nohp">Nomor Hp</label></td>
                <td><input  id ="kolom2" type="text" name="nohp" id="nohp" required></td>
            </tr>
        </table>
        <br> 
        <button class= "btn btn-warning" type="submit" name="tambah">Tambah</button>
        </center>
        <br>
    </form>
    </div>

    <script src="script.js"></script>
</body>
</html>