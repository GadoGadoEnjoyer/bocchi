<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community</title> 
    <link rel="stylesheet" href="<?php echo(BASEURL . "/css/comm.css")?>">       
    </head>
    <body>
    <header class="header">
        <nav class="navigation">
            <a href="<?php echo(BASEURL . "/about")?>">About</a>
            <a href="<?php echo(BASEURL . "/music")?>">Music</a>
            <img src="<?php echo(BASEURL . "/assets/image/logo-image/Bocchi_the_Rock!_logo.svg.png")?>" alt="" class="headerimg">
            <a href="<?php echo(BASEURL . "/gallery")?>">Gallery</a>
            <a href="<?php echo(BASEURL . "/community")?>">Community</a>
        </nav>
    </header>
    <br>
    <main>
        <?php 
        foreach($data as $post){
            echo('<div class="post-container">');
            echo('<h1>' . $post['title'] . '</h1>');
            echo '<img src="'. BASEURL.'/assets/' . $post['photo'] . '" alt="' . $post['title'] . '">';
            echo('</div>');
        } 
        ?>
    </main>
    </body>    
</html>

