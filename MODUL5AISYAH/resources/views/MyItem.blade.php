<?php
// $title  = "Menubar dinamis with PHP";
// $page = "Home";
include('konektor.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyItem</title>
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
                    <a href="AddItem.php" type="submit" name="submit" class="btn btn-primary">AddCar</a>
                </div>
            </div>
        </div>
    </form>
</nav>

<div class="mt-5 container rounded-1">
    <br><p style="font-size:30px"><b>My Show Room</b></p>
    <p> List Show Room Aisyah - 1202204044 </p></br>
    <ul type="none"></ul>
</div>

<tbody>
    
    
<section>
    <div class="mt-5 container rounded-1">
        <div class="row">
        <?php
            $query = mysqli_query($connector, "SELECT * FROM showroom_aisyah_table");

            if($query){
                while($selects = mysqli_fetch_assoc($query)){

        ?>
            <div class="col-4">
                <div class="card shadow">
                    <img class="card-img-top" src="gambar/<?php echo $selects['foto_mobil']; ?>" alt="BMWi4">
                        <div class="row">
                            <div class="col">
                            </div>
                            <div class='card-body'>
                                <h5 class='card-title'>".$selects["nama_mobil"]."</h5>
                                <p class='card-text'>" . substr($selects["deskripsi"], 0, 50) . '...' . "</p>
                                <div class="row g-0">
                                    <div class="col-3">
                                    <a href="ItemDetail.php?id_mobil=<?php echo $selects['id_mobil']?>" class="btn btn-primary">Detail</a>
                                        <form action="ItemDetail.php" method="post">
                                    </div>
                                    <div class="col-3">
                                        <a href="./delete.php?id_mobil=<?php echo $selects['id_mobil']?>" class="btn btn-danger">Delete</a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>
        </div>
    </div>
</section>

</body>
</html>