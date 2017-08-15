$(document).ready(function() {
    var scroll = new SmoothScroll('a[href*="#"]');

    var typed = new Typed('.typed', {
        strings: ["Membangun", "Berinovasi Untuk", "Berkreasi Untuk"],
        // Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
        stringsElement: null,
        // typing speed
        typeSpeed: 100,
        // time before typing starts
        startDelay: 1200,
        // backspacing speed
        backSpeed: 100,
        // time before backspacing
        backDelay: 500,
        // loop
        loop: true,
        // false = infinite
        loopCount: 5,
        // show cursor
        showCursor: false,
        // character for cursor
        cursorChar: "|",
        // attribute to type (null == text)
        attr: null,
        // either html or text
        contentType: 'html',
        // call when done callback function
        callback: function() {},
        // starting callback function before each string
        preStringTyped: function() {},
        //callback for every typed string
        onStringTyped: function() {},
        // callback for reset
        resetCallback: function() {}
    });

    $('a[title]').tooltip();

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 30) {
            $(".navbar-default").css({
                'background': '#377FF4',
                'transition': '1s',
                '-webkit-box-shadow': '1px 3px 3px 3px rgba(0,0,0,0.1)',
                'box-shadow': '1px 3px 3px 3px rgba(0,0,0,0.1)',
                'font-size': '1em',
                'padding': '10px 0px 10px 0px'
            });
        } else {
            $(".navbar-default").css({
                'background': 'transparent',
                'transition': '1s',
                '-webkit-box-shadow': 'none',
                'box-shadow': 'none',
                'font-size': '1.2em',
                'padding': '0px 0px 20px 0px'
            });
        }
    });
});