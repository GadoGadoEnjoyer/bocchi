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
    buttons.forEach((characterName, index) => {
        const button = document.getElementById(`button${index + 1}`);
        button.addEventListener('click', () => updateCharacterInfo(characterName));
    });

    const characterImageElement = document.getElementById('images.character');
    const btextElements = document.querySelectorAll('.btext');
    const lineElement = document.getElementById('line');

    function updateCharacterInfo(characterName) {
        const character = charactersData[characterName];
        const elements = {
            name: 'name',
            va: 'va',
            birthday: 'birthday',
            gender: 'gender',
            height: 'height',
            weight: 'weight',
            hairColor: 'hairColor',
            eyeColor: 'eyeColor',
        };

        // Fade out all elements
        for (const key in elements) {
            document.getElementById(elements[key]).classList.add('fade-out');
        }

        // Fade out all btext elements
        btextElements.forEach(element => {
            element.classList.add('fade-out');
        });

        // Add a class to prevent the image from fading in immediately
        characterImageElement.classList.add('no-fade-in');

        // Use a setTimeout to change the image source after a delay
        setTimeout(() => {
            characterImageElement.classList.remove('no-fade-in');
            characterImageElement.src = character.images.character;
        }, 500);

        // Change the line color with a transition
        lineElement.style.transition = 'background-color 0.5s';
        lineElement.style.backgroundColor = character.css.backgroundColor;

        // Use a setTimeout to update the content and remove the fade-out class
        setTimeout(() => {
            for (const key in elements) {
                document.getElementById(elements[key]).textContent = character[key];
            }

            // Remove fade-out class from all elements
            for (const key in elements) {
                document.getElementById(elements[key]).classList.remove('fade-out');
            }

            // Remove fade-out class from all btext elements
            btextElements.forEach(element => {
                element.classList.remove('fade-out');
            });
        }, 500);
    }
});
