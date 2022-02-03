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
                <a href="javascript:void(0)">View All Day Menu</a> / <a href="javascript:void(0)">View Dinner Menu</a>
              <p class="group-books-over">
                Group Bookings over 26 people
              </p>
                <a href="javascript:void(0)" class="full">View Breakfast Set Menu</a>
                <a href="javascript:void(0)"> Group Set Menu A</a> / <a href="javascript:void(0)">Group Set Menu B</a> / <a href="javascript:void(0)">Group Set Menu C</a>
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
