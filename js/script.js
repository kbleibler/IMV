document.addEventListener('DOMContentLoaded', function () {
    const menuItems = document.querySelector('.menu-items');
    const burgerMenu = document.querySelector('.burger-menu');
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');

    function toggleMenu() {
        menuItems.classList.toggle('show');
    }

    burgerMenu.addEventListener('click', toggleMenu);

    document.querySelectorAll('.post-list a').forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            var targetPostId = link.getAttribute('href');
            var targetPost = document.querySelector(targetPostId);

            if (targetPost) {
                var offset = targetPost.offsetTop;

                window.scrollTo({
                    top: offset,
                    behavior: 'smooth'
                });
            } else {
                console.error('Target post not found!');
            }
        });
    });

    window.addEventListener('scroll', function () {
        var header = document.querySelector('header');
        var scrollPosition = window.scrollY || window.pageYOffset;

        if (header) {
            var headerHeight = header.offsetHeight;

            if (scrollPosition > headerHeight) {
                header.classList.add('no-header');
                scrollToTopBtn.style.display = 'block';
            } else {
                header.classList.remove('no-header');
                scrollToTopBtn.style.display = 'none';
            }
        }
    });

    // Scroll to the top when the button is clicked
    scrollToTopBtn.addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
