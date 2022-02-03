 <!-- ======= Footer ======= -->
 <?php

 if ( is_page_template( 'front-page.php' ) )
 {
    ?><body> <?php
 }
 else if(is_page_template( 'eventandoffers.php' )) 
 {
     ?><body class="inner-page">
       <a href="javascript:void(0)" class="book-table-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">Book A Table</a>
     <style>html 
     {
       margin-top: 0px !important;
     }
     </style>
     <?php
 } 
 else if(is_page_template( 'join_the_team.php' )) 
 {
     ?><body class="inner-page">
       <a href="javascript:void(0)" class="book-table-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">Book A Table</a>
     <style>html 
     {
       margin-top: 0px !important;
     }
     </style>
     <?php
 } 
 else if(is_page_template( 'location.php' )) 
 {
     ?><body class="inner-page">
       <a href="javascript:void(0)" class="book-table-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">Book A Table</a>
     <style>html 
     {
       margin-top: 0px !important;
     }
     </style>
     <?php
 } 
 else if(is_page_template( 'group_bookings.php' )) 
 {
     ?><body class="inner-page booking-group-bdy">
     <a href="javascript:void(0)" class="book-table-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">Book A Table</a>
     <style>html 
     {
       margin-top: 0px !important;
     }
     </style>
     <?php
 } 

 else if(is_page_template( 'faq.php' )) 
 {
     ?><body class="inner-page booking-group-bdy">
     <a href="javascript:void(0)" class="book-table-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">Book A Table</a>
     <style>html 
     {
       margin-top: 0px !important;
     }
     </style>
     <?php
 }

 else if(is_page_template( 'contact.php' )) 
 {
     ?><body class="inner-page booking-group-bdy">
     <a href="javascript:void(0)" class="book-table-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">Book A Table</a>
     <style>html 
     {
       margin-top: 0px !important;
     }
     </style>
     <?php
 }  
 ?>
<footer>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-2 col-lg-2">
          <div class="footer-logo">
            <!-- <a href="index.html">
              <img src="images/footer-logo.svg" alt="" />
            </a> -->

            <a href="javascript:void(0)">
            <?php cot_showfooterlogo(); ?>
            </a>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-2 col-lg-2">
          <!-- <ul>
            <li><a href="javascript:void(0)">Book A Table</a></li>
            <li><a href="javascript:void(0)">Group Bookings</a></li>
            <li><a href="javascript:void(0)">Our Story</a></li>
            <li><a href="javascript:void(0)">Gift Cards</a></li>
          </ul> -->
          <?php 
           $args = array(
                       
               'menu' => 'Footer Menu1'
           );
           wp_nav_menu( $args ); 
           ?>
        </div>
        <div class="col-6 col-sm-6 col-md-2 col-lg-2">
          <!-- <ul>
            <li><a href="javascript:void(0)">Sustainability</a></li>
            <li><a href="javascript:void(0)">Newsletter</a></li>
            <li><a href="javascript:void(0)">Menus</a></li>
            <li><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#locations-popup">Locations</a></li>
          </ul> -->
          <?php 
           $args = array(
                       
               'menu' => 'Footer Menu2'
           );
           wp_nav_menu( $args ); 
           ?>
        </div>
        <div class="col-6 col-sm-6 col-md-2 col-lg-2">
          <!-- <ul>
            <li><a href="javascript:void(0)">Contact</a></li>
            <li><a href="javascript:void(0)">FAQs</a></li>
            <li><a href="javascript:void(0)">Join The Team</a></li>
          </ul> -->
          <?php 
           $args = array(
                       
               'menu' => 'Footer Menu3'
           );
           wp_nav_menu( $args ); 
           ?>
        </div>
        <div class="col-6 col-sm-6 col-md-2 col-lg-2">
          <div class="title">Follow Us</div>
          <!-- <ul class="social-section"> -->
            <!-- <li>
              <a href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" width="10.161" height="18.973" viewBox="0 0 10.161 18.973">
                  <path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f" d="M11.105,10.672l.527-3.434H8.337V5.01a1.717,1.717,0,0,1,1.936-1.855h1.5V.232A18.265,18.265,0,0,0,9.112,0C6.4,0,4.625,1.645,4.625,4.622V7.239H1.609v3.434H4.625v8.3H8.337v-8.3Z" transform="translate(-1.609)" fill="#fff"/>
                </svg>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" width="20.671" height="20.671" viewBox="0 0 20.671 20.671">
                  <path id="Icon_simple-instagram" data-name="Icon simple-instagram" d="M10.336,0C7.528,0,7.177.013,6.075.062A7.621,7.621,0,0,0,3.566.543,5.061,5.061,0,0,0,1.735,1.735,5.043,5.043,0,0,0,.543,3.566,7.6,7.6,0,0,0,.062,6.075C.01,7.177,0,7.528,0,10.336S.013,13.494.062,14.6a7.626,7.626,0,0,0,.481,2.509,5.069,5.069,0,0,0,1.192,1.831,5.054,5.054,0,0,0,1.831,1.192,7.631,7.631,0,0,0,2.509.481c1.1.052,1.453.062,4.261.062s3.158-.013,4.261-.062a7.649,7.649,0,0,0,2.509-.481,5.282,5.282,0,0,0,3.023-3.023,7.626,7.626,0,0,0,.481-2.509c.052-1.1.062-1.453.062-4.261s-.013-3.158-.062-4.261a7.644,7.644,0,0,0-.481-2.509,5.073,5.073,0,0,0-1.192-1.831A5.036,5.036,0,0,0,17.106.543,7.6,7.6,0,0,0,14.6.062C13.494.01,13.144,0,10.336,0Zm0,1.86c2.759,0,3.088.014,4.177.061a5.7,5.7,0,0,1,1.918.357A3.4,3.4,0,0,1,18.393,4.24a5.707,5.707,0,0,1,.356,1.918c.049,1.09.06,1.418.06,4.177s-.013,3.088-.064,4.177a5.817,5.817,0,0,1-.363,1.918,3.282,3.282,0,0,1-.774,1.19,3.225,3.225,0,0,1-1.189.772,5.749,5.749,0,0,1-1.925.356c-1.1.049-1.42.06-4.185.06s-3.089-.013-4.185-.064A5.861,5.861,0,0,1,4.2,18.383a3.2,3.2,0,0,1-1.188-.774,3.138,3.138,0,0,1-.775-1.189,5.866,5.866,0,0,1-.362-1.925c-.039-1.085-.053-1.42-.053-4.172s.014-3.089.053-4.187a5.859,5.859,0,0,1,.362-1.924,3.064,3.064,0,0,1,.775-1.189A3.057,3.057,0,0,1,4.2,2.249a5.721,5.721,0,0,1,1.913-.363c1.1-.039,1.421-.052,4.185-.052l.039.026Zm0,3.168a5.307,5.307,0,1,0,5.307,5.307A5.307,5.307,0,0,0,10.336,5.028Zm0,8.753a3.445,3.445,0,1,1,3.445-3.445A3.444,3.444,0,0,1,10.336,13.781Zm6.758-8.962a1.24,1.24,0,1,1-1.24-1.239A1.241,1.241,0,0,1,17.094,4.819Z" fill="#fff"/>
                </svg>
              </a>
            </li> -->
            
            <!-- <li>
              <a href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" width="22.674" height="18.451" viewBox="0 0 22.674 18.451">
                  <path id="Icon_ionic-logo-twitter" data-name="Icon ionic-logo-twitter" d="M24.088,6.686a9.4,9.4,0,0,1-2.672.735,4.668,4.668,0,0,0,2.047-2.575,9.244,9.244,0,0,1-2.955,1.129A4.651,4.651,0,0,0,12.46,9.156a4.554,4.554,0,0,0,.12,1.062A13.183,13.183,0,0,1,2.989,5.35a4.661,4.661,0,0,0,1.446,6.218,4.544,4.544,0,0,1-2.114-.581v.058a4.656,4.656,0,0,0,3.733,4.565,4.683,4.683,0,0,1-1.225.163,4.389,4.389,0,0,1-.874-.086A4.659,4.659,0,0,0,8.3,18.92a9.327,9.327,0,0,1-5.78,1.994,9.429,9.429,0,0,1-1.11-.067,13,13,0,0,0,7.121,2.1A13.157,13.157,0,0,0,21.781,9.7c0-.2,0-.4-.014-.6A9.47,9.47,0,0,0,24.088,6.686Z" transform="translate(-1.413 -4.5)" fill="#fff"/>
                </svg>
              </a>
            </li> -->
          <!-- </ul> -->
          <?php dynamic_sidebar('footer-sidebar'); ?>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12">
          <!-- <ul class="bottom-nav">
            <li><a href="javascript:void(0)">Modern Slavery Act</a></li>
            <li><a href="javascript:void(0)">Gender Pay Gap</a></li>
            <li><a href="javascript:void(0)">Animal Welfare policy</a></li>
            <li><a href="javascript:void(0)">Terms & Conditions</a></li>
            <li><a href="javascript:void(0)">Privacy policy</a></li>
          </ul> -->
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
<!-- <a href="javascript:void(0)" class="book-table-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">Book A Table</a> -->
<div class="modal fade book-table-popup" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle"  aria-hidden="true">
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
            <div class="">
              <form method="post" id="form-findATable">
                <div class="row justify-content-center align-items-center">
                  <div class="col-12 col-sm-3 col-md-6 col-lg-3">
                    <div class="mb-3">
                      <label for="formGroupExampleInput" class="form-label">Table Size</label>
                      <select name="party_size" class="form-select form-select-lg mb-3 input" aria-label=".form-select-lg example">
                        <option selected value="">Select No. of people</option>
                        <option value="1">1 people</option>
                        <option value="2">2 people</option>
                        <option value="3">3 people</option>
                        <option value="4">4 people</option>
                        <option value="5">5 people</option>
                      </select>
                      <span class="bor-bottom"></span>
                      <span class="error text-danger"></span>
                    </div>
                  </div>
                  <div class="col-12 col-sm-3 col-md-6 col-lg-3">

                    <div class="mb-3">
                      <label for="formGroupExampleInput" class="form-label">Date</label>
                      <div id="datepicker" class="input-group date lg mb-3" data-date-format="yyyy-mm-dd">
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
                    </select>

                      <span class="bor-bottom"></span>
                      <span class="error text-danger"></span>
                    </div>
                  </div>
                  <div class="col-12 col-sm-3 col-md-6 col-lg-3">
                    <div class="mb-3">
                      <label for="formGroupExampleInput" class="form-label">Location</label>
                      <select name="location" class="form-select form-select-lg mb-3 input" aria-label=".form-select-lg example">
                       <!--  <option selected>Bath</option>
                        <option value="1" disabled>&nbsp; - London</option>
                        <option value="2">&nbsp;Chiswick</option>
                        <option value="3">&nbsp;Clink Street</option>
                        <option value="4">&nbsp;Covent Garden</option>
                        <option value="5">&nbsp;Ealing</option>
                        <option value="6">&nbsp;Baker Street</option> -->

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
                  <div class="col-12"><a href="javascript:void(0)" class="btn" data-page-id='findATable' id="findATable" ><span>Find A Table</span></a></div>
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

<!-- <div class="modal fade book-table-popup like-seated" id="selectseating" tabindex="-1" aria-labelledby="selectseatingTitle"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title" id="exampleModalCenteredScrollableTitle"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <svg fill="#e69e3d" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="96px" height="96px"><path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"/></svg>
        </button>
      </div>
      <div class="modal-body">
            <div class="select_seating_type">
              <div class="heading">Where would you like to be seated?</div>
              <ul class="seated-box" id="seated-box">
                <li><span>Standard</span> <a href="javascript:void(0)" class="btn select"><span><i>Select</i><i>Selected</i></span></a></li>
                <li><span>High Top</span> <a href="javascript:void(0)" class="btn select"><span><i>Select</i><i>Selected</i></span></a></li>
                <li><span>Outdoor</span> <a href="javascript:void(0)" class="btn select"><span><i>Select</i><i>Selected</i></span></a></li>
              </ul>
              <a href="javascript:void(0)" class="btn" data-bs-toggle="modal" data-bs-target="#choose-alternative-time"><span>Continue</span></a>
            </div>
          </div>
          <div class="modal-footer">
                  <p>For bookings of 8+ people please enquire <a href="javascript:void(0)">here.</a></p>
                </div>
    </div>
  </div>
</div> -->

<div class="modal fade book-table-popup" id="choose-alternative-time" tabindex="-1" aria-labelledby="choose-alternative-timeTitle"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <svg fill="#e69e3d" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="96px" height="96px"><path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"/></svg>
        </button>
      </div>
      <div class="modal-body">
        <div class="continer">
          <div class="row justify-content-center align-items-center">
            <div class="col-12 col-sm-12 col-md-10 col-lg-12 col-xl-12">
              <div id="alt_time_error" class="text-center text-danger"></div>
              <div class="heading">Please Choose An Alternative Time</div>
              <div class="alternative-time">
                <div class="center" id="content">
                  <div class="center" id="content">
                  </div>
                  <!-- <ul>
                    <li class="internal">7:15</li>
                    <li class="internal due">7:30</li>
                    <li class="internal">7:45</li>
                    <li class="internal">8:00</li>
                    <li class="internal">8:15</li>
                    <li class="internal">8:30</li>
                    <li class="internal">8:45</li>
                    <li class="internal">9:00</li>
                    <li class="internal">9:00</li>
                    <li class="internal">10:00</li>
                    <li class="internal">10:00</li>
                    <li class="internal">10:00</li>
                    
                  </ul>
                  <ul>
                    <li class="internal">8:15</li>
                    <li class="internal current">8:30</li>
                    <li class="internal">8:45</li>
                    <li class="internal">9:00</li>
                    <li class="internal">9:15</li>
                    <li class="internal">9:30</li>
                    <li class="internal">9:45</li>
                    <li class="internal">10:10</li>
                    <li class="internal">10:11</li>
                    <li class="internal">10:12</li>
                    <li class="internal">10:12</li>
                    <li class="internal">10:12</li>
                    
                  </ul>
                  <ul>
                    <li class="internal">10:15</li>
                    <li class="internal">10:30</li>
                    <li class="internal">10:45</li>
                    <li class="internal">11:00</li>
                    <li class="internal">11:15</li>
                    <li class="internal">11:30</li>
                    <li class="internal">11:45</li>
                    <li class="internal">12:00</li>
                    <li class="internal">12:00</li>
                    <li class="internal">12:00</li>
                    <li class="internal">12:00</li>
                    <li class="internal">12:00</li>
                    
                  </ul> -->
                </div>
                <div class="bottom-section">
                  <button id="left-button"><img src="<?php bloginfo('template_url'); ?>/assets/images/more-left-arrow-icon.svg" alt="" /> </button>
                  <div class="mid">More times</div>
                  <button id="right-button"><img src="<?php bloginfo('template_url'); ?>/assets/images/more-right-arrow-icon.svg" alt="" /></button>
                  
                </div>
                
                <a href="javascript:void(0)" class="btn full" id="billsLockTable"><span>Next</span></a>
                <a href="javascript:void(0)" class="back-btn white" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable"><span>Back</span></a>
                
              </div>
              
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade book-table-popup fill-your-details" id="your-details" tabindex="-1" aria-labelledby="your-detailsTitle"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <svg fill="#e69e3d" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="96px" height="96px"><path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"/></svg>
        </button>
      </div>
      <div class="modal-body">
        <div class="continer">
          <div class="row justify-content-center align-items-center">
            <div class="col-12 col-sm-12 col-md-8 col-lg-4 col-xl-3">
              <div class="heading">Fill In Your Details</div>
              <div>
                <form action="" method="post" id="detailsForm">
                  <div class="mb-3 hafe">
                    <label for="formGroupExampleInput" class="form-label">Mr</label>
                    <select class="form-select form-select-lg input" name="gender" id="gender" aria-label=".form-select-lg example">
                      <option selected="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                    </select>
                    <span class="bor-bottom"></span>
                     <span class="error text-danger"></span>
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">First Name</label>
                      <input type="text" name="first_name" id="first_name" class="form-control input" onkeypress="javascript:return allowchar(event);">
                      <span class="bor-bottom"></span>
                       <span class="error text-danger"></span>
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Surname</label>
                      <input type="text" name="last_name" id="last_name" class="form-control input" onkeypress="javascript:return allowchar(event);">
                      <span class="bor-bottom"></span>
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Contact Number</label>
                      <input type="text" name="contact" id="contact" class="form-control input" onkeypress="javascript:return allownumbers(event);" maxlength="10">
                      <span class="bor-bottom"></span>
                      <span class="error text-danger"></span>
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Email</label>
                      <input type="text" name="email_address" id="email_address1" class="form-control input">
                      <span class="bor-bottom"></span>
                      <span class="error text-danger"></span>
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Select An Occasion (optional)</label>
                      <input type="text" name="Surname" id="Surname"  class="form-control input" onkeypress="javascript:return allowchar(event);">
                      <span class="bor-bottom"></span>
                      <span class="error text-danger"></span>
                  </div>
                </form>
                
                <a href="javascript:void(0)" class="btn full"  id="billsTableBook"><span>Confirm Your Booking</span></a>
                <a href="javascript:void(0)" class="back-btn white" data-bs-toggle="modal" data-bs-target="#choose-alternative-time"><span>Back</span></a>
                
              </div>
              
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade book-table-popup" id="booking-confirmed" tabindex="-1" aria-labelledby="booking-confirmedTitle"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <svg fill="#e69e3d" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="96px" height="96px"><path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"/></svg>
        </button>
      </div>
      <div class="modal-body">
        <div class="continer">
          <div class="row justify-content-center align-items-center">
            <div class="col-12 col-sm-12 col-md-10 col-lg-5 col-xl-5">
              <div class="heading">Booking Confirmed</div>
              <div class="inner-booking">
                <p class="message"></p>
                <p name="confirmation" ></p>
                <p name="hotel" ></p>

                <p><span name="time"></span><span name="date"></span></p>

                <p>Bill’s Bar & Restaurant, Manchester</p>
                <p>7:00pm, 12th October</p>
                <p name="party_size"></p>
              </div>
              
              <div class="booking-bottom">
                <a href="javascript:void(0)" class="btn "><span>Get Directions</span></a>
                <a href="javascript:void(0)" class="btn full" data-bs-dismiss="modal" aria-label="Close"><span>Close</span></a>
              </div>
              
            </div>
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

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
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
