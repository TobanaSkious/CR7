<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Pestana Hotel</title>
    <script type="text/javascript" src="<?php echo ASSETS; ?>/https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo ASSETS; ?>/dist/pickmeup.min.js"></script>
    <script type="text/javascript" src="<?php echo ASSETS; ?>/dist/handleCounter.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo ASSETS; ?>/css/pickmeup.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ASSETS; ?>/css/handle-counter.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ASSETS; ?>/css/main.css">
    <link href="<?php echo ASSETS; ?>/https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script type="text/javascript" src="<?php echo ASSETS; ?>/dist/jquery.scrollUp.js"></script>
    <script type="text/javascript" src="<?php echo ASSETS; ?>/dist/demo.js"></script>



</head>

<body>
    <header class="tm-header">
        <nav class="tm-nav">
            <div>
                <ul>
                    <li class="tm-list"><a href="index">Home</a></li>
                    <li class="tm-list"><a href="explorer">Explore</a></li>
                    <li class="tm-list"><a href="suites">Rooms</a></li>
                    <li class="tm-list"><a id="navbook" href="booking">Booking</a></li>
                    <li><a href="contactus">Contact</a></li>
                </ul>
            </div>
        </nav>
        <img class="tm-logo" src="<?php echo ASSETS; ?>/images/Gold Royal Crown Logo Vector Template.png" alt="Majestic Hotel">

    </header>


    <section class="tm-main">
        <p>Booking</p>
    </section>



    <section class="tm-booking">

        <form>
            <div class="tm-form1">
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="E-mail">
                <label for="rooms" id="inlinelable">Rooms</label>
                <select name="Rooms" id="rooms">
                    <option value="luxurys">Luxury Suite</option>
                    <option value="deluxs">Delux Suite</option>
                    <option value="premiers">Premier Suite</option>
                    <option value="Luxuryr">Luxury Room</option>
                    <option value="deluxs">Delux Room</option>
                    <option value="premierr">Premier Room</option>
                </select>






                <div class="tm-num1" id="handleCounter1">
                    <label for="number1">Number of Rooms</label><br />
                    <button type="button" class="counter-minus btn btn-primary">- </button>
                    <input type="text" name="number1" id="number1" value="1">
                    <button type="button" class="counter-plus btn btn-primary">+ </button>
                </div>
                <div class="tm-num2" id="handleCounter2">
                    <label for="number2">Number of Guests</label><br />
                    <button type="button" class="counter-minus btn btn-primary">-</button>
                    <input type="text" name="number2" id="number2" value="1">
                    <button type="button" class="counter-plus btn btn-primary">+</button>
                </div>





            </div>

            <div class="vertical-line"> </div>

            <div class="tm-form2">
                <div class="tm-cl">
                    <label for="date1" class="arrival">Visiting Dates from Arrival to Departure</label>

                    <input type="text" name="date1" class="range" readonly="readonly">


                    <input type="submit" id="sub" value="Proceed">
                </div>
            </div>
        </form>
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