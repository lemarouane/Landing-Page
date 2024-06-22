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

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acumin+Pro+ExtraCondensed:wght@900&family=Manrope:wght@600&display=swap" rel="stylesheet">


<style>
body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
}

.hero {
    position: relative;
    background-image: url('<?php echo get_template_directory_uri(); ?>/img/stat.png');
    background-size: cover;
    background-position: center;
    padding: 50px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

.hero-content {
    max-width: 50%;
}

.hero-title {
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-size: 78px;
    font-style: italic;
    font-weight: 900;
    line-height: 78px;
    text-align: left;
    color: #fff;
}

.hero-description {
    font-size: 1.2em;
    color: #fff;
    margin: 20px 0;
}

.hero-button {
    display: inline-block;
    padding: 16px 24px;
    background: linear-gradient(90.15deg, #0077C2 2.26%, #003D66 99.9%);
    color: #fff;
    text-decoration: none;
    border-radius: 100px;
    font-weight: bold;
    margin-bottom: 20px;
    margin-left: 5em;
}

.hero-element {
    display: block;
    max-width: 100%;
    margin-top: 70px;
    margin-left: 5em;
}

.hero-logo {
    max-width: 50%;
    height: auto;
    position: absolute;
    top: 20px;
    left: 20px;
}

@media (max-width: 768px) {
    .hero {
        flex-direction: column;
        text-align: center;
        padding: 20px;
    }

    .hero-content {
        max-width: 100%;
        margin-left: 0;
    }

    .hero-title {
        font-size: 48px;
        line-height: 48px;
        text-align: center;
    }

    .hero-description {
        font-size: 1em;
        margin-left: 0;
        text-align: center;
    }

    .hero-button {
        padding: 12px 18px;
        margin-left: 0;
    }

    .hero-element {
        margin-top: 20px;
        margin-left: 0;
    }

    .hero-logo {
        max-width: 80%;
        position: static;
        margin: 0 auto 20px;
    }
}

.continuous-bg {
    background-image: url('<?php echo get_template_directory_uri(); ?>/img/bg.jpeg');
    background-size: cover;
    background-position: center;
    padding: 100px 20px;
}

.section-bg {
    padding: 100px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.section-title {
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-size: 78px;
    font-style: italic;
    font-weight: 900;
    line-height: 78px;
    text-align: center;
    color: #fff;
}

@media (max-width: 768px) {
    .section-title {
        font-size: 48px;
        line-height: 48px;
        padding: 0 20px;
    }
}

.prizes-section {
    padding: 50px 20px;
    text-align: center;
    color: #fff;
}

.prizes-title {
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-size: 78px;
    font-style: italic;
    font-weight: 900;
    line-height: 78px;
    text-align: center;
    color: #fff;
}

.prizes-description {
    font-size: 1.2em;
    margin-bottom: 80px;
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
    width: 500px;
    text-align: center;
    position: relative;
    height: 350px;
    transition: background 0.3s ease-in-out, transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
    transform: translateY(100px);
    opacity: 0;
}

.prize-card.show {
    transform: translateY(0);
    opacity: 1;
}

.prize-card:hover {
    background: linear-gradient(0deg, rgba(10, 3, 109, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
}

.prize-amount {
    font-size: 2em;
    font-weight: bold;
    margin-bottom: 10px;
}

.prize-star {
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100px;
    height: 100px;
}

.prize-place {
    font-size: 1.2em;
    font-weight: bold;
    margin-top: 100px;
}

.prize-description {
    font-size: 1em;
    margin-top: 10px;
}

.steps-section {
    padding: 50px 20px;
    text-align: center;
    color: #fff;
}

.steps-title {
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-size: 78px;
    font-style: italic;
    font-weight: 900;
    line-height: 78px;
    text-align: center;
    color: #fff;
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
    width: 500px;
    text-align: center;
    position: relative;
    height: 350px;
    transition: background 0.3s ease-in-out, transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
    transform: translateY(100px);
    opacity: 0;
}

.step-card.show {
    transform: translateY(0);
    opacity: 1;
}

.step-card:hover {
    background: linear-gradient(0deg, rgba(10, 3, 109, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
}

.step-title {
    font-size: 2em;
    font-weight: bold;
    margin-bottom: 10px;
}

.step-vector {
    position: absolute;
    top: 25%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 135px;
    height: 35px;
    display: none;
}

.step-card:hover .step-vector {
    display: block;
}

.step-description {
    font-size: 1.2em;
    font-weight: bold;
    margin-top: 100px;
}

.step-text {
    font-size: 1em;
    margin-top: 80px;
}

.step-button {
    display: none;
    margin-top: 20px;
    padding: 10px 20px;
    background: linear-gradient(90.15deg, #0077C2 2.26%, #003D66 99.9%);
    color: #fff;
    text-decoration: none;
    border-radius: 50px;
    font-weight: bold;
}

.step-card:hover .step-button {
    display: inline-block;
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
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-size: 78px;
    font-style: italic;
    font-weight: 900;
    line-height: 78px;
    color: #fff;
    margin-bottom: 20px;
    text-align: center; /* Center text */
}

.contest-text p {
    font-size: 1.2em;
    margin-bottom: 20px;
    text-align: center; /* Center text */
}

.contest-text .contest-button {
    display: inline-block;
    padding: 16px 24px;
    background: linear-gradient(90.15deg, #0077C2 2.26%, #003D66 99.9%);
    color: #fff;
    text-decoration: none;
    border-radius: 50px;
    font-weight: bold;
    margin: 0 auto; /* Center button */
}

.contest-cards {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.contest-column {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.contest-card {
    background: rgba(27, 27, 27, 1);
    color: #fff;
    border-radius: 20px;
    padding: 20px;
    width: 400px; /* Adjust width as needed */
    text-align: left;
    position: relative;
    transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
    display: flex;
    flex-direction: column;
    align-items: flex-start; /* Align items to start */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
.contest-card1 {
    background: rgba(27, 27, 27, 1);
    color: #fff;
    border-radius: 20px;
    padding: 20px;
    width: 400px; /* Adjust width as needed */
    text-align: left;
    position: relative;
    transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    height: 22em;
}
.contest-card2 {
    background: rgba(27, 27, 27, 1);
    color: #fff;
    border-radius: 20px;
    padding: 20px;
    width: 400px; /* Adjust width as needed */
    text-align: left;
    position: relative;
    transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 6em;
    height: 22em;
}

.contest-card3 {
    background: rgba(27, 27, 27, 1);
    color: #fff;
    border-radius: 20px;
    padding: 20px;
    width: 400px; /* Adjust width as needed */
    text-align: left;
    position: relative;
    transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    height: 22em;
}

.contest-card4 {
    background: rgba(27, 27, 27, 1);
    color: #fff;
    border-radius: 20px;
    padding: 20px;
    width: 400px; /* Adjust width as needed */
    text-align: left;
    position: relative;
    transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    height: 22em;
}

.contest-card img {
    width: 50px;
    height: 50px;
    padding: 10px;
    margin-bottom: 10px; /* Reduce margin */
    align-self: flex-start; /* Align image to start */
}

.contest-card h3 {
    font-size: 1.3em;
    margin: 0 0 10px 0;
    white-space: normal;
    overflow-wrap: break-word;
    word-wrap: break-word;
    hyphens: auto;
}

.contest-card p {
    font-size: 1em;
    margin-bottom: 10px;
    white-space: normal;
    overflow-wrap: break-word;
    word-wrap: break-word;
    hyphens: auto;
}

.contest-card:hover {
    background: #fff;
    color: #000;
}

.apply-now {
    display: none;
    position: absolute;
    bottom: 20px;  
    left: 30px;  
    text-transform: uppercase;
    color: inherit; /* Match text color */
    font-weight: bold;
    display: flex;
    align-items: center;
    gap: 5px; /* Space between text and icon */
}

.contest-card:hover .apply-now {
    display: flex; /* Show on hover */
}

.contest-arrow {
    width: 16px;
    height: 16px;
}

@media (max-width: 768px) {
    .contest-overview {
        flex-direction: column;
        text-align: center;
    }

    .contest-text {
        max-width: 100%;
        margin-right: 0;
        margin-bottom: 20px;
    }

    .contest-cards {
        flex-direction: column;
        align-items: center;
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
        font-size: 48px;
        line-height: 48px;
        padding: 0 20px; 
    }

    .contest-text p {
        text-align: center;
    }

    .contest-card h3 {
        margin: 10px 0;
    }

    .contest-card p {
        margin-left: 0;
    }
}

.timer-section {
    color: #fff;
}

.timer-card {
    background: linear-gradient(0deg, rgba(36, 35, 52, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
    border-radius: 10px;
    padding: 50px;
    margin: 0 auto;
    position: relative;
    text-align: center;
    transition: background 0.3s ease-in-out, transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
    transform: translateY(100px);
    opacity: 0;
}

.timer-card.show {
    transform: translateY(0);
    opacity: 1;
}

.timer-card:hover {
    background: linear-gradient(0deg, rgba(10, 3, 109, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
}

.timer-card h2 {
    font-size: 3em;
    margin-bottom: 20px;
    text-transform: uppercase;
}

.timer {
    display: flex;
    justify-content: space-around;
    align-items: center;
    width: 100%;
}

.timer div {
    text-align: center;
    font-size: 3em;
    font-weight: bold;
}

.timer span {
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-style: italic;
    display: block;
    font-size: em;
    text-transform: uppercase;
}

.timer img {
    height: 250px;
    margin: 0 30px;
}

.apply-now {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 40px;
    font-size: 1.3em;
}

.apply-now a {
    color: #fff;
    text-decoration: none;
    margin-left: 10px;
    display: flex;
    align-items: center;
}

.apply-now a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .timer-card {
        flex-direction: column;
        padding: 20px;
    }

    .timer {
        flex-direction: column;
    }

    .timer img {
        display: none;
    }

    .timer div {
        margin-bottom: 20px;
    }

    .apply-now {
        flex-direction: column;
        font-size: 1em;
    }

    .apply-now a {
        margin-left: 0;
        margin-top: 10px;
    }
}

.boss-section {
    padding: 50px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
}

.boss-image {
    flex: 1;
    max-width: 40%;
    border-radius: 10px 0 0 10px;
    overflow: hidden;
}

.boss-card {
    flex: 2;
    background: linear-gradient(0deg, rgba(36, 35, 52, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
    border-radius: 0 10px 10px 0;
    padding: 30px;
    text-align: left;
    transition: background 0.3s ease-in-out, transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
    height: 35em;
}

.boss-card:hover {
    background: linear-gradient(0deg, rgba(10, 3, 109, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
}

.boss-card h2 {
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-size: 48px;
    font-style: italic;
    font-weight: 900;
    line-height: 52.8px;
    letter-spacing: -0.02em;
    text-align: left;
    margin-bottom: 10px;
    text-transform: uppercase;
}

.boss-card h3 {
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-style: italic; 
    font-size: 1.2em;
    margin-bottom: 20px;
    font-weight: normal;
}

.boss-card p {
    font-size: 1em;
    line-height: 1.5em;
}

@media (max-width: 768px) {
    .boss-section {
        flex-direction: column;
        text-align: center;
    }

    .boss-image {
        max-width: 80%;
        margin: 0 auto 20px;
        border-radius: 10px;
    }

    .boss-card {
        padding: 20px;
        border-radius: 10px;
        margin-left: 0;
    }
}

.join-section {
    position: relative;
    background-image: url('<?php echo get_template_directory_uri(); ?>/img/group.png');
    background-size: cover;
    background-position: center;
    padding: 100px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 100%;
    box-sizing: border-box; /* Ensures padding does not affect total width */
}

.join-content {
    padding: 50px;
    border-radius: 10px;
    max-width: 800px;
}

.join-title {
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-size: 48px;
    font-style: italic;
    font-weight: 900;
    line-height: 52.8px;
    letter-spacing: -0.02em;
    text-align: center;
    color: #fff;
    margin-bottom: 20px;
    text-transform: uppercase;
}

.join-description {
    font-size: 1.2em;
    color: #fff;
    margin-bottom: 40px;
}

.join-button {
    display: inline-block;
    padding: 16px 24px;
    background: linear-gradient(90.15deg, #0077C2 2.26%, #003D66 99.9%);
    color: #fff;
    text-decoration: none;
    border-radius: 50px;
    font-weight: bold;
}

@media (max-width: 768px) {
    .join-section {
        padding: 50px 20px;
    }

    .join-title {
        font-size: 32px;
        line-height: 36px;
    }

    .join-description {
        font-size: 1em;
        margin-bottom: 20px;
    }

    .join-button {
        padding: 12px 18px;
    }
}

.faq-section {
    background-size: cover;
    background-position: center;
    padding: 100px 20px;
    text-align: center;
}

.faq-title {
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-size: 78px;
    font-style: italic;
    font-weight: 900;
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
}

.faq-card.show {
    transform: translateY(0);
    opacity: 1;
}

.faq-card:hover {
    background: linear-gradient(0deg, rgba(10, 3, 109, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
    transform: scaleY(1.1);
}

.faq-question {
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-size: 40px;
    font-style: italic;
    font-weight: 900;
    line-height: 44px;
    letter-spacing: -0.02em;
    text-align: left;
    color: #fff;
    margin-bottom: 10px;
}

.faq-answer {
    font-family: 'Manrope', sans-serif;
    font-size: 16px;
    font-weight: 600;
    line-height: 22.4px;
    letter-spacing: -0.02em;
    text-align: left;
    color: #fff;
}

.faq-arrow {
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%) rotate(0);
    transition: transform 0.3s ease-in-out;
}

.faq-card:hover .faq-arrow {
    transform: translateY(-50%) rotate(-45deg);
}

@media (max-width: 768px) {
    .faq-card {
        width: 100%;
    }

    .faq-title {
        font-size: 48px;
        line-height: 48px;
    }
}
</style>

<section class="hero">
    <div class="hero-content">
        <h1 class="hero-title">THE BREAKOUT TRADING CONTEST</h1>
        <p class="hero-description">Gelber Group is happy to announce THE BREAKOUT – a fully remote, discretionary, simulated Futures & FX trading competition that will take place this September/October 2024</p>
        <a href="#" class="hero-button">Sign Up Now</a>
        <img src="<?php echo get_template_directory_uri(); ?>/img/br.png" alt="Breakout Element" class="hero-element">
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Breakout Logo" class="hero-logo">
</section>

<div class="continuous-bg">
    <section class="section-bg">
        <h2 class="section-title">WHAT IS THE BREAKOUT TRADING CONTEST</h2>
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
                <p class="prize-description">Enhance your productivity by connecting with your favorite tools, keeping all your essentials in one place.</p>
            </div>
            <div class="prize-card">
                <div class="prize-amount">$10,000
                    <img src="<?php echo get_template_directory_uri(); ?>/img/silver.png" alt="Silver Star" class="prize-star">
                </div>
                <p class="prize-place">2ND PLACE</p>
                <p class="prize-description">Enhance your productivity by connecting with your favorite tools, keeping all your essentials in one place.</p>
            </div>
            <div class="prize-card">
                <div class="prize-amount">$5,000
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bronze.png" alt="Bronze Star" class="prize-star">
                </div>
                <p class="prize-place">3RD PLACE</p>
                <p class="prize-description">Define and track your goals, breaking down objectives into achievable tasks to keep your targets in sight.</p>
            </div>
        </div>
    </section>

    <section class="steps-section">
        <h2 class="steps-title">Join Gelber Group Trading Contest In 3 Easy Steps</h2>
        <p class="steps-description">Follow these simple steps to participate in the contest:</p>
        <div class="steps-cards">
            <div class="step-card">
                <div class="step-title">STEP 1</div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/vector.png" alt="Step Vector" class="step-vector">
                <p class="step-text">See if you fit the criteria of contestants eligible to participate in the competition.</p>
                <a href="#" class="step-button">APPLY NOW</a>
            </div>
            <div class="step-card">
                <div class="step-title">STEP 2</div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/vector.png" alt="Step Vector" class="step-vector">
                <p class="step-text">Fill the form with as many details as possible.</p>
                <a href="#" class="step-button">APPLY NOW</a>
            </div>
            <div class="step-card">
                <div class="step-title">STEP 3</div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/vector.png" alt="Step Vector" class="step-vector">
                <p class="step-text">If selected, you will be onboarded onto the competition and receive access credentials to your account.</p>
                <a href="#" class="step-button">APPLY NOW</a>
            </div>
        </div>
    </section>

    <section class="contest-overview">
    <div class="contest-text">
        <h2>Are you a profitable Trader?</h2>
        <p>Are you a profitable Trader? Are you obsessed with winning and enjoy the challenge of navigating today’s complex financial markets? How would you like to compete for $35k in cash prizes AND a chance to work for a top proprietary trading firm?</p>
        <a href="#" class="contest-button">Apply Now</a>
    </div>
    <div class="contest-cards">
        <div class="contest-column">
            <div class="contest-card contest-card1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/card1.png" alt="Card 1">
                <h3>SHOWCASE YOUR SKILLS</h3>
                <p>The prize goes to the winner but the job goes to the best trader based on statistics and analytics.</p>
                <div class="apply-now">
                    APPLY NOW
                    <img src="<?php echo get_template_directory_uri(); ?>/img/contest_arrow.png" alt="Apply Now Arrow" class="contest-arrow">
                </div>
            </div>
            <div class="contest-card contest-card3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/card3.png" alt="Card 3">
                <h3>SECURE DATA ENCRYPTION</h3>
                <p>Receive daily trading statistics to help you learn, grow and refine your craft.</p>
                <div class="apply-now">
                    APPLY NOW
                    <img src="<?php echo get_template_directory_uri(); ?>/img/contest_arrow.png" alt="Apply Now Arrow" class="contest-arrow">
                </div>
            </div>
        </div>
        <div class="contest-column">
            <div class="contest-card contest-card2">
                <img src="<?php echo get_template_directory_uri(); ?>/img/card2.png" alt="Card 2">
                <h3>GET FEEDBACK & MENTORSHIP</h3>
                <p>Get valuable feedback and mentorship from professional veteran Traders with decades of experience in generating 7-figure P&L's.</p>
                <div class="apply-now">
                    APPLY NOW
                    <img src="<?php echo get_template_directory_uri(); ?>/img/contest_arrow.png" alt="Apply Now Arrow" class="contest-arrow">
                </div>
            </div>
            <div class="contest-card contest-card4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/card4.png" alt="Card 4">
                <h3>USE THE BEST TOOLS</h3>
                <p>Trade for free on the world's premier Futures platform, Trading Technologies (TT).</p>
                <div class="apply-now">
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
        <p><br><br><br><br><br><br>Are you trading big? Have you made some money today? If not, here’s your chance to shine! The Breakout is a way for everyone to test themselves against the world.</p>
    </div>
</section>

<section class="join-section">
    <div class="join-content">
        <h2 class="join-title">JOIN THE BREAKOUT<br>GELBER GROUP TRADING&nbsp;CONTEST</h2>
        <p class="join-description">Enhance your productivity by connecting with your favorite tools, keeping all your essentials in one place.</p>
        <a href="#" class="join-button">LET'S GET STARTED</a>
    </div>
</section>









<section class="faq-section">
    <h2 class="faq-title">Contest FAQ</h2>
    <div class="faq-cards">
        <div class="faq-card">
            <h3 class="faq-question">Are all nationalities welcome to participate?</h3>
            <p class="faq-answer">Only American nationals are allowed to participate in theBreakout.</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="Arrow Icon" class="faq-arrow">
        </div>
        <div class="faq-card">
            <h3 class="faq-question">What markets are eligible to trade in the competition?</h3>
            <p class="faq-answer">All major markets are eligible for trading in the competition.</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="Arrow Icon" class="faq-arrow">
        </div>
        <div class="faq-card">
            <h3 class="faq-question">I only trade single name stocks and options - do I qualify?</h3>
            <p class="faq-answer">Yes, you qualify as long as you meet the other contest criteria.</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="Arrow Icon" class="faq-arrow">
        </div>
    </div>
</section>










 




</div>

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
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            } else {
                entry.target.classList.remove('show');
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
</script>

<?php get_footer(); ?>