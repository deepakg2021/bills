<?php
/* Template Name: googlesearchapi 
*/
?>
<?php get_header() ?>


<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta charset="utf-8">
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCCUMqqEzDJtd0-_3Wg9vKgmhLZplIvX0E"></script>


<script src="https://fonts.googleapis.com/css?family=Roboto:300,400,500"></script>
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
</head>



<body >
  <h1>bills search using google search </h1>
  <form>
<br>


<div class="wrap-drop" id="noble-gases">
    <span>All Noble Gases</span>
    <ul class="drop">
        <li class="selected"><a>All Noble Gases</a></li>
        <li><a>Helium</a></li>
        <li><a>Neon</a></li>
        <li><a>Argon</a></li>
        <li><a>Krypton</a></li>
        <li><a>Xenon</a></li>
        <li><a>Radon</a></li>
    </ul>
</div>
<style>
 .wrap-drop {
background:#e7ded5;
box-shadow:3px 3px 3px rgba(0,0,0,.2);
cursor:pointer;
margin:0 auto;
max-width:225px;
padding:1rem;
position:relative;
width:75%;
z-index:3;
}

.wrap-drop::after {
border-color:#695d52 transparent;
border-style:solid;
border-width:10px 10px 0;
content:"";
height:0;
margin-top:-4px;
position:absolute;
right:1rem;
top:50%;
width:0;
}

.wrap-drop .drop {
background:#e7ded5;
box-shadow:3px 3px 3px rgba(0,0,0,.2);
display:none;
left:0;
list-style:none;
margin-top:0;
opacity:0;
padding-left:0;
pointer-events:none;
position:absolute;
right:0;
top:100%;
z-index:2;
}

.wrap-drop .drop li a {
color:#695d52;
display:block;
padding:1rem;
text-decoration:none;
}

.wrap-drop span {
color:#928579;
}

.wrap-drop .drop li:hover a {
background-color:#695d52;
color:#e7ded5;
}

.wrap-drop.active::after {
border-width:0 10px 10px;
}

.wrap-drop.active .drop {
display:block;
opacity:1;
pointer-events:auto;
}
</style>

<script>
  // Inspiration: https://tympanus.net/codrops/2012/10/04/custom-drop-down-list-styling/


  function DropDown(el) {
      this.dd = el;
      this.placeholder = this.dd.children('span');
      this.opts = this.dd.find('ul.drop li');
      this.val = '';
      this.index = -1;
      this.initEvents();
  }

  DropDown.prototype = {
      initEvents: function () {
          var obj = this;
          obj.dd.on('click', function (e) {
              e.preventDefault();
              e.stopPropagation();
              $(this).toggleClass('active');
          });
          obj.opts.on('click', function () {
              var opt = $(this);
              obj.val = opt.text();
              obj.index = opt.index();
              obj.placeholder.text(obj.val);
              opt.siblings().removeClass('selected');
              opt.filter(':contains("' + obj.val + '")').addClass('selected');
          }).change();
      },
      getValue: function () {
          return this.val;
      },
      getIndex: function () {
          return this.index;
      }
  };

  $(function () {
      // create new variable for each menu
      var dd1 = new DropDown($('#noble-gases'));
      // var dd2 = new DropDown($('#other-gases'));
      $(document).click(function () {
          // close menu on document click
          $('.wrap-drop').removeClass('active');
      });
  });
  </script>

<textarea placeholder="Enter Area name to populate Latitude and Longitude" name="address" onFocus="initializeAutocomplete()" id="locality" ></textarea><br>
<input type="hidden" name="city" id="city" placeholder="City" value="" ><br>
<input type="hidden" name="latitude" id="latitude" placeholder="Latitude" value="" ><br>
<input type="hidden" name="longitude" id="longitude" placeholder="Longitude" value="" ><br>
<input type="hidden" name="place_id" id="location_id" placeholder="Location Ids" value="" >
<input type="button" name="googleapi_location" id="googleapi_location" value="search" ><br>
</form>
<script type="text/javascript">
  function initializeAutocomplete(){
    var input = document.getElementById('locality');
    // var options = {
    //   types: ['(regions)'],
    //   componentRestrictions: {country: "IN"}
    // };
    var options = {}

    var autocomplete = new google.maps.places.Autocomplete(input, options);

    google.maps.event.addListener(autocomplete, 'place_changed', function() {
      var place = autocomplete.getPlace();
      var lat = place.geometry.location.lat();
      var lng = place.geometry.location.lng();
      var placeId = place.place_id;
      // to set city name, using the locality param
      var componentForm = {
        locality: 'short_name',
      };
      for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
          var val = place.address_components[i][componentForm[addressType]];
          document.getElementById("city").value = val;
        }
      }
      document.getElementById("latitude").value = lat;
      document.getElementById("longitude").value = lng;
      document.getElementById("location_id").value = placeId;
    });
  }
</script>
</body>
</html>



<?php get_footer() ?>