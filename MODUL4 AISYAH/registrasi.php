<?php
require('konektor.php');
session_start();
$error = '';
$validate = '';
if( isset($_POST['submit']) ){
        $email    = stripslashes($_POST['Email']);
        $email    = mysqli_real_escape_string($connector, $email);
        $nama     = stripslashes($_POST['nama']);
        $nama     = mysqli_real_escape_string($connector, $nama);
        $nohp     = stripslashes($_POST['Nomor Handphone']);
        $nohp     = mysqli_real_escape_string($connector, $nohp);
        $password = stripslashes($_POST['Kata Sandi']);
        $password = mysqli_real_escape_string($connector, $password);
        $repass   = stripslashes($_POST['Konfirmasi Kata Sandi']);
        $repass   = mysqli_real_escape_string($connector, $repass);
        if(!empty(trim($email)) && !empty(trim($nama)) && !empty(trim($nohp)) && !empty(trim($password)) && !empty(trim($repass))){
            if($password == $repass){
                if( cek_nama($name,$con) == 0 ){
                    $pass  = password_hash($password, PASSWORD_DEFAULT);
                    $query = "INSERT INTO users (email,nama,Nomor Handphone, password ) VALUES ('$email','$nama','$nohp','$pass')";
                    $result   = mysqli_query($con, $query);
                    if ($result) {
                        $_SESSION['username'] = $username;
                        
                        header('Location: index.php');
                     
                    //jika gagal maka akan menampilkan pesan error
                    } else {
                        $error =  'Register User Gagal !!';
                    }
                }else{
                        $error =  'Username sudah terdaftar !!';
                }
            }else{
                $validate = 'Password tidak sama !!';
            }
             
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 
    function cek_nama($username,$connector){
        $nama = mysqli_real_escape_string($connector, $username);
        $query = "SELECT * FROM users WHERE username = '$nama'";
        if( $result = mysqli_query($connector, $query) ) return mysqli_num_rows($result);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Register</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="row">
<section class="container-fluid mb-4">
<section class="row justify-content-center">
    <section class="col-12 col-sm-6 col-md-6">
        <form class="form-container" action="register.php" method="POST">
            <h4 class="text-center font-weight-bold"> Sign-Up </h4>
                <?php if($error != ''){ ?>
                    <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                <?php } ?>

                    <div class="form-group">
                        <label for="InputEmail">Email</label>
                        <input type="email" class="form-control" id="InputEmail" name="email" aria-describeby="emailHelp" placeholder=" ">
                    </div>
                    <div class="form-group">
                        <label for="username">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder=" ">
                    </div>
                    <div class="form-group">
                        <label for="username">Nomor Handphone</label>
                        <input type="text" class="form-control" id="nohp" name="nohp" placeholder=" ">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Kata Sandi</label>
                        <input type="password" class="form-control" id="InputPassword" name="password" placeholder=" ">
                        <?php if($validate != '') {?>
                            <p class="text-danger"><?= $validate; ?></p>
                        <?php }?>
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-control" id="InputRePassword" name="repassword" placeholder=" ">
                        <?php if($validate != '') {?>
                            <p class="text-danger"><?= $validate; ?></p>
                        <?php }?>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block" >Daftar</button>
                    <div class="form-footer mt-2">
                        <p> Anda sudah punya account? <a href="login.php">Login</a></p>
                    </div>
                </form>
            </section>
            </section>
        </section>
<!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>