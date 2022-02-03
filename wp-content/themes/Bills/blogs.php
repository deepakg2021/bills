<?php 

/*
 * Template Name: Blogs
 */

get_header(); ?>
<?php  echo $banner = get_field('banner1');
$banner_tittle = get_field('banner_tittle');
 ?>
<section class="top-header info-banner" style ="background-image: url('<?php echo $banner; ?>');">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-12">
        <h1><?php echo $banner_tittle; ?></h1>
      </div>
    </div>
  </div>
</section>
  <div class="wrapper info-wrap">
    <section class="what-at-bill">
      <div class="heading">
        <h2>What’s on at Bill’s</h2>
        <p>Fantastic daily offers &#38; events!</p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <?php 
            $_menu_args=array(
              'post_type' => 'menu',
              'posts_per_page'  => 3
            );
            $_menu_posts=new WP_Query($_menu_args);
            while($_menu_posts->have_posts())
            { 
                $_menu_posts->the_post();
                $url = wp_get_attachment_url( get_post_thumbnail_id($_menu_posts->ID) ); 
            ?>
            <div class="card">
              <div class="row align-items-center ">
                <div class="col-12 col-sm-4 col-md-6 col-lg-5">
                  <div class="img-box">
                    <img src="<?php echo $url; ?>" alt="" />
                  </div>
                </div>
                <div class="col-12 col-sm-4 col-md-6 col-lg-7">
                  <div class="inner">
                    <div class="title"><?php the_title(); ?></div>
                    <div class="dec">
                     <?php the_content(); ?>
                    </div>
                    <a class="btn" href="<?php the_permalink(); ?>"><span>Find Out More</span></a>
                  </div>
                </div>
              </div>
            </div>

            <?php } ?>
            <?php wp_reset_postdata() ?>
          </div>
        </div>
          <div class="row">
            <div class="col-12">
              <div class="view-all-section">
                <a class="btn large" href="<?php echo site_url(); ?>/events-offers/"><span>View All</span></a>
              </div>
            </div>
          </div>
      </div>
    </section>
   <!--  <section class="discover-our-menus">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-sm-4 col-md-4 col-lg-4">
            <div class="dis-box">
              <img src="<?php bloginfo('template_url'); ?>/assets/images/all-day-img.png" alt="" />
              <div class="inner">
                  <div class="title"></div>
                  <div class="sub-title"></div>
                <div class="info">
                  <a href="javascript:void(0)"> <span>All Day</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-4 col-md-4 col-lg-4">
            <div class="dis-box">
              <img src="<?php bloginfo('template_url'); ?>/assets/images/dinner-img.png" alt="" />
              <div class="inner">
                  <div class="title">Discover Our Menus</div>
                  <div class="sub-title">Fantastic food & drinks</div>
                <div class="info">
                  <a href="javascript:void(0)"> <span>Dinner</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-4 col-md-4 col-lg-4">
            <div class="dis-box">
              <img src="<?php bloginfo('template_url'); ?>/assets/images/set-menu-img.png" alt="" />
              <div class="inner">
                  <div class="title"></div>
                  <div class="sub-title"></div>
                <div class="info">
                  <a href="javascript:void(0)"> <span>Set Menu</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="group-booking">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <div class="img-box">
              <img src="<?php bloginfo('template_url'); ?>/assets/images/group-booking-img.png" alt="" />
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <div class="inner">
              <div class="info">
              <div class="title">Group Bookings</div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                </p>
                <p>
                  Ta labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Cididunt ut labore et dolore mag.
                </p>
                <p>
                  <a href="javascript:void(0)" class="btn"><span>View Offer</span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
  </div>

 
<?php get_footer(); ?>