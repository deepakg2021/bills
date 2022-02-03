<?php 
/*
 * Template Name: Faqs
*/
get_header(); ?>
<?php  
$banner = get_field('banner1');
$banner_tittle = get_field('banner_tittle');
$got_a_question = get_field('got_a_question');
$question_description = get_field('question_description');
 ?>
<section class="top-header info-banner desktop-banner" style ="background-image: url('<?php echo esc_url( $banner['desktop_banner'] ); ?>');">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-12">
        <h1><?php echo $banner_tittle; ?></h1>
      </div>
    </div>
  </div>
</section>
<section class="top-header info-banner mobile-banner" style ="background-image: url('<?php echo esc_url( $banner['mobile_banner'] ); ?>');">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-12">
        <h1><?php echo $banner_tittle; ?></h1>
      </div>
    </div>
  </div>
</section>
<div class="wrapper info-wrap-section">
  <div class="got-question">
    <div class="heading-comm">
      <h2><?php echo $got_a_question; ?></h2>
      <p><?php echo $question_description; ?></p>
    </div>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
          <div class="box theme-accordion">
             
                  <?php 
                  // Get the taxonomy's terms
                  $terms = get_terms(
                      array(
                          'taxonomy'   => 'faq_category',
                          'hide_empty' => false,
                      )
                  );

                  $global = get_terms(
                      array(
                          'taxonomy'   => 'faq_global',
                          'hide_empty' => false,
                      )
                  );



                  // Check if any term exists
                  if ( ! empty( $terms ) && is_array( $terms ) ) 
                  {
                  // Run a loop and print them all
                    foreach ( $terms as $term ) 
                    {
				?>
                      <div class="accordion" id="accordionExample">
                        <div class="titie"><?php echo $term->name; ?></div>
                      <?php
                    $args = array(
                        'post_type' => 'faq',
                        'post_status' => 'publish',
                        'tax_query' => array(
							'relation' => 'OR',
							array(
								'relation' => 'AND',
								array(
									'taxonomy' => 'faq_global',
								    'field' => 'term_id',
								    'terms' => $global[0]->term_id,
								
								),
								array(
									'taxonomy' => 'faq_category',
									'field' => 'term_id',
									'terms' => $term->term_id,
								)
							),
							array(
								'taxonomy' => 'faq_category',
								'field' => 'term_id',
								'terms' => $term->term_id,
							),
							
						)
					);
                      
                      $query = new WP_Query( $args );
                      //echo '<br>'; 
                      //print_r($query);
                      if( $query->have_posts() ) :

                          while( $query->have_posts() ): $query->the_post();

                               //$url = wp_get_attachment_url( get_post_thumbnail_id($query->ID) );
                              //print_r( $this_file);
                             //echo $id=get_the_ID();
                      ?>
                       
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_<?php echo $id; ?>" aria-expanded="false" aria-controls="collapseOne">
                               <span><?php echo $query->post->post_title; ?></span>
                              </button>
                            </h2>
                            <div id="collapseOne_<?php echo $id; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                               <?php echo $query->post->post_content; ?>
                              </div>
                            </div>
                          </div>
                        
                      <?php 
                      endwhile;
                          wp_reset_postdata();
                      else :
                          echo 'No posts found';
                           
                      endif;
					  ?>
					  </div>
                      <?php
                    }
                   
                    
                } 
                  ?>
                 
            </div>
        </div>
      </div>
    </div>
  </div>
  
</div>
<?php get_footer(); ?>