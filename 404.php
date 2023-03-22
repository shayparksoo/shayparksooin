<?php require_once("init.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>404Page</title>
        <meta name="description" content="Shay Park's 404 Page">
        <meta name="keywords" content="shay park portfolio, soo in park portfolio, Portfolio, design, UI, UX, UI UX, UI UX Designer, UI UX Designer, digital graphic, figma, illustrator, photoshop, vancouver, bcit, prototype, VRRA, UI design">

        <!-- Facebook/LinkedIn Meta Tags -->
        <meta property="og:url" content="https://shayparksooin.com/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Shay Park's 404 Page">
        <meta property="og:description" content="This is Shay's 404 page. Please check your URL or go to shayparksooin.com">
        <meta property="og:image" content="/img/og-fb-home.png">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="shayparksooin.com">
        <meta property="twitter:url" content="https://shayparksooin.com/">
        <meta name="twitter:title" content="Shay Park's 404 Page">
        <meta name="twitter:description" content="This is Shay's 404 page. Please check your URL or go to shayparksooin.com">
        <meta name="twitter:image" content="/img/og-tw-home.png">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body data-barba="wrapper">
        <div class="load-container">
            <div class="loading-screen"></div>
        </div>

        <div data-barba="wrapper">
        
            <?php require('partials/global/header.php')?>

            <main data-barba="container" data-barba-namespace="uiux-section">
            <div class="fade-in"><?php require('partials/404/404page.php')?></div>
            </main>

            <?php require('partials/global/footer.php')?>

    </div>

    </body>
</html>