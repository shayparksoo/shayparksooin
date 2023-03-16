<?php require("init.php")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UI UX: VRRA Project by Shay Park</title>
        <meta name="description" content="Shay Park's One Tap UI Project">
        <meta name="keywords" content="shay park portfolio, soo in park portfolio, Portfolio, design, UI, UX, UI UX, UI UX Designer, UI UX Designer, digital graphic, figma, illustrator, photoshop, vancouver, bcit, prototype, VRRA, UI design">
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
            <div class="fade-in"><?php require('partials/uiux/vrra/vrra-header.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/vrra/vrra-title.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/vrra/vrra-preview.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/vrra/vrra-purpose.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/vrra/vrra-testing.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/vrra/vrra-ux.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/vrra/vrra-final.php')?></div>
        </main>

        <?php require('partials/global/footer.php')?>
        <script src="plugin/lightbox2/dist/js/lightbox.min.js"></script>

    </body>
</html>