<?php 
/*
Template Name: Events and Offers
*/
get_header(); 
$exclude_ids = [];
?>
<?php  $banner = get_field('banner1');
$banner_tittle = get_field('banner_tittle');
 ?>
<section class="top-header event-banner desktop-banner" style ="background-image: url('<?php echo esc_url( $banner['desktop_banner'] ); ?>');">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-12">
        <h1><?php echo get_the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>
<section class="top-header event-banner mobile-banner" style ="background-image: url('<?php echo esc_url( $banner['mobile_banner'] ); ?>');">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-12">
        <h1><?php echo get_the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>
<div class="wrapper event-wrap">
  <section class="event-offers-section">
    <form class="comm-form" action="" method="post">
      <div class="container">
        <div class="row">
          <form action="" method="post" id="form-event">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="mb-3 row">
              <div class="col-12 col-sm-3 col-md-6 col-lg-4 col-xl-2">
                <div class="location-arrow loc-arrow">
                  <!-- <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Enter Location</option>
                    <option value="1">A Restaurant</option>
                    <option value="2">B Restaurant</option>
                    <option value="3">C Restaurant</option>
                  </select> -->
                  

                      <a href="<?php echo get_site_url() ?>/locations" class="arrow-img-sec"><img src="<?php bloginfo('template_url'); ?>/assets/images/location-arrow-icon.svg"></a>
                  <div class="wrap-drop" id="event" name="event">
                      <span>Enter Location</span>
                      <ul class="drop">
                          <!-- <li class="selected"><a>Enter Location</a></li> -->
                          <?php
                          if( $terms = get_terms( array( 'taxonomy' => 'location', 'orderby' => 'name', 'hide_empty' => false ) ) ) : ?>
                          <?php foreach ( $terms as $term ) :                
                                echo '<li data-value='.$term->term_id.' class="term"><a>'.$term->name.'</a></li>';
                          endforeach;
                          echo '</select>';
                          endif;
                          ?>
                         
                      </ul>
                  </div>
                </div>
                <span class="bor-bottom"></span>
              </div>
              <div class="col-12 col-sm-2 col-md-6 col-lg-3 col-xl-2">
                <!-- <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option selected>Region</option>
                  <option value="1">A Restaurant</option>
                  <option value="2">B Restaurant</option>
                  <option value="3">C Restaurant</option>
                </select> -->
               
                  
                  <?php
                    if( $terms = get_terms( array( 'taxonomy' => 'region', 'orderby' => 'name', 'hide_empty' => false ) ) ) : 
                      
                      echo '<select name="region" id="region" class="form-select form-select-lg mb-3 filter-input" aria-label=".form-select-lg example">
                      <option value="" selected  > Region </option>';
                      //print_r($terms);
                      foreach ( $terms as $term ) :
                        
                        echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
                      endforeach;
                      echo '</select>';
                    endif;
                  ?>
                  
                
                <span class="bor-bottom"></span>
              </div>
              <div class="col-12 col-sm-5 col-md-10 col-lg-3 col-xl-5">
                <div class="form-check form-check-inline">
                  <input class="form-check-input filter-input" type="radio" name="option" value="Events" id="flexRadioDefault1">
                  <label class="form-check-label"  for="flexRadioDefault1"  >
                    Events
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input filter-input" type="radio" name="option" value="Offers" id="flexRadioDefault2" >
                  <label class="form-check-label" for="flexRadioDefault2">
                    Offer
                  </label>
                </div>
              </div>
              <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-3">
                <button class="btn"  id="clearfilter"><span>Clear Filters</span></button>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>
    </form>
    <div class="box-section">
      <div class="container">
        <div class="row large">
          <?php 
          $_feature_args = array(
              'post_type' => 'events',
              'order' => 'DESC',
              'post_status' => 'publish',
              'posts_per_page' => 1,
          );
          $_feature_post = new WP_Query($_feature_args);
          // echo '<pre>';
           //print_r($_feature_args);
          while($_feature_post->have_posts())
          { 
              $_feature_post->the_post();
              array_push( $exclude_ids, get_the_ID() );
              $url = wp_get_attachment_url( get_post_thumbnail_id($_feature_post->ID) , 'bill-featured'); 
          ?>
          <div class="col-12 col-sm-8 col-md-12 col-lg-8">
            <?php 
              $bg =  get_field("bg_color"); 
              
            ?>
            <div class="large-box" style="background: <?php echo $bg['background_colors']; ?>">
              <div class="row  align-items-center">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                 <img src="<?php echo $url; ?>" alt=""  />  
                  <?php //the_post_thumbnail('bill-featured'); ?>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="inner">
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                    <style type="text/css">
                      .event-offers-section .box-section .large-box .inner a.btn:hover{
                        border-color: <?php echo $bg['cta']; ?>;
                      }
                      .event-offers-section .box-section .large-box .inner a.btn:hover::before{
                        background: <?php echo $bg['cta']; ?>;
                      }

                    </style>
                    <a href="<?php the_permalink(); ?>" class="btn"><span>Find Out More</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          <?php wp_reset_postdata() ?>

          <?php 
          $_spacial_args = array(
              'post_type' => 'events',
              'post_status' => 'publish',
              'posts_per_page' => 1,
              'offset'        => 1,
              'order' => 'DESC',
          );
          $_spacial_post=new WP_Query($_spacial_args);
          while($_spacial_post->have_posts())
          { 
              $_spacial_post->the_post();
              array_push( $exclude_ids, get_the_ID() );
              $url = wp_get_attachment_url( get_post_thumbnail_id($_spacial_post->ID), 'bill-bookings' ); 
          ?>
          <div class="col-12 col-sm-4 col-md-12 col-lg-4">
            <?php 
              $bg =  get_field("bg_color"); 
              
            ?>
            <div class="box" style="background: <?php echo $bg['background_colors']; ?>">
            <img src="<?php echo $url; ?>" alt=""  /> 
              <?php //the_post_thumbnail('bill-bookings'); ?>
              <div class="inner">
                <div class="title"><?php the_title(); ?></div>
                <?php the_excerpt(); ?>
                <style type="text/css">
                    .event-offers-section .box-section .box .inner a.btn:hover{
                      border-color: <?php echo $bg['cta']; ?>;
                    }
                    .event-offers-section .box-section .box .inner a.btn:hover::before{
                      background: <?php echo $bg['cta']; ?>;
                    }

                </style>
                <a href="<?php the_permalink(); ?>" class="btn"><span>Find Out More</span></a>
              </div>
            </div>
          </div>
          <?php } ?>
          <?php wp_reset_postdata() ?>
        </div>
        <div class="row">
          <?php 
          $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
          $latests = new WP_Query(array(
            'post_type' => 'events',
            'order' => 'DESC',
            'post_status' => 'publish',
            'posts_per_page' => 6,
            'paged' => $paged,
            'post__not_in' => $exclude_ids

          ));

          // print_r( $exclude_ids ); print_r( $latests );
          while($latests->have_posts()): $latests->the_post();

              $url = wp_get_attachment_url( get_post_thumbnail_id($latests->ID), 'bill-bookings' ); 
              //$color=the_field('bg_color');
           ?>
          <div class="col-12 col-sm-4 col-md-6 col-lg-4">
           <?php 
              $bg =  get_field("bg_color"); 
              
            ?>
            <div class="box"  style="background: <?php echo $bg['background_colors']; ?>">
              <img src="<?php echo $url; ?>" alt=""  /> 
              <?php //the_post_thumbnail('bill-bookings'); ?>
              <div class="inner">
                <div class="title"><?php the_title(); ?></div>
                
                <?php the_excerpt(); ?>
                <style type="text/css">
                  .event-offers-section .box-section .box .inner a.btn:hover{
                    border-color: <?php echo $bg['cta']; ?>;
                  }
                  .event-offers-section .box-section .box .inner a.btn:hover::before{
                    background: <?php echo $bg['cta']; ?>;
                  }

                </style>
                <a href="<?php the_permalink(); ?>" class="btn"><span>Find Out More</span></a>
              </div>
            </div>
          </div>
           <?php 
           endwhile;
           wp_reset_postdata();
           ?>

          </div>
        <div class="row insert"></div>
      </div>
    </div>
    
  </section>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="view-all-section event-view">
          <input type="hidden" name="exclude_ids" value="<?php print_r(implode(",", $exclude_ids)); ?>">
          <!-- <a class="btn large" href="javascript:void(0)"><span>Show More</span></a> -->
           <script>
              var limit = 3,
                  page = 1,
                  type = 'events',
                  max_pages_latest = <?php echo $latests->max_num_pages ?>
           </script>
           <?php if ( $latests->max_num_pages > 1 )
           {
              echo '<a  class="btn large btn-load-more"><span>Show More</span></a> 
                    ';
           }
           
           wp_reset_query();
          ?>
        </div>
      </div>
    </div>
    
  </div>
</div>
 
<?php get_footer(); ?>