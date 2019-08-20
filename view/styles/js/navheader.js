window.addEventListener('scroll', function (e) {
    var nav = document.getElementById('navbar-header');
    var box_logo = document.querySelector('.logo_container');
        if (document.documentElement.scrollTop || document.body.scrollTop > window.innerHeight) {
            nav.classList.add('white-nav');
            box_logo.classList.add('newSizeDesktop');
            box_logo.classList.add('newSize');

        } else {
            nav.classList.remove('white-nav');
            box_logo.classList.remove('newSizeDesktop');
            box_logo.classList.remove('newSize');

        }
});