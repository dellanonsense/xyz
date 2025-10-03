<!DOCTYPE html>
<html lang="en">
<head>
    <title>tag - diary</title>
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
            <?php include "components/blognav.php"; echo callblognav();?>
            <h1> posts tagged #diary </h1>
            <a href="posts/25-07-17onlinemanifesto.php"> 25-07-17 - online manifesto </a>
        </div>
    </div>
</body>
<script src="mobilesidebar.js"></script>
</html>