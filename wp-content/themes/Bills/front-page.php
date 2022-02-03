<?php 

/*
 * Template Name: Front page
 */

get_header(); ?>
<section class="section-top">

      <?php  $banner = get_field('banner1');
      
      $banner_tittle = get_field('banner_tittle');
       ?>
      <div class="bg-cover desktop-banner" style ="background-image: url('<?php echo esc_url( $banner['desktop_banner'] ); ?>');" ></div>
      <div class="bg-cover mobile-banner" style ="background-image: url('<?php echo esc_url( $banner['mobile_banner'] ); ?>');" ></div>
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
          <div class="bookingMessage text-danger text-center"></div>
          <div class="title desktop-view"><?php echo the_field('banner_sub_tittle', 'option'); ?></div>
          <div class="title mobile-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable"><?php echo the_field('banner_sub_tittle', 'option'); ?></div>
          
          <div class="row justify-content-center align-items-center">
            <div class="col-12 col-sm-9 col-md-11 col-lg-9">
              <form action="" method="post" id="form-frontpage">
                <div class="row justify-content-center align-items-center">
                  <div class="col-12 col-sm-4 col-md-4  col-lg-5">
                    <div class="location-arrow loc-arrow">
                          <a href="./locations" class="arrow-img-sec"><img src="<?php bloginfo('template_url'); ?>/assets/images/location-arrow-icon.svg"></a>
                      <div class="wrap-drop input" id="location">
                          <span>Enter Location</span>
                          <ul class="drop">
                              <!-- <li class="selected"><a>Enter Location</a></li> -->
                              <?php 
                               $_menu_args=array(
                                 'post_type' => 'restaurant',
                                 'post_status' => 'publish',
                                 'order' => 'DESC',
                                 'orderby' => 'title'
                               );
                               $_menu_posts=new WP_Query($_menu_args);
                               while($_menu_posts->have_posts())
                               { 
                                   $_menu_posts->the_post();
                                   $rid = get_field( 'rid', get_the_ID() );
                               ?>

                                    <li data-value="<?= $rid ?>" ><a><?php the_title(); ?></a></li>
                               <?php 
                               } 
                               wp_reset_postdata() ?>
                             
                          </ul>
                      </div>
                 
                   </div>
                  </div>

                 <div class="col-12 col-sm-2 col-md-2  col-lg-2">
                  <div class="wrap-drop input" id="party_size">
                      <span><a>1 people</a></span>
                      <ul class="drop">
                          <!-- <li class="selected "><a>No. Of People</a></li> -->
                        <li data-value="1" class="selected" ><a>1 people</a></li>
                        <li data-value="2"><a>2 people</a></li>
                        <li data-value="3"><a>3 people</a></li>
                        <li data-value="4"><a>4 people</a></li>
                         
                      </ul>
                  </div>
                    
                  </div>
                  <div class="col-12 col-sm-2 col-md-2  col-lg-2 ">
                   <!--  <select class="form-select" aria-label="Default select example">
                      <option selected>21st Oct</option>
                      <option value="1">22st Oct</option>
                      <option value="2">23st Oct</option>
                      <option value="3">24st Oct</option>
                    </select> -->
                        
                                                         
                   <input type="text"  class="form-select input" readonly="true" maxlength="50" name="datepicker" id="homeDatepicker" data-date-format="yyyy-mm-dd">
                   
                                  
                     
                  </div>
                  <div class="col-12 col-sm-2 col-md-2  col-lg-2">
                    <!-- <select class="form-select" aria-label="Default select example">
                      <option selected>2:00pm</option>
                      <option value="1">3:00pm</option>
                      <option value="2">4:00pm</option>
                      <option value="3">5:00pm</option>
                    </select> -->
                   <!--  <select class="timepicker form-select input" aria-label="Default select example" id="time" name="time">
                        <option selected value="">Select Time</option>
                        <option value="07:00">7:00pm</option>
                        <option value="07:15">7:15pm</option>
                        <option value="08:00">8:00pm</option>
                        <option value="08:15">8:15pm</option>
                        <option value="09:00">9:00pm</option>
                        <option value="09:15">9:15pm</option>
                        <option value="10:00">10:00pm</option>
                        <option value="10:15">10:15pm</option>
                        <option value="11:00">11:00pm</option>
                        <option value="11:15">11:15pm</option>
                        <option value="12:00">12:00pm</option>
                        <option value="12:15">12:15pm</option>
                        <option value="13:00">13:00pm</option>

                    </select> -->

                    <input type="text" id="time" name="time" class="form-select input"/>
                   
                  </div>
                  <div class="col-12 col-md-1">
                    <button type="button" class="btn btn-primary" data-page-id='frontPage' id="findATable"><span>GO</span></button>
                  </div>
                </div>
                <span class="text-danger d-block text-center error" ></span>
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
              'post_type' => 'events',
              'post_status' => 'publish',
              'posts_per_page'  => 3,
              'order' => 'DESC',
              'orderby' => 'title'
            );
            $_menu_posts=new WP_Query($_menu_args);
            while($_menu_posts->have_posts())
            { 
                $_menu_posts->the_post();
                 $id = get_the_ID();
                $url = wp_get_attachment_url( get_post_thumbnail_id($_menu_posts->ID), 'bill-bookings' ); 
            ?>
            <div class="card">
              <div class="row align-items-center ">
                <div class="col-12 col-sm-4 col-md-6 col-lg-5">
                  <div class="img-box">
                    <img src="<?php echo $url; ?>" alt="" /> 
                    <?php //the_post_thumbnail('bill-bookings'); ?>
                  </div>
                </div>
                <div class="col-12 col-sm-4 col-md-6 col-lg-7">
                  <div class="inner">
                    <div class="title"><?php the_title(); ?></div>
                    <div class="dec">
                     <?php the_content(); ?>
                    </div>
                    <a class="btn promopopup-box" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#promopopup_<?php echo $id; ?>"><span>Find Out More</span></a>
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
    <section class="discover-our-menus">
      <div class="container-fluid">
        <div class="row">
          <?php 
          $_menu_args=array(
            'post_type' => 'menus',
            'post_status' => 'publish',
             'order' => 'ASC',
             'orderby' => 'title'
          );
          $_menu_posts=new WP_Query($_menu_args);
          while($_menu_posts->have_posts())
          { 
              $_menu_posts->the_post();
               $id = get_the_ID();
              $url = wp_get_attachment_url( get_post_thumbnail_id($_menu_posts->ID), 'bill-bookings' ); 
          ?>

          <div class="col-12 col-sm-4 col-md-4 col-lg-4">
            <div class="dis-box">
              <img src="<?php echo $url; ?>" alt="" />
              <div class="inner">
                  <?php  $tittle = get_field('tittle');
                  $subtittle = get_field('subtittle');
                   ?>
                  <div class="title"><?php echo $tittle; ?></div>
                  <div class="sub-title"><?php echo $subtittle ?></div>
                <div class="info">
                  <a href="<?php the_permalink(); ?>"> <span><?php the_title(); ?></span></a>
                  <a href="javascript:void(0)" class="view-menus">View Menus</a>
                </div>
              </div>
            </div>
          </div>

          <?php } ?>
          <?php wp_reset_postdata() ?>
          
          
        </div>
      </div>
    </section>
    <section class="group-booking">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <?php  $banner = get_field('banner');
            $tittle = get_field('tittle');
            $description = get_field('description');
            $group_booking_link = get_field('group_booking_link');
             ?>
            <div class="img-box">
              <img src="<?php echo $banner; ?>" alt="" />
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <div class="inner">
              <div class="info">
              <div class="title"><?php echo $tittle; ?></div>
               <?php echo $description; ?>  
                <p>
                  <a href="<?php echo $group_booking_link['url'] ?>" class="btn"><span>View Offer</span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>



  <?php 
   $_menu_args=array(
     'post_type' => 'events',
     'post_status' => 'publish',
     'posts_per_page'  => 3,
     'order' => 'DESC',
     'orderby' => 'title'
    
   );
   $_menu_posts=new WP_Query($_menu_args);
   while($_menu_posts->have_posts())
   { 
       $_menu_posts->the_post();
        $id = get_the_ID();
       $url = wp_get_attachment_url( get_post_thumbnail_id($_menu_posts->ID), 'bill-bookings' ); 
   ?>

   <div class="modal fade promo-popup" id="promopopup_<?php echo $id; ?>" tabindex="-1" aria-labelledby="promopopupTitle"  aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
           </button>
         </div>
         <div class="modal-body">
          <div class="card">
            <div class="continer">
              <div class="row justify-content-center align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                  <img src="<?php echo $url; ?>" alt="" />
                  <?php //the_post_thumbnail('bill-bookings'); ?>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                  <div class="inner">
                    <div class="title"><?php the_title(); ?></div>
                    <div class="dec">
                      <?php the_content(); ?>
                    </div>
                    <a class="btn" href="<?php echo the_permalink(); ?>"><span>Find Out More</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </div>
       
       </div>
     </div>
   </div>

  <?php } ?>
  <?php wp_reset_postdata() ?>
 
<?php get_footer(); ?>


