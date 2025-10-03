<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link href="assets/styles.css" rel="stylesheet"/>
    <link href="assets/sidebar.css" rel="stylesheet"/>
    <link href="assets/header.css" rel="stylesheet"/>
    <link href="assets/links.css" rel="stylesheet"/>
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
        <h1> @dellanonsense </h1>
        <div class="links">
            <p><a href="https://bsky.app/profile/dellanonsense.xyz"> bluesky </a></p>
            <p><a href="https://ko-fi.com/dellanonsense"> ko-fi </a></p>
            <p><a href="https://toyhou.se/dellanonsense"> toyhou.se </a></p>
            <p><a href="https://neocities.org/site/dellanonsense"> neocities </a></p>
            <p><a href="https://www.tiktok.com/@dellanonsense"> tiktok </a>[inactive]</p>
            <p><a href="https://www.pinterest.com/dellanonsense/"> pinterest </a>[inactive]</p>
            <p><a href="https://x.com/dellanonsense"> x/twitter </a>[inactive]</p>
            <p><a href="https://dellanonsense.tumblr.com/"> tumblr </a>[inactive]</p>
            </div>
        <h1> @delladrawsense </h1>
        <div class="links">
            <p><a href="https://delladrawsense.tumblr.com/"> tumblr </a>[archive only]</p>
            <p><a href="https://x.com/delladrawsense"> x/twitter </a>[inactive]</p>
        </div>
        <h1> gamedev </h1>
        <div class="links">
            <p><a href="https://dellanonsense.itch.io/"> itch.io </a></p>
        </div>
        <h1> v-streaming (hiatus) </h1>
        <div class="links">
            <p><a href="https://dellastreamschedule.super.site/"> stream schedule </a></p>
            <p><a href="https://www.youtube.com/@dellanonsense"> youtube </a>[inactive]</p>
        </div>
        <h1> della's scribbles (hiatus) </h1>
        <div class="links">
            <p><a href="https://www.instagram.com/dellascribbles/"> instagram </a>[inactive]</p>
            <p><a href="https://delaneyscribbles.wordpress.com/"> wordpress </a>[inactive]</p>
        </div>
    </div>
    </div>
</body>
<script src="mobilesidebar.js"></script>
</html>