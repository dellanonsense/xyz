<!DOCTYPE html>
<html lang="en">
<head>
    <title>blog</title>
    <?php include "components/heading.php"; echo callheading ();?> 
    <link href="assets/blog.css" rel="stylesheet"/>
</head>
<style>
</style>
<body>
    <div id="sidebutton" onclick="openNav()"><img src="assets/openbutton.png"></div>
    <div id="sidebar">
        <?php include "components/sidebar.php"; echo callsidebar();?>  
    </div>
    <div id="overlay"></div>
        <div class="content">
            <div id="header">
                <?php include "components/header.php"; echo callheader();?>
            </div>
            <div class="latestpost">
                <?php include "components/latestpost.php"; echo calllatestpost();?>
            </div>
            <?php include "components/blognav.php"; echo callblognav();?>
            <h1> archive </h1>
            <p><a href="posts/25-10-03blogonline.php">25-10-03 - blog online</a> #updates </p>
            <p><a href="posts/25-09-11developmentresumed.php">25-09-11 - development resumed</a> #beownbreakdevlog </p>
            <p><a href="posts/25-07-17onlinemanifesto.php"> 25-07-17 - online manifesto</a> #diary </p>
        </div>
    </div>
</body>
<script src="mobilesidebar.js"></script>
</html>