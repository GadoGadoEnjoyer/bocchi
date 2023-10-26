document.addEventListener("DOMContentLoaded", function() {
    const mainNavLinks = document.querySelectorAll(".main-navigation .nav-link")    ;
    const characterNavLinks = document.querySelectorAll(".gallery-navigation .nav-link");

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
