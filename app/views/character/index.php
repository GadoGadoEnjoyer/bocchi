<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bocchi the Rock!</title>
        <link rel="stylesheet" href="../../../bocchi/public/css/character.css">
        <script src="../../../bocchi/public/js/character.js" defer></script>
    </head>

    <body>
    <header class="header">
        <nav class="navigation">
            <a href="<?php echo(BASEURL . "/about")?>">About</a>
            <a href="<?php echo(BASEURL . "/music")?>">Music</a>
            <img src="<?php echo(BASEURL . "/assets/image/logo-image/Bocchi_the_Rock!_logo.svg.png")?>" alt="" class="headerimg">
            <a href="<?php echo(BASEURL . "/character")?>">Gallery</a>
            <a href="<?php echo(BASEURL . "/community")?>">Community</a>
        </nav>
    </header>
        <main>
            <div class="chardesc">
                <h1>Gallery</h1>
                <br>
                <br>
                <div class="charnav">
                    <a>Characters</a>
                    <a>Band Photos</a>
                    <a>Arts</a>
                </div>
                <name id="name">Ijichi Nijika</name>
                <sub id="va">VA:Suzushiro, Sayumi</sub>
                <div class="desc">
                    <b class="btext">Birthday</b>
                    <p id="birthday">May 29</p>
                    <b class="btext">Gender</b>
                    <p id="gender">Female</p>
                    <b class="btext">Height</b>
                    <p id="height">154cm</p>
                    <b class="btext">Weight</b>
                    <p id="weight">48kg</p>
                    <b class="btext">Hair Color</b>
                    <p id="hairColor">Blonde</p>
                    <b class="btext">Eye Color</b>
                    <p id="eyeColor">Vermillion</p>
                </div>
                <img id="button1" src="<?php echo(BASEURL . "/assets/image/characters-small-photos/bocchi-1.png")?>" alt="">
                <img id="button2" src="<?php echo(BASEURL . "/assets/image/characters-small-photos/nijika-1.png")?>" alt="">
                <img id="button3" src="<?php echo(BASEURL . "/assets/image/characters-small-photos/ryo-1.png")?>" alt="">
                <img id="button4" src="<?php echo(BASEURL . "/assets/image/characters-small-photos/kita-1.png")?>" alt="">
            </div>
            <div class="charmain">
                <div class="line" id="line"></div>
                <img id="images.character" src="<?php echo(BASEURL . "/assets/image/character-image/nijika.png")?>" alt="" class="charimg">
            </div>
        </main>
    </body>

</html>