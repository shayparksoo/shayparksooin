<?php require("init.php")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UI UX: PayTrack Project by Shay Park</title>
        <meta name="description" content="Shay Park's PayTrack UI Project">
        <meta name="keywords" content="shay park portfolio, soo in park portfolio, Portfolio, design, UI, UX, UI UX, UI UX Designer, UI UX Designer, digital graphic, figma, illustrator, photoshop, vancouver, bcit, prototype, PayTrack, UI design">

        <!-- Facebook/LinkedIn Meta Tags -->
        <meta property="og:url" content="https://shayparksooin.com/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Shay Park's  PayTrack Project">
        <meta property="og:description" content="PayTrack is a concept idea to demonstrate the skills of UI and Figma software.The design showcases the navigation of a subscription tracking application with features of adding a new subscription, adding a payment card, and managing subscriptions.">
        <meta property="og:image" content="/img/og-fb-PayTrack.png">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="shayparksooin.com">
        <meta property="twitter:url" content="https://shayparksooin.com/">
        <meta name="twitter:title" content="Shay Park's  PayTrack Project">
        <meta name="twitter:description" content="PayTrack is a concept idea to demonstrate the skills of UI and Figma software.The design showcases the navigation of a subscription tracking application with features of adding a new subscription, adding a payment card, and managing subscriptions.">
        <meta name="twitter:image" content="/img/og-tw-PayTrack.png">

        <link href="plugin/lightbox2/dist/css/lightbox.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body data-barba="wrapper">
        <div class="load-container">
            <div class="loading-screen"></div>
        </div>
    
        <?php require('partials/global/header.php')?>

        <main data-barba="container" data-barba-namespace="onetap-section">
            <div class="fade-in"><?php require('partials/uiux/paytrack/paytrack-header.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/paytrack/paytrack-title.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/paytrack/paytrack-preview.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/paytrack/paytrack-purpose.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/paytrack/paytrack-mission.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/paytrack/paytrack-concept.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/paytrack/paytrack-wireframe.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/paytrack/paytrack-challenges.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/paytrack/paytrack-final.php')?></div>
        </main>

        <?php require('partials/global/footer.php')?>
        <script src="plugin/lightbox2/dist/js/lightbox.min.js"></script><script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.3/dist/lazyload.min.js"></script>
        <script src="index.js"></script>

    </body>
</html>