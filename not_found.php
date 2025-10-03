<!DOCTYPE html>
<html lang="en">
<head>
    <title>not found</title>
    <?php
        include "components/heading.php";
                echo callheading ();
            ?>
    <link href="assets/not_found.css" rel="stylesheet"/>
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