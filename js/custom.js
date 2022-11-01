const saveOfDate = new Date('2022-12-18 06:00');

// default example
simplyCountdown('.simply-countdown-one', {
    year: saveOfDate.getFullYear(),
    month: saveOfDate.getMonth() + 1,
    day: saveOfDate.getDate(),
    words: {
        days: 'ngày',
        hours: 'giờ',
        minutes: 'phút',
        seconds: 'giây',
        pluralLetter: ''
    },
});

function toggleMenuActive() {
    const scroll = $(window).scrollTop();

    $('.js-main-menu').find('li').each(function () {
        const itemTarget = $(this).find('a').data('target');
        const itemTop = $(itemTarget).offset().top - 80;
        const itemHeight = $(itemTarget).height() - 80;

        if (itemTarget === '#fh5co-header' || itemTarget === '#fh5co-couple') {
            console.log(scroll, itemTop, itemHeight);
        }

        if (scroll >= itemTop && scroll <= itemTop + itemHeight) {
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    });
}

function closeMobileMenus() {
    $('body').removeClass('overflow offcanvas');
    $('.js-fh5co-nav-toggle').removeClass('active');
}

$(document).ready(function () {
    toggleMenuActive();
});

$(window).scroll(function () {
    const scroll = $(window).scrollTop();

    // Fixed header.
    if (scroll >= 100) {
        $("#js-main-nav").addClass("navbar-fixed-top");
    } else {
        $("#js-main-nav").removeClass("navbar-fixed-top");
    }

    // Active menu.
    toggleMenuActive();
});

$(document).on('click', '.js-click-scroll-to', function () {
    const target = $($(this).attr('data-target'));

    if (target.closest('#fh5co-offcanvas')) {
        closeMobileMenus();
    }

    $('html,body').animate({
        scrollTop: target.offset().top
    });
});