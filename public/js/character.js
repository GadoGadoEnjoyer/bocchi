document.addEventListener("DOMContentLoaded", function() {
    const mainNavLinks = document.querySelectorAll(".main-navigation .nav-link")    ;
    const characterNavLinks = document.querySelectorAll(".character-navigation .nav-link");

    function handleNavLinkClick(links) {
        links.forEach(link => {
            link.addEventListener("click", function(event) {
                // Remove the 'active' class from all links
                links.forEach(link => {
                    link.classList.remove("active");
                });

                // Add the 'active' class to the clicked link
                this.classList.add("active");
            });
        });
    }

    handleNavLinkClick(mainNavLinks);
    handleNavLinkClick(characterNavLinks);
});
// Function to apply styles to the iframe

function changeCharacter(characterName) {
    const characterNameVA = document.getElementById('characterNameVA');
    const charInformation = document.getElementById('characterInfo');
    const charSynopsis = document.getElementById('characterDescription');
    const charImages = document.querySelector('.character-images');
    const charRectangles = document.getElementById('rectangle');
    const charVideoContainer = document.getElementById('videos');
    const charLabelCharacterPV = document.querySelector('.label-PV');
    const charSmallPhotos = document.getElementById('photos');
    const colorPaletteOne = document.getElementById('one');
    const colorPaletteTwo = document.getElementById('two');
    const colorPaletteThree = document.getElementById('three');
    const colorPalettes = document.querySelectorAll('.color');
    const smallPhoto = document.querySelectorAll('.photo');
    
    characterNameVA.style.opacity = 0;
    charSmallPhotos.style.opacity = 0;
    charInformation.style.opacity = 0;
    charVideoContainer.style.opacity = 0;
    charImages.style.opacity = 0;
    colorPaletteOne.style.opacity = 0;
    colorPaletteTwo.style.opacity = 0;
    colorPaletteThree.style.opacity = 0;
    charSynopsis.style.opacity = 0;
    charRectangles.style.opacity = 0;
    charLabelCharacterPV.style.opacity = 0;
    // Example character data, you can replace this with your actual character data
    const charactersData = {
        'Gotoh Hitori': {
            name: 'Gotoh Hitori',
            va: 'Aoyama, Yoshino',
            birthday: 'February 21',
            gender: 'Female',
            height: '156 cm',
            weight: '50kg',
            hairColor: 'Pink',
            eyeColor: 'Aqua',
            synopsis: 'Hitori Gotoh (後ご藤とう ひとり Gotō Hitori), often referred by her bandmates as Bocchi-chan (ぼっちちゃん),[2] is the titular main protagonist of the manga and anime series, Bocchi the Rock!. She is in the first year of Shuka High School and is in charge of the guitar and lyrics of the band, Kessoku Band.',
            images: {
                
                character: '../public/assets/image/character-image/gotoh.svg',
                smallPhotoOne: '../public/assets/image/characters-small-photos/bocchi-1.png',
                smallPhotoTwo: '../public/assets/image/characters-small-photos/bocchi-2.png'
            },
            video: {
                characterPV: 'https://www.youtube.com/embed/8h1Hh_wey48'
            },
            css: {
                backgroundColor: ' #FF00C7',
                color: '#FF00C7',
                paletteOne:  '#F7ABB2',
                paletteTwo:  '#EACD50',
                paletteThree: '#519DC5',
                boxShadow: '4px 4px 0px #F7ABB2'
            }
            
        },
        'Nijika': {
            name: 'Ijichi Nijika',
            va: 'Mizuno, Saku',
            birthday: 'September 18',
            gender: 'Female',
            height: '163 cm',
            weight: '48kg',
            hairColor: 'Blonde',
            eyeColor: 'Vermillion',
            synopsis: 'Nijika Ijichi (伊い地じ知ち 虹にじ夏か Ijichi Nijika) is one of the main characters in the manga and anime series, Bocchi the Rock!. She is a second-year student of Shimokitazawa High School and is the drummer in the band, Kessoku Band.',
            images: {
                
                character: '../public/assets/image/character-image/nijika.svg',
                smallPhotoOne: '../public/assets/image/characters-small-photos/nijika-1.png',
                smallPhotoTwo: '../public/assets/image/characters-small-photos/nijika-2.png'
            },
            video: {
                characterPV: 'https://www.youtube.com/embed/pX3l21wyX88'
            },
            css: {
                backgroundColor: ' #F3D365',
                color: '#F3D365',
                paletteOne:  '#F3D365',
                paletteTwo:  '#D33950',
                paletteThree: '#D75B42',
                boxShadow: '4px 4px 0px #F3D365'
            }
        },
        'Ryo': {
            name: 'Ryo Yamada',
            va: 'Suzushiro, Sayumi',
            birthday: 'May 29',
            gender: 'Female',
            height: '154 cm',
            weight: '50kg',
            hairColor: 'Blue',
            eyeColor: 'Yellow',
            synopsis: 'Ryo Yamada (山やま田だ リョウ Yamada Ryō) is one of the main characters in the manga and anime series, Bocchi the Rock!. She is in her second year at Shimokitazawa High School and is the bassist of the band, Kessoku Band. She works a part-time job at the live house STARRY with Nijika Ijichi.',
            images: {
                
                character: '../public/assets/image/character-image/ryo.svg',
                smallPhotoOne: '../public/assets/image/characters-small-photos/ryo-1.png',
                smallPhotoTwo: '../public/assets/image/characters-small-photos/ryo-2.png'
            },
            video: {
                characterPV: 'https://www.youtube.com/embed/9ueOXOwLa9k'
            },
            css: {
                backgroundColor: ' #3861A6',
                color: '#3861A6',
                paletteOne:  '#375FA6',
                paletteTwo:  '#3A3C49',
                paletteThree: '#E9DE70',
                boxShadow: '4px 4px 0px #3861A6'
            }
        },
        'Kita': {
            name: 'Ikuyo Kita',
            va: 'Ikumi, Hasegawa',
            birthday: 'April 21',
            gender: 'Female',
            height: '158 cm',
            weight: '44kg',
            hairColor: 'Red',
            eyeColor: 'Yellow',
            synopsis: 'Ikuyo Kita (喜き多た 郁いく代よ Kita Ikuyo) is one of the main characters in the manga and anime series, Bocchi the Rock!. She is in the first year of Shuka High School and is in charge of the guitar and vocals of the band, Kessoku Band. She has great admiration for Ryo Yamada, after seeing her street concert.', 
            images: {
            
                character: '../public/assets/image/character-image/kita.svg',
                smallPhotoOne: '../public/assets/image/characters-small-photos/kita-1.png',
                smallPhotoTwo: '../public/assets/image/characters-small-photos/kita-2.png'
            },
            video: {
                characterPV: 'https://www.youtube.com/embed/FU8agUakqIY'
            },
            
            css: {
                backgroundColor: ' #FF4637',
                color: '#FF4637',
                paletteOne:  '#DF4B57',
                paletteTwo:  '#D7AE96',
                paletteThree: '#E9DE70',
                boxShadow: '4px 4px 0px #FF4637'
            }
        }
        // Add data for other characters here
    };
    
    // Set character information based on selected character
    setTimeout(() => {
        // Set character information based on selected character
        characterNameVA.innerHTML = `<h2>${charactersData[characterName].name}</h2><p>Voice Actor: ${charactersData[characterName].va}</p>`;
        charInformation.innerHTML = `<div class="info-column attribute-list">
                                        <p>Birthday<br>Gender<br>Height<br>Weight<br>Hair Color<br>Eye Color</p>
                                      </div>
                                      <div class="info-column">
                                        <p>${charactersData[characterName].birthday}<br>
                                        ${charactersData[characterName].gender}<br>
                                        ${charactersData[characterName].height}<br>
                                        ${charactersData[characterName].weight}<br>
                                        ${charactersData[characterName].hairColor}<br>
                                        ${charactersData[characterName].eyeColor}</p>
                                      </div>`;
        
        // Set character images based on selected character
        charImages.innerHTML = `<img src="${charactersData[characterName].images.character}" alt="" class="character-image">`;
        charSynopsis.innerHTML = `<div class="character-description" id="characterDescription">
        <p>${charactersData[characterName].synopsis}</p>
    </div>`;
    charVideoContainer.innerHTML = `<div class="pv" id="videos">
    <iframe width="400" height="221" src="${charactersData[characterName].video.characterPV}" frameborder="0" ></iframe>
</div>`;
        charSmallPhotos.innerHTML = `<div class="photos" id="photos">
        <div class="photo">
            <img src="${charactersData[characterName].images.smallPhotoOne}" alt="" class="photo-1" id="photo-one">
        </div>
        <div class="photo">
            <img src="${charactersData[characterName].images.smallPhotoTwo}" alt="" class="photo-2" id="photo-two">
        </div>
    </div>`
        // Apply CSS styles based on selected character
        characterNameVA.querySelector('h2').style.color = charactersData[characterName].css.color;
        charRectangles.style.background  = charactersData[characterName].css.backgroundColor;
        charLabelCharacterPV.style.background = charactersData[characterName].css.backgroundColor;
        colorPaletteOne.style.background  = charactersData[characterName].css.paletteOne;
        colorPaletteTwo.style.background  = charactersData[characterName].css.paletteTwo;
        
        colorPaletteThree.style.background  = charactersData[characterName].css.paletteThree;
        
        colorPalettes.forEach((palette, index) => {
            palette.style.boxShadow = charactersData[characterName].css.boxShadow;
        });
        smallPhoto.forEach((photo, index) => {
            photo.style.boxShadow = charactersData[characterName].css.boxShadow;
        });
        // Set opacity back to 1 for a smooth fade-in transition    
        characterNameVA.style.opacity = 1;
        charInformation.style.opacity = 1;
        charImages.style.opacity = 1;
        charSynopsis.style.opacity = 1;
        charRectangles.style.opacity = 1;
        charVideoContainer.style.opacity = 1;
        colorPaletteOne.style.opacity = 1;
        colorPaletteTwo.style.opacity = 1;
        colorPaletteThree.style.opacity = 1;
        charLabelCharacterPV.style.opacity = 1;
        charSmallPhotos.style.opacity = 1;
        
    }, 350);
    
}
