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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="Home.php">Home</a>
        <a class="nav-link" href="Booking.php">Booking</a>
      </div>
    </div>
  </div>
</nav>

<!--HOME-->
<section>
    <br> <h1 style="text-align:center"> WELCOME TO EAD RENT  </h1> </br>
    <p style="text-align:center"> Find your best deal, here! </p>
</section>


<!--MOBIL-->
<div class="container">
  <form action="Booking.php">
  <div class="row">
    <div class="col">
<div class="card" style="width: 18rem;">
  <img src="folder foto\1-white.png"  class="card-img-top" alt="Rush">
  <div class="card-body">
    <h5 class="card-title">Toyota Rush</h5>
    <p class="card-text">Rp.2000000/day</p>
  </div>
  <ul style="text-align:center" class="list-group list-group-flush">
    <li class="list-group-item text-primary">7 kursi</li>
    <li class="list-group-item text-primary">1500 cc</li>
    <li class="list-group-item text-primary">Manual</li>
    <li class="list-group-item bg-light">
      <input class="btn btn-primary" type="submit" name="submit" value="Book Now"></li>
  </ul>
  </div>
  </div>

  <div class="col">
<div class="card" style="width: 18rem;">
  <img src="folder foto\download.jpg"  class="card-img-top" alt="ayla">
  <div class="card-body">
    <h5 class="card-title">Toyota Ayla</h5>
    <p class="card-text">Rp.150000/day</p>
  </div>
  <ul style="text-align:center" class="list-group list-group-flush">
    <li class="list-group-item text-primary">5 kursi</li>
    <li class="list-group-item text-primary">1200 cc</li>
    <li class="list-group-item text-primary">Manual</li>
    <li class="list-group-item bg-light">
      <input class="btn btn-primary" type="submit" name="submit" value="Book Now">
</li>
</ul>
</div>
</div>

<div class="col">
<div class="card" style="width: 18rem;">
  <img src="folder foto\Vos4HUL6XFLHnM2dhTzGbzdNHpvNTnBNBKhZwxc0.png"  class="card-img-top" alt="brio">
  <div class="card-body">
    <h5 class="card-title">Honda Brio</h5>
    <p class="card-text">Rp.150000/day</p>
  </div>
  <ul style="text-align:center" class="list-group list-group-flush">
    <li class="list-group-item text-primary">5 kursi</li>
    <li class="list-group-item text-primary">1200 cc</li>
    <li class="list-group-item text-primary">Automatic</li>
    <li class="list-group-item bg-light">
      <input class="btn btn-primary" type="submit" name="submit" value="Book Now">
</li>
</ul>
</div>
</div>
</div>
</form>
</div>


</body>
<footer>
        <p class="text-center pt-5">CREATED BY AISYAH_1202204044</p>
    </footer>
</html>