<?php 
    include 'db_connect.php';
    $reviewid = $_POST['reviewid'];
    $query = $mysqli->prepare("DELETE FROM review WHERE id = ?");
    $query->bind_param('i', $reviewid);
    $query->execute();
    echo "<script>window.location.href = '../?p=contents/browse.php'</script>";
?>