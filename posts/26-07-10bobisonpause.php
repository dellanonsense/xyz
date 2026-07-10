<!DOCTYPE html>
<html lang="en">
<head>
    <title>post - writing page online</title>
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
            <h1>b♡o♡b is paused</h1>
            <h2>july 10th, 2026</h2>
        </div>
        <div class="blogtags">
            <h3><a href="../beownbreakdevlogtag.php">#beownbreak</a></h3>
        </div>
        <div class="blogtxt">
            <p>hullo, surprising isn't it?</p>
            <p>b♡o♡b is on hiatus. I have. . .some mental tangles to undo regarding my art and projects before I can continue.</p>
            <p>so um, thank you</p>
            <p>♡ della</p>
        </div>
    </div>
</body>
<script src="../mobilesidebar.js"></script>
</html>