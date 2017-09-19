<?php
// cek apakah tombol tambah di klik
if(isset($_POST['add_data'])){
  require('koneksi.php');

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$alamat =$_POST['alamat'];

// query prosedural PHP
$sql = "INSERT INTO karyawan values(null , '$nip','$nama','$alamat')" or die (mysqli_error());

if(mysqli_query($conn,$sql)){
    //redirect ke halaman view.php 
		header( 'Location:http://localhost/belajarphp/view.php');

	}else{

		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="add_data.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah

	}
}
?>
