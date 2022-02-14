<?php 
get_header(); 
/* Main */
$video = get_field('video');
if(!empty($video)) { ?>
 <div class="wrapper offer-open-video-wrap">
    <div class="inner-wrap">
      <div class="video-section">
			<video class="videoval">
				<source src="<?php echo $video; ?>" type="video/mp4">
			</video>
			<div class="video-icon">			
				<img id="videoPlay" src="<?php echo get_template_directory_uri(); ?>/assets/images/play-icon.svg" alt="play-icon">
			</div>
      </div>
      <?php 
        $bg =  get_field("bg_color"); 
      ?>
      <div class="cocktails-section" style="background: <?php echo $bg['background_colors']; ?>">
        <div class="title"><?php the_title(); ?></div>
        
          <?php the_content(); ?>

          <style type="text/css">
              .cocktails-section a.btn{
                background: <?php echo $bg['cta']; ?>;
                border-color:<?php echo $bg['cta']; ?>;
              }              
          </style>
        
        <a href="javascript:void(0)" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable"><span>Make A Booking</span></a>
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
                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable" class="btn"><span>Make A Booking</span></a>
				  
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
<?php } 
get_footer() 
?>