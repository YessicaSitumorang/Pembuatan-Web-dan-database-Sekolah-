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
</nav>
</li>
</div>

<center>
        <h1 id="Judul"> <br>Tambah Data <br></h1>
<br>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


<table class="shadow-lg p-3 mb-5 bg-body rounded">
    <thead>
        <tr>
            <th>No.</th>
            <th> NIK </th>
            <th> Nama </th>
            <th> Jenis Kelamin </th>
            <th> Alamat </th>
            <th> No.hp </th>
            <th>Edit | Delete </th>
        </tr>
    </thead>
    <tbody>
        <?php
        
        $koneksi=mysqli_connect("localhost","root","","sekolah");
        $query = mysqli_query($koneksi, "SELECT * FROM crud");
        $no = 0;
        while($data = mysqli_fetch_array($query)){
            $no++;
            ?>
            <tr>
                 <td><?php echo $no;?></td>
                <td><?php echo $data['nik'];?></td>
                <td><?php echo $data['nama'];?></td>
                <td><?php echo $data['jenis_kelamin'];?></td>
                <td><?php echo $data['alamat'];?></td>
                <td><?php echo $data['nohp'];?></td>
        
        <td>
            <a class="btn btn-warning" href="edit_data.php?id=<?= $data['id']?>">Edit</a>
            <a class="btn btn-danger" href="hapus_data.php?id=<?= $data['id']?>">Delete</a>
    <?php
        }
        ?>
        </tbody>
    </table>

    <center>
    <a class="btn btn-warning" href="tambah_data.php">Add</a>
    </center>
    <br><br><br><br>

<style>
*{
  font-family: sans;
}
a {
    color: white;
}


table {
  border-spacing: 1;
  border-collapse: collapse;
  border-radius: 6px;
  overflow: hidden;
  max-width: 800px;
  width: 100%;
  text-align: center;
}

table td, table th {
  padding-left: 8px;
  text-align: center;
  
}
table thead tr {
  height: 60px;
  background: #333652;
  font-size: 20px;
  color: black;
  text-align: center;
}

table thead tr td {
    text-align: center;
}

table tbody tr {
  height: 80px;
  border-bottom: 1px solid #000000;
  border-bottom-width: 2px ;
  text-align: center;
}

table td, table th {
    text-align: center;
}
table td.l, table th.l {
    text-align: center;
}
table td.c, table th.c {
  text-align: center;
}
table td.r, table th.r {
  text-align: center;
}

</style>
</body>
</html>