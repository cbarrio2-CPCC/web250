<main>
    <h2>Login</h2>
    <small class="message">
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                include 'components/db_connect.php';
                $username = $_POST['username'];
                $password = $_POST['password'];
                $query = $mysqli->prepare("SELECT * FROM account WHERE username = ?");
                $query->bind_param('s', $username);
                $query->execute();
                $result = $query->get_result();
                if ($result->num_rows == 0) {
                    echo 'Username not found. ';
                } else {
                    $row = $result->fetch_assoc();
                    if (password_verify($password, $row['password'])) {
                        $_SESSION['username'] = $username;
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['fname'] = $row['fname'];
                        $_SESSION['lname'] = $row['lname'];
                        $_SESSION['email'] = $row['email'];
                        header('Location: ?p=contents/account.php');
                    } else {
                        echo 'Incorrect password. ';
                    }
                }
            }
        ?>
    </small>
    <form id="form-wrapper" action="" method="POST">
        <fieldset>
            <label for="username">Username:</label>
            <br>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Password:</label>
            <br>
            <input type="password" id="password" name="password" required>
            <br>
            <br>
            <input type="submit" value="Login">
        </fieldset>
    </form>
    <p>Don't have an account? <a href="?p=contents/register.php">Register</a></p>
</main>