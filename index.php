<?php 
    require("init.php")
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Shay Park's UI UX Design Porfolio Website">
        <meta name="keywords" content="shay park portfolio, soo in park portfolio, Portfolio, design, UI, UX, UI UX, UI UX Designer, UI UX Designer, graphic, graphic designer, photographer, figma, illustrator, photoshop, vancouver, bcit">
        <title>Shay Park's Portfolio</title>
        <link rel="icon" type="image/svg" href="/img/favicon.svg">
        <meta name="author" content="Shay Park, Soo In Park">
        <link href="plugin/lightbox2/dist/css/lightbox.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="load-container">
            <div class="loading-screen"></div>
        </div>
        
        <div data-barba="wrapper">
        <?php require('partials/global/header.php')?>

            <main data-barba="container" data-barba-namespace="home-section">
                <div class="fade-in"><?php require('partials/home/home-hero.php')?><div>
                <div class="fade-in"><?php require('partials/home/home-about.php')?><div>
                <div class="fade-in"><?php require('partials/home/home-work.php')?><div>
                <div class="fade-in"><?php require('partials/home/home-contact.php')?><div>
            </main>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="plugin/lightbox2/dist/js/lightbox.min.js"></script>
        <script src="https://unpkg.com/@barba/core"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
        <script src="index.js"></script>
        
    </body>
    <?php require('partials/global/footer.php')?>

</html>