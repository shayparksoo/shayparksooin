<?php require("init.php")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UI UX: One Tap Project by Shay Park</title>
        <meta name="description" content="Shay Park's One Tap UI Project">
        <meta name="keywords" content="shay park portfolio, soo in park portfolio, Portfolio, design, UI, UX, UI UX, UI UX Designer, UI UX Designer, digital graphic, figma, illustrator, photoshop, vancouver, bcit, prototype, One tap, UI design">

        <!-- Facebook/LinkedIn Meta Tags -->
        <meta property="og:url" content="https://shayparksooin.com/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Shay Park's  One Tap UI Project">
        <meta property="og:description" content="One Tap UI is a personal project that was created to practice the UI of Point of Sales System. The process includes researching design system reference such as Material Design and producing high-fidelity wireframes. A basic prototype was created to showcase the design.">
        <meta property="og:image" content="">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="shayparksooin.com">
        <meta property="twitter:url" content="https://shayparksooin.com/">
        <meta name="twitter:title" content="Shay Park's  One Tap UI Project">
        <meta name="twitter:description" content="One Tap UI is a personal project that was created to practice the UI of Point of Sales System. The process includes researching design system reference such as Material Design and producing high-fidelity wireframes. A basic prototype was created to showcase the design.">
        <meta name="twitter:image" content="">

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
            <div class="fade-in"><?php require('partials/uiux/onetap/onetap-header.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/onetap/onetap-title.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/onetap/onetap-preview.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/onetap/onetap-purpose.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/onetap/onetap-brainstorm.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/onetap/onetap-ux.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/onetap/onetap-final.php')?></div>
        </main>

        <?php require('partials/global/footer.php')?>
        <script src="plugin/lightbox2/dist/js/lightbox.min.js"></script>

    </body>
</html>