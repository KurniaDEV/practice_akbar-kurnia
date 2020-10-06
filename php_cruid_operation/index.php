<?php include "connection.php";?>
<?php
// include 'connection.php';
// var_dump($data_siswa);
// echo "<br>";
// foreach ($data_siswa as $key) {
//     echo $key['nama']." ".$key['role']."<br>";
//     // print_r($value);
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">FORM PREGISTER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

</nav>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="input.php" method="POST">
            <div class="form-group">
                <label class="" for="exampleInputEmail1">Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="text" name="role" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mb-3">Simpan</button>
            </form>
        </div>
    </div>
</div>
<div class="container">
  <div class="row">
  
<table class="table table-striped bg-warning">
  <thead>
    <tr>
      <th scope="col-3">Nama</th>
      <th scope="col-3">email</th>
      <th scope="col-3">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($data_siswa as $key) : ?>
    <tr>
      <th><?php echo $key['nama']; ?></th>
      <td><?php echo $key['role']; ?></td>
      <td><a href="delete.php?id_siswa=<?php echo $key['id_siswa'];?>">Hapus</a> | <a href="edit.php?id_siswa=<?php echo $key['id_siswa'];?>">Edit</a></td>    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
  </div>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>