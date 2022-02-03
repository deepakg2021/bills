<?php 

/*
 * Template Name: Contact Page
 */

get_header(); ?>

<?php  $banner = get_field('banner1');
$banner_tittle = get_field('banner_tittle');
$got_a_question = get_field('got_a_question');
$question_description = get_field('question_description');
 ?>
<section class="top-header info-banner contact-banner desktop-banner" style ="background-image: url('<?php echo esc_url( $banner['desktop_banner'] ); ?>');">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-12">
        <h1><?php echo $banner_tittle; ?></h1>
      </div>
    </div>
  </div>
</section>
<section class="top-header info-banner contact-banner mobile-banner" style ="background-image: url('<?php echo esc_url( $banner['mobile_banner'] ); ?>');">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-12">
        <h1><?php echo $banner_tittle; ?></h1>
      </div>
    </div>
  </div>
</section>

<div class="wrapper contact-wrap">
  <div class="contact-section">
        <div class="heading-comm">
          <h2><?php echo $got_a_question; ?></h2>
          <p><?php echo $question_description; ?></p>
        </div>
        <div class="inner-section">
          <!-- <form action="">
             <div class="heading">Your message</div>
            <div class="row">
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="mb-3">
                 <select class="form-select" aria-label="Default select example">
                   <option selected>Type of enquiry</option>
                   <option value="1">One</option>
                   <option value="2">Two</option>
                   <option value="3">Three</option>
                 </select>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="mb-3">
                   <select class="form-select" aria-label="Default select example">
                     <option selected>Nearest Bill’s</option>
                     <option value="1">One</option>
                     <option value="2">Two</option>
                     <option value="3">Three</option>
                   </select>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Your message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </div>
            </div>
            <div class="heading">Your details</div>
            <div class="row">
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="mb-3">
                  <input type="text" class="form-control" id="" placeholder="First Name">
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="mb-3">
                   <input type="text" class="form-control" id="" placeholder="Surname">
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="mb-3">
                  <input type="text" class="form-control" id="" placeholder="Telephone Number">
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="mb-3">
                   <input type="email" class="form-control" id="" placeholder="Email Address">
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="chk">
                    <label>
                      <input type="checkbox" id="" value="">
                      <span></span>
                      <em>
                        Please also send me the latest news, menus and events from my favourite Bill’s.
                      </em>
                    </label>
                  </div>
                  <div class="chk">
                    <label>
                      <input type="checkbox" id="" value="">
                      <span></span>
                      <em>
                        I have read and accept the terms of processing data in the <a href="javascript:void(0)">Privacy Policy.</a>
                      </em>
                    </label>
                  </div>
                  <button class="btn"><span>Send Message</span></button>
              </div>
            </div>
          </form> -->
          
         <?php  
          // Use shortcodes in form like Landing Page Template.
            echo do_shortcode( '[forminator_form id="367"]' );
          ?>

        </div>
  </div>

  
</div>
 
<?php get_footer(); ?>