<?php 
include 'connection.php';

if(isset($_POST["register"])){
    $username = strtolower(stripslashes($_POST["username"])); 
    $nama_lengkap = $_POST["nama_lengkap"];
    $password = mysqli_real_escape_string($conn,$_POST["password"]);

    $result = mysqli_query($conn, "SELECT username FROM tb_pengguna WHERE username='$username'");
    if(mysqli_fetch_assoc($result)){
        echo "
            <script>
                alert('username sudah terdaftar');
            </script>
        ";
        return false;
    }
    $epass = md5($password);
    mysqli_query($conn, "INSERT INTO tb_pengguna VALUES(,'$nama_lengkap','$username','$epass')");

    if(mysqli_affected_rows($conn)>0){
            echo "
            <script>
            alert('user berhasil dibuat');
            document.location.href='login.php';
            </script>
            ";
        } else {
            echo mysqli_error($conn);
        } 
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="registration-form">
        <form>
                <span><i class="icon icon-user "></i></span>
            <div class="kotak-regis">
                <input type="nama" class="form-control item" name="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap Anda">
            </div>
            <div class="kotak-regis">
                <input type="text" class="form-control item" name="username" id="username" placeholder="Username Akun">
            </div>
            <div class="kotak-regis">
                <input type="password" class="form-control item" name="password" id="password" placeholder="Password Akun">
            </div>
            <div class="kotak-regis">
            <button type="submit" name="register"  class="btn btn-block create-account">Create Account</button>
            </div>       
        </form>
    </div>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
