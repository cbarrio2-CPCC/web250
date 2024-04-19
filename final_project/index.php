<?php
session_start();
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Clerick Barrion's Celestial Barracuda &#8225; WEB250 &#8225; Home</title>
    <link rel="stylesheet" type="text/css" href="styles/default.css">
</head>

<body>
    <header>
          <h1>Clerick Barrion's Celestial Barracuda &#8225; WEB250</h1>
          <small>Dive Deep With CudaCorp</small>
          <nav>
               <ul>
                    <li><a href="?p=contents/home.php">Home</a></li>
                    <li><a href="?p=contents/brand.php">Brand</a></li>
                    <li><a href="?p=contents/browse.php">Browse</a></li>
                    <?php 
                    if(isset($_SESSION["username"])) {
                        $username = $_SESSION["username"];
                        echo "<li><a href='?p=contents/account.php'>$username</a></li>";
                    } else {
                        echo "<li><a href='?p=contents/login.php'>Login</a></li>";
                    }
                    ?>
               </ul>
          </nav>
    </header>
    
    <?php
        @$sPage = $_GET["p"];
        
        if($sPage == "") {  $sPage = "contents/home.php"; }
        include($sPage);
    ?>

    <footer>
          <ul>
            <li><a href="https://github.com/cbarrio2-CPCC">GitHub</a></li>
            <li><a href="https://cbarrio2-cpcc.github.io">GitHub.io</a></li>
            <li><a href="https://cbarrio2-cpcc.github.io/web250">WEB250.io</a></li>
            <li><a href="https://www.freecodecamp.org/clerick">freeCodeCamp</a></li>
            <li><a href="https://www.codecademy.com/profiles/cbarrion">Codecademy</a></li>
            <li><a href="https://jsfiddle.net/user/clerickbarrion">JSFiddle</a></li>
            <li><a href="https://www.linkedin.com/in/clerickbarrion">LinkedIn</a></li>
        </ul>
        <br>
        <p>Designed by Barrion CudaCorp &copy;2024</p>
        <?php 
            $htmlurl = 'http://validator.w3.org/check?uri=https://cudacorp.000webhostapp.com'.$_SERVER['REQUEST_URI'];
            $cssurl = 'http://jigsaw.w3.org/css-validator/validator?uri=https://cudacorp.000webhostapp.com'.$_SERVER['REQUEST_URI'];
            echo "
            <a href='$htmlurl' style = 'text-decoration: none'>
                <img src='images/validation_button_html-blue.png' alt='Validate HTML' />
            </a>
            <a href='$cssurl' style = 'text-decoration: none'>
                <img src='images/validation_button_css-blue.png' alt='Validate CSS' />
            </a>";
        ?>
    </footer>
</body>
</html>