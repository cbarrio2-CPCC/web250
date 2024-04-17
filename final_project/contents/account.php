<main>
    <h2>Account</h2>
    <?php
        if(isset($_POST["logout"])) {
            session_destroy();
            echo "<script>window.location.href = '?p=contents/home.php'</script>";
        }
        $username = $_SESSION['username'];
        if (!$username) {
            echo "<script>window.location.href = '?p=contents/login.php'</script>";
        }
        echo "<p>Welcome, $username. You have successfully logged in.</p>\n
              <p>You can now add a review and edit or delete any existing ones you created.</p>";
    ?>
    <form id='logout-form' action="" method="POST">
        <input type="hidden" name="p" value="contents/account.php">
        <input type="hidden" name="logout" value="yes">
        <input type="submit" name="logout" value="Logout">
    </form>
</main>