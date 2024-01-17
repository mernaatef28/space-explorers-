<?php
session_start();
$count =0 ;
include("connection.php");
$client_username=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="IMG/icons/solar-system.png">
    <title>Space Explolers</title>
    <link rel="stylesheet" href="Homee.css">
</head>

<body>

    <!-- header genral 1 -->

    <?php include 'userheader.php';?>

    <section class="end">
        <!-- welcomeing the user when he login -->
        <h2>Welcome <?php echo $client_username ?> to the Space Explorers website
            <p>With us, you will learn more about space tourism <span id="op">Enjoyable trip</span></p></h2>
        </section>

    <div class="wrapper">

    <span class="icon-close">
    <ion-icon name="close-circle-outline"></ion-icon>
    </span>
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>