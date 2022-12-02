<?php
    include('konektor.php');
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];
    $repassword = $_POST['konfirmasipassword'];
    
        $query= "INSERT INTO users (email, nama, no_hp, password)
                VALUES('$email', '$nama', '$no_hp', '$password')";
        mysqli_query($connector,$query);
            
        if ($query){
            echo "<script>alert('Registrasi Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='1 url=./login.php'>";
        }
        else{
            echo "<script>alert('Registrasi Gagal')</script>";
            echo "<meta http-equiv='refresh' content='1 url=./registrasi.php'>";
        }
   
?>