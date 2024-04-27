<main>
    <h2>Browse from our diverse selection of fish</h2>
    <small>All images were taken from Pixabay which are free for use under their <a href="https://pixabay.com/service/license-summary/">content license.</a> Click on the image to view the original author.</small>
    <?php
        include "components/db_connect.php";
        $sql = "SELECT * FROM fish WHERE type = 'Fresh'";
        $result = $mysqli->query($sql);
        $freshfish = mysqli_fetch_all($result);
        $sql = "SELECT * FROM fish WHERE type = 'Salt'";
        $result = $mysqli->query($sql);
        $saltfish = mysqli_fetch_all($result);
        $sql = "SELECT * FROM fish WHERE type = 'Exotic'";
        $result = $mysqli->query($sql);
        $exoticfish = mysqli_fetch_all($result);

        function fishCard($fish){
            echo "
            <figure class='fish-card'>
                <a href='$fish[5]'><img src='$fish[4]' alt='$fish[1]'/></a>
                <figcaption>
                    <h3>$fish[1]</h3>
                    <p>Price: $$fish[3]</p>
                    <a href='?p=contents/review.php&fish=$fish[1]&img=$fish[4]&price=$fish[3]&id=$fish[0]'>Reviews</a>
                </figcaption>
            </figure>
            ";
        }
        

        echo"
        <div id='fish-grid'>
            <div class='fish-container'>
                <h3>Fresh Water Fish</h3>";
                foreach($freshfish as $fish){
                    fishCard($fish);
                }
            echo"
            </div>
            
            <div class='fish-container'>
                <h3>Salt Water Fish</h3>";
                foreach($saltfish as $fish){
                    fishCard($fish);
                }
            echo"
            </div>
            
            <div class='fish-container'>
                <h3>Exotic Fish</h3>";
                foreach($exoticfish as $fish){
                    fishCard($fish);
                }
            echo"
            </div>
        </div>
        ";
    ?>
</main>