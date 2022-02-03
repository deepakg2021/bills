<?php
/*
* Theme Functions File
*/
function Bills_theme_setup() 
{
    
    add_theme_support('custom-logo');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_image_size ('home-featured', 680, 400, array('center', 'center'));
    add_image_size ('single-post', 580, 272, array('center', 'center'));
    add_image_size ('portfolio-thumb', 374, 260, array('center', 'center'));

    add_theme_support('automatic-feed-links');

    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'Bills' )
    ) );
    
};
add_action('after_setup_theme', 'Bills_theme_setup');

function Bills_scripts()
{
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
    wp_enqueue_style('bootstrup', get_template_directory_uri(). '/assets/css/bootstrap.min.css');
    wp_enqueue_style('datepicker-css', get_template_directory_uri(). '/assets/css/datepicker.css');
    wp_enqueue_style('style', get_stylesheet_uri());
   /* wp_enqueue_script('jquery', get_template_directory_uri(). '/assets/js/jquery-1.12.4.js');*/
     wp_enqueue_script('bootstrap', get_template_directory_uri(). '/assets/js/bootstrap.min.js');
    wp_enqueue_script('datepicker-js', get_template_directory_uri(). '/assets/js/bootstrap-datepicker.js');
    wp_enqueue_script('searching', get_template_directory_uri(). '/assets/js/Filter.js');

    wp_enqueue_script('api', get_template_directory_uri(). '/assets/js/api.js');
    
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


// Create Post type for Menu

function create_post_type_menu() 
{
 
    register_post_type( 'menu',
    // CPT Options
        array(
            'labels'            => array(
                'name'          => __( 'Menu' ),
                'singular_name' => __( 'Menu' )
            ),
            'public'            => true,
            'has_archive'       => true,
            'rewrite'           => array('slug' => 'menu'),
            'show_in_rest'      => true,
            'supports'          => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),

           // 'capability_type'   => array( 'ivy_collection', 'ivy_collection')

 
        )
    );

    $args = array(
        'hierarchical'          => true,
        'rewrite'               => array( 'slug' => 'category' ),
        'label'                 => 'Category',
        
    );
    register_taxonomy( 'category', 'menu', $args );

    
    
}

// Hooking up our function to theme setup
add_action( 'init', 'create_post_type_menu' );

// Create Post type Events

/*function create_post_type_events() 
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

}
// Hooking up our function to theme setup
add_action( 'init', 'create_post_type_events' );*/


// Create Post type Offers

/*function create_post_type_offers() 
{
 
    register_post_type( 'offers',
    // CPT Options
        array(
            'labels'            => array(
                'name'          => __( 'Offers' ),
                'singular_name' => __( 'Offers' )
            ),
            'public'            => true,
            'has_archive'       => true,
            'rewrite'           => array('slug' => 'offers'),
            'show_in_rest'      => true,
            'supports'          => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
           // 'capability_type'   => array( 'ivy_collection', 'ivy_collection')

 
        )
    );

}
// Hooking up our function to theme setup
add_action( 'init', 'create_post_type_offers' );*/


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

if( function_exists('acf_add_options_page') ) 
{
    
    //acf_add_options_page();
    
}


if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
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
    wp_register_script( 'loadmore_script', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery') );
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
    $args['post_status'] = 'publish';
    $args['posts_per_page'] =  $_POST['limit'];
    
    query_posts( $args );

    //print_r($args );
    if( have_posts() ) :
        while(have_posts()): the_post(); ?>   
        
            <div class="col-12 col-sm-4 col-md-6 col-lg-4">
              <div class="box">
              <?php if (has_post_thumbnail( $post->ID ) ): ?>
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                <img src="<?php echo $image[0]; ?>" alt="" />
              <?php endif; ?>
                <div class="inner">
                  <div class="title"><?php the_title(); ?></div>
                    <?php the_content(); ?>
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


// For searching Functionality

add_action('wp_ajax_menutype_search_ajax','menutype_search_ajax');
add_action('wp_ajax_nopriv_menutype_search_ajax', 'menutype_search_ajax');

// Ajax function searching menutype
function menutype_search_ajax()
{
    //searching code here return the posts html
    extract($_POST);
    // restaurant_id
    // region_id

     print_r($allergy);
    // option
    $args = array(
        'post_type'     => 'menu',
        'post_status'   => 'publish',
    );



    $args['meta_query'] = array( 'relation'=>'AND' ); 

    $args['meta_query'] = array(
        array(
            'key'     => 'menu_type',
            'value'   => $option,
            'compare' => '='
        )
    );*/

    //if region_id isset
    if( isset( $region_id ) and !empty( $region_id ) ){
        $args['meta_query'][] = array(
            array(
            'key' => 'location',
            'value' => $region_id,
            'compare' => '='
            )
        );
    }

    //if restaurant_id isset
    if( isset( $restaurant_id ) and !empty( $restaurant_id ) ){
        $args['meta_query'][] = array(
            array(
            'key' => 'restaurant',
            'value' => $restaurant_id,
            'compare' => '='
            )
        );
    }

    //if allergy isset
   /* if( isset( $allergy ) and !empty( $allergy ) )
    {
        $args['meta_query'][] = array(
            array(
            'key' => 'allergy',
            'value' =>serialize($allergy), 
            'compare' => '='
            )
        );
    }*/
    /*echo '<pre>'; 
    print_r( $args );*/
    $query = new WP_Query( $args );
    /*echo '<pre>'; 
    print_r( $query );*/
    $data = "";
    if($query->have_posts() ) :
        while($query->have_posts()): $query->the_post();
            $img = "";
            if (has_post_thumbnail( get_the_ID() ) ):
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_iD() ), 'full' );
                $img = '<img src="'.$image[0].'" alt="" />';
            endif;
            $data .= '<div class="col-12 col-sm-4 col-md-6 col-lg-4">
              <div class="box">
                '.$img.'
                <div class="inner">
                  <div class="title">'.get_the_title().'</div>
                    '.get_the_content().'
                   <a href="'.get_the_permalink().'" class="btn"><span>Find Out More</span></a>
                </div>
              </div>
            </div>';
    endwhile;
    echo $data;
    else :
        echo 'No posts found';
    endif;
    die();

}

















































