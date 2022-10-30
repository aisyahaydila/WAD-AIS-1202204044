<?php
$title  = "Menubar dinamis with PHP";
$page = "Home";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking</title>
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
        <a class="nav-link" href="#">Home</a>
        <a class="nav-link" href="#">Booking</a>
      </div>
    </div>
  </div>
</nav>

<!--BOOKING-->
<section>
    <br> <h1 style="text-align:center"> Rent Your Car Now! </h1> </br>
</section>

<!--FORM-->
<div class="row">
    <div class="col-md-5 d-flex justify-content-center"> 
        <?php if (isset($_POST['image'])) : ?>
            <img class="m-auto p-3"src="<?= $_POST[''] ?>" alt="foto" height="250px" width="600px">
            <?php else : ?>
                <img class="m-auto p-3" src="<?= $foto ?>"alt="foto" height="250px" width="600px">
                <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <form action="MyBooking.php" method="post">
                                <div class="form-group mt-2">
                                    <label for="nama">Name</label>
                                    <input type="name " class="form-control" name="Name" id="Name" aria-describedby="namaHelp" value="AISYAH_1202204044" readonly>
                                    <div id="namaHelp" class="form-text"></div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="book">Book Date</label>
                                    <input type="date" class="form-control" name="date" id="date">
                                    <div id="bookHelp" class="form-text"></div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="time">Start Time</label>
                                    <input type="time" name="starttime" class="form-control" id="starttime" >
                                    <div id="timeHelp" class="form-text"></div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="durasi">Duration (Days)</label>
                                    <input type="number" class="form-control" name="duration" id="duration" >
                                    <div id="durasiHelp" class="form-text"></div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="bt">Car Type</label>
                                    <select class="form-select" name="cartype" aria-label="Default select example">
                                        <option selected> </option>
                                        <option value="1">Toyota Rush</option>
                                        <option value="2">Toyota Ayla</option>
                                        <option value="3">Honda Brio</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="hp">Phone Number</label>
                                    <input type="number" class="form-control" id="hp" aria-describedby="hp" name="hp" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Add Services(s)</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="health protocol" id="health protocol" name="AddService">
                                        <label class="form-check-label" for="health protocol" name="healthprotocol"> Health Protocol / Rp.25000 </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Driver" id="Driver" name="servis[]">
                                        <label class="form-check-label" for="Driver" name="driver"> Driver / Rp.100000 </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Fuel Silent" id="Fuel Silent" name="servis[]">
                                        <label class="form-check-label" for="Fuel Silent" name="fuelsilent"> Fuel Silent / Rp.250000 </label>
                                    </div>
                                </div>
                                <div class="form-group mt-3 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary w-100">Book</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <footer>
            <p class="text-center pt-5">CREATED BY AISYAH_1202204044</p>
        </footer>
    </body>
</html>