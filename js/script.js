document.addEventListener('DOMContentLoaded', function() {


    const menuItems = document.querySelector('.menu-items');
    const burgerMenu = document.querySelector('.burger-menu');

    function toggleMenu() {      
        menuItems.classList.toggle('show');
    }
    burgerMenu.addEventListener('click', toggleMenu);

});

document.addEventListener('DOMContentLoaded', function() {
    window.addEventListener('scroll', function() {
        var header = document.querySelector('header');
        var burgerMenu = document.querySelector('.burger-menu');

        if (header) {
            var headerHeight = header.offsetHeight;
            var scrollPosition = window.scrollY || window.pageYOffset;

            if (scrollPosition > headerHeight) {
                header.classList.add('no-header');
            } else {
                header.classList.remove('no-header');
            }
        }
    });
});



