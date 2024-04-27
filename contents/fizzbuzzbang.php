<main>
    <h2>FizzBuzzBang</h2>
    <form id="form-wrapper" action="" method="POST">
        <fieldset>
            <label for="name">Name:</label>
            <br>
            <input type="text" id="name" name="name" value="Timmy" required>
            <br>

            <label for="startnum">Start Number:</label>
            <br>
            <input type="number" id="startnum" name="startnum" value="1" required>
            <br>

            <label for="endnum">End Number:</label>
            <br>
            <input type="number" id="endnum" name="endnum" value="105" required>
            <br>

            <label for="fizz">Fizz:</label>
            <br>
            <input type="text" id="fizz" name="fizz" value="fizz" required>
            <br>

            <label for="fizznum">Fizz Number:</label>
            <br>
            <input type="number" id="fizznum" name="fizznum" value="3" required>
            <br>

            <label for="buzz">Buzz:</label>
            <br>
            <input type="text" id="buzz" name="buzz" value="buzz" required>
            <br>

            <label for="buzznum">Buzz Number:</label>
            <br>
            <input type="number" id="buzznum" name="buzznum" value="5" required>
            <br>

            <label for="bang">Bang:</label>
            <br>
            <input type="text" id="bang" name="bang" value="bang" required>
            <br>

            <label for="bangnum">Bang Number:</label>
            <br>
            <input type="number" id="bangnum" name="bangnum" value="7" required>
            <br>
            <br>

            <input type="hidden" name="p" value="contents/fizzbuzzbang.php">
            <input type="submit" value="Submit">
        </fieldset>
        <div>
            <?php 
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                    $startnum = $_POST["startnum"];
                    $endnum = $_POST["endnum"];
                    $fizz = $_POST["fizz"];
                    $fizznum = $_POST["fizznum"];
                    $buzz = $_POST["buzz"];
                    $buzznum = $_POST["buzznum"];
                    $bang = $_POST["bang"];
                    $bangnum = $_POST["bangnum"];
                    $name = $_POST["name"];
                    $startnum = $_POST["startnum"];
                    $endnum = $_POST["endnum"];
                    $output = "Hi $name! Here is $startnum-$endnum ${fizz}($fizznum)${buzz}($buzznum)${bang}($bangnum)ed:<br> ";
                    for($i = $startnum; $i <= $endnum; $i++) {
                        if($i % $fizznum == 0 && $i % $buzznum == 0 && $i % $bangnum == 0) {
                            $output .= "${fizz}${buzz}${bang}, ";
                        } else if($i % $fizznum == 0 && $i % $buzznum == 0) {
                            $output .= "${fizz}${buzz}, ";
                        } else if($i % $fizznum == 0 && $i % $bangnum == 0) {
                            $output .= "${fizz}${bang}, ";
                        } else if($i % $buzznum == 0 && $i % $bangnum == 0) {
                            $output .= "${buzz}${bang}, ";
                        } else if($i % $fizznum == 0) {
                            $output .= "${fizz}, ";
                        } else if($i % $buzznum == 0) {
                            $output .= "${buzz}, ";
                        } else if($i % $bangnum == 0) {
                            $output .= "${bang}, ";
                        } else {
                            $output .= "$i, ";
                        }
                    }
                    $output = rtrim($output, ", ");
                    $output .= ".";
                    echo $output;
                }
            ?>
        </div>
    </form>
</main>
