<?php
/*
* Theme Functions File
*/
session_start();
function Bills_theme_setup() 
{
    
    add_theme_support('custom-logo');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_image_size ('home-featured', 680, 400, array('center', 'center'));
    add_image_size ('single-post', 580, 272, array('center', 'center'));
    add_image_size ('portfolio-thumb', 374, 260, array('center', 'center'));


    add_image_size( 'bill-bookings', 437, 314, true);

    add_image_size( 'bill-featured', 600, 513 , true);

    add_theme_support('automatic-feed-links');

    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'Bills' )
    ) );
    
};
add_action('after_setup_theme', 'Bills_theme_setup');

function Bills_scripts()
{ 
	/* StylesSheet */ 
    wp_enqueue_style('bootstrup', get_template_directory_uri(). '/assets/css/bootstrap.min.css');
    wp_enqueue_style('magnific', get_template_directory_uri(). '/assets/css/magnific-popup.css');
    wp_enqueue_style('slick', get_template_directory_uri(). '/assets/css/slick.css');
    wp_enqueue_style('datepicker-css', get_template_directory_uri(). '/assets/css/datepicker.css');
    wp_enqueue_style('timepicker-css', '//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
	
	
	
	/* Scripts  */	
	
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri(). '/assets/js/bootstrap.min.js');
	wp_enqueue_script('slick-js', get_template_directory_uri(). '/assets/js/slick.min.js'); 
    wp_enqueue_script('magnific-js', get_template_directory_uri(). '/assets/js/jquery.magnific-popup.min.js');
    // wp_enqueue_script('magnific-js', get_template_directory_uri(). '/assets/js/jquery.magnific-popup.min.js');
    wp_enqueue_script('datepicker-js', get_template_directory_uri(). '/assets/js/bootstrap-datepicker.js');
    wp_enqueue_script('custom-js', get_template_directory_uri(). '/assets/js/custom.js');
   // wp_enqueue_script('location', get_template_directory_uri(). '/assets/js/location.js');
    wp_enqueue_script('timepicker', '//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js');
    //wp_enqueue_script('places-google-js', 'https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCCUMqqEzDJtd0-_3Wg9vKgmhLZplIvX0E');
    wp_enqueue_script('location_searching', get_template_directory_uri(). '/assets/js/location_searching.js');

    wp_enqueue_script('restorent_searching', get_template_directory_uri(). '/assets/js/restorent_searching.js');

    wp_enqueue_script('booktable', get_template_directory_uri(). '/assets/js/booktable.js');

    // wp_enqueue_script('frontpage-api', get_template_directory_uri(). '/assets/js/frontpage_api.js');

    wp_enqueue_script('jquery-validate', get_template_directory_uri(). '/assets/js/jquery.validate.min.js');

    wp_enqueue_script('validate', get_template_directory_uri(). '/assets/js/validate.js');

    //wp_enqueue_script('group_booking_validation', get_template_directory_uri(). '/assets/js/group_booking_validation.js');

    
}
add_action('wp_enqueue_scripts', 'Bills_scripts');


function Bills_widgets_init() 
{

    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'TheLvy' ),
        'id'            => 'main-sidebar',
        'description'   => 'Main Sidebar on Right Side',
        'before_widget' => '<section id="%1$s" class="box %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h4>',
        'after_title'   => '</h4></header>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Secondry Sidebar', 'TheLvy' ),
        'id'            => 'second-sidebar',
        'description'   => 'Secondry Sidebar',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h4>',
        'after_title'   => '</h4></header>',
        
    ) );

    register_sidebar( array(
        'name'          => __( 'Secondry Sidebar', 'TheLvy' ),
        'id'            => 'second-sidebar',
        'description'   => 'Secondry Sidebar',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h4>',
        'after_title'   => '</h4></header>',
        
    ) );

    register_sidebar( array(
        'name'          => __( 'Secondry Sidebar', 'TheLvy' ),
        'id'            => 'second-sidebar',
        'description'   => 'Secondry Sidebar',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h4>',
        'after_title'   => '</h4></header>',
        
    ) );
    
    register_sidebar( array(
        'name'          => __( 'Footer Sidebar', 'TheLvy' ),
        'id'            => 'footer-sidebar',
        'description'   => 'Footer Sidebar',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h4>',
        'after_title'   => '</h4></header>',
        
    ) );
    
}
add_action( 'widgets_init', 'Bills_widgets_init' );


// Create Post type for Offer Events

function create_post_type_events() 
{
 
    register_post_type( 'events',
    // CPT Options
        array(
            'labels'            => array(
                'name'          => __( 'Events' ),
                'singular_name' => __( 'Events' )
            ),
            'public'            => true,
            'has_archive'       => true,
            'rewrite'           => array('slug' => 'events'),
            'show_in_rest'      => true,
            'supports'          => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),

           // 'capability_type'   => array( 'ivy_collection', 'ivy_collection')

 
        )
    );

    $args = array(
        'hierarchical'          => true,
        'rewrite'               => array( 'slug' => 'filter' ),
        'label'                 => 'Filter',
        
    );
    register_taxonomy( 'filter', 'events', $args );

    
    
}

// Hooking up our function to theme setup
add_action( 'init', 'create_post_type_events' );



// Create Post type for Menus

function create_post_type_menus() 
{
 
    register_post_type( 'menus',
    // CPT Options
        array(
            'labels'            => array(
                'name'          => __( 'Menus' ),
                'singular_name' => __( 'Menus' )
            ),
            'public'            => true,
            'has_archive'       => true,
            'rewrite'           => array('slug' => 'menus'),
            'show_in_rest'      => true,
            'supports'          => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),

           // 'capability_type'   => array( 'ivy_collection', 'ivy_collection')

 
        )
    );

    $args = array(
        'hierarchical'          => true,
        'rewrite'               => array( 'slug' => 'menu_type' ),
        'label'                 => 'Menu Type',
        
    );
    register_taxonomy( 'menu_type', 'menus', $args );

    
    
}

// Hooking up our function to theme setup
add_action( 'init', 'create_post_type_menus' );



// Create Post type for FAQ

function create_post_type_faq() 
{
 
    register_post_type( 'faq',
    // CPT Options
        array(
            'labels'            => array(
                'name'          => __( 'Faq' ),
                'singular_name' => __( 'Faq' )
            ),
            'public'            => true,
            'has_archive'       => true,
            'rewrite'           => array('slug' => 'faq'),
            'show_in_rest'      => true,
            'supports'          => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),

           // 'capability_type'   => array( 'ivy_collection', 'ivy_collection')

 
        )
    );

    $args = array(
        'hierarchical'          => true,
        'rewrite'               => array( 'slug' => 'faq_category' ),
        'label'                 => 'Faq category',
        'show_admin_column' => true,
        
    );
    register_taxonomy( 'faq_category', 'faq', $args );

    $faq_global = array(
        'hierarchical'          => true,
        'rewrite'               => array( 'slug' => 'faq_global' ),
        'label'                 => 'Global',
        'show_admin_column' => true,
        
    );
    register_taxonomy( 'faq_global', 'faq', $faq_global );

    
    
}

// Hooking up our function to theme setup
add_action( 'init', 'create_post_type_faq' );



// Create Post type for Teams

function create_post_type_teams() 
{
 
    register_post_type( 'teams',
    // CPT Options
        array(
            'labels'            => array(
                'name'          => __( 'Teams' ),
                'singular_name' => __( 'Teams' )
            ),
            'public'            => true,
            'has_archive'       => true,
            'rewrite'           => array('slug' => 'teams'),
            'show_in_rest'      => true,
            'supports'          => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),

           // 'capability_type'   => array( 'ivy_collection', 'ivy_collection')

 
        )
    );

    /*$args = array(
        'hierarchical'          => true,
        'rewrite'               => array( 'slug' => 'filter' ),
        'label'                 => 'Filter',
        
    );
    register_taxonomy( 'filter', 'events', $args );*/

    
    
}

// Hooking up our function to theme setup
add_action( 'init', 'create_post_type_teams' );

function create_post_type_bookings()
{
    //create a post type booking
    $slug = 'bills_bookings';
    register_post_type('bills_bookings', array(
            'map_meta_cap' => true, // Set to `false`, if users are not allowed to edit/delete existing posts       
            'labels' => array(
                'name'                  => esc_html__( 'Bookings','bills_bookings'),
                'singular_name'         => esc_html__( 'Booking','bills_bookings'),
                'search_items'          => esc_html__( 'Search Bookings','bills_bookings'),
                'not_found'             => esc_html__( 'No Bookings found','bills_bookings'),
                'not_found_in_trash'    => esc_html__( 'No Bookings found in Trash','bills_bookings'),
                'parent'                => esc_html__( 'Parent Bookings','bills_bookings')
            ),
            'capabilities' => array(
                'create_posts' => 'do_not_allow', // Removes support for the "Add New" function ( use 'do_not_allow' instead of false for multisite set ups )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => true),
            'supports' => array( 'title', 'custom-fields'),
            'can_export' => true,
            // 'register_meta_box_cb' => 'bills_booking_meta_boxes',
            'menu_icon'=> 'dashicons-admin-multisite'
        ) 
   );
}

add_action( 'init', 'create_post_type_bookings' );

// for Location and Restaurant

function create_location_restaurant() 
{
 
    register_post_type( 'restaurant',
    // CPT Options
        array(
            'labels'            => array(
                'name'          => __( 'Restaurant' ),
                'singular_name' => __( 'Restaurant' )
            ),
            'public'            => true,
            'has_archive'       => true,
            'rewrite'           => array('slug' => 'restaurant'),
            'show_in_rest'      => true,
            'supports'          => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
           // 'capability_type'   => array( 'ivy_collection', 'ivy_collection')

 
        )
    );

    $args = array(
        'hierarchical'          => true,
        'rewrite'               => array( 'slug' => 'location' ),
        'label'                 => 'Location',
        
    );
    register_taxonomy( 'location', 'restaurant', $args );

    $args = array(
        'hierarchical'          => true,
        'rewrite'               => array( 'slug' => 'country' ),
        'label'                 => 'Country',
        
    );
    register_taxonomy( 'country', 'restaurant', $args );

    $args = array(
        'hierarchical'          => true,
        'rewrite'               => array( 'slug' => 'region' ),
        'label'                 => 'Region',
        
    );
    register_taxonomy( 'region', 'restaurant', $args );
    
}
// Hooking up our function to theme setup
add_action( 'init', 'create_location_restaurant' );




// for Allergy

function create_location_allergy() 
{
 
    register_post_type( 'allergy',
    // CPT Options
        array(
            'labels'            => array(
                'name'          => __( 'Allergy' ),
                'singular_name' => __( 'Allergy' )
            ),
            'public'            => true,
            'has_archive'       => true,
            'rewrite'           => array('slug' => 'allergy'),
            'show_in_rest'      => true,
            'supports'          => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
           // 'capability_type'   => array( 'ivy_collection', 'ivy_collection')

 
        )
    );

 /*   $args = array(
        'hierarchical'          => true,
        'rewrite'               => array( 'slug' => 'location' ),
        'label'                 => 'Parent',
        
    );
    register_taxonomy( 'Parent', 'allergy', $args );

    $args = array(
        'hierarchical'          => true,
        'rewrite'               => array( 'slug' => 'region' ),
        'label'                 => 'Subcategory',
        
    );
    register_taxonomy( 'Subcategory', 'allergy', $args );*/
    
}
// Hooking up our function to theme setup
add_action( 'init', 'create_location_allergy' );




// for searching 
function filter_function()
{

    $category=$_POST['cat_searching'];
    // echo  $category;
    $args = array(
    'post_type' => 'resort',
    'tax_query' => array(
        'relation' => 'OR',
        array( // selects posts that are in this taxonomy
            'taxonomy' => 'location',
            'field'    => 'term_id',
            'terms'    => $category,
                ),
                
            ),
            // ... your other args.
        );
        $query = new WP_Query( $args );

           /*echo '<pre>';
           print_r( $query);
           echo '</pre>';*/
    
            if( $query->have_posts() ) :

                while( $query->have_posts() ): $query->the_post();

                     $url = wp_get_attachment_url( get_post_thumbnail_id($query->ID) );
                    //print_r( $this_file);
                    

                    echo '<h2>' . $query->post->post_title . '</h2>';

                     echo '<div><img  width="300px;" src='.$url.' /></div>'; 
                endwhile;
                wp_reset_postdata();
            else :
                echo 'No posts found';
            endif;
            
            die();
}
add_action('wp_ajax_myfilter', 'filter_function'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_myfilter', 'filter_function');

if( function_exists('acf_add_options_page') ) {
    function searchLocationAjax(){
        extract( $_POST );
		$url = 'availability/'.$hotel_id;
		$method = 'GET';   

		$payload = 'start_date_time='.$start_date.$time.'&party_size='.$party_size;
		$result = executeCurl($url,$method,$payload);
        $bills_filter_results = json_decode($result,true);
        $_SESSION['bills_filter_results'] = $bills_filter_results;
        $max_slot=count( $_SESSION['bills_filter_results']['times'] );        
        $available_time_slots= array(); 
        for($i=0;$i<$max_slot;$i++){  
            $date_time = $_SESSION['bills_filter_results']['times'][$i];
            $all_time=explode('T',$date_time);  
            $available_time_slots[]=$all_time[1];  
        }
        $all_time_slot = hoursRange( 0, 86400, 60 * 15 );


        $not_available_time_slots = array_diff($all_time_slot,$available_time_slots);
        
        $data = [
            'available_time_slots'      => $available_time_slots,
            'not_available_time_slots'  => $not_available_time_slots,
            'all_time_slot'  => $all_time_slot,
            'bills_filter_results'      => $_SESSION['bills_filter_results']
            // 'package'                   => $package
        ];
        echo json_encode( $data );

        wp_die();
    } 

}
add_action('wp_ajax_searchLocationAjax', 'searchLocationAjax'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_searchLocationAjax', 'searchLocationAjax');

if( !function_exists('bills_lock_table') ){
    function bills_lock_table()
    {
        extract($_POST);
        // echo $hotel_id;
        // echo $start_date_time;
        // echo $party_size;
        // echo $time;

       
        /*$hotel_id="334879";
        $party_size='5';*/
        $datetime=$start_date_time.$time;

        /*$start_date="2021-12-22";
        $time = "T15:30";*/

        $bills_lock_table_url="https://platform.otqa.com/booking/slot_locks";
        //echo $bills_lock_table_url;
        $ch=curl_init($bills_lock_table_url);
        curl_setopt($ch, CURLOPT_URL,$bills_lock_table_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, 
                            array(
                                'Content-Type:application/json',                       
                                'Authorization:bearer eaf02efe-87fd-4964-a233-f0f7bf7f775a'
                            )
                        );
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);        
        $data=array(
                    "party_size" =>$party_size,
                    "date_time" => $datetime,
                    "restaurant_id" => $hotel_id,
           
        );
        
        $payload = json_encode($data);
        //print_r( $data );
            
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        $result=curl_exec($ch);
        $err = curl_error($ch);    
        curl_close($ch);
        $bills_lock_table_results = json_decode($result,true);
        //print_r( $bills_lock_table_results);
        $_SESSION['bills_lock_table_results'] =$bills_lock_table_results;
        print_r($_SESSION['bills_lock_table_results']['reservation_token']);
        // print_r($_SESSION['bills_lock_table_results']);
        wp_die();

    }
}
add_action("wp_ajax_bills_lock_table", "bills_lock_table");
add_action("wp_ajax_nopriv_bills_lock_table", "bills_lock_table");

add_action("wp_ajax_bills_table_book", "bills_table_book");
add_action("wp_ajax_nopriv_bills_table_book", "bills_table_book");


    function bills_table_book()
    {
        extract( $_POST );
        //print_r($_POST);
        $reservation_token = $reservation_token;
        /*echo $first_name;
        echo $last_name;
        echo $contact;
        echo $email_address;
        echo $Surname;*/
        


        $bills_book_table_url="https://platform.otqa.com/booking/reservations";
        // echo $bills_book_table_url;
        $ch=curl_init($bills_book_table_url);
        curl_setopt($ch, CURLOPT_URL,$bills_book_table_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, 
                        array(
                            'Content-Type:application/json',                       
                            'Authorization:bearer eaf02efe-87fd-4964-a233-f0f7bf7f775a',
                            'cache-control: no-cache'
                        )
                    );  
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);        
        $data=array(
                "restaurant_id" => $hotel_id,                                               
                "reservation_token" => $reservation_token,
                "first_name" => $first_name, 
                "last_name" => $last_name, 
                "email_address" => $email_address, 
                "phone" =>   [
                             "number" => $contact, 
                             "country_code" => "US", 
                             "phone_type" => "Mobile" 
                             ],  
   
            );
        $payload = json_encode($data);

        //$payload; die();
            
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        $result=curl_exec($ch);
        $err = curl_error($ch);    
        curl_close($ch);
        echo $result;
        //$_SESSION['bills_lock_table_results'] = $result;
        wp_die();
    } 



/*if( function_exists('acf_add_options_page') ) 
{
    
    //acf_add_options_page();
    
}*/

add_action("wp_ajax_get_booking_data", "get_booking_data");
add_action("wp_ajax_nopriv_get_booking_data", "get_booking_data");

if( ! function_exists('get_booking_data') ){
    function get_booking_data(){
         extract( $_POST );
        //print_r($_POST);
         //echo $hotel_id;
         // args
         $args = array(
            'numberposts'   => -1,
            'post_type'     => 'restaurant',
            'meta_key'      => 'rid',
            'meta_value'    => $hotel_id
         );


         // query
         $the_query = new WP_Query( $args );

        if( $the_query->have_posts() ): 
            while( $the_query->have_posts() ) : $the_query->the_post(); 
                $tittle= the_title();
                  
        endwhile; 
        endif; 
        wp_reset_query();    
        echo $tittle;
        wp_die();
    }
}


add_action("wp_ajax_save_booking_data", "save_booking_data");
add_action("wp_ajax_nopriv_save_booking_data", "save_booking_data");

if( ! function_exists('save_booking_data') ){
    function save_booking_data(){
        // print_r( $_POST ); wp_die();
        $booking_id = save_hotel_booking_data();

        if( $booking_id ){
            update_post_meta( $booking_id, 'bills_booking_rid', $_POST['hotel_id']);
            update_post_meta( $booking_id, 'bills_booking_confirmation_number', $_POST['confirmation_number']);
            update_post_meta( $booking_id, 'bills_booking_party_size', $_POST['party_size']);
            update_post_meta( $booking_id, 'bills_booking_start_date_time', $_POST['start_date']);
        }else{
            $booking_id = false;
        }

        echo $booking_id;
        wp_die();
    }
}

//save booking in db
function save_hotel_booking_data(){
    global $wpdb;

    // $author_id = get_current_user_id(); 
    $names = '';        
    $title = "Booking";
    
    $post_id = wp_insert_post(
        array(
            'comment_status'    =>  'closed',
            'ping_status'       =>  'closed',
            'post_title'        =>  $title,
            'post_status'       =>  'publish',
            'post_type'         =>  'bills_bookings'
        )
    );

    if( $post_id ){
        // $_SESSION['booking_id'] = $post_id;

        $arg = array(
            'ID'           => $post_id,
            'post_title'   => '#'. $post_id .' '. $title,
        );
        wp_update_post( $arg );
        return $post_id;
    }else{
        return false;
    }
}

// Add the custom columns to the bills_bookings post type:
add_filter( 'manage_bills_bookings_posts_columns', 'set_bills_bookings_columns' );
function set_bills_bookings_columns($columns) {
    // unset( $columns['author'] );
    $columns['bills_booking_confirmation_number'] = __( 'Confirmation ID', 'Bills' );
    $columns['bills_booking_start_date_time'] = __( 'Date/Time', 'Bills' );
    $columns['bills_booking_party_size'] = __( 'Party Sizer', 'Bills' );
    $columns['bills_booking_rid'] = __( 'Hotel', 'Bills' );

    return $columns;
}


// Add the data to the custom columns for the bills_bookings post type:
add_action( 'manage_bills_bookings_posts_custom_column' , 'custom_bills_bookings_column', 10, 2 );
function custom_bills_bookings_column( $column, $post_id ) {
    switch ( $column ) {

        // case 'bills_booking_confirmation_number' :
        //     $terms = get_the_term_list( $post_id , 'book_author' , '' , ',' , '' );
        //     if ( is_string( $terms ) )
        //         echo $terms;
        //     else
        //         _e( 'Unable to get author(s)', 'your_text_domain' );
        //     break;

        case 'bills_booking_confirmation_number' :
            echo get_post_meta( $post_id , 'bills_booking_confirmation_number' , true ); 
            break;

        case 'bills_booking_start_date_time' :
            echo get_post_meta( $post_id , 'bills_booking_start_date_time' , true ); 
            break;

        case 'bills_booking_party_size' :
            echo get_post_meta( $post_id , 'bills_booking_party_size' , true ); 
            break;

        case 'bills_booking_rid' :
            echo get_post_meta( $post_id , 'bills_booking_rid' , true ); 
            break;
    }
}

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme Settings',
        'menu_title'    => 'Theme options',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
    
}


// For Load More functionality

function load_more_scripts() 
{
    wp_enqueue_script('jquery');
    wp_register_script( 'loadmore_script', get_stylesheet_directory_uri() . '/assets/js/loadmore.js', array('jquery') );
    wp_localize_script( 'loadmore_script', 'loadmore_params', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
    ) );

    wp_enqueue_script( 'loadmore_script' );
}
 
add_action( 'wp_enqueue_scripts','load_more_scripts' );


function loadmore_ajax_handler()
{
    $args['post_type'] = $_POST['type'];
    $args['paged'] = $_POST['page'] + 1;
    $args['order'] = 'ASC';
    $args['post_status'] = 'publish';
    $args['posts_per_page'] =  '8';
    $args['post__not_in'] =  explode(",", $_POST['exclude_id']);
    
    query_posts( $args );

    // print_r($args ); die();
    if( have_posts() ) :
        while(have_posts()): the_post(); ?>   
        
            <div class="col-12 col-sm-4 col-md-6 col-lg-4">
              <div class="box" style="background-color: <?php the_field('bg_color'); ?>;">
              <?php if (has_post_thumbnail( $post->ID ) ): ?>
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'bill-bookings' ); ?>
                <img src="<?php echo $image[0]; ?>" alt="" />
              <?php endif; ?>
                <div class="inner">
                  <div class="title"><?php the_title(); ?></div>
                    <?php the_excerpt(); ?>
                   <a href="<?php the_permalink(); ?>" class="btn"><span>Find Out More</span></a>
                </div>
              </div>
            </div> <?php
    endwhile;
    endif;
    die;
}
add_action('wp_ajax_loadmore','loadmore_ajax_handler');
add_action('wp_ajax_nopriv_loadmore','loadmore_ajax_handler');


// For Event & Offer filter Functionality

add_action('wp_ajax_eventSearch','eventSearch');
add_action('wp_ajax_nopriv_eventSearch', 'eventSearch');

function eventSearch()
{
    extract($_POST);
	$location = '';
	$region = '';
	
	if( isset( $location_id ) and !empty( $location_id ) )
    {
        $location =	array(
						'key' => 'location',
						'value' => $location_id,
						'compare' => '='
					);
    }
    if( isset( $region_id ) and !empty( $region_id ) )
    {
        $region = array(
					'key' => 'region',
					'value' => $region_id,
					'compare' => '='
				);
    }
    $args = array(
			'post_type'     => 'events',
			'post_status'   => 'publish',
			'meta_query' 	=> array(
								'relation' => 'AND',
								$location,
								$region,
								array(
									'key'     => 'menu_type',
									'value'   => $option,
									'compare' => '='
								), 
							)
		
		
			);
    $query = new WP_Query( $args );
    $data = "";
    if($query->have_posts() ) :
        while($query->have_posts()): $query->the_post();
            $img = "";
            if (has_post_thumbnail( get_the_ID() ) ):
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_iD() ), 'bill-bookings'  );
                $img = '<img src="'.$image[0].'" alt="" />';
            endif;
            $data .= '<div class="col-12 col-sm-4 col-md-12 col-lg-4">
              <div class="box" >
                '.$img.'
                <div class="inner">
                  <div class="title">'.get_the_title().'</div>
                    <p>'.get_the_excerpt().' </p>
                   <a href="'.get_the_permalink().'" class="btn"><span>Find Out More</span></a>
                </div>
              </div>
            </div>';
    endwhile;
    echo $data;
    else :
        echo '<div class="col-12">Events not found.</div>';
    endif;
    die();

}







// For restorent Searching 

add_action('wp_ajax_menutype_search_restorent_ajax','menutype_search_restorent_ajax');
add_action('wp_ajax_nopriv_menutype_search_restorent_ajax', 'menutype_search_restorent_ajax');

// Ajax function searching for location 
function menutype_search_restorent_ajax()
{
    //searching code here return the posts html
    extract($_POST);
    //echo $loc;

    $args = array(
    'post_type' => 'restaurant',
    'tax_query' => array(
        array(
        'taxonomy' => 'location',
        'field' => 'term_id',
        'terms' => $loc
         )
      )
    );

    //print_r($args);
    $query = new WP_Query( $args ); 
    $data = "";
    if($query->have_posts() ) :
        while($query->have_posts()): $query->the_post();
            
            
             $data.='<ul>
                <li>
                  <div class="title">'.get_the_title().'<span>0.1 miles</span></div>
                </li>
                <li>
                  <p>'.get_the_title().'</p>
                  <p>'.get_the_content().'</p>
                </li>
                <li>
                  <a href="javascript:void(0)" class="btn large"><span>View Restaurant</span></a>
                  <a href="javascript:void(0)" class="btn large full"><span>Make A Booking</span></a>
                </li>
              </ul>';
    endwhile;
    echo $data;
    else :
        echo 'Restaurant Not Found.';
    endif;
    die();

   
    
    die();

}



function my_acf_init() {
  acf_update_setting('google_api_key', 'AIzaSyCCUMqqEzDJtd0-_3Wg9vKgmhLZplIvX0E');
}
add_action('acf/init', 'my_acf_init');


function new_excerpt_length($length) 
{
      return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');

function avia_excerpt_more_change( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'avia_excerpt_more_change' );

function getLocations()
{
    // get all restaurant here with wp query
    
    $args = array(
        'post_type'     => 'restaurant',
        'post_status'   => 'publish',

    );

    $query = new WP_Query( $args );

    $locations = [];

    if($query->have_posts() ) :
        while($query->have_posts()): $query->the_post();
            $rid = get_field( 'rid', get_the_ID() );
            $locations[$rid] = get_the_title();
            // $data .= '<div class="col-12 col-sm-4 col-md-6 col-lg-4">
            //   <div class="box">
            //     '.$img.'
            //     <div class="inner">
            //       <div class="title">'.get_the_title().'</div>
            //         '.get_the_content().'
            //        <a href="'.get_the_permalink().'" class="btn"><span>Find Out More</span></a>
            //     </div>
            //   </div>
            // </div>';
    endwhile;
    endif;

    return $locations;
}


// rid = 12345

// title - SOHO

// $locations['12345' => 'SOHO' ]




add_action("wp_ajax_bills_google_api", "bills_google_api");
add_action("wp_ajax_nopriv_bills_google_api", "bills_google_api");

function bills_google_api()
{

$city=$_POST['city'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
$place_id=$_POST['place_id'];
echo $city;
echo $latitude;
echo $longitude;
echo $place_id;

$bills_google_search_url="https://maps.googleapis.com/maps/api/place/nearbysearch/json?key=AIzaSyCCUMqqEzDJtd0-_3Wg9vKgmhLZplIvX0E&radius=1500&keyword=Bill&name=Bill's&type=restaurant&location=".$latitude.",".$longitude."";

echo $bills_google_search_url;

$ch=curl_init($bills_google_search_url);
    curl_setopt($ch, CURLOPT_URL,$bills_google_search_url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, 
                    array(
                        'Content-Type:application/json',                       
                        
                    )
                );
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);        
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    $result=curl_exec($ch);
    $err = curl_error($ch);
    
    curl_close($ch);
   echo $result;
  

  }
  
  
function executeCurl($url,$method,$payload){

    if(isset($_SESSION['client_access_token'])){
    $token = $_SESSION['client_access_token'];           
    }
    else{          
    $token = 'eaf02efe-87fd-4964-a233-f0f7bf7f775a'; 
    }    
	$apiURL = "https://platform.otqa.com/";
	$apiFullURL = $apiURL.''.$url;
	if($method=='GET'){	
		$apiFullURL = $apiURL.''.$url.'?'.$payload;
	}
	$ch=curl_init($apiFullURL);
   // echo $apiFullURL;   
	curl_setopt($ch, CURLOPT_URL,$apiFullURL);
	curl_setopt($ch, CURLOPT_HTTPHEADER, 
					array(
						'Content-Type:application/json',                       
						'Authorization:bearer '.$token
					)
				);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
	if($method=='POST'){	
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
	}
	$result=curl_exec($ch);
    $bill_filter_result = json_decode($result,true);
    $error_msg = isset($bill_filter_result['errors'])?$bill_filter_result['errors']:'';
    //echo $error_msg;    
    if(!empty($error_msg)){
        client_token_gen();                                             
    }   
	$err = curl_error($ch);	
	curl_close($ch);
	return $result;
	
}		



// sunil code start here /////

add_action( 'wp_ajax_location_load_more', 'AllLocations' );
add_action( 'wp_ajax_nopriv_location_load_more', 'AllLocations' );


// For location Searching 

add_action('wp_ajax_get_location_taxonomy_ajax','AllLocations');
add_action('wp_ajax_nopriv_get_location_taxonomy_ajax', 'AllLocations');

// Ajax function searching for location 
/*  function get_location_taxonomy_ajax()
{
    //searching code here return the posts html
    extract($_POST);
	
	$Search_latitude = $_REQUEST['lat'];
    $Search_longitude = $_REQUEST['lng'];
   
   
    $terms = get_terms( array(
        'taxonomy'      => 'location',
        'hide_empty'    => false
    ) );

   

    $data = [];
    $result = [];
    if ( ! is_wp_error( $terms ) ) 
    {
        foreach ( $terms as $term ) :
            $address = get_field('address', $term);
            //print_r($address);
            if( $address['lat'] != '' and $address['lng'] != ''){
                $a[] = $term->term_id;
                $b[] = $address['lat']."##".$address['lng'];
                $c[]=array_combine($a,$b);
            } 
            // echo "<pre>"; print_r($address);
        endforeach;
    }else{
        $c[] = null;
    }
    // print_r($c);
    echo json_encode( end($c) );
    die();

}  */


function AllLocations(){ 

    global $wp_query;
	$slat = $_REQUEST['lat'];
    $slang = $_REQUEST['lng'];
    $type = $_REQUEST['type'];


	if(isset($_POST['nextCount'])){
		$nextCount = $_POST['nextCount'];
	}else{
		$nextCount = 3;
	}
    $location_terms = get_terms([
      'taxonomy' => 'location',
      'hide_empty' => false,
      'number' => $nextCount,
    ]);                             
$count = 0;
    foreach($location_terms as $terms) {
		$address = get_field('address', $terms);
		
		$laddress = get_field( 'location_address_text','location_'.$terms->term_id );
		$phone = get_field( 'location_phone_number','location_'.$terms->term_id );
		$link = get_field( 'location_link','location_'.$terms->term_id );
		$lat = $address['lat'];
		$lang = $address['lng'];
		
	  
	  
		$theta = $slang - $lang;
		$dist = sin(deg2rad($slat)) * sin(deg2rad($lat)) +  cos(deg2rad($slat)) * cos(deg2rad($lat)) * cos(deg2rad($theta));
		$dist = acos($dist);
		$dist = rad2deg($dist);
		$miles = $dist * 60 * 1.1515; 	
	  
	  // if($miles<=26){
		 //  $count = $count+1;
      ?>

        <ul>
            <li>
              <div class="title"><?php echo $terms->name ?><span><?php echo round($miles); ?> miles</span></div>
            </li>
            <li>
              <p><?php echo $laddress; ?></p>
              <p><?php echo $phone; ?></p>
             
            </li>
            <li>
              <a href="<?php echo get_term_link($terms->slug, 'location'); ?>" class="btn large"><span>View Restaurant</span></a>
              <a href="javascript:void(0)" class="btn large full" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable"><span>Make A Booking</span></a>
            </li>
        </ul>
    <?php } /* }
	
		if($count==0){ ?>
			
			<div>No Result Found</div>
			
		<?php	
		} */
	
	
	die;
}

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');


function hoursRange( $lower = 0, $upper = 86400, $step = 3600, $format = '' ) {
    $times = array();

    if ( empty( $format ) ) {
        $format = 'g:i a';
    }

    foreach ( range( $lower, $upper, $step ) as $increment ) {
        $increment = gmdate( 'H:i', $increment );

        list( $hour, $minutes ) = explode( ':', $increment );

        $date = new DateTime( $hour . ':' . $minutes );

        $times[(string) $increment] = (string) $increment;
    }
	$res = array_values($times);

    return $res;
}



/*add_action( 'wp_ajax_Shortcode', 'Shortcode' );
add_action( 'wp_ajax_nopriv_Shortcode', 'Shortcode' );
function Shortcode() {
    echo do_shortcode('[fdm-menu id='.$_REQUEST[shortcode].' show_title=0 show_content=0]') ;
    die();
}*/

//client token generate for open table booking process
add_action("wp_ajax_bills_client_token_gen", "client_token_gen");
add_action("wp_ajax_nopriv_client_token_gen", "client_token_gen");

    function client_token_gen()
    {

        $client_token_url = constant("CLIENT_TOKEN_URL");
        $client_secret = constant("CLIENT_TOKEN_SECRET");
        $client_id = 'cpa_6094';
        $auth_client_token = base64_encode($client_id.':'.$client_secret);
        $bearer= "basic "."$auth_client_token";
        $ch=curl_init($client_token_url);
        curl_setopt($ch, CURLOPT_URL,$client_token_url);        
        curl_setopt($ch, CURLOPT_HTTPHEADER, 
                        array(
                            'Content-Type:application/json',                       
                            'Authorization:'.$bearer                            
                        )
                    );  
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);        
        curl_setopt($ch, CURLOPT_POSTFIELD);
        $result=curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
        $doc_result = json_decode($result,true);
        //print_r($doc_result);
        $client_access_token = $doc_result['access_token']; 
        $_SESSION['client_access_token'] = $client_access_token; 
        echo $client_access_token;     
        return $client_access_token;       
    } 

