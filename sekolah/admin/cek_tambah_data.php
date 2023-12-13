
<?php
$koneksi=mysqli_connect("localhost","root","","sekolah");
if(isset($_POST['tambah'])){
    $nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];

    $tambah=mysqli_query($koneksi,"INSERT INTO crud VALUES ('','$nik','$nama','$jenis_kelamin','$alamat','$nohp')");
   
    if($tambah >0){
        echo "<script>  alert('data berhasil ditambah');
        document.location.href='tampil_data.php';</script>";
    }

    else{
        echo'<div class ="alert-error"> Data Tidak Berhasil </div>';
    }
}
?>

