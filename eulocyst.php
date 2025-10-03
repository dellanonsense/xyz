<!DOCTYPE html>
<html lang="en">
<head>
    <title>eulocyst</title>
    <?php
        include "components/heading.php";
                echo callheading ();
            ?>
    <link href="assets/eulocyst.css" rel="stylesheet"/>
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