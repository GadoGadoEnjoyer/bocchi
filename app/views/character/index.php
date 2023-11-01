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
            <a href="<?php echo(BASEURL . "/gallery")?>">Gallery</a>
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
                <name>Ijichi Nijika</name>
                <sub>VA:Suzushiro, Sayumi</sub>
                <div class="desc">
                    <b>Birthday</b>
                    <p>May 29</p>
                    <b>Gender</b>
                    <p>Female</p>
                    <b>Height</b>
                    <p>154cm</p>
                    <b>Weight</b>
                    <p>48kg</p>
                    <b>Hair Color</b>
                    <p>Blonde</p>
                    <b>Eye Color</b>
                    <p>Vermillion</p>
                </div>
            </div>
            <div class="charmain">
                <div class="line"></div>
                <img src="<?php echo(BASEURL . "/assets/image/character-image/nijika.png")?>" alt="" class="charimg">
                <button id="button1">Character 1</button>
                <button id="button2">Character 2</button>
                <button id="button3">Character 3</button>
                <button id="button4">Character 4</button>
            </div>
        </main>
    </body>

</html>