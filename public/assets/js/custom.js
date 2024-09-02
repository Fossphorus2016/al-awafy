$('.heroSlider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    autoplay: true,
    autoplaySpeed: 4000,
    pauseOnHover: true,
    pauseOnDotsHover: true
});
$('.activitieSlider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    // autoplay: true,
    // autoplaySpeed: 4000,
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
            dots: true
          }
        },
        {
          breakpoint: 720,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
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
