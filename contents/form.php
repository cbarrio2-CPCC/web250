<main>
    <h2>Forms</h2>
    <div id="form-wrapper">
        <form action="" method="GET">
            <fieldset>
                <legend>GET</legend>
                <label for="name">Name:</label>
                <br>
                <input type="text" id="name" name="name" required>
                <br>
                <label for="email">Email:</label>
                <br>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="service">Select Service:</label>
                <br>
                <select id="service" name="service">
                    <option value="fish">Fish</option>
                    <option value="aquarium">Aquarium</option>
                </select>
                <br>
                <label for="rate">Rate the site:</label>
                <br>
                <div id="rate-wrapper">
                    <small>1</small>
                    <input type="range" id="rate" name="rate" min="1" max="5">
                    <small>5</small>
                </div>
                <br>
                <input name="p" value="contents/form.php" type="hidden">
                <input type="submit" value="Submit">
            </fieldset>
        </form>
        <form action="" method="POST">
            <fieldset>
                <legend>POST</legend>
                <label for="name">Name:</label>
                <br>
                <input type="text" id="name" name="name" required>
                <br>
                <label for="email">Email:</label>
                <br>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="service">Select Service:</label>
                <br>
                <select id="service" name="service">
                    <option value="fish">Fish</option>
                    <option value="aquarium">Aquarium</option>
                </select>
                <br>
                <label for="rate">Rate the site:</label>
                <br>
                <div id="rate-wrapper">
                    <small>1</small>
                    <input type="range" id="rate" name="rate" min="1" max="5">
                    <small>5</small>
                </div>
                <br>
                <input name="p" value="contents/form.php" type="hidden">
                <input type="submit" value="Submit">
            </fieldset>
        </form>
        <form action="" method="POST" id="everything-form">
            <fieldset>
                <legend>Everything Form</legend>
                <div>
                    <label for="name">Name:</label>
                    <br>
                    <input type="text" id="name" name="name" required>
                    <br>

                    <label for="custid">Customer ID:</label>
                    <br>
                    <input type="password" id="custid" name="custid" required>
                    <br>

                    <label for="email">Email:</label>
                    <br>
                    <input type="email" id="email" name="email" required>
                    <br>

                    <input name="check" id="check" type="checkbox">
                    <label for="check">Sign up for our newsletter</label>
                    <br>

                    <label for="phone">Phone:</label>
                    <br>
                    <input type="tel" id="phone" name="phone" placeholder="(###) ###-####" pattern="^\(\d{3}\) \d{3}-\d{4}$" required>
                    <br>

                    <label for="service">Select Service:</label>
                    <br>
                    <select id="service" name="service" required>
                        <option value="">Select a service</option>
                        <option value="In-Store">In-store</option>
                        <option value="Delivery">Delivery</option>
                    </select>
                    <br>

                    <label for="date">Service Date:</label>
                    <br>
                    <input type="datetime-local" id="date" name="date" required>
                    <br>
                </div>
                <div>
                    <label for="num">Number of fish you currently have:</label>
                    <br>
                    <input  value="0" type="number" id="num" name="num" min="0" required>
                    <br>

                    <label for="color">Select a color for your fish/aquarium:</label>
                    <br>
                    <input type="color" id="color" name="color" required>
                    <br>

                    <label>What type of fish do you have the most of?</label>
                    <br>
                    <input type="radio" id="salt" name="type" value="salt" required>
                    <label for="salt">Saltwater</label>
                    <br>
                    <input type="radio" id="fresh" name="type" value="fresh" required>
                    <label for="fresh">Freshwater</label>
                    <br>

                    <label for="rate">Rate your experience:</label>
                    <br>
                    <div id="rate-wrapper">
                        <small>1</small>
                        <input type="range" id="rate" name="rate" min="1" max="5">
                        <small>5</small>
                    </div>

                    <label for="file">Upload a picture of your fish/aquarium:</label>
                    <br>
                    <input type="file" id="file" name="file" accept="image/*">
                    <br>
                    <br>
                    <div id="everything-button-wrapper">
                        <input type="submit" value="Submit" class="everything-button">
                        <input type="reset" value="Reset" class="everything-button">
                    </div>
                </div>
                <input name="p" value="contents/form.php" type="hidden">
            </fieldset>
        </form>
    </div>
    <hr>
    <?php
        function output($method, $name, $email, $service, $rate) {
            $rate_sentence = "";
            if ($rate == "1" || $rate == "2") {
                $rate_sentence = "we're sorry to hear that you didn't enjoy your visit.";
            } else if ($rate == "3") {
                $rate_sentence = "we're glad you enjoyed your visit.";
            } else {
                $rate_sentence = "we're thrilled you enjoyed your visit.";
            }
            return "
            <h3>$method results</h3>
            <p>Thank you for your input, $name. We will contact your email, $email, about your $service request. Also, $rate_sentence</p>
            ";
        }
        function everything_output(){
            return "
            <h3>Everything Form results</h3>
            <p>Name: $_POST[name]</p>
            <p>Customer ID: $_POST[custid]</p>
            <p>Email: $_POST[email]</p>
            <p>Newsletter: " . (isset($_POST["check"]) ? "Yes" : "No") . "</p>
            <p>Phone: $_POST[phone]</p>
            <p>Service: $_POST[service]</p>
            <p>Service Date: $_POST[date]</p>
            <p>Number of fish: $_POST[num]</p>
            <p style='color: $_POST[color]' >Color: $_POST[color]</p>
            <p>Type: " . ($_POST["type"] == "salt" ? "Saltwater" : "Freshwater") . "</p>
            <p>Rating: $_POST[rate]/5</p>
            <p>File Uploaded: " . (isset($_POST["file"]) ? $_POST["file"] : "None") . "</p>
            ";
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (count($_POST) > 5){
                echo everything_output();
            } else {
                echo output("POST", $_POST["name"], $_POST["email"], $_POST["service"], $_POST["rate"]);
            }
        } else {
            if (count($_GET) > 1){
                echo output("GET", $_GET["name"], $_GET["email"], $_GET["service"], $_GET["rate"]);
            }
        }
    ?>
</main>