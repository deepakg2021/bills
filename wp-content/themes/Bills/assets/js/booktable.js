jQuery(document).ready(function($){
	$(document).on("click", "#findATable", function(e){
		var error = false; 
		let rid = '', party_size = '', time = '';

		if( $(this).data("page-id") == 'findATable' ){
			var input 			= $("#form-findATable .input");
			var formID 			= "#form-findATable";
			var formattedDate = new Date( $( formID + " #popupDatepicker input" ).val() );
			
			rid = jQuery( formID + " select[name=location]" ).find(":selected").val();
			localStorage.setItem("formID", formID);

			party_size = $( formID + " select[name=party_size]" ).val();
			time = "T"+$( formID + " input[name=time]" ).val();
			temp_time = $( formID + " select[name=time]" ).val();

			$.each( input, function(index, element){
				if( $(element).val() == '' ){
					// alert( $(value).attr("name") );
					$(element).siblings("span.error").html("Required, please select");
					error = true;
					return false;
				}else{
					$(element).siblings("span.error").html("");
					error = false;
				}
			});

		}else{
			
			var formID = "#form-frontpage";
			jQuery(".bookingMessage").html("");
			var formattedDate = new Date( $( formID + " #homeDatepicker" ).val() );
			
			
			 rid  		= jQuery( formID + " div#location li.selected").data("value");
			 party_size = jQuery( formID ).find("div#party_size li.selected").data("value");
			 time 		= "T"+jQuery( formID ).find("input[name=time]" ).val().split(" ")[0];
			 temp_time 	= jQuery( formID ).find("input[name=time]" ).val().split(" ")[0];
			
			if( rid == undefined ){
				$( formID + ' div#location').addClass("border border-3 border-danger");
				error = true;
				return false;
			}else{
				error = false;
				$( formID + ' div#location').removeClass("border border-3 border-danger");
			}
			
			if( party_size == undefined ){
				$( formID ).find('div#party_size').addClass("border border-3 border-danger");
				error = true;
				return false;
			}else{
				$( formID ).find('div#party_size').removeClass("border border-3 border-danger");
				error = false;
			}

			if( time == 'Tundefined' ){
				$( formID ).find('input[name=time]').addClass("border border-3 border-danger");
				error = true;
				return false;
			}else{
				$( formID ).find('input[name=time]').removeClass("border border-3 border-danger");
				error = false;
			}
		
			if( formattedDate == '' ){
				$( formID + " #homeDatepicker" ).addClass("border border-3 border-danger");
				error = true;
			}else{
				$( formID + " #homeDatepicker" ).removeClass("border border-3 border-danger");
				error = false;
			}

			


		}
		

		//if there is no error
		if( error == false ){
			//make data to be sent to the api
			var self = $(this);
			var d = formattedDate.getDate();
			var m =  formattedDate.getMonth();
			m += 1;  // JavaScript months are 0-11
			if (m < 10) {
				m = "0" + m;
			}
			if (d < 10) {
				d = "0" + d;
			}
			var y = new Date().getFullYear();
			if(formattedDate.getFullYear() >= new Date().getFullYear()){
				var y = formattedDate.getFullYear();
			}
			let start_date_time = y + "-" + m + "-" + d ;
			$.ajax({
				type 		: 'post',
				dataType 	: 'json',
				url  		: SITE_URL+'/wp-admin/admin-ajax.php',
				data 		: {
								'action': 'searchLocationAjax','hotel_id': rid, 'start_date': start_date_time, 'party_size': party_size, 'time': time },
				success 	: function(response){
					var nextSlide = '';
					console.log( response.available_time_slots );
					console.log( temp_time );
					/*if( response.available_time_slots.length < 1 ){
						jQuery(".bookingMessage").html("No time is available!");
					}else{*/
					
						if( response.available_time_slots.includes( temp_time )){
							
							console.log("deepaktest");
							
							$(".alternative-time .time-box.selected").data("time", temp_time );
						        $.ajax({
						             type : "POST",
						             dataType : "json",
						             url :  SITE_URL+'/wp-admin/admin-ajax.php',
						             data : {'action': 'bills_lock_table', 'hotel_id': rid, 'start_date_time': start_date_time, 'party_size': party_size, 'time': time },
									success: function(response) { 
						        		console.log(response);
						        		localStorage.setItem("reservationToken", response);

						        		if( formID == "#form-frontpage"){
						        			$('#your-details .back-btn').attr("data-bs-target", "");
						        			$('#your-details .back-btn').attr("onclick", "goHome()");
						        		}else{
						     			$('#your-details .back-btn').attr("data-bs-target", "#exampleModalCenteredScrollable");
						        		}
						        		$('#your-details').modal('show');
						            },
						            complete: function( response )
						            {
							            console.log(response.responseText);
							        		localStorage.setItem("reservationToken", response.responseText);
							        		$('#your-details').modal('show');
						            }
						        });
						}else{
							console.log("deep");
							var rem = 12;	
								
							var option = '<div class="alternative-time-grid">';
							for(i=0;i<response.all_time_slot.length;i++)
							{
								// if(i % 4 == 0)
								
									if(i % rem == 0 && i > 0)
									{
										option += '</div><div class="alternative-time-grid">';
									}
								
								// console.log( response.all_time_slot[i] , response.available_time_slots);
								if( $.inArray(response.all_time_slot[i], response.available_time_slots ) !== -1 ){
									option += '<div class="time-box" data-time="'+response.all_time_slot[i]+'">'+response.all_time_slot[i]+'</div>';
								}else{
									option += '<div class="time-box not-available">'+response.all_time_slot[i]+'</div>';
								}
							}
							option += "</div>";

							// console.log( option );
							$(document).find(".alternative-time-carousel").html(option);
							/* if( formID == "#form-frontpage"){
			        			$('#choose-alternative-time .back-btn').attr("data-bs-target", "");
			        			$('#choose-alternative-time .back-btn').attr("onclick", "goHome()");
			        		}else{
			        			$(document).find('#choose-alternative-time .back-btn').attr("data-bs-target", "#exampleModalCenteredScrollable");
			        		}*/

							$('#choose-alternative-time').modal('show'); 
							//$(".alternative-time-carousel").not('.slick-initialized').slick();
							setTimeout(() => {
								
								$(".alternative-time-carousel").not('.slick-initialized').slick({
								    dots: false,
								    infinite: false,
								    speed: 300,
								    arrows: true,
								    slidesToShow: 1,
								    slidesToScroll: 1,
								    appendArrows: $('.more-times'),
								});
								
							}, 200);
							
						}
					/*}*/
				},
				error: function( error ){
					console.log( "error", error);
				}
			});

			//call the api
			//get response
			//set the response in html and load it
		}

	});

	$('#billsLockTable').click(function () {
		// billsLockTable();
		
	
        if( jQuery(".alternative-time .time-box.selected:not('.not-available')").length == 0){
					$("#alt_time_error").html("Please select a time");
				}else{  
					$("#alt_time_error").html("");
					var formID = localStorage.getItem("formID");

					if(formID=='#form-findATable')
					{
							var input 	= $("#form-findATable .input");
							
							var formattedDate = new Date( $( formID + " #popupDatepicker input" ).val() );

							rid = jQuery( formID + " select[name=location]" ).find(":selected").val();
							party_size = $( formID + " select[name=party_size]" ).val();
						    time = "T"+$( formID + " select[name=time]" ).val();

							var d = formattedDate.getDate();
							var m =  formattedDate.getMonth();
								m += 1;  // JavaScript months are 0-11

							if (m < 10) { 	m = "0" + m; }
						      
						    if (d < 10) {  d = "0" + d; }

							var y = formattedDate.getFullYear();
							var start_date_time = y + "-" + m + "-" + d ;
					}
					else
					{
						var formattedDate = new Date( $( formID + " #popupDatepicker" ).val() );
						//var input = $( formID + " .input");
						localStorage.setItem("formID", formID);
						rid  		= jQuery( formID + " div#location li.selected").data("value");
						party_size = jQuery( formID ).find("div#party_size li.selected").data("value");
				        time = "T"+$( formID + " select[name=time]" ).val();

						var d = formattedDate.getDate();
						var m =  formattedDate.getMonth();
						m += 1;  // JavaScript months are 0-11

						if (m < 10) { 	m = "0" + m; }
				      
				        if (d < 10) {  d = "0" + d; }

						var y = formattedDate.getFullYear();
						var start_date_time = y + "-" + m + "-" + d ;

					}
					
					
					time = "T"+$(".alternative-time .time-box.selected").data("time");
		        	$.ajax({
						type : "POST",
						dataType : "json",
						url :  SITE_URL+'/wp-admin/admin-ajax.php',
						data : {'action': 'bills_lock_table', 'hotel_id': rid, 'start_date_time': start_date_time, 'party_size': party_size, 'time': time },
						success: function(response) { 
							console.log(response);
							localStorage.setItem("reservationToken", response);
							$('#your-details .back-btn').attr("data-bs-target", "#choose-alternative-time");
							$('#your-details').modal('show');
						},
						complete: function( response )
						{
							console.log(response.responseText);
							localStorage.setItem("reservationToken", response.responseText);
							$('#your-details .back-btn').attr("data-bs-target", "#choose-alternative-time");
							$('#your-details').modal('show');
						}
	        		});
	      	}
    });

    jQuery('#billsTableBook').click(function () {
 
    	var error = false;
	   	var input = $("#detailsForm .input");
	   	//alert(email_address);
      	$.each( input, function(index, element){
      		if( $(element).val() == '' )
      		{	
      			$(element).siblings("span.error").html("Required, please fill");
      			error = true;
      			return false;
      		}else if($(element).attr('name')=='email_address'){
			
				var re = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i.test($(element).val());
				if(!re) 
				{
					$(element).siblings("span.error").html("email is not valid");
					error = true;
					return false;
				}else{
					$(element).siblings("span.error").html("");
					error = false;
				}
			}else if($(element).attr('name')=='contact'){
			
				
				if($(element).val().length < 10) 
				{
					$(element).siblings("span.error").html("Contact is not valid");
					error = true;
					return false;
				}else{
					$(element).siblings("span.error").html("");
					error = false;
				}
			}
      		else
      		{
      			$(element).siblings("span.error").html("");
      			//$(element).siblings("span.error").remove();
      			error = false;
      		}
      	});
		
		if( error == false )
      	{

      	  var input = $("#form-findATable .input");
      	  var formID = localStorage.getItem("formID");
      	  if( formID == '#form-findATable' ){
      	  	rid = jQuery( formID + " select[name=location]" ).find(":selected").val();
      	  }else{
      	  	rid = jQuery( formID + " div#location li.selected").data("value");
      	  }

			  var formData = jQuery('#your-details').find('form').serialize();
			  console.log( formData+'&hotel_id='+rid+'&reservation_token='+localStorage.getItem('reservationToken')+'&action=bills_table_book', "data=================================" );  
	        //var rid = jQuery("#form-findATable select[name=location]").find(":selected").val();
	        jQuery.ajax({
	            type : "POST",
	            url : SITE_URL+'/wp-admin/admin-ajax.php',
	            data : formData+'&hotel_id='+rid+'&reservation_token='+localStorage.getItem('reservationToken')+'&action=bills_table_book',
							success: function(response) 
	            { 
	            	response = JSON.parse( response );
	           		if( response.errors != undefined){
	           			if( response.errors.length > 0 ){
	           				$(".detailsMessage").html('Something error!');
	           			}
	           		}else{
	           			$(".detailsMessage").html("");
		        		 $.ajax({
						      type: "POST",
						      url: SITE_URL+'/wp-admin/admin-ajax.php',
						      data 		: {'action': 'get_booking_data','hotel_id': rid },
						      success: function (response) {
											console.log( response );
											$("p[name='hotel']").html(response);
											console.log('booking-done');
						      }
						});
						var t = response.date_time.split("T")[1];
		            	var d = response.date_time.split("T")[0];

		            	var months = ['Jan', "Feb", "March", "April", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec" ];
		            	var d = new Date(d);
		            	var formattedDate = d.getDate() + " "+ months[d.getMonth()] +" " + d.getFullYear();


		            	var timeSplit = t.split(':'),
		            	    hours,
		            	    minutes,
		            	    meridian;
		            	  hours = timeSplit[0];
		            	  minutes = timeSplit[1];
		            	  if (hours > 12) {
		            	    meridian = 'PM';
		            	    hours -= 12;
		            	  } else if (hours < 12) {
		            	    meridian = 'AM';
		            	    if (hours == 0) {
		            	      hours = 12;
		            	    }
		            	  } else {
		            	    meridian = 'PM';
		            	  }
		            	  console.log(hours + ':' + minutes + ' ' + meridian);
		            	  var final_time=hours + ':' + minutes + ' ' + meridian


		            	$("span[name='time']").html(final_time+", ");
		            	$("span[name='date']").html(formattedDate);
		            	$("p[name='confirmation']").html(" Confirmation No : "+response.confirmation_number);
		            	$("p[name='party_size']").html(response.party_size+" people");
		        		  $('#booking-confirmed').modal('show');
		        		  console.log('booking-started');
		        		  $.ajax({
						      type: "POST",
						      url: SITE_URL+'/wp-admin/admin-ajax.php',
						      data 		: {'action': 'save_booking_data','hotel_id': rid, 'start_date': response.date_time, 'party_size': response.party_size, 'time': t, 'confirmation_number': response.confirmation_number },
						      success: function (response) {
											console.log( response );
											console.log('booking-done');
						      }
							});
		        		}
	            },
	            error: function(error)
	            {
	            	//alert(2);
	            	console.log( error );
	           		$("p.message").html("Oops! Something went wrong. Try again after some time.");
	            }
	        });
	      }
    });
});