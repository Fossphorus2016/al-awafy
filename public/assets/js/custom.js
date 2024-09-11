$('.heroSlider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    autoplay: true,
    autoplaySpeed: 4000,
    pauseOnHover: true,
    pauseOnDotsHover: true
});
$('.activitiesSlider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,  // Dots will be false for larger devices
    pauseOnHover: true,
    pauseOnDotsHover: true,
    prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>',
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: false  // Dots disabled for larger screens
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false   // Enable dots for devices under 768px
            }
        }
    ]
});
$('.activitieSlider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,  // Dots will be false for larger devices
    pauseOnHover: true,
    pauseOnDotsHover: true,
    prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>',
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: false  // Dots disabled for larger screens
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true   // Enable dots for devices under 768px
            }
        }
    ]
});
// $(document).ready(function() {
//     $('#navbarSupportedContent').on('shown.bs.collapse hidden.bs.collapse', function () {
//         if ($(this).hasClass('show')) {
//             $('header').addClass('headerVisible');
//         } else {
//             $('header').removeClass('headerVisible');
//         }
//     });
// });



// Define the social media links
const facebookLink = 'https://www.facebook.com/profile.php?id=100095340142490';
const instagramLink = 'https://www.instagram.com/alawafy_algeria/';
const whatsappLink = 'https://wa.me/213557666888';

// Function to update href attributes based on class names
function updateSocialMediaLinks() {
    // Facebook links
    document.querySelectorAll('.fbLink').forEach(anchor => {
        anchor.href = facebookLink;
    });

    // Instagram links
    document.querySelectorAll('.instaLink').forEach(anchor => {
        anchor.href = instagramLink;
    });

    // WhatsApp links
    document.querySelectorAll('.whatsappLink').forEach(anchor => {
        anchor.href = whatsappLink;
    });
}

// Call the function on page load
document.addEventListener('DOMContentLoaded', updateSocialMediaLinks);






var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;



function news_validate() {
    if ($("#subscriber_mail").val().trim() == "") {
        $(".newsletter_form ").addClass('redBorder');
        return;
    }
    $(".newsletter_form ").removeClass('redBorder');
    $('#news_letter_form').submit();
}

// $(".phoneVal").keydown(function (event) {
//     const keyPressed = event.key;
//     console.log(keyPressed, 'keyy')
//     if (
//         keyPressed === "+" ||
//         keyPressed === "-" ||
//         keyPressed === "e" ||
//         keyPressed === "."
//     ) {
//         event.preventDefault();
//     }
// });
