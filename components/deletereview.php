<?php 
    include 'db_connect.php';
    $reviewid = $_POST['reviewid'];
    $query = $mysqli->prepare("DELETE FROM review WHERE id = ?");
    $query->bind_param('i', $reviewid);
    $query->execute();
    header('Location: ../?p=contents/review.php');
?>