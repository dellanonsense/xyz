<!DOCTYPE html>
<html lang="en">
<head>
    <title>shrines</title>
    <?php
        include "components/heading.php";
                echo callheading ();
            ?>
    <link href="assets/shrines.css" rel="stylesheet"/>
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
        <h3> ♡ <a href="emilieautumnshrine.php">emilie autumn</a> ♡ </h3>
        <h3> ♡ <a href="not_found.php">menhera</a> ♡ </h3>
        <h3> ♡ <a href="not_found.php">rina tennoji</a> ♡ </h3>
    </div>
</body>
<script src="mobilesidebar.js"></script>
</html>