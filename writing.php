<!DOCTYPE html>
<html lang="en">
<head>
    <title>writing</title>
    <?php
        include "components/heading.php";
                echo callheading ();
            ?>
    <link href="assets/writing.css" rel="stylesheet"/>
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
     <h2> ♡ writing ♡ </h2>
     <p> <b>note:</b> my current poetry collection's covers/branding is under my former username of <i>danderenonsense</i>. this poetry is still mine!</p>
    <div class="covergrid">
        <div id="cover">
            <img src="assets/delaneys little book of poems.webp">
            <p><a href="not_found.php">delaney's little book of poems</a></p>
        </div>
        <div id="cover">
            <img src="assets/symphony of the recovering menhera.webp">
            <p><a href="not_found.php">symphony of the recovering menhera</a></p>
        </div>
        <div id="cover">
            <img src="assets/therapeutic girls.webp">
            <p><a href="not_found.php">therapeutic girls</a></p>
        </div>
    </div>
    <div class="covergrid">
        <div id="cover">
            <img src="assets/cotton brain syndrome.webp">
            <p><a href="not_found.php">cotton brain sydrome</a></p>
        </div>
        <div id="cover">
            <img src="assets/280 character diary.webp">
            <p><a href="not_found.php">280 character diary</a></p>
        </div>
        <div id="cover">
            <img src="assets/that blue light look.webp">
            <p><a href="not_found.php">that blue light look</a></p>
        </div>
    </div>
    <div class="covergrid">
        <div id="cover">
            <img src="assets/playboy software.webp">
            <p><a href="not_found.php">playboy software</a></p>
        </div>
        <div id="cover">
            <img src="assets/predictive text poetry.webp">
            <p><a href="not_found.php">predictive text poetry</a></p>
        </div>
        <div id="cover">
            <img src="assets/the girl who lives without silence.webp">
            <p><a href="not_found.php">the girl who lives without silence</a></p>
        </div>
    </div>
    </div>
    </div>
</body>
<script src="mobilesidebar.js"></script>
</html>