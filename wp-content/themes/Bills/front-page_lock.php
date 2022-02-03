<?php 

/*
 * Template Name: Front page
 */

get_header(); ?>


<section class="section-top">

      <?php  $variable = get_field('image', 'option'); ?>
      <div class="bg-cover" style ="background-image: url('<?php echo $variable; ?>');"></div>
      <div class="bg-overlay"></div>
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-12 col-lg-12 col-12">
            <!-- Heading -->
            <h1 class="text-white text-center mb-4 " >

            <?php echo the_field('tittle', 'option'); ?> <span>Bill’s</span>
            <!-- There’s no place like  -->
            </h1>
          </div>
        </div>
        <div class="form-section">
          <div class="title"><?php echo the_field('banner_sub_tittle', 'option'); ?></div>
          <div class="row justify-content-center align-items-center">
            <div class="col-md-10">
              <form action="">
                <div class="row justify-content-center align-items-center">
                  <div class="col-12 col-sm-4 col-md-4  col-lg-4">
                    <div class="location-arrow">
                      <select class="form-select " aria-label="Default select example">
                        <option selected>Enter Location</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-sm-2 col-md-2  col-lg-2">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>2 people</option>
                      <option value="1">3 people</option>
                      <option value="2">4 people</option>
                      <option value="3">5 people</option>
                    </select>
                  </div>
                  <div class="col-12 col-sm-2 col-md-2  col-lg-2">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>21st Oct</option>
                      <option value="1">22st Oct</option>
                      <option value="2">23st Oct</option>
                      <option value="3">24st Oct</option>
                    </select>
                  </div>
                  <div class="col-12 col-sm-2 col-md-2  col-lg-2">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>2:00pm</option>
                      <option value="1">3:00pm</option>
                      <option value="2">4:00pm</option>
                      <option value="3">5:00pm</option>
                    </select>
                  </div>
                  <div class="col-12 col-md-2">
                    <button type="button" class="btn btn-primary"><span>GO</span></button>
                  </div>
                </div>
                
              </form>
            </div>
          </div>
          
        </div>
      </div>
      
    </section>

  <div class="wrapper">
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
              'posts_per_page'  => 3,
              'post_status' => 'publish',
              'order' => 'DESC',
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
                <a class="btn large" href="#"><span>View All</span></a>
              </div>
            </div>
          </div>
      </div>
    </section>
    <section class="discover-our-menus">
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
    </section>
  </div>

 
<?php get_footer(); ?>