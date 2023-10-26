document.addEventListener("DOMContentLoaded", function() {
    const mainNavLinks = document.querySelectorAll(".navigation .nav-link");
    const characterNavLinks = document.querySelectorAll(".characterNavigation .nav-link");

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
    const charInformation = document.getElementById('charInformation');
    const charImages = document.querySelector('.charimages');

    // Example character data, you can replace this with your actual character data
    const charactersData = {
        'Gotoh Hitori': {
            name: 'Gotoh Hitori',
            va: 'Aoyama, Yoshino',
            birthday: 'February 21',
            gender: 'Female',
            height: '156cm',
            weight: '50kg',
            hairColor: 'Pink',
            eyeColor: 'Aqua',
            images: {
                rectangle: 'rectangle.png',
                character: 'gotoh.png'
            },
            css: {
                
                color: '#FF00C7'
            }
        },
        'Nijika': {
            name: 'Nijika',
            va: 'Suzushiro, Sayumi',
            birthday: 'May 29',
            gender: 'Female',
            height: '154cm',
            weight: 'Weight',
            hairColor: 'Hair Color',
            eyeColor: 'Eye Color',
            images: {
                rectangle: 'rectangle.png',
                character: 'nijika.png'
            },
            css: {
                
                color: '#F3D365'
            }
        },
        'Ryo': {
            name: 'Nijika',
            va: 'Suzushiro, Sayumi',
            birthday: 'May 29',
            gender: 'Female',
            height: '154cm',
            weight: 'Weight',
            hairColor: 'Hair Color',
            eyeColor: 'Eye Color',
            images: {
                rectangle: 'rectangle.png',
                character: 'ryo.png'
            },
            css: {
                
                color: '#F3D365'
            }
        },
        'Kita': {
            name: 'Kita',
            va: 'Suzushiro, Sayumi',
            birthday: 'May 29',
            gender: 'Female',
            height: '154cm',
            weight: 'Weight',
            hairColor: 'Hair Color',
            eyeColor: 'Eye Color',
            images: {
                rectangle: 'rectangle.png',
                character: 'kita.png'
            },
            css: {
                
                color: '#F3D365'
            }
        }
        // Add data for other characters here
    };
    
    // Set character information based on selected character
    characterNameVA.innerHTML = `<h1>${charactersData[characterName].name}</h1><p>VA: ${charactersData[characterName].va}</p>`;
    charInformation.innerHTML = `<div class="left Information">
                                    <p>Birthday<br>Gender<br>Height<br>Weight<br>Hair Color<br>Eye Color</p>
                                  </div>
                                  <div class="right Information">
                                    <p>${charactersData[characterName].birthday}<br>
                                    ${charactersData[characterName].gender}<br>
                                    ${charactersData[characterName].height}<br>
                                    ${charactersData[characterName].weight}<br>
                                    ${charactersData[characterName].hairColor}<br>
                                    ${charactersData[characterName].eyeColor}</p>
                                  </div>`;

    // Set character images based on selected character
    charImages.innerHTML = `<img src="${charactersData[characterName].images.rectangle}" alt="" class="rectangle">
                            <img src="${charactersData[characterName].images.character}" alt="" class="bocchi">`;

    // Apply CSS styles based on selected character
    characterNameVA.querySelector('h1').style.color = charactersData[characterName].css.color;
    
}
