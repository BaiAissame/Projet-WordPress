document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menuToggle');
    const mobileNav = document.getElementById('mobileNav');

    menuToggle.addEventListener('click', function() {
        menuToggle.classList.toggle('active');
        mobileNav.classList.toggle('active');
        document.querySelector('.esgi-header').classList.toggle('active');
    });

    const navLinks = mobileNav.querySelectorAll('a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            menuToggle.classList.remove('active');
            mobileNav.classList.remove('active');
            document.querySelector('.esgi-header').classList.remove('active');
        });
    });

    document.addEventListener('click', function(event) {
        if (!menuToggle.contains(event.target) && !mobileNav.contains(event.target)) {
            menuToggle.classList.remove('active');
            mobileNav.classList.remove('active');
            document.querySelector('.esgi-header').classList.remove('active');
        }
    });
});