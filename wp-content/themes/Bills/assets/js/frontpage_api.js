jQuery(document).ready(function($){
	
	$(document).on("click", "#go", function(e)
	{
		
		//var start_date_time = $('#txtDate').val(); 
		//alert(start_date_time);
		//console.log(start_date_time);
		var error = false;

		//validate each field for non empty
		var input = $("#form-frontpage .input");
		$.each( input, function(index, element){
			if( $(element).val() == '' )
			{
				// alert( $(value).attr("name") );
				$(element).siblings("span.error").html("please select");
				error = true;
				return false;
			}else{
				$(element).siblings("span.error").html("");
				error = false;
			}
		});
		console.log(error);
		//if there is no error
		if( error == false ){
		//if( true ){
			//make data to be sent to the api
			var self = $(this);
			
			// $(self).attr("data-bs-toggle", "modal");
			// $(self).attr("data-bs-target", "#choose-alternative-time");
			
			var formattedDate = new Date( $('#txtDate').val() );
			var d = formattedDate.getDate();
			var m =  formattedDate.getMonth();
			m += 1;  // JavaScript months are 0-11
			var y = formattedDate.getFullYear();
			let start_date_time = y + "-" + m + "-" + d ;
			let rid = $("select[name=restaurant]").val();	
		  //start_date_time = $('#txtDate').val();
			let party_size = $("select[name=people]").val();
			let time = "T"+$("select[name=party_time]").val();
			//time = "T15:35";
			// hotel_id = "334879";
			//alert(start_date_time);
			//alert(party_size);
			//alert(time);
			//alert(rid);
			$.ajax({
				type 		: 'post',
				dataType : 'json',
				url  		: '/Bills/wp-admin/admin-ajax.php',
				data 		: {'action': 'searchLocationAjax','hotel_id': rid, 'start_date': start_date_time, 'party_size': party_size, 'time': time },
				success 	: function(response){
					// console.log( typeof( response ) );
					// $(self).attr("data-bs-toggle", "modal");
					// $(self).attr("data-bs-target", "#choose-alternative-time");
					// $('#exampleModalCenteredScrollable').modal('hide');
					var nextSlide = '';
					console.log( response.available_time_slots );
					console.log( $("select[name=party_time]").val() );
					if( response.available_time_slots.includes( $("select[name=party_time]").val() )){
						$(".alternative-time .internal.active").data("time", $("select[name=party_time]").val() );
					        // var formData = $('#billsLockTable').parents('form').serialize();  
					        /*var formattedDate = new Date( $("#txtDate input").val() );
		        			var d = formattedDate.getDate();
		        			var m =  formattedDate.getMonth();
		        			m += 1;  // JavaScript months are 0-11
		        			var y = formattedDate.getFullYear();
		        			var start_date_time = y + "-" + m + "-" + d ;
					        var rid = $("select[name=restaurant]").val();
								  var party_size = $("select[name=people]").val();*/
								// time = "T"+$(".alternative-time .internal.active").data("time");
								//time = "T"+$("select#time").val();
								//console.log("hiiiiiii");
					        $.ajax({
					             type : "POST",
					             dataType : "json",
					             url :  '/Bills/wp-admin/admin-ajax.php',
					             data : {'action': 'bills_lock_table', 'hotel_id': rid, 'start_date_time': start_date_time, 'party_size': party_size, 'time': time },
								success: function(response) { 
					        		console.log(response);
					        		localStorage.setItem("reservationToken", response);

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

						var option = "<ul>";
						for(i=0;i<response.all_time_slot.length;i++)
						{
							if( i == 16 ){
								option += "</ul><ul>";
							}
							// console.log( response.all_time_slot[i] , response.available_time_slots);
							if( $.inArray(response.all_time_slot[i], response.available_time_slots ) !== -1 ){
								option += '<li class="internal" data-time="'+response.all_time_slot[i]+'">'+response.all_time_slot[i]+'</li>';
							}else{
								option += '<li class="internal due">'+response.all_time_slot[i]+'</li>';
							}
						}
						option += "</ul>";

						// console.log( option );
						$(document).find("#choose-alternative-time #content").html(option);
						
						$('#choose-alternative-time').modal('show');
					}
				},
				error: function( error ){
					console.log( "error", error);
				}
			});

				/*var responseJSON = JSON.parse( response );
				console.log( responseJSON.times_available, "responseJSON");

				var availableSating = [];
				$.each( responseJSON.times_available, function( index, element ){
					availableSating.push( element.availabilityType[0] )
				});*/
			//call the api
			//get response
			//set the response in html and load it
		}
	});

	$('#billsLockTable').click(function () 
	{ 
		// billsLockTable();
        if( jQuery(".alternative-time .internal.active:not('.due')").length == 0){
					$("#alt_time_error").html("Please select a time");
				}else{  
					$("#alt_time_error").html("");
	        // var formData = $('#billsLockTable').parents('form').serialize();  
	        /*var rid = $("select[name=restaurant]").val();	
          var formattedDate = new Date( $("#txtDate input").val() );
    			var d = formattedDate.getDate();
    			var m =  formattedDate.getMonth();
    			m += 1;  // JavaScript months are 0-11
    			var y = formattedDate.getFullYear();
    			var start_date_time = y + "-" + m + "-" + d ;
          party_size = $("select[name=people]").val();*/
        	time = "T"+$(".alternative-time .internal.active").data("time");
				//time = "T"+$("select#time").val();      
				//console.log("hiiiiiii");
	        $.ajax({
	             type : "POST",
	             dataType : "json",
	             url :  '/Bills/wp-admin/admin-ajax.php',
	             data : {'action': 'bills_lock_table', 'hotel_id': rid, 'start_date_time': start_date_time, 'party_size': party_size, 'time': time },
				success: function(response) { 
	        		console.log(response);
	        		localStorage.setItem("reservationToken", response);

	        		$('#your-details').modal('show');
	            },
	            complete: function( response )
	            {
	            	console.log(response.responseText);
	        		localStorage.setItem("reservationToken", response.responseText);
	        		$('#your-details').modal('show');
	            }
	        });
	      }
    });

      jQuery('#billsTableBook').click(function () {
				var error = false;
      	var input = $("#detailsForm input");
      	var email_address = $("#email_address1").val();
      	var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(email_address);
  	    if(!re) 
  	    {

  	    	 console.log("email is not valid");
  	    	 $("#email_address1").siblings("span.error").html("email is not valid");
  	    	 error = true;
  	    	 return false;
	      } 
  	    else 
  	    {
  	    		console.log("email is valid");
  	    		error = false;
  	    		 
  	    }
      	//alert(email_address);
      	$.each( input, function(index, element){
      		if( $(element).val() == '' )
      		{
      			// alert( $(value).attr("name") );
      			$(element).siblings("span.error").html("Required, please fill");
      			error = true;
      			return false;
      		}
      		else
      		{
      			$(element).siblings("span.error").html("");
      			error = false;
      		}
      	});

      	if( error == false )
      	{

					var formData = jQuery('#your-details').find('form').serialize();
	        
	        /*var start_date_time = $("#datepicker input").val(),
	        var formattedDate = new Date( $("#txtDate input").val() );
    			var d = formattedDate.getDate();
    			var m =  formattedDate.getMonth();
    			m += 1;  // JavaScript months are 0-11
    			var y = formattedDate.getFullYear();
    			var start_date_time = y + "-" + m + "-" + d ;
				  var party_size = $("select[name=people]").val();
				  var time = "T"+$("select[name=party_time]").val();*/
				  rid = $("select[name=restaurant]").val();
				  console.log( formData+'&hotel_id='+rid+'&reservation_token='+localStorage.getItem('reservationToken')+'&action=bills_table_book', "data=================================" );  
					jQuery.ajax({
	            type : "POST",
	            url : '/Bills/wp-admin/admin-ajax.php',
	            data : formData+'&hotel_id='+rid+'&reservation_token='+localStorage.getItem('reservationToken')+'&action=bills_table_book',
							success: function(response) 
	            { 
	           		
	           		console.log( JSON.parse( response ) );
	           		response = JSON.parse( response );
	           		$("p.message").html("Thankyou for your booking!");

	           		var t = response.date_time.split("T")[1];
	            	var d = response.date_time.split("T")[0];
	            	$("span[name='time']").html(t+", ");
	            	$("span[name='date']").html(d);
	            	$("p[name='confirmation']").html(" Confirmation No : "+response.confirmation_number);
	            	$("p[name='hotel']").html(rid);
	            	$("p[name='party_size']").html(response.party_size+" people");
	        		  $('#booking-confirmed').modal('show');
	            },
	            error: function(error)
	            {
	            	//alert(2);
	            	console.log( error );
	           		$("p.message").html("Oops! Something went wrong. Try again after some time.");
	            }
	            /*,
	            complete: function( response )
	            {
	            	console.log( JSON.parse(response.responseText) );
	            	var t = response.responseText.date_time;
	            	var d = response.responseText.date_time;
	            	$("span[name='time']").html(t);
	            	$("span[name='date']").html(d);
	            	$("p[name='hotel']").html(rid);
	            	$("p[name='party_size']").html(response.responseText.party_size);
	        		  $('#booking-confirmed').modal('show');
	            }*/
	        });
	      }
        //console.log(result.json);
    });
});