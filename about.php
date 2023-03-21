<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shay Park's Portfolio</title>
        <meta name="description" content="Shay Park's About Page">
        <meta name="keywords" content="shay park portfolio, soo in park portfolio, Portfolio, design, UI, UX, UI UX, UI UX Designer, UI UX Designer, digital graphic, figma, illustrator, photoshop, vancouver, bcit, ux design, ui design, ">

         <!-- Facebook/LinkedIn Meta Tags -->
         <meta property="og:url" content="https://shayparksooin.com/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Shay Park's About Page">
        <meta property="og:description" content="I'm a UI/UX designer who strives to produce designs that increases user experience. I love to create designs that are simple but effective to give a seamless user flow. I lived in Vancouver since 2003 and I love to go out to take photos of the beautiful scenary and people.">
        <meta property="og:image" content="/img/og-fb-about.png">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="shayparksooin.com">
        <meta property="twitter:url" content="https://shayparksooin.com/">
        <meta name="twitter:title" content="Shay Park's About Page">
        <meta name="twitter:description" content="I'm a UI/UX designer who strives to produce designs that increases user experience. I love to create designs that are simple but effective to give a seamless user flow. I lived in Vancouver since 2003 and I love to go out to take photos of the beautiful scenary and people.">
        <meta name="twitter:image" content="/img/og-tw-about.png">

        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body data-barba="wrapper">
        <div class="load-container">
            <div class="loading-screen"></div>
        </div>
        
        <?php require('partials/global/header.php')?>

        <main data-barba="container" data-barba-namespace="about-section">
            <div class="fade-in"><?php require('partials/about/about-header.php')?></div>
            <div class="fade-in"><?php require('partials/about/about-bio.php')?></div>
            <div class="fade-in"><?php require('partials/about/about-skill.php')?></div>
            <div class="fade-in"><?php require('partials/about/about-interest.php')?></div>
            <div class="fade-in"><?php require('partials/about/about-sns.php')?></div>
        </main>

        <?php require('partials/global/footer.php')?>

    </body>
</html>