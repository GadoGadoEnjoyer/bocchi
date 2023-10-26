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
        <header class="site-header">
            <nav class="main-navigation" id="mainNav">
                <a href="#" class="nav-link">About</a>
                <a href="#" class="nav-link">Music</a>
                <a href="../../../bocchi/public/html/index.html">
                    <img src="../../../bocchi/public/assets/image/logo-image/Bocchi_the_Rock!_logo.svg.png  " alt="Bocchi the Rock! Logo" class="header-logo">
                </a>
                <a href="#" class="nav-link active">Gallery</a>
                <a href="#" class="nav-link">Community</a>
            </nav>
        </header>

        <section class="character-section">
            <div class="character-info">
                <h1 class="section-title">Character Synopsis</h1>
                <nav class="character-navigation" id="characterNav">
                    <a href="./character.html" class="nav-link active">Characters</a>
                    <a href="./galleryCobaCoba.html" class="nav-link">Band Photos</a>
                    <a href="#" class="nav-link">Arts</a>
                </nav>

                <div class="character-details">
                    <div class="character-name-va" id="characterNameVA">
                        <h2>Gotoh Hitori</h2>
                        <p>Voice Actor: Aoyama, Yoshino</p>
                    </div>

                    <div class="character-info-list" id="characterInfo">
                        <div class="info-column attribute-list">
                            <p>Birthday<br>
                                Gender<br>
                                Height<br>
                                Weight<br>
                                Hair Color<br>
                                Eye Color</p>
                        </div>
                        <div class="info-column">
                            <p>February 21<br>
                                Female<br>
                                156cm<br>
                                50kg<br>
                                Pink<br>
                                Aqua</p>
                        </div>
                    </div>
                </div>

                <div class="character-thumbnails">
                    <a href="#" onclick="changeCharacter('Gotoh Hitori')"><img src="../../../bocchi/public/assets/image/character-image/gotoh.png" alt="Gotoh Hitori" class="thumbnail"></a>
                    <a href="#" onclick="changeCharacter('Nijika')"><img src="../../../bocchi/public/assets/image/character-image/nijika.png" alt="Nijika" class="thumbnail"></a>
                    <a href="#" onclick="changeCharacter('Ryo')"><img src="../../../bocchi/public/assets/image/character-image/ryo.png" alt="Ryo" class="thumbnail"></a>
                    <a href="#" onclick="changeCharacter('Kita')"><img src="../../../bocchi/public/assets/image/character-image/kita.png" alt="Kita" class="thumbnail"></a>
                </div>
            </div>
            
            <div class="character-short">
                <div class="rectangle" id="rectangle">
                
                </div>
                <div class="video-photos-palette-container">
                    <div class="character-pv">
                        <div class="label-character-pv">
                            <h1 class="label-PV">Character PV</h1>
                        </div>
                        <div class="pv" id="videos">
                            <iframe width="400" height="221" src="https://www.youtube.com/embed/8h1Hh_wey48" frameborder="0" id="video"></iframe>
                        </div>
                    </div>
                    <div class="photos-and-colors">
                        <div class="photos" id="photos">
                            <div class="photo-1">
                                <img src="../../../bocchi/public/assets/image/characters-small-photos/bocchi-1.png" alt="" class="photo" id="photo-one">
                            </div>
                            <div class="photo-2">
                                <img src="../../../bocchi/public/assets/image/characters-small-photos/bocchi-2.png" alt="" class="photo" id="photo-two">
                            </div>
                        </div>
                        <div class="color-palettes">
                            <div class="color" id="one"></div>
                            <div class="color" id='two'></div>
                            <div class="color" id="three"></div>
                        </div>
                    </div>
                </div>
                
                <div class="character-images">
                    
                    <img src="../../../bocchi/public/assets/image/character-image/gotoh.svg" alt="Gotoh Hitori Image" class="character-image">
                </div>
                
                <div class="character-description" id="characterDescription">
                    <p>Hitori Gotoh (後ご藤とう ひとり Gotō Hitori), often referred by her bandmates as Bocchi-chan (ぼっちちゃん),[2] is the titular main protagonist of the manga and anime series, Bocchi the Rock!. She is in the first year of Shuka High School and is in charge of the guitar and lyrics of the band, Kessoku Band.</p>
                </div>
            </div>
        </section>
    </body>

</html>