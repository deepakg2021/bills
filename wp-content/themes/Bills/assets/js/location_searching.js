jQuery(document).ready(function($) 
{
    //send lat long from here, get the category lat lngs in functions.php. return the lat lngs of the category to js again. Cal Distance here and send the categories matched to functions.php again. In functions.php search for restaurants with these locations.

    //return the restaurancts here again and show them with js simple !!!

    let latLngs = null;
    $("#search_loc").click(function()
    {

        $('.location_errorMsg').html('');

        location_key = jQuery('#location_key').val();

        var lat = $("#lat_postal").val(); 
        var lng = $("#lng_postal").val();

        console.log(lat);
        console.log(lng);

        if(location_key == '') {

            $(".location_errorMsg").html('Please enter something');

        }
        else if(lat == '' || lng == '') {
           $(".location_errorMsg").html('Please select something');
        }

        else{

            call_ajax( lat, lng );

        }
        
    });

    function call_ajax( lat, lng )
    {
        
		 
        var data = {'action': 'get_location_taxonomy_ajax', lat:lat, lng:lng,type:'bysearch'};

        $.ajax({
            url: SITE_URL+"/wp-admin/admin-ajax.php",
            data: data, // form data
            type: 'post',
            success: function(data)
            {
            
				jQuery('.searchArea').hide();
				jQuery('.nearest-bill-restorent').show();
				jQuery('.term_box').html(data);
				
				
				
            }
        });
    }

function callback(response, status){
    var result = response.rows[0].elements;
}

/* initMap();
function initMap() {
    var input = document.getElementById('location_key');
    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            window.alert("Please select an address and proceed");
            return;
        }
        document.getElementById('lat').value = place.geometry.location.lat();
        document.getElementById('lng').value = place.geometry.location.lng();
    });
} */
});