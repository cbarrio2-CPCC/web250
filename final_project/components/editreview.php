<?php 
    include 'db_connect.php';
    $fish = $_POST['fish'];
    $img = $_POST['img'];
    $price = $_POST['price'];
    $rating = $_POST['rating'];
    $review = htmlspecialchars($_POST['review']);
    $fishid = $_POST['fishid'];
    $title = $_POST['title'];
    $date = date('Y-m-d');
    $reviewid = $_POST['reviewid'];

    $query = $mysqli->prepare("UPDATE review SET rating = ?, review = ?, title = ?, edited = 1 WHERE id = ?");
    $query->bind_param('issi', $rating, $review, $title, $reviewid);
    $query->execute();

    header("Location: ../?p=contents/review.php&fish=$fish&img=$img&price=$price&id=$fishid");
?>