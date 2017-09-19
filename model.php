<?php
require('koneksi.php');
//menampilkan database ke browser
$sql = "SELECT * from karyawan ";
$result = $conn->query($sql);
