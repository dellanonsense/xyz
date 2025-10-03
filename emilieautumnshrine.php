<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emilie autumn shrine</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link href="assets/styles.css" rel="stylesheet"/>
    <link href="assets/sidebar.css" rel="stylesheet"/>
    <link href="assets/header.css" rel="stylesheet"/>
    <link href="assets/eashrine.css" rel="stylesheet"/>
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
         <h1> emilie autumn </h1>
        <p><b>emilie autumn</b> is an alternative gothic artist most prevelant in her music discography and primary novel <i>The Asylum For Wayward Victorian Girls</i>.</p>
        <p> though ea hasn't been active since 2022-3, I adore her art and message. she pushes past the hurdles that come with being a woman in both modern and older society, mental illness, and the perceptions that come alongside "strange" artistic decisions. </p>
        <p> emilie autumn has encouraged me to create my own work and not feel bad or worth less for being "off". I will sing her praises (and the entire lyrical content of "miss lucy had some leeches") as long as I'm online. </p>
        <h2> artwork I've made featuring emilie autumn & the asylum </h2>
        <div class="gallery">
            <img src="assets/emily with a y.webp">
            <img src="assets/wayward girls scavenger txt.webp">
        </div>
    </div>
</body>
<script src="mobilesidebar.js"></script>
</html>