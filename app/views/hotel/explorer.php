<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Magestic Hotel</title>
    <link rel="stylesheet" type="text/css" href="<?php echo ASSETS; ?>/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <script type="text/javascript" src="<?php echo ASSETS; ?>/https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo ASSETS; ?>/dist/jquery.scrollUp.js"></script>
    <script type="text/javascript" src="<?php echo ASSETS; ?>/dist/demo.js"></script>


</head>

<body>
    <header class="tm-header">
        <nav class="tm-nav">
            <div>
                <ul>
                    <li class="tm-list"><a href="index">Home</a></li>
                    <li class="tm-list"><a id="navexplore" href="explorer">Explore</a></li>
                    <li class="tm-list"><a href="suites">Rooms</a></li>
                    <li class="tm-list"><a href="booking">Booking</a></li>
                    <li><a href="contactus">Contact</a></li>
                </ul>
            </div>

        </nav>
        <!-- <img class="tm-logo" src="images/Gold Royal Crown Logo Vector Template.png" alt="Majestic Hotel"> -->

        <img class="tm-logo" src="<?php echo ASSETS; ?>/images/Gold Royal Crown Logo Vector Template.png" alt="Majestic Hotel">
    </header>


    <section class="tm-main">
        <p>Explore</p>
    </section>


    <section class="tm-expsection">

        <div class="tm-exp1">

            <p> Luxorious and Spacious Rooms</p>
            <img src="images/luxorius.png">

        </div>
    </section>


    <section class="tm-expsection">

        <div class="tm-exp2">

            <p> Inhouse Spa</p>
            <img src="<?php echo ASSETS; ?>/images/spahouse.png">

        </div>
    </section>


    <section class="tm-expsection">

        <div class="tm-exp1">

            <p> Swimming Pools</p>
            <img src="<?php echo ASSETS; ?>/images/swimming.png">

        </div>
    </section>


    <section class="tm-expsection">

        <div class="tm-exp2">

            <p> Indoor Game Room</p>
            <img src="<?php echo ASSETS; ?>/images/play.png">

        </div>
    </section>









    <section class="tm-makeres">
        <div class="tm-res">
            <div class="tm-resbutton">
                <a href="booking.phpl">
                    <p>Make Reservation</p>
                </a>
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