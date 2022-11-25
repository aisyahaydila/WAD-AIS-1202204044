<?php
include('konektor.php');
if (isset($_POST['submit'])){

    $nama=$_POST['nama'];
    $pemilik=$_POST['pemilik'];
    $merk=$_POST['merk'];
    $tanggal=$_POST['date'];
    $deskripsi=$_POST['desc'];
    $foto=$_FILES['foto']['name'];
    $status=$_POST['pembayaran'];
    $query=mysqli_query($connector, "INSERT INTO showroom_aisyah_table(nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) 
    VALUES ('$nama','$pemilik','$merk','$tanggal','$deskripsi','$foto','$status')");
    if($query){
        echo "<meta http=equiv='refresh' content='1 url=/AddItem.php'>";
    }}
?>