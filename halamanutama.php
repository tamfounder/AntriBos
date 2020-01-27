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
<a type="button" class="btn btn-primary" href="create.php" class="create-contact">Input Data</a>
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
            <td class="actions">
                <a type="button"
                class="btn btn-sm btn-outline btn-success edit"
                href="update.php?id=<?=$register['id']?>">edit</a>
                <a type="button"
                class="btn btn-sm btn-outline btn-danger trash"
                href="delete.php?id=<?=$register['id']?>">delete</a>
            </td>
                    
        </tr>
  
       
<?php endforeach; ?>
<a type="button"
                class="btn btn-sm btn-outline btn-success edit"
                href="resetdata.php?id=<?=$register['id']?>">reset</a>
<a href="link.php" type="button" class="btn btn-warning btn-sm">Link</a><br>
<a type="button"
                class="btn btn-sm btn-outline btn-danger trash"
                href="index.php">Log Out</a>
