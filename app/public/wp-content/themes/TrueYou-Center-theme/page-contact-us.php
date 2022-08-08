<?php get_header(); ?> 
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
      </div>
    </div>  
  </div>

    <div>
   <div class="middle-container" style="background-image: url(<?php echo get_theme_file_uri ('/images/front-page1.png') ?>);"> 
   
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
              <h2 class="headline headline--medium t-center">Need to Talk?</h2>
                <h6 class="t-center">Fill out our contact list and we will reach out to you as soon as possible</h6>
                <form id="contact-form" method="post" action="https://formsubmit.co/aminah.fonseca@gmail.com" role="form">
                   
<hr class="section break">
    

<div class="messages"></div>

<div class="controls">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Firstname *</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="John *" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Lastname *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Doe *" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="JDoe@gmail.com *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_need">Please specify your need *</label>
                    <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                        <option value="Individual Therapy">Individual Therapy</option>
                        <option value="Couples Therapy">Couples Therapy</option>
                        <option value="Family Therapy">Family Therapy</option>
                        <option value="Other">Other</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
              
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for us *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
           <input type="submit" class="btn btn-dark btn-send"  value="Send message">
                
                
             </div>
        </div>
</form>  
    </div>


                
   

 

<?php

?>