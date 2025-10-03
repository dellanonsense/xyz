<!DOCTYPE html>
<html lang="en">
<head>
    <title>vtubing</title>
    <?php
        include "components/heading.php";
                echo callheading ();
            ?>
    <link href="assets/vtubing.css" rel="stylesheet"/>
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
        <h1> welcome to l'atelier! </h1>
        <h2> ♡ v-streaming ♡ </h2>
        <h2> ♡ <a href="https://dellastreamschedule.super.site/">stream schedule</a> ♡ <a href="https://www.youtube.com/@dellanonsense">youtube</a> ♡</h2>
        <img src="assets/vtuber.gif" style="width: 50%; display: grid; margin: auto; padding-bottom: 15px;">
        <img src="assets/della ref.webp" style="width: 100%; padding-bottom: 15px;">
        <h3> oshi mark: 💌 (love letter) </h3>
        <h3> fan name: nonsensicals </h3>
        <h3> contact e-mail: dellanonsense@gmail.com </h3>
        <img src="assets/vtuber logo.webp" width="100%">
        <p> hello! I'm a (currently offline) vartist! I mainly focus on illustrations and drawing, but also play some games! </p>
        <p> my streams are <b>18+</b> because of topics and language. please respect that! </p>
        <h2> ♡ hashtags ♡ </h2>
        <p> usable on tumblr, x/twitter and bluesky! </p>
        <p> fanart: #dellillust </p>
        <p> streams: #dellive </p>
        <p> memes: #memesensical </p>
        <p> clips: #nonsenseclips </p>
        <h2> ♡ currently all assets (model, overlays, alerts, etc.) are made by me! ♡ </h2>
        <h3> ♡ I also rigged my own model! (no live2d questions pls) ♡ </h3>
        <h2> ♡ lore ♡ </h2>
        <p> l’atelier was a laboratory studying cyber-organic mutations, lead by a scientist and his church-appointed assistant. she was an android named della. </p>
        <p> overtime, the cold android felt the experiments were wrong; in return, the scientist she trusted most made her a test subject. </p>
        <p> as l’atelier rotted, and everyone left, della remained in her mangled, distorted state. </p>
        <p> she was doomed to eventually go offline and be one of the other desecrated bodies, until with a burst of pink light- all of l’atelier disappeared. </p>
        <p> now there are rumors of a chapel wandering the void. some say it used to be a laboratory. android nuns walk the halls and chambers seeking art, music, stories and expression. all of them bearing a striking resemblance to the scientist’s assistant, della. </p>
        <p> the “della” you see is one such android. </p>
    </div>
</body>
<script src="mobilesidebar.js"></script>
</html>