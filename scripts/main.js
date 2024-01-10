// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
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

$('.services-slider').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    prevArrow: $("#prevArrow"),
    nextArrow: $("#nextArrow"),
});

$(() => {
    $('#fileUpload').on('change', function () {
        let file = $(this).val();
        if (file != "") {
            let theSplit = file.split('\\');
            let fileName = theSplit[theSplit.length - 1];
            console.log(fileName);
            $(`#file-label`).html(fileName.substring(0, 50));
        }
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
        return validateForm();
    });
});
