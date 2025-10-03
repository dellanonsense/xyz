<!DOCTYPE html>
<html lang="en">
<head>
    <title>illustrations</title>
        <?php
        include "components/heading.php";
                echo callheading ();
            ?>
    <link href="assets/illustrations.css" rel="stylesheet"/>
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
        <h1> illustrations </h1>
        <h3> ♡ please do not steal, reupload, or edit my art. thank you! ♡ </h3>
        <div class="kofi"><script type='text/javascript' src='https://storage.ko-fi.com/cdn/widget/Widget_2.js'></script><script type='text/javascript'>kofiwidget2.init('Support Me on Ko-fi', '#ff7aa6', 'A85246XK');kofiwidget2.draw();</script></div>
        <div class="gallery">
            <img src="assets/possible header idk.webp">
            <img src="assets/hell is cold.webp">
            <img src="assets/her prosperity is ensured.webp">
            <img src="assets/peace della deco.webp">
            <img src="assets/butterfly observatory yt music playlist cover.webp">
            <img src="assets/not a snow white.webp">
            <img src="assets/nurse discussion.webp">
            <img src="assets/witheralita outline.webp">
        </div>
    </div>
</body>
<script src="mobilesidebar.js"></script>
</html>