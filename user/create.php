<?php
    include 'function.php';
    $pdo = pdo_connect();
    
    if(!empty($_POST)){
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $notelepon = $_POST['notelepon'];
        $keperluan = $_POST['keperluan'];
        $created = date('Y-m-d H:i:s');
        $stmt = $pdo->prepare('INSERT INTO daftar VALUES (?, ?, ?, ?, ?, ?,?)');
        $stmt->execute([$id, $nama, $jenis_kelamin, $alamat, $notelepon, $keperluan, $created]);
       
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= style_script()?>

</head>
<body>
<div class="container" style="margin-top:50px">
<div class="row">
<div class="col-md-5 col-sm-12 col-xs-12">
<div class="card">
<div class="card-body">
<h2 class="card-title">Input Data</h2>
<form method="post" action="index.php">
    <label>Nama</label>
    <input class="form-control form-control-sm" type="text" name="nama" id="nama" required><br>
    <label>Jenis Kelamin</label>
    <br>
    <tr>
        <td><input type="radio" name="jenis_kelamin" value="Laki-Laki"/>Laki-Laki</td>
    
    <tr>
        <td><input type="radio" name="jenis_kelamin" value="Perempuan"/>Perempuan</td>
    </tr>
    <br>
    <label>Alamat</label>
    <input class="form-control form-control-sm" type="alamat" name="alamat" id="phone" required><br>
    <label>Nomor Telepon</label>
    <input class="form-control form-control-sm" type="notelepon" name="notelepon" id="notelepon" required><br>
    <label>Keperluan</label>
    <h6><select name="keperluan">
    <option value="Akta Pernikahan">Akta Pernikahan</option>
<option value="Akta Kelahiran">Akta Kelahiran</option>
<option value="Akta Kematian">Akta Kematian</option>
<option value="Akta Perkawinan">Akta Perkawinan</option>
<option value="Akta Perceraian">Akta Perceraian</option>
<option value="E-KTP">E-KTP</option>
<option value="Pengaduan">Pengaduan</option>
</select>
<!-- <input type="submit" name="submit" value="Submit"/> -->
 <!--   <input class="form-control form-control-sm" type="keperluan" name="keperluan" id="keperluan" required><br> -->
 <br><br><input class="btn btn-primary btn-sm" type="submit" value="Create">
    <a href="index.php" type="button" class="btn btn-warning btn-sm">Cancel</a>
   
</form>