<!DOCTYPE html>
<html lang="en">
<head>
    <title>home</title>
    <?php
        include "components/heading.php";
                echo callheading ();
            ?> 
    <link href="assets/index.css" rel="stylesheet"/>
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
        <div class="latestpost">
                <?php include "components/latestpost.php"; echo calllatestpost();?>
            </div>
        <div class="current">
        <p><b>currently reading:</b> <a href="https://www.goodreads.com/book/show/240125928-the-starving-saints?ref=nav_sb_ss_4_15">the starving saints</a></p>
        <p><b>currently watching:</b> <a href="https://myanimelist.net/anime/54492/Kusuriya_no_Hitorigoto?q=apothecary&cat=anime">the apothecary diaries [S1]</a></p>
        <p><b>currently playing:</b> <a href="https://www.nintendo.com/us/store/products/tomodachi-life-living-the-dream-switch/">tomodachi life: living the dream</p>
    </div>
    <div class="gallery">
        <img src="assets/ohara lab nurse.webp" width="100%">
        <img src="assets/lanie repaint of character.webp" width="100%">
        <img src="assets/m della pog.webp" width="100%">
    </div>
    <div class="kofi">
        <script type='text/javascript' src='https://storage.ko-fi.com/cdn/widget/Widget_2.js'></script><script type='text/javascript'>kofiwidget2.init('Support Me on Ko-fi', '#ff7aa6', 'A85246XK');kofiwidget2.draw();</script>
    </div>
        <div class="snippet">
        <h1> ♡ della ♡ </h1>
        <p> a sheltered android trying her best to love herself and others while sustaining a healthy reality + dream balance </p>
        <p> but mostly a sheltered android drawing ill women and bunnies </p>
        <p> I'm trying to be many things, but among them, I'm an artist and storyteller </p>
    </div>
    </div>
</body>
<script src="mobilesidebar.js"></script>
</html>