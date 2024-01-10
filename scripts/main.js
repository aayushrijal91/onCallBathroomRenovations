// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#about-us"], a[href="#services"], a[href="#why-us"], a[href="#get-quote"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

if ($(window).width() < 540) {
    $('#partners').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        centerMode: true,
        arrow: false,
        autoplay: true
    });
}

$("#triggerSlidingMenu").on('click', function() {
    $("#sliding-menu").slideToggle();
})

$('.services-slider').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    prevArrow: $("#prevArrow"),
    nextArrow: $("#nextArrow"),
    responsive: [
        {
            breakpoint: 1600,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});

$(() => {
    $('#fileUpload').on('change', function () {
        let file = $(this).val();
        if (file != "") {
            let theSplit = file.split('\\');
            let fileName = theSplit[theSplit.length - 1];
            $(`#file-label`).html(fileName.substring(0, 50));
        }
    });
});

function validateForm() {
    let phoneInput = $('#contactNumber').val();
    let re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

    if (!re.test(phoneInput)) {
        $('#phoneError').fadeIn();

        return false;
    } else {
        $('#phoneError').fadeOut();
    }

    return true;
}

$("#form").on('submit', function () {
    console.log('test');
    return validateForm();
});