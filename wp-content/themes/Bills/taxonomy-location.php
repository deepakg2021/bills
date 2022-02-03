<?php 
	get_header();
	$term = get_queried_object(); 
?>

<section class="top-header loc-six-banner">
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<?php 	
				$fimage = get_field('location_single_page','location_'.$term->term_id);
				$countSlide = 0;
				if($fimage['featured_banner']) {
				foreach($fimage['featured_banner'] as $fimg) { 
				
				
					if($countSlide == 0) { ?>
						<button type="button" data-bs-target="#carouselExampleCaptions" class="active" aria-current="true" data-bs-slide-to="<?php echo $countSlide; ?>" class="" aria-label="Slide <?php echo $countSlide; ?>"></button> <?php 
					}
					else { ?>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $countSlide; ?>" class="" aria-label="Slide <?php echo $countSlide; ?>"></button>
					<?php }
					?>	
				
			<?php $countSlide++; } }?>
			
		</div>
		<div class="carousel-inner">
			<?php 

				
				$count = 1;
				if($fimage['featured_banner']) {
				foreach($fimage['featured_banner'] as $fimg) {		
				if($count == 1){
					echo '<div class="carousel-item active">';
				}
				else {
					echo '<div class="carousel-item">';
				}	
			?>

			
				<img class="desktop" src="<?php echo $fimg['desktop'] ?>" alt="...">
				<img class="mobile" src="<?php echo $fimg['mobile'] ?>" alt="...">
				<div class="carousel-caption d-md-block">
					<h5><?php echo single_term_title(); ?></h5>
					<p><?php echo get_field('location_address_text','location_'.$term->term_id); ?></p>
				</div>
			</div>
			<?php  $count++;}} ?>			
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
						<?php $timing =  get_field('timing_and_contact','location_'.$term->term_id); ?>
						<div class="heading"><?php  echo $timing['opening_hours_title']; ?></div>

						<?php 
						if($timing['timing']) {
							foreach($timing['timing'] as $time) { ?>
								<div class="weeks">
									<?php echo $time['days']; ?>
									<span><?php echo $time['time']; ?></span>
								</div>
						<?php }} ?>
						
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
					<div class="bottom-sec">
						<div class="heading"><?php echo $timing['contact_title']; ?></div>
						<div class="phone"><?php echo get_field('location_phone_number','location_'.$term->term_id); ?></div>
						<div class="heading"><?php echo $timing['find_us_title']; ?></div>
						<a href="javascript:void(0)" class="direct-btn">Get Directions</a>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<div class="bottom-sec">
						<div class="heading">Gallery</div>
						<div class="homesliderbox">
							
							<div class="owl-carousel owl-theme nonloop">
								<?php if($timing['gallery']) { ?>
								<?php foreach($timing['gallery'] as $gallery) { ?>
									<div class="item">
										<div class="itembox">
											<div class="ItemImgBox">
												<a class="image-link" href="<?php echo $gallery['image'] ?>" title="<?php echo single_term_title(); ?>"><img src="<?php echo $gallery['image'] ?>" alt="" /></a>
											</div>
										</div>
									</div>
								<?php } }?>
								
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
						<?php if($timing['description']) {
						 foreach($timing['description'] as $description) { ?>
							<p>
								<?php echo $description['content']; ?>
							</p>
						<?php } 
						}?>						
						
						<ul class="loc-icon-view">
							<?php if($timing['facility']) {
						 		foreach($timing['facility'] as $facility) { ?>
								<li>
									<img src="<?php echo $facility['image']; ?>" alt="location-wifi-icon"> <?php echo $facility['title']; ?>
								</li>							
								<?php } 
							}?>	
						</ul>
					</div>
				
				</div>
			</div>
		</div>
	</div>
	<div class="map-sec location_mapNew">
		
		<!-- <img src="images/map-img.png" alt="map-img"> -->
		<!-- <img src="http://maps.googleapis.com/maps/api/staticmap?center=-15.800513,-47.91378&zoom=11&size=200x200&sensor=false"> -->
		<a href="javascript:void(0)"><!-- <img class="icon" src="images/map-icon.svg" alt=""> --></a>
		<?php $map =  get_field('address','location_'.$term->term_id);?>
		<iframe
            width="100%"
            height="450"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCCUMqqEzDJtd0-_3Wg9vKgmhLZplIvX0E&q=<?php  echo $map['lat']; ?>, <?php  echo $map['lng']; ?>" allowfullscreen>
        </iframe>
        <div class="map-content-box">
        	<div class="location"><?php echo single_term_title(); ?></div>
        	<p><?php echo get_field('location_address_text','location_'.$term->term_id); ?></p>
        </div>
	</div>
</div>


<?php get_footer(); ?>