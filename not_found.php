<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>not found</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link href="assets/styles.css" rel="stylesheet"/>
    <link href="assets/sidebar.css" rel="stylesheet"/>
    <link href="assets/header.css" rel="stylesheet"/>
    <link href="assets/not_found.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>
<style>
</style>
<body>
    <div id="sidebutton" onclick="openNav()"><img src="assets/openbutton.png"></div>
    <div id="sidebar">
                    <?php
        include "components/sidebar.php";
                echo callsidebar();
            ?>  
    </div>
    <div id="overlay"></div>
    <div class="content">
          <div id="header">
            <?php
        include "components/header.php";
                echo callheader();
            ?>    
            </div>
        <p> this page does not exist! </p>
        <img src="assets/not found oops.webp" width="50%">
        <p> sorry 'bout that </p>
    </div>
</body>
<script src="mobilesidebar.js"></script>
</html>