<?php 
    include 'db_connect.php';
    $fish = $_POST['fish'];
    $img = $_POST['img'];
    $price = $_POST['price'];
    $rating = $_POST['rating'];
    $review = htmlspecialchars($_POST['review']);
    $fishid = $_POST['fishid'];
    $userid = $_POST['userid'];
    $title = $_POST['title'];
    $date = date('Y-m-d');

    $query = $mysqli->prepare("INSERT INTO review (fishid, userid, rating, review, date, title) VALUES (?, ?, ?, ?, ?, ?)");
    $query->bind_param('iiisss', $fishid, $userid, $rating, $review, $date, $title);
    $query->execute();
    echo "<script>window.location.href = '../?p=contents/review.php&fish=$fish&img=$img&price=$price&id=$fishid'</script>";
?>