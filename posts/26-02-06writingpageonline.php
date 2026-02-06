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
            <h1>writing page online</h1>
            <h2>february 6th, 2026</h2>
        </div>
        <div class="blogtags">
            <h3><a href="../updatestag.php">#updates</a></h3>
        </div>
        <div class="blogtxt"><p>
            writing page is set up! the main directory, at least. as of now all the books lead to not_found.
        </p>
        </div>
    </div>
</body>
<script src="../mobilesidebar.js"></script>
</html>