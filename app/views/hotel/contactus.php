<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Pistana Hotel</title>
    <script type="text/javascript" src="<?php echo ASSETS; ?>/https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo ASSETS; ?>/dist/pickmeup.min.js"></script>
    <script type="text/javascript" src="<?php echo ASSETS; ?>/dist/handleCounter.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo ASSETS; ?>/css/pickmeup.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ASSETS; ?>/css/handle-counter.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ASSETS; ?>/css/main.css">
    <link href="<?php echo ASSETS; ?>/https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script type="text/javascript" src="<?php echo ASSETS; ?>/dist/jquery.scrollUp.js"></script>
    <script type="text/javascript" src="<?php echo ASSETS; ?>/dist/demo.js"></script>


    <script async defer src="<?php echo ASSETS; ?>/https://maps.googleapis.com/maps/api/js?key=AIzaSyB3tO4SQlk9ZVpuhRXlmNfYh37e63-Li2k&callback=initMap">
    </script>



</head>

<body>
    <header class="tm-header">
        <!-- <img class="tm-logo" src="images/Gold Royal Crown Logo Vector Template.png" alt="Majestic Hotel"> -->
        <nav class="tm-nav">
            <div>
                <ul>
                    <li class="tm-list"><a href="index">Home</a></li>
                    <li class="tm-list"><a href="explorer">Explore</a></li>
                    <li class="tm-list"><a href="suites">Rooms</a></li>
                    <li class="tm-list"><a href="booking">Booking</a></li>
                    <li><a id="navcontact" href="contactus">Contact</a></li>
                </ul>
            </div>
        </nav>
        <img class="tm-logo" src="<?php echo ASSETS; ?>/images/Gold Royal Crown Logo Vector Template.png" alt="Majestic Hotel">

    </header>


    <section class="tm-main">
        <p>Contact</p>
    </section>



    <section class="tm-booking">

        <form>
            <div class="tm-form1">
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="E-mail">
                <textarea placeholder="Your message..." rows="4"></textarea>

                <input type="submit" id="sub2" value="Send">

            </div>
        </form>

        <div class="vertical-line"> </div>

        <div class="tm-form2">
            <div class="tm-cl">
                <p class="here">We are situated over here</p><img id="place" src="<?php echo ASSETS; ?>/images/placeholder.png">

                <div id="map"></div>


            </div>
        </div>

    </section>


    <footer class="tm-footer">
        <div class="tm-us">
            <p class="bold">About Us</p>
            <p>We are a part of chain of luxury hotels
                which extends all over the world. We
                provide a luxorious stay with various value
                added and free services which will make
                you visit us over and over again.</p>
        </div>

        <div class="tm-address">
            <p class="bold">Address</p>
            <p>415, Park Avenu, Hawai
                Phone : (211) 9275693451
                Email : majestic@info.com</p>
        </div>
        <br />
        <div class="tm-media">
            <a href="#"> <img src="<?php echo ASSETS; ?>/images/fb.png"></a>
            <a href="#"> <img src="<?php echo ASSETS; ?>/images/G.png"> </a>
            <a href="#"> <img src="<?php echo ASSETS; ?>/images/twittr.png"> </a>
            <a href="#"> <img src="<?php echo ASSETS; ?>/images/insta.png"> </a>

        </div>
        <!--        <a href="#">  <img class="tm-up" src="images/up.png"> </a>-->
    </footer>



</body>

</html>