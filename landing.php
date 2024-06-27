<?php
/**
 * Template Name: Landing Page
 * Description: A template that displays the landing page
 */

function enqueue_landing_page_styles() {
    if (is_page_template('landing.php')) {
        wp_enqueue_style('landing-page-css', get_template_directory_uri() . '/style/style.css');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_landing_page_styles');

get_header(); ?>

<!-- Preconnect for performance -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Including Google Fonts for fallback or additional styling -->
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">

<style>
@font-face {
    font-family: 'Satoshi';
    src: url('<?php echo get_template_directory_uri(); ?>/fonts/Satoshi-Regular.otf') format('opentype');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'Satoshi';
    src: url('<?php echo get_template_directory_uri(); ?>/fonts/Satoshi-normal.otf') format('opentype');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'Satoshi';
    src: url('<?php echo get_template_directory_uri(); ?>/fonts/Satoshi-Bold.otf') format('opentype');
    font-weight: bold;
    font-style: normal;
}

@font-face {
    font-family: 'Satoshi';
    src: url('<?php echo get_template_directory_uri(); ?>/fonts/Satoshi-Boldnormal.otf') format('opentype');
    font-weight: bold;
    font-style: normal;
}

@font-face {
    font-family: 'Satoshi';
    src: url('<?php echo get_template_directory_uri(); ?>/fonts/Satoshi-Light.otf') format('opentype');
    font-weight: 300;
    font-style: normal;
}

@font-face {
    font-family: 'Satoshi';
    src: url('<?php echo get_template_directory_uri(); ?>/fonts/Satoshi-Lightnormal.otf') format('opentype');
    font-weight: 300;
    font-style: normal;
}

@font-face {
    font-family: 'Satoshi';
    src: url('<?php echo get_template_directory_uri(); ?>/fonts/Satoshi-Medium.otf') format('opentype');
    font-weight: 500;
    font-style: normal;
}

@font-face {
    font-family: 'Satoshi';
    src: url('<?php echo get_template_directory_uri(); ?>/fonts/Satoshi-Mediumnormal.otf') format('opentype');
    font-weight: 500;
    font-style: normal;
}

@font-face {
    font-family: 'Satoshi';
    src: url('<?php echo get_template_directory_uri(); ?>/fonts/Satoshi-Black.otf') format('opentype');
    font-weight: 900;
    font-style: normal;
}

@font-face {
    font-family: 'Satoshi';
    src: url('<?php echo get_template_directory_uri(); ?>/fonts/Satoshi-Blacknormal.otf') format('opentype');
    font-weight: 900;
    font-style: normal;
}


@font-face {
    font-family: 'Manrope ExtraLight';
    src: url('<?php echo get_template_directory_uri(); ?>/fonts/manrope-extralight.ttf') format('truetype');
    font-weight: 200;
    font-style: normal;
}

body {
    margin: 0;
    font-family: 'Manrope', sans-serif;
}

.section-bg, .prizes-section, .steps-section, .contest-overview, .timer-section, .boss-section, .join-section, .faq-section, .X-section {
    background: url('<?php echo get_template_directory_uri(); ?>/img/bg.png') no-repeat center center fixed;
    background-size: cover;
    padding: 100px 20px;
    text-align: center;
    color: #fff;
}




.hero {
    position: relative;
    background-image: url('<?php echo get_template_directory_uri(); ?>/icons/hero.svg');
    background-size: cover;
    background-position: bottom;
    padding: 50px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: nowrap; /* Change from wrap to nowrap */
    height: 55em;
    box-sizing: border-box; /* Add this for consistent sizing */
}


.hero-content {
    max-width: 50%;
    margin-top: -10em;
    margin-bottom: -5em;
    margin-left: 2em;
    flex-shrink: 0;
}

.hero-title {
    font-family: 'Satoshi', sans-serif;
    font-size: 96px;
    font-style: normal;
     line-height: 84px;
    text-align: left;
    color: #fff;
    margin-top: 22%;
}

.hero-description {
    font-size: 25px;
    line-height: 30.2px;
    color: #fff;
    margin: 17px 0;
    margin-top: -3%;
}

.hero-button {
    display: inline-block;
    padding: 20px 28px;
    background: rgba(0, 156, 255, 1);
    color: #fff;
    text-decoration: none;
    border-radius: 36px;
    font-weight: normal;
    margin-bottom: 20px;
    margin-top: 30px;
    font-size: 21px;
}

.hero-element {
    display: block;
    max-width: 100%;
    margin-top: 70px;

}

.hero-logo {
    max-width: 80%;
    height: auto;
    position: relative;
    left: -40px;
    top: -26px;
    flex-shrink: 0; 
}
@media (max-width: 768px) {
    .hero {
        flex-direction: column;
        text-align: center;
        padding: 20px;
        height: auto;
        flex-wrap: wrap; /* Add this back for responsive design */
    }

    .hero-content {
        max-width: 100%;
        margin-left: 0;
        margin-bottom: 2em; 
        margin-top: 2em;
        order: 2; /* Move the content after the logo */
    }

    .hero-title {
        font-size: 66px;
        line-height: 90%;
        text-align: center;
        margin-top: -5%;
    }

    .hero-description {
        font-size: 16px;
        margin-left: 0;
        text-align: center;
        line-height: 1.4;
        margin-top: -10%;
    }

    .hero-button {
        padding: 12px 18px;
        margin-left: 0;
        margin-bottom: 20px;
        order: 3; /* Move the button after the title */
    }

    .hero-element {
        margin-top: 0em;
    }

    .hero-logo {
        max-width: 86%;
        left: 7px;
        top: 0;
        order: 1;
        top: -2em;
        margin-bottom: -40px;
    }
}





.section-bg {
    padding: 100px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin-bottom: -2%;
    box-sizing: border-box; /* Add this for consistent sizing */
}


.section-title {
    font-family: 'Satoshi', sans-serif;
    font-size: 100px;
    font-style: normal;
    font-weight: 700;
    line-height: 100px;
    color: #fff;
    margin-bottom: 0px;
    margin-top: 3%;
}

 

.prizes-section {
    text-align: center;
    color: #fff;
    margin-top: -9em;

}

.prizes-title {
    font-family: 'Satoshi', sans-serif;
    font-size: 135px;
    font-style: normal;
    font-weight: 900;
    line-height: 145px;
    text-align: center;
    color: #fff;
    margin-left: -35px;

}


 

.prizes-description {
    font-size: 20px;
    line-height: 20.4px;
    margin-bottom: 60px;
    margin-top: -3em;
    text-align: center;
}

.prizes-cards {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
}

.prize-card {
    background: linear-gradient(0deg, rgba(36, 35, 52, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
    border-radius: 10px;
    padding: 20px;
    width: 580px;
    text-align: center;
    position: relative;
    height: 440px;
    transition: background 0.3s ease-in-out, transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
    transform: translateY(100px);
    opacity: 0;
    border: 0.1px solid rgba(255, 255, 255, 0.3);
}

.prize-card.show {
    transform: translateY(0);
    opacity: 1;
}



.prize-amount {
    font-family: 'Satoshi', sans-serif;
    font-style: normal;
    font-size: 75px;
    font-weight: bold;
    margin-bottom: 10px;
}

.prize-star {
    position: absolute;
    top: 43%;
    left: 59%;
    transform: translate(-50%, -50%);
    width: 250px;
    height: 170px;
}

.prize-place {
    font-family: 'Satoshi', sans-serif;
    font-style: normal;
    font-size: 35px;
    font-weight: bold;
    margin-top: 195px;
}

.prize-description {
    font-size: 20px;
}

.prizes-apply-button {
    display: inline-block;
    padding: 26px;
    background: rgba(0, 156, 255, 1);
    color: #fff;
    text-decoration: none;
    border-radius: 50px;
    font-weight: bold;
    margin-top: 20px;
    text-align: center;
    border: 2px solid transparent;
    margin-top: 3em;
    font-size: 25px;
}

.prizes-apply-button:hover {
    background: #fff;
    color: #0077C2;
    border: 2px solid #0077C2;
}



@media (max-width: 1024px) {
    .prizes-section {
        padding: 30px 10px;
        text-align: center;
        color: #fff;
    }

    .prizes-title {
        font-size: 70px;
        line-height: 80px;
        margin-left: 0;
        padding: 0 20px;
        margin-bottom: 29px;
        margin-top: 2em;
        line-height: 70px;
    }

    .prizes-description {
        font-size: 18px;
        line-height: 22px;
        margin-bottom: 40px;
        margin-top: 0em;
        text-align: center;
        padding: 0 10px;
    }

    .prizes-cards {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 20px;
    }

    .prize-card {
        width: 90%;
        height: auto;
        padding: 20px;
        margin-bottom: 20px;
    }

    .prize-amount {
        font-size: 57px;
        margin-bottom: 10px;
    }

    .prize-star {
        width: 170px;
        height: 117px;
        margin-top: 4%;
    }

    .prize-place {
        font-size: 32px;
        margin-top: 125px;
        margin-bottom: -2px;
        }

    .prizes-apply-button {
        font-size: 20px;
        padding: 20px;
        width: 80%;
        margin-top: 20px;
    }
}

 
/* General styles for the steps section */
.steps-section {
    text-align: center;
    color: #fff;
    margin-top: -8em;
}

.steps-title {
    font-family: 'Satoshi', sans-serif;
    font-size: 80px;
    font-style: normal;
    line-height: 80px;
    text-align: center;
    color: #fff;
    margin-bottom: 7%;
  }

.steps-description {
    font-size: 1.2em;
    margin-bottom: 80px;
}

.steps-cards {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
}

.step-card {
    background: linear-gradient(0deg, rgba(36, 35, 52, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
    border-radius: 10px;
    padding: 20px;
    width: 580px;
    text-align: center;
    position: relative;
    height: 550px;
    transition: background 0.3s ease-in-out, transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
    transform: translateY(100px);
    opacity: 0;
    border: 0.1px solid rgba(255, 255, 255, 0.3);
}

.step-card.show {
    transform: translateY(0);
    opacity: 1;
}

 

.step-title {
    font-family: 'Satoshi', sans-serif;
    font-style: normal;
    font-size: 48px;
    font-weight: bold;
    margin-bottom: 10px;
    margin-left: -7em;
    margin-top: 20px;
}

.step-vector {
    position: absolute;
    left: 26%;
    top: 26%;
    transform: translate(-50%, -50%);
    width: 181px;
    height: 45px;
    display: none;
}

.step-card:hover .step-vector {
    display: block;
}

.step-text {
    font-size: 30px;
    line-height: 33.6px;
    font-weight: bold;
    margin-top: 100px;
    text-align: left;
    margin-left: 18px;
    margin-right: 11px;
}

.step-button {
    font-family: 'Satoshi', sans-serif;
    font-style: normal;
    font-size: 24px;
    display: none;
    margin-top: 20px;
    padding: 16px 24px 16px 24px;
    background: rgba(0, 156, 255, 1);
    color: #fff;
    text-decoration: none;
    border-radius: 50px;
    font-weight: bold;
    position: absolute;
    bottom: 40px;  
    left: 40px;  
    margin-left: 1%;
}

.step-card:hover .step-button {
    display: inline-block;
}

/* Responsive styles for the steps section */
@media (max-width: 768px) {
    .steps-title {
        font-size: 57px;
        line-height: 62px;
        padding: 0 20px;
        text-align: center;
        margin-top: 2em;
    }

    .steps-cards {
        flex-direction: column;
        align-items: center;
    }

    .step-card {
        width: 100%;
        height: auto;
        padding: 20px;
    }

    .step-title {
        text-align: left;
        font-size: 48px;
        margin-left: 0;
        margin-top: 0;
        position: absolute;
        top: 20px;
        left: 20px;
    }

    .step-vector {
        position: absolute;
        top: 104px;
        left: 114px;
        width: 140px;
        height: auto;
    }

    .step-text {
        margin-top: 113px;
        text-align: left;
        margin-left: 0;
        font-size: 20px;
     }

    .step-button {
        position: static;
        margin-top: 30px;
        width: 62%;
        text-align: center;
        margin-left: -6px;
        font-size: 16px;
    }
    
}

.contest-overview {
    padding: 50px 20px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    color: #fff;
}

.contest-text {
    flex: 1;
    max-width: 600px;
    margin-right: 20px;
}

.contest-text h2 {
    font-family: 'Satoshi', sans-serif;
    font-size: 67px;
    font-style: normal;
     line-height: 78px;
    color: #fff;
    margin-bottom: 20px;
    text-align: left;
    /* text-transform: uppercase; */
    margin-left: -1em;
    line-height: 75px;

}

.contest-text p {
    font-family: 'Manrope';
    font-size: 20px;
    font-weight: 600;
    line-height: 30.4px;
    letter-spacing: -0.02em;
    text-align: left;
    margin-bottom: 20px;
    text-align: left;
    margin-left: -3em;
}

.contest-text .contest-button {
    display: inline-block;
    padding: 30px;
    background: rgba(0, 156, 255, 1);
    color: #fff;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 900;
    margin: 0 auto;
    margin-left: -19em;
    margin-top: 4em;
    font-size: 22px;
    text-transform: uppercase;
}

.contest-cards {
    display: flex;
    justify-content: center;
    gap: 26px;
    flex-wrap: wrap;
    margin-left: 8em
}

.contest-column {
    display: flex;
    flex-direction: column;
    gap: 26px;
}

.contest-card {
    background: rgba(27, 27, 27, 1);
    color: #fff;
    border-radius: 10px;
    padding: 20px;
    width: 400px;
    text-align: left;
    position: relative;
    transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.contest-card1,
.contest-card2,
.contest-card3,
.contest-card4 {
    height: 420px;
    width: 420px;
}

.contest-card2 {
    margin-top: 6em;
}

.contest-card img {
    width: 70px;
    height: 70px;
    padding: 10px;
    margin-bottom: 10px;
    align-self: flex-start;
}

.contest-card h3 {
    font-family: 'Satoshi', sans-serif;
    font-style: normal;
    font-size: 34px;
    margin: 0 0 10px 0;
    white-space: normal;
    overflow-wrap: break-word;
    word-wrap: break-word;
    hyphens: auto;
    margin-top: 26px;
    text-transform: uppercase;
}

.contest-card p {
    font-family: 'Manrope', sans-serif;
    font-size: 23px;
    margin-bottom: 1px;
    white-space: normal;
    overflow-wrap: break-word;
    word-wrap: break-word;
    hyphens: auto;
    margin-top: 5px;
}

.contest-card:hover {
    background: #fff;
    color: #000;
}

.apply-now-contest {
    font-family: 'Satoshi', sans-serif;
    font-style: normal;
    display: none;
    position: absolute;
    bottom: 5px;
    left: 30px;
    text-transform: uppercase;
    color: inherit;
    font-weight: bold;
    align-items: center;
    gap: 5px;
    font-size: 20px;
}

.contest-card:hover .apply-now-contest {
    display: flex;
}

.contest-arrow {
    width: 16px;
    height: 16px;
}

.contest-overview-button {
    display: inline-block;
    padding: 16px 24px;
    background: transparent;
    color: white;
    text-decoration: none;
    border-radius: 50px;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
    border: 1px solid #0077C2;
    margin-left: -35em;
    font-size: 16px;
    margin-bottom: -12px;
}

@media (max-width: 768px) {
    .contest-overview {
        flex-direction: column;
        text-align: center;
        margin-top: -1px;
    }

    .contest-text {
        max-width: 100%;
        margin-right: 0;
        margin-bottom: 20px;
        margin-top: -13%;
    }

    .contest-cards {
        flex-direction: column;
        align-items: center;
        margin-left: -0.2em;
        margin-top: 6%;
    }

    .contest-column {
        width: 100%;
        gap: 20px;
    }

    .contest-card1,
    .contest-card2,
    .contest-card3,
    .contest-card4 {
        width: 100%;
    }

    .contest-card {
        width: 100%;
    }

    .contest-text h2 {
        font-size: 44px;
        line-height: 48px;
        padding: 0 20px;
        text-align: center;
        margin-left: -14px;
        margin-top: 0%;
    }

    .contest-text p {
        text-align: center;
        margin-left: 0px;
        font-size: 20px;
        line-height: 28px;
    }

    .contest-card h3 {
        margin: 17px 0;
    }

    .contest-card p {
        margin-left: 0;
    }

    .contest-overview-button {
        margin-left: -20px;
        margin-bottom: 2em;
    }

    .contest-text .contest-button {
        background: rgba(0, 156, 255, 1);
        margin: 0 auto;
        font-size: 13px;
        padding: 18px; 
    }
}
.contest-card svg {
    width: 75px;   
    height: 75px;  
 }

.contest-card1 svg,
.contest-card2 svg,
.contest-card3 svg,
.contest-card4 svg {
    width: 75px;   
    height: 75px;  
}


.timer-section {
    color: #fff;
    margin-top: -1px;
}

.timer-card {
    background: linear-gradient(0deg, rgba(10, 3, 109, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
    border-radius: 10px;
    padding: 50px;
    margin: 0 auto;
    position: relative;
    text-align: center;
    transition: background 0.3s ease-in-out, transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
    transform: translateY(100px);
    opacity: 0;
    border: 0.1px solid rgba(255, 255, 255, 0.3);
    width: 97%;
    margin-top: -2%;
    height: 46em;
}

.timer-card.show {
    transform: translateY(0);
    opacity: 1;
}

.timer-card:hover {
    background: linear-gradient(0deg, rgba(10, 3, 109, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
}

.timer-card h2 {
    font-family: 'Satoshi', sans-serif;
    font-style: normal;
    font-size: 74px;
    margin-bottom: 20px;
    text-transform: uppercase;
    margin-top: 7px;
}

.timer {
    display: flex;
    justify-content: space-around;
    align-items: center;
    width: 100%;
    margin-top: 3%;
}

.timer div {
    text-align: center;
    font-family: 'Satoshi', sans-serif;
    font-style: normal;
    text-transform: uppercase;
}

.timer div span {
    display: block;
}

.timer div span:first-child {
    font-size: 150px;
    font-weight: bold;
    margin-bottom: -15%;
}

.timer div span:last-child {
    font-size: 80px;
    font-weight: bold;
}

.timer img {
    height: 350px;
    margin: 0 30px;
}

.apply-now {
    font-family: 'Satoshi', sans-serif;
    font-style: normal;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 70px;
    font-size: 45px;
}

.apply-now a {
    font-family: 'Satoshi', sans-serif;
    font-style: normal;
    color: #fff;
    text-decoration: none;
    margin-left: 10px;
    display: flex;
    align-items: center;
    font-size: 45px;
}

/* Responsive styles for the timer section */
@media (max-width: 768px) {
    .timer-card {
        padding: 20px;
        margin-top: 0;
        height: auto;
    }

    .timer-card h2 {
        font-size: 57px;
        margin-bottom: -10px;
        margin-top: 10px;
    }

    .timer {
        flex-direction: column;
    }

    .timer div span:first-child {
        font-size: 90px;
    }

    .timer div span:last-child {
        font-size: 66px;
        margin-top: 6px;
        }

    .timer img {
        display: none;
    }

    .apply-now {
        flex-direction: column;
        font-size: 31px;
    }

    .apply-now a {
        margin-left: 14px;
        margin-top: 10px;
        font-size: 38px;
    }
}
.boss-section {
    padding: 50px 20px;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    color: #fff;
    margin: 0;  
}

.boss-section > * {
    margin: 0;  
}

.boss-image {
    flex: 0 0 auto;  
    width: 43%;
    border-radius: 10px 0 0 10px;
    overflow: hidden;
    margin-top: -5em; 
    margin-left: -2em;
}

.boss-card {
    flex: 0 0 auto;  
    background: linear-gradient(0deg, rgba(10, 3, 109, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
    border-radius: 0 10px 10px 0;
    padding: 30px;
    text-align: left;
    height: 48em;
    width: 50%;  
    margin-top: -5em;  
    border: 0.1px solid rgba(255, 255, 255, 0.3);
}

.boss-card:hover {
    background: linear-gradient(0deg, rgba(10, 3, 109, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
}

.boss-card h2 {
    font-family: 'Satoshi', sans-serif;
    font-size: 58px;
    font-style: normal;
     line-height: 52.8px;
    letter-spacing: -2%;
    text-align: left;
    margin-bottom: -1em;
    text-transform: uppercase;
    margin-left: 1em;
}

.boss-card h3 {
    font-family: 'Satoshi', sans-serif;
    font-style: normal;
    font-size: 55px;
    margin-bottom: 20px;
    font-weight: normal;
    margin-left: 1em;
    margin-top: 8%;
}

.boss-card p {
    font-family: 'Manrope', sans-serif;
    margin-top: 3em;
    font-size: 45px;
    line-height: 55px;
    weight: 600px;
    letter-spacing: -2%;
    margin-top: -4em;
    margin-left: 1em;
}

@media (max-width: 768px) {
    .boss-section {
        flex-direction: column;
        text-align: center;
        align-items: center;
    }

    .boss-image {
        width: 100%;
        margin: 0 auto 20px;
        border-radius: 10px;
        z-index: 100;    }

    .boss-card {
        padding: 20px;
        border-radius: 10px;
        margin-left: 0;
        margin-top: -3em;
        border-bottom: 0.1px solid rgba(255, 255, 255, 0.3);
        border-left: 0.1px solid rgba(255, 255, 255, 0.3);
        border-right: 0.1px solid rgba(255, 255, 255, 0.3);
        width: 80%;
        height: 40em;
    }

    .boss-card h2 {
        font-size: 55px;
        margin-left: 0;
        margin-top: 1em;
        text-align: center;
    }

    .boss-card h3 {
        font-size: 40px;
        margin-left: 0;
        margin-top: 1.5em;
        text-align: center;
    }

    .boss-card p {
        font-size: 24px;
        line-height: 28px;
        margin-left: 0;
        margin-top: -3em;
        text-align: center;
    }
}


 
/* Adjust the styles for FAQ cards */
.faq-section {
    background-size: cover;
    background-position: center;
    text-align: center;
    margin-top: -4em;
}
.X-section {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
    background-size: cover;
    background-position: center;
    margin-top: -4em;
    min-height: 400px; /* Ensure it has enough height to center properly */
}

.tweet {
 
    margin: 10px 0; /* Add some margin between tweets for better spacing */
 
}



.faq-title {
    font-family: 'Satoshi', sans-serif;
    font-size: 65px;
    font-style: normal;
    line-height: 78px;
    text-align: center;
    color: #fff;
    margin-bottom: 50px;
 }

.faq-cards {
    display: flex;
    flex-direction: column;
    gap: 20px;
    align-items: center;
}

.faq-card {
    background: linear-gradient(0deg, rgba(36, 35, 52, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
    border-radius: 10px;
    padding: 20px;
    width: 80%;
    text-align: left;
    position: relative;
    transition: background 0.3s ease-in-out, transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
    transform: translateY(100px);
    opacity: 0;
    border: 0.1px solid rgba(255, 255, 255, 0.3);
    cursor: pointer;
    overflow: hidden; /* Ensure smooth animation */
}

.faq-card.show {
    transform: translateY(0);
    opacity: 1;
}
 

.faq-question {
    font-family: 'Satoshi', sans-serif;
    font-size: 40px;
    font-style: normal;
    line-height: 40px;
    letter-spacing: 0.1px;
    text-align: left;
    color: #fff;
    margin-bottom: 10px;}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    font-family: 'Manrope', sans-serif;
    font-size: 22px;
    font-weight: 600;
    line-height: 22.4px;
    letter-spacing: -0.02em;
    text-align: left;
    color: #fff;
    transition: max-height 0.5s ease-in-out, padding 0.5s ease-in-out;
 }

.faq-card.active .faq-answer {
    max-height: 100px; /* Adjust as needed */
    padding-top: 10px; /* Add padding when active */
}

.faq-arrow {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    transition: transform 0.3s ease-in-out;
    margin-top: 0; /* Ensure it stays vertically centered */
}

.faq-card.active .faq-arrow {
    transform: translateY(-50%) rotate(45deg); /* Adjust rotation as needed */
    margin-top: 0; /* Ensure it stays vertically centered */
}

.faq-card:hover, .faq-card.active {
    transform: translateY(-10px);
    background: linear-gradient(0deg, rgba(10, 3, 109, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
}
@media (max-width: 768px) {
    .faq-card {
        width: 100%;
        flex-direction: column;
        text-align: left;
    }

    .faq-question  {
        width: 80%;
        font-size: 25px;
        line-height: 28px;
    }
    .faq-answer {
        width: 81%;
        font-size: 16px;
        line-height: 22px;
  
    }

    .faq-arrow {
        right: 10px;
    }
}




.contest-card svg circle {
        fill: white;
        transition: fill 0.3s ease;
    }

    .contest-card svg path {
        fill: black;
        transition: fill 0.3s ease;
    }

    .contest-card:hover svg circle {
        fill: black;
    }

    .contest-card:hover svg path {
        fill: white;
    }



    .section-bg {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 100px 20px;
}

.section-title {
    font-family: 'Satoshi', sans-serif;
    font-size: 80px;
    font-style: normal;
    line-height: 80px;
    color: #fff;
    margin-bottom: 0px;
    margin-top: 3%;
}

.card-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
    margin-top: 7em;
}

.card {
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    width: 585px;
    height: 430px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

.card-icon {
    width: 139px;
    height: 135px;
    margin-top: -13%;

}

.card-title {
    font-family: 'Satoshi', sans-serif;
    font-style: normal;
    font-size: 45px;
    font-weight: 700;
    margin-bottom: 10px;
    color: black;
    line-height: 47.5px;
}

.card-description {
    font-family: 'Manrope', sans-serif;
    font-size: 35px;
    color: #000;
}

@media (max-width: 768px) {
    .section-title {
        font-size: 48px;
        line-height: 48px;
        padding: 0 20px;
    }

    .card-container {
        flex-direction: column;
    }

    .card {
        width: 98%;
        margin-bottom: 20px;
        height: 25em;
    }

    .card-icon {
        width: 100px;
        height: 100px;
        margin-bottom: 15px;
        margin-top: -18%;
    }

    .card-title {
        font-family: 'Satoshi', sans-serif;
        font-style: normal;
        font-size: 44px;
        margin-bottom: 48px;
        color: black;
        font-weight: bold;
        margin-top: 7px;
        line-height: 45px;
   }

    .card-description {
        font-size: 25px;
        margin-top: -5%;
    }
}





.announcement-section {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 50px;
    background: url('<?php echo get_template_directory_uri(); ?>/img/bg.png') no-repeat center center fixed;
    background-size: cover;
    color: #fff;
    text-align: left;
    margin-bottom: 100px;  
}

.announcement-section::after {
    content: "";
    position: absolute;
    bottom: -100px;  
    left: 0;
    right: 0;
    height: 100px;  
    background: url('<?php echo get_template_directory_uri(); ?>/img/bg.png') no-repeat center center fixed;
    background-size: cover;
    z-index: -1; / 
}

.announcement-logo {
    max-width: 400px;
    height: auto;
}

.announcement-text {
    flex: 1;
    margin-left: 20em;
}

.announcement-text p {
    margin: 0;
    line-height: 1.5;
    font-size: 16px;
    color: #fff;
}

.announcement-privacy {
    display: block;
    margin-top: 10px;
    color: #fff;
    text-decoration: none;
}

.announcement-button {
    display: inline-block;
    width: 183px;
    height: 67px;
    background-color: rgba(0, 156, 255, 1);
    color: #fff;
    text-decoration: none;
    border-radius: 50px;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    line-height: 67px; 
}

@media (max-width: 768px) {
    .announcement-section {
        flex-direction: column;
        text-align: center;
        padding: 20px;
    }

    .announcement-logo {
        margin-bottom: 20px;
    }

    .announcement-text {
        margin: 0;
    }

    .announcement-button {
        margin-top: 27px;
    }
}



/* width */
::-webkit-scrollbar {
  width: 14px;
}

/* Track */
::-webkit-scrollbar-track {
  background: rgba(27, 27, 27, 1); 
   box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.3);
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: linear-gradient(45deg, #0077C2, #00d4ff); 
  border-radius: 10px;
  border: 3px solid rgba(27, 27, 27, 1);
  box-shadow: 0 3px 8px rgba(0, 0, 0, 0.3);
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: linear-gradient(45deg, #00d4ff, #0077C2);
}









.carousel-section {
    position: relative;
    padding: 0;
    background-color: #f8f8f8;
    text-align: center;
}

.carousel-container {
    position: relative;
    max-width: 100%;
    margin: auto;
    overflow: hidden;
    height: 900px; /* Fixed height for all slides */
}

.carousel-slide {
    display: none;
    position: relative;
    height: 100%;
}

.carousel-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    vertical-align: middle;
}

.carousel-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
}

.carousel-text {
    text-align: center;
    padding: 20px;
    border-radius: 10px;
    max-width: 80%;
}

.carousel-text h2 {
    font-family: 'Satoshi', sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size: 70px;
    line-height: 70px;
    margin-bottom: 10px;
     margin-top: -2em;
}

.carousel-text p {
    font-family: 'Manrope', sans-serif;
    line-height: 25px;
    font-size: 18px;
    margin-bottom: 20px;
}

.carousel-button {
    font-size: 20px;
    display: inline-block;
    padding: 20px 28px;
    background-color: rgba(0, 156, 255, 1);
    color: #fff;
    text-decoration: none;
    border-radius: 50px;
    font-weight: bold;
}

/* Special styles for the third slider */
.carousel-overlay-special {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
     display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
}

.carousel-text-special {
    text-align: center;
    padding: 20px;
    border-radius: 10px;
    max-width: 80%;
}

.carousel-title-special h2 {
    font-family: 'Satoshi', sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size: 80px;
    line-height: 70px;
    margin-bottom: 10px;
    text-transform: uppercase;
    margin-top: -2em;
}

.carousel-description-special {
    font-family: 'Manrope', sans-serif;
    line-height: 25px;
    font-size: 18px;
    margin-bottom: 20px;
}

.carousel-button-special {
    font-size: 20px;
    display: inline-block;
    padding: 20px 28px;
    background-color: rgba(0, 156, 255, 1);
    color: #fff;
    text-decoration: none;
    border-radius: 50px;
    font-weight: bold;
}

.carousel-prev,
.carousel-next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 0;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    user-select: none;
    transform: translateY(-50%);
    background-size: contain;
    background-repeat: no-repeat;
    background-color: transparent;
    border: none;
    height: 50px;
    width: 50px;
    margin-left: 5px;
}

.carousel-prev {
    left: 0;
    background-image: url('<?php echo get_template_directory_uri(); ?>/img/slider-left.png');
}

.carousel-next {
    right: 0;
    background-image: url('<?php echo get_template_directory_uri(); ?>/img/slider-right.png');
}

.carousel-prev:hover,
.carousel-next:hover {
    background-color: transparent;
}

.carousel-dots {
    position: absolute;
    bottom: 10px;
    width: 100%;
    text-align: center;
}

.carousel-dot {
    cursor: pointer;
    height: 6px;
    width: 6px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease, transform 0.3s ease;
}

.carousel-dot.active,
.carousel-dot:hover {
    background-color: #717171;
    transform: scale(1.5);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .carousel-container {
        height: 600px; 
    }

    .carousel-prev,
    .carousel-next {
        height: 30px;
        width: 30px;
    }

    .carousel-dot {
        height: 5px;
        width: 5px;
    }

    .carousel-text {
        max-width: 90%;
    }

    .carousel-text h2 {
        font-size: 30px;
        line-height: 30px;
    }

    .carousel-text p {
        font-size: 16px;
    }

    .carousel-button {
        padding: 8px 16px;
        font-size: 14px;
    }
}





 /* Add smooth transition for hover effects */
.prize-card,
.step-card,
.faq-card,
.carousel-slide {
    transition: transform 0.3s ease, opacity 0.3s ease, background 0.3s ease;
}

.prize-card:hover,
.step-card:hover,
.faq-card:hover {
    transform: translateY(-10px);
    background: linear-gradient(0deg, rgba(10, 3, 109, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
}


 

 

 
</style>

<section class="hero">
    <div class="hero-content">
        <h1 class="hero-title">theBreakout<br>trading contest</h1>
        <p class="hero-description">Gelber Group is happy to announce THE BREAKOUT <br>– a fully remote, discretionary, simulated Futures & FX <br>trading competition that will take place this<br> September/October 2024</p>
        <a href="#" class="hero-button">JOIN NOW</a>
        <img src="<?php echo get_template_directory_uri(); ?>/img/br.png" alt="Breakout Element" class="hero-element">
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/hero.svg" alt="Breakout Logo" class="hero-logo">
</section>

<section class="section-bg">
    <h2 class="section-title">What is theBreakout<br> trading contest</h2>
    <div class="card-container">
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/trophy.svg" alt="Trophy Icon" class="card-icon">
            <h3 class="card-title">theBreakout</h3>
            <p class="card-description">Compete for $35k & a Dream Job at Gelber Group</p>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/chart.svg" alt="Chart Icon" class="card-icon">
            <h3 class="card-title">Futures & FX Masters</h3>
            <p class="card-description">Compete, Get Mentored, Win BIG at The Breakout</p>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/skills.svg" alt="Skills Icon" class="card-icon">
            <h3 class="card-title">Don't just trade, Breakout!</h3>
            <p class="card-description">Showcase Your Skills & Learn From Industry Leaders.</p>
        </div>
    </div>
</section>


<section class="prizes-section">
    <h2 class="prizes-title">$35,000 IN CASH PRIZES</h2>
    <p class="prizes-description">Cash prizes will be strictly for the top three P&L performers:</p>
    <div class="prizes-cards">
        <div class="prize-card">
            <div class="prize-amount">$20,000
                <img src="<?php echo get_template_directory_uri(); ?>/img/gold.png" alt="Gold Star" class="prize-star">
            </div>
            <p class="prize-place">1ST PLACE</p>
         </div>
        <div class="prize-card">
            <div class="prize-amount">$10,000
                <img src="<?php echo get_template_directory_uri(); ?>/img/silver.png" alt="Silver Star" class="prize-star">
            </div>
            <p class="prize-place">2ND PLACE</p>
         </div>
        <div class="prize-card">
            <div class="prize-amount">$5,000
                <img src="<?php echo get_template_directory_uri(); ?>/img/bronze.png" alt="Bronze Star" class="prize-star">
            </div>
            <p class="prize-place">3RD PLACE</p>
         </div>
    </div>
    <a href="#" class="prizes-apply-button">SIGN UP TODAY</a>
</section>

<section class="steps-section">
    <h2 class="steps-title">Join Gelber Group<br> Trading Contest In 3 Easy Steps</h2>
     <div class="steps-cards">
        <div class="step-card">
            <div class="step-title">STEP 1</div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/vector.png" alt="Step Vector" class="step-vector">
            <p class="step-text">See if you fit the criteria <br>of contestants eligible to <br>participate in the competition.</p>
            <a href="#" class="step-button">APPLY NOW</a>
        </div>
        <div class="step-card">
            <div class="step-title">STEP 2</div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/vector.png" alt="Step Vector" class="step-vector">
            <p class="step-text">Fill the form with as many <br>details as possible.</p>
            <a href="#" class="step-button">APPLY NOW</a>
        </div>
        <div class="step-card">
            <div class="step-title">STEP 3</div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/vector.png" alt="Step Vector" class="step-vector">
            <p class="step-text">If selected, you will be onboarded<br> onto the competition and receive<br> access credentials to your<br> account.</p>
            <a href="#" class="step-button">APPLY NOW</a>
        </div>
    </div>
</section>

<section class="contest-overview">
    <div class="contest-text">
        <a class="contest-overview-button">Contest Overview</a>
        <h2>Are you the ideal candidate for theBreakout?</h2>
        <p>TheBreakout winner isn't just about P&L. We value smart analysis and a growth mindset. We want traders who can learn, adapt, and take their careers to the next level with Gelber Group.</p>
        <a href="#" class="contest-button">Official Contest Rules</a>
    </div>
    <div class="contest-cards">
        <div class="contest-column">
            <div class="contest-card contest-card1">
                <svg width="100" height="100" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="25.5" cy="25.5" r="25.5" fill="black"/>
                    <path d="M36 36H29.7143V15H36V36ZM28.1429 36H21.8571V21.4615H28.1429V36ZM20.2857 36H14V26.3077H20.2857V36Z" fill="white"/>
                </svg>
                <h3>SHOWCASE YOUR SKILLS</h3>
                <p>2+ years of profitable experience in Futures & FX markets</p>
                <div class="apply-now-contest">
                    APPLY NOW
                    <img src="<?php echo get_template_directory_uri(); ?>/img/contest_arrow.png" alt="Apply Now Arrow" class="contest-arrow">
                </div>
            </div>
            <div class="contest-card contest-card3">
                <svg width="100" height="100" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="25.5" cy="25.5" r="25.5" fill="white"/>
                    <path d="M22.4 39C21.68 39 21.2 38.52 21.2 37.8V34.2H16.4C15.08 34.2 14 33.12 14 31.8V17.4C14 16.08 15.08 15 16.4 15H35.6C36.92 15 38 16.08 38 17.4V31.8C38 33.12 36.92 34.2 35.6 34.2H28.28L23.84 38.64C23.6 38.88 23.36 39 23 39H22.4ZM23.6 31.8V35.52L27.32 31.8H35.6V17.4H16.4V31.8H23.6ZM31.16 19.8L29.48 23.4H32V28.2H27.2V23.16L28.76 19.8H31.16ZM23.96 19.8L22.28 23.4H24.8V28.2H20V23.16L21.56 19.8H23.96Z" fill="black"/>
                </svg>
                <h3>Get Feedback & Mentorship</h3>
                <p>The hunger to take their career to the next level.</p>
                <div class="apply-now-contest">
                    APPLY NOW
                    <img src="<?php echo get_template_directory_uri(); ?>/img/contest_arrow.png" alt="Apply Now Arrow" class="contest-arrow">
                </div>
            </div>
        </div>
        <div class="contest-column">
            <div class="contest-card contest-card2">
                <svg width="100" height="100" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="25.5" cy="25.5" r="25.5" fill="white"/>
                    <path d="M38.9228 16.238C31.1667 13.4941 22.7362 13.2674 14.8425 15.5906C14.5287 15.6654 14.2333 15.8022 13.9739 15.9931C13.7144 16.1839 13.4963 16.4249 13.3325 16.7015C13.1687 16.9781 13.0626 17.2847 13.0205 17.603C12.9784 17.9213 13.0012 18.2448 13.0876 18.5542C13.5196 20.2796 14.1498 22.262 14.9067 24.0594C14.9197 24.1014 14.94 24.0812 14.94 24.0392C14.8303 23.1963 15.4816 22.1319 16.7591 21.7448C22.8981 19.8005 29.5048 19.8876 35.59 21.9929C35.8144 22.0693 36.052 22.1002 36.2886 22.0838C36.5253 22.0674 36.7562 22.004 36.9678 21.8973C37.1795 21.7907 37.3675 21.6429 37.5208 21.4628C37.6741 21.2827 37.7897 21.0738 37.8606 20.8486C38.6175 18.4241 38.9228 16.7778 38.9984 16.3657C39.0114 16.2889 38.9431 16.259 38.9228 16.238ZM20.2097 21.5719C19.2798 21.765 17.9943 22.0689 17.0295 22.3873C15.1007 23.0492 15.1901 25.3848 16.2174 26.1299C16.2929 25.6968 16.7591 25.1076 17.2788 24.9088C19.2043 24.1556 21.2719 23.7054 23.3622 23.5196C22.3 23.0904 21.2638 22.4754 20.2235 21.5711L20.2097 21.5719ZM35.564 26.2479C32.793 24.9523 29.7892 24.2226 26.73 24.1019C23.6708 23.9813 20.6184 24.4722 17.7531 25.5456C16.8346 25.8907 16.2596 27.0027 16.8346 28.0582C17.839 29.8654 18.9789 31.5946 20.2446 33.2313C20.0627 32.6041 20.3843 31.4428 21.6187 31.063C25.0327 30.0188 28.6149 30.4617 30.996 31.421C31.6684 31.6901 32.6201 31.5269 33.1537 30.7316C34.0636 29.3368 34.8912 27.8904 35.6322 26.3999C35.6655 26.3328 35.6322 26.2827 35.564 26.2479ZM30.032 34.6205C29.0333 34.1187 28.1199 33.4639 27.3253 32.6801C26.9574 32.314 26.4157 31.7879 25.8448 31.1608C24.5414 31.1608 23.2761 31.2909 21.9232 31.7208C20.6669 32.112 20.5491 33.5562 21.0989 34.3094C22.0288 35.4626 22.6809 36.0849 23.7212 37.1549C24.2725 37.6931 25.0128 37.9962 25.7851 38C26.5573 38.0037 27.3006 37.7079 27.8572 37.1751C28.6693 36.367 29.1687 35.8279 30.0864 34.7927C30.1408 34.7377 30.1205 34.6415 30.032 34.6205Z" fill="black"/>
                </svg>
                <h3>SECURE DATA ENCRYPTION</h3>
                <p>A clear and well-defined trading strategy.</p>
                <div class="apply-now-contest">
                    APPLY NOW
                    <img src="<?php echo get_template_directory_uri(); ?>/img/contest_arrow.png" alt="Apply Now Arrow" class="contest-arrow">
                </div>
            </div>
            <div class="contest-card contest-card4">
                <svg width="100" height="100" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="25.5" cy="25.5" r="25.5" fill="white"/>
                    <path d="M33.1063 18.6866C34.333 19.9328 35.227 21.4615 35.7079 23.1348H39V28.8614H35.7079C35.2276 30.5361 34.3335 32.0661 33.1063 33.3134L34.7552 36.1376L29.7448 39L28.0997 36.1758C26.3939 36.6015 24.608 36.6015 22.9022 36.1758L21.2552 39L16.2448 36.1376L17.8937 33.3134C16.6665 32.0661 15.7724 30.5361 15.2921 28.8614H12V23.1367H15.2921C15.7724 21.462 16.6665 19.932 17.8937 18.6847L16.2429 15.8624L21.2514 13H21.2571L22.9041 15.8204C24.6099 15.3947 26.3959 15.3947 28.1016 15.8204L29.7429 13H29.7467L34.7571 15.8624L33.1082 18.6866H33.1063ZM31.2857 25.999C31.2857 24.4807 30.6762 23.0246 29.5911 21.951C28.5061 20.8774 27.0345 20.2743 25.5 20.2743C23.9655 20.2743 22.4939 20.8774 21.4089 21.951C20.3239 23.0246 19.7143 24.4807 19.7143 25.999C19.7143 27.5173 20.3239 28.9735 21.4089 30.0471C22.4939 31.1207 23.9655 31.7238 25.5 31.7238C27.0345 31.7238 28.5061 31.1207 29.5911 30.0471C30.6762 28.9735 31.2857 27.5173 31.2857 25.999Z" fill="black"/>
                </svg>
                <h3>USE THE BEST TOOLS</h3>
                <p>A commitment to excellence and a desire to join the Gelber Group team</p>
                <div class="apply-now-contest">
                    APPLY NOW
                    <img src="<?php echo get_template_directory_uri(); ?>/img/contest_arrow.png" alt="Apply Now Arrow" class="contest-arrow">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="timer-section">
    <div class="timer-card">
        <h2>Starts In</h2>
        <div class="timer">
            <div>
                <span id="days"></span>
                <span>Days</span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/line.png" alt="Line">
            <div>
                <span id="hours"></span>
                <span>Hours</span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/line.png" alt="Line">
            <div>
                <span id="minutes"></span>
                <span>Mins</span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/line.png" alt="Line">
            <div>
                <span id="seconds"></span>
                <span>Secs</span>
            </div>
        </div>
        <div class="apply-now">
            <span>Don't wait! </span>
            <a href="#">Apply Now <img src="<?php echo get_template_directory_uri(); ?>/img/apply-icon.png" alt="Apply Now Icon"></a>
        </div>
    </div>
</section>

<section class="boss-section">
    <img src="<?php echo get_template_directory_uri(); ?>/img/boss.png" alt="Boss Image" class="boss-image">
    <div class="boss-card">
        <h2>Brian Gelber</h2>
        <h3>CEO</h3>
        <p><br><br><br><br><br><br>"Trading is about expressing <br>your market views authentically,<br> in your own unique way.<br>It’s challenging and the fun is<br> in the challenge."</p>
    </div>
</section>

 





<section class="carousel-section">
    <div class="carousel-container">
        <div class="carousel-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/slider1.png" alt="Slider 1">
            <div class="carousel-overlay">
                <div class="carousel-text">
                    <h2>Join TheBreakout <br>Gelber Group Trading Contest </h2>
                    <p>This is your chance to win big, gain invaluable mentorship, and potentially <br>land your dream job at a top trading firm. Spots are limited, so apply today!</p>
                    <a href="#" class="carousel-button">Apply Now & Launch Your Trading Career!</a>
                </div>
            </div>
        </div>
        <div class="carousel-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/slider2.png" alt="Slider 2">
            <div class="carousel-overlay">
                <div class="carousel-text">
                <h2>Join TheBreakout <br>Gelber Group Trading Contest </h2>
                    <p>This is your chance to win big, gain invaluable mentorship, and potentially <br>land your dream job at a top trading firm. Spots are limited, so apply today!</p>
                    <a href="#" class="carousel-button">Apply Now & Launch Your Trading Career!</a>
                </div>
            </div>
        </div>
        <div class="carousel-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/slider3.png" alt="Slider 3">
            <div class="carousel-overlay carousel-overlay-special">
                <div class="carousel-text carousel-text-special">
                    <h2 class="carousel-title-special">LOCATIONS</h2>
                    <p class="carousel-description-special">This is your chance to win big, gain invaluable mentorship, and potentially <br>land your dream job at a top trading firm. Spots are limited, so apply today!</p>
                    <a href="#" class="carousel-button">Apply Now & Launch Your Trading Career!</a>                </div>
            </div>
        </div>
        <div class="carousel-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/slider4.png" alt="Slider 4">
            <div class="carousel-overlay">
                <div class="carousel-text">
                <h2>Join TheBreakout <br>Gelber Group Trading Contest </h2>
                    <p>This is your chance to win big, gain invaluable mentorship, and potentially <br>land your dream job at a top trading firm. Spots are limited, so apply today!</p>
                    <a href="#" class="carousel-button">Apply Now & Launch Your Trading Career!</a>
                </div>
            </div>
        </div>
        <button class="carousel-prev"></button>
        <button class="carousel-next"></button>
        <div class="carousel-dots">
            <span class="carousel-dot active"></span>
            <span class="carousel-dot"></span>
            <span class="carousel-dot"></span>
            <span class="carousel-dot"></span>
        </div>
    </div>
</section>


















<section class="faq-section">
    <h2 class="faq-title">Contest FAQ</h2>
    <div class="faq-cards">
        <div class="faq-card">
            <h3 class="faq-question">Who can participate in theBreakout contest?</h3>
            <p class="faq-answer">theBreakout contest is open to legal residents of the 50 United States and the District of Columbia who are 21 years of age or older.</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="Arrow Icon" class="faq-arrow">
        </div>
        <div class="faq-card">
            <h3 class="faq-question">What markets are eligible to trade in the competition?</h3>
            <p class="faq-answer">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem a, sint eaque optio dolorem hic aperiam, consequatur at deserunt eos voluptatum maxime molestias. Ea dignissimos non fuga repellat vitae molestias.</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="Arrow Icon" class="faq-arrow">
        </div>
        <div class="faq-card">
            <h3 class="faq-question">I only trade single name stocks and options -- do I qualify?</h3>
            <p class="faq-answer">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta nesciunt deleniti eos nemo temporibus veniam exercitationem laborum repellat asperiores, adipisci optio, laudantium beatae velit voluptatum. Exercitationem voluptatem ipsa animi natus..</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="Arrow Icon" class="faq-arrow">
        </div>
    </div>
</section>








 

<section class="X-section">
<div class="tweet" id="1806090628083724791"></div>
  <div class="tweet" id="1806112676562849922"></div>

  <div class="tweet" id="1806100290313040267"></div>
  </section>





  <script
    src="https://code.jquery.com/jquery-3.4.0.slim.min.js"
    integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI="
    crossorigin="anonymous"></script>
  <script src="http://platform.twitter.com/widgets.js"></script>
  <script>
    var tweets = $(".tweet");
    
    $(tweets).each(function(t, tweet) { 
      var id = $(this).attr('id');
   
      twttr.widgets.createTweet(
        id, tweet, 
        {
          conversation: 'none',    // or all
          cards: 'visible',         // or visible 
          linkColor: '#cc0000',    // default is blue
          theme: 'dark'           // or dark
        });
    });
  </script>















<section class="announcement-section">
    <img src="<?php echo get_template_directory_uri(); ?>/img/br.png" alt="Breakout Logo" class="announcement-logo">
    <div class="announcement-text">
        <p>Gelber Group is happy to announce THE BREAKOUT<br>
        – a fully remote, discretionary, simulated Futures & FX <br>trading competition that will take place this <br>September/October 2024</p>
        <a href="#" class="announcement-privacy">Privacy Policy</a>
    </div>
    <a href="#" class="announcement-button">JOIN NOW</a>
</section>



 




 

<script>
document.addEventListener('DOMContentLoaded', function() {
    const prizeCards = document.querySelectorAll('.prize-card');
    const stepCards = document.querySelectorAll('.step-card');
    const faqCards = document.querySelectorAll('.faq-card');
    const timerCard = document.querySelector('.timer-card');
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('show')) {
                entry.target.classList.add('show');
                observer.unobserve(entry.target);  
            }
        });
    }, observerOptions);

    prizeCards.forEach(card => {
        observer.observe(card);
    });

    stepCards.forEach(card => {
        observer.observe(card);
    });

    faqCards.forEach(card => {
        observer.observe(card);
    });

    observer.observe(timerCard);

    function updateCountdown() {
        const deadline = new Date('June 30, 2024 00:00:00').getTime();
        const now = new Date().getTime();
        const timeRemaining = deadline - now;

        const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

        if (timeRemaining < 0) {
            document.querySelector('.timer').innerHTML = '<div>Expired</div>';
        } else {
            document.getElementById('days').innerText = days;
            document.getElementById('hours').innerText = hours;
            document.getElementById('minutes').innerText = minutes;
            document.getElementById('seconds').innerText = seconds;
        }
    }

    setInterval(updateCountdown, 1000);
});

document.addEventListener('DOMContentLoaded', function() {
    const faqCards = document.querySelectorAll('.faq-card');

    faqCards.forEach(card => {
        card.addEventListener('click', function() {
            faqCards.forEach(otherCard => {
                if (otherCard !== card) {
                    otherCard.classList.remove('active');
                }
            });
            card.classList.toggle('active');
        });
    });
});



document.addEventListener('DOMContentLoaded', function() {
    let slideIndex = 0; // Start with the first slide
    showSlides(slideIndex);

    function showSlides(index) {
        const slides = document.querySelectorAll('.carousel-slide');
        const dots = document.querySelectorAll('.carousel-dot');

        if (index >= slides.length) {
            slideIndex = 0;
        } else if (index < 0) {
            slideIndex = slides.length - 1;
        }

        slides.forEach((slide, i) => {
            slide.style.display = i === slideIndex ? 'block' : 'none';
        });

        dots.forEach((dot, i) => {
            dot.className = dot.className.replace(' active', '');
            if (i === slideIndex) {
                dot.className += ' active';
            }
        });
    }

    document.querySelector('.carousel-prev').addEventListener('click', function() {
        showSlides(--slideIndex);
    });

    document.querySelector('.carousel-next').addEventListener('click', function() {
        showSlides(++slideIndex);
    });

    document.querySelectorAll('.carousel-dot').forEach((dot, index) => {
        dot.addEventListener('click', function() {
            showSlides(slideIndex = index);
        });
    });
});

 


</script>

<?php get_footer(); ?>