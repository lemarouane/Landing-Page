<?php
/**
 * Template Name: theBreakout Page
 * Description: A template that displays the landing page
 */

function enqueue_thebreakout_page_styles() {
    if (is_page_template('thebreakout.php')) {
    }
}
 ?>

<!-- Preconnect for performance -->

<!-- Including Google Fonts for fallback or additional styling -->

<style>
    @font-face {
        font-family: 'Acumin Pro ExtraCondensed';
        src: url('<?php echo get_template_directory_uri(); ?>/fonts/acumin-pro-extra-condensed.woff2') format('woff2'),
            url('<?php echo get_template_directory_uri(); ?>/fonts/acumin-pro-extra-condensed.woff') format('woff'),
            url('<?php echo get_template_directory_uri(); ?>/fonts/acumin-pro-extra-condensed.otf') format('opentype');
        font-weight: normal;
        font-style: normal;
    }
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

    section{
        font-family: 'Manrope', sans-serif;
    }

    .section-bg, .prizes-section, .steps-section, .contest-overview, .timer-section, .boss-section, .faq-section, .tweets-section, .announcement-section {
        background: url('<?php echo get_template_directory_uri(); ?>/img/bg.png') no-repeat center center fixed;
        background-size: cover;
        padding: 100px 20px;
        text-align: center;
        color: #fff;
        background-attachment: fixed;
    }







    .hero {
    position: relative;
    background-image: url('<?php echo get_template_directory_uri(); ?>/icons/stat.svg');
    background-size: cover;
    background-position: bottom;
    padding: 50px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    
    
    box-sizing: border-box;
    overflow: hidden;
}

.button-container{
    display: flex;
    align-items: center;
    gap: 1rem;
}
.hero-content {
    margin: 0;
    text-align: left;
    width: 50%;
    display: flex;
    align-items: start;
    flex-direction: column;
    gap: 1rem;
}

.hero-title {
    font-family: 'Satoshi', sans-serif;
    font-size: 6vw;
    line-height: 0.9;
    color: #fff;
}

  

.hero-button {
    display: inline-block;
    padding: 1em 2em;
    background: rgba(0, 156, 255, 1);
    color: #fff;
    text-decoration: none;
    border-radius: 2em;
    font-weight: normal;
    font-size: 1vw;
    margin:0;
    transition:0.3s;
}

.hero-button:hover {
    transform: translateY(-5px);
}

.hero-element {
    display: block;
    width: 80%;
    margin-top: 2rem;
}

.hero-element-updated{
    max-width: 60%;
}

.hero-logo {
    max-width: 45%;
    height: auto;
    position: relative;
    flex-shrink: 0;
    margin: 1em;
}



@media (max-width: 1200px) {
    .hero {
        padding: 30px 15px;
    }

    .hero-title {
        font-size: 5vw;
    }

   

    .hero-button {
        font-size: 16px;
    }

    .hero-logo {
        max-width: 50%;
    }
   
}
@media (max-width: 1050px) {
.hero-description {

line-height: 22px;
  
  
}
}

@media (max-width: 768px) {

    .hero {
        flex-direction: column;
        text-align: center;
        padding: 20px;
        height: auto;
        flex-wrap: wrap;
    }
    .hero-content {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1rem;
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
        margin-top: 0;
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
        margin:0;
    }
}


@media (max-width: 480px) {
    .hero-title {
        font-size: 10vw;
    }

    .hero-description {
        font-size: 5vw;
    }

    .hero-button {
        font-size: 4vw;
    }

    .hero-logo {
        max-width: 80%;
    }
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
        padding: 24px 55px;
        background: rgba(0, 156, 255, 1);
        color: #fff;
        text-decoration: none;
        border-radius: 50px;
        font-weight: bold;
        margin-top: 20px;
        text-align: center;
        border: 2px solid transparent;
        margin-top: 3em;
        font-size: 18px;
        transition: 0.3s;
    }

    .prizes-apply-button:hover {
        transform: translateY(-5px);
    }

    @media (max-width: 1224px) {

        .prize-amount{
        font-size: 60px;
    }
}
    
    @media (max-width: 900px) {
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
        text-align: left;
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
        font-family: 'Acumin Pro ExtraCondensed', sans-serif;
        font-style: italic;
        font-size: 24px;
        display: none;
        margin-top: 20px;
        padding: 16px 40px;
        background: rgba(0, 156, 255, 1);
        color: #fff;
        text-decoration: none;
        border-radius: 50px;
        font-weight: bold;
        position: absolute;
        bottom: 40px;
        left: 40px;
        margin-left: 1%;
        letter-spacing: 1px;
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
        box-sizing: border-box;
    }

    .contest-text {
        flex: 1;
        max-width: 600px;
        margin-right: 10em;
        text-align: left;
        margin-left: 0;
    }

    .contest-text h2 {
        font-family: 'Satoshi', sans-serif;
        font-size: 67px;
        font-style: normal;
        line-height: 78px;
        color: #fff;
        margin-bottom: 20px;
        margin-left: 0;
        text-align: left;
    }

    .contest-text p {
        font-family: 'Manrope', sans-serif;
        font-size: 20px;
        font-weight: 600;
        line-height: 30.4px;
        letter-spacing: -0.02em;
        margin-bottom: 20px;
        margin-left: 0;
        text-align: left;
    }

    .contest-text .contest-button {
        display: inline-block;
        padding: 24px 40px;
        background: rgba(0, 156, 255, 1);
        color: #fff;
        text-decoration: none;
        border-radius: 50px;
        font-weight: 900;
        margin-top: 1em;
        font-size: 18px;
        text-transform: uppercase;
        margin-bottom: 12%;
        margin-left: 0;
        text-align: left;
    }

    .contest-cards {
        display: flex;
        justify-content: center;
        gap: 26px;
        flex-wrap: wrap;
        box-sizing: border-box;
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
        height: 430px;
        width: 430px;
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
        text-align: left;
        border: 1px solid #0077C2;
        font-size: 16px;
        margin-left: 0;
    }

    /* Media Queries */

    @media (max-width: 768px) {
        .contest-overview {
            flex-direction: column;
            text-align: left;
            margin-top: -1px;
        }

        .contest-text {
            max-width: 100%;
            margin-right: 0;
            margin-bottom: 20px;
            margin-top: -13%;
            text-align: left;
        }

        .contest-cards {
            flex-direction: column;
            align-items: center;
            margin-left: 0;
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
            text-align: left;
            margin-left: 0;
            margin-top: 0%;
        }

        .contest-text p {
            text-align: left;
            margin-left: 0;
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
            margin-left: 0;
            margin-bottom: 2em;
        }

        .contest-text .contest-button {
            background: rgba(0, 156, 255, 1);
            margin: 0 auto;
            font-size: 13px;
            padding: 18px;
            text-align: left;
        }
    }

    .contest-card svg {
        width: 50px;   
        height: 50px;  
    }

    .contest-card1 svg,
    .contest-card2 svg,
    .contest-card3 svg,
    .contest-card4 svg {
        width: 50px;   
        height: 50px;  
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
        box-sizing: border-box;
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
        font-size: 15em;
        box-sizing: border-box;
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
        font-size: 8em;
    }

    .timer div {
        margin-bottom: 40px; /* Increased space between timer elements */
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
  
    width: 50%;
    margin-top: -5em;
    border: 0.1px solid rgba(255, 255, 255, 0.3);
    word-wrap: break-word; /* Ensures long words break to the next line */
}

.boss-card:hover {
    background: linear-gradient(0deg, rgba(10, 3, 109, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
}

.boss-card h2 {
    font-family: 'Satoshi', sans-serif;
    font-size: 38px;
    font-style: normal;
    margin-bottom: -1em;
    text-transform: uppercase;
    margin-left: 1em;
}

.boss-card h3 {
    font-family: 'Satoshi', sans-serif;
    font-style: normal;
    font-size: 38px;
    margin-bottom: 20px;
    font-weight: normal;
    margin-left: 1em;
    margin-top: 8%;
}

.boss-card p {
    font-family: 'Manrope', sans-serif;
    font-size: 35px;

    margin-top: -6em;
    margin-left: 1em;
}

/* Responsive Styles */
@media (max-width: 900px) {
    .boss-section {
        flex-direction: column;
        text-align: center;
        align-items: center;
        margin-top: -1%;
    }

    .boss-image {
        width: 100%;
        margin: 0 auto 20px;
        border-radius: 10px;
        z-index: 100;
    }

    .boss-card {
        padding: 20px;
        border-radius: 10px;
        margin-left: 0;
        margin-top: -3em;
        border-bottom: 0.1px solid rgba(255, 255, 255, 0.3);
        border-left: 0.1px solid rgba(255, 255, 255, 0.3);
        border-right: 0.1px solid rgba(255, 255, 255, 0.3);
        width: 80%;
        height: auto;
    }

    .boss-card h2 {
        font-size: 55px;
        margin-left: 0;
        margin-bottom: 10px;
        text-align: center;
    }

    .boss-card h3 {
        font-size: 40px;
        margin-left: 0;

        text-align: center;
    }

    .boss-card p {
        font-size: 24px;
        line-height: 28px;
        margin-left: 0;
      /* Adjusted margin to prevent overflow */
        text-align: center;
    }
}

@media (max-width: 480px) {
    .boss-section {
        flex-direction: column;
        text-align: center;
        align-items: center;
        margin-top: 0;
    }

    .boss-image {
        width: 100%;
        margin: 0 auto 10px;
        border-radius: 10px;
    }

    .boss-card {
        padding: 15px;
        border-radius: 10px;
        margin-left: 0;
        margin-top: 0;
        border-bottom: 0.1px solid rgba(255, 255, 255, 0.3);
        border-left: 0.1px solid rgba(255, 255, 255, 0.3);
        border-right: 0.1px solid rgba(255, 255, 255, 0.3);
        width: 90%;
        height: auto;
    }

    .boss-card h2 {
        font-size: 40px;
        margin-left: 0;
        margin-top: 0.5em;
        text-align: center;
    }

    .boss-card h3 {
        font-size: 30px;
        margin-left: 0;
        margin-top: 1em;
        text-align: center;
    }

    .boss-card p {
        font-size: 18px;
        line-height: 24px;
        margin-left: 0;
        margin-top: 1em;
        text-align: center;
    }
}

@media (max-width: 320px) {
    .boss-section {
        flex-direction: column;
        text-align: center;
        align-items: center;
        margin-top: 0;
    }

    .boss-image {
        width: 100%;
        margin: 0 auto 10px;
        border-radius: 10px;
    }

    .boss-card {
        padding: 10px;
        border-radius: 10px;
        margin-left: 0;
        margin-top: 0;
        border-bottom: 0.1px solid rgba(255, 255, 255, 0.3);
        border-left: 0.1px solid rgba(255, 255, 255, 0.3);
        border-right: 0.1px solid rgba(255, 255, 255, 0.3);
        width: 95%;
        height: auto;
    }

    .boss-card h2 {
        font-size: 35px;
        margin-left: 0;
        margin-top: 0.5em;
        text-align: center;
    }

    .boss-card h3 {
        font-size: 25px;
        margin-left: 0;
        margin-top: 1em;
        text-align: center;
    }

    .boss-card p {
        font-size: 16px;
        line-height: 22px;
        margin-left: 0;
        margin-top: 1em;
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
        min-height: 400px;
    }

    .tweet {
        margin: 10px 0;
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
        overflow: hidden;
    }

    .faq-card.show {
        transform: translateY(0);
        opacity: 1;
    }

    .faq-question {
        font-family: 'Satoshi', sans-serif;
        font-size: 32px;
        font-style: normal;
        
        letter-spacing: 0.1px;
        text-align: left;
        color: #fff;
        margin-bottom: 10px;
        width: 90%;
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        font-family: 'Manrope', sans-serif;
        font-size: 16px;
        font-weight: 600;
        line-height: 22.4px;
        letter-spacing: -0.02em;
        text-align: left;
        color: #fff;
        transition: max-height 0.5s ease-in-out, padding 0.5s ease-in-out;
    }

    .faq-card.active .faq-answer {
        max-height: fit-content;
        padding-top: 10px;
        width: 80%;
    }

   

    .faq-list{
        margin-bottom: 10px;
    }

    .faq-arrow {
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        transition: transform 0.3s ease-in-out;
        margin-top: 0;
    }

    .faq-card.active .faq-arrow {
        transform: translateY(-50%) rotate(45deg);
        margin-top: 0;
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
            font-size: 18px;
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
        align-items: stretch;
        gap: 3rem;
        width: 100%;
        margin-top: 7em;
        height: 75%;
    }

    .card {
        
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        width: 32%;
        height: auto;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

   

    .card-icon {
        width: 139px;
        height: 135px;
        margin-top: -13%;
    }

    .card-title {
        font-family: 'Satoshi', sans-serif;
        font-style: normal;
        
        font-size: 34px;
        font-weight: 700;
        margin-bottom: 10px;
        color: black;
        
    }

    .card-description {
        font-family: 'Manrope', sans-serif;
        font-size: 22px;
        color: #000;
    }

    @media (max-width: 1200px) {
        .card-title {
            font-size: 26px;  
     }

    .card-description {
       
        font-size: 16px;
        
    }
    }

    @media (max-width: 800px) {

        .section-bg {
        
        height: auto;
    }
        .section-title {
            font-size: 48px;
            line-height: 48px;
            padding: 0 20px;
        }

        .card-container {
            flex-direction: column;
            height: auto;
        }

        .card {
            width: 98%;
            margin-bottom: 20px;
            height: 100%;
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
            font-size: 20px;
            margin-top: -5%;
        }
    }


    /* width */
    ::-webkit-scrollbar {
        width: 12px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: transparent;
        border: none;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: linear-gradient(45deg, #0077C2, #00d4ff); 
        border-radius: 10px;
        border: none;
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
        height: 900px;
    }

    .carousel-slide {
        opacity: 0;
        visibility: hidden;
        transition: opacity 1s ease-in-out, visibility 1s;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .carousel-slide.active {
        opacity: 1;
        visibility: visible;
        position: relative;
    }

    .carousel-slide img {
        width: 100%;
        height: 100%;
        object-fit: fill;
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

    .justify-end {
        justify-content: flex-end !important;
        margin-right:2rem
    }

    .carousel-overlay-locations {
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

    .carousel-text {
        text-align: center;
        padding: 20px;
        border-radius: 10px;
        max-width: 80%;
        z-index: 445;
       
    display: flex;
    flex-direction: column;
    align-items: center;
    }

    .carousel-text h2 {
        font-family: 'Satoshi', sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 70px;
        line-height: 70px;
        margin-bottom: 10px;
        margin-top: -14%;
    }

    .carousel-text h3 {
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
        font-size: 21px;
        margin-bottom: 1rem;
        margin-top: 2rem;
        color:white;
        width: 60%;
    }

    .carousel-text h4 {
        font-family: 'Manrope', sans-serif;
        line-height: 25px;
        font-size: 18px;
        margin-bottom: 20px;
        
    }

    .carousel-button {
        font-size: 18px;
        display: inline-block;
        padding: 25px 50px;
        background-color: rgba(0, 156, 255, 1);
        color: #fff;
        text-decoration: none;
        border-radius: 50px;
        font-weight: bold;
        text-transform: uppercase;
        margin-top: 1%;
        z-index: 444;
        cursor: pointer;
        transition:0.3s;
    }

    .carousel-button:hover{
        transform: translateY(-5px);
    }

    .carousel-button-locations {
        font-size: 18px;
        display: inline-block;
        padding: 25px 55px;
        background-color: rgba(0, 156, 255, 1);
        color: #fff;
        text-decoration: none;
        border-radius: 50px;
        font-weight: bold;
        
        text-transform: uppercase;

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
        margin-left: 35em;
        text-transform: uppercase;
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
        background-image: url('<?php echo get_template_directory_uri(); ?>/icons/slider-left.svg');
    }

    .carousel-next {
        right: 0;
        background-image: url('<?php echo get_template_directory_uri(); ?>/icons/slider-right.svg');
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

    @media (max-width: 768px) {
        .carousel-container {
            height: 500px;
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

    @media (max-width: 500px) {

    .carousel-text p {
       
        width: 100%;
    }

    .carousel-container {
            height: 350px;
        }

        .carousel-button {
            padding: 12px 16px;
            font-size: 13px;
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

    


/* Add animation for the modal */
@keyframes modalOpen {
    from {
        transform: scale(0);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}

@keyframes modalClose {
    from {
        transform: scale(1);
        opacity: 1;
    }
    to {
        transform: scale(0);
        opacity: 0;
    }
}

.modal.show {
    animation: modalOpen 0.3s forwards;
}

.modal.hide {
    animation: modalClose 0.3s forwards;
}

/* Hide modal by default */
.modal {
    display: none;
    opacity: 0;
    transform: scale(0);
}


/*candivate section*/

#candidate {
 
  width: 100%;
  background: url('<?php echo get_template_directory_uri(); ?>/img/bg.png') no-repeat center center fixed;
  
    background-size: cover
}

#candidate .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 100%;
  padding: 4rem;
}

#candidate .left {
 height: 70%;
 display: flex;
 flex-direction: column;
 gap: 1rem;
 justify-content: center;
 align-items: flex-start;
width: 40%;
color:white;
}

#candidate .right {
 
  display: flex;

  gap: 1rem;
  justify-content: center;
   width: 51%;
   height: 90%;
   
 }

 #candidate .left-card {
  display: flex;
  flex-direction: column;
  gap: 1rem;
  
 }

 #candidate .right-card {
  display: flex;
  flex-direction: column;
  gap: 1rem;
  justify-content: flex-end;
 }

 #candidate .card {
  background-color: #1B1B1B;
  height: 45%;
  
  color: white;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  border-radius: 10px;
  transition: all 0.3s ease-in-out;
  border: 1px solid #1B1B1B;
  width: 100%;
  text-align:left;
 
}

#candidate .card:hover {
  background-color: white;
  color: black;
}

#candidate .card a {
  color: black;
  text-decoration: none;
  opacity: 0;
  display:flex;
  align-items: center;
  transition: opacity 0.3s ease-in-out;
}

#candidate .card:hover a {
  opacity: 1;
}


#candidate .card:hover .logo svg {
  filter: invert(1);
}

#candidate .card h1{
  font-size: 28px;
  font-weight: 700;
 
   }
  
   #candidate .content h2{
    margin: 0;
   }

  #candidate .card p{
    font-size: 18px;
    font-weight: 600;
  }

  #candidate .transaprent-button{
    background: transparent;
    
    border: 1px solid #0173BC;
    border-radius: 126px;
    font-size: 12px;
    font-weight: 500;
    padding: 16px 24px 16px 24px;
    color: white;
    
  }

  #candidate .bg-blue {
    
padding: 16px 24px 16px 24px;
color: white;
border-radius: 126px;
background: #009CFF;
font-weight: 700;
font-size: 16px;
border: none;
transition:0.3s;
cursor: pointer;
  }

  #candidate .bg-blue:hover {
    
    transform:translateY(-5px);
      }

  #candidate .left h1{

font-size: 48px;
font-weight: 700;
margin:0;
width: 80%;

  }

  #candidate .left p{
    font-size: 18px;
    font-weight: 600;
  }

  @media screen and (max-width: 1200px) {
    #candidate .left h1 {
        font-size: 38px;
        width: 90%;
    }

    #candidate  {
 height: auto;
}
    #candidate .container {
  flex-direction: column;
  gap:2rem;
  padding: 2rem;
}

#candidate .left {
 width: 100%;
}

#candidate .right {

   width: 100%; 
 }

 #candidate .card {

height: 50%;
}

#candidate .left-card {
    width: 50%;
}

#candidate .right-card {
    width: 50%;
}
  }

  @media screen and (max-width: 600px) {


    #candidate .left h1 {
        font-size: 36px;
        width: 100%;
    }

    #candidate .left p {
        font-size: 16px;
    }
    #candidate .right {

        flex-direction: column;
}

#candidate .card {

height: 100%;
}

#candidate .left-card {
    flex-direction: column;
 width: 100%;
}

#candidate .right-card {
    flex-direction: column;
 width: 100%;
}
  }
  @media screen and (max-width: 450px) {
  
  #candidate .card a {
    color: white;
  opacity: 1;
}

#candidate .card a svg {
  filter: invert(1);
}
  }

/* Modal styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background: rgba(0, 0, 0, 0.4);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}

.modal-content {
    background: linear-gradient(0deg, rgba(10, 3, 109, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
    margin: 5% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 90%;
    height: 35em;
    text-align: left;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    color: #fff;
    position: relative;
}

.close-button {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close-button:hover,
.close-button:focus {
    color: #fff;
    text-decoration: none;
    cursor: pointer;
}

.modal-title {
    font-size: 36px;
    margin-bottom: 24px;
    margin-left: 1em;
}

.modal-subtitle {
    font-size: 28px;
    margin-top: 34px;
    margin-bottom: 10px;
    margin-left: 43px;
}

.modal-paragraph {
    font-size: 18px;
    line-height: 1.5;
    margin-bottom: 20px;
    margin-left: 2em;
}

.modal-list {
    list-style: none;
    padding: 0;
    font-size: 18px;
    line-height: 1.5;
    margin-left: 2em;
}

.modal-list li {
    margin-bottom: 10px;
    display: flex;
    align-items: center;
}

.modal-list img {
    margin-right: 10px;
}

.modal-apply-button {
    display: inline-block;
    padding: 10px 20px;
    background: rgba(0, 156, 255, 1);
    color: #fff;
    text-decoration: none;
    border-radius: 50px;
    font-weight: bold;
    position: absolute;
    left: 56px;
    bottom: 20px;
}

body.modal-open {
    overflow: hidden;
}

body.modal-open #content {
    filter: blur(10px);
    -webkit-filter: blur(10px);
    transition: filter 0.3s ease;
}

@media (max-width: 768px) {

    .modal-content {
        width: 90%;
        height: 58em;
        padding: 20px;
    }

    .modal-title {
        font-size: 28px;
        margin-bottom: 20px;
    }

    .modal-subtitle {
        font-size: 22px;
        margin-bottom: 10px;
    }

    .modal-paragraph {
        font-size: 16px;
        line-height: 1.4;
        margin-bottom: 15px;
    }

    .modal-list {
        font-size: 16px;
        line-height: 1.4;
    }

    .modal-apply-button {
        font-size: 16px;
        padding: 10px 20px;
        margin-left: 18%;    }
}

#ceo{
  width: 100%;

  background: url('<?php echo get_template_directory_uri(); ?>/img/bg.png') no-repeat center center fixed;
  background-size: cover;
  color: white;
 
}

#ceo .container{
  display: flex;
  align-items: stretch;
  
  padding-bottom:2rem;
}

#ceo .left{
  height: 90%;
  border-radius: 10px;
  width: 45%;
}

#ceo .left img{
  width: 100%;
  height: 100%;
  object-fit: fill;
  border-radius: 10px;
}

#ceo .right{
  
  display: flex;
  flex-direction: column;
  justify-content: center;
  background: linear-gradient(0deg, rgba(10, 3, 109, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
  border: 0.5px solid #FFFFFF4D;
  border-radius: 0 10px 10px 0;
  padding: 2rem;
  width: 45%;
    gap:2rem;
    
    height: auto;
   
}

#ceo .right h1{
 
font-size: 38px;
font-weight: 700;
line-height: 41.8px;
letter-spacing: -0.02em;
text-align: left;
margin: 0;

}

#ceo .right h2{
 
  font-size: 38px;
  font-weight: 700;
  margin: 0;
  
  
  }

#ceo .right p{
 
 
  font-size: 35px;
  font-weight: 600;
  line-height: 45.5px;
  margin: 0;

  
  
  }

  @media (max-width: 1400px) {

    #ceo .right{
  
 
    gap: 4rem;
 
}
#ceo .right p{
       
       
       font-size: 30px;
       font-weight: 600;

       
       
       }
  }


  @media (max-width: 1200px) {
    #ceo .right h1{
 
      font-size: 30px;
      font-weight: 700;
      margin:0
      
      }
      
      #ceo .right h2{
       
        font-size: 30px;
        font-weight: 700;
        margin-bottom: 2rem;
        
        }
      
      #ceo .right p{
       
       
        font-size: 26px;
        font-weight: 600;

        
        
        }

        #ceo .right{
         
         width: 50%;
       }

        #ceo .left{
         
          width: 45%;
        }
  }


  
  @media (max-width: 980px) {
    #ceo .right p{
        font-size:20px;
        line-height: normal;
    }
#ceo .right{

    
gap: 1rem;
}

}

  @media (max-width: 800px) {
    #ceo{
      width: 100%;
      height: auto;
  
      
    }
    
    #ceo .container{
        align-items: center;
      flex-direction: column;
    }

    #ceo .left{
     
      width: 90%;
    }
    
  
    
    #ceo .right{
        border-top:none;
      width: 80%;
      border-radius: 0px 0px 10px 10px;
    }

    #ceo .right p{
       
       
       font-size: 30px;
       font-weight: 600;

       
       
       }
      
       #ceo .right h1{
 
 font-size: 36px;
 font-weight: 700;

 
 }
 
 #ceo .right h2{
  
   font-size: 32px;
   font-weight: 700;
   margin-bottom: 2rem;
   
   }
    
  }

#gelbertgroup {
    background: url('<?php echo get_template_directory_uri(); ?>/img/bg.png') no-repeat center center fixed;
    background-size: cover;
  width: 100%;
 padding-bottom: 3rem;
  color: white; 
  position: relative;
}



#gelbertgroup .title h1{
 font-size: 64px;
 text-align: center;
 font-weight: 700;
margin: 0;
}

#gelbertgroup .container {
  display: flex;
  justify-content: space-between;
  align-items: stretch;
  height: 90%;
  padding: 2rem;
  gap: 2rem;
 
}

#gelbertgroup .card{
  color: white;
  background: linear-gradient(0deg, rgba(36, 35, 52, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
  width: 100%;
  height:auto;
 border: 1px #FFFFFF4D solid;
 border-radius: 10px;
 padding: 2rem;
 display: flex;
 flex-direction: column;
 justify-content: space-between;
 text-align:left;
 gap: 2rem;
 
}

#gelbertgroup .content{
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
   
 
}

#gelbertgroup .content h1{
  margin-top:0;
  font-size: 32px;
  font-weight: 700;
 
  
}

#gelbertgroup .content p{
 
  font-size: 24px;
  font-weight: 600;
 
  
}

#gelbertgroup .button button{
  align-self: flex-end;
  font-size: 20px;
  font-weight: 900;
  padding: 16px 24px;
 background: #009CFF;
 border: none;
 border-radius: 100px;
 color: white;
 cursor: pointer;
}



#gelbertgroup .card:hover{
  background: linear-gradient(0deg, rgba(10, 3, 109, 0.7) 0%, rgba(36, 35, 52, 0) 100%);

}


#gelbertgroup .card img, .check{
  opacity: 0;
transition: 0.4s;
}

#gelbertgroup .card:hover img{
  opacity: 1;

}


#gelbertgroup .card:hover .check{
  opacity: 1;

}

@keyframes grow {
  0% {
      transform: scale(0.5);
      opacity: 0;
  }
  100% {
      transform: scale(1);
      opacity: 1;
  }
}


#gelbertgroup .criteria {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url('<?php echo get_template_directory_uri(); ?>/img/bg.png') no-repeat center center fixed;
    background-size: cover;
  z-index: 444;
  border-radius: 10px;
padding: 3rem;
  display: none;
}

#gelbertgroup .criteria.show {
  display: block;
}






#gelbertgroup .overlay{
  display: flex;
  position: relative;
  width: 80%;
  flex-direction: column;
  align-content: center;
  padding: 2rem;
  background: linear-gradient(0deg, rgba(10, 3, 109, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
  border-radius: 10px;
  border: 0.5px solid #FFFFFF4D;
  justify-content: center;
  margin-left: auto;
  margin-right: auto;
  gap: 1rem;
  z-index: 444;
  animation: grow 0.5s forwards;
}

#gelbertgroup .overlay.show {
  display: block;
  animation: grow 0.5s forwards;
}

#gelbertgroup .header h1{
  font-size: 78px;
  font-weight: 900;
  margin: 0;
  
}

#gelbertgroup .header p{
  font-size: 18px;
  font-weight: 500;
  
}


#gelbertgroup .requirement h1{
  font-size: 48px;
  font-weight: 900;
  margin: 0;
  
}


#gelbertgroup .requirement p{
  font-size: 18px;
  font-weight: 500;
  
}


#gelbertgroup .close{
  position: absolute;
  top: 0;
  right: 0;
  padding: 1rem;
  cursor: pointer;
  transition:0.3s;
}




#gelbertgroup .close svg{
   transition:0.3s;
}

#gelbertgroup .close svg:hover{
    transform: rotate(90deg) scale(1.1);
}

#gelbertgroup .button button{

  font-size: 20px;
  font-weight: 900;
  padding: 16px 24px;
  background: #009CFF;
 border: none;
 border-radius: 100px;
 color: white;
 cursor: pointer;
 transition:0.3s;
}

#gelbertgroup .button button:hover{

transform: translateY(-5px);
}

#gelbertgroup .list p{
  display: flex;
  align-items: center;
  gap: 1rem;
}

#gelbertgroup a{
  color:white;
  text-decoration: none;
}


@media screen and (max-width: 1300px) {
  #gelbertgroup .container {
   gap: 0.5rem;
   padding: 1rem;
   
  }

  #gelbertgroup .title h1{
    font-size: 50px;
  }

  #gelbertgroup .requirement h1{
    font-size: 30px;
   margin: 0;
    
  }
  
  
  #gelbertgroup .requirement p{
    font-size: 16px;
   
    
  }

  #gelbertgroup .header h1{
    font-size: 38px;
    
  }
  #gelbertgroup .content p{
    font-size: 18px;
    
  }

  

 
}


@media screen and (max-width: 900px) {

  #gelbertgroup {
    height: auto;
    
  }

 


  #gelbertgroup .title h1{
    font-size: 36px;
  }

  #gelbertgroup .container {
    flex-direction: column;
    padding: 1rem;
   
  }


 

  #gelbertgroup .card button{
    margin-top: 5rem;
  }

}



@media screen and (max-width: 700px) {

    #gelbertgroup .criteria {
    padding: 0rem;
}

#gelbertgroup .overlay{
    width: 90%;
}
}
@media screen and (max-width: 450px) {

    #gelbertgroup .card img, .check{
  opacity: 1;

}
  
#gelbertgroup .card{
    gap:0;
    pointer-events: visible!important;
   
}

}





#timer{
  width: 100%;
  
  background: url('<?php echo get_template_directory_uri(); ?>/img/bg.png') no-repeat center center fixed;
  background-size: cover;
  color: white;
  padding-bottom:2rem ;
}

#timer .container{
  display: flex;
  align-items: center;
  align-content: center;
  justify-content: center;
  width: 90%;
  margin-left: auto;
  margin-right: auto;
  flex-direction: column;
  gap: 2rem;
  padding: 2rem;
  border-radius: 10px;
  border: 0.5px solid #FFFFFF4D;
  background: linear-gradient(0deg, rgba(10, 3, 109, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
  

}
#timer .header h1{

  font-size: 48px;
  font-weight: 700;
  line-height: 52.8px;
  letter-spacing: -0.02em;
  text-align: center;
  
  }

#timer .content{
  display: flex;
  width: 100%;
  justify-content: space-evenly;
}


#timer .time{
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
  width: 50%;
  justify-content: space-evenly;
  
}
  
#timer .clock{
  display: flex;
  flex-direction: column;
  border-right: 3px solid #009CFF;
  width: 50%;
}

#timer .border-none {
  border: none;
}

#timer .clock h1{
  
  font-size: 132px;
  font-weight: 900;
  line-height: 145.2px;
  letter-spacing: -0.02em;
  text-align: center;
  margin: 0;
}

#timer .clock p{

font-size: 60px;
font-weight: 700;
line-height: 66px;
letter-spacing: -0.02em;
text-align: center;
margin-top:2rem ;

}

#timer .footer {
  display: flex;
  justify-content: center;
  gap: 2rem;
  align-items: center;

}

#timer .footer {
  display: flex;
  justify-content: center;
  gap: 1rem;
  align-items: center;

}

#timer .cursor svg {
  display: flex;
  justify-content: center;
  gap: 1rem;
  align-items: center;

}

#timer .cursor:hover svg {
  transform: rotate(45deg) scale(1.1);

}

#timer .cursor{
    display: flex;
    align-items: center;
    cursor: pointer;
}

#timer a{
    color:white;
    text-decoration: none;
}

#timer .cursor svg{
    margin-left: 10px;
    cursor: pointer;
    transition:0.3s;

}

#timer .cursor:hover svg{
    transform: rotate(45deg) scale(1.1);
}

@media (max-width: 1200px) {

#timer .clock h1{
  
  font-size: 100px;
  font-weight: 900;
  
  margin: 0;
}

#timer .clock p{

font-size: 36px;
font-weight: 700;

margin: 0;
}

}

@media (max-width: 700px) {

  #timer{
    height: auto;
  }

  #timer .content{
    display: flex;
    width: 100%;
    justify-content: space-evenly;
    flex-direction: column;

  }

  #timer .bottom-border{
    border-bottom: 2px solid #009CFF;
  }

  #timer .time{
    width: 100%;
  }
  

  #timer .none{
    border-right: none;
  }

  
  
  }

  @media screen and (max-width: 450px) {
    #timer .clock h1{
    font-size: 80px;

  }

  #timer .clock p {
    font-size: 30px;
  }
  
  }

  #miniFooter{
  height: 100%;
  width: 100%;
  background: url('<?php echo get_template_directory_uri(); ?>/img/bg.png') no-repeat center center fixed;
      background-size: cover;
  color: white;
}

#miniFooter a{
text-decoration: none;
color:white;
}

#miniFooter .container{
  display: flex;
  
padding: 3rem;
 align-items: center;
  justify-content: center;
 
}

#miniFooter .content{
  display: flex;
  flex-direction: column;
  width: 34%;
  gap: 1rem;
}



#miniFooter .button a{
  
  font-size: 16px;
  font-weight: 700;
  line-height: 24px;
  text-align: left;
background-color: #009CFF;
padding: 16px 24px 16px 24px;
border-radius: 128px;
border: none;
color: white;
cursor: pointer;
transition: 0.3s;

}


#miniFooter .button a:hover{
  
  transform: translateY(-5px);

}




@media only screen and (max-width: 950px) {
  #miniFooter .container{
    flex-direction: column;
    gap: 2rem;
   padding: 2rem;
  }

  #miniFooter .content{
    display: flex;
    flex-direction: column;
    width: 100%;
    gap: 0;
  }

  #miniFooter .content p{
    margin-bottom: 10px;
  }
}


#tweeter .container {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 2rem;
    padding: 2rem;
 color:white;
    background: url('<?php echo get_template_directory_uri(); ?>/img/bg.png') no-repeat center center fixed;
   
    margin-left: auto;
    margin-right: auto;
    
}


</style>


<section class="hero">
    <div class="hero-content">
    <img src="<?php echo get_template_directory_uri(); ?>/icons/br.svg" alt="Breakout Element" class="hero-element">
        <p class="hero-description">Gelber Group is excited to announce theBreakout <br>– a fully remote, discretionary, simulated Futures & FX trading competition running this September 9th -October 31st! Traders will compete for $35,000 in cash prizes as well as the opportunity to be hired by one of Gelber’s trading teams.  See below for more details!</p>
        <div class="button-container">
        <a target="_blank" id="applynow" class="hero-button">APPLY NOW</a>
        <a href="https://www.gelbergroup.com/thebreakout/official-rules/" target="_blank"  class="hero-button">OFFICIAL RULES</a>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/hero.svg" alt="Breakout Logo" class="hero-logo">
</section>

<section class="section-bg">
    <h2 class="section-title">What is theBreakout?</h2>
    <div class="card-container">
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/trophy.svg" alt="Trophy Icon" class="card-icon">
            <h3 class="card-title">Do you want to Breakout?</h3>
            <p class="card-description">Are you a profitable trader who is obsessed with the challenge of navigating today’s complex financial markets?  Would you like to compete for $35,000 in cash prizes AND a chance to work for a top proprietary trading firm? We’re looking for traders who want to BREAKOUT.</p>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/chart.svg" alt="Chart Icon" class="card-icon">
            <h3 class="card-title">Do you have the Skills?</h3>
            <p class="card-description">Gelber wants to see your trading SKILLS!  Cash prizes will be awarded to the top P&L performers, but we are even more interested in your skills and trading approach.  We will evaluate your trading over 8 weeks with a number of statistical and qualitative metrics, and select traders will be considered for employment on one of Gelber’s trading teams in Chicago, New York, or even remote.</p>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/skills.svg" alt="Skills Icon" class="card-icon">
            <h3 class="card-title">Do you want to evolve as a trader?</h3>
            <p class="card-description">You will receive valuable feedback and mentorship from professional veteran traders with decades of experience in generating 7-figure P&Ls. You will receive daily trading statistics to help you learn, grow, and refine your craft.  All this, while trading on one of the world’s premier Futures & FX trading platforms.</p>
        </div>
    </div>
</section>

<section class="prizes-section">
    <h2 class="prizes-title">$35,000 IN CASH PRIZES</h2>
    <p class="prizes-description">Cash prizes will be strictly for the top three P&L performers:</p>
    <div class="prizes-cards">
        <div class="prize-card">
            <div class="prize-amount">$20,000
                <img src="<?php echo get_template_directory_uri(); ?>/icons/gold.svg" alt="Gold Star" class="prize-star">
            </div>
            <p class="prize-place">1<sup>st</sup> PLACE</p>
        </div>
        <div class="prize-card">
            <div class="prize-amount">$10,000
                <img src="<?php echo get_template_directory_uri(); ?>/icons/silver.svg" alt="Silver Star" class="prize-star">
            </div>
            <p class="prize-place">2<sup>nd</sup> PLACE</p>
        </div>
        <div class="prize-card">
            <div class="prize-amount">$5,000
                <img src="<?php echo get_template_directory_uri(); ?>/icons/bronze.svg" alt="Bronze Star" class="prize-star">
            </div>
            <p class="prize-place">3<sup>rd</sup> PLACE</p>
        </div>
    </div>
    <a  target="_blank" id="applynow" class="prizes-apply-button">Apply now</a>
</section>

<section id="gelbertgroup">
        <div class="title">
            <h1>3 Easy Steps to Apply to theBreakout</h1>
        </div>
        <div class="container">
            <div class="card">
                <div class="content">
                    <h1>Step 1</h1>
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/curve.svg" alt="">
                    <p>Do you fit the criteria?</p>
                </div>
                <div class="button">
                    <button id="check" class="check">CHECK NOW</button>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h1>Step 2</h1>
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/curve.svg" alt="">
                    <p>Fill out our detailed application.</p>
                </div>
                <div class="button">
    <button class="check" id="applynow" onclick="redirectApplyNow()">APPLY NOW</button>
</div>
            </div>
            <div class="card">
                <div class="content">
                    <h1>Step 3</h1>
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/curve.svg" alt="">
                    <p>Please await further communication from us as we finalize the selection of Traders
throughout July and August. Once chosen, you will receive onboarding instructions that
will commence during the first week of September.</p>
                </div>
                <div class="button">
                </div>
            </div>
        </div>
        <div class="criteria">
            <div class="overlay">
                <div class="close">
                    <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.4 30.875L8.125 28.6L17.225 19.5L8.125 10.4L10.4 8.125L19.5 17.225L28.6 8.125L30.875 10.4L21.775 19.5L30.875 28.6L28.6 30.875L19.5 21.775L10.4 30.875Z" fill="#E8EAED"/>
                    </svg>
                </div>
                <div class="header">
                </div>
                <div class="requirement">
                    <h1>The ideal candidate for theBreakout</h1>
                </div>
                <div class="list">
                    <p><span><svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.39165 26.1875L7.09581 22.3208L2.74581 21.3542L3.16873 16.8833L0.208313 13.5L3.16873 10.1167L2.74581 5.64583L7.09581 4.67917L9.39165 0.8125L13.5 2.56458L17.6083 0.8125L19.9041 4.67917L24.2541 5.64583L23.8312 10.1167L26.7916 13.5L23.8312 16.8833L24.2541 21.3542L19.9041 22.3208L17.6083 26.1875L13.5 24.4354L9.39165 26.1875ZM10.4187 23.1062L13.5 21.7771L16.6416 23.1062L18.3333 20.2062L21.6562 19.4208L21.3541 16.0375L23.5896 13.5L21.3541 10.9021L21.6562 7.51875L18.3333 6.79375L16.5812 3.89375L13.5 5.22292L10.3583 3.89375L8.66665 6.79375L5.34373 7.51875L5.64581 10.9021L3.4104 13.5L5.64581 16.0375L5.34373 19.4812L8.66665 20.2062L10.4187 23.1062ZM12.2312 17.7896L19.0583 10.9625L17.3666 9.21042L12.2312 14.3458L9.63331 11.8083L7.94165 13.5L12.2312 17.7896Z" fill="white"/>
                    </svg></span>1-2+ years of profitable experience in Futures &amp; FX Markets.</p>
                    <p><span><svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.39165 26.1875L7.09581 22.3208L2.74581 21.3542L3.16873 16.8833L0.208313 13.5L3.16873 10.1167L2.74581 5.64583L7.09581 4.67917L9.39165 0.8125L13.5 2.56458L17.6083 0.8125L19.9041 4.67917L24.2541 5.64583L23.8312 10.1167L26.7916 13.5L23.8312 16.8833L24.2541 21.3542L19.9041 22.3208L17.6083 26.1875L13.5 24.4354L9.39165 26.1875ZM10.4187 23.1062L13.5 21.7771L16.6416 23.1062L18.3333 20.2062L21.6562 19.4208L21.3541 16.0375L23.5896 13.5L21.3541 10.9021L21.6562 7.51875L18.3333 6.79375L16.5812 3.89375L13.5 5.22292L10.3583 3.89375L8.66665 6.79375L5.34373 7.51875L5.64581 10.9021L3.4104 13.5L5.64581 16.0375L5.34373 19.4812L8.66665 20.2062L10.4187 23.1062ZM12.2312 17.7896L19.0583 10.9625L17.3666 9.21042L12.2312 14.3458L9.63331 11.8083L7.94165 13.5L12.2312 17.7896Z" fill="white"/>
                    </svg></span> U.S. Resident and 21+.</p>
                    <p><span><svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.39165 26.1875L7.09581 22.3208L2.74581 21.3542L3.16873 16.8833L0.208313 13.5L3.16873 10.1167L2.74581 5.64583L7.09581 4.67917L9.39165 0.8125L13.5 2.56458L17.6083 0.8125L19.9041 4.67917L24.2541 5.64583L23.8312 10.1167L26.7916 13.5L23.8312 16.8833L24.2541 21.3542L19.9041 22.3208L17.6083 26.1875L13.5 24.4354L9.39165 26.1875ZM10.4187 23.1062L13.5 21.7771L16.6416 23.1062L18.3333 20.2062L21.6562 19.4208L21.3541 16.0375L23.5896 13.5L21.3541 10.9021L21.6562 7.51875L18.3333 6.79375L16.5812 3.89375L13.5 5.22292L10.3583 3.89375L8.66665 6.79375L5.34373 7.51875L5.64581 10.9021L3.4104 13.5L5.64581 16.0375L5.34373 19.4812L8.66665 20.2062L10.4187 23.1062ZM12.2312 17.7896L19.0583 10.9625L17.3666 9.21042L12.2312 14.3458L9.63331 11.8083L7.94165 13.5L12.2312 17.7896Z" fill="white"/>
                    </svg></span>Ability to demonstrate a defined trading style.</p>
                    <p><span><svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.39165 26.1875L7.09581 22.3208L2.74581 21.3542L3.16873 16.8833L0.208313 13.5L3.16873 10.1167L2.74581 5.64583L7.09581 4.67917L9.39165 0.8125L13.5 2.56458L17.6083 0.8125L19.9041 4.67917L24.2541 5.64583L23.8312 10.1167L26.7916 13.5L23.8312 16.8833L24.2541 21.3542L19.9041 22.3208L17.6083 26.1875L13.5 24.4354L9.39165 26.1875ZM10.4187 23.1062L13.5 21.7771L16.6416 23.1062L18.3333 20.2062L21.6562 19.4208L21.3541 16.0375L23.5896 13.5L21.3541 10.9021L21.6562 7.51875L18.3333 6.79375L16.5812 3.89375L13.5 5.22292L10.3583 3.89375L8.66665 6.79375L5.34373 7.51875L5.64581 10.9021L3.4104 13.5L5.64581 16.0375L5.34373 19.4812L8.66665 20.2062L10.4187 23.1062ZM12.2312 17.7896L19.0583 10.9625L17.3666 9.21042L12.2312 14.3458L9.63331 11.8083L7.94165 13.5L12.2312 17.7896Z" fill="white"/>
                    </svg></span>A desire to advance your career by joining Gelber Group.
                    </p>
                    <p><span><svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.39165 26.1875L7.09581 22.3208L2.74581 21.3542L3.16873 16.8833L0.208313 13.5L3.16873 10.1167L2.74581 5.64583L7.09581 4.67917L9.39165 0.8125L13.5 2.56458L17.6083 0.8125L19.9041 4.67917L24.2541 5.64583L23.8312 10.1167L26.7916 13.5L23.8312 16.8833L24.2541 21.3542L19.9041 22.3208L17.6083 26.1875L13.5 24.4354L9.39165 26.1875ZM10.4187 23.1062L13.5 21.7771L16.6416 23.1062L18.3333 20.2062L21.6562 19.4208L21.3541 16.0375L23.5896 13.5L21.3541 10.9021L21.6562 7.51875L18.3333 6.79375L16.5812 3.89375L13.5 5.22292L10.3583 3.89375L8.66665 6.79375L5.34373 7.51875L5.64581 10.9021L3.4104 13.5L5.64581 16.0375L5.34373 19.4812L8.66665 20.2062L10.4187 23.1062ZM12.2312 17.7896L19.0583 10.9625L17.3666 9.21042L12.2312 14.3458L9.63331 11.8083L7.94165 13.5L12.2312 17.7896Z" fill="white"/>
                    </svg>
                </span>Availability is required in early September for training modules and availability for
trading extends from September 9th to October 31st . The individual will need to
communicate several times per week for check-ins, feedback, and maintaining a
trading reflection journal.</p>
                    <p><span><svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.39165 26.1875L7.09581 22.3208L2.74581 21.3542L3.16873 16.8833L0.208313 13.5L3.16873 10.1167L2.74581 5.64583L7.09581 4.67917L9.39165 0.8125L13.5 2.56458L17.6083 0.8125L19.9041 4.67917L24.2541 5.64583L23.8312 10.1167L26.7916 13.5L23.8312 16.8833L24.2541 21.3542L19.9041 22.3208L17.6083 26.1875L13.5 24.4354L9.39165 26.1875ZM10.4187 23.1062L13.5 21.7771L16.6416 23.1062L18.3333 20.2062L21.6562 19.4208L21.3541 16.0375L23.5896 13.5L21.3541 10.9021L21.6562 7.51875L18.3333 6.79375L16.5812 3.89375L13.5 5.22292L10.3583 3.89375L8.66665 6.79375L5.34373 7.51875L5.64581 10.9021L3.4104 13.5L5.64581 16.0375L5.34373 19.4812L8.66665 20.2062L10.4187 23.1062ZM12.2312 17.7896L19.0583 10.9625L17.3666 9.21042L12.2312 14.3458L9.63331 11.8083L7.94165 13.5L12.2312 17.7896Z" fill="white"/>
                    </svg></span>If you are currently employed or trading full-time from home, we understand that
you are focused on generating income. Showcase your trading prowess by
replicating your best trades on our system and demonstrating your skills!</p>
                </div>
                <div class="button"> 
                <button > <a  id="applynow" target="_blank" >APPLY NOW</a></button>
                </div>
            </div>
        </div>
</section>



<section id="timer">
        <div class="container">
            <div class="header">
                <h1>theBreakout starts in</h1>
            </div>
            <div class="content">
                <div class="time bottom-border">
                    <div class="clock">
                        <h1 id="days"></h1>
                        <p>Days</p>
                    </div>
                    <div class="clock none">
                        <h1 id="hours"></h1>
                        <p>Hours</p>
                    </div>
                </div>
                <div class="time ">
                    <div class="clock">
                        <h1 id="minutes"></h1>
                        <p>Minutes</p>
                    </div>
                    <div class="clock border-none">
                        <h1 id="seconds"></h1>
                        <p>Seconds</p>
                    </div>
                </div>
            </div>

            <div class="footer">
                <p>DON’T WAIT!</p> <a  target="_blank" id="applynow" class="cursor">APPLY NOW</a> <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect y="21" width="29.1778" height="29.1778" rx="14.5889" transform="rotate(-45 0 21)" fill="#009CFF"/>
<path d="M25.1282 25.5566L24.2927 25.5566L24.2927 17.3391L16.0752 17.3391L16.0752 16.5036L25.1282 16.5036L25.1282 25.5566Z" fill="white"/>
<path d="M16.1826 24.8555L16.7734 25.4463L25.0052 17.2145L24.4144 16.6237L16.1826 24.8555Z" fill="white"/>
</svg></p> 

            </div>
        </div>
    </section>

<section id="ceo">
        <div class="container">
            <div class="left">
                <img src="<?php echo get_template_directory_uri(); ?>/img/GELBER.png" alt="">
            </div>
            <div class="right">
                <div class="header">
                <h1>BRIAN GELBER</h1>
                <h2>Founder & CEO</h2>
            </div>
            <div class="content">
                <p>"Trading is about expressing your market views authentically, in your own unique way. It’s challenging and the fun is in the challenge."</p>
            </div>
            </div>
        </div>
</section>

<section class="carousel-section">
    <div class="carousel-container">
        <div class="carousel-slide active">
            <img src="<?php echo get_template_directory_uri(); ?>/img/slider1.png" alt="Slider 1">
            <div class="carousel-overlay">
                <div class="carousel-text">
                <img src="<?php echo get_template_directory_uri(); ?>/icons/br.svg" alt="Breakout Element" class="hero-element-updated">
                    <p>This is the Trading Competition YOU have been waiting for. Compete for BIG money and potentially land your dream job as a Trader.  You will gain invaluable mentorship. Spots are limited, so apply today!</p>
                    <a  target="_blank" id="applynow" class="carousel-button">Apply Now to see if YOU can BREAKOUT!</a>
                </div>
            </div>
        </div>
        <div class="carousel-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/slider2.png" alt="Slider 2">
            <div class="carousel-overlay">
                <div class="carousel-text">
                <img src="<?php echo get_template_directory_uri(); ?>/icons/br.svg" alt="Breakout Element" class="hero-element-updated">
                    <p>This is the Trading Competition YOU have been waiting for. Compete for BIG money and potentially land your dream job as a Trader.  You will gain invaluable mentorship. Spots are limited, so apply today!</p>
                    <a target="_blank" id="applynow" class="carousel-button">Apply Now to see if YOU can BREAKOUT!</a>
                </div>
            </div>
        </div>
        <div class="carousel-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/slider3.png" alt="Slider 3">
            
            <div class="carousel-overlay justify-end">
                <div class="carousel-text">
                    <h2>Locations</h2>
                    <p>This is the Trading Competition YOU have been waiting for. Compete for BIG money and potentially land your dream job as a Trader.  You will gain invaluable mentorship. Spots are limited, so apply today!</p>
                    <a  target="_blank" id="applynow" class="carousel-button">Apply Now to see if YOU can BREAKOUT!</a>
                </div>
            </div>
        </div>
        <div class="carousel-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/slider4.png" alt="Slider 4">
            <div class="carousel-overlay">
                <div class="carousel-text">
                <img src="<?php echo get_template_directory_uri(); ?>/icons/br.svg" alt="Breakout Element" class="hero-element-updated">
                    <p>This is the Trading Competition YOU have been waiting for. Compete for BIG money and potentially land your dream job as a Trader.  You will gain invaluable mentorship. Spots are limited, so apply today!</p>
                    <a target="_blank" id="applynow" class="carousel-button">Apply Now to see if YOU can BREAKOUT!</a>
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
    <h2 class="faq-title">FAQ</h2>
    <div class="faq-cards">
        <div class="faq-card">
            <h3 class="faq-question">Do I qualify for  theBreakout competition?</h3>
            <p class="faq-answer">theBreakout is open to legal residents of the United States who are 21 years of age or older and have a minimum of 1-2 years of profitable trading experience.</p>
            <img src="<?php echo get_template_directory_uri(); ?>/icons/arrow.svg" alt="Arrow Icon" class="faq-arrow">
        </div>
        <div class="faq-card">
        <h3 class="faq-question">What markets/products are eligible to trade?</h3>
        <div class="faq-answer">
            <p>Futures on CME and Spot FX.  Examples:
<li class="faq-list">Currency Futures - 6E, 6J, 6B, 6C, 6A, and others</li>
<li class="faq-list">Equity Index Futures - ES, NQ, YM, RTY, NKY, and others</li>
<li class="faq-list">Commodity Futures - CL, NG, GC, SI, HG, ZC, ZW, ZS, and others</li>
<li class="faq-list">Fixed Income Futures - SOFR, ZT, ZF, ZN/TY, ZB, UB and others</li>
<li class="faq-list">Crypto Futures - BTC &amp; ETH</li>
<li class="faq-list">Spot FX - G7 currencies like EUR, JPY, GBP, AUD, CAD, CHF, and others</li>
<li class="faq-list">Spot FX - EM currencies like MXN, ZAR, CNH, and others</li></p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/icons/arrow.svg" alt="Arrow Icon" class="faq-arrow">
    </div>
        <div class="faq-card">
            <h3 class="faq-question">What is the required time commitment?</h3>
            <p class="faq-answer">We welcome applicants of all trading styles and time frames, including those who trade while holding full-time jobs or during night hours.  Applicants should be available in September and October.  Communication will occur weekly or even daily via chats and emails.</p>
            <img src="<?php echo get_template_directory_uri(); ?>/icons/arrow.svg" alt="Arrow Icon" class="faq-arrow">
        </div>
        <div class="faq-card">
            <h3 class="faq-question">How do I increase my chances of receiving a job offer?</h3>
            <p class="faq-answer">We are currently seeking to hire Traders for positions in Chicago, New York, or as fully remote roles.  Our evaluation process considers not only your trading statistics but also qualitative and personal traits. Even if you rank #9 in P&L after the two-month competition, demonstrating valued trader traits could make you an ideal candidate for us!</p>
            <img src="<?php echo get_template_directory_uri(); ?>/icons/arrow.svg" alt="Arrow Icon" class="faq-arrow">
        </div>
        <div class="faq-card">
            <h3 class="faq-question">I trade single name stocks, options, and crypto alt coins – do I qualify?</h3>
            <p class="faq-answer">This is a Futures and FX trading competition.  If you don’t trade Futures or FX, this competition is not for you.  Equity index futures and CME crypto futures are available to trade.</p>
            <img src="<?php echo get_template_directory_uri(); ?>/icons/arrow.svg" alt="Arrow Icon" class="faq-arrow">
        </div>
    </div>
</section>


<div id="criteria-modal" class="modal">
    <div class="modal-content">
        <span class="close-button">&times;</span>
        <h2 class="modal-title">SEE IF YOU FIT CRITERIA</h2>
        <p class="modal-paragraph">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>
        <h3 class="modal-subtitle">REQUIREMENTS</h3>
        <p class="modal-paragraph">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>
        <ul class="modal-list">
            <li><img src="<?php echo get_template_directory_uri(); ?>/icons/tvector.svg" alt="Icon"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/icons/tvector.svg" alt="Icon"> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/icons/tvector.svg" alt="Icon"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur xcepteur sint.</li>
        </ul>
        <a target="_blank" id="applynow" class="modal-apply-button">APPLY NOW</a>
    </div>
</div>

<section id="tweeter">
    <div class="container">
       
    <blockquote class="twitter-tweet" data-media-max-width="560"><p lang="zxx" dir="ltr"><a href="https://t.co/2qfZKvinmc">https://t.co/2qfZKvinmc</a></p>&mdash; theBreakout Trading Competition (@GelberBreakout) <a href="https://twitter.com/GelberBreakout/status/1811535244081729734?ref_src=twsrc%5Etfw">July 11, 2024</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
       
    <blockquote class="twitter-tweet" data-media-max-width="560"><p lang="zxx" dir="ltr"><a href="https://t.co/gQnXS1yVuc">https://t.co/gQnXS1yVuc</a></p>&mdash; theBreakout Trading Competition (@GelberBreakout) <a href="https://twitter.com/GelberBreakout/status/1811534130317754667?ref_src=twsrc%5Etfw">July 11, 2024</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    <blockquote class="twitter-tweet" data-media-max-width="560"><p lang="en" dir="ltr">BIG Announcement coming soon!</p>&mdash; theBreakout Trading Competition (@GelberBreakout) <a href="https://twitter.com/GelberBreakout/status/1811050702636032484?ref_src=twsrc%5Etfw">July 10, 2024</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
</section>


<section id="miniFooter">
        <div class="container">
            <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/icons/br.svg" alt=""></div>
            
          
        </div>
</section>


<script>


document.addEventListener('DOMContentLoaded', function () {
    const applyNowButtons = document.querySelectorAll('#applynow');
    applyNowButtons.forEach((applyNowButton) => {
        applyNowButton.addEventListener('click', function() {
            rdt('track', 'Custom', {customEventName: 'ApplyNowClicked'});
            window.location.href = "https://boards.greenhouse.io/gelbergroup/jobs/4363017006";
        });
    });
});


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
        const deadline = new Date('July 6, 2024 00:00:00').getTime();
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
    // gelbertgroup

    document.querySelectorAll('#check').forEach(button => {
                button.addEventListener('click', () => {
                    console.log('test');
                    document.querySelector('#gelbertgroup .criteria').classList.add('show');
                    // document.querySelector('#gelbertgroup .dark-overlay').classList.add('show');
                });
            });
    
            document.querySelector('#gelbertgroup .close').addEventListener('click', () => {
                document.querySelector('#gelbertgroup .criteria').classList.remove('show');
                // document.querySelector('#gelbertgroup .dark-overlay').classList.remove('show');
            });
});
const redirectApplyNow=()=>{
    window.location.href='https://boards.greenhouse.io/gelbergroup/jobs/4363017006#app';
}

// gelbertgroup


// timer 
function updateTimer() {

    const targetDate = new Date('September 9, 2024 10:00:00 GMT-0500'); 
    const now = new Date().getTime();
    const difference = targetDate.getTime() - now;

    if (difference < 0) {
        document.getElementById("days").innerText = "0";
        document.getElementById("hours").innerText = "0";
        document.getElementById("minutes").innerText = "0";
        document.getElementById("seconds").innerText = "0";
        return;
    }

    const days = Math.floor(difference / (1000 * 60 * 60 * 24));
    const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((difference % (1000 * 60)) / 1000);

    document.getElementById("days").innerText = days;
    document.getElementById("hours").innerText = hours;
    document.getElementById("minutes").innerText = minutes;
    document.getElementById("seconds").innerText = seconds;
}

setInterval(updateTimer, 1000);
updateTimer();


        //timer

document.addEventListener('DOMContentLoaded', function() {
    let slideIndex = 0;
    const slides = document.querySelectorAll('.carousel-slide');
    const dots = document.querySelectorAll('.carousel-dot');
    const intervalTime = 5000;  
    let slideInterval;

    function showSlides(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === index) {
                slide.classList.add('active');
                loadImage(slide);
            }
        });

        dots.forEach((dot, i) => {
            dot.classList.remove('active');
            if (i === index) {
                dot.classList.add('active');
            }
        });
    }

    function loadImage(slide) {
        const img = slide.querySelector('img');
        const src = img.getAttribute('src');
        const tempImg = new Image();
        tempImg.onload = function() {
            img.src = src;
            img.style.visibility = 'visible';
        };
        tempImg.src = src;
    }

    function nextSlide() {
        slideIndex = (slideIndex + 1) % slides.length;
        showSlides(slideIndex);
    }

    function prevSlide() {
        slideIndex = (slideIndex - 1 + slides.length) % slides.length;
        showSlides(slideIndex);
    }

    document.querySelector('.carousel-prev').addEventListener('click', function() {
        prevSlide();
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, intervalTime);
    });

    document.querySelector('.carousel-next').addEventListener('click', function() {
        nextSlide();
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, intervalTime);
    });

    dots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            showSlides(index);
            slideIndex = index;
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, intervalTime);
        });
    });

    slides.forEach(slide => loadImage(slide));
    slideInterval = setInterval(nextSlide, intervalTime);
});

document.addEventListener('DOMContentLoaded', function() {
            function injectStyles() {
                var targetElement = document.querySelector('a[href="https://elfsight.com/twitter-feed-widget/?utm_source=websites&utm_medium=clients&utm_content=eapps-twitter-feed&utm_term=localhost&utm_campaign=free-widget"]');
                if (targetElement) {
                    targetElement.style.animation = 'none';
                    targetElement.style.backgroundColor = 'rgba(238,238,238,0.9)';
                    targetElement.style.border = 'none';
                    targetElement.style.bottom = 'auto';
                    targetElement.style.color = 'rgba(0,0,0,.5)';
                    targetElement.style.display = 'none';
                    targetElement.style.alignItems = 'center';
                    targetElement.style.gap = '6px';
                    targetElement.style.float = 'none';
                    targetElement.style.height = '28px';
                    targetElement.style.left = '50%';
                    targetElement.style.margin = '8px auto';
                    targetElement.style.opacity = '1';
                    targetElement.style.padding = '6px';
                    targetElement.style.position = 'relative';
                    targetElement.style.right = 'auto';
                    targetElement.style.top = 'auto';
                    targetElement.style.transform = 'translateX(-50%)';
                    targetElement.style.zoom = '1';
                    targetElement.style.visibility = 'visible';
                    targetElement.style.boxSizing = 'border-box';
                    targetElement.style.borderRadius = '6px';
                    targetElement.style.fontFamily = 'Roboto, Arial, Sans-serif';
                    targetElement.style.fontSize = '12px';
                    targetElement.style.fontWeight = '700';
                    targetElement.style.lineHeight = '16px';
                    targetElement.style.textAlign = 'left';
                    targetElement.style.textDecoration = 'none';
                    targetElement.style.maxWidth = '240px';
                    targetElement.style.textIndent = '0';
                    targetElement.style.zIndex = '99999';
                    targetElement.style.marginTop = '20px';
                }
            }

             injectStyles();

             var observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.addedNodes.length || mutation.removedNodes.length) {
                        injectStyles();
                    }
                });
            });

            observer.observe(document.body, { childList: true, subtree: true });
        });






        document.addEventListener('DOMContentLoaded', function() {
    const checkNowButton = document.getElementById('check-now-button');
    const modal = document.getElementById('criteria-modal');
    const closeButton = document.querySelector('.close-button');

    function showModal() {
        modal.style.display = 'block';
        setTimeout(() => {
            modal.classList.remove('hide');
            modal.classList.add('show');
        }, 10);
    }

    function hideModal() {
        modal.classList.remove('show');
        modal.classList.add('hide');
        modal.addEventListener('animationend', function() {
            modal.style.display = 'none';
        }, { once: true });
    }

    checkNowButton.addEventListener('click', function(event) {
        event.preventDefault();
        showModal();
    });

    closeButton.addEventListener('click', function() {
        hideModal();
    });

    window.addEventListener('click', function(event) {
        if (event.target == modal) {
            hideModal();
        }
    });
});
</script>

<?php wp_footer(); ?>