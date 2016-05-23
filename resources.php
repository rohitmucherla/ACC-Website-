<?php
  include 'nav-bar.php';
?>
<!DOCTYPE html>
<!--
    Apparently 'details' is only supported in chrome and
    safari, so need to use javascript/jquery to replace
-->
<html>
<head>
    <title> Aggie Coding Club </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="The webpage for the Aggie Coding Club"></meta>
    <link rel='icon' href='Images/Logo.png'></link>
    <!--<link rel="stylesheet" href="css/resources.css"/>-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main_v2.css">

</head>
<body>
<div id="wrapper">

    <?php echo $nav_bar; ?>

    <div class="container">

        <h2> Resources </h2>

        <details>
            <summary>General resources</summary>
            <ul class='resource'>
                <li><a href='https://teamtreehouse.com/'>Teamtreehouse.com</a>
                </li>
                <li><a href='http://stackoverflow.com/'>Stackoverflow.com</a>
                </li>
                <li><a href='https://www.google.com/'>Google.com</a></li>
            </ul>
        </details>

        <details>
            <summary>C++ resources</summary>
            <ul class='resource'>
                <li><a href='http://www.cplusplus.com/'>cplusplus.com</a></li>
                <li><a href='http://cpp.sh/'>C++ shell</a></li>
            </ul>
        </details>
        <details>
            <summary>Web development resources</summary>
            <ul class='resource'>
                <li><a href='https://developer.mozilla.org/en-US/Learn'>Introduction
                    to web development</a></li>
                <li><a href='http://www.w3schools.com/html/default.asp'>w3schools
                    HTML information</a></li>
                <li><a href='https://developer.mozilla.org/en-US/docs/Web/HTML'>Mozilla.org
                    HTML information</a></li>
            </ul>
        </details>

        <details>
            <summary>JavaScript resources</summary>
            <ul class='resource'>
                <li><a href='http://www.w3schools.com/js/default.asp'>w3schools.com/js</a>
                </li>
                <li>
                    <a href='https://developer.mozilla.org/en-US/docs/Web/JavaScript'>Mozilla.org</a>
                </li>
                <li><a href='https://www.javascript.com/'>javascript.com</a>
                </li>
            </ul>
        </details>

        <details>
            <summary>Swift resources</summary>
            <ul class='resource'>
                <li>
                    <a href='https://developer.apple.com/library/ios/referencelibrary/GettingStarted/DevelopiOSAppsSwift/index.html#//apple_ref/doc/uid/TP40015214-CH2-SW1'>Swift
                        Tutorial</a></li>
                <li>
                    <a href='https://developer.apple.com/library/ios/documentation/Swift/Conceptual/Swift_Programming_Language/'>The
                        Swift Programming Language</a></li>
                <li>
                    <a href='http://carlosicaza.com/swiftbooks/SwiftLanguage.pdf'>The
                        Swift Programming Language (pdf)</a></li>
            </ul>
        </details>

        <details>
            <summary>C# resources</summary>
            <ul class='resource'>
                <li>
                    <a href='https://www.caveofprogramming.com/c-sharp-tutorial/basic-c-programming-test-your-knowledge-2.html'>C#
                        Tutorial</a></li>
                <li>
                    <a href='https://www.caveofprogramming.com/c-sharp-tutorial/c-for-beginners-make-your-own-mp3-player-free.html'>Tutorial
                        to make a basic MP3 player</a></li>
            </ul>
        </details>

        <details>
            <summary>Haskell resources</summary>
            <ul class='resource'>
                <li>
                    <a href='http://learnyouahaskell.com/introduction#about-this-tutorial'>Learn
                        You a Haskell</a></li>
            </ul>
        </details>

    </div>

    <footer>
        <p>&copy; ACC</p>
        <a class="social_button facebook_button" href='https://www.facebook.com/aggiecodingclub'>
            <img id='fb'
                 src='https://www.facebook.com/images/fb_icon_325x325.png'/>
        </a>
        <!--Maybe put some more information down here-->
    </footer>

</div>


<script src="js/jquery-2.2.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hamburger.js"></script>
</body>
</html>
<!--Matt Gaikema-->