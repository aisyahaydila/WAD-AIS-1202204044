<?php
    $nama = "AISYAH_120220";
    $hp = $_POST['hp'];
    $date = $_POST['date'];
    $starttime = $_POST['starttime'];
    $ci = date('Y-m-d H:i:s',strtotime("$date $starttime"));
    $duration = $_POST['duration'];
    $co = date("d-m-Y H:i", (strtotime($date) + $duration));
    $cartype = $_POST['cartype'];
    $total = 0;
    if ($cartype == 'Toyota Rush') {
        $total += (2000000*$duration);
    }else if($cartype == 'Toyota Ayla'){
        $total += (150000*$duration);
    }elseif ($cartype == 'Honda Brio') {
        $total += (150000*$duration);
    }
    $addservices = $_POST['AddService'];
    if($addservices == 'healthprotocol'){
        $total += 25000;
    }
    elseif($addservices == 'driver'){
        $total += 100000;
    }
    elseif ($addservices == 'fuelsilent') {
        $total += 250000;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyBooking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="#">Home</a>
            <a class="nav-link" href="#">Booking</a>
          </div>
        </div>
    </div>
  </nav>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Number</th>
        <th scope="col">Name</th>
        <th scope="col">Check-in</th>
        <th scope="col">Check-out</th>
        <th scope="col">Car type</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Service</th>
        <th scope="col">Total Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?=rand()?></td>
        <td><?= $nama ?></td>
        <td><?= $ci ?></td>
        <td><?= $co ?></td>
        <td><?= $total ?></td>
        <td><?= $hp ?></td>
        <td><?= $addservices ?></td>
        <td></td>
      </tr>
    </thbody>
  </table>
  <div class="mb-3">
    <div class="d-flex justify-content-center">
      <a href="Booking.php" class="btn btn-outline-primary w-50">Kembali</a>
    </div>
  </div>
</body>
<footer>
        <p class="text-center pt-5">CREATED BY AISYAH_1202204044</p>
    </footer>
</html>