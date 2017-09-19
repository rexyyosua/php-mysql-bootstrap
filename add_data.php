<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Fontawesome CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Add New Entry</title>
    <style media="screen">
      body{
        padding-top: 70px;
      }
      h1{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h1>Isi data diri anda</h1>
    <div class="container">
      <p>
        <a href="view.php" class="btn btn-info"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        <a href="add_data.php" class="btn btn-info"> Add New Data</a>
      </p>
      <form class="form-group" action="add_process.php" method="post">
        <div class="form-group">
          <label >NIP</label>
          <input required name="nip" type="text" class="form-control" placeholder="Nomor Induk Pegawai">
        </div>
        <div class="form-group">
          <label>Nama</label>
          <input required name="nama" type="text" class="form-control" placeholder="Nama Lengkap">
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <input required name="alamat" type="text" class="form-control" placeholder="Alamat Lengkap">
        </div>
        <input class="btn btn-primary" type="submit" name="add_data" value="Submit">
      </form>
    </div>
  </body>
</html>
