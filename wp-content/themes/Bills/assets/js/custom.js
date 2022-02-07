jQuery(document).ready(function($) {

	$('.timedrop').timepicker({
        timeFormat: 'HH:mm',
        interval: 15,
        minTime: '10',
        maxTime: '11:00pm',
        defaultTime: '11',
        startTime: '10:00',
        dynamic: false,
        dropdown: true,
        scrollbar: false
    });
	
	 $("#homeDatepicker").datepicker({
		autoclose: true,
		format: "d M",
		todayHighlight: true,
		startDate: '-0m'
	}).datepicker('update', new Date()); 
	
	$("#popupDatepicker").datepicker({
		autoclose: true,
		format: "M dd, yyyy",
		todayHighlight: true,
		startDate: '-0m'
	}).datepicker('update', new Date());
	
	$(".groupDatepicker input").datepicker({
		autoclose: true,
		format: "M dd, yyyy",
		todayHighlight: true,
		startDate: '-0m',
		
	});
	
	
	$(".groupDatepicker input,.custom-time-validation input").attr('autocomplete',false);
	$(".groupDatepicker input").attr('readonly',true);
	
	function english_ordinal_suffix(dt)
    {
    return dt.getDate()+(dt.getDate() % 10 == 1 && dt.getDate() != 11 ? 'st' : (dt.getDate() % 10 == 2 && dt.getDate() != 12 ? 'nd' : (dt.getDate() % 10 == 3 && dt.getDate() != 13 ? 'rd' : 'th'))); 
    }
	
	
	
	if($('#menu-primary li').hasClass('booktablemenu')){
		$('#menu-primary li.booktablemenu a').attr('data-bs-toggle','modal');
		$('#menu-primary li.booktablemenu a').attr('data-bs-target','#exampleModalCenteredScrollable');
		
	}
	
	
	
	/* Group Booking and Contact us Custom Validation */
	
	regx = /^[0-9]+$/;
	//regx1 = /^[0-9:]+$/;
	regx1 = /^([01]?[0-9]|2[0-3]):[0-5][0-9]$/;
	jQuery('.custom-phone-validation input').bind('focusout keyup ',function() {
		
		if ( regx.test( jQuery( this ).val() ) || jQuery( this ).val() === '' ) {
			
			if(jQuery( this ).val().length > 6){
			
				jQuery( this ).parent().parent().find( 'label.forminator-label--validation' ).remove();
			}else{
				if(jQuery( this ).val() != ''){
					jQuery( this ).parent().parent().find( 'label.forminator-label--validation' ).remove();
					jQuery( this ).prop('aria-invalid',true);
					jQuery( this ).parent().parent().append( '<label class="forminator-label--validation">Minimum 6 digit of number.</label>' );
				}
				
			}
			
		} else {
			if ( ! jQuery( this ).parent().parent().find( 'label.forminator-label--validation' ).length ) {
				jQuery( this ).prop('aria-invalid',true);
				jQuery( this ).parent().parent().append( '<label class="forminator-label--validation">Only numeric value are allowed.</label>' );
				
			}
		}
	});
	jQuery('.custom-time-validation input').bind('focusout keyup ',function() {
		
		if ( regx1.test( jQuery( this ).val() ) || jQuery( this ).val() === '' ) {
			
			jQuery( this ).parent().parent().find( 'label.forminator-label--validation' ).remove();
			
			
		} else {
			if ( ! jQuery( this ).parent().parent().find( 'label.forminator-label--validation' ).length ) {
				
				jQuery( this ).parent().parent().append( '<label class="forminator-label--validation">Only time format are allowed.</label>' );
				
			}
		}
	});
	
	
	jQuery('.forminator-button-submit').on('click',function(){
		
		if(jQuery('label.forminator-label--validation').length > 0){
			return false;
		}
		
	});
	
	
	/* end Group Booking and Contact us Custom Validation */
	
	
	/* Event & Offer Filter */
	
	
	$('ul.drop li').click(function () 
    {
       $('#response').empty();
       $('#response').append("<div class='adjust'><img src='https://i.gifer.com/ZZ5H.gif'/></div>"); 
       var loc = $(this).attr("data-value");
       call_ajax(loc);                 
    });

    $(".filter-input").change(function()
    {
        $('#response').empty();
        $('#response').append("<div class='adjust'><img src='https://i.gifer.com/ZZ5H.gif'/></div>");
        call_ajax();
    });
    function call_ajax(loc = null){
        if( loc == null ){  
            loc = jQuery("div#event li.selected").length != 0 ? jQuery("div#event li.selected").data("value") : '' ;
        }
        var data = {
            'action'        : 'eventSearch',
            'location_id'   : loc,
            'region_id'     : $("#region").val(),
            'option'        : $("input[name=option]:checked").val(),
            'exclude_id'    : $("input[name=exclude_ids]").val()
         };
        $.ajax({
            url: SITE_URL+"/wp-admin/admin-ajax.php",
            data: data, // form data
            type: 'post',
            success: function(data)
            {
                $('#response').empty();
                $('#response').append("<div class='adjust'><img src='https://i.gifer.com/ZZ5H.gif'/></div>");
                $(".box-section .container").html("<div class='row'>"+data+"</div>");
                $('.btn-load-more').hide();
                

            }
        });
    }

    $("#clearfilter").click(function()
    {
        window.location.reload();
        jQuery('.form-check-input').prop('checked', false);
    });
		
	/* END Event & Offer Filter */
	
	
	
	
	
	

	function initGeolocation(){
        if( navigator.geolocation){
           navigator.geolocation.getCurrentPosition( success, fail );
        }
        else{
           alert("Sorry, your browser does not support geolocation services.");
        }
    }
    function success(position){
		console.log('longitude',position.coords.longitude);
    }
    function fail(){
        // Could not obtain location
     }


    $("#nearest_biil_backbtn").click(function() {
        $(".nearest-bill-restorent").hide();
        $(".inner-box").show();
    })

    $(document).find("#seated-box li").click(function() {
        $("#seated-box li").removeClass("active");
        // $(".tab").addClass("active"); // instead of this do the below 
        $(this).addClass("active");
    });

    

    $(document).on("click", ".alternative-time-carousel .time-box:not(.not-available)", function() {
        $(document).find(".time-box").removeClass("selected");
        $(this).addClass("selected");       
    });

    // Please Choose An Alternative Time script End//

   

    $(window).resize(function() {
        navset();

    });

    navset();

    function navset() {
        if ($(window).width() > 300) {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('#navbar_top').addClass("sticky");
                    // add padding top to show content behind navbar
                    //$('body').css('padding-top', $('.topbar').outerHeight() + 'px');
                } else {
                    $('#navbar_top').removeClass("sticky");
                    // remove padding top from body
                    //$('body').css('padding-top', '0');
                }
            });
        } // end if
    }

    $("a.promopopup-box").click(function() {
        $(".modal-backdrop").addClass("popup-view");
    });
    $("a.btn-close").click(function() {
        $(".modal-backdrop").removeClass("popup-view");
    });


    // select box ul li view start///////

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
        initEvents: function() {
            var obj = this;
            obj.dd.on('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                $(this).toggleClass('active');
            });
            obj.opts.on('click', function() {
                var opt = $(this);
                obj.val = opt.text();
                obj.index = opt.index();
                obj.placeholder.text(obj.val);
                opt.siblings().removeClass('selected');
                opt.filter(':contains("' + obj.val + '")').addClass('selected');
            }).change();
        },
        getValue: function() {
            return this.val;
        },
        getIndex: function() {
            return this.index;
        }
    };

    $(function() {
        // create new variable for each menu
        var dd1 = new DropDown($('#location'));
        var dd1 = new DropDown($('#party_size'));
        var dd1 = new DropDown($('#event'));
        // var dd2 = new DropDown($('#other-gases'));
        $(document).click(function() {
            // close menu on document click
            $('.wrap-drop').removeClass('active');
        });
    });

    // select box ul li view End///////

});


jQuery(document).ready(function($) {


    $(".menu-link-bottom .right-part .icon-box").click(function () {
        $(".menu-link-bottom .view").toggleClass("show", 1000);
        $(".menu-link-bottom .select-box").toggleClass("show", 1000);
        // $(".tab").addClass("active"); // instead of this do the below 
        $(this).toggleClass("active");   
    });

    // resiz_header_height();
    // $(window).resize(resiz_header_height);
    $("a.promopopup-box").click(function() {
        $(".modal-backdrop").addClass("popup-view");
    });

    $("ul.link li a.choose-bill-restaurent").click(function() {
        $(".modal-backdrop").addClass("popup-view-light");
    });
    $("a.btn-close").click(function() {
        $(".modal-backdrop").removeClass("popup-view-light");
    });


    // $("#request-a-quote").click(function() {
    // $('html, body').animate({scrollTop: $("#contact").offset().top -60 }, 2000);
    // });

    /* ----------------------------------------------------------- */
    /*  4. TESTIMONIAL SLIDE(SLICK SLIDER)
    /* ----------------------------------------------------------- */

    $('.testimonial-slider').slick({
        dots: true,
        infinite: true,
        speed: 800,
        arrows: true,
        autoplay: true,
        slidesToShow: 1,
        slide: 'div',
        cssEase: 'linear'
    });

    /* ----------------------------------------------------------- */
    /*  5. CLIENT SLIDE (SLICK SLIDER)
    /* ----------------------------------------------------------- */

    jQuery(".nonloop").slick({
        dots: false,
        infinite: false,
        speed: 300,
        arrows: false,
        slidesToShow: 2.4,
        slidesToScroll: 2,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1.5

                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1.5

                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1.5

                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    jQuery('.nonloop').magnificPopup({
        type: 'image',
        delegate: 'a',

        gallery: {
            enabled: true
        },
        callbacks: {

            buildControls: function() {
                // re-appends controls inside the main container
                this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
            }

        }
    });

    jQuery('#choose-alternative-time .btn-close').on('click',function(){
		
			if($(".alternative-time-carousel").hasClass('slick-initialized')){
				$(".alternative-time-carousel").removeClass('slick-initialized');
				$('.more-times').html('');
				
			}
		
			
		
	});
	jQuery('.first .btn-close').on('click',function(){
		
		jQuery('.first select').val('');
		jQuery('.first input').val('');
		
			/* var formID = "#form-frontpage";
			jQuery( formID + " div#location li").removeClass('selected');
			jQuery( formID ).find("div#party_size li").removeClass('selected');
			jQuery( formID ).find("input[name=time]" ).val('');
			jQuery( formID ).find("input[name=time]" ).val(''); */
		
			
		
	});
	
	

});


