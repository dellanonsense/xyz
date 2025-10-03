<!DOCTYPE html>
<html lang="en">
<head>
    <title>stories</title>
    <?php
        include "components/heading.php";
                echo callheading ();
            ?>
    <link href="assets/stories.css" rel="stylesheet"/>
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
        <p> as someone who wants to try everything, I have a lot of stories/plots/ideas! this page will record my current brainrots and past, archived stories. </p>
        <p> some of these stories aren't as online as the others! </p>
        <p> note: my toyhouse which serves as a main hub for some stories is <b>severely out of date</b> </p>
        <h1> ♡ current stories ♡ </h1>
        <h2 class="lateliertitle"> l'atelier / dellaverse </h2>
        <p> my online facade's lore! originated for vtubing but has become for more than that. </p>
        <h2 class="sdrtitle"><a href="sdrandns.php"> sage deraven and the nightstalker </a></h2>
        <p> my 'main story' and brainchild from middle school. focuses on a fictional city (now being transitioned to a completely fictional world) and its odd, graphic and heartache-inducing happenings. </p>
        <h2 class="bellemoretitle"> bellemore </h2>
        <p> a horror story focusing on the town of Bellemore, Massachusettes and its macabre idol-based religion Rosarium. </p>
        <h2 class="butterflytitle"> the butterfly observatory </h2>
        <p> featuring inspirations from Red Barrels' Outlast series and Emilie Autumns' music, the butterfly observatory is a machine that harbors a horrid creature inside. the story focuses on its repercussions, history, and the workings of the big business owning it. </p>
        <h2 class="salvignetitle"> the salvigne chapel / pallion qu'sont </h2>
        <p> a revival of sorts to aniseed asylum. an offline story with some posted works. </p>
        <h1> ♡ archived stories ♡ </h1>
        <p> stories or ideas that have lost steam or interest altogether, but have a prescence online </p>
        <p> this exists more for people who see those works and wonder where they're from! </p>
        <h2 class="aniseedtitle"> the aniseed asylum </h2>
        <p> considered to me to be a precursor to the butterfly obseratory, the aniseed asylum told the storiers of inmates in this fictional asylum. </p>
        <h2 class="mediversetitle"> mediverse </h2>
        <p> very underdeveloped and only for aesthetics, mediverse is mainly a few eye candy characters with some lore. </p>
        <h2 class="damascustitle"> damascus </h2>
        <p> a generic crime-ridden city with angels and demons. very undeveloped, but has some artwork and characters associated with it. </p>
    </div>
</body>
<script src="mobilesidebar.js"></script>
</html>