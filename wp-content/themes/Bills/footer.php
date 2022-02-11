<footer>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-2 col-lg-2">
          <div class="footer-logo">
            <a href="<?php echo site_url(); ?>">
            <?php cot_showfooterlogo(); ?>
            </a>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-2 col-lg-2">
          <?php 
           $args = array(    
               'menu' => 'Footer Menu1'
           );
           wp_nav_menu( $args ); 
           ?>
        </div>
        <div class="col-6 col-sm-6 col-md-2 col-lg-2">
          <?php 
           $args = array(       
               'menu' => 'Footer Menu2'
           );
           wp_nav_menu( $args ); 
           ?>
        </div>
        <div class="col-6 col-sm-6 col-md-2 col-lg-2">
          <?php 
           $args = array(          
               'menu' => 'Footer Menu3'
           );
           wp_nav_menu( $args ); 
           ?>
        </div>
        <div class="col-6 col-sm-6 col-md-2 col-lg-2">
          <div class="title"><?php echo get_field( "follow_us", "option" ); ?></div>
          <?php $fSocial =  get_field( "social_icon_footer", "option" ); ?>
            <ul class="social-section">
              <?php foreach ($fSocial as $fSoc) { ?>            
              <li>
                <a href="<?php echo $fSoc['link'] ?>">
				  	
                  <img src="<?php echo esc_url($fSoc['image']) ?>">
                  
                </a>
              </li>  
              <?php  }  ?>                    
            </ul>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12">
          <?php 
           $args = array(
               'menu_class' => 'bottom-nav',        
               'menu' => 'Footer Menu4'
           );
           wp_nav_menu( $args ); 
           ?>
          <div class="copyright">Website by <a href="javascript:void(0)">TheLoyaltyCo.</a></div>
        </div>
      </div>
    </div>
  </footer>

<!-- Booking Process First Model -->    
<div class="modal fade book-table-popup first" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle"  aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenteredScrollableTitle"></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<svg fill="#e69e3d" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="96px" height="96px"><path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"/></svg>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="book-table-section">
						<div class="bookingMessage text-danger text-center"></div>
							<div class="">
								<form method="post" id="form-findATable">
									<div class="row justify-content-center align-items-center">
										<div class="col-12 col-sm-3 col-md-6 col-lg-3">
											<div class="mb-3">
												<label for="formGroupExampleInput" class="form-label">Table Size</label>
												<select name="party_size" class="form-select form-select-lg mb-3 input" aria-label=".form-select-lg example">	
                          										
                          <option value="1">1 people</option>
													<option value="2">2 people</option>
													<option value="3">3 people</option>
													<option value="4">4 people</option>
												</select>
												<span class="bor-bottom"></span>
												<span class="error text-danger"></span>
											</div>
										</div>
										<div class="col-12 col-sm-3 col-md-6 col-lg-3">
											<div class="mb-3">
											  <label for="formGroupExampleInput" class="form-label">Date</label>
											  <div id="popupDatepicker" class="input-group date lg mb-3" data-date-format="yyyy-mm-dd">
												  <input class="form-control input" type="text" readonly />
												  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
												  <span class="error text-danger"></span>
											  </div>
											  <span class="bor-bottom"></span>
											</div>
										</div>
										<div class="col-12 col-sm-3 col-md-6 col-lg-3">
											<div class="mb-3">
											  <label for="formGroupExampleInput" class="form-label">Time</label>
											 <input type="text"  name="time" class="form-select input timedrop"/>
											   <span class="bor-bottom"></span>
											  <span class="error text-danger"></span>
											</div>
										</div>
										<div class="col-12 col-sm-3 col-md-6 col-lg-3">
											<div class="mb-3">
											  <label for="formGroupExampleInput" class="form-label">Location</label>
											  <select name="location" class="form-select form-select-lg mb-3 input locationSelect" aria-label=".form-select-lg example">
												<option value="" >Select Location</option>
												<?php 
												  $locations = getLocations();
												  if( !empty($locations) ){
													foreach ($locations as $rid => $title) { ?>
													  <option value="<?= $rid ?>" ><?= $title ?></option>
												<?php
													}
												  }
												?>
											  </select>
											  <span class="bor-bottom"></span>
											  <span class="error text-danger"></span>
											</div>
										</div>
										<div class="col-12">
											<a href="javascript:void(0)" class="btn" data-page-id='findATable' id="findATable"  >
												<span>Find A Table</span>
											</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			<div class="modal-footer">
				<p>For bookings of 8+ people please enquire <a href="<?php echo home_url("/group-bookings/")?>">here.</a></p>
				<p>Powered By <img src="<?php bloginfo('template_url'); ?>/assets/images/opentable-official.svg" alt="" /></p>
			</div>
		</div>
	</div>
</div>

<!-- Booking Process First Model END --> 
<!-- Booking Process Second Model (Alternate Time) --> 
<div class="modal fade book-table-popup second" id="choose-alternative-time" tabindex="-1" aria-labelledby="choose-alternative-timeTitle"  aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenteredScrollableTitle"></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
				  <svg fill="#e69e3d" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="96px" height="96px"><path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"/></svg>
				</button>
			</div>
			<div class="modal-body">
				<div class="alternative-section">
					<div id="alt_time_error" class="text-center text-danger"></div>
					<div class="heading">Please Choose An Alternative Time</div>
					<div class="alternative-time">
						<div class="alternative-time-chart">
						  <div class="owl-carousel owl-theme alternative-time-carousel">
						   </div>
						  <div class="more-times">
							<span class="text">More times</span>
						  </div>
						</div>
						<a href="javascript:void(0)" class="btn full" id="billsLockTable"><span>Next</span></a>
						<a href="javascript:void(0)" class="back-btn white" data-bs-toggle="modal"><span>Back</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Booking Process Second Model END --> 
<!-- Booking Process Third Model (Booking User Detail) --> 
<div class="modal fade book-table-popup fill-your-details third" id="your-details" tabindex="-1" aria-labelledby="your-detailsTitle"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenteredScrollableTitle"></h5>
        <h5 class="modal-title" id="exampleModalCenteredScrollableTitle"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <svg fill="#e69e3d" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="96px" height="96px"><path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"/></svg>
        </button>
      </div>
      <div class="modal-body">
           <div class="find_your_details_popup">
              <div class="heading">Fill In Your Details</div>
              <div class="details-section">
                <form action="" method="post" name="myForm" id="detailsForm" >
                  <div class="text-danger text-center detailsMessage"></div>
                  <div class="mb-3 hafe">
                    <label for="formGroupExampleInput" class="form-label">Title</label>
                    <select class="form-select form-select-lg input" name="gender" id="gender" aria-label=".form-select-lg example">
                      <option selected="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                    </select>
                    <span class="bor-bottom"></span>
                     <span class="error text-danger"></span>
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">First Name</label>
                      <input type="text" name="first_name" id="first_name" value="" class="form-control input" onkeypress="javascript:return allowchar(event);">
                      <span class="bor-bottom"></span>
                       <span class="error text-danger"></span>
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Surname</label>
                      <input type="text" name="last_name" value="" id="last_name" class="form-control input" onkeypress="javascript:return allowchar(event);">
                      <span class="bor-bottom"></span>
                      <span class="error text-danger"></span>
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Contact Number</label>
                      <input type="text" name="contact" value="" id="contact" class="form-control input" onkeypress="javascript:return allownumbers(event);" maxlength="14" minlength="8">
                      <span class="bor-bottom"></span>
                      <span class="error text-danger"></span>
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Email</label>
                      <input type="text" name="email_address" value="" id="email_address1" class="form-control input">
                      <span class="bor-bottom"></span>
                      <span class="error text-danger"></span>
                  </div>

                  <!-- <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Select An Occasion (optional)</label>
                      <input type="text" name="occasion" id="occasion" class="form-control">
                      <span class="bor-bottom"></span>
                      
                  </div> -->
                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Select An Occasion (optional)</label>
                      <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                        <option selected="">Birthday</option>
                        <option value="1">Marriage Anniversary </option>
                      </select>
                      <span class="bor-bottom"></span>
                  </div>
                </form>
                
                <a href="javascript:void(0)" class="btn full" onclick ="return storeValues(this);" onclick="alertval()" id="billsTableBook"><span>Confirm Your Booking</span></a>
                <a href="javascript:void(0)" class="back-btn white" data-bs-toggle="modal" ><span>Back</span></a>
                
              </div>
              
            </div>
          
      </div>
    </div>
  </div>
</div>
<!-- Booking Process Third Model END --> 
<!-- Booking Process Fourth Model (Booking Confrimation) --> 
<div class="modal fade book-table-popup fourth" id="booking-confirmed" tabindex="-1" aria-labelledby="booking-confirmedTitle"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenteredScrollableTitle"></h5>
        <button type="button" class="btn-close" aria-label="Close" onclick="goHome();">
          <svg fill="#e69e3d" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="96px" height="96px"><path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"/></svg>
        </button>
      </div>
      <div class="modal-body">
            <div class="booking-confi-popup">
              <div class="heading">Booking Confirmed</div>
              <div class="inner-booking">
                <!-- <p class="message"></p> -->
                <!-- <p name="confirmation" ></p> -->
               
                <p name="hotel" ></p>
                <p><span name="time"></span><span name="date"></span></p>
                <p name="party_size"></p>
              </div>
              
              <div class="booking-bottom">
                <a href="javascript:void(0)" class="btn "><span>Get Directions</span></a>
                <!-- <a href="<?php //echo home_url(); ?>" class="btn full" aria-label="Close"><span>Close</span></a> -->
              </div>
              <div class="like-seated-box">
                <div class="title">Where would you like to be seated?</div>
                <ul class="seated-view">
                  <li>
                    <a href="javascript:void(0)" class="btn active"><span>Standard</span></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)" class="btn"><span>High Top</span></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)" class="btn"><span>Outdoor</span></a>
                  </li>
                </ul>
                <a href="javascript:void(0)" class="up-booking-btn">Update Booking</a>
              </div>
            </div>
      </div>
    </div>
  </div>
</div>
<!-- Booking Process Fourth Model END --> 
<!-- Booking Process choose bill restaurent Model --> 
<button id="choose-bill-restaurent_model" data-bs-toggle="modal" data-bs-target="#choose-bill-restaurent" style="display:none;"></button>
<div class="modal fade choose-bill-restaurent" id="choose-bill-restaurent" tabindex="-1" aria-labelledby="choose-bill-restaurentTitle"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
			<svg fill="#1A3327" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="96px" height="96px"><path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"/></svg>
		</button>
	  </div>
	  <div class="modal-body">
			<div class="continer">
				<div class="row justify-content-center align-items-center">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="event-offer-popup-section">
							<div class="heading">Find my nearest Bill’s to me</div>
								<a class="btn" id="nearest_bill_restro_btn" href="javascript:void(0)"><span>Search Bill’s near me</span></a>
								<a class="btn-hover" href="javascripv:void(0)" data-bs-dismiss="modal">Choose my own location</a>
						</div>
					</div>
				</div>
			</div>
	  </div>
	
	</div>
  </div>
</div>



<?php wp_footer() ?>
</body>