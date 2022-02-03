<?php 

/*
 * Template Name: list
 */

get_header();

 ?>
  <?php
    $banner = get_field('banner1');
    $banner_tittle = get_field('banner_tittle');
  ?>
  <section class="top-header menu-banner desktop-banner" style ="background-image: url('<?php echo esc_url( $banner['desktop_banner'] ); ?>');" >
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <div class="content">
            <h1><?php echo get_the_title(); ?></h1>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  <section class="top-header menu-banner mobile-banner" style ="background-image: url('<?php echo esc_url( $banner['mobile_banner'] ); ?>');" >
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <div class="content">
            <h1><?php echo get_the_title(); ?></h1>
          </div>
          
        </div>
      </div>
    </div>
  </section>

  <section class="menu-link-top">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
          <ul class="link">
            <?php            
             echo do_shortcode('[fdm-menu id=282 show_title=1 show_content=1]');
            ?>
          </ul>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
          <ul class="link">
          <?php 

          echo do_shortcode('[fdm-menu-item id=286]');
            
          ?>              
              
          </ul>
        </div>
       
      </div>
    </div>
  </section>

 

  <div class="loc-wrapper menu-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div id="contentArea">
            <?php            
             echo do_shortcode('[fdm-menu-section id=75]');
            ?>
          </div> 
        </div>
        
      </div>
    </div>
  </div>
<?php get_footer(); ?>