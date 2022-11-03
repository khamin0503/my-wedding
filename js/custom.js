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
        const itemTop = $(itemTarget).offset().top - 300;

        if (scroll >= itemTop) {
            $('.js-main-menu').find('li').removeClass('active');
            $(this).addClass('active');
        }
    });
}

function closeMobileMenus() {
    $('body').removeClass('overflow offcanvas');
    $('.js-fh5co-nav-toggle').removeClass('active');
}

function appendImageToGalleries() {
    const galleries = {
        'BacKan': 11,
        'BaVi': 0,
        'HaGiang': 29,
        'CaoBang': 0,
        'DaNang': 0,
        'LangSon': 0,
        'MaiChau': 0,
        'MocChau': 0,
        'TamDao': 0,
    }

    $.each(galleries, function (place, numOfImage) {
        let html = ``;

        for (let i = 2; i <= numOfImage; i++) {
            html += '<a href="images/galleries/' + place + '/' + i + '.jpg"></a>';
        }

        $('#js-gallery-' + place).append(html);
    });
}

function initGallery() {
    appendImageToGalleries();

    $('a.js-global-gallery').simpleLightbox({});

    $('.js-gallery ul > li > a').simpleLightbox({});

    $('.js-gallery-2 ul > li').each(function () {
        $(this).find('a').simpleLightbox({});
    });
}

$(document).ready(function () {
    toggleMenuActive();

    initGallery();
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

// Submit form
$(document).on('submit', 'form.js-form-attend', function (e) {
    e.preventDefault();

    const form = $(this);
    const data = form.serializeArray();
    const name = data[0].value.trim();
    const note = data[1].value.trim();
    let errorName = '';
    let errorNote = '';
    const maxLength = 255;

    form.find('.help-block').remove();
    form.find('.has-error').removeClass('has-error');

    if (!name.length) {
        errorName = 'Nhập tên giúp mình với ;(';
    } else if (name.length > maxLength) {
        errorName = 'Tên sao dài thế nhỉ? :( (' + maxLength + ')';
    }

    if (note.length > maxLength) {
        errorNote = 'Ghi chú sao dài thế nhỉ? :( (' + maxLength + ')'
    }

    if (errorName.length || errorNote.length) {
        if (errorName.length) {
            form.find('input#name').parent().addClass('has-error');
            form.find('input#name').parent().append('<span class="help-block">' + errorName + '</span>');
        }

        if (errorNote.length) {
            form.find('input#note').parent().addClass('has-error');
            form.find('input#note').parent().append('<span class="help-block">' + errorNote + '</span>');
        }
    } else {
        const scriptURL = 'https://script.google.com/macros/s/AKfycbw9dOK75PcTahN2OUxcF87y4GViLR8y6Q6pJ6GNmz2V72megf9wmw79D5lSj8fvWWfEuw/exec';
        const body = new FormData();

        body.append('name', name);
        body.append('note', note);

        fetch(scriptURL, {method: 'POST', body: body})
            .then(response => form.parent().html('<p style="text-align: center; margin-top: 0;"><i style="color: #F14E95; font-size: 100px;" class="icon-circle-check"></i></p>'))
            .catch(error => form.parent().html('<p style="text-align: center; margin-top: 0;"><i style="color: red; font-size: 30px;" class="icon-time-slot"></i> ' + error + '</p>'));
    }

    return false;
});

