<!DOCTYPE html>
<html lang="en">
<head>
    <title>post - blog online</title>
    <?php include "../components/heading.php"; echo callheading ();?>
    <link href="../assets/blog.css" rel="stylesheet"/>
</head>
<style>
</style>
<body>
    <div id="sidebutton" onclick="openNav()"><img src="../assets/openbutton.png"></div>
    <div id="sidebar">
        <?php include "../components/sidebar.php"; echo callsidebar();?>  
    </div>
    <div id="overlay"></div>
        <div class="content">
            <div id="header">
                <?php include "../components/header.php"; echo callheader();?>
            </div>
        <div class="blogtitle">
            <h1> blog online </h1>
            <h2>october 3rd, 2025</h2>
        </div>
        <div class="blogtags">
            <h3><a href="../updatestag.php">#updates</a></h3>
        </div>
        <div class="blogtxt"><p>
        blog is painstakingly online. . .I've gone fuck frameworks or javascript, it's all hardcoded girls!!
        <br>
        right now the plan is art logs and devlog posts duplicated from ko-fi and itch.io.
        <br>
        there are some posts lost (an artfight '25 announcement and a stream-longing diary) but I don't care, sorry.
        <br>
        <br>
        it's currently almost 3 am.
        <br>
        ♡ della
        </p>
        </div>
    </div>
</body>
<script src="../mobilesidebar.js"></script>
</html>