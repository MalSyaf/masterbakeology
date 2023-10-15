$(document).ready(function(){

    const navSlide = () => {
        const burger = document.querySelector('.burger');
        const nav = document.querySelector('.nav-links');
        const navLinks = document.querySelectorAll('.nav-links li');
    
        burger.addEventListener('click',() => {
            //Toggle Nav
            nav.classList.toggle('nav-active');
            //Animate Links
            navLinks.forEach((link, index) => {
                if(link.style.animation){
                    link.style.animation = '';
                } else {
                    link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.2}s`;
                }
            });
            //Burger Animation
            burger.classList.toggle('toggle');
        });
    }

    $(window).on("load", function () {
        $(".loader-wrapper").fadeOut(1000);
    });

    $('.control .buttons').click(function() {
        $(this).addClass('button-active').siblings().removeClass('button-active');
        
        let filter = $(this).attr('data-filter');
        if (filter == 'all') {
            $('.menu .image').show(400);
        } else {
            $('.menu .image').not('.'+filter).hide(200);
            $('.menu .image').filter('.'+filter).show(400);
        }
    
    });

    navSlide();

});

