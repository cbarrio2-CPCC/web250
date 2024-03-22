<section id='review-section'>
    <h3>Review Section</h3>
    <?php 
        include 'db_connect.php';
        $query = "SELECT * FROM review WHERE fishid = $fishid";
        $result = $mysqli->query($query);
        $reviews = mysqli_fetch_all($result);
        

        function reviewCard($review, $mysqli, $userid){
            $query = "SELECT username FROM account WHERE id = $review[1]";
            $result = $mysqli->query($query);
            $username = mysqli_fetch_row($result);

            if($userid == $review[1]){
                return "
                <div class='review-card'>
                    <div>
                        <strong>$username[0]</strong><em>Posted on $review[4]</em>
                    </div>
                    <hr>
                    <div>
                        <p>$review[3]/5</p><strong>$review[7]</strong>
                    </div>
                    <p>$review[6]</p>
                    <form action='components/deletereview.php' method='POST'>
                        <input type='hidden' name='reviewid' value='$review[0]'>
                        <input type='submit' value='Delete'>
                    </form>
                </div>
                ";
            } else {
                return "
                <div class='review-card'>
                    <div>
                        <strong>$username[0]</strong><em>Posted on $review[4]</em>
                    </div>
                    <hr>
                    <div>
                        <p>$review[3]/5</p><strong>$review[7]</strong>
                    </div>
                    
                    <p>$review[6]</p>
                </div>
                ";
            }
        }

        foreach($reviews as $review){
            echo reviewCard($review, $mysqli, $userid);
        }
        if(count($reviews) == 0){
            echo "<h3>No reviews yet</h3>";
        }
    ?>
</section>