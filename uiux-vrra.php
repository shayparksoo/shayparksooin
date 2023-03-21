<?php require("init.php")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UI UX: VRRA Project by Shay Park</title>
        <meta name="description" content="Shay Park's VRRA UI Project">
        <meta name="keywords" content="shay park portfolio, soo in park portfolio, Portfolio, design, UI, UX, UI UX, UI UX Designer, UI UX Designer, digital graphic, figma, illustrator, photoshop, vancouver, bcit, prototype, VRRA, UI design">

        <!-- Facebook/LinkedIn Meta Tags -->
        <meta property="og:url" content="https://shayparksooin.com/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Shay Park's  VRRA Project">
        <meta property="og:description" content="VRRA is a school group project and its purpose was to perform a study of user experience of a website. The project included research of a potential website that can be redesigned, a development and production of user research, and an analysis of data result with a possible design improvement of wireframes. I played the role as test moderator and UI/UX designer and produced a prototype from the reseach analysis.">
        <meta property="og:image" content="">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="shayparksooin.com">
        <meta property="twitter:url" content="https://shayparksooin.com/">
        <meta name="twitter:title" content="Shay Park's  VRRA Project">
        <meta name="twitter:description" content="VRRA is a school group project and its purpose was to perform a study of user experience of a website. The project included research of a potential website that can be redesigned, a development and production of user research, and an analysis of data result with a possible design improvement of wireframes. I played the role as test moderator and UI/UX designer and produced a prototype from the reseach analysis.">
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