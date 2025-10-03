<!DOCTYPE html>
<html lang="en">
<head>
    <title>about</title>
    <?php
        include "components/heading.php";
                echo callheading ();
            ?>
    <link href="assets/about.css" rel="stylesheet"/>
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
        <p><a href="https://adriansblinkiecollection.neocities.org/">all blinkies/stamps on this page are from here!</a></p>
    </div>
</body>
<script src="mobilesidebar.js"></script>
</html>