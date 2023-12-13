
<?php
$koneksi=mysqli_connect("localhost","root","","sekolah");
$id=$_GET['id'];
$hapus=mysqli_query($koneksi,"DELETE FROM crud WHERE id='$id'");
if($hapus>0){
    echo "<script>  alert('Data Berhasil Dihapus');
        document.location.href='tampil_data.php';</script>";
}

else{
    echo'<div class ="alert-error"> Data Gagal Dihapus </div>';
}

?>

<html>
<link rel="stylesheet" href="uts.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">


<center>
<a class="btn btn-success" href="tambah_data.php">Add</a> 
<a class="btn btn-warning" href="tampil_data.php">Back</a> 
</center>

</html>





