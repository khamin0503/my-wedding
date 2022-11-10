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
        'BacKan': 2,
        'SaPa': 2,
        'HaGiang': 4,
        'CaoBang': 1,
        'DaNang': 1,
        'MuCangChai': 1,
        'MaiChau': 1,
        'MocChau': 1,
        'TamDao': 1,
    }
    const numberOfWeddingGallery = 28;

    $.each(galleries, function (place, numOfImage) {
        let html = ``;
        const placeEl = $('#js-gallery-' + place);

        for (let i = 2; i <= numOfImage; i++) {
            html += '<a href="images/galleries/' + place + '/' + i + '.jpg"></a>';
        }

        placeEl.append(html);

        if (numOfImage > 1) {
            placeEl.find('a:first-child').append('<div class="case-studies-summary-more"><h2>+' + (numOfImage - 1) + '</h2></div>');
        }
    });

    let g = '';

    for (let j = 7; j <= numberOfWeddingGallery; j++) {
        g += '<li><a href="images/galleries/Wedding/' + j + '.jpg"></a></li>';
    }

    $('ul#js-gallery-list-hidden').append(g);
    $('.js-gallery-list-more').html('+' + (numberOfWeddingGallery - 6));
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
    const buttonText = form.find('button').text();

    form.find('.help-block').remove();
    form.find('.has-error').removeClass('has-error');
    form.find('input').attr('readonly', true);
    form.find('button').text('Chờ một xíu...');
    form.find('button').attr('disabled', true);

    if (!name.length) {
        errorName = 'Nhập tên giúp mình với :(';
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

        form.find('input').attr('readonly', false);
        form.find('button').text(buttonText);
        form.find('button').attr('disabled', false);
    } else {
        const scriptURL = 'https://script.google.com/macros/s/AKfycbw9dOK75PcTahN2OUxcF87y4GViLR8y6Q6pJ6GNmz2V72megf9wmw79D5lSj8fvWWfEuw/exec';
        const body = new FormData();

        body.append('name', name);
        body.append('note', note);

        fetch(scriptURL, {method: 'POST', body: body})
            .then(() => form.parent().html('<p style="text-align: center; margin-top: 0;"><i style="color: #F14E95; font-size: 100px;" class="icon-circle-check"></i></p>'))
            .catch(error => {
                form.find('input').attr('readonly', false);
                form.find('button').text(buttonText);
                form.find('button').attr('disabled', false);

                form.find('input#name').parent().addClass('has-error');
                form.find('input#name').parent().append('<span class="help-block">' + error + '</span>');
            });
    }

    return false;
});

