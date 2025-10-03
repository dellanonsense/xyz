<!DOCTYPE html>
<html lang="en">
<head>
    <title>post - online manifesto</title>
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
            <h1> development resumed </h1>
            <h2>september 11th, 2025</h2>
        </div>
        <div class="blogtags">
            <h3><a href="../beownbreakdevlogtag.php">#be own break devlog</a></h3>
        </div>
        <img src="images/boblog1.webp" width="100%";>
        <div class="blogtxt"><p>
            hello, BE ♡ OWN ♡ BREAK is resuming development. I will hopefully (hopefully. . .) commit this time to completing this project. 
            <br>
            I will update on bluesky and maybe my ko-fi? yeah.
        </p>
        </div>
    </div>
</body>
<script src="mobilesidebar.js"></script>
</html>