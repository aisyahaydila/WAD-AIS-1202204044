<?php
require './konektor.php';

$id = $_GET['id_mobil'];

$sql = "DELETE FROM showroom_aisyah_table WHERE id_mobil = $id";

if (mysqli_query($connector, $sql)) {
    header("location: ../pages/List-MyItem.php?pesan=hapus");
  } else {
    header("location: ../pages/List-MyItem.php?pesan=gagal");
  }