<?php
/**
 * Template Name: Rules Page
 * Description: A template that displays the rules page
 */

function enqueue_rules_page_styles() {
    if (is_page_template('rules.php')) {
        wp_enqueue_style('rules-page-css', get_template_directory_uri() . '/style/style.css');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_rules_page_styles');

get_header(); ?>

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
        font-family: 'Manrope';
        src: url('<?php echo get_template_directory_uri(); ?>/fonts/manrope-extralight.ttf') format('truetype');
        font-weight: 500;
        font-style: normal;
    }

    .privacy-header {
        background-size: cover;
        background-position: center;
        padding: 100px 0;
        color: white;
        background-image: url('<?php echo get_template_directory_uri(); ?>/img/bg.png');
        background-blend-mode: overlay;
        text-align: left;
    }

    .privacy-header .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .privacy-header h1 {
        font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-size: 69px;
    font-style: italic;
    font-weight: 900;
    line-height: 78px;
    text-align: left;
    text-transform: uppercase;
    margin-left: -10%;
    letter-spacing: 1px;
    }

    .privacy-page-title {
        font-family: 'Acumin Pro ExtraCondensed', sans-serif;
        font-size: 200px;
        font-style: italic;
        font-weight: 900;
        line-height: 78px;
        text-align: left;
    }

    .privacy-header p {
        font-family: 'Manrope', sans-serif;
    font-size: 23px;
    font-weight: 500;
    line-height: 32.2px;
    letter-spacing: -0.02em;
    text-align: left;
    margin-left: -10%;
    margin-top: -2%;
    }
    .container {
        font-family: 'Manrope', sans-serif;
    font-size: 22px;
    font-weight: 500;
    line-height: 32.2px;
    letter-spacing: -0.02em;
    text-align: left;
    }

    .container ul {
        margin-left: -7%;
    margin-top: 0%;
    padding-left: 1em;
    margin-bottom: 52px;
    }

    .container li {
        margin-bottom: 0.5em; /* Adjust spacing between list items */
    }

    .announcement-section {
        position: relative;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 50px;
    background-size: cover;
    color: #fff;
    text-align: left;
    margin-bottom: 100px;
    margin-top: -2%;
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
        z-index: -1;
    }

    .announcement-logo {
        max-width: 400px;
        height: auto;
    }

    .announcement-text {
        flex: 1;
    margin-left: 20em;
    margin-top: 3%;
    }

    .announcement-text p {
        margin: 0;
    line-height: 1.5;
    font-size: 22px;
    color: #fff;
    margin-top: 16%;
    }

    .announcement-privacy {
        display: block;
    margin-top: 10px;
    color: #fff;
    text-decoration: none;
    font-size: 25px;
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

    .content-section {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        color: white;
    }

    .content-section h2 {
        font-family: 'Acumin Pro ExtraCondensed', sans-serif;
        font-size: 36px;
        font-style: italic;
        font-weight: 900;
        line-height: 36px;
        background-image: url('<?php echo get_template_directory_uri(); ?>/img/bg.png');

        text-align: left;
        margin-top: 40px;
    }

    .content-section p {
        font-family: 'Manrope', sans-serif;
        font-size: 18px;
        font-weight: 500;
        line-height: 25.2px;
        letter-spacing: -0.02em;
        text-align: left;
        margin-bottom: 20px;
    }

    .content-section ul {
        margin-bottom: 20px;
        list-style: none;
        padding: 0;
    }

    .content-section ul li {
        font-family: 'Manrope', sans-serif;
        font-size: 18px;
        font-weight: 500;
        line-height: 25.2px;
        letter-spacing: -0.02em;
        text-align: left;
        position: relative;
        padding-left: 20px;
    }

    .content-section ul li::before {
        content: "•";
        position: absolute;
        left: 0;
        color: #00ccff;
    }

    
</style>

<section class="privacy-header">
<div class="container">
<h1 style="font-family: 'Acumin Pro ExtraCondensed', sans-serif;
                    font-size: 120px;
                    font-style: italic;
                    font-weight: 900;
                    line-height: 36px;
                    text-align: left;
                    margin-left: -10%;
                    margin-top: 102px;">
           CONTEST RULES
        </h1>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
    </div>
    <div class="container">
        <h1>REGISTRATION AND TRADING PERIOD</h1>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
    </div>
    <div class="container">
    <h1>TERMS AND CONDITIONS</h1>
    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
    <ul>
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
        <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
        <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur xcepteur sint.</li>
    </ul>
</div>

<div class="container">
    <h1>ACCOUNT INFORMATION</h1>
    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
    <ul>
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
        <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
        <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur xcepteur sint.</li>
    </ul>
    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>

</div>
    <div class="container">
        <h1>PRICES AND VOLUME REQUIREMENTS</h1>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
    </div>
    <div class="container">
        <h1>withdrawal information</h1>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
    </div>

    
 
<section class="announcement-section">
    <img src="<?php echo get_template_directory_uri(); ?>/img/br.png" alt="Breakout Logo" class="announcement-logo">
    <div class="announcement-text">
        <p>Gelber Group is happy to announce THE BREAKOUT<br>
        – a fully remote, discretionary, simulated Futures & FX <br>trading competition that will take place this <br>September/October 2024</p>
        <a href="#" class="announcement-privacy"><br><br><br>Privacy Policy</a>
    </div>
    <a href="#" class="announcement-button">JOIN NOW</a>
</section>

<?php get_footer(); ?>
