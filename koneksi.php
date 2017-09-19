<?php
$namaserver = "localhost";
$namauser = "root";
$password = "";
$namadb ="kantor";

//menjalankan koneksi
$conn = new mysqli($namaserver, $namauser, $password,$namadb);

//periksa koneksi
if($conn->connect_error){
  die("Koneksi Gagal : " . $conn->connect_error);
}
