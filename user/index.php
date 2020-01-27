<?php
session_start();
if (!$_SESSION['username']) {
    header("Location: index.php");
  }
   include "function.php";?>
   
    

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= style_script() ?>
    <script>
    $(document).ready(funtion(){
        $('#employee').DataTables();
    });
    </script>
    <title>Admin</title>
    </head>
  <?php
    $pdo = pdo_connect();
    $stmt = $pdo->prepare('SELECT * FROM daftar');
    $stmt->execute();
    $daftar = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
</html>

<div class="container">
<h2>Peserta Layanan</h2>
<a type="button" class="btn btn-primary" href="create.php" class="create-contact">Daftar</a>
<div class="row">
<div class="col">
<table class="table table-striped" id="employee">
    <thead>
        <tr>
        <th>#</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Keperluan</th>
            <th>Created</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($daftar as $register): ?>
        <tr>
        <td><?=$register['id']?></td>
            <td><?=$register['nama']?></td>
            <td><?=$register['jenis_kelamin']?></td>
            <td><?=$register['alamat']?></td>
            <td><?=$register['notelepon']?></td>
            <td><?=$register['keperluan']?></td>
            <td><?=$register['created']?></td>
           
                    
        </tr>
  
       
<?php endforeach; ?>

