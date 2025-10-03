<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eulocyst</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link href="assets/styles.css" rel="stylesheet"/>
    <link href="assets/sidebar.css" rel="stylesheet"/>
    <link href="assets/header.css" rel="stylesheet"/>
    <link href="assets/eulocyst.css" rel="stylesheet"/>
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
        <div id="header"></div>
        <h1> ♡ eulocyst ♡ </h1>
        <p> in short, eulocyst is a long-term project of mine- a fictional planet with fictional countries, cultures, languages, religions, etc. </p>
        <p> this fictional world holds most of my non-reality stories, primarily <a href="sdrandns.php"><b>sage deraven and the nightstalker.</b></a></p>
        <p> it's a labor of love I hope to do justice. </p>
        <p> eulocyst currently has no online organization as I develop it. </p>
        <p> it has no final objective or product; it simply exists. </p>
    </div>
</body>
<script src="mobilesidebar.js"></script>
</html>