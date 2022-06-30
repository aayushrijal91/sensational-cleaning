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

$(".service-btn").on('click', function (e) {
    e.preventDefault();

    $(".service-btn").removeClass('active');
    $(this).addClass('active');

    let id = $(this).attr('d-name');
    $(".accordion-container").removeClass('active');
    $(`#${id}`).addClass('active');

    if (id == 'service-wet-carpet-drying') {
        $('.service-note').css('display', 'block');
        $('.service-note').text('No matter the condition or cause, we offer wet carpet cleaning to bring your carpets back to their original condition. You can depend on our professional team of carpet cleaners to advise on the best service to clean your carpets most effectively.');
    } else if (id == "service-water-damage-restoration") {
        $('.service-note').css('display', 'block');
        $('.service-note').text('Water Damage Specialist provides the professional water damage services you require 24/7. We use only the safest and effective products to get your carpets looking new and smelling fresh again.');
    } else if (id == 'service-mould-remediation') {
        $('.service-note').css('display', 'block');
        $('.service-note').text('On Completion of the water extraction process we then apply our anti mould treatment to the flood affected areas to kill and prevent the growth of mould.');
    } else {
        $('.service-note').css('display', 'none');
    }
});

$(".service-btn-mobile").on('change', function (e) {
    e.preventDefault();
    let id = $(".service-btn-mobile option:selected").attr('d-name');

    $(".accordion-container").removeClass('active');
    $(`#${id}`).addClass('active');

    $(".service-btn").removeClass('active');
    $(`#${id}-btn`).addClass('active');

    if (id == 'service-wet-carpet-drying') {
        $('.service-note').css('display', 'block');
        $('.service-note').text('No matter the condition or cause, we offer wet carpet cleaning to bring your carpets back to their original condition. You can depend on our professional team of carpet cleaners to advise on the best service to clean your carpets most effectively.');
    } else if (id == "service-water-damage-restoration") {
        $('.service-note').css('display', 'block');
        $('.service-note').text('Water Damage Specialist provides the professional water damage services you require 24/7. We use only the safest and effective products to get your carpets looking new and smelling fresh again.');
    } else if (id == 'service-mould-remediation') {
        $('.service-note').css('display', 'block');
        $('.service-note').text('On Completion of the water extraction process we then apply our anti mould treatment to the flood affected areas to kill and prevent the growth of mould.');
    } else {
        $('.service-note').css('display', 'none');
    }
});

$(".accordion-head").on('click', function () {
    $(".accordion-head").removeClass("active");
    $(this).addClass('active');

    if ($('.accordion-body').is(':visible')) {
        $(".accordion-body").slideUp(300);
        $(".plusminus").html('<svg width="18" height="13" viewBox="0 0 18 13" fill="#A40003" xmlns="http://www.w3.org/2000/svg"><path d="M17.4371 3.9577C17.5909 3.79357 17.719 3.59064 17.814 3.36051C17.909 3.13039 17.9691 2.87756 17.9908 2.61647C18.0347 2.08918 17.9197 1.56024 17.6711 1.14602C17.4224 0.731795 17.0606 0.46622 16.6651 0.407715C16.2696 0.34921 15.8729 0.502568 15.5622 0.834052L9 7.83327L2.43782 0.834051C2.12714 0.502567 1.73041 0.349209 1.33492 0.407714C0.939421 0.466219 0.577557 0.731794 0.328928 1.14602C0.0802993 1.56024 -0.0347253 2.08918 0.00915708 2.61647C0.0530375 3.14376 0.252231 3.62622 0.562918 3.9577L8.06255 11.9568C8.32858 12.2408 8.65921 12.3955 9 12.3955C9.34079 12.3955 9.67142 12.2408 9.93745 11.9568L17.4371 3.9577Z" fill="#A40003" /></svg>');
    }
    if ($(this).next(".accordion-body").is(':visible')) {
        $(this).next(".accordion-body").slideUp(300);
        $(this).children(".plusminus").html('<svg width="18" height="13" viewBox="0 0 18 13" fill="#A40003" xmlns="http://www.w3.org/2000/svg"><path d="M17.4371 3.9577C17.5909 3.79357 17.719 3.59064 17.814 3.36051C17.909 3.13039 17.9691 2.87756 17.9908 2.61647C18.0347 2.08918 17.9197 1.56024 17.6711 1.14602C17.4224 0.731795 17.0606 0.46622 16.6651 0.407715C16.2696 0.34921 15.8729 0.502568 15.5622 0.834052L9 7.83327L2.43782 0.834051C2.12714 0.502567 1.73041 0.349209 1.33492 0.407714C0.939421 0.466219 0.577557 0.731794 0.328928 1.14602C0.0802993 1.56024 -0.0347253 2.08918 0.00915708 2.61647C0.0530375 3.14376 0.252231 3.62622 0.562918 3.9577L8.06255 11.9568C8.32858 12.2408 8.65921 12.3955 9 12.3955C9.34079 12.3955 9.67142 12.2408 9.93745 11.9568L17.4371 3.9577Z" fill="#A40003" /></svg>');
    } else {
        $(this).next(".accordion-body").slideDown(300);
        $(this).children(".plusminus").html('<svg width="18" height="13" viewBox="0 0 18 13" fill="#A40003" xmlns="http://www.w3.org/2000/svg"><path d="M17.4371 8.83331C17.5909 8.99745 17.719 9.20037 17.814 9.4305C17.909 9.66063 17.9691 9.91346 17.9908 10.1745C18.0347 10.7018 17.9197 11.2308 17.6711 11.645C17.4224 12.0592 17.0606 12.3248 16.6651 12.3833C16.2696 12.4418 15.8729 12.2884 15.5622 11.957L9 4.95775L2.43782 11.957C2.12714 12.2884 1.73041 12.4418 1.33492 12.3833C0.939421 12.3248 0.577557 12.0592 0.328928 11.645C0.0802993 11.2308 -0.0347253 10.7018 0.00915708 10.1745C0.0530375 9.64725 0.252231 9.1648 0.562918 8.83331L8.06255 0.834208C8.32858 0.550233 8.65921 0.395508 9 0.395508C9.34079 0.395508 9.67142 0.550233 9.93745 0.834208L17.4371 8.83331Z" fill="#A40003"/></svg>');
    }
});