<?php

include '../koneksi.php';

$uid = $_POST['email'];
$pwd = $_POST['pass'];
$hash= md5($pwd);
$nama = $_POST['nama'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$fotobaru = date('dmYHis').$foto;
$path = "images/".$fotobaru;

if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
    // Proses simpan ke Database
    $insert = mysqli_query($conn, "INSERT INTO dbadmin (userid, pass, nama, foto) VALUES ('{$uid}','{$hash}','{$nama}','{$fotobaru}')");
	

	if($insert){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		echo "Berhasil Daftar"; // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='daftar.php'>Kembali Ke Form</a>";
	}
}else{
	// Jika gambar gagal diupload, Lakukan :
	echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href='daftar.php'>Kembali Ke Form</a>";
}
