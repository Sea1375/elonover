$(function () {
    let index = 0;
    let userEls = $('.user-wrapper');
    let length = $('.user-wrapper').length;
    let count = 0;
    
    width = window.innerWidth;
    if (width > 992) {
        count = 6
    } else if (width > 768) {
        count = 4
    } else if (width > 576) {
        count = 2
    } else {
        count = 1;
    }

    function scroll() {
        let tmp = Math.min(count, length);
        userEls.removeClass('active')
        for (var i=0; i < tmp; i++) {
            userEls[index + i].classList.add('active');
        }
    }

    $('.right-scroll').click(() => {
        if (index < length - count) {
            index++;
        }
        scroll();
    })

    $('.left-scroll').click(() => {
        if (index > 0) {
            index--;
        }
        scroll();
    })

    scroll();
})