<!DOCTYPE html>
<html lang="en">
<head>
    <title>BE ♡ OWN ♡ BREAK</title>
    <?php
        include "components/heading.php";
                echo callheading ();
            ?>
    <link href="assets/be-own-break.css" rel="stylesheet"/>
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
        <img src="assets/be own break vn title.webp" width="100%">
        <h1><a href="https://dellanonsense.itch.io/be-own-break"> BE ♡ OWN ♡ BREAK </a></h1>
        <h2> slave to love in wilted hilts, derived from bluelight to survive </h2>
        <img src="assets/be own break cover.webp" width="100%">
        <p> "in which the normal, healthy girl has a day out*." </p>
        <p> <i> *many portions of this statement are incorrect </i></p>
        <p style="text-align: center;"> a visual novel about a distorted girl through a distorted perspective in a distorted (but normalized) world. 
in development, release unknown </p>
        <p style="text-align: center;"> (BE ♡ OWN ♡ BREAK was originally scripted for a menhera gamejam but was not completed in time) </p>
    </div>
</body>
<script src="mobilesidebar.js"></script>
</html>