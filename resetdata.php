<?php
    include 'function.php';
    $pdo  = pdo_connect();

    if(isset($_GET['id'])){
        $stmt = $pdo->prepare('TRUNCATE TABLE daftar');
        $stmt->execute([$_GET['id']]);
        header("location:dashboard.php");
    } else {
        die ('No ID specified!');
    }
?>