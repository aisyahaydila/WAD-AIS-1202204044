<?php
if(!isset($_SESSION)){
    session_start();
}
$connector = mysqli_connect("localhost", "root","", "modul 3 Aisyah");
$email = $_POST['email'];
$nama = $_POST['nama'];
$nohp = $_POST['NoHp'];
$password = $_POST['password'];
$dt_username="SELECT * FROM users WHERE email='$email'";
$executeQuery=mysqli_query($connector, $dt_username);
if(mysqli_num_rows($executeQuery)>0){
    $result=mysqli_fetch_assoc($executeQuery);
    $result_check=$result['email'];
    if($email==$result_check){
        header('location:../registrasi.php');
    }   
    }else {
        $sql = "INSERT INTO users (nama, email, password, no_hp) VALUES ('$name', '$email', '$password', '$nohp')";
        if (mysqli_query($connector, $sql)) {
            header('location:./login.php');
        }else{
            header('location:./registrasi.php');
        }
    }
?>