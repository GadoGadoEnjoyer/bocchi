document.addEventListener("DOMContentLoaded", function() {
    const mainNavLinks = document.querySelectorAll(".main-navigation .nav-link");
    const characterNavLinks = document.querySelectorAll(".gallery-navigation .nav-link");
    const galleryLeft = document.querySelector('.gallery-left');
    const galleryRight = document.querySelector('.gallery-right');

    // Sample image data (URLs)
    const imageUrls = [
    '../assets/image/gallery-images/first.png',
    '../assets/image/gallery-images/second.png',
    '../assets/image/gallery-images/third.png',
    '../assets/image/gallery-images/fourth.png',
    '../assets/image/gallery-images/fifth.png',
    '../assets/image/gallery-images/sixth.png',
    '../assets/image/gallery-images/seventh.png',
    '../assets/image/gallery-images/eight.png'
        
    ];

    // Dynamically generate images in the left gallery
    imageUrls.forEach((imageUrl, index) => {
        const img = document.createElement('img');
        img.src = imageUrl;
        img.alt = `Image ${index + 1}`;
        img.addEventListener('click', () => displayFullResolutionImage(imageUrl));
        galleryLeft.appendChild(img);
    });

    function displayFullResolutionImage(imageUrl) {
        // Hide existing high-resolution image
        galleryRight.innerHTML = '';

        // Display the clicked image in high-resolution on the right
        const img = document.createElement('img');
        img.src = imageUrl;
        img.alt = 'Full Resolution Image';
        galleryRight.appendChild(img);

        // Show the right gallery
        galleryRight.style.display = 'flex';

        // Handle click outside of the high-resolution image to close it
        galleryRight.addEventListener('click', () => {
            galleryRight.style.display = 'none';
        });
    }

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