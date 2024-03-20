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
                    <li><a href="?p=contents/introduction.php">Introduction</a></li>
                    <li><a href="?p=contents/contract.php">Contract</a></li>
                    <li><a href="?p=contents/brand.php">Brand</a></li>
                    <li><a href="?p=contents/form.php">Form</a></li>
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
            <li><a href="https://github.com/cbarrio2-CPCC">Github</a></li>
            <li><a href="https://cbarrio2-cpcc.github.io">Github.io</a></li>
            <li><a href="https://cbarrio2-cpcc.github.io/web250">WEB250.io</a></li>
            <li><a href="https://www.freecodecamp.org/clerick">freecodecamp</a></li>
            <li><a href="https://www.codecademy.com/profiles/cbarrion">Codecademy</a></li>
            <li><a href="https://jsfiddle.net/user/clerickbarrion">JSFiddle</a></li>
            <li><a href="https://www.linkedin.com/in/clerickbarrion">LinkedIn</a></li>
        </ul>
        <br>
        <p>Designed by Barrion CudaCorp &copy;2024</p>
        <a href="http://validator.w3.org/check?uri=referer" style = "text-decoration: none">
            <img src="images/validation_button_html-blue.png" alt="Validate HTML" />
        </a>
        <a href="http://jigsaw.w3.org/css-validator/validator?uri=referer" style = "text-decoration: none">
            <img src="images/validation_button_css-blue.png" alt="Validate CSS" />
        </a>
    </footer>
</body>
</html>