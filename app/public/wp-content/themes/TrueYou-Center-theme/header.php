<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset')?>"
<meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="container">
      <h1 class="trueyou-logo-text float-left">
        <a href="<?php echo site_url()?>""><strong>TrueYou</strong> Center</a>
      </h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
        
          
          
          
          <ul>
          <li <?php if (is_page('our-mission') or wp_get_post_parent_id(0)==16) echo 'class=current-menu-item' ?>><a href="<?php echo site_url('/Our-Mission') ?>">Our Mission </a></li>
            <li <?php if (is_page('meet-our-therapist')) echo 'class=current-menu-item' ?>> <a href="<?php echo site_url('/meet-our-therapist')?>">Meet Our Therapist</a></li>
            <li <?php if (get_post_type()== 'post') echo'class="current-menu-item"'?>><a href="<?php echo site_url('/services')?>">Services</a></li>
            
          </ul>
        
        </nav>
        <div class="site-header__util">
          <a href="<?php echo site_url('/contact-us'); ?>" class="btn btn--small btn--white float-left push-right">Let's Talk</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>