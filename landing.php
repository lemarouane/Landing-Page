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
    }
    .card {
        background: #1B1B1B;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 10px;
    }
    .card h3 {
        font-size: 24px;
        color: white;
    }
    .card p {
        font-size: 16px;
        color: white;
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
<!-- Prizes Section -->
<section class="prizes">
    <div class="full-background">
        <div class="section-content">
            <h1><center>$40,000 IN CASH PRIZES</center></h1>
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
                <!-- Card 1 -->
                <div class="card">
                    <h3>SHOWCASE YOUR SKILLS</h3>
                    <p>The prize goes to the winner but the job goes to the best trader based on statistics and analytics.</p>
                </div>
                <!-- Card 2 -->
                <div class="card">
                    <h3>SECURE DATA ENCRYPTION</h3>
                    <p>Receive daily trading statistics to help you learn, grow and refine your craft.</p>
                </div>
                <!-- Card 3 -->
                <div class="card">
                    <h3>GET USEFUL FEEDBACK & MENTORSHIP</h3>
                    <p>Join our global traders network! Tap into 4 decades of experience.</p>
                </div>
                <!-- Card 4 -->
                <div class="card">
                    <h3>USE THE BEST TOOLS</h3>
                    <p>Traders use our proprietary platform, Trading Technologies [TT].</p>
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