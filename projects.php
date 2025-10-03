<!DOCTYPE html>
<html lang="en">
<head>
    <title>projects</title>
    <?php
        include "components/heading.php";
                echo callheading ();
            ?>
    <link href="assets/projects.css" rel="stylesheet"/>
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
        <h1> ♡ projects ♡ </h1>
        <img src="/assets/pinkdivider.webp" width="100%">
        <h3> primary </h3>
        <p><b><a href="/be-own-break.php">BE ♡ OWN ♡ BREAK</a></b></p>
        <p><b><a href="/eulocyst.php">eulocyst</a></b></p>
        <img src="/assets/pinkdivider.webp" width="100%">
        <h3> others </h3>
        <p><b><a href="/vtubing.php">vtubing</a></b> [inactive]</p>
    </div>
    </div>
</body>
<script src="mobilesidebar.js"></script>
</html>