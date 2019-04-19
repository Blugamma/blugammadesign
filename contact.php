<link rel="stylesheet" href="styles/main.css">
<link rel="icon" href="images/logoIcon.png_32x32.png" type="image/xicon" />
<link rel="shortcut icon" href="images/logoIcon.png_32x32.png" type="image/xicon" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="scripts/jquery-2.2.4.min.js"></script>
<link rel="stylesheet" href="./scripts/menuButton/css/styles.css" type="text/css" />
<link rel="stylesheet" href="./scripts/menuButton/css/menu.css" type="text/css" />
<link rel="stylesheet" href="./styles/imgSlider/ideal-image-slider.css">
<link rel="stylesheet" href="./styles/imgSlider/default.css">
<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent="From: $name \n$mobile\nMessage: $message";
$recipient = "blugammadesign@gmail.com";
$subject = "$subject";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("refresh:5;url=contact.html");
echo '<body id="top">
    <header>
        <div class="wrap"> <img id="logo" src="images/logobanner.png">
            <div id="titleFont">Blugamma Design</div>
            <label for="toggleMenu" class="menuTitle" onclick="">
                <div id="menuButton"></div>
                <div id="smallmenuButton"></div>
            </label>
            <nav> <a href="index.html">Home</a>
                <li class="dropdown"> <a href="portfolio.html">Portfolio</a>
                    <div class="dropdown-content"> <a href="portfolio.html#webDesign">Web Design</a> <a href="portfolio.html#brandDesign">Brand Design</a> </div>
                </li> <a href="services.html">Services</a> <a href="contact.html">Contact</a> </nav>
        </div>
        <nav class="mainMenu">
            <input type="checkbox" id="toggleMenu" />
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="mobiledropdown"> <a href="portfolio.html" class="mobiledropbtn">Portfolio</a>
                    <div class="mobiledropdown-content"> <a href="portfolio.html#webDesign">- Web Design</a> <a href="portfolio.html#brandDesign">- Brand Design</a> </div>
                </li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    <a href="#top">
        <div id="scrollBackUp"></div>
    </a>';
echo "<center><p>Email has been sent! You will be redirected back in 5 seconds!</p></center>";
echo '<footer>
        <div class="wrap">
            <p id="copyright">&copy;2016 Blugamma Design. All Rights Reserved</p>
            <div id="socialBar">
                <a href="https://twitter.com/BluGamma" target="_blank">
                    <div id="twitterIcon"></div>
                </a>
                <a href="https://www.facebook.com/blugammadesign" target="_blank">
                    <div id="facebookIcon"></div>
                </a>
                <a href="https://www.linkedin.com/in/blugammadesign" target="_blank">
                    <div id="linkedInIcon"></div>
                </a>
            </div>
            <p id="contactInfo">+44 (0)7986607850 | <a href="mailto:blugammadesign@gmail.com">blugammadesign@gmail.com</a></p>
        </div>
    </footer>
    </body>';

?>