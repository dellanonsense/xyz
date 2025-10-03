<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link href="assets/styles.css" rel="stylesheet"/>
    <link href="assets/sidebar.css" rel="stylesheet"/>
    <link href="assets/header.css" rel="stylesheet"/>
    <link href="assets/about.css" rel="stylesheet"/>
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
        <img src="assets/dj png.webp" style="width: 50%; display: grid; margin: auto;">
        <h1> ♡ welcome to the septic drain ♡ </h1>
        <p> check out this cool site too ! </p>
        <div class="nxtxmee"><a href="https://nxtxmee.neocities.org/"> nxtxmee.neocities.org </a></div>
        <div class="stamps">
            <img src="assets/wii stamp.webp">
            <img src="assets/sh stamp.webp">
            <img src="assets/portal stamp.gif">
            <img src="assets/oblivion stamp.webp">
        </div>
        <div class="blinkies">
            <img src="assets/innocenthahablinkie.gif">
            <img src="assets/lesbian pride.gif">
            <img src="assets/ilyputerblinkie.gif">
            <img src="assets/evilwomanblinkie.gif">
        </div>
        <a href="https://adriansblinkiecollection.neocities.org/">all blinkies/stamps on this page are from here!</a>
    </div>
</body>
<script src="mobilesidebar.js"></script>
</html>