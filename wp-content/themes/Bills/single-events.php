<?php get_header() ?>
<!-- Main -->
<?php 

$video = get_field('video');
if(!empty($video)) { ?>
 <div class="wrapper offer-open-video-wrap">
    <div class="inner-wrap">
      <div class="video-section">
        <!--<img class="desktop" src="<?php //echo esc_url($video['desktop']) ?>" alt="offer-open-video-banner-img">
        <img class="mobile" src="<?php //echo esc_url($video['desktop']) ?>" alt="offer-open-video-banner-img-mobile">-->
			<video autoplay="autoplay" controls>
				<source src="<?php echo $video['link']; ?>" type="video/mp4">
			</video>
<div class="video-icon">			
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/play-icon.svg" alt="play-icon">
			</div>
        <!--<a class="video-icon" href="<?php //echo $video['link']; ?>">
          <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/play-icon.svg" alt="play-icon">
        </a>-->
      </div>
      <div class="cocktails-section">
        <div class="title"><?php the_title(); ?></div>
        
          <?php the_content(); ?>
        
        <a href="javascript:void(0)" class="btn"><span>Make A Booking</span></a>
      </div>
      
    </div>
  </div> 
  <?php
}
else {
 ?>
  
  <div class="wrapper event-offer-wrap">
      <section class="event-open-section">
           <?php
          if(have_posts()) 
          {
          while(have_posts()) 
          { the_post(); ?>
          <ul class="box" >
            <li>
              <div class="img-box">
                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="event-open-img"/>
              </div>
            </li>
            <li>
              <div class="content-box" style="background-color: <?php the_field('bg_color'); ?>;">
                <div class="inner">
                  <div class="title"><?php the_title(); ?></span></div>
                    <?php the_content(); ?>
                  <a href="javascript:void(0)" class="btn"><span>Make A Booking</span></a>
                </div>
              </div>
            </li>
          </ul>
            <?php 
            }
          }
          ?>
        
      </section>
  </div>
<?php } get_footer() ?>