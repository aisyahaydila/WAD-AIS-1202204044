<?php
$title  = "Menubar dinamis with PHP";
$page = "Home";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alert</title>
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
        <a class="nav-link" href="additem.php">MyCar</a>
        <nav navbar-expand-lg navbar-dark bg-primary class="container-fluid">
                <button class="btn btn-light" type="submit">AddCar</button>
            </div>
        </nav>
      </div>
    </div>
  </div>
</nav>

<div class="mt-5 container rounded-1">
    <br><p style="font-size:30px"><b>My Show Room</b></p>
    <p> List Show Room Aisyah - 1202204044 </p></br>
    <ul type="none"></ul>
</div>

<section>
    <div class="mt-5 container rounded-1">
        <div class="row">
            <div class="col-4">
                <div class="card shadow">
                    <img class="card-img-top" src="gambar/bmwi4.jpg" alt="BMWi4">
                        <div class="row">
                            <div class="col">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">BMWi4</h4>
                                <p class="card-text">The first all-electric Gran Coupé, the BMW i4 delivers outstanding dynamics with a high level of comfort...</p>
                                <div class="row g-0">
                                    <div class="col-3">
                                        <a href="#" class="btn btn-primary">Detail</a>
                                    </div>
                                    <div class="col-3">
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</body>
</html>