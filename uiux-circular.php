<?php require("init.php")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UI UX: Circular Project by Shay Park</title>
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

    </body>
</html>