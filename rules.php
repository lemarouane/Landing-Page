<?php
/**
 * Template Name: Rules Page
 * Description: A template that displays the rules page
 */

function enqueue_privacy_page_styles() {
    if (is_page_template('rules.php')) {
        wp_enqueue_style('rules-page-css', get_template_directory_uri() . '/style/style.css');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_privacy_page_styles');

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

body {
    margin: 0;
    padding: 0;
    font-family: 'Manrope', sans-serif;
    box-sizing: border-box;
    color: white;
}

.wrapper {
    background: url('<?php echo get_template_directory_uri(); ?>/img/bg.png') no-repeat center center fixed;
    background-size: cover;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

header, footer {
    background: transparent;
}

main {
    flex: 1;
    display: flex;
    flex-direction: column;
}

.container {
    max-width: 75rem; 
    margin: 0 auto;
    padding: 1rem; 
    flex: 1;
}

.privacy-header {
    padding: 3.125rem 0; 
}

.privacy-content, .content-container .container {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

h1, h2 {
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-style: italic;
    font-weight: 900;
    line-height: 1.1;
    text-transform: uppercase;
    margin: 0 0 1rem 0;
}

h1 {
    font-size: 5.625rem; 
}

h2 {
    font-size: 2.5rem; 
}

p, ul {
    font-size: 1.4375rem; 
    font-weight: 500;
    line-height: 1.4;
    margin: 1rem 0 0 0; 
}

ul {
    list-style-type: disc;
    padding-left: 2.5rem; 
}

.breakout-section {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    padding: 7.5rem 2.125rem; 
    position: relative;
}

.breakout-section img {
    position: absolute;
    bottom: 2.875rem; 
    left: 0;
    width: 18vw;
    height: auto;
}

.breakout-section .breakout-text {
    position: absolute;
    bottom: 2.125rem; 
    left: 57%;
    transform: translateX(-50%);
    font-size: 1.25rem; 
    text-align: center;
}

.breakout-section .breakout-button {
    position: absolute;
    bottom: 2.9375rem; 
    right: 0;
    background-color: #1E90FF;
    color: white;
    border: none;
    padding: 0.625rem 1.25rem;  
    font-size: 1.75rem; 
    cursor: pointer;
    border-radius: 1.5625rem;  
}

@media (max-width: 75rem) { 
    h1 {
        font-size: 4.375rem;  
    }

    h2 {
        font-size: 1.875rem;  
    }

    p, ul {
        font-size: 1.125rem;  
    }

    .breakout-section .breakout-text {
        font-size: 1rem; 
    }

    .breakout-section .breakout-button {
        font-size: 1rem;  
        padding: 0.5rem 1rem;  
    }
}

@media (max-width: 48rem) {  
    .privacy-header {
        padding: 3.125rem 1rem;
        margin-bottom: -1rem;    }

    .privacy-header h1 {
        font-size: 3.4375rem;  
    }

    h2 {
        font-size: 1.5625rem;  
    }

    p, ul {
        font-size: 1rem;  
    }

    .breakout-section img {
        width: 6.25rem;  
    }

    .breakout-section .breakout-text {
        font-size: 0.875rem;  
    }

    .breakout-section .breakout-button {
        font-size: 0.875rem; 
        padding: 0.375rem 0.75rem;  
    }

    .privacy-content {
        margin-left: 1rem; 
    }
}

@media (max-width: 30rem) {  
    h1 {
        font-size: 2.5rem; 
    }

    h2 {
        font-size: 2.25rem;
        letter-spacing: 0.1rem;
    }

    p, ul {
        font-size: 0.875rem;  
    }

    .breakout-section img {
        width: 8rem;
    }

    .breakout-section .breakout-text {
        font-size: 0.75rem;
        margin-left: -0.2rem;
    }

    .breakout-section .breakout-button {
        font-size: 0.9rem;
        margin-right: 0.2rem;
    }

    .privacy-content {
        margin-left: -1rem;    }
}
</style>


<div class="wrapper">
    <main>
        <section class="privacy-header">
            <div class="container">
                <div class="privacy-content">
                    <h1>CONTEST RULES </h1>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
                </div>
            </div>
        </section>

<section class="content-container">
    <div class="container">
        <h2>REGISTRATION AND TRADING PERIOD</h2>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
    </div>
</section>

<section class="content-container">
    <div class="container">
        <h2>TERMS AND CONDITIONS</h2>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
        <ul>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
            <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur xcepteur sint.</li>
        </ul>
    </div>
</section>

<section class="content-container">
    <div class="container">
        <h2>ACCOUNT INFORMATION</h2>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
        <ul>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
            <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur xcepteur sint.</li>
        </ul>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>

    </div>
</section>

<section class="content-container">
    <div class="container">
        <h2>Links to Internet Resources of Third Parties</h2>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
    </div>
</section>

<section class="content-container">
    <div class="container">
        <h2>PRICES AND VOLUME REQUIREMENTS</h2>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
    </div>
</section>

<section class="content-container">
    <div class="container">
        <h2>WITHDRAWAL INFORMATION</h2>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
    </div>
</section>

<section class="breakout-section">
    <img src="<?php echo get_template_directory_uri(); ?>/img/br.png" alt="Breakout">
    <div class="breakout-text">
        Gelber Group is happy to announce theBreakout – a fully remote, discretionary, simulated Futures & FX trading competition that will take place this September/October 2024.
    </div>
    <button class="breakout-button">Join Now</button>
</section>
</div>
<?php get_footer(); ?>
