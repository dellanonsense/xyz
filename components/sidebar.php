<?php
    function callsidebar() {
        return '
        <div id="closebtn" style="display: none;" onclick="closeNav()"><p style="color: #ff82ac; text-decoration: underline;"> close </p></div>
        <img src="../assets/vtuber logo.webp" width="100%">
        <img src="../assets/button.webp" style="width: 100%px; display: block; margin: auto;">
        <h1> main nav </h1>
        <div class="nav">
            <p> ♡ <a href="../index.php"> home </a></p>
            <p> ♡ <a href="../about.php"> about </a></p>
            <p> ♡ <a href="../commtos.php"> commissions </a></p>
            <p> ♡ <a href="../links.php"> links </a></p>
        </div>
        <h1> creations </h1>
        <div class="nav">
            <p> ♡ <a href="../tories.php"> stories </a>
            <p> ♡ <a href="../projects.php"> projects </a></p>
            <p> ♡ <a href="../illustrations.php"> illustrations </a></p>
            <p> ♡ <a href="../not_found.php"> writing </a></p>
        </div>
            <h1> diary & fun </h1>
            <div class="nav">
                <p> ♡ <a href="https://bsky.app/profile/dellanonsense.xyz"> microblog </a></p>
                <p> ♡ <a href="../blog.php"> blog </a></p>
                <p> ♡ <a href="../shrines.php"> shrines </a></p>
            </div>
            <img src="../assets/sittin.webp" width="100%">
    ';
    }
?>