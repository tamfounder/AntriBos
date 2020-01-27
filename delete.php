<?php
    include 'function.php';
    $pdo  = pdo_connect();

    if(isset($_GET['id'])){
        $stmt = $pdo->prepare('DELETE FROM daftar WHERE id=?');
        $stmt->execute([$_GET['id']]);
        header("location:table.php");
    } else {
        die ('No ID specified!');
    }
?>