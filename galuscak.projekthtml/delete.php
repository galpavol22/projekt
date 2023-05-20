<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `crud100` where id=$id";
        $conn->query($sql);
    }
    header('location:/skus/galuscak.projekthtml/xxx.php');
    exit;
?>