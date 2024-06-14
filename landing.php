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

<!-- Main Banner Section -->
<div class="landing-container" style="display: flex; justify-content: space-between; align-items: center; background: url('<?php echo get_template_directory_uri(); ?>/img/stat.png') no-repeat center center; background-size: cover; color: white; text-align: left; padding: 50px 20px; min-height: 100vh; box-sizing: border-box; width: 100%;">
    <!-- Introduction Section -->
    <div class="landing-content" style="flex: 1;">
        <h1 style="font-family: 'Acumin Pro ExtraCondensed', sans-serif; font-weight: 900; font-style: italic; font-size: 78px; line-height: 78px; letter-spacing: -4px;">THE BREAKOUT <br>TRADING&nbsp;CONTEST</h1>
        <p style="font-family: 'Manrope', sans-serif; font-weight: 600; font-size: 18px; line-height: 25.2px; letter-spacing: -2%;">Gelber Group is happy to announce THE BREAKOUT <br>- a fully remote, discretionary, simulated Futures & FX<br> trading competition that will take place this<br> September/October 2024</p>
        
        <!-- Call to Action Section -->
        <a href="#" class="btn" style="background-color: #009CFF; color: white; padding: 16px 24px; border: none; border-radius: 5px; font-size: 1em; text-decoration: none; display: inline-block; margin-top: 20px;">JOIN NOW</a>
        
        <!-- The Breakout Logo Section -->
        <div class="breakout-logo" style="margin-top: 25%;">
            <img src="<?php echo get_template_directory_uri(); ?>/img/br.png" alt="Breakout Logo" style="max-width: 40%; height: auto;">
        </div>
    </div>

    <!-- Logo Section -->
    <div class="landing-logo" style="flex: 0 0 auto; margin-left: 20px;">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" style="max-width: 80%; height: auto;">
    </div>
</div>

<!-- Full Background Section -->
<div class="full-background" style="background: url('<?php echo get_template_directory_uri(); ?>/img/bg.jpeg') no-repeat center center fixed; background-size: cover; height: 100vh; display: flex; justify-content: center; align-items: center; text-align: center;">
    <div class="section-content" style="color: white;">
        <h1 style="font-family: 'Acumin Pro ExtraCondensed', sans-serif; font-weight: 900; font-style: italic; font-size: 78px; line-height: 78px; margin-bottom: 60%; letter-spacing: -4px;">WHAT IS THE BREAKOUT <br> <center>TRADING&nbsp;CONTEST</center></h1>
    </div>
</div>

<!-- Section Prizes -->
<div class="full-background" style="background: url('<?php echo get_template_directory_uri(); ?>/img/bg.jpeg') no-repeat center center fixed; background-size: cover; height: 100vh; display: flex; justify-content: center; align-items: center; text-align: center;">
    <div class="section-content" style="color: white;">
        <h1 style="font-family: 'Acumin Pro ExtraCondensed', sans-serif; font-weight: 900; font-style: italic; font-size: 100px; line-height: 78px; margin-bottom: 60%; letter-spacing: -4px;">
            <center>$40,000 IN CASH PRIZES</center>
        </h1>
        <p style="font-family: 'Acumin Pro ExtraCondensed', sans-serif; font-weight: 600; font-size: 24px; margin-top: -55%;">
            <center>Cash prizes will be strictly for the top three P&L performers</center>
        </p>
        
        <!-- Prize Blocks -->
        <div class="block-container" style="display: flex; justify-content: center; gap: 20px; margin-top: 20px;">
            <!-- First Place Block -->
            <div class="prize-block" style="background-color: #243B55; border-radius: 10px; padding: 40px; width: 400px; height: 400px; color: #FFFFFF; text-align: center; transition: background 0.3s; background: linear-gradient(0deg, rgba(36, 35, 52, 0.7) 0%, rgba(36, 35, 52, 0) 100%);">
                <div class="prize-value" style="font-size: 36px; margin-bottom: 10px;">$20,000</div>
                <!-- Add star icon here -->
                <div class="star-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gold.png" alt="Gold Star" style="width: 150px; height: auto;">
                </div>
                <div class="placement-text" style="font-size: 24px; margin-bottom: 5px;">1ST PLACE</div>
                <div class="description-text" style="font-size: 25px;">Enhance your productivity by connecting with your favorite tools, keeping all your essentials in one place.</div>
            </div>
            <!-- Second Place Block -->
            <div class="prize-block" style="background-color: #243B55; border-radius: 10px; padding: 40px; width: 400px; height: 400px; color: #FFFFFF; text-align: center; transition: background 0.3s; background: linear-gradient(0deg, rgba(36, 35, 52, 0.7) 0%, rgba(36, 35, 52, 0) 100%);">
                <div class="prize-value" style="font-size: 36px; margin-bottom: 10px;">$15,000</div>
                <!-- Add star icon here -->
                <div class="star-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/silver.png" alt="Silver Star" style="width: 150px; height: auto;">
                </div>
                <div class="placement-text" style="font-size: 24px; margin-bottom: 5px;">2ND PLACE</div>
                <div class="description-text" style="font-size: 25px;">Achieve your goals with our support and resources at your fingertips.</div>
            </div>
            <!-- Third Place Block -->
            <div class="prize-block" style="background-color: #243B55; border-radius: 10px; padding: 40px; width: 400px; height: 400px; color: #FFFFFF; text-align: center; transition: background 0.3s; background: linear-gradient(0deg, rgba(36, 35, 52, 0.7) 0%, rgba(36, 35, 52, 0) 100%);">
                <div class="prize-value" style="font-size: 36px; margin-bottom: 10px;">$5,000</div>
                <!-- Add star icon here -->
                <div class="star-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bronze.png" alt="Bronze Star" style="width: 150px; height: auto;">
                </div>
                <div class="placement-text" style="font-size: 24px; margin-bottom: 5px;">3RD PLACE</div>
                <div class="description-text" style="font-size: 25px;">Empower your trading journey with cutting-edge tools and strategies.</div>
            </div>
        </div>
        
        <div style="margin-top: 40px;">
            <a href="#" style="padding: 16px 24px; background-color: #009CFF; color: white; text-decoration: none; border-radius: 120px; font-family: 'Acumin Pro ExtraCondensed', sans-serif; font-weight: 600; font-size: 24px; display: inline-block; transition: background-color 0.3s, color 0.3s, transform 0.3s, box-shadow 0.3s;">
                JOIN NOW
            </a>
        </div>
    </div>
</div>

<!-- Section Join in 3 Steps -->
<div class="full-background" style="background: url('<?php echo get_template_directory_uri(); ?>/img/bg.jpeg') no-repeat center center fixed; background-size: cover; height: 100vh; display: flex; justify-content: center; align-items: center; text-align: center;">
    <div class="section-content" style="color: white;">
        <h1 style="font-family: 'Acumin Pro ExtraCondensed', sans-serif; font-weight: 900; font-style: italic; font-size: 50px; line-height: 50px; margin-bottom: 60px; letter-spacing: -4px; text-transform: uppercase;"><center>JOIN GELBER GROUP<br>TRADING CONTEST IN 3 EASY STEPS</center></h1>

        <!-- Steps Blocks -->
        <div class="block-container" style="display: flex; justify-content: center; gap: 20px; margin-top: 20px;">
            <!-- First step -->
            <div class="prize-block" style="background-color: #243B55; border-radius: 10px; padding: 40px; width: 400px; height: 400px; color: #FFFFFF; text-align: center; position: relative; overflow: hidden; transition: background 0.3s; background: linear-gradient(0deg, rgba(36, 35, 52, 0.7) 0%, rgba(36, 35, 52, 0) 100%);">
                <div class="content-wrap" style="position: relative; z-index: 2;">
                    <div class="prize-value" style="font-size: 36px; margin-bottom: 10px;">STEP 1</div>
                    <div class="description-text" style="font-size: 25px;"><br><br>See if you fit the criteria of contestants eligible to participate in the competition.</div>
                </div>
                <button class="apply-button" style="display: none; padding: 12px 20px; background-color: #009CFF; color: white; text-decoration: none; border: none; border-radius: 120px; font-family: 'Acumin Pro ExtraCondensed', sans-serif; font-weight: 600; font-size: 18px; position: absolute; bottom: 20px; left: 20px; cursor: pointer; z-index: 2; transition: background-color 0.3s;">APPLY NOW</button>
                <div class="line-vector" style="display: none; width: 100%; height: 3px; background: url('<?php echo get_template_directory_uri(); ?>/img/Vector.png') no-repeat center; position: absolute; top: 70px; left: 0; z-index: 1;"></div>
            </div>
            <!-- Second step -->
            <div class="prize-block" style="background-color: #243B55; border-radius: 10px; padding: 40px; width: 400px; height: 400px; color: #FFFFFF; text-align: center; position: relative; overflow: hidden; transition: background 0.3s; background: linear-gradient(0deg, rgba(36, 35, 52, 0.7) 0%, rgba(36, 35, 52, 0) 100%);">
                <div class="content-wrap" style="position: relative; z-index: 2;">
                    <div class="prize-value" style="font-size: 36px; margin-bottom: 10px;">STEP 2</div>
                    <div class="description-text" style="font-size: 25px;"><br><br>Fill the form with as many details as possible.</div>
                </div>
                <button class="apply-button" style="display: none; padding: 12px 20px; background-color: #009CFF; color: white; text-decoration: none; border: none; border-radius: 120px; font-family: 'Acumin Pro ExtraCondensed', sans-serif; font-weight: 600; font-size: 18px; position: absolute; bottom: 20px; left: 20px; cursor: pointer; z-index: 2; transition: background-color 0.3s;">APPLY NOW</button>
                <div class="line-vector" style="display: none; width: 100%; height: 3px; background: url('<?php echo get_template_directory_uri(); ?>/img/Vector.png') no-repeat center; position: absolute; top: 70px; left: 0; z-index: 1;"></div>
            </div>
            <!-- Third step -->
            <div class="prize-block" style="background-color: #243B55; border-radius: 10px; padding: 40px; width: 400px; height: 400px; color: #FFFFFF; text-align: center; position: relative; overflow: hidden; transition: background 0.3s; background: linear-gradient(0deg, rgba(36, 35, 52, 0.7) 0%, rgba(36, 35, 52, 0) 100%);">
                <div class="content-wrap" style="position: relative; z-index: 2;">
                    <div class="prize-value" style="font-size: 36px; margin-bottom: 10px;">STEP 3</div>
                    <div class="description-text" style="font-size: 25px;"><br><br>If selected, you will be onboarded onto the competition and receive access credentials to your account.</div>
                </div>
                <button class="apply-button" style="display: none; padding: 12px 20px; background-color: #009CFF; color: white; text-decoration: none; border: none; border-radius: 120px; font-family: 'Acumin Pro ExtraCondensed', sans-serif; font-weight: 600; font-size: 18px; position: absolute; bottom: 20px; left: 20px; cursor: pointer; z-index: 2; transition: background-color 0.3s;">APPLY NOW</button>
                <div class="line-vector" style="display: none; width: 100%; height: 3px; background: url('<?php echo get_template_directory_uri(); ?>/img/Vector.png') no-repeat center; position: absolute; top: 70px; left: 0; z-index: 1;"></div>
            </div>
        </div>
    </div>
</div>

<!-- Section 4 -->
<div class="section-4" style="padding: 50px 20px;">
    <!-- Add your content for Section 4 here -->
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
</script>

<?php get_footer(); ?>
