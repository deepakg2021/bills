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
                        <option value="">Select No. of people</option>
                        <option value="1">1 people</option>
                        <option value="2">2 people</option>
                        <option value="3">3 people</option>
                        <option value="4">4 people</option>
                        <option value="5">5 people</option>
                        <option value="6">6 people</option>
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
                      <select  id="time" class="timepicker form-select form-select-lg mb-3 input" aria-label=".form-select-lg example" name="time">
                        <option value="">Select Time</option>
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
                    </select>
                    <!-- <input type="text" id="time" name="time" class="form-select input"/> -->

                      <span class="bor-bottom"></span>
                      <span class="error text-danger"></span>
                    </div>
                  </div>
                  <div class="col-12 col-sm-3 col-md-6 col-lg-3">
                    <div class="mb-3">
                      <label for="formGroupExampleInput" class="form-label">Location</label>
                      <select name="location" class="form-select form-select-lg mb-3 input" aria-label=".form-select-lg example">
						<option value="" >Select Location</option>
                        <?php 
                          $locations = getLocations();
                          if( !empty($locations) ){
                            //print_r($locations);
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
                  <!-- <div class="col-12"><button class="btn"><span>Find A Table</span></button></div> -->
                  <div class="col-12"><a href="javascript:void(0)" class="btn" data-page-id='findATable' id="findATable"  ><span>Find A Table</span></a></div>
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
      <div class="modal-footer">
        <p>For bookings of 8+ people please enquire <a href="javascript:void(0)">here.</a></p>
        <p>Powered By <a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/assets/images/opentable-official.svg" alt="" /></a></p>
      </div>
    </div>
  </div>
</div>
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


<!-- <div class="modal fade locations-popup" id="locations-popup" tabindex="-1" aria-labelledby="locations-popupTitle"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="continer">
            <div class="row justify-content-center align-items-center">
              <div class="col-12 col-sm-12 col-md-10 col-lg-6 col-xl-4">
                <div class="inner">
                <img src="images/location-map-icon.svg" alt="" />
                  <form action="">
                    <div class="heading">Find My Nearest Bill’s</div>
                      <div class="searchbox">
                        <img src="images/icon-feather-search.svg" alt="icon-feather-search" />
                        <input class="form-control" type="text" name="" placeholder="Enter your location">
                        <button class="btn" type="submit"><span>Search</span></button>
                      </div>
                      <div class="bottom-sec">
                        <div class="sub-title">Or search nearby restaurants</div>
                        <a class="btn" data-bs-toggle="modal" data-bs-target="#locations-result"> <span>Search Bill’s near me</span> </a>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </div>
</div> -->

<!-- <div class="modal fade locations-popup locations-result" id="locations-result" tabindex="-1" aria-labelledby="locations-resultTitle"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="continer">
            <div class="row justify-content-center align-items-center">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-9">
                  <div class="heading">Your Nearest Bill's Restaurants are...</div>
                <div class="inner">
                    <ul>
                      <li>
                        <div class="title">Manchester<span>0.1 miles</span></div>
                      </li>
                      <li>
                        <p>3 Hardman Square, Manchester M3 3EB</p>
                        <p>020 4512 6672</p>
                      </li>
                      <li>
                        <a href="javascript:void(0)" class="btn large"><span>View Restaurant</span></a>
                        <a href="javascript:void(0)" class="btn large full"><span>Make A Booking</span></a>
                      </li>
                    </ul>
                    <ul>
                      <li>
                        <div class="title">Trafford<span>4.1 miles</span></div>
                      </li>
                      <li>
                        <p>The Orient 112 The Trafford Centre, Manchester M17 8EH</p>
                        <p>020 4512 6672</p>
                      </li>
                      <li>
                        <a href="javascript:void(0)" class="btn large"><span>View Restaurant</span></a>
                        <a href="javascript:void(0)" class="btn large full"><span>Make A Booking</span></a>
                      </li>
                    </ul>
                    <ul>
                      <li>
                        <div class="title">Liverpool<span>30.8 miles</span></div>
                      </li>
                      <li>
                        <p>ONE, 10 Thomas Steers Way, Liverpool, L1 8LW</p>
                        <p>020 4512 6672</p>
                      </li>
                      <li>
                        <a href="javascript:void(0)" class="btn large"><span>View Restaurant</span></a>
                        <a href="javascript:void(0)" class="btn large full"><span>Make A Booking</span></a>
                      </li>
                    </ul>
                    

                </div>
                <div class="bottom-sec">
                  <a class="btn"> <span>Show More</span> </a>
                  <a class="back-btn" data-bs-toggle="modal" data-bs-target="#locations-popup"> <span>Back</span> </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </div>
</div> -->

<?php wp_footer() ?>
<script type="text/javascript">
  function goHome(){ window.location.href='<?php echo home_url(); ?>'; }
</script>

</body>
<!-- <script>
 jQuery('.timepicker').timepicker({
     timeFormat: 'h:mm p',
     interval: 15,
     minTime: '10',
     maxTime: '12:00pm',
     defaultTime: '11',
     startTime: '10:00',
     dynamic: false,
     dropdown: true,
     scrollbar: false
 });

</script> -->
<script>
function client_token_generate() {
    jQuery.ajax({
                 type:"POST",
                 url: "/Bills/wp-admin/admin-ajax.php",
                 data: 
                 {
                   action: "client_token_gen",               
                 },
                 success: function(results)
                 {
                  console.log(results);
                 },             
               });
}
</script>
<script type="text/javascript">
  // cookie function start
  var today = new Date();
  var expiry = new Date(today.getTime() + 30 * 24 * 3600 * 1000); // plus 30 days

  function setCookie(name, value)
  {
    document.cookie=name + "=" + escape(value) + "; path=/; expires=" + expiry.toGMTString();
  }

</script>
<script type="text/javascript">
  function storeValues(form)  
  { 
    var cookie =jQuery("#wt-cli-accept-all-btn").hasClass("acceptcookie");
    if(cookie == true){
    var input = jQuery("#detailsForm .input");
    var email_address = jQuery("#email_address1").val();
    var last_name = jQuery("#last_name").val();
    var contact = jQuery("#contact").val();
    var first_name = jQuery("#first_name").val();
    setCookie("first_name", first_name);
    setCookie("contact", contact);
    setCookie("email_address", email_address);
    setCookie("last_name", last_name);
    return true;

    }
   }
   
  function getCookie(name)
    {
      var re = new RegExp(name + "=([^;]+)");
      var value = re.exec(document.cookie);
      return (value != null) ? unescape(value[1]) : null;
    }

  function getcookiesvalues(){
  var first_name = getCookie("first_name");
  var contact = getCookie("contact");
  var last_name = getCookie("last_name");
  var email_address = getCookie("email_address");
   document.querySelector('#first_name').value= first_name; 
   document.querySelector('#contact').value= contact; 
   document.querySelector('#last_name').value= last_name; 
   document.querySelector('#email_address1').value= email_address;     
  }

jQuery('#wt-cli-accept-all-btn').click(function(){
jQuery('#wt-cli-accept-all-btn').addClass("acceptcookie");
});

</script>
<body onload="getcookiesvalues();"></body>