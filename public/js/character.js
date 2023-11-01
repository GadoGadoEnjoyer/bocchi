document.addEventListener("DOMContentLoaded", function() {

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
                
                character: '../public/assets/image/character-image/gotoh.png',
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
                
                character: '../public/assets/image/character-image/nijika.png',
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
                
                character: '../public/assets/image/character-image/ryo.png',
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
            
                character: '../public/assets/image/character-image/kita.png',
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

    const buttons = ['Gotoh Hitori', 'Nijika', 'Ryo', 'Kita'];
    const elements = {
        name: 'name',
        va: 'va',
        birthday: 'birthday',
        gender: 'gender',
        height: 'height',
        weight: 'weight',
        hairColor: 'hairColor',
        eyeColor: 'eyeColor',
        characterImage: 'images.character',
        line: 'line'
    };

    buttons.forEach((characterName, index) => {
        const button = document.getElementById(`button${index + 1}`);
        button.addEventListener('click', () => updateCharacterInfo(characterName));
    });

    function updateCharacterInfo(characterName) {
        const character = charactersData[characterName];

        // Add the fade-out class to elements to make them fade out
        for (const key in elements) {
            if (key !== 'line' && key !== 'btext') {
                document.getElementById(elements[key]).classList.add('fade-out');
            }
        }

        const newCharacterImage = new Image();
        newCharacterImage.src = character.images.character;
        newCharacterImage.onload = () => {
            const characterImageElement = document.getElementById(elements.characterImage);
            characterImageElement.style.opacity = 0; // Set opacity to 0 initially
            characterImageElement.src = newCharacterImage.src;

            setTimeout(() => {
                characterImageElement.style.opacity = 1; // Set opacity to 1 after loading
                for (const key in elements) {
                    if (key !== 'line' && key !== 'btext') {
                        document.getElementById(elements[key]).textContent = character[key];
                        document.getElementById(elements.line).style.backgroundColor = character.css.backgroundColor;
                        document.getElementById(elements[key]).classList.remove('fade-out');
                    }
                }
            }, 500); // You can adjust the delay as needed for smoother transitions
        }
        
        // Change color of all elements with class 'btext'
        const btextElements = document.getElementsByClassName(elements.btext);
        for (const btext of btextElements) {
            btext.style.color = character.css.color;
        }
    }
});