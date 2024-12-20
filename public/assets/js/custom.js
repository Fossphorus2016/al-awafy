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

    var subsEmail = $("#subscriber_mail").val().trim();
    if (subsEmail == "") {
        $(".newsletter_form ").addClass('redBorder');
        return;
    }else{
        if(!emailRegex.test(subsEmail)){
            $(".newsletter_form ").addClass('redBorder');
            return
        }else{
            $(".newsletter_form ").removeClass('redBorder');
            $('#news_letter_form').submit();
        }
    }

}

document.querySelectorAll('.languages').forEach(item => {
    item.addEventListener('click', function (e) {

        let currentUrl = window.location.href;

        let selectedLang = e.target.textContent.trim().toLowerCase();

        console.log(selectedLang, 'sellll')

        let langCode = '';
        if (selectedLang === 'english' || selectedLang === 'إنجليزي' || selectedLang === 'anglaise') {
            langCode = 'En';
        } else if (selectedLang === 'french' || selectedLang === 'فرنسي' || selectedLang === 'français') {
            langCode = 'Fr';
        } else if (selectedLang === 'arabic' || selectedLang === 'عربي' || selectedLang === 'arabe') {
            langCode = 'Ar';
        }
        const langRegex = /\/(En|Ar|Fr)\//;
        if (langRegex.test(currentUrl)) {
            currentUrl = currentUrl.replace(langRegex, `/${langCode}/`);
        } else {
            currentUrl = `${window.location.origin}/${langCode}${window.location.pathname}${window.location.search}`;
        }

        window.location.href = currentUrl;
    });
});
