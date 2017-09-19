<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Data Users</title>
    <style media="screen">
      h1{
        text-align: center;
      }
      body{
        padding-top: 70px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Data Karyawan</h1>
      <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <th>ID</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Opsi</th>
      </tr>
    </thead>

  <?php
  include "model.php";
  while($row = $result->fetch_assoc()){
    echo "
    <tbody>
      <tr>
        <td>".$row["id"]."</td>
        <td>".$row["nip"]."</td>
        <td>".$row["nama"]."</td>
        <td>".$row["alamat"]."</td>
        <td>
        <a style='color:white' class='btn btn-danger'>Hapus</a>
          <a style='color:white' class='btn btn-primary'>Edit</a>
        </td>
      </tr>
    </tbody>"
    ;}?>
  </table>
  <a href="add_data.php">

    <button class="btn btn-info" type="button" name="button">Data Baru</button>
  </a>

    </div>
  </body>
</html>
