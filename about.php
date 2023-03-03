<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shay Park's Portfolio</title>
        <meta name="description" content="Shay Park's About Page">
        <meta name="keywords" content="shay park portfolio, soo in park portfolio, Portfolio, design, UI, UX, UI UX, UI UX Designer, UI UX Designer, digital graphic, figma, illustrator, photoshop, vancouver, bcit, ux design, ui design, ">
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