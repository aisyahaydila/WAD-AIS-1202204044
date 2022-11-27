<?php 
session_start();

$host = "localhost:3315";
$user = "root";
$password = "";
$database   = "modul 3 Aisyah";
$connector = mysqli_connect($host, $user, $password, $database);
$err        = "";
$email   = "";
$rememberme   = "";

if(isset($_COOKIE['cookie_email'])){
    $cookie_email = $_COOKIE['cookie_email'];
    $cookie_password = $_COOKIE['cookie_password'];

    $sql1 = "SELECT * FROM users WHERE 1 = '$cookie_email'";
    $q1   = mysqli_query($connector,$sql1);
    $r1   = mysqli_fetch_array($q1);
    if($r1['password'] == $cookie_password){
        $_SESSION['session_email'] = $cookie_email;
        $_SESSION['session_password'] = $cookie_password;
    }
}

if(isset($_SESSION['session_email'])){
    header("location:anggota.php");
    exit();
}

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rememberme = $_POST['rememberme'];

    if($email == '' or $password == ''){
        $err .= "<li>Silakan masukkan email dan juga password.</li>";
    }else{
        $sql1 = "SELECT * FROM users WHERE username='$email'";
        $q1   = mysqli_query($connector,$sql1);
        $r1   = mysqli_fetch_array($q1);

        if($r1['email'] == ''){
            $err .= "<li> email <b>$email</b> tidak tersedia.</li>";
        }elseif($r1['password'] != md5($password)){
            $err .= "<li>Password yang dimasukkan tidak sesuai.</li>";
        }       
        
        if(empty($err)){
            $_SESSION['session_email'] = $email; //server
            $_SESSION['session_password'] = md5($password);

            if($rememberme == 1){
                $cookie_name = "cookie_email";
                $cookie_value = $email;
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name,$cookie_value,$cookie_time,"/");

                $cookie_name = "cookie_password";
                $cookie_value = md5($password);
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name,$cookie_value,$cookie_time,"/");
            }
            header("location:anggota.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<div class="container my-4">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Login</div>
            </div>      
            <div style="padding-top:30px" class="panel-body" >
                <?php if($err){ ?>
                    <div id="login-alert" class="alert alert-danger col-sm-12">
                        <ul><?php echo $err ?></ul>
                    </div>
                <?php } ?>                
                <form id="loginform" class="form-horizontal" action="" method="post" role="form">       
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-email" type="text" class="form-control" name="email" value="<?php echo $email ?>" placeholder="email">                                        
                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                    </div>
                    <div class="input-group">
                        <div class="checkbox">
                        <label>
                            <input id="login-remember" type="checkbox" name="Rememberme" value="1" <?php if($rememberme == '1') echo "checked"?>> Remember me
                        </label>
                        </div>
                    </div>
                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                            <input type="submit" name="login" class="btn btn-success" value="Login"/>
                        </div>
                    </div>
                    <div class="form-footer mt-2">
                        <p> Anda belum punya account? <a href="registrasi.php">Daftar</a></p>
                    </div>
                </form>    
            </div>                     
        </div>  
    </div>
</div>
</body>
</html>
