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

function changeCharacter(characterName) {
    const characterNameVA = document.getElementById('characterNameVA');
    const charInformation = document.getElementById('characterInfo');
    const charSynopsis = document.getElementById('characterDescription');
    const charImages = document.querySelector('.character-images');
    
    characterNameVA.style.opacity = 0;
    charInformation.style.opacity = 0;
    charImages.style.opacity = 0;
    charSynopsis.style.opacity = 0;
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
                rectangle: '../assets/image/rectangle-image/rectangle.png',
                character: '../assets/image/character-image/gotoh.png'
            },
            css: {
                
                color: '#FF00C7'
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
                rectangle: '../assets/image/rectangle-image/nijikarectangle.png',
                character: '../assets/image/character-image/nijika.png'
            },
            css: {
                
                color: '#F3D365'
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
                rectangle: '../assets/image/rectangle-image/ryorectangle.png',
                character: '../assets/image/character-image/ryo.png'
            },
            css: {
                
                color: '#3861A6'
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
                rectangle: '../assets/image/rectangle-image/kitarectangle.png',
                character: '../assets/image/character-image/kita.png'
            },
            css: {
                
                color: '#FF4637'
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
        charImages.innerHTML = `<img src="${charactersData[characterName].images.rectangle}" alt="" class="rectangle-image">
                                <img src="${charactersData[characterName].images.character}" alt="" class="character-image">`;
        charSynopsis.innerHTML = `<div class="character-description" id="characterDescription">
        <p>${charactersData[characterName].synopsis}</p>
    </div>`;
        // Apply CSS styles based on selected character
        characterNameVA.querySelector('h2').style.color = charactersData[characterName].css.color;

        // Set opacity back to 1 for a smooth fade-in transition
        characterNameVA.style.opacity = 1;
        charInformation.style.opacity = 1;
        charImages.style.opacity = 1;
        charSynopsis.style.opacity = 1;
    }, 350);
    
}
