<?php
    session_start();
    include 'connection.php';
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lemonada&display=swap" rel="stylesheet">
        <title> Halaman Login</title>
    </head>

<body>
    <!-- Halaman Login -->
    <div class="page-login">
        <div class="kotak kotak-login">
            <div class="box-header text-center ">
              <b>Silahkan Login</b>
                </div>

            <div class="box-body">

            <form action="" method="POST">

                <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" placeholder="Username" class="input-control">
                </div>
                <div class="form-group">
                    <label> Password </label>
                    <input type="password" name="password" placeholder="Password" class="input-control">
                </div> 
                <center>
                <div class="text-center"></div>
                <a href="register.php" id="signup">Don't have account yet?</a><br>
                <input type="submit" name="submit" value="login" class="btn_login">
                </div>
                <center>
            </form>
            </form>
            <?php 
                if(isset($_POST['submit'])){

                	$user= mysqli_real_escape_string($conn,$_POST['username']);
                	$pass= mysqli_real_escape_string($conn,$_POST['password']);

                	$cek  = mysqli_query($conn, "SELECT * FROM tb_pengguna WHERE username ='".$user."'");
                	if(mysqli_num_rows($cek)> 0){

                        $d = mysqli_fetch_object($cek);
                         if($pass == $d->password){
                            $_SESSION['status_login'] = true;
                            $_SESSION['uname'] =$d->username;
                        
                            echo "<script>window.location = 'admin/index.php' </script>";

                         }else{
                           echo'<div class="alert alert-error"> PASSWORD SALAH </div>';
                         }
                    }else{
                        echo'<div class ="alert-error"> USERNAME TIDAK DITEMUKAN </div>';
                    }
                    } 
                          
            
                ?>

                </div>
        </div>
    </div>
    </div>
</body>

</html>

