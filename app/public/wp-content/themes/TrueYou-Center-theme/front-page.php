<?php get_header(); ?> 

<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri ('/images/header-1.png') ?>);"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <h2 class="headline headline--medium"></h2>
        <h3 class="headline headline--small">Experiance change with TrueYou Center</h3>
        <a href="<?php echo site_url('/contact-us'); ?>" class="btn btn--medium btn--white">Let's Talk</a>
      </div>
    </div>

    

  <div>
   <div class="middle-container" style="background-image: url(<?php echo get_theme_file_uri ('/images/front-page1.png') ?>);"> 
   
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h1 class="headline headline--large t-center">Need to Talk?</h1>
                <p class="t-center">Perhaps you're down or anxious - maybe you're unsure about the future of a relationship, or just feel that you aren't living the life you were meant to lead. Whatever your needs may be, TrueYou Center is here to offer support.</br> Therapy is a process of growth and self-discovery, and in our sessions we promote behavioral transformation by encouraging a positive outlook and the adoption of new attitudes and reactions. We have the tools and professional experience to help you get back on track.</p>
                <p class="t-center no-margin"><a href="<?php echo site_url('/services'); ?>" class="btn btn--white">Learn more</a></p>
              </div>
    </div> 


  <section class="white-section" id="features">

<div class="container-fluid">

  <div class="row">
    <div class="feature-box col-lg-4">
      <i class="icon fas fa-laptop-house fa-4x"></i>
      <h3 class="feature-title">Sign Up!</h3>
      <p>You can now contact us from the comfort of your home.</p>
    </div>
   
    <div class="feature-box col-lg-4">
      <i class="icon fas fa-user-check fa-4x"></i>
      <h3 class="feature-title">Match Up</h3>
      <p>Based on the information you provide we will match you with on of our therapist.</p>
    </div>
    

    <div class="feature-box col-lg-4">
      <i class="icon fas fa-user-friends fa-4x"></i>
      <h3 class="feature-title">Get Started</h3>
      <p>You can start your sessions as soon as one week of being matched.</p>
    </div>
  </div>


</div>
</section>
            

</div>

    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri ('/images/6.png') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Individual Therapy</h2>
                <p class="t-center">Learn more about individual therapy.</p>
                <p class="t-center no-margin"><a href="<?php echo site_url('/contact-us')?>);" class="btn btn--white">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri ('/images/white.png') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Couples Therapy</h2>
                <p class="t-center">Learn more about couples therapy.</p>
                <p class="t-center no-margin"><a href="<?php echo site_url('/contact-us')?>);" class="btn btn--white">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri ('/images/5.png') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Family Therapy</h2>
                <p class="t-center">learn more about family therapy.</p>
                <p class="t-center no-margin"><a href="<?php echo site_url('/contact-us')?>);" class="btn btn--white">Learn more</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div>

<?php get_footer();

?>