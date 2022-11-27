<?php
$title  = "Menubar dinamis with PHP";
$page = "Home";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>additem</title>
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
      </div>
    </div>
  </div>
</nav>

<div class="mt-5 container rounded-1">
            <br><p style="font-size:30px"><b>Tambah Mobil</b></p>
            <p> Tambah Mobil baru anda ke list show room </p></br>
            <ul type="none">
                <form action="insert.php" method="post" enctype="multipart/form-data">
                    <div class="p-2">
                        <li class="mb-2">
                            <label class="mb-2" for="mobil"><b>Nama Mobil</b></label><br>
                            <input class="form-control" type="text" name="nama" id="mobil" placeholder="BMW I4">
                        </li>
                        <li class="mb-2">
                            <label class="mb-2" for="pemilik"><b>Nama Pemilik</b></label>
                            <input class="form-control" type="text" name="pemilik" id="pemilik" value="Aisyah_1202204044" readonly>
                        </li>
                        <li class="mb-2">
                            <label class="mb-2" for="merk"><b>Merk</b></label>
                            <input class="form-control" type="text" name="merk" id="merk" placeholder="BMW">
                        </li>
                        <li class="mb-2">
                            <label class="mb-2" for="tanggal"><b>Tanggal Beli</b></label>
                            <input class="form-control" type="date" name="date" id="date">
                            <div id="date" class="form-text"></div>
                        </li>
                        <li class="mb-2">
                            <label class="mb-2" for="desc"><b>Deskripsi</b></label>
                            <textarea class="form-control" name="desc" id="desc" cols="30" rows="5" placeholder="The first all-electric Gran Coupé, the BMW i4 delivers outstanding dynamics with a high level of comfort and the ideal qualities to make it your daily driver. The five-door model comes equipped with fifth-generation BMW eDrive technology for sporty performance figures – reaching up to 340 hp. With a long range of up to 591 kilometres* and five spacious full-sized seats, it is the perfect companion for any journey."></textarea>
                        </li>
                        <li class="mb-2">
                            <label class="mb-2" for="foto"><b>Foto</b></label>
                            <input class="form-control" type="file" name="foto" id="foto">
                        </li>
                        <li class="mb-2">
                            <label class="mb-2 me-2" for="pembayaran"><b>Status Pembayaran</b></label>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input class="form-check-input" type="radio" name="pembayaran" id="pembayaran" value="Lunas">
                                <label class="form-check-label" for="Lunas">Lunas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input class="form-check-input" type="radio" name="pembayaran" id="pembayaran" value="Belum Lunas">
                                <label class="form-check-label" for="Belum Lunas">Belum Lunas</label>
                            </div>
                        <li class="pt-2 mb-2">
                            <button type="submit" name="submit" class="btn btn-primary">selesai</a>
                        </li>
                    </div>
                </form>
            </ul>
        </div>
    </body>
</html>


