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
}


#privacy {
width: 100%;
 height: 100%;
 color:white;
 background: url('<?php echo get_template_directory_uri(); ?>/img/bg.png') no-repeat center center fixed;
     background-size: cover;
    padding-bottom: 3rem;
    padding-top:3rem ;
}

#privacy .container{
 display: flex;
 width: 80%;
 flex-direction: column;
 margin-left: auto;
 margin-right: auto;
 gap: 2rem;
}

#privacy .content{
 width: 100%;
 height: 100%;
}

#privacy .title{

    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-style: italic;
   font-size: 85px !important;
 line-height: 78px;
  font-weight: 900;
  text-transform: uppercase;

  
}


#privacy .content h1{
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-style: italic;

    line-height: 52px;
  font-size: 48px;
  margin: 0;
  font-weight: 900;
  text-transform: uppercase;

 
  
}

#privacy .content p{
 
  font-size: 18px;
  font-weight: 500;
  
  
}

@media only screen and (max-width: 800px) {

  #privacy .container{
 
    width: 90%;
   
   }
  #privacy .title{

  
    font-size: 48px !important;
  
    font-weight: 900;
  
    
  }
  
  
  #privacy .content h1{
  
    font-size: 40px;
    margin: 0;
    font-weight: 900;
   
    
  }
}



#miniFooter{
  height: 100%;
  width: 100%;
  background: url('<?php echo get_template_directory_uri(); ?>/img/bg.png') no-repeat center center fixed;
      background-size: cover;
  color: white;
}

#miniFooter .container{
  display: flex;
  
padding: 3rem;
 
  justify-content: space-between;
 
}

#miniFooter .content{
  display: flex;
  flex-direction: column;
  width: 34%;
  gap: 1rem;
}



#miniFooter button{
  
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


#miniFooter button:hover{
  
  font-size: 16px;
  
background-color: white;

color: #009CFF;

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
</style>

<section id="privacy">
        <div class="container">
            <div class="content">
                <h1 class="title">contest rules</h1>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
            </div>
            <div class="content">
                <h1>Registration and Trading period</h1>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
            </div>
            <div class="content">
                <h1>terms and conditions</h1>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.

                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                    <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur xcepteur sint.</li>
                    
                   
            </div>
            <div class="content">
                <h1>account information</h1>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>

                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                    <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur xcepteur sint.</li>
                    
                    <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
            </div>
            <div class="content">
                <h1>prices and volume requirements</h1>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
            </div>
            <div class="content">
             
                <p><div class="content">
                    <h1>withdrawal information</h1>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
                </div></p>
            </div>
        </div>
</section>

<section id="miniFooter">
        <div class="container">
            <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/icons/br.svg" alt=""></div>
            <div class="content">
                <p>Gelber Group is happy to announce THE BREAKOUT – a fully remote, discretionary, simulated Futures & FX trading competition that will take  place this September/October 2024</p>
                <p>Privacy Policy</p>
            </div>
            <div class="button"><button>JOIN NOW</button></div>
        </div>
</section>

<?php get_footer(); ?>
