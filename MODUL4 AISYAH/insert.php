<?php
include('konektor.php');
if (isset($_POST['submit'])){

    $nama=$_POST['nama'];
    $pemilik=$_POST['pemilik'];
    $merk=$_POST['merk'];
    $tanggal=$_POST['date'];
    $deskripsi=$_POST['desc'];
    $status=$_POST['pembayaran'];
    $foto=$_FILES['foto']['name'];
    
    $target = "./gambar/";
if (move_uploaded_file($_FILES['foto']['tmp_name'], $target . $foto)) {
    $sql = "INSERT INTO showroom_aisyah_table (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$nama', '$pemilik', '$merk', '$tanggal', '$deskripsi', '$foto', '$status')";
  if (mysqli_query($connector, $sql)) {
    header("location: MyItem.php");
  } else {
    echo "Error";
  }
} else {
  echo "Error";
}
}