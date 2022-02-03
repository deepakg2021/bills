<?php 

/*
 * Template Name: Website Page
 */

get_header(); ?>
<?php  $banner = get_field('banner1');
$banner_tittle = get_field('banner_tittle');
 ?>
<section class="top-header loc-six-banner" style ="background-image: url('<?php echo $banner; ?>')">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="desktop" src="<?php bloginfo('template_url'); ?>/assets/images/locations-6-banner.png" class="d-block w-100" alt="...">
            <img class="mobile" src="<?php bloginfo('template_url'); ?>/assets/images/locations-6-banner-mobile.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
              <h5><?php echo get_the_title(); ?></h5>
              <p><?php echo $banner_tittle; ?></p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="desktop" src="<?php bloginfo('template_url'); ?>/assets/images/locations-6-banner.png" class="d-block w-100" alt="...">
            <img class="mobile" src="<?php bloginfo('template_url'); ?>/assets/images/locations-6-banner-mobile.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
              <h5>Manchester, Spinningfields</h5>
              <p>3 Hardman Square, Manchester M3 3EB</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="desktop" src="<?php bloginfo('template_url'); ?>/assets/images/locations-6-banner.png" class="d-block w-100" alt="...">
            <img class="mobile" src="<?php bloginfo('template_url'); ?>/assets/images/locations-6-banner-mobile.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
              <h5>Manchester, Spinningfields</h5>
              <p>3 Hardman Square, Manchester M3 3EB</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <div class="loc-wrapper location-manchester-wrap">
      <div class="banner-bottom-section">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
              <div class="bottom-sec">
                <div class="heading">Opening Hours</div>
                <div class="weeks">
                  Monday - Friday
                  <span>8:00am - 11pm</span>
                </div>
                <div class="weeks">
                  Saturday
                  <span>8:30am - 11pm</span>
                </div>
                <div class="weeks">
                  Sunday (& Bank Holidays)
                  <span>9:00am - 10pm</span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
              <div class="bottom-sec">
                <div class="heading">Contact</div>
                <div class="phone">0161 8362 936</div>
                <div class="heading">Find Us</div>
                <a href="javascript:void(0)" class="direct-btn">Get Directions</a>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
              <div class="bottom-sec">
                <div class="heading">Gallery</div>
                <div class="homesliderbox">
                  
                  <div class="owl-carousel owl-theme nonloop">
                    <div class="item">
                      <div class="itembox">
                        <div class="ItemImgBox">
                          <a class="image-link" href="<?php bloginfo('template_url'); ?>/assets/images/location-banner-popup-img.png" title="Manchester, Spinningfields"><img src="<?php bloginfo('template_url'); ?>/assets/images/location-slider-img-01.png" alt="" /></a>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="itembox">
                        <div class="ItemImgBox">
                          <a class="image-link" href="<?php bloginfo('template_url'); ?>/assets/images/location-banner-popup-img-01.png" title="Manchester, Spinningfields"><img src="<?php bloginfo('template_url'); ?>/assets/images/location-slider-img-02.png" alt="" /></a>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="itembox">
                        <div class="ItemImgBox">
                          <a href="<?php bloginfo('template_url'); ?>/assets/images/location-banner-popup-img.png" title="Manchester, Spinningfields"><img src="<?php bloginfo('template_url'); ?>/assets/images/location-slider-img-03.png" alt="" /></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="location-bottom-section">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-12 col-sm-12 col-md-11 col-lg-8 col-xl-8">
              
              <div class="location-content">
                <p>
                  Situated in the heart of <b>Spinningfields Manchester</b> our restaurant is the newest addition to our Bill’s family and one of our <b>most beautiful</b>. Serving breakfast, lunch dinner specials and cocktails.
                </p>
                <p>
                  Please visit our health & safety page to see the robust measures we have carefully put in place, to ensure the utmost safety of our employees and our guests alike.
                </p>
                <ul class="loc-icon-view">
                  <li>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/location-wifi-icon.svg" alt="location-wifi-icon" /> Free Wifi
                  </li>
                  <li>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/location-map-wheelchair-icon.svg" alt="location-map-wheelchair-icon" /> Disabled Access
                  </li>
                  <li>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/location-baby-icon.svg" alt="location-baby-icon" /> Baby Changing
                  </li>
                </ul>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    <div class="map-sec">
      <img src="<?php bloginfo('template_url'); ?>/assets/images/map-img.png" alt="map-img" />
      <a href="javascript:void(0)"><img class="icon" src="<?php bloginfo('template_url'); ?>/assets/images/map-icon.svg" alt="" /></a>
      <div class="map-content-box">
        <div class="location">Manchester, Spinningfields</div>
        <p>3 Hardman Square, Manchester M3 3EB</p>
      </div>
    </div>
    </div>
<?php get_footer(); ?>