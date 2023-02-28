<?php require_once("init.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UI UX Project Page</title>
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
            <div class="fade-in"><?php require('partials/uiux/uiux-header.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/uiux-title.php')?></div>
            <div class="fade-in"><?php require('partials/uiux/uiux-cards.php')?></div>
            </main>

            <?php require('partials/global/footer.php')?>

    </div>

    </body>
</html>