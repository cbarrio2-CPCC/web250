<section id='review-section'>
    <h3>Review Section</h3>
    <?php 
        include 'db_connect.php';
        $query = "SELECT r.*, a.username FROM review r JOIN account a ON a.id = r.userid WHERE r.fishid = $fishid";
        $result = $mysqli->query($query);
        $reviews = mysqli_fetch_all($result);
        

        function reviewCard($review, $mysqli, $userid){
            $edited = $review[5] ? "<em>(edited)</em>" : "";

            $buttons = $userid == $review[1] ? "
                <div>
                    <form class='edit-review' data-id='$review[0]' data-title='$review[7]' data-rating='$review[3]' data-review='$review[6]'>
                        <input type='submit' value='Edit'>
                    </form>
                    <form action='components/deletereview.php' method='POST'>
                        <input type='hidden' name='reviewid' value='$review[0]'>
                        <input type='submit' value='Delete'>
                    </form>
                </div>" : "";

                return "
                <div class='review-card'>
                    <div>
                        <strong>$review[8]</strong><em>Posted on $review[4]</em>
                    </div>
                    <em>$edited</em>
                    <hr>
                    <div>
                        <p>$review[3]/5</p><strong>$review[7]</strong>
                    </div>
                    <p>$review[6]</p>
                    $buttons
                </div>
                ";
        }

        foreach($reviews as $review){
            echo reviewCard($review, $mysqli, $userid);
        }
        if(count($reviews) == 0){
            echo "<h3>No reviews yet</h3>";
        }
    ?>
</section>