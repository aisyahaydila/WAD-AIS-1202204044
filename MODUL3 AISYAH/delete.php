<?php
require './connector.php';

$id = $_GET['id'];

$sql = "DELETE FORM showroom_aisyah_table WHERE id_mobil = $id";

if (mysqli_query($connector, $sql)) {
    header("location: ../pages/List-Fhina.php?pesan=hapus");
  } else {
    header("location: ../pages/List-Fhina.php?pesan=gagal");
  }