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

<!-- Internal CSS -->
<style> 

/* Global box-sizing */
*,
*::before,
*::after {
    box-sizing: border-box;
}

/* Landing Section */
.landing-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: url('<?php echo get_template_directory_uri(); ?>/img/stat.png') no-repeat center center;
    background-size: cover;
    color: white;
    text-align: left;
    padding: 50px 20px;
    min-height: 100vh;
    width: 100%;
    overflow: hidden; /* Prevent overflow */
}
.landing-content {
    flex: 1;
}
.landing-content h1 {
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-weight: 900;
    font-style: italic;
    font-size: 78px;
    line-height: 78px;
    letter-spacing: -4px;
}
.landing-content p {
    font-family: 'Manrope', sans-serif;
    font-weight: 600;
    font-size: 18px;
    line-height: 25.2px;
    letter-spacing: -2%;
}
.landing-content .btn {
    background-color: #009CFF;
    color: white;
    padding: 16px 24px;
    border: none;
    border-radius: 5px;
    font-size: 1em;
    text-decoration: none;
    display: inline-block;
    margin-top: 20px;
}
.breakout-logo {
    margin-top: 25%;
}
.breakout-logo img {
    max-width: 40%;
    height: auto;
}
.landing-logo {
    flex: 0 0 auto;
    margin-left: 20px;
}
.landing-logo img {
    max-width: 80%;
    height: auto;
}

/* Full Background Section */
.full-background {
    background: url('<?php echo get_template_directory_uri(); ?>/img/bg.jpeg') no-repeat center center fixed;
    background-size: cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    flex-direction: column;
}
.section-content {
    color: white;
    margin-top: -50px; /* Adjust margin-top to position title correctly */
}
.section-content h1 {
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-weight: 900;
    font-style: italic;
    font-size: 50px; /* Reduce font-size for better alignment */
    line-height: 1.2; /* Adjust line-height as needed */
    margin-bottom: 60px;
    letter-spacing: -4px;
    text-transform: uppercase;
}
.block-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
}
.prize-block {
    background-color: #243B55;
    border-radius: 10px;
    padding: 40px;
    width: 400px;
    height: 400px;
    color: #FFFFFF;
    text-align: center;
    transition: background 0.3s;
    background: linear-gradient(0deg, rgba(36, 35, 52, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
    position: relative;
    overflow: hidden;
}
.prize-value {
    font-size: 36px;
    margin-bottom: 10px;
}
.star-icon img {
    width: 150px;
    height: auto;
}
.placement-text {
    font-size: 24px;
    margin-bottom: 5px;
}
.description-text {
    font-size: 25px;
}
.join-now-btn {
    padding: 16px 24px;
    background-color: #009CFF;
    color: white;
    text-decoration: none;
    border-radius: 120px;
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-weight: 600;
    font-size: 24px;
    display: inline-block;
    transition: background-color 0.3s, color 0.3s, transform 0.3s, box-shadow 0.3s;
    margin-top: 40px;
}
.apply-button {
    display: none;
    padding: 12px 20px;
    background-color: #009CFF;
    color: white;
    text-decoration: none;
    border: none;
    border-radius: 120px;
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-weight: 600;
    font-size: 18px;
    position: absolute;
    bottom: 20px;
    left: 20px;
    cursor: pointer;
    z-index: 2;
    transition: background-color 0.3s;
}
.line-vector {
    display: none;
    width: 100%;
    height: 3px;
    background: url('<?php echo get_template_directory_uri(); ?>/img/Vector.png') no-repeat center;
    position: absolute;
    top: 70px;
    left: 0;
    z-index: 1;
}

/* Import Manrope font */
@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;600&display=swap');

/* Trader Section */
.trader-content {
    max-width: 1200px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.trader-text {
    flex-basis: 50%;
    color: white;
    text-align: left;
}
.trader-text .contest-overview-btn {
    display: inline-block;
    padding: 16px 24px;
    background-color: #009CFF;
    color: white;
    text-decoration: none;
    border: 1px solid #0173BC;
    border-radius: 100px;
    font-family: 'General Sans Variable';
    font-size: 12px;
    font-weight: 500;
    line-height: 16.2px;
    text-align: left;
    margin-bottom: 16px;
    margin-bottom: 60px;
}
.trader-text h2 {
    font-size: 42px;
    text-align: left;
}
.trader-text p {
    font-size: 18px;
    text-align: left;
}
.trader-text .join-btn {
    display: inline-block;
    padding: 12px 20px;
    background-color: #009CFF;
    color: white;
    text-decoration: none;
    border: none;
    border-radius: 120px;
    font-weight: 600;
    font-size: 18px;
    margin-top: 20px;
}
.trader-cards {
    flex-basis: 45%;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}
.card-group {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

/* Individual Card Styles */
.card {
    position: relative;
    transition: background-color 0.3s, color 0.3s;
}
.card-icon {
    position: absolute;
    top: 10px;
    left: 10px;
    width: 40px;
    height: 40px;
    margin: 1em;
    background-color: white;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: background-color 0.3s;
}
.card-icon img {
    width: 50%;
    height: 50%;
}

#card-1 .card-icon {
    background-color: black; /* Set background layer for icon on card 1 to black */
}

#card-1 {
    background: #1B1B1B;
    padding: 20px;
    border-radius: 10px;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 20em;
    margin-top: -6em;
}
#card-1 h3 {
    font-size: 24px;
    color: white;
    margin-top: 3em;
    transition: color 0.3s;
}
#card-1 p {
    font-size: 16px;
    color: white;
    font-family: 'Manrope', sans-serif;
    margin-bottom: 4em;
    transition: color 0.3s;
}
#card-1 .apply-now {
    color: #009CFF;
    text-decoration: none;
    display: flex;
    align-items: center;
    font-weight: bold;
    position: absolute;
    bottom: 20px;
    left: 20px;
    transition: color 0.3s;
}
#card-1 .apply-now::after {
    content: url('<?php echo get_template_directory_uri(); ?>/img/arrow.png');
    margin-left: 5px;
    transition: color 0.3s;
}

#card-2 {
    background: #1C1C1C;
    padding: 20px;
    border-radius: 10px;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 20em;
}
#card-2 h3 {
    font-size: 24px;
    color: white;
    margin-top: 3em;
    transition: color 0.3s;
}
#card-2 p {
    font-size: 16px;
    color: white;
    font-family: 'Manrope', sans-serif;
    margin-bottom: 5em;
    transition: color 0.3s;
}

#card-3 {
    background: #1D1D1D;
    padding: 20px;
    border-radius: 10px;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 20em;
}
#card-3 h3 {
    font-size: 24px;
    color: white;
    margin-top: 3em;
    transition: color 0.3s;
}
#card-3 p {
    font-size: 16px;
    color: white;
    font-family: 'Manrope', sans-serif;
    margin-bottom: 4em;
    transition: color 0.3s;
}

#card-4 {
    background: #1E1E1E;
    padding: 20px;
    border-radius: 10px;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 20em;
}
#card-4 h3 {
    font-size: 24px;
    color: white;
    margin-top: 3em;
    transition: color 0.3s;
}
#card-4 p {
    font-size: 16px;
    color: white;
    font-family: 'Manrope', sans-serif;
    margin-bottom: 5em;
    transition: color 0.3s;
}

.card:hover {
    background-color: white; /* Change card background to white on hover */
    color: black; /* Change card text color to black on hover */
}
.card:hover h3,
.card:hover p,
.card:hover .apply-now {
    color: black; /* Change text color to black on hover */
}






/* Section Timer */
.section-timer {
    background: url('<?php echo get_template_directory_uri(); ?>/img/bg.jpeg') no-repeat center center fixed;
    background-size: cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.section-timer .section-content {
    color: white;
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    letter-spacing: -5px;
}

.section-timer .block-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
}

.section-timer .prize-block {
    background-color: #243B55;
    border-radius: 10px;
    padding: 40px;
    width: 100rem;
    height: 35rem;
    color: #FFFFFF;
    text-align: center;
    transition: background 0.3s;
    background: linear-gradient(0deg, rgba(36, 35, 52, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
}

.section-timer .prize-value {
    font-size: 60px;
    margin-bottom: 10px;
    font-weight: bold;
}

.section-timer #countdown {
    margin-top: 10px;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
}

.section-timer #countdown > div {
    text-align: center;
}

.section-timer #countdown > div img {
    height: 150px;
    margin: 50px;
}

.section-timer #countdown div {
    font-size: 120px;
    margin: 30px
}

.section-timer #countdown div + div {
    font-size: 80px;
    letter-spacing: -5px;
    font-style: italic;
}

.section-timer .apply-now {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    font-style: italic;
    letter-spacing: normal;
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
}

.section-timer .apply-now span {
    margin-right: 10px;
}

.section-timer .apply-now a {
    color: #009CFF;
    text-decoration: none;
}

.section-timer .apply-now img {
    width: 50px;
    height: 50px;
    margin-left: 10px;
}

/* Section CEO */
.section-ceo {
    background: url('<?php echo get_template_directory_uri(); ?>/img/bg.jpeg') no-repeat center center fixed;
    background-size: cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    position: relative;
}

.section-ceo .boss-image {
    position: absolute;
    left: 0;
    top: 48%;
    transform: translateY(-50%);
    height: 60%;
    z-index: 100;
}

.section-ceo .section-content {
    color: white;
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    letter-spacing: -5px;
    position: relative;
    z-index: 2;
}

.section-ceo .block-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
    position: relative;
}

.section-ceo .prize-block {
    background-color: #243B55;
    border-radius: 10px;
    padding: 40px;
    width: 100rem;
    height: 30rem;
    color: #FFFFFF;
    text-align: center;
    transition: background 0.3s;
    background: linear-gradient(0deg, rgba(36, 35, 52, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
    border: 0.1px solid #434343;
}

.section-ceo .prize-value {
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-size: 48px;
    font-style: italic;
    font-weight: 900;
    line-height: 52.8px;
    letter-spacing: -0.02em;
    text-align: center;
    margin-right: 15%;
}

.section-ceo .prize-title {
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-size: 25px;
    font-style: italic;
    font-weight: 900;
    line-height: 52.8px;
    letter-spacing: -0.02em;
    text-align: center;
    margin-right: 37%;
}

.section-ceo .prize-description {
    font-family: 'Manrope', sans-serif;
    font-size: 18px;
    font-style: italic;
    font-weight: 500;
    line-height: 28px;
    letter-spacing: -0.02em;
    text-align: center;
    margin-left: 10%;
}

#page-banner-1034 {
    position: relative;
    text-align: center;
    color: white;
}

#page-banner-header-wrap {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
}
#page-banner-header-inner {
    padding: 20px;
}
#page-banner-header-inner h1 {
    font-size: 2.5em;
    margin: 0;
    font-family: 'Acumin Pro ExtraCondensed', sans-serif; 
}
#page-banner-header-inner {
    padding: 20px;
    margin-bottom: 50px; /* Add the desired margin-bottom value */
}
.btn {
    background-color: rgba(0, 156, 255, 1);
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 126px;
    text-decoration: none;
    font-size: 1em;
    margin-top: 50px;
    font-family: 'Poppins', sans-serif; /* Add this line */
}
.btn:hover {
    background-color: #0056b3;
}
@media (max-width: 768px) {
    #page-banner-header-inner h1 {
        font-size: 1.5em;
    }
    #page-banner-header-inner p {
        font-size: 1em;
    }
}

.faq h1 {
    font-size: 2em;
    margin-bottom: 20px;
}

.faq-container {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.faq-block {
    position: relative;
    background: linear-gradient(0deg, rgba(36, 35, 52, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
    border-radius: 15px;
    margin: 20px 0;
    padding: 20px;
    width: 300%; /* Changed width to 100% */
    max-width: 20; /* Added max-width for responsiveness */
    text-align: left;
    display: flex;
    flex-direction: column;
    justify-content: center;
    transition: height 0.3s ease-in-out, background 0.3s ease-in-out;
    height: 200px;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.faq-block:hover {
    height: 250px;
    background: linear-gradient(0deg, rgba(10, 3, 109, 0.7) 0%, rgba(36, 35, 52, 0) 100%);
}

.faq-block .question {
    font-size: 1.5em;
    font-weight: bold;
    margin-bottom: 10px;
}

.faq-block .answer {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.arrow-img {
    position: absolute;
    top: 40px;
    right: 40px ;
    transition: transform 0.3s ease;
}

.faq-block:hover .arrow-img {
    transform: rotate(45deg);
}

@media (max-width: 768px) {
    .faq h1 {
        font-size: 1.5em;
    }
    .faq-block {
        width: 90%;
        max-width: 100%; /* Adjust max-width for smaller screens */
    }
    .faq-block .question {
        font-size: 1.2em;
    }
    .faq-block .answer {
        font-size: 0.9em;
    }
}

/* Update card common styles */
.update-card {
    width: 30%;
    background: #1e2733;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    color: white;
    transition: background-color 0.3s, color 0.3s;
}

.update-card:hover {
    background-color: white;
    color: black;
}

.update-card:hover .logo-img {
    content: url('<?php echo get_template_directory_uri(); ?>/img/X_logo_dark.png');
}

/* Specific styles for each card */
.card-1 {
    height: 20%;
}

.card-2 {
    height: 90%;
}

.card-3 {
    height: 20%;
}

.card-4 {
    height: 20%;
    margin-top: -16.5%;
}

.card-5 {
    height: 30%;
}

.card-6 {
    height: auto;
    margin-top: -10.5%;
}

.update-card img {
  width: 100%;
  height: auto;
  border-radius: 10px;
  margin-top: 10px;
}

.update-card video {
  width: 500%;
  height: 34em;
  border-radius: 10px;
}

.update-card .highlight {
  color: #1DA1F2;
}

.update-card .card-text {
  font-family: 'Manrope', sans-serif;
  font-size: 16px;
  font-weight: 600;
  line-height: 22.4px;
  letter-spacing: -0.02em;
  text-align: left;
}

.update-card .hashtag {
  color: #1DA1F2;
}

/* Updates Section */
.updates-section {
    background: url('<?php echo get_template_directory_uri(); ?>/img/bg.jpeg') no-repeat center center fixed;
    background-size: cover;
    padding: 40px;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}



</style>

<!-- Main Banner Section -->
<section class="main-banner">
    <div class="landing-container">
        <!-- Introduction Section -->
        <div class="landing-content">
            <h1>THE BREAKOUT <br>TRADING&nbsp;CONTEST</h1>
            <p>Gelber Group is happy to announce THE BREAKOUT <br>- a fully remote, discretionary, simulated Futures & FX<br> trading competition that will take place this<br> September/October 2024</p>
            
            <!-- Call to Action Section -->
            <a href="#" class="btn">JOIN NOW</a>
            
            <!-- The Breakout Logo Section -->
            <div class="breakout-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/br.png" alt="Breakout Logo">
            </div>
        </div>

        <!-- Logo Section -->
        <div class="landing-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
        </div>
    </div>
</section>

<!-- What is The Breakout Trading Contest Section -->
<section class="what-is-breakout">
    <div class="full-background">
        <div class="section-content">
            <h1>WHAT IS THE BREAKOUT <br> <center>TRADING&nbsp;CONTEST</center></h1>
        </div>
    </div>
</section>

<!-- Prizes Section -->
<section class="prizes">
    <div class="full-background">
        <div class="section-content">
            <h1><center>$35,000 IN CASH PRIZES</center></h1>
            <p><center>Cash prizes will be strictly for the top three P&L performers</center></p>
            
            <!-- Prize Blocks -->
            <div class="block-container">
                <!-- First Place Block -->
                <div class="prize-block">
                    <div class="prize-value">$20,000</div>
                    <!-- Add star icon here -->
                    <div class="star-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gold.png" alt="Gold Star">
                    </div>
                    <div class="placement-text">1ST PLACE</div>
                    <div class="description-text">Enhance your productivity by connecting with your favorite tools, keeping all your essentials in one place.</div>
                </div>
                <!-- Second Place Block -->
                <div class="prize-block">
                    <div class="prize-value">$15,000</div>
                    <!-- Add star icon here -->
                    <div class="star-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/silver.png" alt="Silver Star">
                    </div>
                    <div class="placement-text">2ND PLACE</div>
                    <div class="description-text">Achieve your goals with our support and resources at your fingertips.</div>
                </div>
                <!-- Third Place Block -->
                <div class="prize-block">
                    <div class="prize-value">$5,000</div>
                    <!-- Add star icon here -->
                    <div class="star-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/bronze.png" alt="Bronze Star">
                    </div>
                    <div class="placement-text">3RD PLACE</div>
                    <div class="description-text">Empower your trading journey with cutting-edge tools and strategies.</div>
                </div>
            </div>
        
            <div>
                <a href="#" class="join-now-btn">JOIN NOW</a>
            </div>
        </div>
    </div>
</section>

<!-- Section Join in 3 Steps -->
<section class="steps">
    <div class="full-background">
        <div class="section-content">
            <h1><center>JOIN GELBER GROUP<br>TRADING CONTEST IN 3 EASY STEPS</center></h1>

            <!-- Steps Blocks -->
            <div class="block-container">
                <!-- First step -->
                <div class="prize-block">
                    <div class="content-wrap">
                        <div class="prize-value">STEP 1</div>
                        <div class="description-text"><br><br>See if you fit the criteria of contestants eligible to participate in the competition.</div>
                    </div>
                    <button class="apply-button">APPLY NOW</button>
                    <div class="line-vector"></div>
                </div>
                <!-- Second step -->
                <div class="prize-block">
                    <div class="content-wrap">
                        <div class="prize-value">STEP 2</div>
                        <div class="description-text"><br><br>Fill the form with as many details as possible.</div>
                    </div>
                    <button class="apply-button">APPLY NOW</button>
                    <div class="line-vector"></div>
                </div>
                <!-- Third step -->
                <div class="prize-block">
                    <div class="content-wrap">
                        <div class="prize-value">STEP 3</div>
                        <div class="description-text"><br><br>If selected, you will be onboarded onto the competition and receive access credentials to your account.</div>
                    </div>
                    <button class="apply-button">APPLY NOW</button>
                    <div class="line-vector"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 4 -->
<!-- Trader Section -->
<section class="trader-section">
    <div class="full-background">
        <div class="trader-content">
            <!-- Left Text Block -->
            <div class="trader-text">
                <a href="#" class="contest-overview-btn">Contest Overview</a>
                <h2>ARE YOU A</h2>
                <h2>PROFITABLE TRADER?</h2>
                <p>Are you a profitable Trader? Are you obsessed with winning and enjoy the challenge of navigating today’s complex financial markets? How would you like to compete for $35k in cash prizes AND a chance to work for a top proprietary trading firm?</p>
                <a href="#" class="join-btn">JOIN NOW</a>
            </div>
            <!-- Right Cards Block -->
            <div class="trader-cards">
                <!-- Group 1: Card 1 and Card 3 -->
                <div class="card-group">
                    <!-- Card 1 -->
                    <div class="card" id="card-1">
                        <div class="card-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/card1.png" alt="Card 1 Icon">
                        </div>
                        <h3>SHOWCASE YOUR SKILLS</h3>
                        <p>The prize goes to the winner but the job goes to the best trader based on statistics and analytics.</p>
                        <a href="#" class="apply-now">APPLY NOW</a>
                    </div>
                    <!-- Card 3 -->
                    <div class="card" id="card-3">
                        <div class="card-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/card2.png" alt="Card 3 Icon">
                        </div>
                        <h3>GET FEEDBACK & MENTORSHIP</h3>
                        <p>Get valuable feedback and mentorship from professional veteran Traders with decades of experience in generating 7-figure P&L's.</p>
                    </div>
                </div>
                <!-- Group 2: Card 2 and Card 4 -->
                <div class="card-group">
                    <!-- Card 2 -->
                    <div class="card" id="card-2">
                        <div class="card-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/card3.png" alt="Card 2 Icon">
                        </div>
                        <h3>SECURE DATA ENCRYPTION</h3>
                        <p>Receive daily trading statistics to help you learn, grow and refine your craft.</p>
                    </div>
                    <!-- Card 4 -->
                    <div class="card" id="card-4">
                        <div class="card-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/card4.png" alt="Card 4 Icon">
                        </div>
                        <h3>USE THE BEST TOOLS</h3>
                        <p>Trade for free on the world's premier Futures platform, Trading Technologies (TT).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- Section Timer -->
<section class="section-timer">
    <div class="full-background">
        <div class="section-content">
            <!-- Timer Block -->
            <div class="block-container">
                <!-- Countdown Timer Block -->
                <div class="prize-block">
                    <div class="prize-value">STARTS IN</div>
                    <div id="countdown">
                        <div>
                            <div id="days"></div>
                            <div>DAYS</div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/line.png" alt="line">
                        <div>
                            <div id="hours"></div>
                            <div>HOURS</div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/line.png" alt="line">
                        <div>
                            <div id="minutes"></div>
                            <div>MINS</div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/line.png" alt="line">
                        <div>
                            <div id="seconds"></div>
                            <div>SECS</div>
                        </div>
                    </div>
                    <div class="apply-now">
                        <span>Don't wait!</span>
                        <a href="#">Apply now</a>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/apply.png" alt="apply">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section CEO -->
<section class="section-ceo">
    <div class="full-background">
        <img src="<?php echo get_template_directory_uri(); ?>/img/boss.png" alt="Boss Image" class="boss-image">

        <div class="section-content">
            <div class="block-container">
                <!-- CEO Info Block -->
                <div class="prize-block">
                    <div class="prize-value">BRIAN GELBER</div>
                    <div class="prize-title">CEO</div>
                    <div class="prize-description">
                     </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="full-background">
    <div id="page-banner-1034" class="page-banner">
        <div id="image-wrapper">
            <img width="2560" height="1707" src="<?php echo get_template_directory_uri(); ?>/img/group.png" class="attachment-full size-full wp-post-image" alt="" decoding="async" fetchpriority="high" />
        </div>
        <div id="page-banner-header-wrap">
            <div id="page-banner-header">
                <div id="page-banner-header-inner">
                    <h1>JOIN THE BREAKOUT</h1>
                    <h1>GELBER GROUP TRADING CONTEST</h1>
                    <p>Enhance your productivity by connecting with your favorite tools, keeping all your essentials in one place.</p>
                    <a href="#" class="btn btn-primary" style="text-transform: uppercase;">Let's Get Started</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<section class="faq">
    <div class="full-background">
        <div class="section-content">
            <h1 style="text-align: center;">CONTEST FAQ</h1>

            <!-- FAQ Blocks -->
            <div class="faq-container">
                <!-- First FAQ Block -->
                <div class="faq-block">
                    <div class="question">Are all nationalities welcome to participate?</div>
                    <div class="answer">Only American nationals are allowed to participate in the Breakout.</div>
                    <?php echo '<img class="arrow-img" src="' . get_template_directory_uri() . '/img/arrow.png" alt="Arrow">' ?>
                </div>
                <!-- Second FAQ Block -->
                <div class="faq-block">
                    <div class="question">What markets are eligible to trade in the competition?</div>
                    <?php echo '<img class="arrow-img" src="' . get_template_directory_uri() . '/img/arrow.png" alt="Arrow">' ?>
                </div>
                <!-- Third FAQ Block -->
                <div class="faq-block">
                    <div class="question">I only trade single name stocks and options - do I qualify?</div>
                    <?php echo '<img class="arrow-img" src="' . get_template_directory_uri() . '/img/arrow.png" alt="Arrow">' ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Updates Section -->
<section class="updates-section">
    <div class="update-card card-1">
        <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
            <div style="display: flex; align-items: center;">
                <?php echo '<img src="' . get_template_directory_uri() . '/img/logoX.png" alt="Profile Image" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;">'; ?>
                <div>
                <div style="font-weight: bold; font-family: 'Manrope', sans-serif;">theBreakout</div>

                    <div style="color: #bbb;">6h ago</div>
                </div>
            </div>
            <div class="logo-container" style="display: flex; align-items: center;">
                <?php echo '<img class="logo-img" src="' . get_template_directory_uri() . '/img/X_logo.png" alt="Twitter X Logo" style="width: 100%; height: 24px; margin-right: 10px; ">'; ?>
                <div style="cursor: pointer;">
                    <i class="fab fa-x-twitter" style="color: white;"></i>
                </div>
            </div>
        </div>
        <div class="card-text" style="margin-top: 10px;">
            This <span style="color: #1DA1F2;">#TRADING</span> platform is a game-changer! The intuitive interface and robust features have made my trading experience seamless and <span style="color: #1DA1F2;">#PROFITABLE</span>.
        </div>
        <?php echo '<img src="' . get_template_directory_uri() . '/img/mask.png" alt="Image" style="width: 100%; height: 30em; border-radius: 10px; margin-top: 10px; ">'; ?>
    </div>

    <div class="update-card card-2">
        <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
            <div style="display: flex; align-items: center;">
                <?php echo '<img src="' . get_template_directory_uri() . '/img/logoX.png" alt="Profile Image" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;">'; ?>
                <div>
                <div style="font-weight: bold; font-family: 'Manrope', sans-serif;">theBreakout</div>
                <div style="color: #bbb;">6h ago</div>
                </div>
            </div>
            <div class="logo-container" style="display: flex; align-items: center;">
                <?php echo '<img class="logo-img" src="' . get_template_directory_uri() . '/img/X_logo.png" alt="Twitter X Logo" style="width: 100%; height: 24px; margin-right: 10px;">'; ?>
                <div style="cursor: pointer;">
                    <i class="fab fa-x-twitter" style="color: white;"></i>
                </div>
            </div>
        </div>
        <div class="card-text" style="margin-top: 10px;">
            This <span style="color: #1DA1F2;">#TRADING</span> platform is a game-changer! The intuitive interface and robust features have made my trading experience seamless and <span style="color: #1DA1F2;">#PROFITABLE</span>.<br><br>
            I love how easy it is to navigate through different sections and access all the <span style="color: #1DA1F2;">#TOOLS</span> I need to make informed decisions.
        </div>
        <?php echo '<img src="' . get_template_directory_uri() . '/img/mask3.png" alt="Image" style="width: 100%; height: 45em; border-radius: 10px; margin-top: 10px;">'; ?>
    </div>

    <div class="update-card card-3">
        <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
            <div style="display: flex; align-items: center;">
                <?php echo '<img src="' . get_template_directory_uri() . '/img/logoX.png" alt="Profile Image" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;">'; ?>
                <div>
<div style="font-weight: bold; font-family: 'Manrope', sans-serif;">theBreakout</div>
                    <div style="color: #bbb;">7h ago</div>
                </div>
            </div>
            <div class="logo-container" style="display: flex; align-items: center;">
                <?php echo '<img class="logo-img" src="' . get_template_directory_uri() . '/img/X_logo.png" alt="Twitter X Logo" style="width: 24px; height: 24px; margin-right: 10px;">'; ?>
                <div style="cursor: pointer;">
                    <i class="fab fa-x-twitter" style="color: white;"></i>
                </div>
            </div>
        </div>
        <div class="card-text" style="margin-top: 10px;">
            This <span class="hashtag">#TRADING</span> platform is a game-changer! The intuitive interface and robust features have made my trading experience seamless and <span class="hashtag">#PROFITABLE</span>.
            I love how easy it is to navigate through different sections and access all the <span class="hashtag">#TOOLS</span> I need to make informed decisions.
        </div>
        <div style="margin-top: 10px; display: flex; justify-content: center;">
        <video autoplay muted loop style="width: max-content; border-radius: 10px;">
    <source src="<?php echo get_template_directory_uri(); ?>/img/video.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>

        </div>
    </div>

    <div class="update-card card-4">
        <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
            <div style="display: flex; align-items: center;">
                <?php echo '<img src="' . get_template_directory_uri() . '/img/logoX.png" alt="Profile Image" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;">'; ?>
                <div>
<div style="font-weight: bold; font-family: 'Manrope', sans-serif;">theBreakout</div>
                    <div style="color: #bbb;">6h ago</div>
                </div>
            </div>
            <div class="logo-container" style="display: flex; align-items: center;">
                <?php echo '<img class="logo-img" src="' . get_template_directory_uri() . '/img/X_logo.png" alt="Twitter X Logo" style="width: 24px; height: 24px; margin-right: 10px;">'; ?>
                <div style="cursor: pointer;">
                    <i class="fab fa-x-twitter" style="color: white;"></i>
                </div>
            </div>
        </div>
        <div class="card-text" style="margin-top: 10px;">
            This <span style="color: #1DA1F2;">#TRADING</span> platform is a game-changer! The intuitive interface and robust features have made my trading experience seamless and <span style="color: #1DA1F2;">#PROFITABLE</span>.
        </div>
        <?php echo '<img src="' . get_template_directory_uri() . '/img/mask2.png" alt="Image" style="width: 100%; height: auto; border-radius: 10px; margin-top: 10px;">'; ?>
    </div>

    <div class="update-card card-5">
        <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
            <div style="display: flex; align-items: center;">
                <?php echo '<img src="' . get_template_directory_uri() . '/img/logoX.png" alt="Profile Image" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;">'; ?>
                <div>
<div style="font-weight: bold; font-family: 'Manrope', sans-serif;">theBreakout</div>
                    <div style="color: #bbb;">6h ago</div>
                </div>
            </div>
            <div class="logo-container" style="display: flex; align-items: center;">
                <?php echo '<img class="logo-img" src="' . get_template_directory_uri() . '/img/X_logo.png" alt="Twitter X Logo" style="width: 24px; height: 24px; margin-right: 10px;">'; ?>
                <div style="cursor: pointer;">
                    <i class="fab fa-x-twitter" style="color: white;"></i>
                </div>
            </div>
        </div>
        <div class="card-text" style="margin-top: 10px;">
            This <span style="color: #1DA1F2;">#TRADING</span> platform is a game-changer! The intuitive interface and robust features have made my trading experience seamless and <span style="color: #1DA1F2;">#PROFITABLE</span>.
        </div>
        <?php echo '<img src="' . get_template_directory_uri() . '/img/mask4.png" alt="Image" style="width: 100%; height: auto; border-radius: 10px; margin-top: 10px;">'; ?>
    </div>

    <div class="update-card card-6">
        <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
            <div style="display: flex; align-items: center;">
                <?php echo '<img src="' . get_template_directory_uri() . '/img/logoX.png" alt="Profile Image" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;">'; ?>
                <div>
<div style="font-weight: bold; font-family: 'Manrope', sans-serif;">theBreakout</div>
                    <div style="color: #bbb;">6h ago</div>
                </div>
            </div>
            <div class="logo-container" style="display: flex; align-items: center;">
                <?php echo '<img class="logo-img" src="' . get_template_directory_uri() . '/img/X_logo.png" alt="Twitter X Logo" style="width: 24px; height: 24px; margin-right: 10px;">'; ?>
                <div style="cursor: pointer;">
                    <i class="fab fa-x-twitter" style="color: white;"></i>
                </div>
            </div>
        </div>
        <div class="card-text" style="margin-top: 10px;">
            This <span style="color: #1DA1F2;">#TRADING</span> platform is a game-changer! The intuitive interface and robust features have made my trading experience seamless and <span style="color: #1DA1F2;">#PROFITABLE</span>.
        </div>
        <?php echo '<img src="' . get_template_directory_uri() . '/img/mask5.png" alt="Image" style="width: 100%; height: auto; border-radius: 10px; margin-top: 10px;">'; ?>
    </div>
</section>




<script>
    document.querySelectorAll('.prize-block').forEach(function(block) {
        block.addEventListener('mouseover', function() {
            this.style.background = 'linear-gradient(0deg, rgba(10, 3, 109, 0.7) 0%, rgba(36, 35, 52, 0) 100%)';
            this.querySelector('.line-vector').style.display = 'block'; // Show the line-vector
            this.querySelector('.apply-button').style.display = 'inline-block'; // Show the apply button
        });
        
        block.addEventListener('mouseout', function() {
            this.style.background = 'linear-gradient(0deg, rgba(36, 35, 52, 0.7) 0%, rgba(36, 35, 52, 0) 100%)'; // Revert background
            this.querySelector('.line-vector').style.display = 'none'; // Hide the line-vector
            this.querySelector('.apply-button').style.display = 'none'; // Hide the apply button
        });
    });

    var countDownDate = new Date("June 30, 2024 15:37:25").getTime();

    // Update the countdown every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();
        
        // Find the distance between now and the countdown date
        var distance = countDownDate - now;
        
        // Calculations for days, hours, minutes, and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        // Display the countdown values in their respective div elements
        document.getElementById("days").textContent = days;
        document.getElementById("hours").textContent = hours;
        document.getElementById("minutes").textContent = minutes;
        document.getElementById("seconds").textContent = seconds;
        
        // If the countdown is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>

<?php get_footer(); ?>