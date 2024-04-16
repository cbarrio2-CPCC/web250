<main id='review-wrapper'>
    <?php
        $fish = $_GET['fish'];
        $img = $_GET['img'];
        $price = $_GET['price'];
        $fishid = $_GET['id'];
        @$userid = $_SESSION['id'];

        echo"
        <section>
            <h2>Reviews for $fish</h2>
            <figure class='fish-card'>
                <img src='$img' alt='$fish'/>
                <figcaption>
                    <p>Price: $$price</p>
                </figcaption>
            </figure>
        </section>
        ";
        
        include 'components/getreviews.php';

        if($userid){
            echo"
            <section>
                <form action='components/addreview.php' method='POST'>
                    <h3>Leave a review</h3>
                    <label>Title:</label>

                    <input type='text' name='title' required>

                    <label for='rating'>Rating:</label>
                    <div>
                        1 <input type='range' id='rating' name='rating' value='3' min='1' max='5' required> 5
                    </div>

                    <label for='review'>Review:</label>
    
                    <textarea id='review' name='review' required></textarea>
    
                    <input type='hidden' name='fishid' value='$fishid'>
                    <input type='hidden' name='userid' value='$userid'>
                    <input type='hidden' name='price' value='$price'>
                    <input type='hidden' name='fish' value='$fish'>
                    <input type='hidden' name='img' value='$img'>
                    <br>
                    <input type='submit' value='Submit'>
                </form>
                <form id='edit-review' action='components/editreview.php' method='POST'>
                    <h3>Edit review</h3>

                    <label>Title:</label>

                    <input id='title' type='text' name='title' required>

                    <label for='rating'>Rating:</label>
                    <div>
                        1 <input type='range' id='rating' name='rating' value='3' min='1' max='5' required> 5
                    </div>

                    <label for='review'>Review:</label>
    
                    <textarea id='review' name='review' required></textarea>

                    <input type='hidden' name='fishid' value='$fishid'>
                    <input type='hidden' name='userid' value='$userid'>
                    <input type='hidden' name='price' value='$price'>
                    <input type='hidden' name='fish' value='$fish'>
                    <input type='hidden' name='img' value='$img'>
                    <input type='hidden' name='reviewid'>
                    <br>

                    <div>
                        <input type='submit' value='Save'>
                        <input type='reset' value='Cancel'>
                    </div>
                </form>
            </section>
            ";
        } else {
            echo "<h3>Log in to leave a review</h3>";
        }
    ?>
    <script src='scripts/editreview.js'></script>
</main>