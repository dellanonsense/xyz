<!DOCTYPE html>
<html lang="en">
<head>
    <title>post - not scripting, but arting</title>
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
            <h1> not scripting, but arting </h1>
            <h2>november 25th, 2025</h2>
        </div>
        <div class="blogtags">
            <h3><a href="../beownbreakdevlogtag.php">#beownbreak</a></h3>
        </div>
        <div class="blogtxt"><p>
          <img src="images/bob sketch1.webp" width="100%">
          scripting is <u>not</u> done, but I've decided to start sketching the remaining assets.
          <br>
          <s>I kinda want to stream it too but sigh.</s>
          <br>
          anyway,
          <br>
          ♡ della
        </p>
        </div>
    </div>
</body>
<script src="../mobilesidebar.js"></script>
</html>