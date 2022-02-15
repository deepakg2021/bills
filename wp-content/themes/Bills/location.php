<?php 

/*
Template Name: Locations
*/

get_header(); ?>
<div class="locations-wrapper">
  <div class="inner">
    <div class="container searchArea">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-sm-12 col-md-10 col-lg-6 col-xl-4">
          <div class="inner-box">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/location-map-icon.svg" alt="" />
            <form action="" method="post" >
              <div class="heading">Find My Nearest Bill’s</div>
              <div class="location_errorMsg"></div>
              <div class="searchbox">   
               <input type="hidden" name="lat" id="lat_postal" value="">
                <input type="hidden" name="lng" id="lng_postal" value="">             
                <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-feather-search.svg" alt="icon-feather-search" />
                <input type="text" autocomplete="off" class="form-control"  required onkeyup="findAddress()"  id="postcode" name="postcode" placeholder="Enter your location" onkeydown="clearSearch()" onkeypress="return enterSearch(event)" value="" />        
                <span class="error"></span>
                <div id="search-result"></div>
             
                <button class="btn" name="search_loc" id="search_loc" type="button"><span>Search</span></button>

              </div>
              <div class="bottom-sec">
                <div class="sub-title">Or search nearby restaurants</div>
                <a class="btn" id="seah_bil_resto_btn" class="bills_nearest"> <span>Search Bill’s near me</span> </a>
                <input type="hidden" name="nearest_long" id = "nearest_long" value="">
                <input type="hidden" name="nearest_lat" id = "nearest_lat"  value="">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="nearest-bill-restorent hide">
      <div class="continer">
        <div class="row justify-content-center align-items-center">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-9">
            <div class="heading">Your Nearest Bill's Restaurants are...</div>
            <div class="box term_box">
              <?php 
                global $wp_query;
                $postsPerPage = 3;
                $location_terms = get_terms([
                  'taxonomy' => 'location',
                  'hide_empty' => false,
                  'number' => $postsPerPage,
                ]);                             
               
                foreach($location_terms as $terms) {

                  $location_address = get_field( 'location_address_text','location_'.$terms->term_id );
                  $location_phone = get_field( 'location_phone_number','location_'.$terms->term_id );
                  $location_link = get_field( 'location_link','location_'.$terms->term_id );
                  ?>

                  <ul>
                    <li>
                      <div class="title"><?php echo $terms->name ?><span>0.1 miles</span></div>
                    </li>
                    <li>
                      <p><?php echo $location_address; ?></p>
                      <p><?php echo $location_phone; ?></p>
                     
                    </li>
                    <li>
                      <a href="<?php echo $location_link; ?>" class="btn large"><span>View Restaurant</span></a>
                      <a href="javascript:void(0)" class="btn large full"><span>Make A Booking</span></a>
                    </li>
                  </ul>
                <?php } ?>

            </div>
            <div class="bottom-sec">             
              <?php 
				      $totalLocation = wp_count_posts( 'restaurant' )->publish;
              if (  $totalLocation > 3){
              echo '<a class="btn location_more" data-count="6" data-tcount="'.$totalLocation.'"> <span>Show More</span> </a>';
              }  ?>         

              <a class="back-btn" id="nearest_biil_backbtn"> <span>Back</span> </a>
			  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<?php get_footer(); ?>

<script type="text/javascript">
  jQuery( document ).ready(function() {
	 let latLngs = null;
  });
  
function call_ajax( lat, lng )
{
	var data = {'action': 'get_location_taxonomy_ajax', lat:lat, lng:lng,type:'bysearch'};

	jQuery.ajax({
		type: 'POST',
		url: SITE_URL+"/wp-admin/admin-ajax.php",
		data: data, // form data
		success: function(data)
		{
		
			jQuery('.searchArea').hide();
			jQuery('.nearest-bill-restorent').show();
			jQuery('.term_box').html(data);
			
			
			
		}
	});
}  
  
</script>
<script>
// this is code for search location using keyword, and geocode lat lng. 
function clearSearch() {

  document.getElementById("my-custom-select").style.display = "none";  
}

/*function showError(message) {
  var error = document.getElementById("errorMessage");
  error.innerText = message;
  error.style.display = "block";
  
  setTimeout(function(){
    error.style.display = "none";
  }, 10000)
}
*/
function enterSearch(e) {
  if (e.keyCode == 13){
    findAddress();  
  }
}

function findAddress(SecondFind) {
  var Text = document.getElementById("postcode").value;
  
  var Container = "";     
      
  if (SecondFind !== undefined){
     Container = SecondFind;
  } 
  
var Key = "EX92-AN75-WY72-TY84",
    //BJ23-BX33-AH88-FB69
    IsMiddleware = false,
    Origin = "",
    Countries = "GBR",
    Limit = "10",
    Language = "en-gb",  
    url = 'https://api.addressy.com/Capture/Interactive/Find/v1.10/json3ex.ws';

//li class click method goes here
jQuery(document).on('click', '#my-custom-select li',function (e) {
    var className = jQuery(this).attr('class');
      $value = jQuery(this).attr('value');
    if (className === 'Address') {        
         retrieveAddress(Key, $value);
         document.getElementById("my-custom-select").style.display = "none";
        }
        else{
          findAddress($value);
        }
    //some_other_thing(className);
});

var params = '';
    params += "&Key=" + encodeURIComponent(Key);
    params += "&Text=" + encodeURIComponent(Text);
    params += "&IsMiddleware=" + encodeURIComponent(IsMiddleware);
    params += "&Container=" + encodeURIComponent(Container);
    params += "&Origin=" + encodeURIComponent(Origin);
    params += "&Countries=" + encodeURIComponent(Countries);
    params += "&Limit=" + encodeURIComponent(Limit);
    params += "&Language=" + encodeURIComponent(Language);

var http = new XMLHttpRequest();


http.open('POST', url, true);
http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
http.onreadystatechange = function() {
  if (http.readyState == 4 && http.status == 200) {
      var response = JSON.parse(http.responseText);
      if (response.Items.length == 1 && typeof(response.Items[0].Error) != "undefined") {
         /*showError(response.Items[0].Description);*/
      }
      else {
        if (response.Items.length == 0)
            showError("Sorry, there were no results");

        else {
          var resultBox = document.getElementById("search-result");
          
          if (resultBox.childNodes.length > 0) {
            var selectBox = document.getElementById("my-custom-select");
            selectBox.parentNode.removeChild(selectBox)
          }
              
           var resultArea = document.getElementById("search-result");
          var list = document.createElement("ul");
              list.id = "selectList";
              list.setAttribute("class", "my-custom-select custom-select-scroll");
              list.setAttribute("id", "my-custom-select");
              resultArea.appendChild(list);          
             
          for (var i = 0; i < response.Items.length; i++){    
            var li = document.createElement("li"); 
            li.setAttribute("value", response.Items[i].Id)
            li.innerText = response.Items[i].Text + " " + response.Items[i].Description;
            // li.setAttribute("class", response.Items[i].Type);
            li.setAttribute("class", response.Items[i].Type );
            list.appendChild(li);
          }
          selectAddress(Key);                
        }
    }
  }
}
  http.send(params);
};  

function selectAddress(Key){
    var resultList = document.getElementById("search-result");
    if (resultList.childNodes.length > 0) {   
        var elem = document.getElementById("my-custom-select");
         //console.log(elem);
        //IE fix
              elem.onchange = function (e) {
                var target = e.target[e.target.selectedIndex];
                console.log('lopl');
                if (target.text === "Select Address") {                  
                  return;
                }   
                if (target.className === "Address"){
                  retrieveAddress(Key, target.value);
                }
                
                else {
                  findAddress(target.value)
                }             
            };        
          }
};

function retrieveAddress(Key, Id){
  var Field1Format = "";
  var url = 'https://api.addressy.com/Capture/Interactive/Retrieve/v1.00/json3.ws';
  var params = '';
      params += "&Key=" + encodeURIComponent(Key);
      params += "&Id=" + encodeURIComponent(Id);
      params += "&Field1Format=" + encodeURIComponent(Field1Format);
   
var http = new XMLHttpRequest();
http.open('POST', url, true);
http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
http.onreadystatechange = function() {
  if (http.readyState == 4 && http.status == 200) {
      var response = JSON.parse(http.responseText);

      if (response.Items.length == 1 && typeof(response.Items[0].Error) != "undefined") {
        //showError(response.Items[0].Description);       
      }
      else {
        if (response.Items.length == 0)
            showError("Sorry, there were no results");
        else {   
          //console.log(response.Items);       
          var res = response.Items[0];        
          var city = response.Items[0]['City']; 
          var PostalCode = response.Items[0]['PostalCode']; 
          var street1 = response.Items[0]['Line1']; 
          var street2 = response.Items[0]['Line2']; 
          var country = response.Items[0]['CountryName']; 
          document.querySelector('#postcode').value = street1+' '+street2+', '+city+', '+country;
          if(PostalCode!==""){
          getgeocode(PostalCode);
            
          }

       }
    }
  }
}
  http.send(params); 
}

function getgeocode(PostalCode){
var Key = 'EX92-AN75-WY72-TY84'; 
var country = 'gbr'; 
var url = 'https://api.addressy.com/Geocoding/International/Geocode/v1.10/json3.ws';
var params = '';
    params += "&Key=" + Key;
    params += "&Country=" + country;
    params += "&Location=" + PostalCode;
var http = new XMLHttpRequest();
http.open('POST', url, true);
http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
http.onreadystatechange = function() {
  if(http.readyState == 4 && http.status == 200) {
      var response = JSON.parse(http.responseText);
      // Test for an error
      if (response.Items.length == 1 && typeof(response.Items[0].Error) != "undefined") {
        // Show the error message
        //alert(response.Items[0].Description);
      }
      else {
        // Check if there were any items found
        if (response.Items.length == 0)
            alert("Sorry, there were no results");
        else {
              var resp = response.Items[0];
              console.log(resp);        
              var Latitude = response.Items[0]['Latitude']; 
              var Longitude = response.Items[0]['Longitude'];  
              document.querySelector('#lat_postal').value = '';
              document.querySelector('#lng_postal').value = '';              
              document.querySelector('#lat_postal').value = Latitude;
              document.querySelector('#lng_postal').value = Longitude;              
            // PUT YOUR CODE HERE
            //FYI: The output is an array of key value pairs (e.g. response.Items[0].Name), the keys being:
            //Name
            //Latitude
            //Longitude
        }
    }
  }
}
http.send(params);
}

function  makeABookButtonLocation(e) {
   Selectedrid = e.getAttribute('rid'); 
   // jQuery(".locationSelect option:contains(Selectedrid)") ;
   jQuery('.locationSelect').val(Selectedrid);
}

</script>

