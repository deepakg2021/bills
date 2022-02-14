<?php 

/*
 * Template Name: Group Bookings
 */

get_header(); ?>

<?php  
$banner1 = get_field('banner1');
$banner2 = get_field('banner2');
$banner_tittle = get_field('banner_tittle');
$banner_subtittle = get_field('banner_subtittle');
?>
<section class="group-booking-section">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-center">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
          <div class="img-box">
            <img class="desktop" src="<?php echo esc_url( $banner1['desktop_banner'] ); ?>"  alt="group-booking-header-left-img" />
            <img class="mobile" src="<?php echo esc_url( $banner1['mobile_banner'] ); ?>"  alt="group-booking-header-left-img" />
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
          <div class="img-box">
            <img class="desktop" src="<?php echo esc_url( $banner2['desktop_banner'] ); ?>" alt="group-booking-header-right-img" />
          </div>
        </div>
        <div class="content">
          <h1><?php echo $banner_tittle; ?></h1>
          <p><?php echo $banner_subtittle; ?></p>
        </div>
      </div>
    </div>
</section>
  <section class="booking-mid-sec">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
          

          <div class="group-bookings-details">
              <div class="inner">
                <div class="heading"><?php echo get_the_title(); ?></div>
                <?php the_content(); ?>
              </div>
            <div class="group-book-people">
              <p>
                Group Bookings under 25 people
              </p>
              <?php 

                $args=array(
                  'post_type' => 'fdm-menu',
                  'post_status' => 'publish',
                  'posts_per_page'  => 3,
                );
                  
                $menu_Cust = get_posts( $args ); 

                $redirectArr = [];
                foreach ($menu_Cust as $key => $post) {
                  $redirectArr[$post->post_name] =  $post->ID;
                }
                
                $all_dayID = $redirectArr['all-day'];
                $dinnerID = $redirectArr['dinner'];
                $breakfastID = $redirectArr['breakfast'];

              ?>
                <a href="<?php echo home_url("/menu?id=$all_dayID")?>">View All Day Menu</a> / <a href="<?php echo home_url("/menu?id=$dinnerID")?>">View Dinner Menu</a>
              <p class="group-books-over">
                Group Bookings over 26 people
              </p>
                <a href="<?php echo home_url("/menu?id=$breakfastID")?>" class="full">View Breakfast Set Menu</a>
                <a href="<?php echo home_url("/menu?id=$breakfastID")?>"> Group Set Menu A</a> / <a href="<?php echo home_url("/menu?id=$breakfastID")?>">Group Set Menu B</a> / <a href="<?php echo home_url("/menu?id=$breakfastID")?>">Group Set Menu C</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 group-booking-page">
          <div class="right-part">
            <?php  
            // Use shortcodes in form like Landing Page Template.
              echo do_shortcode( '[forminator_form id="412"]' );
            ?>
          </div>
        </div>
      </div>
    </div>
  </section> 
<?php get_footer(); ?>
<script>
jQuery(document).ready(function(){
	
	if(jQuery( ".forminator-checkbox-label:contains('Privacy Policy')" )){
		
		var getText = 	jQuery( ".forminator-checkbox-label:contains('Privacy Policy')" ).html();
		var newText = getText.replace('Privacy Policy', '<a href="./privacy-policy/" class="link">Privacy Policy</a>');
		
		jQuery( ".forminator-checkbox-label:contains('Privacy Policy')" ).html(newText);
	}
	
	
});
</script>