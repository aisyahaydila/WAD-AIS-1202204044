
<!--FORM-->
<body>
    <div class="d-flex justify-content-between align-items-center" style="height: 100vh;">
    <div class="img" style="margin-left:0px;">
        <img src="./gambar/raize.jpg" style="transform: scaleX(-1);width: 700px; height: 713px;" alt="">
    </div>
    <form action="{{route('register.action')}" method="post" style="width:50%;margin: 10px 50px">
    @csrf
    <h1 style="padding-bottom:20px;">Registrasi</h1>
    <div class="col-md-9">
        <div class="form-group mt-2">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
            </div>
        <div class="form-group mt-2">
            <label for="exampleNama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" aria-describedby="namaHelp" >
            <div id="namaHelp" class="form-text"></div>
        </div>
        <div class="form-group mt-3">
            <label for="exampleInputnohp">Nomor Handphone</label>
            <input type="number" class="form-control" name="no_hp" aria-describedby="nomorhp" required>
        </div>
        <div class="form-group mt-3">
            <label for="exampleInputPassword1">Kata Sandi</label>
            <input type="password" class="form-control" name="password" onkeyup ='check();'required>
        </div>
        <div class="form-group mt-3">
            <label for="exampleInputPassword1">Konfirmasi Kata Sandi</label>
            <input type="password" class="form-control" name="konfirmasipassword" onkeyup ='check();'required>
        </div>
        <br></br>
        <button type="submit" class="btn btn-primary">Daftar</button>
        <p class="mb-4" style="text-align: left,">Anda sudah punya akun? <a href="./login.php">Login</a></p>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
