<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>

<header>
    <nav>
        <div class="dropdown">
            <img src="https://res.cloudinary.com/yungdorf/image/upload/v1617715167/dropdownmenu_g4qw1b.png">
            <div class="dropdown-content">
                <a href="slideshow.php">Album Collectie</a>
                <a href="register.php">Register</a>
                <a href="https://bird-rotterdam.nl/support-bird/">Doneren</a>
                <a href="#donate">Contact</a>
            </div>
        </div>
    </nav>
    <h1>VR Chatroom BIRD Rotterdam</h1>
</header>

<main>
    <div><a href="https://bird-rotterdam.nl/support-bird/">SUPPORT BIRD</a></div>

</main>

<body>

<article>
    <a href=https://bird-rotterdam.nl/agenda/">Check hier de agenda van BIRD</a><br>
</article>

<section id="info chatroom">
    <p>You asked, we delivered. Imagine not being able to see your favorite artist live because of Covid 19. Sounds boring, right? Not anymore! Thanks to the amazing work of the Cool Ranch Wings, you can
        now follow all BIRD events from your living room in virtual reality. No need to thank us.</p>
</section>

<article>
    <a href=https://bird-rotterdam.nl/agenda/">Onze eigen shit nog ff fixen voor de chatroom </a><br>
</article>

<section id="register">
    <p>Register here to join the fun in the VR BIRD Chatroom.</p>
</section>
<article>
    <a href=https://bird-rotterdam.nl/agenda/">Register hier of log in</a><br>
</article>


<section id="donate">
    <p>To support BIRD you can donate here.</p>
</section>
<article>
    <a href=https://bird-rotterdam.nl/support-bird/">Check hier wat je kan doen om Bird te steunen</a><br>
</article>

</body>

<footer>
    <a>CONTACT</a>
    <summary>

    <div class="menu">
            <a>Bird Rotterdam<br></a>
            <a>Raampoortstraat 24/26/28<br></a>
            <a>3032 AH Rotterdam<br></a>
            <a>The Netherlands<br></a>
        <br>
            <a>info@bird-rotterdam.nl<br></a>
       <br>
            <a style="color: blue" href="https://www.instagram.com/birdrotterdam/">Instagram<br></a>
            <a style="color: blue" href="https://www.facebook.com/BIRDrotterdam">Facebook<br></a>
            <a style="color: blue" href="https://twitter.com/Bird_Rdam">Twitter<br></a>
    </div>

    <div class="main">
        <div id="googleMap" style="width:100%;height:400px;"></div>

        <script>
            function myMap() {
                var mapProp= {
                    center:new google.maps.LatLng(51.92743714921707, 4.474110368090831),
                    zoom:15,
                };
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPO_Z1dHg6fj1fxBG-0vGFACcpduYUeKM&callback=myMap"></script>
    </div>
    </summary>
</footer>
</html>`




