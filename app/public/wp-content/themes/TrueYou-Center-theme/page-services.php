<?php get_header(); ?> 
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
      </div>
    </div>  
  </div>


  <section class="white-section" id="pricing">

    <h2 class="section-heading t-center">Our Services and Plans</h2>
    

    <div class="row">

      <div class="pricing-column col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
           <h3> Individual Therapy</h3>
          </div>
          <div class="card-body">
            <h2 class="price-text"> Free Cosultation</h2>
            <p>We Accept All Insurance</p>
            <p>1:1 Inperson Meetings</p>
            <p>Once a Week Check-ins</p>
            <p class= "t-center no margin"> <a href="<?php echo site_url('/contact-us') ?>);" class="pricing-btn btn-lg btn-block btn-light">Contact Us</a></p>
          </div>
        </div>
      </div>

      <div class="pricing-column col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Couple Therapy</h3>
          </div>
          <div class="card-body">
            <h3 class="price-text">Free Consultation</h3>
            <p>We Accept All Insurance</p>
            <p>2:1 Inperson Meetings</p>
            <p>Once a Week Check-ins</p>
            <p class= "t-center no margin"> <a href="<?php echo site_url('/contact-us') ?>);" class="pricing-btn btn-lg btn-block btn-light">Contact Us</a></p>
          </div>
        </div>
      </div>

      <div class="pricing-column col-lg-4">
        <div class="card">
          <div class="card-header">
            <h3>Family Therapy</h3>
          </div>
          <div class="card-body">
            <h2 class="price-text">Free Consultation</h2>
            <p>We Accept All Insurance</p>
            <p>up to 6:1 Inperson Meetings</p>
            <p>Once a Week Check-ins</p>
            <p class= "t-center no margin"> <a href="<?php echo site_url('/contact-us') ?>);" class="pricing-btn btn-lg btn-block btn-light">Contact Us</a></p>
            
          </div>
        </div>
      </div>


      </div>

</div>

