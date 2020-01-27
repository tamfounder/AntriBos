<?php

    include 'function.php';
    $pdo = pdo_connect();

    if (isset($_GET['id'])) {
        if (!empty($_POST)){
            $nama = $_POST['nama'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $alamat = $_POST['alamat'];
            $notelepon = $_POST['notelepon'];
            $keperluan = $_POST['keperluan'];
            $stmt = $pdo->prepare('UPDATE daftar SET nama = ?, jenis_kelamin = ?, alamat= ?, notelepon = ?, keperluan = ? WHERE id = ?');
            $stmt->execute([$nama, $jenis_kelamin, $alamat, $notelepon, $keperluan, $_GET['id']]);
            header("location:table.php");
            // echo $title;
        }

        $stmt = $pdo->prepare('SELECT * FROM daftar WHERE id = ?');
        $stmt->execute([$_GET['id']]);
        $register = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$register) {
            die ('Contact doesnt exist!');
        }
    }else {
        die ('No ID specified!');
    }

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= style_script()?>
    <title>Update Peserta<?=$register['id']?></title>
</head>
<body>
<div class="container" style="margin-top:50px">
<div class="row">
<div class="col-md-5 col-sm-12 col-xs-12">
<div class="card">
<div class="card-body">
<h2 class="card-title">Update Peserta <?=$register['id']?></h2>

<form action="update.php?id=<?=$register['id']?>" method="post">
    <label>Nama</label>
    <input class="form-control form-control-sm" type="text" name="nama" value="<?=$register['nama']?>" id="nama">
    <br>
    <label>Jenis Kelamin</label>
    <br>
    <tr>
        <td><input type="radio" name="jenis_kelamin" value="Laki-Laki"/>Laki-Laki</td>
    
    <tr>
        <td><input type="radio" name="jenis_kelamin" value="Perempuan"/>Perempuan</td>
    </tr>
    <br>
    <label>Alamat</label>
    <input class="form-control form-control-sm" type="text" name="alamat" value="<?=$register['alamat']?>" id="alamat">
    <br>
    <label>No Telepon</label>
    <input class="form-control form-control-sm" type="text" name="notelepon" value="<?=$register['notelepon']?>" id="notelepon">
    <br>
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
    <!--<input class="form-control form-control-sm" type="text" name="keperluan" value="<?=$register['keperluan']?>" id="keperluan">
    <br> -->
    <br><br>
    <input class="btn btn-primary btn-sm" type="submit" value="Update">
    <a href="table.php" type="button" class="btn btn-warning btn-sm">Cancel</a>
</form>