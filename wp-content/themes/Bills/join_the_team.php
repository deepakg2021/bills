<?php 

/*
 * Template Name: Join the team
 */

get_header(); ?>

<?php  $banner = get_field('banner1');
$banner_tittle = get_field('banner_tittle');
 ?>
<section class="top-header info-banner join-team-banner desktop-banner" style ="background-image: url('<?php echo esc_url( $banner['desktop_banner'] ); ?>');">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <h1><?php echo $banner_tittle; ?></h1>
        </div>
      </div>
    </div>
  </section>
  <section class="top-header info-banner join-team-banner mobile-banner" style ="background-image: url('<?php echo esc_url( $banner['mobile_banner'] ); ?>');">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <h1><?php echo $banner_tittle; ?></h1>
        </div>
      </div>
    </div>
  </section>
  
  
  
  <div class="wrapper join-team-wrap">
    <div class="join-team-box">
      
      <div class="container-fluid">
        <?php 
        $teams_args = array(
            'post_type' => 'teams',
            'order' => 'DESC',
            'post_status' => 'publish',
        );
        $teams_post = new WP_Query($teams_args);
        while($teams_post->have_posts())
        { 
			$testimonial = false;
            $teams_post->the_post();
            $url = wp_get_attachment_url( get_post_thumbnail_id($teams_post->ID) , 'bill-featured');
			
				
			
        ?>
        <div class="row justify-content-center align-items-center">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="box">
				<?php 
								
					 if( have_rows('testimonials') ):
						 the_row();
						 if(get_sub_field('testemonial_description')!=''){
							$testimonial = true;
						 } 
					
				?>
			
				<?php
					if($testimonial){
					?>
					 <div class="slider-section">
                <div class="testimonial-conten">
                  <!-- Start testimonial slider -->
                  <div class="testimonial-slider">
				  <?php
					$sub_value1 = get_sub_field('testemonial_description');
                     $sub_value2 = get_sub_field('client_name');
                     $sub_value3 = get_sub_field('style_text');
				  ?>
				  
					 <div class="single-slide">
                      <div class="single-testimonial">
                        <p><?php echo $sub_value1; ?><span><?php echo $sub_value3; ?></span>.”</p>
                      </div>
                      <p>
                        <?php echo $sub_value2; ?>
                      </p>
                    </div>
					<?php 

					
						
					while( have_rows('testimonials') ) : the_row();
					
                     $sub_value1 = get_sub_field('testemonial_description');
                     $sub_value2 = get_sub_field('client_name');
                     $sub_value3 = get_sub_field('style_text');
                      ?>
                    <div class="single-slide">
                      <div class="single-testimonial">
                        <p><?php echo $sub_value1; ?><span><?php echo $sub_value3; ?></span>.”</p>
                      </div>
                      <p>
                        <?php echo $sub_value2; ?>
                      </p>
                    </div>
                    <?php
                        endwhile;
						?>
						</div>
					</div>
					</div>
						<?php 
					}else{
					?>
					
						 <?php the_content(); ?> 
					 
                    <?php  
                    }
					endif;
                    ?> 
				
              
             </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="img-box">
              <img src="<?php echo $url; ?>" alt="join-the-bills-team" />
              <div class="inner-box">
                <div class="title"><?php the_title(); ?></div>
                <?php  
                $teams = get_field('teams'); 
				
				
				?>
                <a href="<?php echo $teams['button_link']; ?>" class="btn"><span><?php echo $teams['button_text']; ?></span></a>
              </div>
            </div>
          </div>
        </div>

        <?php } ?>
       
      </div>
    </div>
  </div>
 
<?php get_footer(); ?>