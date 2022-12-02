<?php
include './konektor.php';
?>

<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Navbar -->
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
                <div class="d-flex">
                <div class="navbar-nav navbar-dark">
                    <a class="btn btn-primary" class="nav-link active"  href="../Pages/Sonia-Add.php">Add Car</a>
                </div>
                <div class="dropdown">
                <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nama
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Sonia-Profile.php">Profile</a></li>
                <li><a class="dropdown-item" href="./Config/logout.php">Logout</a></li>
                </ul>
                </li>
            </div>
            </div>
        </div>
        </nav>
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-12 ">
                     <div class="" style="margin-top:50px; width: 96%;">
                      <div class="card-body p-4">
                              <h4 class="card-title text-center">Profile</h4>
                              <br>
                              <form method="POST" action="">
                                <input type="hidden" name="id" value="<?=$row['id']?>">
                                 <div class="mb-3 row">
                                      <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
                                      <div class="col-sm-9">
                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $row['email']?>">
                                      </div>
                                  </div>
                                  <div class="mb-3 row">
                                      <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                      <div class="col-sm-9">
                                      <input type="text" class="form-control" id="nama" name="nama" value="<?= $row['nama']?>">
                                      </div>
                                  </div>
                                  <div class="mb-3 row">
                                      <label for="nohp" class="col-sm-3 col-form-label">Nomor Handphone</label>
                                      <div class="col-sm-9">
                                      <input type="text" class="form-control" id="nohp" name="nohp" value="<?= $row['nohp']?>">
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="mb-3 row">
                                      <label for="password" class="col-sm-3 col-form-label">Kata Sandi</label>
                                      <div class="col-sm-9">
                                      <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi">
                                      </div>
                                  </div>
                                  <div class="mb-3 row">
                                      <label for="repassword" class="col-sm-3 col-form-label">Konfirmasi Kata Sandi</label>
                                      <div class="col-sm-9">
                                      <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Konfirmasi Kata Sandi">
                                      </div>
                                  </div>
                                  <div class="mb-3 row">
                                      <label for="navbar" class="col-sm-3 col-form-label">Warna Navbar</label>
                                      <div class="col-sm-9">
                                      <input type="text" class="form-control" id="navbar">
                                      </div>
                                  </div>
                                  <center><button type="submit" name="simpan" class="btn btn-primary" style= "width:140px">Update</button></center>
                              </form>       
                      </div>
                  </div> 
              </div>
          </div>
      </div>


    <!-- footer -->
        <footer class=" ">
        <div class="mb-3">
          <div class="d-flex left">
          <img src="./gambar/logo-ead.png" style="width:100px;height:30px;float:left;margin-top:20px"/> <p style= "padding-left: 20px;margin-top:20px" >Aisyah_1202204044</p>       
          </div>
        </div>
        </footer>
    <!-- end footer -->

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    </body>
  </html>
