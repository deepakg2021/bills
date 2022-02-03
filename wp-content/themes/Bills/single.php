<?php get_header() ?>
<!-- Main -->

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
        if(have_posts()) {
            while(have_posts()) {
                the_post(); ?>
          <div class="card">
            <div class="row align-items-center ">
              <div class="col-12 col-sm-4 col-md-6 col-lg-5">
                <div class="img-box">
                  <img src="<?php echo the_post_thumbnail_url(); ?>" alt="" />
                </div>
              </div>
              <div class="col-12 col-sm-4 col-md-6 col-lg-7">
                <div class="inner">
                  <div class="title"><?php the_title(); ?></div>
                  <div class="dec">
                   <?php the_content(); ?>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>

        <?php }
            }
        ?>
        </div>
      </div>
        
    </div>
  </section>
<?php get_footer() ?>