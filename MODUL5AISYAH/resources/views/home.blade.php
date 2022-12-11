@extends('layout')
@section('content')
<!--HOME LOGIN-->
<section>
    <div class="container p-5 vh-100">
        <form action="home.php" method="post">
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
@endsection
                
                




