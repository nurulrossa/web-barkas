// navbar scroll
$(function(){
    var navbar = $('#nav');

    $(window).scroll(function(){
        if($(window).scrollTop() <= 50){
            // console.log('berhasil');
            navbar.removeClass('navbar-scroll');
        }else{
            navbar.addClass('navbar-scroll');
        }
    });
});

// sidebar
$('.nav-burger').on('click', function(){
    $(this).toggleClass('change-burger');
    $('.bg-sidebar').toggleClass('change');
    $('.sidebar').toggleClass('change');
});

// dropdown
// versi hover
// $('.dropdown').on('mouseover', function(){
//     $('.bg-dropdown').toggleClass('show');
//     $('.dropdown-content').toggleClass('show');
// });

// versi klik
// $('.dropdown').on('click', function(){
//     $('.bg-dropdown').toggleClass('show');
//     $('.dropdown-content').toggleClass('show');
// });

// function dropdown(param) {  
//     if($('#bg-dropdown-'+param-1).hasClass('show')){
//         console.log('terdeteksi punya class show');
//     }

//     $('#bg-dropdown-'+param).toggleClass('show');
//     $('#dropdown-content-'+param).toggleClass('show');
// }

$('.dropdown').on('click', function(){
    if($('.bg-dropdown').hasClass('show')){
        $('.bg-dropdown').removeClass('show');
    }else{
        $('.bg-dropdown').addClass('show');
        $('.dropdown-content').addClass('show');
    }
});

