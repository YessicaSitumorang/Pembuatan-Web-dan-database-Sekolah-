<?php
$koneksi=mysqli_connect("localhost","root","","sekolah");
$id=$_GET["id"];
if(isset($_POST["edit"])){
    $nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];

    $update=mysqli_query($koneksi,"UPDATE crud SET nik='$nik', nama='$nama',jenis_kelamin='$jenis_kelamin',alamat='$alamat',nohp='$nohp' WHERE id='$id'");

    if($update >0){
      echo "<script>  alert('data berhasil di Edit');
        document.location.href='tampil_data.php';</script>";
    }

    else{
      echo'<div class ="alert-error"> Data Gagal Diedit </div>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">


</head>
<body>
    <form class="shadow-lg p-3 mb-5 bg-body rounded" method="POST">
    <h2 class="judul">Data Edit</h2><br>
  <div class="mb-3">
    <label for="nik" class="form-label">NIK</label>
    <input type="text" class="form-control" name="nik" id="nik"></div>
  </div>

  <div class="mb-3">
    <label for="Nama" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" id="nama"></div>
  </div>

  <div class="mb-3">
    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
    <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin"></div>
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="alamat"></div>
  </div>
  <div class="mb-3">
    <label for="nohp" class="form-label">Phone Number</label>
    <input type="number" class="form-control" name="nohp" id="nohp"></div>
  </div>
<center>
<br><input type="submit" value="Save" name="edit" class="btn btn-warning" href="tampil_data.php">
<a class="btn btn-danger" href="tampil_data.php">Back</a> 
</center>
</form>

<style>


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

form {
    margin-top : 30px;
    margin-left: 20em;
margin-right: 20em;
}

h2 {
color:white;
text-align: center;
font-weight: bold;
font-size: 1rem;
line-height: 70px;
background: #333652;
padding: 9px;
border-radius: 50px;
font-size:40px;
}
</style>
</body>
</html>