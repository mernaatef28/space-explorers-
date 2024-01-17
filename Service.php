<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Service.css">
    <link rel="icon" href="IMG/icons/customer.png">
    <title>Services</title>
</head>

<body>
    <script src="https://kit.fontawesome.com/92bd695a26.js" crossorigin="anonymous"></script>
    <div id="video-overlay" hidden>

    </div>
    <div class="main">
        <!-- Navbar -->
        <div class="navbar">
            <a href="index.php" class="logo">Space explorers</a>
            <div class="nav-links">

                <a href="index.php" id="final">Home</a>
                <span id="scroll" class="item">Get Started</span>
            </div>

            <div class="nav-buttons" id="navMenu">
                <a href="Reg.php">
                    <button class="nav-btn selected">CREATE</button>
                </a>

                <a href="log.php">
                    <button class="nav-btn">SIGN IN</button>
                </a>
            </div>


            <button class="toggler">
                <i class='bx bx-menu'></i>
            </button>
        </div>
        <!-- End of Navbar -->

        <!-- Top Container -->
        <div class="top-container">
            <div class="info-box">
                <!-- merna: need to get the data from each container to make a php container were the data are taken from the database table -->
                <p class="mars"> 
                    Mars   <!-- trip_destination -->
                </p>

                <p class="header"> <!-- trip_welcome -->
                    Welcome to the newest tourism experience in the universe! We invite you to discover the unknown
                    and live a unique experience on the surface of Mars.
                </p>
                <p class="info-text"> <!-- trip_discribtion -->
                    Embark on a life-changing journey and prepare to explore a new world with its amazing colors and
                    unique views. Here we will give you a quick overview of this exceptional experience.
                </p>

                <!-- <p class="header">-->


            </div>
            <div class="nft-box">
                <img src="IMG/pictures/mars.jpg" class="nft-pic"> <!-- trip_img -->
                <div class="nft-content">
                    <i class="fa-solid fa-play" style="color: blueviolet;font-size:x-large;" onclick="playOverlayedVideo('MarsVR.mp4')"></i> <!-- trip_vrvideo -->
                </div>

            </div>
        </div>
        <!-- End of Top Container -->

        <!-- Top Container -->
        <div class="top-container">
            <div class="info-box">
                <p class="Moon">
                    Moon
                </p>
                <p class="header">
                    Get ready for an exceptional trip to the moon! Join us on this wonderful journey to the Moon,
                    where you will live a unique experience and enjoy unforgettable views.
                </p>
                <p class="info-text">
                    Embark on this space adventure and get ready to discover a new world far from Earth.
                </p>
                <!-- <p class="header">-->

            </div>
            <div class="nft-box">
                <img src="IMG/pictures/moon.jpg" class="nft-pic">
                <div class="nft-content">
                    <i class="fa-solid fa-play" style="color: blueviolet;font-size:x-large;" onclick="playOverlayedVideo('MoonVR.mp4')"></i>
                </div>

            </div>

        </div>
        <!-- End of Top Container -->

        <!-- Get Stearted -->

        <div class="get-started">
            <p class="header">Getting Started</p>
            <div class="items-box">
                <!-- Your PNG image here -->
                <img src="IMG/icons/cartoon-rocket.jpg" alt="Image Description" width="300">
            </div>
        </div>
        <!-- End of Get Started -->

        <!-- End of Get Started -->

        <section class="space-tourism">
            <h2 class="ffk">Space Tourism</h2>
            <p>Find out the cost of space tourism and explore tourist destinations and flight times.</p>



        </section>

        <div class="top-container">
            <div class="info-box">
                <p class="Moon">
                    Trip time
                </p>
                <p class="time">
                    A trip to <span class="cvc">Mars</span> could take anywhere from 6 months to approximately 9
                    months depending on the direction range and launch timing.
                </p>
                <p class="info-text">
                    In the near future there will be unique flights to the <span class="cvc">moon</span>
                </p>
                <!-- <p class="header">-->

            </div>
            <div class="nft-box">
                <img src="IMG/pictures/trip.jpg" class="nft-pic">
                <div class="nft-content">
                </div>

            </div>

        </div>

        <div class="top-container">
            <div class="info-box">
                <p class="Moon">
                    Cost
                </p>
                <p class="header">
                    The average cost is $250,000
                </p>

            </div>
            <div class="nft-box">
                <img src="IMG/pictures/cost.jpg" class="nft-pic">
                <div class="nft-content">
                </div>

            </div>
        </div>

        <a href="ticket.html" class="sec1__btn">Book now</a>

        <!-- End of Footer -->
        <div class="copyright">
            <p>Copyright 2023, Space explorers</p>
        </div>

    </div>


    <script src="Service.js"></script>
</body>

</html>