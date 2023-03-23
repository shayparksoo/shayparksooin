<?php require("init.php")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UI UX: Circular Project by Shay Park</title>
        <meta name="description" content="Shay Park's Circular Project">
        <meta name="keywords" content="shay park portfolio, soo in park portfolio, Portfolio, design, UI, UX, UI UX, UI UX Designer, UI UX Designer, digital graphic, figma, illustrator, photoshop, vancouver, bcit, circular project, UI design, UX design, user experience, prototype">

        <!-- Facebook/LinkedIn Meta Tags -->
        <meta property="og:url" content="https://shayparksooin.com/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Shay Park's Circular Project">
        <meta property="og:description" content="Circular is a school project that was completed to research the user experience of online shopping and analyzing the information to create a prototype of an online clothing shop using skills from Adobe XD and Figma. I explained the process of the workflow by explaining the concept, user research, wireframe, challenges, and the final deliverable. The project was created by using Figma and Adobe XD.">
        <meta property="og:image" content="/img/og-fb-circular.png">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="shayparksooin.com">
        <meta property="twitter:url" content="https://shayparksooin.com/">
        <meta name="twitter:title" content="Shay Park's Circular Project">
        <meta name="twitter:description" content="Circular is a school project that was completed to research the user experience of online shopping and analyzing the information to create a prototype of an online clothing shop using skills from Adobe XD and Figma. I explained the process of the workflow by explaining the concept, user research, wireframe, challenges, and the final deliverable. The project was created by using Figma and Adobe XD.">
        <meta name="twitter:image" content="/img/og-tw-circular.png">

        <link href="plugin/lightbox2/dist/css/lightbox.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body data-barba="wrapper">
        <div class="load-container">
            <div class="loading-screen"></div>
        </div>
    
        <?php require('partials/global/header.php')?>

        <main data-barba="container" data-barba-namespace="circular-section">
            <div class="fade-in"><?php require('partials/uiux/circular/circular-header.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/circular/circular-title.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/circular/circular-preview.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/circular/circular-purpose.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/circular/circular-brainstorm.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/circular/circular-concept.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/circular/circular-ux.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/circular/circular-wireframe.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/circular/circular-final.php')?></div>
        </main>

        <?php require('partials/global/footer.php')?>
        <script src="plugin/lightbox2/dist/js/lightbox-plus-jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.3/dist/lazyload.min.js"></script>
        <script src="index.js"></script>
        

    </body>
</html>