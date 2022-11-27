<?php
$title  = "Menubar dinamis with PHP";
$page = "Home";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="Home.php">Home</a>
        <a class="nav-link" href="Additem.php">MyCar</a>
        <nav navbar-expand-lg navbar-dark bg-primary class="container-fluid">
                    <a href="login.php" type="submit" name="submit" class="btn btn-primary">login</a>
      </div>
    </div>
  </div>
</nav>

<!--HOME-->
<section>
    <div class="container p-5 vh-100">
        <form action="AddItem.php" method="post">
            <div class="row vh-100 align-items-center">
                <div class="col" >
                    <h1> SELAMAT DATANG DI SHOW ROOM AISYAH WULAN AYDILA  </h1>
                    <p> At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus. </p>
                    <a href="Additem.php" type="submit" class="btn btn-primary">MyCar</a>
                    <div class="d-flex justify-contents-start">
                        <div class="row mt-5">
                            <div class="col">
                                <img src ="gambar/logo-ead.png" class="card-img-top" style="width: 70px" alt="">
                            </div>
                            <div class= "col">
                                <p>AISYAH_1202204044</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <img src="gambar/toyota-alphard-1.jpg" style="width: 480px" alt="">
                </div>
            </div>
        </form>
    </div>
</body>
</section>
                
                




